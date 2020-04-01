def Burbuja(lista):
	for anter in range(len(lista)-1,0,-1):
		for i in range(anter):
			if lista[i]>lista[i+1]:
				temp=lista[i+1]
				lista[i+1]=lista[i]
				lista[i]=temp

	print("Burbuja: "+str(lista))			

def Burbuja_desc(lista):
	for anter in range(len(lista)-1,0,-1):
		for i in range(anter):
			if lista[i]<lista[i+1]:
				temp=lista[i+1]
				lista[i+1]=lista[i]
				lista[i]=temp

	print("Burbuja descendente: "+str(lista))

def burbujaDirecc(lista):
	izq = 0
	der = len(lista)-1
	ultimo = len(lista)-1
	while True:
		entra = False
		for i in range(izq, der):
			if lista[i]>lista[i + 1]:
				aux = lista[i]
				lista[i] = lista[i + 1]
				lista[i + 1] = aux
				entra=True

		for j in range(der-1, izq-1,-1):
			if lista[j]>lista[j + 1]:
				aux = lista[j]
				lista[j] = lista[j + 1]
				lista[j + 1] = aux
				entra = True

		if (entra==False):
			break
	print("Burbuja bidir: "+str(lista))

def burbujaDirecc_desc(lista):
	izq = 0
	der = len(lista)-1
	ultimo = len(lista)-1
	while True:
		entra = False
		for i in range(izq, der):
			if lista[i]<lista[i + 1]:
				aux = lista[i]
				lista[i] = lista[i + 1]
				lista[i + 1] = aux
				entra=True

		for j in range(der-1, izq-1,-1):
			if lista[j]<lista[j + 1]:
				aux = lista[j]
				lista[j] = lista[j + 1]
				lista[j + 1] = aux
				entra = True

		if (entra==False):
			break
	print("Burbuja bidir descendente: "+str(lista))


def Seleccion(lista):
	for i in range(len(lista)-1,0,-1):
		pos=0
		for j in range(1,i+1):
			if lista[j] >lista[pos]:
				pos=j
		print(lista)		
		temp=lista[i]
		lista[i]=lista[pos]
		lista[pos]=temp		
	print("Seleccion: "+str(lista))					

def Seleccion_desc(lista):
	for i in range(len(lista)-1,0,-1):
		pos=0
		for j in range(1,i+1):
			if lista[j] <lista[pos]:
				pos=j

		temp=lista[i]
		lista[i]=lista[pos]
		lista[pos]=temp		
	print("Seleccion descendente: "+str(lista))

def Insercion(lista):
    for i in range(1,len(lista)):
        actual = lista[i]
        j = i
        while j>0 and lista[j-1]>actual:
            lista[j]=lista[j-1]
            j = j-1
      
        lista[j]=actual
    print("Insercion: "+str(lista)) 

def Insercion_desc(lista):
    for i in range(1,len(lista)):
        actual = lista[i]
        j = i
        while j>0 and lista[j-1]<actual:
            lista[j]=lista[j-1]
            j = j-1
      
        lista[j]=actual
    print("Insercion descendente: "+str(lista)) 

def Quicksort(lista,izq,der):
    i=izq
    j=der
    x=lista[(izq + der)//2]
    while( i <= j ):
        while lista[i]<x and j<=der:
            i=i+1
        while x<lista[j] and j>izq:
            j=j-1
        if i<=j:
            aux = lista[i]; lista[i] = lista[j]; lista[j] = aux;
            i=i+1;  j=j-1;
 
        if izq < j:
            Quicksort( lista, izq, j );
        if i < der:
        	Quicksort( lista, i, der );

def imprimeLista():
	print("Quicksort: "+str(lista))        	

def Quicksort_desc(lista,izq,der):
    i=izq
    j=der
    x=lista[(izq + der)//2]
    while( i <= j ):
        while lista[i]>x and j>=der:
            i=i+1
        while x>lista[j] and j<izq:
            j=j-1
        if i<=j:
            aux = lista[i]; lista[i] = lista[j]; lista[j] = aux;
            i=i+1;  j=j-1;
 
        if izq < j:
            Quicksort_desc( lista, izq, j );
        if i < der:
        	Quicksort_desc( lista, i, der );

def imprimeLista_desc():
	print("Quicksort descendente: "+str(lista))    	


def Shell(lista):
    mitad = len(lista) // 2

    while mitad > 0:
        for p in range (mitad):
            reducir(lista, p, mitad)

        mitad = mitad // 2
    print("Shell: "+str(lista))	

def reducir(lista, inicio, salto):
    for i in range(inicio + salto, len(lista), salto):
        valor = lista[i]
        posicion = i

        while posicion >= salto and lista[posicion - salto ] > valor:
            lista[posicion] = lista[posicion - salto]
            posicion = posicion - salto

        lista[posicion] = valor

def Shell_desc(lista):
    mitad = len(lista) // 2

    while mitad > 0:
        for p in range (mitad):
            reducir_desc(lista, p, mitad)

        mitad = mitad // 2
    print("Shell descendente: "+str(lista))	

def reducir_desc(lista, inicio, salto):
    for i in range(inicio + salto, len(lista), salto):
        valor = lista[i]
        posicion = i

        while posicion >= salto and lista[posicion - salto ] < valor:
            lista[posicion] = lista[posicion - salto]
            posicion = posicion - salto

        lista[posicion] = valor

def Gnome(lista):
	i=1
	while i<len(lista):
		if lista[i]>=lista[i-1]:
			i=i+1
		else:
			temp=lista[i-1]
			lista[i-1]=lista[i]
			lista[i]=temp
			if i>1:
				i=i-1
	print("Gnome: "+str(lista))			

def Gnome_desc(lista):
	i=1
	while i<len(lista):
		if lista[i]<=lista[i-1]:
			i=i+1
		else:
			temp=lista[i-1]
			lista[i-1]=lista[i]
			lista[i]=temp
			if i>1:
				i=i-1
	print("Gnome descendente: "+str(lista))

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

	print("Peine: "+str(lista))

def Peine_desc(lista):
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
			if lista[i]<lista[i+gap]:
				aux=lista[i]
				lista[i]=lista[i+gap]
				lista[i+gap]=aux

				flag=True

	print("Peine descendente: "+str(lista))	


lista=[7,10,4,22,9]
Burbuja(lista)
Burbuja_desc(lista)
burbujaDirecc(lista)
burbujaDirecc_desc(lista)
Seleccion(lista)
Seleccion_desc(lista)
Insercion(lista)
Insercion_desc(lista)
Quicksort(lista,0,len(lista)-1)
imprimeLista()
Quicksort_desc(lista,0,len(lista)-1)
imprimeLista_desc()
Shell(lista)	
Shell_desc(lista)
Gnome(lista)
Gnome_desc(lista)
Peine(lista)
Peine_desc(lista)