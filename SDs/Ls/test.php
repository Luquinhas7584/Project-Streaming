<?php 
include("cinema.php");
//isto é um objeto
$cinema = new Cinema();
//o objeto chamando o metodo setFilme
$cinema->setFilme("Aquaman");

$cinema2 = new Cinema();

echo "Nome do filme:",$cinema->getFilme();

?>