def gasto(time,vel):
	dist=time*vel
	dista=dist/12
	return(dista)

rest = 0
while rest == 0:
	try:
		t = int(input("Digite tiempo del viaje (hrs): "))
		V = int(input("Digite velocidad media (Km/h): "))
		print("Combustible gastado: "+format(gasto(t,V),'.3f')+" L")
	
	except ValueError:
		print("Por favor digite solo números")

	rest=int(input("Volver a realizar \n 0: sí !0:No: "))

print("Fin del programa"	)