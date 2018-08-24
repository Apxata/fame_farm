<?php 
require_once("class/smarty/Smarty.class.php");
require_once("class/fame.class.php");
require_once("class/singletone.db.php");
require_once("class/db_cfg.php");

if(isset($_POST["fame"])) {
  $fame = (int) $_POST["fame"];
  
  $round = new Fame($fame);
  $result = $round->create();
}

$fame = Fame::find_all();

include ('shared/public_header.php');
$smarty = new Smarty;
$smarty->assign('fames', $fame);
$smarty->display('tpls/index.tpl');