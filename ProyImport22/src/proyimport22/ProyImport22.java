/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proyimport22;
//importa la clase desde la carpeta ProyImport22B
    import ProyImport22B.ClaseMascotaB;
//importa todo desde la carpeta ProyImport22B
    //import ProyImport22B.*;
   import proyimport23.*;
/**
 *
 * @author alumno12
 */
public class ProyImport22 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        ClasePersona p1 = new ClasePersona();
        ClaseMascotaB m1 = new ClaseMascotaB();
        
        System.out.println("Nombre mascota: "+m1.nombre+".");
        
        System.out.println("Nombre persona: "+p1.nombre+".");
        
        ClaseSerVivo sv1 = new ClaseSerVivo();
    }
    
}
