class Hardware extends Product{
	//atribut
	private String brand;
	private String model;

	//constructor
	Hardware(){
	}

	//get & set untuk atribut brand
	public void setBrand(String brand){
		this.brand = brand;
	}
		
	public String getBrand(){
		return this.brand;
	}

	//get & set untuk atribut model
	public void setModel(String model){
		this.model = model;
	}
		
	public String getModel(){
		return this.model;
	}
}

