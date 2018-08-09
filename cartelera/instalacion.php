<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://getbootstrap.com/examples/dashboard/dashboard.css"

  </head>
  <body>
    <h1>Crear base de datos</h1>
    <?php
    try{
      $con = new PDO('mysql:host=localhost',"root");
    }catch(PDOException $e){
      echo "<p class='error'>Error:".$e->getMessage()."</p>";
      echo "</body></html>";
      die();
    }

    //Borramos la base de datos

    $sql="drop database cartelera;";
    $res=$con->exec($sql);

    //Creamos la base de datos cartelera

    $sql="create database cartelera;";
    $res=$con->exec($sql);
    if(!$res){
            echo "<p>No se ha podido crear la base de datos</p>";
            echo "<p>".$con->errorInfo()[2]."</p>";
    }else{
            echo "<p class='text-primary'>Base de Datos creada</p>";
    }

    //Conectamos a la base creada

    $sql = "use cartelera;";
    $res = $con->exec($sql);
    //Mostramos un mensage
    if($res===false){//Lo que nos va a devolver exec es un 0 por lo tanto falso, el triple igual nos asegura que es falso y de tipo boleano
      echo "<p class='error'>Conexion con BD cole no establecida</p>";
      echo "<p class='error'>".$con->errorinfo()[2]."</p>";
    }else{
      echo "<p class='text-primary'>Conexion con BD cartelera establecida</p>";
    }

    //creamos  tabla usuario

    $sql="create table Usuario(
      id integer primary key auto_increment,
      nombre varchar(30) not null unique,
      password varchar(30) not null,
      email varchar(30) not null unique
    );";

    $res=$con->exec($sql);
    if($res===false){
            echo "<p>No se ha podido crear la tabla Usuario</p>";
            echo "<p>".$con->errorInfo()[2]."</p>";
    }else{
            echo "<p class='text-primary'>Tabla Usuario creada!!!</p>";
    }



    //Creamos tabla categorias

    $sql="create table categorias(
      id integer primary key auto_increment,
      nombre varchar(30) not null unique,
      nombre_url varchar (30) not null unique
    );";
    $res=$con->exec($sql);
    if($res===false){
            echo "<p>No se ha podido crear la tabla categorias</p>";
            echo "<p>".$con->errorInfo()[2]."</p>";
    }else{
            echo "<p class='text-primary'>Tabla categorias creada!!!</p>";
    }

    //Insertamos en categorias

    $sql= "INSERT INTO `categorias` (`nombre`, `nombre_url`)
    VALUES ('Intriga', 'intriga'),('Accion','acción'),('Animación', 'animacion'),
    ('Aventuras', 'aventuras'),('Terror', 'terror'),('Comedia', 'comedia'),('Drama', 'drama'),
    ('Romántica', 'romantica');";
    $res=$con->exec($sql);
    if($res===false){
             echo "<p>Error al añadir datos en categorias</p>";
             echo "<p>".$con->errorInfo()[2]."</p>";
    }else{
             echo "<p class='text-primary'>Se han añadido $res filas en la tabla categorias</p>";
    }

    //Creamos tabla cartelera

    $sql= "create table cartelera(
    	id integer primary key auto_increment,
    	titulo varchar(40) not null unique,
      titulo_url varchar (40) not null unique,
        anyo int,
        categoria_id int,
        director varchar (40),
        sinopsis text not null,
        foto varchar(140),
        foreign key (categoria_id) references categorias(id) ON UPDATE CASCADE
        );";
    $res=$con->exec($sql);
    if($res===false){
            echo "<p>No se ha podido crear la tabla cartelera</p>";
            echo "<p>".$con->errorInfo()[2]."</p>";
    }else{
            echo "<p class='text-primary'>Tabla cartelera creada!!!</p>";
    }


    //Creamos tabla criticas

    $sql= "create table criticas(
        id integer primary key auto_increment,
        autor varchar (40) unique,
        id_pelicula int,
        critica text not null,
        foreign key (id_pelicula) references cartelera(id) ON DELETE CASCADE ON UPDATE CASCADE
    );";
    $res=$con->exec($sql);
    if($res===FALSE){
            echo "<p>No se ha podido crear la tabla criticas</p>";
            echo "<p>".$con->errorInfo()[2]."</p>";
    }else{
            echo "<p class='text-primary'>Tabla criticas creada!!!</p>";
    }

    //Insertamos datos cartelera

    $sql= "INSERT INTO cartelera ( `titulo`, `titulo_url`, `anyo`,`categoria_id`, `director`, `sinopsis`, `foto`)
    VALUES ('The Hitman is Bodyguard', 'the hitman is bodyguard', 2017,2,'Patrick Hughes','El prestigioso guardaespaldas Michael Bryce (Ryan Reynolds) recibe un nuevo cliente: un asesino a sueldo, Darius Kincaid (Samuel L. Jackson),
    que debe testificar en un juicio en La Haya contra un cruel dictador (Gary Oldman)','Elotroguardaespaldas.jpg'),
    ('Veronica', 'veronica', 2017,5,'Paco Plaza','Inspirada en una historia real sucedida en el madrileño barrio de Vallecas en los años 90. Tras hacer una ouija con unas amigas, una adolescente es asediada por aterradoras presencias sobrenaturales que amenazan con hacer daño a toda su familia','veronica.jpg'),
    ('Tadeo Jones 2 .El secreto del Rey Midas', 'tadeo jones 2. el secreto del rey midas',2017,3,'Jordi Gasull','Tadeo Jones viaja hasta Las Vegas para asistir a la presentación del último descubrimiento de la arqueóloga Sara Lavroff: el papiro que demuestra la existencia del Collar de Midas, el mítico Rey que convertía en oro todo aquello que tocaba. Pero el feliz reencuentro se verá enturbiado cuando un malvado ricachón secuestra a Sara para poder encontrar el talismán y conseguir riquezas infinitas. Junto a sus amigos el loro Belzoni y su perro Jeff, Tadeo tendrá que hacer uso de su ingenio para rescatar a Sara, en un viaje por medio mundo, donde encontrará nuevos amigos ¡y nuevos villanos!','tadeojones.jpg'),
    ('Valerian y la ciudad de los mil planetas','valerian y la ciudad de los mil planetas', 2017,4,'Luc Besson','En el siglo XXVIII, Valerian (Dane DeHaan) y Laureline (Cara Delevingne) son un equipo de agentes espaciales encargados de mantener el orden en todos los territorios humanos. Bajo la asignación del Ministro de Defensa, se embarcan en una misión hacia la asombrosa ciudad de Alpha, una metrópolis en constante expansión, donde especies de todo el universo han convergido durante siglos para compartir conocimientos, inteligencia y culturas. Pero hay un misterio en el centro de Alpha, una fuerza oscura amenaza la paz en la Ciudad de los Mil Planetas. Valerian y Laureline deben luchar para identificar la amenaza y salvaguardar el futuro, no sólo el Alfa, sino del universo.','valerian.jpg'),
    ('Verano 1993', 'verano 1993', 2017,7,'Carla Simon','Frida (Laia Artigas), una niña de seis años, afronta el primer verano de su vida con su nueva familia adoptiva tras la muerte de su madre. Lejos de su entorno cercano, en pleno campo, la niña deberá adaptarse a su nueva vida.','verano1993.jpg'),
    ('Descontroladas', 'descontroladas', 2017,6,'Jonathan Levine','Incitada por su novio, Emily convence a su madre para ir a un viaje juntas a Ecuador. Pero una vez allí ambas mujeres son secuestradas, comenzando una aventura salvaje en el que su vínculo como madre e hija se fortalecerá mientras intentan escapar.','descontroladas.jpg'),
    ('Dejame salir', 'dejame salir', 2017,1,'Jordan Peele','Un joven afroamericano visita a la familia de su novia blanca, un matrimonio adinerado. Para Chris (Daniel Kaluuya) y su novia Rose (Allison Williams) ha llegado el momento de conocer a los futuros suegros, por lo que ella le invita a pasar un fin de semana en el campo con sus padres, Missy y Dean. Al principio, Chris piensa que el comportamiento demasiado complaciente de los padres se debe a su nerviosismo por la relación interracial de su hija, pero a medida que pasan las horas, una serie de descubrimientos cada vez más inquietantes le llevan a descubrir una verdad inimaginable.','dejame.jpg'),
    ('Tanna', 'tanna', 2017,8,'Bentley Dean','Drama romántico basado en hechos reales sobre el pueblo indígena Tanna, en la república de Vanuatu, un pequeño país que se encuentra en la Polinesia del Pacífico, y centrado en la historia del amor prohibido que surge entre una joven del poblado que se enamora del nieto del jefe de la tribu.','tanna.jpg'),
    ('Rapidos y furiosos 8', 'rapidos y furiosos 8', 2017,2,'Gary Gray','Con Dom y Letty de luna de miel, Brian y Mia fuera del juego y el resto de la pandilla exonerada de todo cargo, el equipo está instalado en una vida aparentemente normal. Pero cuando una misteriosa mujer (Theron) seduce a Dom (Diesel) para regresar nuevamente al mundo del crimen, se ve incapaz de rechazar la oportunidad, traicionando así a todo el mundo cercano a él. A partir de ese momento todos se enfrentarán a pruebas como nunca antes habían tenido. Desde las costas de Cuba y las calles de Nueva York hasta las llanuras del mar de Barents en el océano Ártico, nuestra fuerza de élite recorrerá el globo para impedir que un anarquista desencadene el caos en el mundo... y por supuesto para traer de vuelta a casa al hombre que les hizo una familia.', 'rapidos.jpg'),
    ('Lego Batman', 'lego batman', 2017,3,'Chris Mckay',' el irreverente Batman, que también tiene algo de artista frustrado, intentará salvar la ciudad de Gotham de un peligroso villano, el Joker. Pero no podrá hacerlo solo, y tendrá que aprender a trabajar con sus demás aliados.','lego.jpg'),
    ('Kong: La isla calavera', 'kong: la isla calavera', 2017,4,'Dan Gilroy','En los años 70, un variopinto grupo de exploradores y soldados es reclutado para viajar a una misteriosa isla del Pacífico. Entre ellos están el capitán James Conrad (Tom Hiddleston), el teniente coronel Packard (Samuel L. Jackson) y una fotoperiodista (Brie Larson). Pero al adentrarse en esta bella pero traicionera isla, los exploradores encontrarán algo absolutamente sorprendente. Sin saberlo, estarán invadiendo los dominios del mítico Kong, el gigante gorila rey de esta isla. Será Marlow (John C. Reilly), un peculiar habitante del lugar, quien les enseñe los secretos de Isla Calavera, además del resto de seres monstruosos que la habitan.','kong.jpg'),
    ('La estafa de los Logan', 'la estafa de los logan', 2017,6,'Steven Blunt','Intentando revertir una maldición familiar, tres hermanos, Jimmy (Channing Tatum), Mellie (Riley Keough) y Clyde Logan (Adam Driver), intentan llevar a cabo un gran atraco durante una importante carrera de coches en Concord, Carolina del Norte.','estafa.jpg'),
    ('Detroit', 'detroit', 2017,7,'Mark Boal','Film ambientado durante los disturbios raciales que sacudieron la ciudad de Detroit, en el estado de Michigan, en julio de 1967. Todo comenzó con una redada de la policía en un bar nocturno sin licencia, que acabó convirtiéndose en una de las revueltas civiles más violentas de los Estados Unidos.','detroit.jpg'),
    ('El muñeco de nieve', 'el muñeco de nieve', 2017,1,'Tomas Alfredson','Un detective llamado Harry Hole investiga la desaparición de la madre de un niño. La única pista que se tiene es que su bufanda apareció envolviendo un muñeco de nieve.','muñeco.jpg'),
    ('La bella y la bestia', 'la bella y la bestia', 2017,8,'Bill Condon','Adaptación en imagen ral del clásico de Disney La bella y la bestia, que cuenta la historia de Bella , una joven brillante y enérgica, que sueña con aventuras y un mundo que se extiende más allá de los confines de su pueblo en Francia. Independiente y reservada, Bella no quiere saber nada con el arrogante y engreído Gastón, quien la persigue sin descanso. Todo cambia un día cuando su padre Maurice (Kevin Kline) es encarcelado en el castillo de una horrible Bestia, y Bella se ofrece a intercambiarse con su padre y queda recluida en el castillo. Rápidamente se hace amiga del antiguo personal del lugar, que fue transformado en objetos del hogar tras una maldición lanzada por una hechicera.','labella.jpg'),
    ('Saw 3.Juego del miedo', 'saw 3. juego del miedo', 2006,5,'Leigh Whannell','Nuevas y macabras aventuras del siniestro Jigsaw, el hombre que mueve los hilos de los espantosos juegos que han aterrorizado a la comunidad y desconcertado a la policía. Jigsaw, una vez más, ha conseguido escapar, esta vez con la ayuda de su nueva aprendiz, Amanda (Shawnee Smith). Mientras la policía local intenta localizarle, el Doctor Lynn Denlon (Bahar Soomekh) y Jeff (Angus Macfayden) no saben que están a punto de convertirse en los siguientes peones de este horrible juego','saw.jpg');";

    $res=$con->exec($sql);
    if($res===FALSE){
            echo "<p>Error al añadir datos en cartelera</p>";
            echo "<p>".$con->errorInfo()[2]."</p>";
    }else{
            echo "<p class='text-primary'>Se han añadido $res filas en la tabla cartelera</p>";
    }


     ?>

  </body>
</html>
