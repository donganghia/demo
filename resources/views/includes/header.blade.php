<?php
//include_once('../lib/db.php');
?>
<!--<head>
<link rel="stylesheet" href="../index.htm_files/css3menu0/style.css" type="text/css" />
</head>-->

<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table3">
	<tr>
		<td style="border-bottom:1px solid #000000" height="100" bgcolor="#666">
<div style='position:absolute;display:;top:10px;right:10px;font-family:Arial;font-size:10pt;overflow:hidden;padding:3px 10px 3px 10px;background:#555555;border:1px solid #505050;border-radius:5px;color:#bbbbbb;font-size:10pt'>
user <font color="#3e8ed7"><?php //echo $current_username; ?></font> &nbsp;|&nbsp; <div style="display:none;width:50px;cursor:pointer;padding:2px;color:#3e8ed7;margin:2px;font-size:8pt">Alert: 0</div>
<a style="color:#3e8ed7;text-decoration:none" href="../logout">logout</a>
</div>
	<div style="position: absolute; height: 32px; z-index: 1; left:350px; top:43px" id="submenu">
<?php
//$menu=$_REQUEST[menu];
$menu = 'delivery';
if($menu=='dc')
{
?>
	<ul id="css3menu0" class="topmenu">
	<li class="topmenu"><a href="../dc/flow.php" style="height:21px;line-height:21px;">Flow Stream</a></li>
	<li class="topmenu"><a href="../dc/eu.php" style="height:21px;line-height:21px;">Energy Unit</a></li>
	<li class="topmenu"><a href="../dc/storage.php" style="height:21px;line-height:21px;">Storage</a></li>
	<li class="topmenu"><a href="../dc/eutest.php" style="height:21px;line-height:21px;">&nbsp;&nbsp;Test</a></li>
	<li class="topmenu"><a href="../dc/deferment.php" style="height:21px;line-height:21px;">Deferment</a></li>
	<li class="topmenu"><a href="../dc/quality.php" style="height:21px;line-height:21px;">&nbsp;Quality</a></li>
	</ul>
<?php
}
else if($menu=='dc2')
{
?>
	<ul id="css3menu0" class="topmenu">
	<li class="topmenu"><a href="../dc2/safety.php" style="width:43px;height:21px;line-height:21px;">Safety</a></li>
	<li class="topmenu"><a href="../dc2/comment.php" style="height:21px;line-height:21px;">Comments</a></li>
	<li class="topmenu"><a href="../dc2/equipment.php" style="height:21px;line-height:21px;">Equipment</a></li>
	<li class="topmenu"><a href="../dc2/chemical.php" style="height:21px;line-height:21px;">Chemical</a></li>
	<li class="topmenu"><a href="../dc2/personnel.php" style="height:21px;line-height:21px;">Personnel</a></li>
	</ul>
<?php
}
else if($menu=='config')
{
?>
	<ul id="css3menu0" class="topmenu">
	<li class="topmenu"><a href="../cf" style="height:21px;line-height:21px;">
	FIELDS CONFIG</a></li>
	<li class="topmenu"><a href="../config" style="height:21px;line-height:21px;">
	TABLES DATA</a></li>
	<li class="topmenu"><a href="../configpd" style="height:21px;line-height:21px;">
	PRODUCT DELIVERY</a></li>
	<li class="topmenu"><a href="../config/tagsmapping.php" style="height:21px;line-height:21px;">
	TAGS MAPPING</a></li>
	<li class="topmenu"><a href="../formula" style="height:21px;line-height:21px;">
	FORMULA EDITOR</a></li>
<!--
	<li class="topmenu"><a href="../users/roles.php" style="height:21px;line-height:21px;">
	ROLES</a></li>
-->
	</ul>
<?php
}
else if($menu=='ghg')
{
?>
	<ul id="css3menu0" class="topmenu">
	<li class="topmenu"><a href="#" style="height:21px;line-height:21px;">
	GHG SUBPART W</a></li>
	<li class="topmenu"><a href="#" style="height:21px;line-height:21px;">
	GHG SUBPART Y</a></li>
	<li class="topmenu"><a href="#" style="height:21px;line-height:21px;">
	GHG API SIMPLIFY</a></li>
	<li class="topmenu"><a href="#" style="height:21px;line-height:21px;">
	GHG PROTOCOL SIMPLIFY</a></li>
<!--
	<li class="topmenu"><a href="../users/roles.php" style="height:21px;line-height:21px;">
	ROLES</a></li>
-->
	</ul>
<?php
}
else if($menu=='visual')
{
?>
	<ul id="css3menu0" class="topmenu">
	<li class="topmenu"><a href="../diagram" style="height:21px;line-height:21px;">
	NETWORK MODELS</a></li>
	<li class="topmenu"><a href="../graph" style="height:21px;line-height:21px;">
	DATA PLOTTING</a></li>
	<li class="topmenu"><a href="../view" style="height:21px;line-height:21px;">
	DATA VIEWS</a></li>
	<li class="topmenu"><a href="../report" style="height:21px;line-height:21px;">
	REPORT</a></li>
	</ul>
<?php
}
else if($menu=='delivery_xx')
{
?>
	<ul id="css3menu0" class="topmenu">
	<li class="topmenu"><a href="../pd/?func=cargonomination" style="height:21px;line-height:21px;">
	CARGO NOMINATION</a></li>
	<li class="topmenu"><a href="../pd/?func=cargoschedule" style="height:21px;line-height:21px;">
	CARGO SCHEDULE</a></li>
	<li class="topmenu"><a href="../pd/?func=cargovoyage" style="height:21px;line-height:21px;">
	CARGO VOYAGE</a></li>
	<li class="topmenu"><a href="../pd/?func=cargoload" style="height:21px;line-height:21px;">
	CARGO LOAD</a></li>
	<li class="topmenu"><a href="../pd/?func=cargounload" style="height:21px;line-height:21px;">
	CARGO UNLOAD</a></li>
<!--
	<li class="topmenu"><a href="../pd/?func=voyagemarine" style="height:21px;line-height:21px;">
	VOYAGE MARINE</a></li>
	<li class="topmenu"><a href="../pd/?func=voyageground" style="height:21px;line-height:21px;">
	VOYAGE GROUND</a></li>
	<li class="topmenu"><a href="../pd/?func=voyagepipeline" style="height:21px;line-height:21px;">
	VOYAGE PIPELINE</a></li>
	<li class="topmenu"><a href="../configpd/" style="height:21px;line-height:21px;">
	CONFIG</a></li>
-->
	<li class="topmenu"><a href="../pd/?func=storagedisplay" style="height:21px;line-height:21px;">
	STORAGE DISPLAY</a></li>
	</ul>
<?php
}
else if($menu=='delivery')
{
?>
	<ul id="css3menu0" class="topmenu">
	<li class="topmenu"><a href="../pd/?func=contract_admin" style="height:21px;line-height:21px;">
	CONTRACT ADMIN</a></li>
	<li class="topmenu"><a href="../pd/?func=cargo_admin" style="height:21px;line-height:21px;">
	CARGO ADMIN</a></li>
	<li class="topmenu"><a href="../pd/?func=cargo_action" style="height:21px;line-height:21px;">
	CARGO ACTION</a></li>
	<li class="topmenu"><a href="../pd/?func=cargo_management" style="height:21px;line-height:21px;">
	CARGO MANAGEMENT</a></li>
	<li class="topmenu"><a href="../pd/?func=cargo_monitoring" style="height:21px;line-height:21px;">
	CARGO MONITORING</a></li>
<!--
	<li class="topmenu"><a href="../pd/?func=voyagemarine" style="height:21px;line-height:21px;">
	VOYAGE MARINE</a></li>
	<li class="topmenu"><a href="../pd/?func=voyageground" style="height:21px;line-height:21px;">
	VOYAGE GROUND</a></li>
	<li class="topmenu"><a href="../pd/?func=voyagepipeline" style="height:21px;line-height:21px;">
	VOYAGE PIPELINE</a></li>
	<li class="topmenu"><a href="../configpd/" style="height:21px;line-height:21px;">
	CONFIG</a></li>
-->
	</ul>
<?php
}
else if($menu=='allocation')
{
?>
	<ul id="css3menu0" class="topmenu">
	<li class="topmenu"><a href="../diagram" style="height:21px;line-height:21px;">
	NETWORK MODELS</a></li>
	<li class="topmenu"><a href="../graph" style="height:21px;line-height:21px;">
	DATA VIZUALIZATION</a></li>
	</ul>
<?php
}
else if($menu=='viz')
{
?>
	<ul id="css3menu0" class="topmenu">
	<li class="topmenu"><a href="../diagram" style="height:21px;line-height:21px;">
	NETWORK MODELS</a></li>
	<li class="topmenu"><a href="../graph" style="height:21px;line-height:21px;">
	DATA VIZUALIZATION</a></li>
	</ul>
<?php
}
else if($menu=='admin')
{
?>
	<ul id="css3menu0" class="topmenu">
	<li class="topmenu"><a href="../admin/users.php" style="height:21px;line-height:21px;">
	USERS</a></li>
	<li class="topmenu"><a href="../admin/roles.php" style="height:21px;line-height:21px;">
	ROLES</a></li>
	<li class="topmenu"><a href="../admin/audittrail.php" style="height:21px;line-height:21px;">
	AUDIT TRAIL</a></li>
	<li class="topmenu"><a href="../admin/validatedata.php" style="height:21px;line-height:21px;">
	VALIDATE DATA</a></li>
	<li class="topmenu"><a href="../admin/approvedata.php" style="height:21px;line-height:21px;">
	APPROVE DATA</a></li>
	<li class="topmenu"><a href="../admin/datalocking.php" style="height:21px;line-height:21px;">
	LOCK DATA</a></li>
	</ul>
<?php
}
else if($menu=='interface_')
{
?>
	<ul id="css3menu0" class="topmenu">
	<li class="topmenu"><a href="../interface/import.php" style="height:21px;line-height:21px;">
	IMPORT</a></li>
	<li class="topmenu"><a href="../interface/upload.php" style="height:21px;line-height:21px;">
	UPLOAD</a></li>
	</ul>
<?php
}
else if($menu=='ce')
{
?>
	<ul id="css3menu0" class="topmenu">
	<li class="topmenu"><a href="../ce/?act=allocset" style="height:21px;line-height:21px;">PRODUCTION ALLOCATION</a></li>
	</ul>
<?php
}
?>
	</div>
		<div id="divMenu" style="position: absolute;z-index:1;left:150px;top:43px;width:196px;height:40px">
<ul id="css3menu0" class="topmenu">

	<li class="topmenu">
	<a href="../" style="height:21px;line-height:21px;">HOME</a></li>

	<li class="topmenu"><a href="#" style="height:21px;line-height:21px;"><span>FUNCTIONS</span></a>
<?php
//include('../home/menu_functions.php');
?>
	</li>

</ul>		</div>
		<div style="position: absolute; width: 100px; height: 84px; z-index: 0; left: 20px; top: 15px" id="layer3">
			<img border="0" src="../img/eb2.png" height='70'></div>
		<p>&nbsp;</td>
	</tr>
	<tr>
		<td height="10" style="background-image: url('../img/g.png'); background-repeat: no-repeat; background-position: center top"></td>
	</tr>
	</table>
	