<?php

	class Model_Teacher extends Model
	{	
		
		public function get_data($id)
		{	
			$q = $this->db->prepare('SELECT id,Name,SecondName,patronymic,BirthDate,address,Language,Education,Expirience,Proffesion,photo FROM Teachers WHERE id=?');
			$q->execute(array($id));
			$data = $q->fetchAll();
			return $data;
		}

		public function set_data()
		{
			
		}
	}