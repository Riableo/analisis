/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modelo;

import java.util.Objects;

/**
 *
 * @author juan3
 */
public class Pais {
    private String nombre;
    private int numInfectados;
    private int numDead;

    public Pais(String nombre, int numInfectados, int numDead) {
        this.nombre = nombre;
        this.numInfectados = numInfectados;
        this.numDead = numDead;
    }
    public Pais(){
        
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public int getNumInfectados() {
        return numInfectados;
    }

    public void setNumInfectados(int numInfectados) {
        this.numInfectados = numInfectados;
    }

    public int getNumDead() {
        return numDead;
    }

    public void setNumDead(int numDead) {
        this.numDead = numDead;
    }

    @Override
    public int hashCode() {
        int hash = 3;
        hash = 67 * hash + Objects.hashCode(this.nombre);
        hash = 67 * hash + this.numInfectados;
        hash = 67 * hash + this.numDead;
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final Pais other = (Pais) obj;
        if (this.numInfectados != other.numInfectados) {
            return false;
        }
        if (this.numDead != other.numDead) {
            return false;
        }
        if (!Objects.equals(this.nombre, other.nombre)) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return nombre + ":\n"
                + "Numero de infectados =" + numInfectados + "\n"
                + "Numero de muertos =" + numDead+"\n"
                + "-------------------";
    }
    
    
}
