<?php

require_once '../model/livroDb.php';

class ControllerEditar{
    private $nome;
    private $autor;
    private $preco;
    private $livroDb;

    public function __construct($id){
        $this->livroDb = new LivroDB();
        $this->criarFormulario($id);
    }

    public function criarFormulario($id){
        $row = $this->livroDb->getLivroById($id);
        $this->nome = $row['nome'];
        $this->autor = $row['autor'];
        $this->preco = $row['preco'];
    }

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
        $this->nome= $nome;
    }
    public function setAutor($autor){
        $this->autor= $autor;
    }
    public function setPreco($preco){
        $this->preco= $preco;
    }

    public function editarFormulario($nome, $autor, $preco, $id){
        if($this->livroDb->updateLivro($id,$nome, $autor, $preco)){
            echo("<script> alert('Livro Atualizado com sucesso!');document.location'../view/index.php' </script>");
        }else{
            echo("<script> alert('Infelizmente o livro não foi atualizado!');history.back()' </script>");
        }
    }
}

$id = filter_input(INPUT_GET, 'id');
$editar = new ControllerEditar($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'], $_POST['autor'], $_POST['preco'], $_POST['id']);
}

?>