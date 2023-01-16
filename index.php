<?php
    
require 'vendor/autoload.php';

$smarty = new Smarty();
    
$smarty->assign('name', 'Paulo Morosov - 28 Anos - Programador');
$smarty->assign('routeHome', Routes::get_Home());

