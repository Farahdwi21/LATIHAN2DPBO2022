from Product import Product

class Hardware(Product):
#kelas yang digunakan untuk mengimplementasikan kelas Hardware

	#atribut
	__brand = "";
	__model = "";

	#constructor
	def __init__(self, brand = "", model = ""):
		self.brand = brand
		self.model = model
		

	#get dan set untuk atribut price
	def setBrand(self, brand):
		self.brand = brand

	def getBrand(self):
		return self.brand
	
	#get dan set untuk atribut Model
	def setModel(self, model):
		self.model = model

	def getModel(self):
		return self.model
	
	
	