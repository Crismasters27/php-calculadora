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
    <title>Média</title>
</head>
<body style="background-color:#ff00aa;">
    <form method="POST" style="text-align:center;margin:10%;background-color:#2aff00;padding:5%;">
        <H1>Média</H1>

        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o primeiro número: </label>
            <input type="number" class="form-control" id="num1" name="num1">
        </div>

        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o segundo número: </label>
            <input type="number" class="form-control" id="num2" name="num2">
        </div>

        <div class="mb-3">
            <label for="lTerceiroNumero" class="form-label">Informe o terceiro número: </label>
            <input type="number" class="form-control" id="num3" name="num3">
        </div>

        <button type="submit" class="btn btn-primary">Calcular
            <?php
                if(isset($_POST['num1']) || isset($_POST['num2']) || isset($_POST['num3'])){
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $num3 = $_POST['num3'];
                    //Chamo a variável que representa a classe Funcao
                    $resultado = $funcao->mediaTres($num1, $num2, $num3);
                }                

            ?>
        </button>

        <h2>
        <?php
            if(isset($_POST['num1']) || isset($_POST['num2']) || isset($_POST['num3'])){
                echo $resultado;               
            }else{
                echo "Preencha os campos!";
            }
        ?>
        </h2>
    </form>
<body>
    
</body>
</html>