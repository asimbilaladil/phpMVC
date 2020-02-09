<?php 

class App {
	
	//Default Controller
	protected $controller = "Home";

	//Default Controller Method
	protected $method = "Index";

	//Default Controller Method
	protected $params = [];

	public function __construct(){

		//echo "All Ok";
		$url = $this->parse_url();

		if(file_exists('../app/controllers/'.$url[0].'.php')){


			$this->controller = $url[0];
			unset($url[0]);

			require_once('../app/controllers/'. $this->controller .'.php');

			$this->controller = new $this->controller;

			if(isset($url[1])){
				
				if(method_exists($this->controller, $url[1])){
					$this->method = $url[1];
					unset($url[1]);
					//print_r($this->controller);

				}				
			} else {
				die("Method Not exists");
			}

			$this->params = $url ? array_values($url) : [];
			call_user_func_array([$this->controller, $this->method], $this->params);



			

		} else {
				die("Controller Not exists");
			}
		//print_r($url);
	}

	public function parse_url(){

		if(isset($_GET['url'])){
			return explode('/', filter_var(rtrim($_GET['url'], '/') , FILTER_SANITIZE_URL) ) ;
		}
	}
}