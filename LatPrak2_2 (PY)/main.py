#import
from Product import Product
from Hardware import Hardware
from Memory import Memory


#instansiasi
xproduct = Product()
xhardware = Hardware()
xmemory = Memory()

#mengeset isi atribut dari kelas product
xproduct.setPrice("Rp. 30.000.000");
xproduct.setIdProduct("1106");

#Menampilkan output
print("- Harga		: " + str(xproduct.getPrice()))
print("- Id Produk	: " + str(xproduct.getIdProduct()))
print("\n")

#mengeset isi atribut dari kelas hardware
xhardware.setPrice("Rp. 30.000.000");
xhardware.setIdProduct("1106");
xhardware.setBrand("Asus");
xhardware.setModel("ROG Swift PG27UQ");

#Menampilkan output
print("- Harga		: " + str(xhardware.getPrice()))
print("- Id Produk	: " + str(xhardware.getIdProduct()))
print("- Brand         : " + str(xhardware.getBrand()))
print("- Model         : " + str(xhardware.getModel()))
print("\n")

#mengeset isi atribut dari kelas Memory
xmemory.setPrice("Rp. 30.000.000");
xmemory.setIdProduct("1106");
xmemory.setBrand("Asus");
xmemory.setModel("ROG SwiftPG27UQ");
xmemory.setFrequency("1144Hz");
xmemory.setMemory("8 GB");
xmemory.setSupportCuda("True");


#menampilkan semua atribut (output)
print("===================================================")
print("|              DATA PRODUK HARDWARE               |")
print("---------------------------------------------------")
print("- Harga		: " + str(xmemory.getPrice()))
print("- Id Produk	: " + str(xmemory.getIdProduct()))
print("- Brand         : " + str(xmemory.getBrand()))
print("- Model         : " + str(xmemory.getModel()))
print("- Frekuensi     : " + str(xmemory.getFrequency()))
print("- Ukuran Memori : " + str(xmemory.getMemory()))
print("- Support Cuda  : " + str(xmemory.getSupportCuda()))
print("===================================================")
