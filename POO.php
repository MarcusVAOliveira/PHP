<?php

class People{
  public function getHello($name){
    return "Hello {$name}!";
  }
}

$p = New People;

echo $p->getHello("Guilherme");
