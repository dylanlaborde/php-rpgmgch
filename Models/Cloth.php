<?php 

require 'Product.php';

class Cloth extends Product{

	private $brand;

	public function getBrand(){
		return $this->brand;
	}
	public function setBrand($brand){
		$this->brand=$brand;
	}
 
	public function try(){

	}

}
 ?>