<?php
$users = [
  "ignacio"=>"ign",
  "miguel"=>"mig",
  "mariano"=>"mar",
  "elaine"=>"ela",
  "pedro"=>"ped",
  "aldo"=>"ald",
  "albert"=>"alb",
  "sergio"=>"ser",
  "gustavo"=>"gus",
  "carlos"=>"car",
  "silvia"=>"sil"
];

function validarUser($user, $password){
  global $users;
  return isset($users[$user]) && $users[$user]==$password;
}
?>
