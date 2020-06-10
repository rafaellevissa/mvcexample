<!DOCTYPE html>

<html>
    <?php include("head.php"); ?>
    <body>
        <?php include("menu.php"); ?>

        <div class="row">
            <form method="POST" action="../controller/controllerCadastrar.php" id="form" name="form" onsubmit = "validar(document.form); return false;" class="col-10">
                <div class="form-group">
                    <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome do livro" required autofocus>
                    <input class="form-control" type="text" id="autor" name="autor" placeholder="Autor do livro" required>
                    <input class="form-control" type="text" id="preco" name="preco" placeholder="R$" onkeypress="formatarMoeda();" required>                    
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sucess" id="cadastrar">Cadastrar</button> 
                </div>            
            </form>   
        </div>

        <script language="javascript" type="text/javascript">
            function formatarMoeda() {
                var elemento = document.getElementById('preco');
                var valor = preco.value;

                valor = valor + '';
                valor = parseInt(valor.replace(/[\D]+/g, ''));
                valor = valor + '';
                valor = valor.replace(/([0-9]{2})$/g, ",$1");

                if (valor.length > 6) {
                    valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
                }

                elemento.value = valor;
            }

            function validar(formulario) {
                var preco = form.preco.value;
                
                if (preco <= 0) {
                    alert('O preço do livro não pode ser igual ou infeiror a 0');
                    form.preco.focus();
                    return false;
                }
                formulario.submit();
            }
        </script>
    </body>

</html>