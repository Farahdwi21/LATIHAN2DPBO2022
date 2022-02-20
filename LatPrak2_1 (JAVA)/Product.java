class Product{
	//atribut
	private String price;
	private String id_product;

	//constructor
	Product(){
	}

	//get & set untuk atribut price 
	public void setPrice(String price){
		this.price = price;
	}
		
	public String getPrice(){
		return this.price;
	}

	//get & set untuk atribut id product
	public void setIdProduct(String id_product){
		this.id_product = id_product;
	}
		
	public String getIdProduct(){
		return this.id_product;
	}
}
