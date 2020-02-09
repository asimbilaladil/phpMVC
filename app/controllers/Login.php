<?php

class Login extends Controller{

	protected $user;

	public function __construct(){
		$this->user = $this->model('User');
	}

	public function index(){
		$this->view('login/index',[]);
	}


	public function login(){

		$email = $_POST['email'];
	    $password = $_POST['password'];
	    $data = [
	    	'email' => $email,
	    	'password' => $password
	    ];

	    $user_data = $this->user->search($data);
	    
	    if(isset($user_data)){
	    	$_SESSION['user'] = $user_data;
	    	$this->redirect('Home/index');

	    } else {
	    	$this->redirect('Login/index');
	    }
	    
	}

}