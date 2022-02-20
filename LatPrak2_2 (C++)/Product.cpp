class Product{
	private:
	//atribut dalam class Product
		string price;
		string id_product;

	public:
		//constructor
		Product(){
		}

		//prosedur dan fungsi untuk get & set dari atribut Price
		void setPrice(string price){
			this->price = price;
		}
		
		string getPrice(){
			return this->price;
		}

		//prosedur dan fungsi untuk get & set dari atribut id product
		void setIdProduct(string id_product){
			this->id_product = id_product;
		}
		
		string getIdProduct(){
			return this->id_product;
		}
	//destructor
	~Product(){
	}
};
