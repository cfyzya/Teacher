<?php

class Model_Main extends Model
{
	
	public function get_data($name,$password)
	{	
		$q = $this->db->prepare('SELECT Name,Password FROM users WHERE Name=? AND password=?');
		$q->execute(array($name,$password));
		$data = $q->fetchAll();
		return $data;

	}
	
	public function set_data($name, $password)
	{	
			$q = $this->db->prepare('INSERT INTO users (Name,Password) VALUES (?,?)');
			$q->execute(array($name, $password));	
	}
	


}

