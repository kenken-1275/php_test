<?php 

for($i = 0;$i < 10;$i++){
  if($i === 5){
   break;
  }
  echo $i;
}

echo "<br>";

$j = 0;
while($j <10){
  echo $j;
  if($j === 8){
    break;
  }
  $j++;
}

?>