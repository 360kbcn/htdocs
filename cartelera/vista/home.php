
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>

        <!-- header -->
        <?php include_once "section/header.php"; ?>
        <!-- fin header -->

        <!-- breadcrumb -->

          <ol class="breadcrumb" style="margin-top:-20px;">
            <li><a href="<?php echo $url; ?>">Home</a></li>

          </ol>



        <!-- fin  breadcrumb -->


        <!-- menú -->
        <?php include_once "section/menu.php"; ?>
        <!-- fin menú -->


                <!-- <div class="mix graphic col-md-4 col-sm-6 col-xs-12">
                    <a href="vista/imagenes/decision.jpg" class="img-wrapper">
                        <img class="img-responsive" src="vista/imagenes/decision.jpg"/>
                        <p>decision</p>
                    </a>
                </div>
                <div class="mix print col-md-4 col-sm-6 col-xs-12">
                    <a href="vista/imagenes/dejame.jpg" class="img-wrapper">
                        <img class="img-responsive" src="vista/imagenes/dejame.jpg" />
                    </a>
                </div>
                <div class="mix webdesign col-md-4 col-sm-6 col-xs-12">
                    <a href="vista/imagenes/detroit.jpg" class="img-wrapper">
                        <img class="img-responsive" src="vista/imagenes/detroit.jpg" />
                    </a>
                </div> -->
                <div class="container" id="services" name="services">
            			<div class="row">

            				<hr>
            				<br>
            				<div class="col-lg-offset-2 col-lg-8">
            					<img class="img-responsive center-block" src="vista/imagenes/peliculas.jpg" alt="">
                    </div>
            			</div>
            		</div>


        <!-- Footer -->
        <div class="">

          <?php include_once "section/footer.php"; ?>
        </div>
        <!-- fin footer -->

    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
