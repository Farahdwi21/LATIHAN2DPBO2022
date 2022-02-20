class Memory : public Hardware{
	private:
	//atribut dalam class Memory
		string frequency;
		string memory_size;
		string support_cuda;

	public:
		//constructor
		Memory(){
		}

		//prosedur dan fungsi untuk get & set dari atribut frequency
		void setFrequency(string frequency){
			this->frequency = frequency;
		}
		
		string getFrequency(){
			return this->frequency;
		}

		//prosedur dan fungsi untuk get & set dari atribut memory size
		void setMemory(string memory_size){
			this->memory_size = memory_size;
		}
		
		string getMemory(){
			return this->memory_size;
		}

		//prosedur dan fungsi untuk get & set dari atribut support cuda
		void setSupportCuda(string support_cuda){
			this->support_cuda = support_cuda;
		}
		
		string getSupportCuda(){
			return this->support_cuda;
		}
	//destructor
	~Memory(){
	}
};