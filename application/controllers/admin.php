<?php
	
	class admin extends Controller 
	{				
		function __construct()
		{
			$this->view = new View();
			$this->model = new Model_Admin();
		}
		
		

		function action_index()
		{
			$data = $this->model->get_data();		
			$this->view->generate('admin', 'template', $data);

			if(isset($_POST["Add"]))
			{	$name = $_POST['name'];
				$secondName = $_POST['secondName'];
				$patronymic = $_POST['patronymic'];
				$BirthDate = $_POST['BirthDate'];
			 	$address = $_POST['address'];
			 	$Language = $_POST['Language'];
			 	$Education = $_POST['Education'];
			 	$Expirience = $_POST['Expirience'];
			 	$Proffesion = $_POST['Proffesion'];
			 	$photo = $_FILES['path']['name'];
				$this->model->set_data($name,$secondName,$patronymic, $BirthDate, $address, $Language, $Education, $Expirience, $Proffesion,$photo);
			}

		
		}
		
	}
