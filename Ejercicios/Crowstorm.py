Xf=int(input("Coordenada X Fiddlesticks: "))
Yf=int(input("Coordenada Y Fiddlesticks: "))
Xi=int(input("Coordenada X inicial invasor: "))
Yi=int(input("Coordenada Y inicial invasor: "))
Vi=int(input("Velocidad invasor: "))
R1=int(input("Radio de alcance: "))
R2=int(input("Radio de vuelo cuervos: "))

if Yf>=0<=Xf and Yi>=0<=Xi and Vi>=0<=R1 and R2<=100:
	if Vi==0:
		print("Y")
	elif Vi==1:
		print("N")
	else:
		print("No sé")
else:
	print("something special")	