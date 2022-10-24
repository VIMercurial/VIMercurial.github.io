<?php

// put full path to Smarty.class.php
require '../vendor/autoload.php';

$smarty = new Smarty();


$smarty->assign('name', 'Paulo Morosov - 28 Anos - Programador');
$smarty->display('../view/prog.tpl');
