<?php 

$postal_code = "123-4567";

function check_postal_code($str){
  $replaced = str_replace("-","",$str);
  $length = strlen($replaced);

  if($length === 7){
    return true;
  }
  return false;
}


var_dump(check_postal_code($postal_code));


?>