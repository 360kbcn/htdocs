<?php

class CMS {

	private $ci;

	function __construct(Interop\Container\ContainerInterface $ci){

		$this->ci = $ci;
	}



  	public function Home($request, $response, $args){

  		$dades["url"] = $request->getUri()->getBasePath();
  		$dades["apartat"] = ["Home"];


  		//Carrreguem les categories
  		$sql_categoria = "SELECT id_categoria, nombre, contenido FROM categoria;";

		$result_categoria = $this->ci->bd->query($sql_categoria);

		if(!$result_categoria){

			$msg = $con->errorInfo()[2];
			$dades["error"] = $msg;
			$dades["categories"] = [];
		}else{

			$dades["categories"] = $result_categoria->fetchAll();
		}


		$this->ci->view->render($response, "home.php", $dades);

	    return $response;

  	}

  	public function Categoria($request, $response, $args){

  		$dades["url"] = $request->getUri()->getBasePath();


  		$id_categoria = $args["id"];

  		//Carrreguem els articles de la categoria
  		$sql_categoria = "SELECT * FROM articulo WHERE categoria='".$id_categoria."';";

		$result_categoria = $this->ci->bd->query($sql_categoria);

		if(!$result_categoria){

			$msg = $con->errorInfo()[2];
			$dades["error"] = $msg;
			$dades["categoria"] = [];
		}else{

			$dades["categoria"] = $result_categoria->fetchAll();
		}

		$sql_categoria_info = "SELECT * FROM categoria WHERE id_categoria='".$id_categoria."';";
		$result_categoria_info = $this->ci->bd->query($sql_categoria_info);

		$categoria = $result_categoria_info->fetch();

		$dades["apartat"] = $categoria["nombre"];


		$this->ci->view->render($response, "categoria.php", $dades);

	    return $response;

  	}

  	public function Articulo($request, $response, $args){

  		$dades["url"] = $request->getUri()->getBasePath();

  		$id_article = $args["id"];

  		//Carrreguem les categories
  		$sql_articulo = "SELECT articulo.id_articulo, articulo.titulo, articulo.content, articulo.price, articulo.categoria, categoria.nombre FROM articulo INNER JOIN categoria ON articulo.categoria=categoria.id_categoria WHERE id_articulo='".$id_article."';";

		$result_articulo = $this->ci->bd->query($sql_articulo);

		if(!$result_articulo){

			$msg = $con->errorInfo()[2];
			$dades["error"] = $msg;
			$dades["articulo"] = [];
		}else{

			$dades["articulo"] = $result_articulo->fetch();
		}

		//Mirem a quina categoria està l'article

		$this->ci->view->render($response, "articulo.php", $dades);

	    return $response;

  	}
}


class API {

	private $ci;

	function __construct(Interop\Container\ContainerInterface $ci){

		$this->ci = $ci;
	}



  	public function Doc($request, $response, $args){

  		$dades["url"] = $request->getUri()->getBasePath();

  		$sql = "SELECT id_categoria, nombre FROM categoria;";

		$result = $this->ci->bd->query($sql);
		//$llistat = $result->fetchAll();

		if(!$result){

			$msg = $con->errorInfo()[2];
			$dades["error"] = $msg;
			$dades["llistat"] = [];
		}else{

			$dades["llistat"] = $result->fetchAll();
			$dades["url"] = $request->getUri()->getBasePath();
		}

		$this->ci->view->render($response, "api.php", $dades);

	    return $response;

  	}

  	public function Articulo($request, $response, $args){


  		$id_article = $args["id"];

  		//Carrreguem les categories
  		$sql_articulo = "SELECT * FROM articulo WHERE id_articulo='".$id_article."';";

		$result_articulo = $this->ci->bd->query($sql_articulo);

		if(!$result_articulo){

			$msg = $con->errorInfo()[2];
			$dades["error"] = $msg;
			$dades["articulo"] = [];
		}else{

			$dades["articulo"] = $result_articulo->fetch();
		}


		 $response = $response->withJson($dades["articulo"]);

	    return $response;

  	}

  	public function Articulos($request, $response, $args){

  		$categoria = $request->getQueryParam("categoria", false);

  		if($categoria){

  			//Consultem els articles que hi han a una categoria
  			$sql_articulo = "SELECT * FROM articulo WHERE categoria='".$categoria."';";
  		}else{

  			//TOTS els articles
  			$sql_articulo = "SELECT * FROM articulo;";
  		}


		$result_articulo = $this->ci->bd->query($sql_articulo);

		if(!$result_articulo){

			$msg = $con->errorInfo()[2];
			$dades["error"] = $msg;
			$dades["articulos"] = [];
		}else{

			$dades["articulos"] = $result_articulo->fetchAll();
		}


		 $response = $response->withJson($dades["articulos"]);

	    return $response;

  	}


}

?>
