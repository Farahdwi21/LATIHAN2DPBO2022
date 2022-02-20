 <?php 
 
 class Hardware extends Product{

	//atribut dalam class Hardware
	private $brand = "";
	private $model = "";

		
	//constructor
	public function __construct($brand = "", $model = ""){
		$this->price = "";
		$this->id_product = "";
	}
		
	//set and get for atribut brand
	public function setBrand($brand){
		$this->brand = $brand;
	}

	public function getBrand(){
		return $this->brand;
	}

	//set and get for atribut model
	public function setModel($model){
		$this->model = $model;
	}

	public function getModel(){
		return $this->model;
	}

	function __destruct(){
	}

}

?>