<?php

$contact_file = ".contact.dat";

$contents = fopen($contact_file, "a+");

$add_text = "1行追記" . "\n";

fwrite($contents,$add_text);

fclose($contents);

?>