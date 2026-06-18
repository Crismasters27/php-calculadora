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
    <title>Dividir</title>
</head>
<body style="background-color:#ff00aa;">
    <form method="POST" style="text-align:center;margin:10%;background-color:#2aff00;padding:5%;">
        <H1>Dividir</H1>

        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o primeiro número: </label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="primeiroNumero">
        </div>

        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o segundo número: </label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="segundoNumero">
        </div>

        <button type="submit" class="btn btn-primary">Dividir
            <?php
                if(isset($_POST['primeiroNumero']) || isset($_POST['segundoNumero'])){
                    $num1 = $_POST['primeiroNumero'];
                    $num2 = $_POST['segundoNumero'];
                    //Chamo a variável que representa a classe Funcao
                    $funcao->coletar($num1, $num2);
                }                

            ?>
        </button>

        <h2>
        <?php
            if(isset($_POST['primeiroNumero']) || isset($_POST['segundoNumero'])){
                echo $funcao->dividir();             
            }else{
                echo "Preencha os campos!";
            }
        ?>
        </h2>
    </form>
<body>
    
</body>
</html>