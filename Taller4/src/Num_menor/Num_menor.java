package Num_menor;

import java.util.Scanner;

public class Num_menor {
    
    public static void main(String[] args) {
        
        Scanner sn = new Scanner(System.in);
        int longitud;
        System.out.println("Ingrese la logitud del arreglo: ");
        longitud = sn.nextInt();
      
        int i;
        int[] numeros = new int[longitud];

        

        for(i=0; i<numeros.length; i++)
        {
            System.out.printf("Introduzca número %d: ", i+1);
            numeros[i] = sn.nextInt();
        }
        
        int menor = 0;
        menor = numeros[0];
        
        
        for (int j = 0; j < numeros.length; j++) {
            
            if (numeros[i] > menor) {
              
                menor = numeros[i];
                
            }
            
        }
        
        System.out.println("El número menor es: "+menor);
        
        
        
    }
    
}
