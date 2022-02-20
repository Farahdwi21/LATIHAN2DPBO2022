<?php 
 
 class Product{

	//atribut dalam class product
	private $price = "";
	private $id_product = "";

		
	//constructor
	public function __construct($price = "", $id_product = ""){
		$this->price = "";
		$this->id_product = "";
	}

	//set and get for atribut Price
	public function setPrice($price){
		$this->price = $price;
	}

	public function getPrice(){
		return $this->price;
	}

	//set and get for atribut Id product
	public function setIdProduct($id_product){
		$this->id_product = $id_product;
	}

	public function getIdProduct(){
		return $this->id_product;
	}

	function __destruct(){
	}

}

?>