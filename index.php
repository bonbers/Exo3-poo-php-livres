<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 20/07/17
 * Time: 10:46
 */
require 'livre.php';

$livre = new Livre("la chasseau cochon", "Romain", 200);
$livre2 = new Livre("la chasse au faisan", "Romain", 200, 10);


echo $livre;
echo $livre->bool();
echo $livre2;
echo $livre2->bool();
echo $livre->comparaisonPage($livre2);


$etagere1 = new Etagere(30, array($livre, $livre2));


echo $etagere1->getTaille();


