<?php 

class User{

	private $id = "";
	private $email = "";
	private $createdAt;

	public function getId(){
		return $this->id;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getCreatedAt(){
		return $this->createdAt;
	}

	public function setEmail($email){
		$this->email = $email;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function setCreatedAt($createdAt){
		$this->createdAt = $createdAt;
	}

	
}
$a = new User();
echo $a->getId();

?>