<?php  
	class UsersController extends AppController{
		public $name = "Users"; //Tên controller User
		function index(){
			$data = $this->User->find('all');
			$this->set("data", $data);
		}
	}
?>