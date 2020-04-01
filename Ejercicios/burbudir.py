def burbuja_direccional(arrayN):
    izq = 0
    der = len(arrayN)-1
    ultimo = len(arrayN)-1
    while True:
        entra = False
        for i in range(izq, der):
            if arrayN[i]>arrayN[i + 1]:
                aux = arrayN[i]
                arrayN[i] = arrayN[i + 1]
                arrayN[i + 1] = aux
                entra=True

        for k in range(der-1, izq-1,-1):
            if arrayN[k]>arrayN[k + 1]:
                aux = arrayN[k]
                arrayN[k] = arrayN[k + 1]
                arrayN[k + 1] = aux
                entra = True

        if (entra==False):
            break
    mostrar_arreglo(arrayN)

def mostrar_arreglo(arrayN):
    print('Elemento '+'-------> '+str(arrayN))

arrayN=[5,3,0,-65,9,112,435,23,-89,-64]
burbuja_direccional(arrayN)    