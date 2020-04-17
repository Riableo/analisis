#Factorial iter
n=int(input("Introduce numero: "))
x=1
for i in range(1,n+1):
	x=x*i
print("Fact: "+str(x))

#Factorial recursivo
def factor(n):
	if n==0 or n ==1:
		return 1
	else:	
		return n*factor(n-1)	

print("Fact: "+str(factor(5)))
#Fibonacci	
#Invertir
def invertir(n):
    if n<10:
        return n
    else:
        return int((n%10)*10+invertir(n/10))

num=int(input("Ingrese numero: "))
print("Nume invertido: "+str(invertir(num)))
#Numero menor vector
