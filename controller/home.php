<?php

require '../vendor/autoload.php';

$smarty = new Smarty();

$smarty->assign('name', 'Paulo Morosov - 28 Anos - Programador');
$smarty->assign('routeGames', Routes::get_Games());
$smarty->assign('routeHome', Routes::get_Home());
$smarty->assign('routeProg', Routes::get_Prog());


$smarty->display('../view/home.tpl');

