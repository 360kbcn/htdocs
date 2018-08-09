<?php 
if(!isset($_GET["option"])){

  if(isset($_GET["mode"]) && $_GET["mode"]=="update"){

    $update = updateCategoria($_GET["id"]);

    if($update){

      echo '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                La categoría se ha modificado correctamente!
            </div>';

    }else{

      echo '<div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <strong>Error! </strong>La categoría NO se ha modificado correctamente!
          </div>';
    }
  }

  if(isset($_GET["mode"]) && $_GET["mode"]=="delete"){

    $del = delCategoria($_GET["id"]);
	
    if($del==1){

      echo '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                La categoría ha sido eliminada con exito!
            </div>';

    }elseif($del==0){

      echo '<div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <strong>Error! </strong>No se ha podido eliminar la categoría!
          </div>';
    }elseif($del==2){
		
		echo '<div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <strong>Error! </strong>No se ha podido eliminar la categoría!<br>La categoría contiene artículos
          </div>';
	}

  }

  if(isset($_GET["mode"]) && $_GET["mode"]=="add") {
    
    $add = addCategoria($_POST["nombre"], $_POST["description"]);

    if($add){

      echo '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                La categoria se ha añadido correctamente!
            </div>';

    }else{

      echo '<div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <strong>Error! </strong>No se ha podido añadir la categoria!
          </div>';
    }
  }

$categorias = getCategorias();

 echo '<table class="table table-condensed table-hover table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Contenido</th>
          <th></th>
        </tr>
        </thead>
    <tbody>';


foreach($categorias as $categoria){
  
  echo '<tr>';
  echo '<td>'.$categoria["id_categoria"].'</td>';
  echo '<td>'.$categoria["nombre"].'</td>';
  echo '<td>'.$categoria["contenido"].'</td>';
  echo '<td>
            <a href="index.php?category=categorias&option=edit&id='.$categoria["id_categoria"].'" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
            <a href="index.php?category=categorias&mode=delete&id='.$categoria["id_categoria"].'" class="btn btn-danger btn-xs" onclick="return confirm(\'Seguro que quieres eliminar la categoria?\')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
        </td>';
  echo '</tr>';
 
}
echo "</table>";

}elseif(isset($_GET["option"]) && $_GET["option"]=="create"){

?>
<form method="POST" action="index.php?category=categorias&mode=add">
  <div class="form-group">
    <label for="categoria">Categoría</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa una categoría">
  </div>
  <div class="form-group">
    <label for="descripcion">Descripción</label>
	<input type="text" class="form-control" name="description" placeholder="Descripción de la cateogria">
  </div>
  <button type="submit" class="btn btn-primary">Agregar categoria</button>
</form>
<?php

}elseif(isset($_GET["option"]) && $_GET["option"]=="edit"){

  $categoria = getCategoria($_GET["id"]);

?>
<form method="POST" action="index.php?category=categorias&mode=update&id=<?php echo $categoria["id_categoria"];?>">
  <div class="form-group">
    <label for="categoria">Categoría</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $categoria["nombre"]; ?>">
  </div>
  <div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea class="form-control" id="description" name="description" rows="3"><?php echo $categoria["contenido"]; ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Modificar categoria</button>
</form>
<?php

  } ?>