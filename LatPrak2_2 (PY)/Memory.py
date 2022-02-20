from Hardware import Hardware

class Memory(Hardware):
#kelas yang digunakan untuk mengimplementasikan kelas Memory

	#atribut
	__frequency = "";
	__memory_size = "";
	__support_cuda = "";

	#constructor
	def __init__(self, frequency = "", memory_size = "", support_cuda = ""):
		self.frequency = frequency
		self.memory_size = memory_size
		self.support_cuda = support_cuda		

	#get dan set untuk atribut frequency
	def setFrequency(self, frequency):
		self.frequency = frequency

	def getFrequency(self):
		return self.frequency
	
	#get dan set untuk atribut Memory size
	def setMemory(self, memory_size):
		self.memory_size = memory_size

	def getMemory(self):
		return self.memory_size

	#get dan set untuk atribut support cuda
	def setSupportCuda(self, support_cuda):
		self.support_cuda = support_cuda

	def getSupportCuda(self):
		return self.support_cuda
	
	
	