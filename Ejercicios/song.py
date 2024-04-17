def convertir(lista):
	cad=""
	for ele in lista:
		cad += ele
	return(cad)	

voc='aeiouAEIOU'
cons='bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ'
f = open ('Canc.txt','r', encoding="utf-8")
mss = f.read()
lista=len([m for m in mss if m in voc])
print(mss)
print("Cantidad de vocales: "+str(lista))
sv= open ('Canc_sinvoc.txt','w')
lis=[m for m in mss if m in cons]
print(convertir(lis))
men=sv.write(convertir(lis))
sv.close()
f.close()
