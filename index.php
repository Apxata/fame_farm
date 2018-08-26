<?php 
require_once("class/smarty/Smarty.class.php");
require_once("class/fame.class.php");
require_once("class/singletone.db.php");
require_once("class/db_cfg.php");

include ('shared/public_header.php');
$smarty = new Smarty;
// $smarty->assign('fames', $fame);
$smarty->display('tpls/index.tpl');