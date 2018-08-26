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
// $id=11;
// // $last_fame = Fame::find_fame_by_id($id);
// $last_fame = FAME::find_2_last_fame();
// $time_spent = strtotime ($last_fame[0]['fame_time']) - strtotime($last_fame[1]['fame_time']);
// $fame_get = ($last_fame[0]['fame']) - ($last_fame[1]['fame']);
// $fame_per_hour = $fame_get / ($time_spent / 60 / 60);
// var_dump($time_spent);
// var_dump($fame_get);
// var_dump($fame_per_hour);
// die;

include ('shared/public_header.php');
$smarty = new Smarty;
$smarty->assign('fames', $fame);
$smarty->display('tpls/index.tpl');