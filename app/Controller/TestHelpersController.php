<?php  
	class TestHelpersController extends AppController{
		public $helpers = array('Lib');
		function test(){
			$this->render("test");
		}
	}
?>