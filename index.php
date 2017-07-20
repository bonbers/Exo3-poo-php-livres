<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 20/07/17
 * Time: 10:46
 */
require 'livre.php';

$livre = new Livre("la chasseau cochon", "Romain", 300);
$livre2 = new Livre("la chasse au faisan", "Romain", 200, 10);
$livre3 = new Livre("la chasse au pigeon", "Romain", 250, 15);

echo $livre;
echo $livre->bool();
echo $livre2;
echo $livre2->bool();
echo $livre3;
echo $livre3->bool();


