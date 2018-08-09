<?php
$users = [
  "admin"=>"admin"
];

function validarUser($user, $password){
  global $users;
  return isset($users[$user]) && $users[$user]==$password;
}
?>
