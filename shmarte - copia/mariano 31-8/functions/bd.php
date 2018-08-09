<?php
require "bdconfig.php";
?>
<?php
/* borrar la base de datos */
$con = newDataBase();
$con->exec("drop database mms");

/* crear la base de datos */
$sql = "create database mms";
$res = $con->exec($sql);
if(!$res){
  echo "<p class='text-danger'>No se ha podido crear la base de datos</p>";
  echo "<p class='text-danger'>".$con->errorInfo()[2]."</p>";
  }else{
    echo "<p class='text-success'>Base de datos creada.</p>";
}

//establecer conexión

$con = dbConection();
if($con===false){
  echo "<p class='text-danger'>Conexión con BD agenda no establecida</p>";
  echo "<p class='text-danger'>".$con->errorInfo()[2]."</p>";
  }else{
    echo "<p class='text-success'>Conexión con BD 'mms' establecida.</p>";
}

//crear tabla categoria

$sql = "CREATE table categoria (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  genero VARCHAR(50) NOT NULL UNIQUE,
  genero_url VARCHAR(100) NOT NULL UNIQUE
)";

$res = $con->exec($sql);
if($res===false){
  echo "<p class='text-danger'>No se ha podido crear la tabla pelicula.</p>";
  echo "<p class='text-danger'>".$con->errorInfo()[2]."</p>";
  }else{
    echo "<p class='text-success'>Tabla categoria creada correctamente.</p>";
}

//crear tabla pelicula

$sql = "CREATE table pelicula (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  titulo VARCHAR(30) NOT NULL,
  titulo_url VARCHAR(100) UNIQUE NOT NULL,
  imagen VARCHAR(100),
  sinopsis TEXT,
  genero INTEGER,
  FOREIGN KEY (genero) REFERENCES categoria(id)
)";

$res = $con->exec($sql);
if($res===false){
  echo "<p class='text-danger'>No se ha podido crear la tabla categoria.</p>";
  echo "<p class='text-danger'>".$con->errorInfo()[2]."</p>";
  }else{
    echo "<p class='text-success'>Tabla pelicula creada correctamente.</p>";
}

$sql = "CREATE table relacion(
  genero_num INTEGER PRIMARY KEY NOT NULL UNIQUE,
  genero INTEGER NOT NULL,
  genero_nombre VARCHAR(30) NOT NULL,
  FOREIGN KEY (genero_num) REFERENCES pelicula(id),
  FOREIGN KEY (genero) REFERENCES categoria(id)
)";

$res = $con->exec($sql);
if($res===false){
  echo "<p class='text-danger'>Tabla relacion Error.</p>";
  echo "<p class='text-danger'>".$con->errorInfo()[2]."</p>";
}else{
  echo "<p class='text-success'>Tabla relacion Success.</p>";
}

$sql = "CREATE table usuario(
  username VARCHAR(30) PRIMARY KEY NOT NULL UNIQUE,
  password VARCHAR(10) NOT NULL
)";

$res = $con->exec($sql);
if($res===false){
  echo "<p class='text-danger'>No se ha podido crear la tabla usuario.</p>";
  echo "<p class='text-danger'>".$con->errorInfo()[2]."</p>";
}else{
  echo "<p class='text-success'>Tabla usuario creada correctamente.</p>";
}

//insertar datos

$sql = "INSERT INTO categoria(id, genero, genero_url)
        VALUES  ('', 'Algo', 'Algo'),
                ('', 'Algo2', 'Algo2'),
                ('', 'Algo3', 'Algo3'),
                ('', 'Algo4', 'Algo4'),
                ('', 'Algo5', 'Algo5'),
                ('', 'Algo6', 'Algo6'),
                ('', 'Algo7', 'Algo7'),
                ('', 'Algo8', 'Algo8'),
                ('', 'Algo9', 'Algo9'),
                ('', 'Algo0', 'Algo1')";

$res = $con->exec($sql);
if($res===false){
  echo "<p class='text-danger'>Datos Categoria Error.</p>";
  echo "<p class='text-danger'>".$con->errorInfo()[2]."</p>";
  }else{
    echo "<p class='text-success'>Datos Categoria Success.</p>";
}

$sql = "INSERT INTO pelicula(id, titulo, titulo_url, imagen, sinopsis, genero)
VALUES  ('', 'Better call Saul T3', 'titulo_url', 'https://cdn-images-1.medium.com/max/800/1*oAU5gghX_Mhiy2xsmVsDRw.jpeg', 'Si Better Call Saul nació a la sombra de la mítica Breaking Bad, serie madre de la cual es spin-off, con el final de la tercera temporada se ha consolidado con entidad propia como una de las propuestas más interesantes de la televisión. Curiosamente, la serie ha ido ganando personalidad y enteros a la vez que el universo Breaking Bad ha ido penetrando en ella. Desde Héctor Salamanca hasta Gus Fring, muchos son los elementos de ese mundo creado por Vince Gilligan que se han incorporado a la serie. Jimmy McGill ya ha emprendido su particular viaje hacia Saul Goodman, en un punto de no retorno del que empezamos a vislumbrar las consecuencias y que estamos deseosos por comprobar en la próxima temporada.', '1'),
        ('', '13 reason why', 'titulo_url1', 'https://cdn-images-1.medium.com/max/800/1*iBglR9oJf7LsewD31uHMlg.jpeg', 'Hannah Baker se ha suicidado y ha dejado siete casetes, trece caras en total, grabados con las trece razones que le llevaron a quitarse la vida, cada una dedicada a un compañero diferente de su instituto, incluido Clay, un chico tímido para el que escuchar las cintas trae de vuelta dolorosos recuerdos. Con este argumento, Por trece razones ha sido una de las revelaciones del año, con polémicas encendidas sobre el tratamiento que hace del suicidio y del acoso que Hannah sufre en el instituto, y una segunda temporada ya confirmada por Netflix.', '2'),
        ('', 'Love T2', 'titulo_url2', 'https://cdn-images-1.medium.com/max/800/1*yoF5nndpv97rH5faYEDxQA.jpeg', 'Netflix ha tenido una buena primera mitad de 2017 en lo que se refiere a comedias románticas. Además de Master of none, la segunda temporada de Love ha convencido a quienes no habían quedado del todo contentos con su entrega inicial al seguir apostando por la naturalidad y por desmontar lo clichés del género. La relación entre Mickey y Gus no es el único centro de la serie, que amplía su mundo al mostrar también a sus amigos y al resto del entorno personal de cada uno de ellos. La producción de Judd Apatow ha encontrado su camino y se ha consolidado entre las series más recomendables de Netflix, y también entre las comedias de corte indie que se llevan ahora en la televisión por cable y en streaming.', '3'),
        ('', 'Legión', 'titulo_url3', 'https://cdn-images-1.medium.com/max/800/1*Oudev_Un1DYYS1wTHXrq3w.jpeg', 'En un año en el que el cine de superhéroes se ha salido de la fórmula habitual con Logan y Wonder Woman, ha sido una serie la que ha mostrado que todavía puede haber acercamientos originales y casi experimentales a historias de gente con superpoderes. Legión ha sido la primera colaboración entre Marvel y el estudio FOX en televisión, y ha sido de lo más llamativo del año. Creada por Noah Hawley, adapta la historia de un personaje poco conocido del universo de X-Men, David Haller, y explota al máximo las posibilidades visuales que le dan sus poderes telequinéticos, y su confusión entre lo que es real y lo que sólo está en su cabeza. Además, le ha dado a Aubrey Plaza uno de los personajes de estos primeros seis meses de 2017.', '4'),
        ('', 'American Gods', 'titulo_url4', 'https://cdn-images-1.medium.com/max/800/1*2atpGU5JdgCZxgg_0cKb4A.jpeg', 'Después de demostrar que se podía hacer algo parecido a una ópera en televisión con Hannibal, Bryan Fuller, en colaboración con Michael Green, ha dado rienda suelta a todas sus excentricidades visuales para adaptar a la pequeña pantalla American Gods, el libro de Neil Gaiman sobre una lucha entre los dioses tradicionales y los de la sociedad moderna. La serie ha tenido varios momentos muy impactantes (la presentación de Bilquis ha sido sólo uno de ellos) y ha ampliado y profundizado en personajes que en la novela estaban más bien infrautilizados, como Laura Moon. Ha ido ganando fans con el paso de los capítulos.', '5'),
        ('', 'Fargo T3', 'titulo_url5', 'https://cdn-images-1.medium.com/max/800/1*H3pIqM5VakWo0689lUZbuw.jpeg', 'De las tres temporadas emitidas hasta ahora de esta serie de antología, la tercera es la que ha dividido más al público. Para algunos, ha sido la más floja de las tres; para otros, ha recuperado el nivel en su tramo final, cuando sus personajes femeninos dan un paso al frente y suceden a los hermanos Stussy como los protagonistas de la entrega. Fargo ha sido, además, el mejor escaparate para las habilidades de Carrie Coon para quienes no la hubieran visto en The Leftovers, y aunque sí ha sido demasiado obvia en algunos momentos, ha tenido dos episodios muy interesantes por sus digresiones en la historia y en la forma de contarla: el tercero, ambientado en Los Ángeles, y el cuarto, que enmarca toda la temporada en Pedro y el lobo.', '6'),
        ('', 'Taboo', 'titulo_url6', 'https://cdn-images-1.medium.com/max/800/1*W6mfqrGb6copP0AzQjilFA.jpeg', 'Venganzas, secretos familiares y las reglas hipócritas y clasistas de la sociedad victoriana. A todo eso se enfrenta, cual elefante en una cacharrería, el personaje de Tom Hardy en Taboo, un hombre que regresa a Londres a hacerse cargo de la herencia de la familia, aunque esa herencia vaya a estar sumergida en la violencia. Hardy ha creado la serie junto a su padre y a Steven Knight, responsable de Peaky Blinders, y la ha imbuido de intensidad y de una gran personalidad visual, con ese retrato feísta de la capital inglesa en el siglo XIX. Su personaje carga contra el establishment social para conseguir su venganza, y su aura de solitario inconformista ha atraído a bastantes espectadores.', '7'),
        ('', 'Feud', 'titulo_url7', 'https://cdn-images-1.medium.com/max/800/1*h7ZvUqkRviPhptG3pt9HMg.jpeg', 'Bette Davis y Joan Crawford eran dos leyendas vivas de Hollywood que, en los años 60, casi estaban olvidadas. Ya no eran unas veinteañeras y los estudios las habían apartado, pero ninguna estaba preparada para dejar de trabajar. Ahí entraron en escena ¿Qué fue de Baby Jane? y el director Robert Aldrich. Y Feud, la nueva serie de antología de Ryan Murphy, lo cuenta todo. Sostenida por las grandes interpretaciones de Susan Sarandon y Jessica Lange, la temporada se articula alrededor de la rivalidad entre Davis y Crawford, alimentada por el estudio porque le servía para ganar más dinero, y teje un panorama de soledad, discriminación y oportunidades perdidas que ha sido de lo más interesante del año. Y luego está Mamacita, claro.', '8'),
        ('', 'Big little lies', 'titulo_url8', 'https://cdn-images-1.medium.com/max/800/1*prf1IByLs3SIOzcWIl403Q.jpeg', 'Big little lies tardó un poco en ganarse el favor de los críticos. Los nombres detrás y delante de las cámaras habían generado expectación, pero los primeros episodios dejaron a algunos espectadores un poco desconcertados por la mezcla de tonos presentes, entre la sátira social y la historia de misterio. Sin embargo, conforme Celeste (Nicole Kidman) fue adueñándose de la historia, la percepción de la miniserie cambió. La progresiva revelación de que su marido es un maltratador, y cómo van entrelazándose el trauma de Jane y los problemas familiares de Madeleine, elevan Big little lies a lo más alto del podio en estos primeros seis meses del año. La dirección de Jean-Marc Vallée es también de lo más estimulante, y su uso de la música ha sido igualmente destacable.', '9'),
        ('', 'The Handmaid’s Tale', 'titulo_url0', 'https://cdn-images-1.medium.com/max/800/1*_y3aUfK3Glrr2MkY0tVHzA.png', 'Había mucha expectación por ver qué hacía Hulu con la adaptación de la novela de Margaret Atwood, El cuento de la criada. La plataforma de streaming no había tenido, hasta ahora, ningún gran éxito entre sus producciones de ficción, y la distopía totalitaria y misógina de Atwood ya había sido adaptada al cine y hasta a la ópera. Al final, The Handmaid’s Tale se posiciona a acabar el año como una de sus mejores series por la manera en la que trata la historia de Offred, su construcción del mundo de Gilead, la impresionante interpretación de Elisabeth Moss y una fotografía y una dirección muy reseñables.', '10')";


$res = $con->exec($sql);
if($res===false){
  echo "<p class='text-danger'>Datos Pelicula Error</p>";
  echo "<p class='text-danger'>".$con->errorInfo()[2]."</p>";
  }else{
    echo "<p class='text-success'>Datos Pelicula Success</p>";
}


$sql = "INSERT INTO usuario(username, password)
VALUES ('admin', 'admin')";

$res = $con->exec($sql);
if($res===false){
  echo "<p class='text-danger'>Datos usuario error</p>";
  echo "<p class='text-danger'>".$con->errorInfo()[2]."</p>";
  }else{
    echo "<p class='text-success'>Datos Usuario Success</p>";
}

$sql = "INSERT INTO relacion(genero_num, genero, genero_nombre)
        VALUES ('1', '1', 'Miedo')";

$res = $con->exec($sql);
if($res===false){
  echo "<p class='text-danger'>Datos relacion Error.</p>";
  echo "<p class='text-danger'>".$con->errorInfo()[2]."</p>";
}else{
  echo "<p class='text-success'>Datos relacion Success.</p>";
}
