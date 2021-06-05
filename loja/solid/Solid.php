<?php

class Voluntario extends ContratoDeTrabalho
{
    public function remuneracao()
    {
   
    }
}


class MusicPlay
{
    public function play($file)
    {

    }
}

class Mp3MusicPlay extends MusicPlay
{
    public function play($file)
    {
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'mp3') {
            throw new Exception;
        }
        
    }
}


class Auth
{
    public function checkCredentials($login, $password)
    {
     
        
        return true;
    }
}

class AuthApi extends Auth
{
    public function checkCredentials($login, $password)
    {
    
        
        return ['auth' => true, 'status' => 200];
    }
}

?>
<!-- Continuação do Solid com outros exemplos -->


<?php


interface Livro{
    function read();
}


class PDFlivro implements Livro{
 
    function read() {
        return "lendo um livro em pdf.";
    }
}


class Livroleitura {
 
    private $livro;
 
    function __construct(Livro $livro) {
        $this->livro = $livro;
    }
 
    function read() {
        return $this->livro->read();
    }
 
}


$livro = new PDFlivro();
$leitura = new Livroleitura($b);
 
$leitura->read();

?>
<!-- outro exemplo -->

<?php

interface TrabalharInterface
{
    public  function trabalho();
}

interface DormiInterface
{
    public  function  dormi();
}


class Trabalhador implements TrabalharInterface, DormiInterface
{

    public  function trabalho()
    {
        var_dump('Trabalhar agora');
    }
    public  function  dormi()
    {
        var_dump('dormi');
    }

}

class RobotWorker implements TrabalharInterface
{

    public  function trabalho()
    {
        var_dump('Trabalhar agora');
    }

}