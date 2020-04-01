P=input("ingresar cad: ")
P1=input("ingresar cad: ")
P2=input("ingresar cad: ")
P3=input("ingresar cad: ")
P4=input("ingresar cad: ")
	
C=0	
if P!=P1!=P2!=P3!=P4:
	C=C+3
elif (P2==P1==P3==P4)!=P or (P==P1==P3==P4)!=P2 or (P==P2==P3==P4)!=P1 or (P==P2==P1==P4)!=P3 or (P==P1==P2==P3)!=P4:
 	C=C+2
elif P==P1==P2==P3==P4:
	C=C+1
print(C)