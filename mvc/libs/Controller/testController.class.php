<?php
	class testController{
		function show(){
			global $view;
			//$testModel = new testModel();
			$testModel = M('test');
			$data = $testModel->get();
			// $testView = V('test');
			//$testView -> display($data);
			$view->assign('str', '你好');
			$view->display('test.tpl');
		}
	}
?>