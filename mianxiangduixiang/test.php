<?php
	header('content-type:text/html;charset=utf-8');
	require_once('testController.class.php');
	require_once('testModel.class.php');
	require_once('testView.class.php');
	$testController=new testController();
	$testController->show();
?>