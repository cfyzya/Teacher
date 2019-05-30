<?php

class Teacher extends Controller
{   
	
	
	public function __construct()
	{  
		$this->view = new View();
		$this->model = new Model_Teacher();	
	}

	
	function action_index()
	{ 	
				
		$this->view->generate('teacher');

	}
    
    function action_show()
    {	$routes = explode('/', $_SERVER['REQUEST_URI']);
    	$id = $routes[3];
    	$data = $this->model->get_data($id);
    
    	$this->view->generate('teacher',$data);
    }


	function action_logout()
	{		
		session_destroy();
		header('Location:/');		 
	}
}


