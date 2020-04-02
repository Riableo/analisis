T=int(input("Ingresar numero de batallas: "))
for i in range(0,T):
	B=int(input("Valor bonus: "))
	if(0<=B<=100):
		Ai=int(input("Ingrese valor ataque pokemon: "))
		Di=int(input("Ingrese valor defensa pokemon: "))
		Li=int(input("Ingrese level Master pokemon: "))
		if (1<=Ai,Di<=100,1<=Li<=50):
			Da=[Ai,Di,Li]
			Ai=int(input("Ingrese valor ataque pokemon: "))
			Di=int(input("Ingrese valor defensa pokemon: "))
			Li=int(input("Ingrese level Master pokemon: "))
		if (1<=Ai,Di<=100,1<=Li<=50):
			Gua=[Ai,Di,Li]
			

		if (Gua[1]-Da[0])<0:	
			print("Dabriel")
		elif (Da[1]-Gua[0])<0:
			print("Guarte")
		else:
			print("Empate")

