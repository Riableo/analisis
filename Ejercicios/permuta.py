def perms(cade):        
       if(len(cade)==1): return [cade]
       result=[]
       for i,v in enumerate(cade):
           result += [v+p for p in perms(cade[:i]+cade[i+1:])]
       return result
n=input("Ingrese cadena: ")
print('\n'.join(perms(n)))