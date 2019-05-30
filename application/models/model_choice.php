<?php

class Model_Choice extends Model
{
	
	public function get_data()
	{	
		$q = $this->db->prepare('SELECT id,Name,SecondName FROM Teachers');
		$q->execute();
		$data = $q->fetchAll();
		return $data;
	
	}
	
	public function set_data()
	{	
			
	}
	


}
