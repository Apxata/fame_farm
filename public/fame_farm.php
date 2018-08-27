<?php 
require_once('../private/init.php');

if(isset($_POST["fame"])) {
  $fame = (int) $_POST["fame"];
  
  $round = new Fame($fame);
  $result = $round->create();
}

$fame = Fame::find_all();
foreach ($fame as &$f){
  $f['timespent'] = round($f['timespent']/60);
}

include (SHARED_PATH . '/public_header.php');
$smarty = new Smarty;
$smarty->assign('fames', $fame);
$smarty->display('tpls/fame_farm.tpl');