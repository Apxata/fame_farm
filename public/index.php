<?php 
require_once("../private/init.php");

include (SHARED_PATH . '/public_header.php');
$smarty = new Smarty;
// $smarty->assign('fames', $fame);
$smarty->display('tpls/index.tpl');