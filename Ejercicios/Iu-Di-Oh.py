N=int(input("Numero atributos: "))
if 1<=N<=100:
	M=int(input("Numero cartas: "))
	L=int(input("Numero cartas: "))
	Ce=[M, L]
	print(Ce)
	if 1<=M and L<=100:
		for i in range(0,M):
			Cm0=int(input("cartas M: "))
			Cm1=int(input("cartas M: "))
			Cm2=int(input("cartas M: "))
			CMM=[Cm0,Cm1,Cm2]
			print(CMM)

		for i in range(0,L):
			Cl0=int(input("cartas L: "))
			Cl1=int(input("cartas L: "))
			Cl2=int(input("cartas L: "))
			CLM=[Cl0,Cl1,Cl2]
			print(CLM)

		Cm=int(input("Carta escogida M: "))
		Cl=int(input("Carta escogida L: "))
		if 1<=Cm<=M and 1<=Cl<=L:
			Card=[Cm,Cl]
			print(Card)

		A=int(input("atributo escogido: "))
		if 1<=A<=N:
			if (CMM[1]-CLM[1])<0:	
				print("Leonard")
			elif (CLM[1]-CMM[0])<0:
				print("Marcos")
			else:
				print("Empate")
