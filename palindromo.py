N=int(input("Ingresar numero de pruebas: "))
if 0<=N<=100:
	for i in range(0,N):
		frase=input("Ingrese frase a evaluar: ")
		cadenaInvertida = frase[::-1]
		if frase == cadenaInvertida:
			print("Palindromo")
		else:
			print("No palindromo")
