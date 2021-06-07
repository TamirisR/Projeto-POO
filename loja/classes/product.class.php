<?php

require_once 'connection.class.php';

class Produto extends Banco
{


    protected $id;
    protected $nome;
    protected $preco;
    protected $quantidade;
    protected $categoria;


    public function __construct()
    {
        parent::__construct();
    }

    public function setDados(array $dados)
    {
        $this->nome = $dados[0] ?? null;
        $this->preco = $dados[1] ?? null;
        $this->quantidade = $dados[2] ?? null;
        $this->categoria = $dados[3] ?? null;

        return $this->inserir();
    }
    public function inserir()
    {

        $stmt = $this->dns->prepare('INSERT INTO produtos (nome, preco, quantidade, categoria) VALUES (:nome, :preco, :quantidade, :categoria)');

        if ($stmt->execute([':nome' => $this->nome, ':preco' => $this->preco, ':quantidade' => $this->quantidade, ':categoria' => $this->categoria])) {

            return true;
        }
    }
//class MostrarConteudo extends Produto

    public function getId($se)
    {

        $stmt = $this->dns->prepare("SELECT idProduto FROM produtos WHERE nome  == '{$se}'");

        $stmt->execute();
        $s = $stmt->fetchAll();
        $this->id = $s[0][0];
    }
    public function apagar($id)
    {

        $stmt =$this->dns->query("DELETE FROM produtos WHERE idProduto ='{$id}'");
        $stmt->execute();
    }

    public function getGeral()
    {
  
        $stmt = $this->dns->prepare("SELECT * FROM produtos ");
        $stmt->execute();
        $s = $stmt->fetchAll();
        return $s;
    }
  }