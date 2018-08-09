<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
	echo "POST<br>";
	parse_str(file_get_contents('php://input'), $post_vars);
	var_dump($post_vars);
}else if($_SERVER['REQUEST_METHOD'] == "GET"){
	echo "GET<br>";
	parse_str(file_get_contents('php://input'), $get_vars);
	var_dump($get_vars);
}else if($_SERVER['REQUEST_METHOD'] == "PUT"){
	echo "PUT<br>";
	parse_str(file_get_contents('php://input'), $put_vars);
	var_dump($put_vars);
}else if($_SERVER['REQUEST_METHOD'] == "DELETE"){
	echo "DELETE<br>";
	parse_str(file_get_contents('php://input'), $delete_vars);
	var_dump($delete_vars);
}
?>
