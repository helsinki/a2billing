<?php
$disable_load_conf = true;

include ("lib/customer.defines.php");
include ("lib/customer.module.access.php");
include ("lib/customer.smarty.php");


$smarty->assign("error", $_GET["error"]);
$password = base64_decode($_POST["password"]);

$smarty->assign("username", $_POST["username"]);
$smarty->assign("password", $password);

$smarty->display('index.tpl');

