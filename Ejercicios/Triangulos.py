rest = 0
while rest == 0:

	Num=float(input("Ingresar numero: "))
	Nume=float(input("Ingresar numero: "))
	Nu=float(input("Ingresar numero: "))

	while Num<0 or Nume<0 or Nu<0 :
		print("Numero erroneo, mayor a cero pls")
		Num=float(input("Ingresar numero: "))
		Nume=float(input("Ingresar numero: "))
		Nu=float(input("Ingresar numero: "))

	mylist = [Num,Nume,Nu]
	mylist.sort()
	C=mylist[0]
	B=mylist[1]
	A=max(mylist)

	if A>=(B+C):
		print("NAO FORMA TRIANGULO")
	elif A**2 == B**2 + C**2:
		print("TRIANGULO RETANGULO")
	elif A**2>B**2 + C**2:
		print("TRIANGULO OBTUSANGULO")
	elif A**2<B**2 + C**2:
		print("TRIANGULO ACUTANGULO")
	
	if A==B and B==C:
		print("TRIANGULO EQUILATERO")
	elif A==B and C!=B or C==A and B!=A or C==B and C!=A:
			print("TRIANGULO ISOSCELES")
	
	rest=int(input("Volver a realizar \n 0: sí !0: No: "))

print("Finish")
