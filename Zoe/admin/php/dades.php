<?php 

//Conexió BBDD
$dbuser = "root";
$dbpass = "";
$dbname = "cms";
$dbhost = "localhost";

//Login i contrasenya
$login = "admin";
$pass = "admin";

//Funció per validar l'usuari
function validarUser($user, $password){
      
    global $login;
    global $pass;

    $i = false;

    if (($user==$login) && ($password==$pass)){
    	
        $i = true;
    }


    if($i){

    	return true;
    }else{

    	return false;
    }
      
}


function redimensionar_jpg($img_original, $img_nueva, $img_nueva_anchura, $img_nueva_altura, $img_nueva_calidad)
{
	// crear una imagen desde el original 
	$img = ImageCreateFromJPEG($img_original);
	// crear una imagen nueva 
	$thumb = imagecreatetruecolor($img_nueva_anchura,$img_nueva_altura);
	// redimensiona la imagen original copiandola en la imagen 
	ImageCopyResized($thumb,$img,0,0,0,0,$img_nueva_anchura,$img_nueva_altura,ImageSX($img),ImageSY($img));
 	// guardar la nueva imagen redimensionada donde indicia $img_nueva 
	ImageJPEG($thumb,$img_nueva,$img_nueva_calidad);
	ImageDestroy($img);
}

?>