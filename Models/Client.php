<?php 

require 'User.php';

class Client extends User{

public function  __construct($id,$email){
		$this->setEmail($email);
		$this->setId($id);
		
	}



	public function buy(){


	}

}


?>