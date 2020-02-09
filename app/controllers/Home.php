<?php 

class Home extends Controller {

	public function index($name = ''){

		$user = $this->model('User');
		$user->name = $name;

		$this->view('home/index', ['name'=> $user->name] );
	}

	public function create(){
		
		echo ($_POST['firstName']);

		//$user = $this->model('User');
		//$user->name = $name;

		//$this->view('home/index', ['name'=> $user->name] );
	}

	
}