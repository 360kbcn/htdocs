
  <div class="container">
      <div class="masthead">
        <?php 
        $apartat = strstr($data['apartat'], "/", true);


        ?>
        <h2 class="text-muted">
          <?php 
          if($apartat=="temas"){

            echo "Preguntar por temas: ".$data['tema']["titulo"]; 
          }elseif($apartat=="admin"){

            echo "Administración";
          }elseif($apartat=="stats"){

            echo "Estadísticas";
          }else{

            echo "Home";
          }
          ?>
          
        </h2>

        <nav class="navbar navbar-light bg-faded rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="glyphicon glyphicon-align-justify"></span>
          </button>
          <div class="collapse navbar-toggleable-md" id="navbarCollapse">
            <ul class="nav navbar-nav text-md-center justify-content-md-between">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo $data['url']; ?>">Home <span class="sr-only">(current)</span></a>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Preguntas por temas <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <?php 

                  foreach($data['temas'] as $tema){

                    echo '<li><a href="'.$data['url'].'/temas/'.$tema["id"].'">'.$tema["titulo"].'</a></li>';
                  }
                  ?>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo $data['url']; ?>/stats/">Estadistica</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo $data['url']; ?>/admin/crear">Crear preguntas</a>
              </li>

            </ul>
          </div>
        </nav>
      </div>
