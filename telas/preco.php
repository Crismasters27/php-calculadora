<?php
    namespace Projeto\ti23t\telas;
    require_once('../php/funcoes.php'); //Acessando o arquivo
    include('cabecalho.php');
    use Projeto\ti23t\php\Funcao; //Acessando a classe que está no arquivo funcoes.php
    $funcao = new Funcao();//Construtor da classe funcao ->Concetando a INDEX E FUNCOES
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preço do Produto</title>
</head>
<body style="background-color:#ff00aa;">
    <form method="POST" style="text-align:center;margin:10%;background-color:#2aff00;padding:5%;">
        <H1>Preço do Produto</H1>

        <div class="mb-3">
            <label for="lprecoProduto" class="form-label">Informe o preço do produto para calcular 18% de imposto: </label>
            <input type="text" class="form-control" id="precoProduto" name="precoProduto">
        </div>

        <button type="submit" class="btn btn-primary">Calcular
            <?php
                if(isset($_POST['precoProduto'])){
                    $precoProduto = $_POST['precoProduto'];
                    //Chamo a variável que representa a classe Funcao
                    $valor = $funcao->preco($precoProduto);
                }                

            ?>
        </button>

        <h2>
        <?php
            if(isset($_POST['precoProduto'])){
                echo $valor;               
            }else{
                echo "Preencha os campos!";
            }
        ?>
        </h2>
    </form>
<body>
    
</body>
</html>