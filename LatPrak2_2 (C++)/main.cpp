#include <string>
#include <iostream>

using namespace std;

#include "Product.cpp"
#include "Hardware.cpp"
#include "Memory.cpp"


int main(){
    
    //instansiasi
    Product xproduct;
    Hardware xhardware;
    Memory xmemory;

    //mengeset untuk kelas produk
    xproduct.setPrice("Rp. 30.000.000");
    xproduct.setIdProduct("1106");

    cout << "- Harga         : " << xproduct.getPrice() << endl;
    cout << "- Id Produk     : " << xproduct.getIdProduct() << endl;
    cout << endl;

    //mengisi atribut untuk kelas Hardware
    xhardware.setPrice("Rp. 30.000.000");
    xhardware.setIdProduct("1106");
    xhardware.setBrand("Asus");
    xhardware.setModel("ROG Swift PG27UQ");

    cout << "- Harga         : " << xhardware.getPrice() << endl;
    cout << "- Id Produk     : " << xhardware.getIdProduct() << endl;
    cout << "- Brand         : " << xhardware.getBrand() << endl;
    cout << "- Model         : " << xhardware.getModel() << endl;
    cout << endl;
    

    //mengisi atribut untuk kelas Memory
    xmemory.setPrice("Rp. 30.000.000");
    xmemory.setIdProduct("1106");
    xmemory.setBrand("Asus");
    xmemory.setModel("ROG Swift PG27UQ");
    xmemory.setFrequency("1144Hz");
    xmemory.setMemory("8 GB");
    xmemory.setSupportCuda("True");

    //proses menampilkan atribut kelas memory
    cout << "===================================================" << endl;
    cout << "|              DATA PRODUK HARDWARE               |" << endl;
    cout << "---------------------------------------------------" << endl;
    cout << "- Harga         : " << xmemory.getPrice() << endl;
    cout << "- Id Produk     : " << xmemory.getIdProduct() << endl;
    cout << "- Brand         : " << xmemory.getBrand() << endl;
    cout << "- Model         : " << xmemory.getModel() << endl;
    cout << "- Frekuensi     : " << xmemory.getFrequency() << endl;
    cout << "- Ukuran Memori : " << xmemory.getMemory() << endl;
    cout << "- Support Cuda  : " << xmemory.getSupportCuda() << endl;
    cout << "===================================================" << endl;

    return 0;
}
