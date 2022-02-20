class Main{

	public static void main(String[] args){
		//deklarasi class
		Product xproduct;
		Hardware xhardware;
		Memory xmemory;
	
		//instansiasi kelas Product
		xproduct = new Product();

		//mengisi atribut untuk kelas product
		xproduct.setPrice("Rp. 30.000.000");
		xproduct.setIdProduct("1106");

		//menampilkan atribut
		System.out.println("- Harga		: " + xproduct.getPrice());
		System.out.println("- Id Produk	: " + xproduct.getIdProduct());
		System.out.println("\n");
	
		//instansiasi kelas Hardware
		xhardware = new Hardware();

		//mengisi atribut untuk kelasHardware
		xhardware.setPrice("Rp. 30.000.000");
		xhardware.setIdProduct("1106");
		xhardware.setBrand("Asus");
		xhardware.setModel("ROG Swift PG27UQ");

		//menampilkan atribut
		System.out.println("- Harga		: " + xhardware.getPrice());
		System.out.println("- Id Produk	: " + xhardware.getIdProduct());
		System.out.println("- Brand         : " + xhardware.getBrand());
		System.out.println("- Model         : " + xhardware.getModel());
		System.out.println("\n");
	
		//instansiasi kelas Memory
		xmemory = new Memory();

		//mengisi atribut untuk kelas Memory
		xmemory.setPrice("Rp. 5000.000");
		xmemory.setIdProduct("1106");
		xmemory.setBrand("Asus");
		xmemory.setModel("ROG Swift PG27UQ");
		xmemory.setFrequency("1144Hz");
		xmemory.setMemory("8 GB");
		xmemory.setSupportCuda("True");
	

		//menampilkan atribut 
		System.out.println("-==================================================");
		System.out.println("|              DATA PRODUK HARDWARE               |");
		System.out.println("---------------------------------------------------");

		System.out.println("- Harga		: " + xmemory.getPrice());
		System.out.println("- Id Produk	: " + xmemory.getIdProduct());

		System.out.println("- Brand         : " + xmemory.getBrand());
		System.out.println("- Model         : " + xmemory.getModel());
	
		System.out.println("- Frekuensi     : " + xmemory.getFrequency());
		System.out.println("- Ukuran Memori : " + xmemory.getMemory());
		System.out.println("- Support Cuda  : " + xmemory.getSupportCuda());
		System.out.println("==================================================");
		
	}
}