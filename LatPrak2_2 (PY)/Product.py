class Product():
#kelas yang digunakan untuk mengimplementasikan kelas Product

	#atribut
	__price = "";
	__id_product = "";

	#constructor
	def __init__(self, price = "", id_product = ""):
		self.price = price
		self.id_product = id_product
		
		

	#get dan set untuk atribut price
	def setPrice(self, price):
	#mengeset nilai atribut price
		self.price = price

	def getPrice(self):
	#mengembalikan nilai atribut price
		return self.price
	
	#get dan set untuk atribut id product
	def setIdProduct(self, id_product):
	#mengeset nilai atribut id_Product
		self.id_product = id_product

	def getIdProduct(self):
	#mengembalikan nilai atribut id product
		return self.id_product
	
	