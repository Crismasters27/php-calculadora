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
    <title>Área do Retângulo</title>
</head>
<body style="background-color:#ff00aa;">
    <form method="POST" style="text-align:center;margin:10%;background-color:#2aff00;padding:5%;">
        <H1>Área do Retângulo</H1>

        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe a base: </label>
            <input type="text" class="form-control" id="base" name="base">
        </div>

        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe a altura: </label>
            <input type="text" class="form-control" id="altura" name="altura">
        </div>

        <button type="submit" class="btn btn-primary">Calcular
            <?php
                if(isset($_POST['base']) || isset($_POST['altura'])){
                    $base = $_POST['base'];
                    $altura = $_POST['altura'];
                    //Chamo a variável que representa a classe Funcao
                    $area = $funcao->retangulo($base, $altura);
                }                

            ?>
        </button>

        <h2>
        <?php
            if(isset($_POST['base']) || isset($_POST['altura'])){
                echo $area;               
            }else{
                echo "Preencha os campos!";
            }
        ?>
        </h2>
    </form>
<body>
    
</body>
</html>