<?php
if(!isset($_GET["option"])){

  if(isset($_GET["mode"]) && $_GET["mode"]=="update"){

    $update = updateArticulo($_GET["id"]);

    if($update){

      echo '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                EL artículo se ha modificado con exito!
            </div>';

    }else{

      echo '<div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <strong>Error! </strong>No se ha modificado el artículo!
          </div>';
    }
  }

  if(isset($_GET["mode"]) && $_GET["mode"]=="delete"){

    $del = delArticulo($_GET["id"]);

    if($del){

      echo '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                EL artículo se ha eliminado con exito!
            </div>';

    }else{

      echo '<div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <strong>Error! </strong>No se ha podido eliminar el artículo!
          </div>';
    }

  }

  if(isset($_GET["mode"]) && $_GET["mode"]=="add") {
    
    $add = addArticulo();

    if($add){

      echo '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                EL artículo se añadido con exito!
            </div>';

    }else{

      echo '<div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <strong>Error! </strong>No se ha podido añadir el artículo!
          </div>';
    }
  }

  echo '<table class="table table-condensed table-hover table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Categoria</th>
              <th>Precio</th>
              <th></th>
            </tr>
          </thead>
          <tbody>';

$articulos = getArticulos();

foreach($articulos as $articulo){
  
  echo '<tr>';
  echo '<td>'.$articulo["id_articulo"].'</td>';
  echo '<td>'.$articulo["titulo"].'</td>';
  echo '<td>'.$articulo["nombre"].'</td>';
  echo '<td>'.$articulo["price"].'</td>';
  echo '<td>
            <a href="index.php?category=articulos&option=edit&id='.$articulo["id_articulo"].'" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
            <a href="index.php?category=articulos&mode=delete&id='.$articulo["id_articulo"].'" class="btn btn-danger btn-xs" onclick="return confirm(\'Seguro que quieres eliminar el artículo?\')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
        </td>';
  echo '</tr>';
 
}
echo "</table>";

}elseif(isset($_GET["option"]) && $_GET["option"]=="create"){


  $categorias = getCategorias();
  ?>
<form method="POST" action="index.php?category=articulos&mode=add" enctype="multipart/form-data">
  <div class="form-group">
    <label for="titulo">Nombre del artículo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="nombreHelp" placeholder="Nombre del artículo" required="required">
  </div>

  <div class="form-group">
    <label for="categoria">Categoría</label>
    <select class="form-control" id="categoria" name="categoria" required="required">
      <?php 

      foreach ($categorias as $categoria) { 

        echo '<option value="'.$categoria["id_categoria"].'">'.$categoria["nombre"].'</option>'; 
      }
    ?>
    </select>
  </div>

  <div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea class="form-control" id="description" name="description" rows="3" required="required"></textarea>
  </div>
  <div class="form-group">
    <label for="price">Precio en €</label>
    <input type="number" class="col-3" id="price" name="price" placeholder="€" required="required">
  </div>
  <div class="form-group">
    <label for="img">Subir imagenes</label>
    <input type="file" class="form-control-file" id="img" name="img" aria-describedby="img" required="required">
    <small id="fileHelp" class="form-text text-muted">Imagen en formato JPG. 3 MB maximo.</small>
  </div>

  </fieldset>

  <button type="submit" class="btn btn-primary">Agregar artículo</button>
</form>
<?php
}elseif(isset($_GET["option"]) && $_GET["option"]=="edit"){

  $articulo = getArticulo($_GET["id"]);

  $categorias = getCategorias();

  ?>
  <form method="POST" action="index.php?category=articulos&mode=update&id=<?php echo $articulo["id_articulo"];?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="titulo">Nombre del artículo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="nombreHelp" value="<?php echo $articulo["titulo"];?>">
  </div>

  <div class="form-group">
    <label for="exampleSelect1">Categoría</label>
    <select class="form-control" id="categoria" name="categoria">
    <?php 

    foreach ($categorias as $categoria) {

      if($categoria["id_categoria"]==$articulo["categoria"]){

        echo '<option value="'.$categoria["id_categoria"].'" selected>'.$categoria["nombre"].'</option>';
      }else{

        echo '<option value="'.$categoria["id_categoria"].'">'.$categoria["nombre"].'</option>';
      }
      
      
    }
    ?>
    </select>
  </div>

  <div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea class="form-control" id="description" name="description" rows="3"><?php echo $articulo["content"];?></textarea>
  </div>
  <div class="form-group">
    <label for="price">Precio en €</label>
    <input type="number" class="col-3" id="price" name="price" value="<?php echo $articulo["price"];?>">
  </div>
  <div class="form-group">
    <label for="imagenes">Subir imagenes</label>
    <input type="file" class="form-control-file" id="img" name="img" aria-describedby="img">
    <small id="fileHelp" class="form-text text-muted">Imagen en formato JPG. 3 MB maximo.</small>
  </div>

  </fieldset>

  <button type="submit" class="btn btn-primary">Modificar artículo</button>
</form>
  <?php
}
?>

