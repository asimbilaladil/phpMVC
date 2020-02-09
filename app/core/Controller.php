<?php 

class Controller {
	
	public function model($name){
		require_once('../app/models/'.$name.'.php');
		return new $name();
	}

	public function view($view, $data = []){
		require_once('../app/views/'.$view.'.php');
	}

	public function redirect($path){

		/* Redirect browser */
		$app_url = Config::$app_url;

		header("Location:".$app_url.$path); 
		exit();

	}
}