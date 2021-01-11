<?php
require 'PasswordException.php';
require 'User.php';

$jack = new User();
$jack->setUsername('Jack');

try {
    $jack->setPassword('azerty');
}catch (PasswordException $e){
    echo $e->getMessage();
};

var_dump($jack);
