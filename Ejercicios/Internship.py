M=int(input("Ingresar numero de test case: "))
if 1<=M<=40:
	for i in range(0,M):

		N=int(input("Ingrese grade: "))
		C=int(input("Ingrese workload: "))
		if 0<=N<=100 and 30<=C<=120:
			p=N*C
	C=C*100
	r=p/C		
	print(format(r,'.4f'))