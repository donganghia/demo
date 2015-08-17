<?php
//include_once('../lib/db.php');
$current_username = null;
$is_logged_in = null;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Energy Builder</title>
        <meta charset="UTF-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Creative CSS3 Animation Menus" />
        <meta name="keywords" content="menu, navigation, animation, transition, transform, rotate, css3, web design, component, icon, slide" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/style8.css" />
		<link rel="stylesheet" href="../css/hexagon.css?r=2">
		<link rel="stylesheet" href="../index.htm_files/css3menu0/style.css" type="text/css" />
		
        <link href='../common/css/css.css' rel='stylesheet' type='text/css' />			<!--http://fonts.googleapis.com/css?family=Terminal+Dosis-->
    <script src="../common/js/jquery-1.9.1.js"></script> 

	  	<link rel="stylesheet" href="../common/css/reveal.css">
		<script type="text/javascript" src="../common/js/jquery.reveal.js"></script>

</head>
    <body style="background:url('../img/bg.png')">

<div id="myModal" class="reveal-modal" data-reveal>
  <h2>Awesome. I have it.</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
  <a class="close-reveal-modal">&#215;</a>
</div>

    <div id="boxUserInfo" style="display:<?php echo($current_username?"":"none") ?>;position:absolute;right:30px;top:30px;width:350px;height:30px;padding:10px;text-align:right;border:0px solid #888;color:#ccc">
<font color="#888">user</font> <b><a href="#"><span id="textUsername"><?php echo $current_username; ?></span></a></b>
&nbsp;&nbsp;| &nbsp;&nbsp;<a href="javascript:logout()">log out</a>
</div>
<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table2" height="100%">
	<tr>
		<td height="120" valign="top">
		<div id="pageheader">
			<div id="hex_logo">
<div style="display:none;position: absolute; width: 56px; height: 54px; z-index: 1; left:470px;top:443px" id="bee">
					<img border="0" src="../img/bee.png"></div>						
				<img border="0" src="../img/eb2.png" >
				<div style="display:none;position: absolute; width: 78px; height: 26px; z-index: 1; left: 76px; top: 187px" id="menu_holder">
<ul id="css3menu0" class="topmenu">
	<li class="topmenu"><a href="#" style="width:30px;height:10px;line-height:10px;"><p align=center>...</p></a>
<?php
//include('../home/menu_functions.php');
?>
	</li>
</ul>
			</div>
			</div>
			<p></div>
		</td>
	</tr>
	<tr>
		<td valign="top">
		<div id="poweredBy">	

	<div class="hex" style="background:#ffffff">		
		<div class="inner" style="color:#333">
		Powered by<br>
		<img width="120" src="../img/eDataViz_logo%20copy.png" alt="eDataViz">
		</div>		
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
			<p>&nbsp;</div>
&nbsp;</td>
	</tr>
</table>
<div class="hex_container" style="z-index:100" id="boxLogin">
	<div class="hex_disabled hex-gap" id="cell1">		
		<div class="inner">
		</div>		
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>
	
	<div class="hex_disabled" id="cell2">		
		<div class="inner">
		</div>		
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>


	<div class="hex_disabled" id="cell3">		
		<div class="inner">
		</div>		
		<a href="../diagram/index.htm"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex_disabled" id="cell7">		
		<div class="inner">
		</div>		
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex_disabled" style="background:#666">		
		<div class="inner">
		<h4>Username</h4>
		<input class="r_textbox" type="text" style="width:120px;" id="username" name="username" value="" />
		<div style="margin-left:13px;width:120px;height:3px;border:1px solid #d08924;border-top:none"></div>
		</div>		
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex_disabled" style="background:#666">		
		<div class="inner">
		<h4>Password</h4>
		<input class="r_textbox" type="password" style="width:120px;" value="" id="password" name="password" />
		<div style="margin-left:13px;width:120px;height:3px;border:1px solid #d08924;border-top:none"></div>
		</div>		
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex_disabled" id="cell4">		
		<div class="v_top">
		</div>		
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex_disabled hex-gap" id="cell6">		
		<div class="inner">
		</div>		
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	
	<div class="hex hex-login">		
		<div class="inner">
<div style="position: absolute; width: 100px; height: 100px; z-index: 200; left:57px;top:61px">
					<img border="0" src="../img/bee.png"></div>		
				<h4>LOG IN</h4>
		</div>		
		<a href="javascript:login()"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>

	
	<div class="hex_disabled" id="cell5">		
		<div class="inner">
		</div>		
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
</div>
<div class="hex_container" style="display:none" id="boxMenu">
	<div class="hex_disabled hex-gap" id="menuName">		
		<div class="inner">
		<h4>MENU NAME</h4>
		</div>		
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>
	
	<div class="hex hex-1" id="menu4">		
		<div class="inner">
		<h4>MENU 6</h4>
		</div>
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>

	<div class="hex hex-1" id="menu3">		
		<div class="inner">
		<h4>MENU 5</h4>
		</div>
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex hex-1" id="menu7">		
		<div class="inner">
		<h4>MENU 7</h4>
		</div>
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex hex-1" id="menu0">		
		<div class="inner">
		<h4>MENU 0</h4>
		</div>		
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex hex-1" id="menu1">		
		<div class="inner">
		<h4>MENU 1</h4>
		</div>		
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex hex-1" id="menu2">		
		<div class="inner">
		<h4>MENU 2</h4>
		</div>		
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex hex-3 hex-gap" id="menuBack" code="back">		
		<div class="inner">
		<h4><img src='../img/back.png' style="vertical-align:middle"> &nbsp;&nbsp;BACK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
		</div>		
		<a href="#" onclick="func(this)"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex hex-1" id="menu6">		
		<div class="inner">
		<h4>MENU 4</h4>
		</div>		
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex hex-1" id="menu5">		
		<div class="inner">
		<h4>MENU 3</h4>
		</div>		
		<a href="#"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>
	
</div>
<div class="hex_container" style="display:none" id="boxFunctions">
	<div class="hex hex-1 hex-gap" id="func1" code="production">		
		<div class="inner">
				<h4>PRODUCTION<br>MANAGEMENT </h4>
		</div>		
		<a href="#" onclick="func(this)"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>
	
	<div class="hex hex-2" id="func2" code="operation">		
		<div class="inner">
				<h4>FIELD<br>OPERATIONS</h4>
		</div>		
		<a href="#" onclick="func(this)"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>


	<div class="hex hex-3" id="func3" code="visual">		
		<div class="inner">
				<h4>DATA<br>VISUALIZATION</h4>
<!--				
				<hr>
				<p>We Open Everyday</p>
-->				
		</div>		
		<a href="#" onclick="func(this)"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex hex-2" id="func4" code="allocation">		
		<div class="inner">
		<h4>ALLOCATION</h4>
		</div>		
		<a href="#" onclick="func(this)"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex_disabled" id="func5" code="forecast">		
		<div class="inner">
		<h4 style="color:gray">FORECAST & PLANNING </h4>
		</div>		
		<a href="#" onclick="func(this)"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex hex-1" id="func6" code="delivery">		
		<div class="inner">
		<h4>PRODUCT<br>DELIVERY</a></h4>
		</div>		
		<a href="#" onclick="func(this)"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex_disabled" id="func7" code="greenhouse">		
		<div class="inner">
		<h4 style="color:gray">GREENHOUSE<br>GAS</h4>
		</div>		
		<a href="#" onclick="func(this)"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex hex-1 hex-gap" id="func8" code="admin">		
		<div class="inner">
		<h4>ADMINISTRATOR</h4>
		</div>		
		<a href="#" onclick="func(this)"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex hex-2" code="config">		
		<div class="inner">
		<h4>SYSTEM<br>CONFIGURATION</h4>
		</div>		
		<a href="#" onclick="func(this)"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>	
	
	<div class="hex hex-3" code="interface">		
		<div class="inner">
				<h4>INTERFACES</h4>
		</div>		
		<a href="#" onclick="func(this)"></a>
		<div class="corner-1"></div>
		<div class="corner-2"></div>		
	</div>
	
</div>
<script>
function logout()
{
	window.location.href="../logout";
}
var is_logging_in=false;
function login()
{
	if(!$('#username').val())
	{
		alert('Please input username');
		$('#username').select();
		$('#username').focus();
		return;
	}
	if(!$('#password').val())
	{
		alert('Please input password');
		$('#password').select();
		$('#password').focus();
		return;
	}
is_logging_in=true;
randomCell();
    $.ajax({
        type: "POST",
        url: "{{ URL::to('home/login') }}",
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: { username: $('#username').val(),password:$('#password').val() },
        success: function(data) {
            is_logging_in=false;
            if(data=="ok")
            {
                                    if(_redirect) 
                                            window.location.href=_redirect;
                                    else
                                    {
                                            layoutUserLoggedIn(true);
                                            $('#textUsername').html($('#username').val());
                                            $('#boxUserInfo').show();
                                    }
                            }
            else
                    alert(data);
        },
        error: function() {
            alert('Error');
        }
    });
//$.post( 
//             "../lib/login.php",
//             { username: $('#username').val(),password:$('#password').val() },
//             function(data) {
//				is_logging_in=false;
//                if(data=="ok")
//                {
//					if(_redirect) 
//						window.location.href=_redirect;
//					else
//					{
//						layoutUserLoggedIn(true);
//						$('#textUsername').html($('#username').val());
//						$('#boxUserInfo').show();
//					}
//				}
//                else
//                	alert(data);
//             }
//
//          );
}

	var curCell=0;
	function randomCell()
	{
		if(curCell>0)
		{
			$( "#cell"+curCell ).css('background-color', '#ccc');
		}
		if(!is_logging_in) { return; }
		curCell++; if(curCell>7) curCell=1;
		$( "#cell"+curCell ).css('background-color', '#d08924');
/*
		$( "#cell"+curCell ).animate({
		backgroundColor: "#aaa"
		}, 200 );
*/
		setTimeout('randomCell()',200);
	}

$('#username').select();
$('#username').focus();
$("#password").keyup(function(e){ 
    var code = e.which; // recommended to use e.which, it's normalized across browsers
    if(code==13)e.preventDefault();
    if(code==32||code==13||code==188||code==186){
        login();
    } 
});

function layoutUserLoggedIn(ani)
{
	$("#boxFunctions").show();
	$("#boxLogin").hide();
	//$("#menu_holder").show();
	$("#bee").show();
	if(ani)
	{
		$( "#bee" ).stop().animate({
				left: "-=875",
				top: "-=900"
			}, 2000, function() { //animation complete, then rotate
				$("#bee").animate(
				  {rotation:90},
				  {
				    duration: 1000,
				    step: function(now, fx) {
				      $(this).css({"transform": "rotate("+now+"deg)"});
				    }
				  }
				);					
			});
	}
	else
		$( "#bee" ).hide();
	//	$( "#bee" ).css({"top": 3, "left": 55,"transform":"rotate(90deg)" });
}
function layoutUserLoggedOut()
{
	window.location.reload();
	return;
	$("#boxLogin").show();
	$("#menu_holder").hide();
	$("#bee").hide();
	$("#bee").css({top: 443, left: 470,rotation:0});
}
var menuBox;
var menu={};
menu["production"]=[
		{menutext:"Flow Stream",desc:"",url:"../dc/flow.php"},
		{menutext:"Energy Unit",desc:"",url:"../dc/eu.php"},
		{menutext:"Tank & Storage",desc:"",url:"../dc/storage.php"},
		{menutext:"EU Test",desc:"",url:"../dc/eutest.php"},
		{menutext:"Deferment",desc:"",url:"../dc/deferment.php"},
		{menutext:"Quality",desc:"",url:"../dc/quality.php"}
	];
menu["operation"]=[
		{menutext:"Safety",desc:"",url:"../dc2/safety.php"},
		{menutext:"Comments",desc:"",url:"../dc2/comment.php"},
		{menutext:"Equipment",desc:"",url:"../dc2/equipment.php"},
		{menutext:"Chemical",desc:"",url:"../dc2/chemical.php"},
		{menutext:"Personnel",desc:"",url:"../dc2/personnel.php"}
	];
menu["visual"]=[
		{menutext:"Network Model",desc:"",url:"../diagram"},
		{menutext:"Data Plotting",desc:"",url:"../graph"},
		{menutext:"Data View",desc:"",url:"../view"},
		{menutext:"Report",desc:"",url:"../report"},
		{menutext:"Advanced Graph",desc:"",url:"../delivery/advgraph.php"}
	];
menu["allocation"]=[
		{menutext:"Production Allocation",desc:"",url:"../ce/?act=allocset"}
	];
menu["forecast"]=[
	];
menu["delivery"]=[
		{menutext:"CONTRACT ADMIN",desc:"",url:"../pd/?func=contract_admin"},
		{menutext:"CARGO ADMIN",desc:"",url:"../pd/?func=cargo_admin"},
		{menutext:"CARGO ACTION",desc:"",url:"../pd/?func=cargo_action"},
		{menutext:"CARGO MANAGEMENT",desc:"",url:"../pd/?func=cargo_management"},
		{menutext:"CARGO MONITORING",desc:"",url:"../pd/?func=cargo_monitoring"},
//		{menutext:"VOYAGE GROUND",desc:"",url:"../pd/?func=voyageground"},
//		{menutext:"VOYAGE PIPELINE",desc:"",url:"../pd/?func=voyagepipeline"}
	];
menu["greenhouse"]=[
	];
menu["admin"]=[
		{menutext:"VALIDATE DATA",desc:"",url:"../admin/validatedata.php"},
		{menutext:"APPROVE DATA",desc:"",url:"../admin/approvedata.php"},
		{menutext:"LOCK DATA",desc:"",url:"../admin/datalocking.php"},
		{menutext:"ROLES",desc:"",url:"../admin/roles.php"},
		{menutext:"USERS",desc:"",url:"../admin/users.php"},
		{menutext:"Audit Trail",desc:"",url:"../admin/audittrail.php"}
	];
menu["config"]=[
		{menutext:"Fields Config",desc:"",url:"../cf"},
		{menutext:"Tables Data",desc:"",url:"../config"},
		{menutext:"Tags Mapping",desc:"",url:"../config/tagsmapping.php"},
		{menutext:"Formula Editor",desc:"",url:"../formula"}
	];
menu["interface"]=[
		{menutext:"Import",desc:"Import Tags Spreadsheet",url:"../interface/import.php"},
		{menutext:"Upload",desc:"Upload Tags Spreadsheet",url:"../interface/upload.php"}
	];
function func(o)
{
	var menuID=$(o).parent().attr("code");
	if(menuID=='back')
	{
		$( "#boxFunctions" ).fadeIn( 500, function() {
			//$( "span" ).fadeIn( 100 );
		});
		$( "#boxMenu" ).fadeOut( 500, function() {
			//$( "span" ).fadeIn( 100 );
		});
		//$("#boxMenu").hide();
		//$("#boxFunctions").show();
		return;
	}
	var a=menu[menuID];
	if(a.length==0)
	{
		//alert("This function is not available");
		//$('#myModal').foundation('reveal', 'open');
	}
	//else if(a.length==1)
	//	document.location.href=a[0]["url"];
	else
	{
		$("#menuName h4").html($(o).parent().find("h4").html());
		var i;
		for(i=0;i<a.length;i++)
		{
			$("#menu"+i+" h4").html(a[i]["menutext"].toUpperCase());
			$("#menu"+i+" a").attr("href",a[i]["url"]);
			$("#menu"+i).attr("class",$("#menu"+i).attr("old_class"));
			$("#menu"+i).css("opacity",1);
		}
		for(i=a.length;i<8;i++)
		{
			//$("#menu"+i).hide();
			$("#menu"+i+" h4").html("");
			$("#menu"+i+" a").attr("href","#");
			$("#menu"+i).attr("class","hex_dim");
			$("#menu"+i).css("opacity",0.5);
		}
		
		$( "#boxFunctions" ).fadeOut( 500, function() {
			//$( "span" ).fadeIn( 100 );
		});
		$( "#boxMenu" ).fadeIn( 500, function() {
			//$( "span" ).fadeIn( 100 );
		});
		//$("#boxMenu").show();
		//$("#boxFunctions").hide();
	}
}
$("#boxMenu").children().each(function(){
	$(this).attr("old_class",$(this).attr("class"));
	//alert($(this).attr("old_class"));
});

<?php
if($is_logged_in)
{
	echo "layoutUserLoggedIn();";
}

//echo "\r\nvar _redirect='".($_REQUEST['redirect']?base64_decode($_REQUEST['redirect']):"")."';";
?>
	</script>
        
    </body>
</html>