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