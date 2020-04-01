def sumalista(lista):
   if len(lista) == 1:
        return lista[0]
   else:
        return lista[0] + sumalista(lista[1:])

N=int(input("Ingresar numero de clavadistas: "))
if 0<=N<=100:
	for i in range(0,N):
		name=input("Nombre clavadista: ")
		D=float(input("Grado de dificultad: "))
		if 1.2<=D<=3.8:
			lista=[]
			S1=float(input("Marca 1: "))
			S2=float(input("Marca 2: "))
			S3=float(input("Marca 3: "))
			S4=float(input("Marca 4: "))
			S5=float(input("Marca 5: "))
			S6=float(input("Marca 6: "))
			S7=float(input("Marca 7: "))
			
			lista.append(S1)		
			lista.append(S2)
			lista.append(S3)
			lista.append(S4)
			lista.append(S5)
			lista.append(S6)
			lista.append(S7)
		lista.sort()
		lista.remove(lista[0])
		lista.pop()
		r=sumalista(lista)*D
		print(lista)
		print(name+" "+str(format(r,'.2f')))