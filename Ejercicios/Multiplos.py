tr=0
while tr == 0:
	try:

		Num=int(input("Ingresar numero: "))
		Num_I=int(input("Ingresar numero: "))
	
		N=Num%Num_I
		N1=Num_I%Num
		
		if N == 0 or N1 == 0:
			print("Sao Multiplos")
		else:
			print("Nao sao Multiplos")
	except ValueError:
		print("Solo números por favor")

	tr=int(input("Volver a realizar diferencia \n 0: sí !0:No: "))	
