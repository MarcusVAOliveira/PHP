<?php

require __DIR__.'/autoload.php';

// $person = new MvOliveira\People\Person;
// $person->setName('Marcus');
// $person->setAge(32);
// $person->setWeight(65);
//
// var_dump($person);

// var_dump((new MvOliveira\DB\Postgres)->connect());
// var_dump((new MvOliveira\DB\MySql)->connect());

// try {
//     (new MvOliveira\DB\ORM)->select(false);
// } catch (MvOliveira\MyException $e) {
//     echo $e->getMessage();
// } catch (\Exception $e) {
//     echo 'ERRO: ' . $e->getMessage();
// }

$people = new MvOliveira\People\Person;
$people->name = 'marcus';
$people->age = 21;
$people->weight = 88.6;

var_dump($people->name);
var_dump($people->age);

echo $people;
