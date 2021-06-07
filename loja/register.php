<?php

include_once 'classes/client.class.php';
include_once 'classes/user.class.php';
include_once 'classes/order.class.php';
include_once 'classes/product.class.php';

$cliente = new Cliente;
$usuario = new Usuario;
$pedido = new Pedido;
$produto = new Produto;

if (isset($_POST['cadastro_cliente'])) {

    $nome         = $_POST['nome'];
    $email         = $_POST['email'];
    $senha         = $_POST['senha'];
    $endereco       = $_POST['endereco'];
    $senhaDoCartao  = $_POST['senhaDoCartao'];
    $categoria     = $_POST['categoria'];
    $cliente->setDados([$nome, $email, $senha, $endereco, $senhaDoCartao, $categoria]);

    header("Location: listClient.php");
}
if (isset($_POST['id_cliente'])) {

    $id= $_POST['id'];
    

    $cliente->apagar($id);

    header("Location: listClient.php");
}

if (isset($_POST['cadastro_usuario'])) {

    $email  = $_POST['email'];
    $nome  = $_POST['nome'];
    $senha  = $_POST['senha'];

    $usuario->setDados([$nome, $email, $senha]);

    header("Location: listUser.php");
}
if (isset($_POST['id_usuario'])) {

    $id= $_POST['id'];
    

    $usuario->apagar($id);

    header("Location: listUser.php");
}

if (isset($_POST['cadastro_produto'])) {

    
	$nome       = $_POST['nome'];
    $preco      = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $categoria  = $_POST['categoria'];

    $produto->setDados([$nome, $preco, $quantidade, $categoria]);

    header("Location: listProduct.php");
}
if (isset($_POST['id_produto'])) {

    $id= $_POST['id'];
    

    $produto->apagar($id);

    header("Location: listProduct.php");
}
