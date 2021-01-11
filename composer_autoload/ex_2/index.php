<?php
require __DIR__ . '/vendor/autoload.php';
use Michelf\Markdown;

$markdow = '**Hello World** - Ceci est un [lien vers google](https://www.google.fr)';
$hello = Markdown::defaultTransform($markdow);

echo $markdow;

echo $hello;


