<?php
	header('content-type:text/html;charset=utf-8');
	class testController{
		function show(){
			$testModel=new testModel();
			$data=$testModel->get();
			$testView=new testView();
			$testView->display($data);
		}
	}
?>