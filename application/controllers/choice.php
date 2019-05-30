<?php

class Choice extends Controller
{   
	
	
	public function __construct()
	{  
		$this->view = new View();
		$this->model = new Model_Choice();	
	}

	
	function action_index()
	{ 	
		$data = $this->model->get_data();		
		$this->view->generate('choice',$data);

	}

	

}


