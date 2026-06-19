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
    <title>Bhaskara</title>
</head>
<body style="background-color:#ff00aa;">
    <form method="POST" style="text-align:center;margin:10%;background-color:#2aff00;padding:5%;">
        <H1>Bhaskara</H1>

        <div class="mb-3">
            <label for="lvalorA" class="form-label">Informe o valor A: </label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="valorA">
        </div>

        <div class="mb-3">
            <label for="lvalorB" class="form-label">Informe o valor B: </label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="valorB">
        </div>

        <div class="mb-3">
            <label for="lvalorC" class="form-label">Informe o valor C: </label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="valorC">
        </div>

        <button type="submit" class="btn btn-primary">Calcular
            <?php
                if(isset($_POST['valorA']) || isset($_POST['valorB']) || isset($_POST['valorC'])){
                    $a = $_POST['valorA'];
                    $b = $_POST['valorB'];
                    $c = $_POST['valorC'];
                    //Chamo a variável que representa a classe Funcao
                    $resultado = $funcao->bhaskara($a, $b, $c);
                }                

            ?>
        </button>

        <h2>
        <?php
            if(isset($_POST['valorA']) || isset($_POST['valorB']) || isset($_POST['valorC'])){
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