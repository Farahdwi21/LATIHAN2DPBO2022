class Memory extends Hardware{
	//atribut
	private String frequency;
	private String memory_size;
	private String supports_cuda;

	//constructor
	Memory(){
	}

	//get & set untuk atribut frequency
	public void setFrequency(String frequency){
		this.frequency = frequency;
	}
		
	public String getFrequency(){
		return this.frequency;
	}

	//get & set untuk atribut memory size
	public void setMemory(String memory_size){
		this.memory_size = memory_size;
	}
		
	public String getMemory(){
		return this.memory_size;
	}

	//get & set untuk atribut support Cuda
	public void setSupportCuda(String supports_cuda){
		this.supports_cuda = supports_cuda;
	}
		
	public String getSupportCuda(){
		return this.supports_cuda;
	}
}