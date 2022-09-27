<?php

class Calculator {

private $result;

public static function create(int $int): Calculator {
    return new Calculator($int);
}

private function __construct(int $int) {
    $this->result = $int;
}

public function plus($int): Calculator {
    $this->result += $int;
    return $this;
}

public function minus($int): Calculator {
    $this->result -= $int;
    return $this;
}

public function getResult(): int {
    return $this->result;
}
}

?>