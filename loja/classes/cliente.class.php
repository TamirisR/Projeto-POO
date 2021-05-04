<?php

require_once 'conexao.class.php';

Class Cliente extends Banco  {

    
    protected $id;
	protected $nome;
    protected $email;
    protected $senha;
    protected $endereco;
    protected $senhaDoCartao;


    public function __construct()
    {
        parent::__construct();
    }
    
    public function setDados(array $dados){
        $this->nome = $dados[0] ?? null;
        $this->email = $dados[1] ?? null;
        $this->senha = $dados[2] ?? null;
        $this->endereco = $dados[3] ?? null;
        $this->senhaDoCartao = $dados[4] ?? null;

    
        return $this->inserir();
       
             
    }
    public function inserir(){

        $stmt = $this->dns->prepare('INSERT INTO cliente (nome, email, senha, endereco, senhaDoCartao) VALUES (:nome, :email, :senha, :endereco, :senhaDoCartao)');
    
            if( $stmt->execute([':nome' => $this->nome,':email' => $this->email,':senha' => $this->senha, ':endereco' => $this->endereco, ':senhaDoCartao' => $this->senhaDoCartao ])){
    
                return true;
            }
    }
    public function getId($em, $se){
          
          $stmt = $this->dns->prepare("SELECT idcliente FROM cliente WHERE senha = '{$se}' AND email = '{$em}'");
    
            $stmt->execute();
            $s=$stmt->fetchAll();
            $this->id=$s[0][0];
            
    }
}