<?php

require_once 'livroDb.php';

class Livro extends LivroDB{
    private $nome;
    private $autor;
    private $preco;

    public function getNome(){
        return $this->nome;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getPreco(){
        return $this->preco;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function incluir(){
        return $this->setLivro($this->getNome(), $this->getAutor(), $this->getPreco());
    }

}