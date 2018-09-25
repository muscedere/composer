<?php
require_once __DIR__.'./../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;

$personne = new Hello();
$personne2 = new SayHello();
echo $personne->talk();
echo $personne2->world();