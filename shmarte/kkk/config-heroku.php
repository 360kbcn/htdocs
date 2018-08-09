<?php
$db = parse_url(getenv('DATABASE_URL'));

$host   = $db['host'];
$dbname = ltrim($db["path"],'/');
$port   = $db['port'];
$user   = $db['user'];
$pass   = $db['pass'];

global $host, $dbname, $port, $user, $pass;
?>
