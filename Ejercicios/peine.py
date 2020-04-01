def Peine(lista):
	def siGap(gap):
		gap=(gap*10)//13
		if gap<1:
			return 1
		return gap	
		
	n=len(lista)
	gap=n
	flag=True
	while(gap!=1 or flag==True):
		gap=siGap(gap)
		flag=False
		for i in range(0,n-gap):
			if lista[i]>lista[i+gap]:
				aux=lista[i]
				lista[i]=lista[i+gap]
				lista[i+gap]=aux

				flag=True

	print("Peine ascendente: "+str(lista))	

lista=[87,74,45,2,90]
Peine(lista)