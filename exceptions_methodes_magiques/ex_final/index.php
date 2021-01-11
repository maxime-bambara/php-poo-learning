<?php

require 'Human.php';

$john = new Human('John');

try {
    $john->setAge(-1);
} catch (Exception $e){
    echo $e->getMessage();
}

try {
    $john->newAge();
} catch (Exception $e){
    echo $e->getMessage();
}
