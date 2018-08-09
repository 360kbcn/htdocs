<?php

function media_corredor($correr){

      $md_corredor=0;
      $resul_media =[];
      $cant_num = 0;
      $media =0;

      $md_corredor = array_sum($correr);
      $cant_num = count($correr);
      $media = $md_corredor/$cant_num;

      return  $media;
}

 ?>
