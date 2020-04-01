/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package vista;

import controlador.ListaPais;
import java.io.FileWriter;
import java.io.IOException;
import java.util.Scanner;
import javax.swing.JOptionPane;
import modelo.Pais;

/**
 *
 * @author juan3
 */
public class Principal {

    public static void main(String[] args) throws IOException {
        String name = "";
        int num0 = 0;
        int num1 = 0;
        Scanner lc = new Scanner(System.in);
        FileWriter Fiche = new FileWriter("D:/paises.txt",true);
        boolean f = true;
        Pais p = new Pais();
        ListaPais lp = new ListaPais();
        String[] opciones = {"Administrar paises", "Ver número total de infectados",
            "Ver número total de muertos", "Salir", "Cargar datos"};
        String[] opciones0 = {"Ver un país", "Ver todos los Países", "Añadir País", "Modificar un país", "Eliminar un país",
            "Ordenar países", "Volver"};
        String[] opciones1 = {"Por número de infectados", "Por número de muertos"};
        do {
            int opc = JOptionPane.showOptionDialog(null, "Elija una opción", "El virus Corona", JOptionPane.DEFAULT_OPTION,
                    JOptionPane.INFORMATION_MESSAGE, null, opciones, opciones[0]);
            //f = false;
            switch (opc) {
                case 0:
                    int opc0 = JOptionPane.showOptionDialog(null, "Elija una opción", "El virus Corona", JOptionPane.DEFAULT_OPTION,
                            JOptionPane.INFORMATION_MESSAGE, null, opciones0, opciones0[0]);
                    switch (opc0) {
                        case 0:
                            lp.mostrarPais(JOptionPane.showInputDialog(null, "Ingrese el nombre del país", "Ver país"));
                            break;
                        case 1:
                            lp.mostrarPaises();
                            lp.muestraContenido("D:/paises.txt");
                            //f = false;
                            break;
                        case 2:
                            name = JOptionPane.showInputDialog(null, "Ingrese el nombre del país", "Añadir país", JOptionPane.INFORMATION_MESSAGE);
                            num0 = Integer.parseInt(JOptionPane.showInputDialog(null, "Ingrese el número de infectados", "Añadir país", JOptionPane.INFORMATION_MESSAGE));
                            num1 = Integer.parseInt(JOptionPane.showInputDialog(null, "Ingrese el número de muertos", "Añadir país", JOptionPane.INFORMATION_MESSAGE));
                            p = new Pais(name, num0, num1);
                            lp.CrearPais(p);
                            lp.anadirPais(p);
                            break;
                        case 3:
                            name = JOptionPane.showInputDialog(null, "Ingrese el nombre del país a modificar", "Modificar país", JOptionPane.INFORMATION_MESSAGE);
                            lp.modificarPais(name);
                            break;
                        case 4:
                            name = JOptionPane.showInputDialog(null, "Ingrese el nombre del país a eliminar", "Modificar país", JOptionPane.INFORMATION_MESSAGE);
                            lp.eliminarPais(name);
                            break;
                        case 5:
                            int opc1 = JOptionPane.showOptionDialog(null, "Elija una opción", "El virus Corona", JOptionPane.DEFAULT_OPTION,
                                    JOptionPane.INFORMATION_MESSAGE, null, opciones1, opciones1[0]);
                            switch (opc1) {
                                case 0:
                                    lp.organizarPorInfectados();
                                    lp.mostrarPaises();
                                    break;
                                case 1:
                                    lp.organizarPorMuertos();
                                    lp.mostrarPaises();
                                    break;
                                default:
                                    break;
                            }
                            break;
                        case 6:
                            break;
                        default:
                            break;
                    }

                    break;
                case 1:
                    JOptionPane.showMessageDialog(null, lp.totalInfectados(), "Total infectados", JOptionPane.INFORMATION_MESSAGE);
                    break;
                case 2:
                    JOptionPane.showMessageDialog(null, lp.totalMuertos(), "Total muertos", JOptionPane.INFORMATION_MESSAGE);
                    break;
                case 3:
                    f = false;
                    break;
                case 4:
                    //ASI SE AÑADE UN PAÍS AL QUEMARLO
                    lp.anadirPais(p = new Pais("España", 57786, 4365));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Colombia", 491, 6));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Argentina", 589, 12));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Bahamas", 9, 0));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Bolivia", 61, 0));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Brasil", 2985, 77));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Canada", 4046, 36));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Costa Rica", 231, 2));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Cuba", 67, 2));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Dominica", 11, 0));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Ecuador", 1403, 34));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("El Salvador", 13, 0));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Estados Unidos", 85505, 1067));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Guatemala", 25, 1));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Haiti", 8, 0));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Honduras", 67, 1));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Jamaica", 26, 1));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Mexico", 475, 6));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Nicaragua", 2, 0));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Panama", 647, 9));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Paraguay", 41, 3));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Peru", 580, 9));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Republica Dominicana", 488, 10));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Uruguay", 238, 0));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Venezuela", 107, 1));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Antigua y Barbuda", 7, 0));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Barbados", 24, 0));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Belice", 2, 0));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Granada", 1, 0));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Guyana", 5, 1));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("San Cristobal y Nieves", 2, 0));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("San Vicente y las Granadinas", 1, 0));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Santa Lucia", 3, 0));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Surinam", 8, 0));
                    Fiche.write("pais " + p + "\n");
                    lp.anadirPais(p = new Pais("Trinidad y Tobago", 65, 1));
                    Fiche.write("pais " + p + "\n");                                        
                    Fiche.close();
                    break;
                default:
                    f = false;
                    break;
            }
        } while (f == true);
    }
}
