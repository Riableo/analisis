def Insercion(Vector):
    for i in range(1,len(Vector)):
        actual = Vector[i]
        j = i
        #Desplazamiento de los elementos de la matriz }
        while j>0 and Vector[j-1]>actual:
            Vector[j]=Vector[j-1]
            j = j-1
        #insertar el elemento en su lugar
        Vector[j]=actual
    return(Vector) 

te = [8, 1, 3, 2]


print(Insercion(te))
