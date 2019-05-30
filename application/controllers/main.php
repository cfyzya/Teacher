<?php

class Main extends Controller
{   
	
	
	public function __construct()
	{
		$this->view = new View();
		$this->model = new Model_Main();	
	}

	
	function action_index()
	{ 		
		$this->view->generate('main');

		if(isset($_POST['DoSignUp']))
		{
			$name = $_POST['name'];
			$password =md5($_POST['password']);
			$this->model->set_data($name, $password);

		}
		if(isset($_POST['DoSignIn']))
		{
			$name = $_POST['name'];
			$password = md5($_POST['password']);
			$data = $this->model->get_data($name,$password);
			
			if($data)
			{
				$_SESSION['user'] = $name;
			}
			else
			{
				echo "Неверное имя пользователя или пароль";
			}
			
		}

		if($_SESSION['user'])
		{	
			print "<script type='text/javascript'>
					  location.replace('/choice');
					</script>";
		}


	}



	

}



