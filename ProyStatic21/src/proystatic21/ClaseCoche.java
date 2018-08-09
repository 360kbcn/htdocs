/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proystatic21;

/**
 *
 * @author alumno12
 */
public class ClaseCoche {
    String marca;
    String modelo;
    int precio;
    private int codCoche;
    static int numCoches;
    
    ClaseCoche(){
        numCoches++;
        this.codCoche=numCoches;
    }
    
    ClaseCoche(String marca,String modelo, int precio){
        this.marca=marca;
        this.modelo=modelo;
        this.precio=precio;
        
        numCoches++;
        this.codCoche=numCoches;
    }
    public static void mostrarContador(){
        System.out.println("Contador de Coches: "+numCoches);
    }
    public static void vendoCoche(ClaseCoche cocheB){
        cocheB.marca=null;
        cocheB.modelo=null;
        cocheB.precio=0;
        //numCoches--;
    }
    void mostrarCoche(){
        System.out.println("\nMarca :  "+marca);
        System.out.println("Modelo:  "+modelo);
        System.out.println("Precio:  "+precio);
        System.out.println("Código de Coche: "+codCoche);
        System.out.println("Número de Coches: "+numCoches);
        
    }
    /*este constructor o metodo set no es necesario xq no tenemos q escribir
    nada, lo asigna el programa si necesitamos un get para leer el cod
    void codCoche(int codCoche){
        this.codCoche=codCoche;
    }*/
    int getCodCoche(){
        return codCoche;
    }
}
