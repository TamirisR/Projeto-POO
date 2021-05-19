<?php
abstract class Entregas 
{
    public function entregaErrada(){}
    abstract public function entregaSucesso();
}

class Correios extends Entregas 
{
    public function entregaSucesso()
    {
        echo 'Correios entregou';
    } 
}

class AmazonPrime extends Entregas 
{
    public function ligar()
    {
        echo 'Amazon entregou';
    }
}

class MercadoLivre extends Entregas 
{
    public function ligar()
    {
        echo 'Mercado Livre entregou';
    }
}

class RotaEntrega
{
    public function rota(Entregar  $entregar)
    {
        $entregar ->entregaSucesso();
        $entregar ->entregaErrada();
    }
}