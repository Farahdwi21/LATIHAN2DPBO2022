<?php
 
 class Memory extends Hardware{

	//atribut dalam class Memory
	private $frequency = "";
	private $memory_size = "";
	private $support_cuda = "";

		
	//constructor
	public function __construct($frequency = "", $memory_size = "", $support_cuda = ""){
		$this->frequency = "";
		$this->memory_size = "";
		$this->support_cuda = "";
	}
		
	//set and get for atribut frequency
	public function setFrequency($frequency){
		$this->frequency = $frequency;
	}

	public function getFrequency(){
		return $this->frequency;
	}

	//set and get for atribut Memory Size
	public function setMemory($memory_size){
		$this->memory_size = $memory_size;
	}

	public function getMemory(){
		return $this->memory_size;
	}

	//set and get for atribut Support Cuda
	public function setSupportCuda($support_cuda){
		$this->support_cuda = $support_cuda;
	}

	public function getSupportCuda(){
		return $this->support_cuda;
	}

	function __destruct(){
	}

}

?>
		