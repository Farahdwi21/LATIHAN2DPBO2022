<?php

	include "Product.php";
	include "Hardware.php";
	include "Memory.php";

	//instansiasi kelas Product
	$xproduct = new Product();
	//mengisi atribut untuk kelas product
	$xproduct->setPrice("Rp. 30.000.000");
	$xproduct->setIdProduct("1106");

	//menampilkan atribut
	echo "- Harga		: ". $xproduct->getPrice()."<br/>";
	echo "- Id Produk	: ". $xproduct->getIdProduct()."<br/>";
	echo "<br/>";
		
	//instansiasi kelas Hardware
	$xhardware = new Hardware();
	//mengisi atribut untuk kelas hardware
	$xhardware->setPrice("Rp. 30.000.000");
	$xhardware->setIdProduct("1106");
	$xhardware->setBrand("Asus");
	$xhardware->setModel("ROG SwiftPG27UQ");
	
	//menampilkan atribut
	echo "- Harga		: ". $xhardware->getPrice()."<br/>";
	echo "- Id Produk	: ". $xhardware->getIdProduct()."<br/>";
	echo "- Brand       : ". $xhardware->getBrand()."<br/>";
	echo "- Model       : ". $xhardware->getModel()."<br/>";
	echo "<br/>";

	//instansiasi kelas Memory
	$xmemory = new Memory();

	//mengisi atribut untuk kelas product
	$xmemory->setPrice("Rp. 30.000.000");
	$xmemory->setIdProduct("1106");
	$xmemory->setBrand("Asus");
	$xmemory->setModel("ROG Swift PG27UQ");
	$xmemory->setFrequency("1144Hz");
	$xmemory->setMemory("8 GB");
	$xmemory->setSupportCuda("True");
	

	//menampilkan atribut (output)
	echo "===============================================". "<br/>";
	echo " >>>>>>>>>>> DATA PRODUK HARDWARE <<<<<<<<<<<<     ". "<br/>";
	echo "<br/>";
	echo "- Harga		: ". $xmemory->getPrice()."<br/>";
	echo "- Id Produk	: ". $xmemory->getIdProduct()."<br/>";
	echo "- Brand       : ". $xmemory->getBrand()."<br/>";
	echo "- Model       : ". $xmemory->getModel()."<br/>";
	echo "- Frekuensi     : ". $xmemory->getFrequency()."<br/>";
	echo "- Ukuran Memori : ". $xmemory->getMemory()."<br/>";
	echo "- Support Cuda  : ". $xmemory->getSupportCuda()."<br/>";
	echo "===============================================". "<br/>";
?>
