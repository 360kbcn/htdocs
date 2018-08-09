<?php
//arxiu amb les dades de connexió a la BBDD
require_once("dades.php");


//Fem la conexió amb la BBDD
try{

	$conn = new PDO("mysql:host=$dbhost; dbname=$dbname", $dbuser, $dbpass);
}catch(PDOException $e){

	$conn = null;
}

//Funcions pels articles
function getArticulos(){

	global $conn;

	if(!$conn) return [];

	
	$sql = "SELECT articulo.id_articulo, articulo.titulo, articulo.content, articulo.price, articulo.categoria, categoria.nombre FROM articulo INNER JOIN categoria ON articulo.categoria=categoria.id_categoria ORDER BY articulo.id_articulo DESC;";

	$result = $conn->query($sql);

	if($result) return $result->fetchAll();
	else return [];
}

function getCategorias(){

	global $conn;

	if(!$conn) return [];

	
	$sql = "SELECT * FROM categoria  ORDER BY id_categoria DESC;";

	$result = $conn->query($sql);

	if($result) return $result->fetchAll();
	else return [];
}

function getArticulo($id){

	global $conn;

	if(!$conn) return [];

	$sql = "SELECT * FROM articulo WHERE id_articulo ='".$id."';";

	$result = $conn->query($sql);

	if($result) return $result->fetch(PDO::FETCH_ASSOC);
	else return [];

}

function updateArticulo($id){

	global $conn;

	if(!$conn) return false;

	//Consulta update article
	$sql_update = "UPDATE articulo 
				SET titulo='".$_POST["titulo"]."',
				 content='".$_POST["description"]."', 
				 price='".$_POST["price"]."', 
				 categoria='".$_POST["categoria"]."' 
				 WHERE `id_articulo` = '".$id."' ";

	$result_update = $conn->exec($sql_update);
	
	//Pujem l'arxiu de l'article (si n'hi ha)
	if(!empty($_FILES["img"]["name"])){
			
		$ruta = "../img/articulos/".$id.".jpg";
		
        if(move_uploaded_file($_FILES["img"]['tmp_name'], $ruta)){
			
			//Redimensionem la imatge
			//Primer calculem la nova mplada, donat q l'alçada serà sempre 450px
			$img = ImageCreateFromJpeg($ruta);
			$imgX = imagesx($img);
			$imgY = imagesy($img);
			$newX = round((450 * $imgX) / $imgY);
			//Redimensionem amb els nous paràmetres
			redimensionar_jpg($ruta, $ruta, $newX, 450, 100);
			
        }else{
          echo '<div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <strong>Error! </strong>La imagen no se ha podido subir!
          </div>';
        }
	}

	//retornem true si tot ha anat bé
	if($result_update<0) return false; else return true;
}

function delArticulo($id){

	global $conn;

	if(!$conn) return false;

	//Consulta delete article
	$sql_del = "DELETE FROM articulo WHERE `id_articulo` = '".$id."' ";
	$result_del = $conn->exec($sql_del);
	
	if(file_exists("../img/articulos/".$id.".jpg")) unlink("../img/articulos/".$id.".jpg");
	

	//retornem true si tot ha anat bé
	if($result_del<0) return false; else return true;
}

function addArticulo(){

	global $conn;

	if(!$conn) return false;

	//Consulta insert article
	$sql_add = "INSERT INTO `articulo` (`titulo`, `content`, `price`, `categoria`) 
	VALUES 
	('".$_POST["titulo"]."', '".addslashes($_POST["description"])."', '".$_POST["price"]."', '".$_POST["categoria"]."');";
	
	$result_add = $conn->exec($sql_add);

	
	//Pujem l'arxiu de l'article (si n'hi ha)
	if(!empty($_FILES["img"])){
		
		$sql_article = "SELECT id_articulo FROM articulo WHERE price='".$_POST["price"]."' AND titulo='".$_POST["titulo"]."' AND categoria='".$_POST["categoria"]."' LIMIT 0, 1;";
		$result_article = $conn->query($sql_article);
		$result_article = $result_article->fetch(PDO::FETCH_ASSOC);
		
		$ruta = "../img/articulos/".$result_article["id_articulo"].".jpg";
		
        if(move_uploaded_file($_FILES["img"]['tmp_name'], $ruta)){
			
			//Redimensionem la imatge
			//Primer calculem la nova mplada, donat q l'alçada serà sempre 450px
			$img = ImageCreateFromJpeg($ruta);
			$imgX = imagesx($img);
			$imgY = imagesy($img);
			$newX = round((450 * $imgX) / $imgY);
			//Redimensionem amb els nous paràmetres
			redimensionar_jpg($ruta, $ruta, $newX, 450, 100);
			
        }else{
          echo '<div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <strong>Error! </strong>La imagen no se ha podido subir!
          </div>';
        }
	}

	//retornem true si tot ha anat bé
	if($result_add==0) return false; else return true;
}

//Funcions per les categories
function getCategoria($id){

	global $conn;

	if(!$conn) return [];

	$sql = "SELECT * FROM categoria WHERE id_categoria ='".$id."';";
	$result = $conn->query($sql);

	if($result) return $result->fetch(PDO::FETCH_ASSOC);
	else return [];

}

function updateCategoria($id){

	global $conn;

	if(!$conn) return false;

	//Consulta update categoria
	$sql_update = "UPDATE categoria 
				SET nombre='".$_POST["nombre"]."',
				 contenido='".$_POST["description"]."' 
				 WHERE `id_categoria` = '".$id."' ";

	$result_update = $conn->exec($sql_update);

	//retornem true si tot ha anat bé
	if($result_update<0) return false; else return true;
}

function addCategoria($nombre, $contenido){

	global $conn;

	if(!$conn) return false;

	//Consulta instert categoria
	$sql_add = "INSERT INTO `categoria` (`nombre`, `contenido`) 
	VALUES 
	('".$nombre."', '".$contenido."');";

	$result_add = $conn->exec($sql_add);

	//retornem true si tot ha anat bé
	if($result_add<0) return false; else return true;
}

function delCategoria($id){

	global $conn;

	if(!$conn) return false;
	
	//Primer mirem que la categoria NO contingui cap article
	$sql_categoria = "SELECT count(*) FROM `articulo` WHERE categoria='".$id."'";
	$result_categoria = $conn->query($sql_categoria);
	
	if($result_categoria->fetch(PDO::FETCH_ASSOC)["count(*)"]>=1){
		
		return 2;
	}

	//Consulta delete article
	$sql_del = "DELETE FROM categoria WHERE `id_categoria` = '".$id."' ";

	$result_del = $conn->exec($sql_del);

	//retornem true si tot ha anat bé
	if($result_del<0) return 0; else return 1;
}
?>