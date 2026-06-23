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
    <title>Idade para dias</title>
</head>
<body style="background-color:#ff00aa;">
    <form method="POST" style="text-align:center;margin:10%;background-color:#2aff00;padding:5%;">
        <H1>Idade para dias</H1>

        <div class="mb-3">
            <label for="lidade" class="form-label">Informe a idade para calcular os dias: </label>
            <input type="number" class="form-control" id="idade" name="idade">
        </div>

        <button type="submit" class="btn btn-primary">Calcular
            <?php
                if(isset($_POST['idade'])){
                    $idade = $_POST['idade'];
                    //Chamo a variável que representa a classe Funcao
                    $dias = $funcao->idade($idade);
                }                

            ?>
        </button>

        <h2>
        <?php
            if(isset($_POST['idade'])){
                echo $dias;               
            }else{
                echo "Preencha os campos!";
            }
        ?>
        </h2>
    </form>
<body>
    
</body>
</html>