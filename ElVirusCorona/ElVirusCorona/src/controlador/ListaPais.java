/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controlador;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Scanner;
import javax.swing.JOptionPane;
import modelo.Pais;

/**
 *
 * @author juan3
 */
public class ListaPais {

    private final ArrayList<Pais> listaPaises;

    public ListaPais() {
        this.listaPaises = new ArrayList<>();
    }

    public boolean anadirPais(Pais p) throws IOException {
        boolean flag = true;
        if (this.listaPaises.isEmpty()) {
            this.listaPaises.add(p);
            return flag;
        } else {
            Pais p_aux = p;
            for (int i = 0; i < this.listaPaises.size(); i++) {
                if (this.listaPaises.get(i).getNombre().equalsIgnoreCase(p_aux.getNombre())) {
                    JOptionPane.showMessageDialog(null, "El país ya se encuentra en la lista",
                            "País en la lista", JOptionPane.WARNING_MESSAGE);
                    flag = false;
                }
            }
        }
        if (flag == true) {
            this.listaPaises.add(p);
        }
        return flag;
    }

    public String CrearPais(Pais p) throws IOException {
        String x;
        FileWriter Fiche = null;
        Fiche = new FileWriter("D:/paises.txt", true);
        Fiche.write("Pais " + p + "\n");
        Fiche.close();
        x = ("algo hizo");
        return x;
    }
    
    public boolean eliminarPais(String pais) {
        String p_aux = pais;
        boolean flag = true;
        if (this.listaPaises.isEmpty()) {
            return flag;
        } else {
            for (int i = 0; i < this.listaPaises.size(); i++) {
                if (this.listaPaises.get(i).getNombre().equalsIgnoreCase(p_aux)) {
                    this.listaPaises.remove(i);
                    flag = true;
                    break;
                } else {
                    flag = false;
                }
            }
        }
        return flag;
    }

    public int existenciaPais(String pais) {
        int pos = -1;
        if (this.listaPaises.isEmpty()) {
            return pos = -2;
        } else {
            for (int i = 0; i < this.listaPaises.size(); i++) {
                if (this.listaPaises.get(i).getNombre().equalsIgnoreCase(pais)) {
                    return i;
                }
            }
        }
        return pos;
    }

    public void modificarPais(String pais) {
        int vale = existenciaPais(pais);
        if (vale == -1) {
            JOptionPane.showMessageDialog(null, "Ese país no se encuentra en la lista",
                    "País en la lista", JOptionPane.WARNING_MESSAGE);
        } else if (vale == -2) {
            JOptionPane.showMessageDialog(null, "La lista de países está vacía",
                    "País en la lista", JOptionPane.WARNING_MESSAGE);
        } else {
            listaPaises.get(vale).setNumDead(Integer.parseInt(JOptionPane.showInputDialog("Ingrese el número de infectados")));
            listaPaises.get(vale).setNumInfectados(Integer.parseInt(JOptionPane.showInputDialog("Ingrese el número de infectados")));
        }
    }

    public void mostrarPais(String pais) {
        if (!listaPaises.isEmpty()) {
            for (int i = 0; i < this.listaPaises.size(); i++) {
                if (this.listaPaises.get(i).getNombre().equalsIgnoreCase(pais)) {
                    System.out.println("-- " + this.listaPaises.get(i).toString() + " --");
                }
            }
        } else {
            JOptionPane.showMessageDialog(null, "La lista está vacía", "Ver países", JOptionPane.WARNING_MESSAGE);
        }

    }
   
    public void muestraContenido(String archivo) throws FileNotFoundException, IOException {
        String cadena;
        FileReader f = new FileReader(archivo);
        BufferedReader b = new BufferedReader(f);
        while((cadena = b.readLine())!=null) {
            System.out.println(cadena);
        }
        b.close();
    }
    
    public void mostrarPaises() throws IOException {
        if (listaPaises.isEmpty()) {
            JOptionPane.showMessageDialog(null, "La lista está vacía", "Ver países", JOptionPane.WARNING_MESSAGE);
        } else {
            for (int i = 0; i < this.listaPaises.size(); i++) {
                System.out.println("-- " + this.listaPaises.get(i).toString() + " --");
            }
        }

    }

    public void organizarPorInfectados() {
        int n = this.listaPaises.size();
        int gap = n;
        boolean flag = true;
        while (gap != 1 || flag == true) {
            gap = siGap(gap);
            flag = false;
            for (int i = 0; i < n - gap; i++) {
                if (this.listaPaises.get(i).getNumInfectados() > this.listaPaises.get(i + gap).getNumInfectados()) {
                    Pais aux = this.listaPaises.get(i);
                    this.listaPaises.set(i, this.listaPaises.get(i + gap));
                    this.listaPaises.set(i + gap, aux);
                    flag = true;
                }
            }
        }
    }

    public void organizarPorMuertos() {
        int n = this.listaPaises.size();
        int gap = n;
        boolean flag = true;
        while (gap != 1 || flag == true) {
            gap = siGap(gap);
            flag = false;
            for (int i = 0; i < n - gap; i++) {
                if (this.listaPaises.get(i).getNumDead() > this.listaPaises.get(i + gap).getNumDead()) {
                    Pais aux = this.listaPaises.get(i);
                    this.listaPaises.set(i, this.listaPaises.get(i + gap));
                    this.listaPaises.set(i + gap, aux);
                    flag = true;
                }
            }
        }
    }

    private int siGap(int gap) {
        gap = (gap * 10) / 13;
        if (gap < 1) {
            return 1;
        }
        return gap;
    }

    public int totalMuertos() {
        int dead = 0;
        if (!this.listaPaises.isEmpty()) {
            for (int i = 0; i < this.listaPaises.size(); i++) {
                dead = dead + listaPaises.get(i).getNumDead();
            }
        }
        return dead;
    }

    public int totalInfectados() {
        int infectados = 0;
        if (!this.listaPaises.isEmpty()) {
            for (int i = 0; i < this.listaPaises.size(); i++) {
                infectados = infectados + this.listaPaises.get(i).getNumInfectados();
            }
        }
        return infectados;
    }
}
