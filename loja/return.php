<?php

include_once 'classes/client.class.php';
include_once 'classes/user.class.php';
include_once 'classes/order.class.php';
include_once 'classes/product.class.php';

$cliente = new Cliente;
$usuario = new Usuario;
$pedido = new Pedido;
$produto = new Produto;




$a = $usuario->getGeral();
$b = $produto->getGeral(); 
$c = $cliente->getGeral(); 


