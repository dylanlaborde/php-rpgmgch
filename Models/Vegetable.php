<?php

require 'Product.php';

class Vegetable extends Product{
	private $productorName;
	private $expiresAt;

	public function setExpiresAt($expiresAt){
		$this->expiresAt =new DateTime($expiresAt);
	}
	public function getExpiresAt(){
		return $this->expiresAt;
	}

	public function isFresh(){
		print_r($this->actualTime);
		print_r($this->expiresAt);

		if ($this->actualTime > $this->expiresAt) {
			return false;
		}
		if ($this->actualTime < $this->expiresAt) {
			return true;
		}

	}
	
	public function __construct(){
		$this->actualTime= new DateTime();
		
	}

}
?>