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
public class ProyStatic21 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        //coche1 no existe x q no esta creado y sale error
        //con static no importa q no este creado se puede usar
        //System.out.println("Marca Coche1: "+coche1.marca);
        System.out.println("Numero coches: "+ClaseCoche.numCoches);
        
        ClaseCoche coche1 = new ClaseCoche("Ford","Fiesta",1500);
        System.out.println("Marca Coche1: "+coche1.marca);
        System.out.println("Numero Coches1: "+ClaseCoche.numCoches);
        
        ClaseCoche coche2 = new ClaseCoche("Fiat","Panda",1000);
        System.out.println("Marca Coche2: "+coche2.marca);
        System.out.println("Numero Coches2: "+ClaseCoche.numCoches);
        
        ClaseCoche coche3 = new ClaseCoche();
        coche3.marca="Honda";
        coche3.modelo="Civic";
        coche3.precio=7000;
        System.out.println("Marca Coche3: "+coche3.marca);
        System.out.println("Numero Coches3: "+ClaseCoche.numCoches);
        //muestra el contador y ahorra los sout p contar 1*1
        ClaseCoche.mostrarContador();
        
        System.out.println("Código Privado: "+coche2.getCodCoche());
        
        coche1.mostrarCoche();
        coche2.mostrarCoche();
        coche3.mostrarCoche();
        ClaseCoche.vendoCoche(coche3);
          System.out.println("\n---Coche vendido---");
//        System.out.println("Marca Coche3: "+coche3.marca);
//        System.out.println("Modelo Coche3: "+coche3.modelo);
//        System.out.println("Precio Coche3: "+coche3.precio);
//        System.out.println("Numero Coches3: "+ClaseCoche.numCoches);
//        ClaseCoche.mostrarContador();
        
        coche3.mostrarCoche();
    }
    
}
