<?php

class Model_Admin extends Model
{
	
	public function get_data()
	{	
				
	}
	
	public function set_data($name,$secondName,$patronymic, $BirthDate, $address, $Language, $Education, $Expirience, $Proffesion,$photo)
	{	
		$q = $this->db->prepare("INSERT INTO Teachers (Name,SecondName,patronymic,BirthDate,address,Language,Education,Expirience,Proffesion,photo) VALUES (?,?,?,?,?,?,?,?,?,?)");
		$q->execute(array($name, $secondName, $patronymic, $BirthDate, $address, $Language, $Education, $Expirience, $Proffesion,$photo));	
	}
	

}
