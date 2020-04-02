def Points(lista,lista1):		
	Si=lista[0]+lista[3]+lista[6]  #Si: Suma de Servicios intentos
	Se=lista1[0]+lista1[3]+lista1[6] #Se: Suma de Servicios exitosos
	Puntos=(Se/Si)*100
	print("Puntos de Saque: "+str(format(Puntos,'.2f'))+" %")

	Bi=lista[1]+lista[4]+lista[7]  #Bi: Suma de Bloqueos intentos
	Be=lista1[1]+lista1[4]+lista1[7] #Be: Suma de Bloqueos exitosos
	Bs=(Be/Bi)*100
	print("Puntos de Bloqueio: "+str(format(Bs,'.2f'))+" %")

	Ai=lista[2]+lista[5]+lista[8]  #Ai: Suma de Ataques intentos
	Ae=lista1[2]+lista1[5]+lista1[8] #Ae: Suma de Ataques exitosos
	As=(Ae/Ai)*100
	print("Puntos de Ataque: "+str(format(As,'.2f'))+" %")

N=int(input("Ingresar numero de jugadores: "))
if (1<=N<=100):
	lista=[]
	lista1=[]
	for i in range(0,N):
		nombre=input("Ingrese nombre: ")
		S=int(input("Ingrese servicio: "))
		B=int(input("Ingrese bloqueos: "))
		A=int(input("Ingrese ataques: "))
		lista.append(S)
		lista.append(B)
		lista.append(A)
		print(lista)
		if 0<=lista[0]<=10000 and 0<=lista[1]<=10000 and 0<=lista[2]<=10000:
			S=int(input("Ingrese servicio efectivos: "))
			B=int(input("Ingrese bloqueos efectivos: "))
			A=int(input("Ingrese ataques efectivos: "))
			lista1.append(S)
			lista1.append(B)
			lista1.append(A)

			if 0<=lista1[0]<=lista[0] and 0<=lista1[1]<=lista[1] and 0<=lista1[2]<=lista[2]:
				print("eeeey")
		print(lista)
		print(lista1)
	Points(lista,lista1)	