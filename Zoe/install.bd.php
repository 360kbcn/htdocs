<?php
//Arxiu amb les dades de configuració de la BBDD
require_once("admin/php/dades.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Install BBDD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<?php
	try{
		//Conexió sense passar el nom de la BBDD (encara no està creada)
		$conn = new PDO("mysql:host=$dbhost", $dbuser, $dbpass);
	}catch(PDOException $e){

		echo '<p class="bg-danger"><p>Error:</p> '.$e->getMessage().'</p>';
		echo "</body></html>";
		die();
	}
	?>

	<p class="bg-primary">S'ha pogut connectar amb el servidor amb èxit</p>

	<?php
	//Eliminem la BD ja existent
	$conn->exec("DROP DATABASE cms;");

	//Creem la base de dades
	$sql_create = "CREATE DATABASE cms;";
	$result_create = $conn->exec($sql_create);

	if(!$result_create){

		echo '<p class="bg-danger">Error!<br>No s\'ha pogut crear la base de dades: '.$conn->errorInfo()[2].'</p>';
		//echo "</body></html>";
		//die();
	}else{

		echo '<p class="bg-success">La base de dades s\'ha creat correctament</p>';
	}

	//establim conexió amb la BD
	$sql_connect = "USE cms;";
	$result_connect = $conn->exec($sql_connect);

	if($result_connect===false){

		echo '<p class="bg-danger"><p>Error!<br>No s\'ha pogut connectar amb la base de dades: '.$conn->errorInfo()[2].'</p>';
		//echo "</body></html>";
		//die();
	}else{

		echo '<p class="bg-primary">S\'ha pogut connectar amb la base de dades</p>';
	}

	//creem la taula assignatures
	$sql_create_categoria = "create table categoria (
									id_categoria integer primary key auto_increment,
									nombre varchar(40) not null,
									contenido varchar(40)
									);";
	$result_create_categoria = $conn->exec($sql_create_categoria);

	if($result_create_categoria===false){

		echo '<p class="bg-danger">Error!<br>No s\'ha pogut crear la taula "categoria": '.$conn->errorInfo()[2].'</p>';
		//echo "</body></html>";
		//die();
	}else{

		echo '<p class="bg-success">La taula "categoria" s\'ha creat correctament</p>';
	}

	//creem la taula alumnes
	$sql_create_articulo = "create table articulo (
							id_articulo integer primary key auto_increment,
							titulo varchar(40) not null,
							content text,
							price float,
							categoria integer,
							foreign key (categoria) references categoria(id_categoria)
							);";
	$result_create_articulo = $conn->exec($sql_create_articulo);

	if($result_create_articulo===false){

		echo '<p class="bg-danger">Error!<br>No s\'ha pogut crear la taula "articulo": '.$conn->errorInfo()[2].'</p>';
		//die();
	}else{

		echo '<p class="bg-success">La taula "articulo" s\'ha creat correctament</p>';
	}

	//Afegim algunes dades a les taules

	//CATEGORIES
	$sql_add_data = "INSERT INTO `categoria` (`id_categoria`, `nombre`, `contenido`)
			VALUES
			(1, 'Solteros', 'Lorem ipsum dolor sit amet'),
			(2, 'Para los mas peques', ' Proin ac arcu nec nisl iaculis porttito'),
			(3, 'Esenciales', 'Vestibulum condimentum magna quis finibu');";
	$result_add_data = $conn->exec($sql_add_data);

	if($result_add_data===false){

		echo '<p class="bg-danger">Error!<br>No s\'han pogut afegir les dades a la taula categoria: '.$conn->errorInfo()[2].'</p>';
	}else{

		echo '<p class="bg-success">S\'han afegit les dades a la taula categoria correctament</p>';
	}

	//ARTICLES
	$sql_add_data = "INSERT INTO `articulo` (`id_articulo`, `titulo`, `content`, `price`, `categoria`) VALUES
(1, 'Leg rest', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et dignissim neque. Sed ac ligula eget justo iaculis scelerisque. Vivamus ultricies blandit aliquet. Vivamus vitae cursus dui. Cras ultrices mi quis ligula volutpat maximus. Aliquam erat volutpat. Fusce eget nunc eu nunc pretium pretium in at risus. Proin ac arcu nec nisl iaculis porttitor. Fusce sit amet nisi ac augue aliquam facilisis. Cras fringilla est mi, vitae viverra dolor laoreet non. Etiam vulputate augue et sollicitudin ultricies. Fusce id nulla posuere, rutrum est ut, bibendum arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hac habitasse platea dictumst. Quisque augue nibh, blandit in iaculis eu, sollicitudin quis augue. Mauris posuere, lectus in tempus egestas, dolor nibh sollicitudin est, a iaculis lacus velit ut nulla.</span></p>', 60, 1),
(2, 'No te quemes!', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Vestibulum condimentum magna quis finibus congue. Vivamus maximus enim lorem, id hendrerit metus facilisis vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In vel molestie nisi. Nulla ornare ultrices ante. Aenean risus dolor, vestibulum pellentesque augue vel, tempus hendrerit leo. Etiam tortor nulla, volutpat non nisi quis, porttitor sagittis justo.</span></p>', 25, 3),
(3, 'Seguridad ante todo', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">In magna risus, pellentesque ac nisl ac, ultrices aliquam quam. Aliquam in venenatis ante, eget vestibulum ex. Suspendisse non posuere ex. Integer dapibus quis nibh tempus tempus. Phasellus non augue ex. Integer non commodo quam. Nulla et diam congue, convallis nunc ut, blandit velit. Sed sed sem rhoncus, fringilla massa id, vulputate sem. Maecenas porttitor sollicitudin magna sed convallis. Morbi aliquam tellus augue, eu vulputate libero sodales a. Mauris fringilla lobortis odio, ut malesuada ex scelerisque sed. Quisque mi est, bibendum id molestie a, facilisis id nibh.</span></p>', 100, 3),
(4, 'Higiene y comodidad', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Mauris maximus commodo mauris non volutpat. Mauris dignissim eu mi vel imperdiet. Morbi interdum, purus luctus laoreet iaculis, tellus enim pellentesque libero, elementum vulputate metus urna quis orci. Mauris ut finibus mauris, ut feugiat libero. Phasellus egestas laoreet sem, a consectetur sem mollis a. Nam metus nunc, commodo vitae elit non, placerat laoreet libero. Cras tristique id felis ac condimentum. Suspendisse enim tellus, ultrices vel tempus et, sollicitudin vitae ex. In a turpis in massa convallis sodales. Quisque eu sapien congue lacus sodales facilisis.</span></p>', 30, 1),
(5, 'Para ellas', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Donec sollicitudin ipsum ut congue porta. Sed aliquet tempus libero sed tincidunt. Maecenas eu ultricies justo, eu gravida elit. Donec ac volutpat tellus, vel viverra nisl. Sed at est urna. Praesent consectetur nisi ac vulputate commodo. Duis vehicula diam ut ex gravida, non porta tortor lobortis. Nulla facilisi. Nunc at ipsum ut sem vulputate eleifend. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras malesuada, metus non feugiat condimentum, justo sem blandit massa, vitae iaculis metus tortor in nunc. Fusce pretium vitae erat ac maximus. Mauris turpis tellus, suscipit ut metus non, auctor efficitur arcu. Phasellus ac suscipit elit. Sed consectetur vehicula nisl non maximus.</span></p>', 60, 1),
(6, 'Calentador para las orejas', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Aenean et elementum risus. Fusce placerat lacus eget mi dictum interdum. Nulla id felis augue. Phasellus vitae tellus non est blandit rhoncus. Mauris vitae risus vel eros suscipit faucibus a vitae lorem. Proin ultrices ornare sapien, in convallis mauris molestie vitae. Curabitur porttitor neque sit amet dolor scelerisque laoreet. Duis sem neque, pretium placerat vehicula et, volutpat eu elit. Morbi massa nisl, semper quis mi a, aliquam rutrum justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam consectetur, risus posuere ullamcorper varius, arcu neque accumsan velit, quis semper justo dui at lectus. Pellentesque feugiat metus in mauris egestas, vitae sollicitudin leo lacinia.</span></p>', 8, 3),
(7, 'lectura y piscina', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Sed risus felis, placerat a condimentum nec, eleifend et nibh. Duis convallis condimentum porttitor. Praesent est sapien, fringilla id rhoncus a, pellentesque vel tellus. Morbi lacus velit, dictum id efficitur id, consequat vel nunc. Quisque non feugiat felis, eu congue magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec faucibus tristique vehicula. Duis molestie, arcu ut volutpat varius, erat leo ullamcorper odio, vel tincidunt nisi sem eget diam. Sed aliquet mauris nec rhoncus interdum.</span></p>', 120, 3),
(8, 'El mas fuerte, el mas...', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Ut porttitor convallis aliquet. Ut eu convallis nulla. Vivamus mollis sit amet est a pretium. Integer accumsan pulvinar metus, maximus pellentesque arcu iaculis in. Proin ut leo ac risus faucibus interdum. Curabitur commodo ultricies libero sit amet rutrum. Integer accumsan urna nec orci varius, eu posuere mi blandit. Quisque at enim id ex tincidunt pulvinar a quis mi. Proin ornare libero vitae nulla tristique consectetur. Duis at augue id leo porta tempus vel eget elit. Sed sagittis porttitor viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas a ante ac eros aliquet ullamcorper nec non nibh. Cras pulvinar facilisis pretium.</span></p>', 30, 2),
(9, 'Sorpresa!', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Fusce malesuada, quam vel vulputate mollis, lorem nisl lacinia sem, ac interdum ante dolor eget mauris. Mauris vitae arcu sed odio tincidunt maximus. Vestibulum consequat lectus nibh, at pulvinar mi convallis id. Suspendisse a dictum orci, quis porta elit. Donec pellentesque orci ac consectetur pretium. Phasellus turpis justo, volutpat vel risus et, fringilla sodales velit. Suspendisse mattis eros gravida tortor placerat malesuada. Integer a magna tincidunt, luctus est nec, congue velit. Praesent ultrices scelerisque metus, a egestas sapien molestie sit amet. Cras faucibus vestibulum cursus. Nam ornare, quam ut varius aliquet, diam diam eleifend dui, at convallis nibh erat eu velit.</span></p>', 40, 2),
(10, 'Maxima intimidad', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Duis ultrices tortor at gravida porttitor. Cras maximus urna purus, id commodo justo ultricies quis. Nulla ullamcorper consectetur accumsan. Aenean arcu metus, pharetra eu est a, pharetra gravida lorem. Duis facilisis arcu nec enim dictum maximus. Ut consequat et neque quis elementum. Vivamus euismod cursus porta. Vestibulum eget ligula convallis, sagittis quam in, lobortis nunc. Ut consectetur enim placerat, maximus ligula nec, scelerisque eros. Vivamus pellentesque tellus ut risus tempus facilisis.</span></p>', 45, 1),
(11, 'Querras hir (ahun) mas al WC', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Nunc ac blandit lectus. Aliquam enim ipsum, ultricies eu accumsan vitae, finibus a libero. Suspendisse nec molestie sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel dictum eros, porta commodo purus. Morbi vitae vehicula velit. Fusce eu molestie sapien. Duis auctor lacus ut elit hendrerit scelerisque. Nam dui dolor, luctus sed mattis ac, imperdiet aliquam sem. Donec tortor purus, ultrices a sem ut, egestas fringilla leo.</span></p>', 35, 3);
						";
	$result_add_data = $conn->exec($sql_add_data);

	if($result_add_data===false){

		echo '<p class="bg-danger">Error!<br>No s\'han pogut afegir les dades a la taula articulo: '.$conn->errorInfo()[2].'</p>';
	}else{

		echo '<p class="bg-success">S\'han afegit les dades a la taula articulo correctament</p>';
	}

	?>
</body>
</html>
