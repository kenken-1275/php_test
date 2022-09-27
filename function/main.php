<?php
require "methodChain.php";

$result= Calculator::create(10)
                    ->plus(5)
                    ->minus(7)
                    ->getResult();
var_dump($result); 
?>