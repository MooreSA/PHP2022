<?php

include '../smarty/smarty-3.1.34/libs/Smarty.class.php';

// create object
$smarty = new Smarty;
$smarty->setCaching(true);

$smarty->setTemplateDir('../smarty/templates');
$smarty->setCompileDir('../smarty/templates_c');
$smarty->setCacheDir('../smarty/cache');
$smarty->setConfigDir('../smarty/configs');

// assign options arrays
$smarty->assign('id', array(1,2,3,4,5));
$smarty->assign('names', array('bob','jim','joe','jerry','fred'));


// assign an array of data
$smarty->assign('names', array('bob','jim','joe','jerry','fred'));

// see if the page is already cached
if(!$smarty->isCached('smartyDemo.tpl')) {
    // if not already cached, you'd likely run some database querries and then assign an associative array of data
    $smarty->assign('users', array(
        array('name' => 'bob', 'phone' => '555-3425'),
        array('name' => 'jim', 'phone' => '555-4364'),
        array('name' => 'joe', 'phone' => '555-3422'),
        array('name' => 'jerry', 'phone' => '555-4973'),
        array('name' => 'fred', 'phone' => '555-3235')
    ));
}

// display it
$smarty->display('./smartyDemo.tpl');

//$smarty->testInstall();