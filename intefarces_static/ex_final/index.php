<?php
require 'UserInterface.php';
require 'SubscriptionInterface.php';
require 'Subscriber.php';
require 'Register.php';
require 'Admin.php';

$guillaume = new Admin('Guillaume');
$pierre = new Subscriber('Pierre', 'bank account',100);
$jack = new Register('Jack');
$users = [$guillaume, $pierre, $jack];

foreach ($users as $user) {
    if ($user instanceof SubscriptionInterface) {
        var_dump($user->getName());
        var_dump($user->getSubscriptionAmount());
    }
}
// Result :
//string(6) "Pierre"
//int(100)