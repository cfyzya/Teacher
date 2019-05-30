<?php
session_start();

	class Route
	{
		

		static function start()
		{
			
			$controller_name = 'Main';//Имя котроллера по умолчанию
			$action_name = 'index';//Имя действия по умолчанию		
			

			$routes = explode('/', $_SERVER['REQUEST_URI']);//Разбиваем ссылку на части
			

			if ( !empty($routes[1]) )
			{	
				$controller_name = $routes[1];//Задаем имя контроллера
				
			}
			
			
			if ( !empty($routes[2]) )
			{
				$action_name = $routes[2];//задаем имя действия
			}


			$model_name = 'Model_'.$controller_name;
			$action_name = 'action_'.$action_name;

			//подключаем файл модели
			$model_file = strtolower($model_name).'.php';
			$model_path = "application/models/".$model_file;
			if(file_exists($model_path))
			{
				include "application/models/".$model_file;
			}
			
			//подключаем файл контроллера
			$controller_file = strtolower($controller_name).'.php';
			$controller_path = "application/controllers/".$controller_file;
			if(file_exists($controller_path))
			{
				include "application/controllers/".$controller_file;
			}
			
						
			$controller = new $controller_name;
			$action = $action_name;
		

			//It is alive!...I hope..
			
			if(method_exists($controller, $action))
			{
				
				$controller->$action();
			}
			
		
		}


	
		
	    
	}
