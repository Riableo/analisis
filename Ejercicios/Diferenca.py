num=1
while num == 1:
	
	try:
		A = int(input("Inserta número A: "))
		B = int(input("Inserta número B: "))
		C = int(input("Inserta número C: "))
		D = int(input("Inserta número D: "))

		R = (A*B)-(C*D)
		print("DIFERENCA = "+ str(R))
	except ValueError:
		print("Por favor digite solo números")	
		
	num=int(input("Volver a realizar diferencia \n 1: sí !1:No: "))

print("Tks")