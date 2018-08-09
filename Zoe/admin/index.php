<?php

if(isset($_GET["logout"])){

	session_start();

	$_SESSION = [];
	session_destroy();
}

require_once("php/dades.php");
require_once("php/functions.php");

session_start();
if(!isset($_SESSION['user'])) header("Location: login.php");

?>
<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<title>Admin page - Whatapoo</title>
	<link rel="icon" href="img/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="trumbowyg/ui/trumbowyg.css">

</head>
<body>

    <div class="container">

        <div class="row">

            <div class="col-md-10 col-md-offset-1">

                <nav class="navbar navbar-default">

				    <div class="container-fluid">
				        <!-- Brand and toggle get grouped for better mobile display -->
				        <div class="navbar-header">
				            
				            <a class="navbar-brand" href="index.php"><img src="img/whatapoo_H_logo.png" height="50" alt="Logo whatapoo" style="margin-top: -15px;"></a>
				        </div>

				        <!-- Collect the nav links, forms, and other content for toggling -->
				        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

	            
				            <ul class="nav navbar-nav">
				                <li <?php if(!isset($_GET["category"])) echo 'class="active"';?>><a href="index.php">Inicio</a></li>

		                        <li <?php if(isset($_GET["category"]) && $_GET["category"]=="categorias") echo 'class="dropdown active"'; else echo 'class="dropdown"';?>>
			                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
			                        <ul class="dropdown-menu">
			                            <li><a href="index.php?category=categorias">Ver categorias</a></li>
			                            <li><a href="index.php?category=categorias&option=create">Agregar categoria</a></li>
			                        </ul>
		                    	</li>
	                
	              
	                            <li <?php if(isset($_GET["category"]) && $_GET["category"]=="articulos") echo 'class="dropdown active"'; else echo 'class="dropdown"';?>>
			                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Artículos<span class="caret"></span></a>
			                        <ul class="dropdown-menu">
			                            <li><a href="index.php?category=articulos">Ver artículos</a></li>
			                            <li><a href="index.php?category=articulos&option=create">Agregar artículo</a></li>
			                        </ul>
			                    </li>
	                        </ul>

	                        <ul class="nav navbar-nav navbar-right">
	                        	<li><a href="index.php?logout">Cerrar sesión</a></li>
	                        </ul>
	            
				        </div><!-- /.navbar-collapse -->
			    	</div><!-- /.container-fluid -->
				</nav>

	            <div class="panel panel-default">

	                <div class="panel-heading">
	                	<h3 class="panel-title">Welcome 
						<?php echo $_SESSION["user"]; ?>
	                	</h3>
	                </div>

	                <div class="panel-body">
						<?php 

						if(isset($_GET["category"])){

							include("libs/".$_GET["category"].".php");
						}
						?>
	            	</div>

		        </div>

			    <footer class="admin-footer">
			        <nav class="navbar navbar-default">
			            <div class="container-fluid">
			                <div class="collapse navbar-collapse">
			                	<p class="navbar-text navbar-left"><a href="../api">Api</a></p>
			                    <p class="navbar-text navbar-right"><a href="http://www.whatapoo.com">Whatapoo</a></p>
			                </div>
			            </div>
			        </nav>
			    </footer>

			</div>

		</div>

	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="trumbowyg/trumbowyg.js"></script>
	 <script>
        $('#description').trumbowyg();
    </script>

</body>
</html>
