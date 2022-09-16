<?php

$members = [
  "name" => "本田",
  "height" => 170,
  "hobby" => "サッカー"
];

foreach($members as $member){
  echo $member;
}

echo "<br>";

foreach($members as $key => $value){
  echo $key . "は" . $value . "です";
}

echo "<br>";

$members = [
  "本田" =>[
    "height" => 170,
    "hobby" => "サッカー"
  ],
  "香川" => [
    "height" => 160,
    "hobby" => "サッカー"
  ]
];

foreach($members as $member => $value1){
  echo $member . "の";
  foreach($value1 as $key => $value2){
    echo $key . "は" . $value2 . "です ";
  }
  echo "<br>";
}

?>