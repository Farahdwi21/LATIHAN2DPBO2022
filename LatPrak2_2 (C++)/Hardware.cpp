class Hardware : public Product{
	private:
	//atribut dalam class Hardware
		string brand;
		string model;

	public:
		//constructor
		Hardware(){
		}

		//prosedur dan fungsi untuk get & set dari atribut Brand
		void setBrand(string brand){
			this->brand = brand;
		}
		
		string getBrand(){
			return this->brand;
		}

		//prosedur dan fungsi untuk get & set dari atribut model
		void setModel(string model){
			this->model = model;
		}
		
		string getModel(){
			return this->model;
		}
	//destructor
	~Hardware(){
	}
};