<html>
<head>
	<meta charset='UTF-8' />
	<link rel='stylesheet' type='text/css' href='style.css'  />
    <script  src="../common/lm/jquery.js"></script>
    <script  src="../common/lm/colResizable-1.3.min.js"></script>
</head>
<body>
<?php
$tablename=$_REQUEST['table'];
$action=$_REQUEST['action'];
$global_table_name=$tablename;
//echo $tablename;
// enter your database host, name, username, and password

header('Content-Type: text/html; charset=utf-8');

include('lazy_mofo.php');

$db_host = 'localhost';
$db_name = 'eb';
$db_user = 'root';
$db_pass = '';

// connect with pdo 
try {
	$dbh = new PDO("mysql:host=$db_host;dbname=$db_name;", $db_user, $db_pass);
}
catch(PDOException $e) {
	die('pdo connection error: ' . $e->getMessage());
}

// create LM object, pass in PDO connection
$lm = new lazy_mofo($dbh); 


// table name for updates, inserts and deletes
$lm->table = $tablename;

// identity / primary key for table
if(strtolower(substr($lm->table,0,5))=="code_")
{
	$lm->identity_name = 'id';
}
else if(strtolower(substr($lm->table,0,3))=="lo_")
{
	$lm->identity_name = 'id';
}
else 
{
	$lm->identity_name = 'id';
}

$rel_parents=array();
$rel_columns=array();
$rel_tables=array();

//if($action=='edit' || $action=='insert')
{
	$sSQL="SHOW COLUMNS FROM $tablename";
	$result=$lm->query($sSQL);
	//$result=mysql_query($sSQL) or die("error:".mysql_error());
	foreach($result as $row)
	{
		$column_name=($row['Field']);

		if($row['Null']=="NO")
			$lm->required[$column_name]="*";

		if($row['Type']=="datetime")
		{
			$lm->form_input_control[$column_name]="--datetime";
			$lm->grid_input_control[$column_name]="--datetime";
		}
		else if($row['Type']=="date")
		{
			$lm->form_input_control[$column_name]="--date";
			$lm->grid_input_control[$column_name]="--date";
		}
		else if($row['Type']=="bit" || $row['Type']=="tinyint(1)" || (strtoupper($column_name)=="ACTIVE"))
		{
			$lm->form_input_control[$column_name]="--checkbox";
			$lm->grid_input_control[$column_name]="--checkbox";
		}
		else if(strtoupper($column_name)=="ID")
		{
			//$lm->form_input_control[$column_name]="--hidden";
		}
		else
			$lm->grid_input_control[$column_name]="--text";
		if($row['Key']=='MUL') // || $row['Key']=='UNI')
		{
			$s2="SELECT REFERENCED_COLUMN_NAME, REFERENCED_TABLE_NAME
					FROM information_schema.KEY_COLUMN_USAGE
					WHERE TABLE_NAME = '$tablename'
					and COLUMN_NAME='$column_name' and REFERENCED_COLUMN_NAME is not null and REFERENCED_TABLE_NAME is not null";
			$ret2=$lm->query($s2);
			if($r2=$ret2[0])//mysql_fetch_array($ret2))
			{
				$ref_table=$r2['REFERENCED_TABLE_NAME'];

				$rel_tables[$ref_table]=$column_name;
				$rel_column="parent_id";

				$rel_sql="SELECT count(1) p_count from information_schema.columns where table_name='$ref_table' and column_name='$rel_column'";
				$rel_result=$lm->query($rel_sql);
				$rel_r=$rel_result[0];

				if($rel_r[p_count]==1)
				{
					$rel_s2="SELECT REFERENCED_COLUMN_NAME, REFERENCED_TABLE_NAME
							FROM information_schema.KEY_COLUMN_USAGE
							WHERE TABLE_NAME = '$ref_table'
							and COLUMN_NAME='$rel_column' and REFERENCED_COLUMN_NAME is not null and REFERENCED_TABLE_NAME is not null";
					$rel_ret2=$lm->query($rel_s2);
//echo $rel_s2;
					if($rel_r2=$rel_ret2[0])
					{
						array_push($rel_columns, $column_name);
						$rel_parents[$column_name]=$ref_table."$$".$rel_tables[$rel_r2[REFERENCED_TABLE_NAME]];
					}
				}
				//else
				{
					$s_where="";
					$s_order="";
					if(strtolower(substr($ref_table,0,5))=='code_')
					{
						$s_where='where active=1';
						$s_order='order by `order`,`id`';
					}
					$lm->form_input_control[$column_name]= "select $r2[REFERENCED_COLUMN_NAME], `name` from `$ref_table` $s_where $s_order ; --select".($row['Null']=="YES"?"":"#");
					$lm->grid_input_control[$column_name]= "select $r2[REFERENCED_COLUMN_NAME], `name` from `$ref_table` $s_where $s_order ; --select".($row['Null']=="YES"?"":"#");
				}
			}
		}
	}
}

// optional, define grid sort order
//$lm->grid_default_order_by = 'object_name';


// optional, make friendly names for fields
//$lm->rename = array('country_id' => 'Country');


// optional, define input controls on the form
//$lm->form_input_control = array('photo' => '--image', 'is_active' => '--checkbox', 'country_id' => 'select country_id, country_name from country; --select');


// optional, define editable input controls on the grid
//$lm->grid_input_control = array('is_active' => '--checkbox');


// optional, define output control on the grid; make email clickable and the photo a clickable link
//$lm->grid_output_control = array('contact_email' => '--email', 'photo' => '--image');


// optional, query for grid(). if the last column selected is the primary key identity, then the [edit] and [delete] links are displayed
//$lm->grid_sql = "select m.market_id, m.market_name, m.photo, m.contact_email, c.country_name, m.is_active, m.create_date, m.notes, market_id from market m left join country c on m.country_id = c.country_id order by m.market_id desc";


// optional, define what is displayed on edit form
//$lm->form_sql = 'select market_id, market_name, country_id, photo, contact_email, is_active, create_date, notes from market where market_id = :market_id';
//$lm->form_sql_param = array(':market_id' => intval(@$_REQUEST['market_id']));

/*
// optional, display a related table under the edit record form
$lm->child_title = 'Sub Markets';
$lm->child_table = 'sub_market';
$lm->child_identity_name = 'sub_market_id';
$lm->child_parent_identity_name = 'market_id';
$lm->child_input_control = array('photo' => '--image');
*/

// use the lm controller
$lm->run();
//if($action=='edit' || $action=='insert')
{
?>
<link rel="stylesheet" href="../common/css/jquery-ui.css" />
	<script src="../common/js/jquery-ui.js"></script>

		<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="js/jquery-ui-sliderAccess.js"></script>
 <script src="../common/utils.js"></script>
<script>
function saveChanges()
{
	$("#button_save_changes").click();
}
function addRecord()
{
	var href = $('.lm_grid_add_link').attr('href');
	if(href)
		window.location.href = href; //causes the browser to refresh and load the requested url
}
  $(function() {
		$( ".lm_date_select" ).datepicker({
		    changeMonth:true,
		     changeYear:true,
		     dateFormat:"mm/dd/yy"
		});

$(".lm_datetime_select").datetimepicker();

		$("#lm_grid").colResizable({
			liveDrag:true, 
			gripInnerHtml:"<div class='grip'></div>", 
			draggingClass:"dragging"
			});
		$("#lm_grid").wrap("<div id='par' style='width:"+($("#lm_grid").width()+10)+"px'></div>");

  });
<?php
foreach($rel_columns as $rel_col)
{
	$rel_cols=explode("$$",$rel_parents[$rel_col]);
	echo <<<EOT
$("#$rel_cols[1]").change(function(e){
	postRequest( 
	             "../common/getcodelist.php",
	             {table:"$rel_cols[0]",id:"",parent_field:"parent_id",parent_value:$(this).val()},
	             function(data) {
	             	$('#$rel_col').html(data);
	             	$('#$rel_col').change();
	             }
	          );
});
$("#$rel_cols[1]-1").change(function(e){
	postRequest( 
	             "../common/getcodelist.php",
	             {table:"$rel_cols[0]",id:"",parent_field:"parent_id",parent_value:$(this).val()},
	             function(data) {
	             	$('#$rel_col-1').html(data);
	             	$('#$rel_col-1').change();
	             }
	          );
});
EOT;
}
?>
  </script>
<?php
}
?>
</body>
</html>