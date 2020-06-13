<!DOCTYPE HTML>
<html>
    <?php include("head.php") ?>
    <body>
        <?php include("menu.php") ?>
        <?php require_once("../controller/controllerEditar.php"); ?>

        <div class="row">
            <form method="post" action="../controller/controllerEditar.php" id="form" name="form" class="col-10">
                <div class="form-group">
                    <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $editar->getNome(); ?>" placeholder="Nome do livro" required autofocus>
                    <input class="form-control" type="text" id="autor" name="autor" value="<?php echo $editar->getAutor(); ?>" placeholder="Autor do livro" required>
                    <input class="form-control" type="text" id="preco" name="preco" value="<?php echo $editar->getPreco(); ?>" placeholder="R$" required>                     
                </div>
                <div class="form-group">
                <input type="hidden" id="id" name="id" value="<?php echo $editar->getId(); ?>">                                       
                    <button type="submit" class="btn btn-sucess" id="editar" name="submit" value="editar">Editar</button> 
                </div>            
            </form>   
        </div>
        
    </body>
</html>