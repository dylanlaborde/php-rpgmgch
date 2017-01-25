<?php 

require __DIR__."/../Models/Products.php";

$newProduct = new Products();
$Products = $newProduct->getProducts();
$Vetements = $newProduct->getVetement();
?>
