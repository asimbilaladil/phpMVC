<?php 

class Home extends Controller {

	protected $user;

	public function __construct(){

		$this->user = $this->model('User');



		if(empty($_Session['user'])){

			$this->redirect('Login/index');
		}
	}

	public function index($name = ''){

		// $data = [
		// 	'name' => 'PHP MVC',
		// 	'email' => 'email@mail.com'
		// ];
		// $this->user->create_user($data);

		$this->view('home/index', ['name'=> ''] );
	}

	
}