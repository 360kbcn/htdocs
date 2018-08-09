
    <?php require_once "section/header.php"; ?>
    <?php require_once "section/nav.php"; ?>
    <main class="container">

      <form action="<?php echo $data['url']; ?>/admin/crear" method="POST">

        <div class="form-group col-lg-12">
            <label for="tema">Elige un tema...</label>
              <select class="form-control" name="tema" id="tema">

                <option value="0" selected>select</option>
                <?php 

                  foreach($data['temas'] as $tema){

                    echo '<option value="'.$tema["id"].'">'.$tema["titulo"].'</option>';
                  }
                ?>
              </select>
          </div>

          <div class="form-group col-lg-12">
            <label for="tema_nou">O crea un nouevo tema</label>
            <input type="pregunta" class="form-control" id="tema_nou" name="tema_nou">
          </div>

          <div class="form-group col-lg-12">
            <label for="pregunta">Pregunta</label>
            <input type="pregunta" class="form-control" id="pregunta" name="pregunta">
          </div>

          <div class="form-group col-lg-12">
            <label for="exampleInputFile">Respuestas</label>
          </div>

          <div class="form-group col-lg-12">
              <div class="input-group">
                <input type="text" class="form-control" name="resposta_1">
                <span class="input-group-addon">
                  <input type="radio" name="resposta_ok" value="1" checked>
                </span>
              </div>
          </div>

          <div id="inputs"></div>

          <a href="#" class="btn btn-success" onclick="AddInput();">+ Agregar otra respuesta</a>


          <button type="submit" class="btn btn-primary">Crear</button>
     </form>
</main>
<hr>
  <?php require_once "section/footer.php"; ?>