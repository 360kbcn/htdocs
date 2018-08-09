 <?php require_once "section/header.php"; ?>
        <?php require_once "section/nav.php"; ?>
        <main class="container">
          <div class="row">
            <div class="col-md-12">

              <h3><?php echo $data["pregunta"]['pregunta']; ?></h3>
              <form action="<?php echo $data['url']; ?>/<?php echo $data["apartat"]; ?>" method="GET">


              <?php
              foreach($data["respostes"] as $resposta){
                echo '<div>
                  <input type="radio" name="resposta" value="'.$resposta['id'].'">
                  <label>'.$resposta['respuesta'].'</label>
                      </div>';
              }
               ?>
               
             
             </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <button class="btn btn-success" type="submit">Validar</button>
                </form>
              </div>
              <div class="col-md-6">
                <a href="<?php echo $data['url']; ?>/<?php echo $data["apartat"]; ?>" class="btn btn-primary">Siguiente pregunta -></a>
              </div>
            </div>
       
       <div class="row">

        <div class="col-md-12">
          <hr>
           <?php 
       
       if(isset($data["resposta"]) && $data["resposta"]){

        echo '<div class="alert alert-success" role="alert"><b>RESPUESTA CORRECTA!</b><br></div>';
       }elseif(isset($data["resposta"]) && !$data["resposta"]){

        echo '<div class="alert alert-danger" role="alert"><b>RESPUESTA INCORRECTA!</b><br>La respuesta correcta era <b>'.$data["respostaOK"]["respuesta"].'</b></div>';
       }
       
       ?>
         </div> 
       </div>
     
       
       
    </div>
  </main>

        <?php require_once "section/footer.php"; ?>
    