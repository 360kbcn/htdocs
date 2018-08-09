<?php

$users = [
  "pedro"=>"1234",
  "marc"=>"9874",
  "angeles"=>"6541",
];

function userfuncion ($user, $password){
  global $users;
  return isset ($users[$user]) && $users[$user]==$password;
}
 ?>
