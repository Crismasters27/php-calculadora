<?php namespace Projeto\ti23t; //Faço o comentário
    require_once('php/funcoes.php'); //Acessando o arquivo
    use Projeto\ti23t\php\Funcao; //Acessando a classe que está no arquivo funcoes.php
    $funcao = new Funcao();//Construtor da classe funcao ->Concetando a INDEX E FUNCOES
?>
<!-- Faz o comentário -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Página Inicial</title>
</head>
<body>
    <form method="POST" style="text-align:center;margin:10%;background-color:#2aff00;padding:5%;">
        <H1>Calculadora</H1>

        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o primeiro número: </label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="primeiroNumero">
        </div>

        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o segundo número: </label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="segundoNumero">
        </div>


        <div class="mb-3">
            <label for="lResultado" class="form-label">Resultado:</label>
            <textarea class="form-control" id="resultado" name="resultado" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Somar
            <?php
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
                //Chamo a variável que representa a classe Funcao
                $funcao->coletar($num1, $num2);
                $funcao->somar();
                echo $num1." ".$num2;
            ?>
        </button>



        <button type="button" class="btn btn-primary">Subtrair</button>
        <button type="button" class="btn btn-primary">Multiplicar</button>
        <button type="button" class="btn btn-primary">Dividir</button>
    </form>
</body>
</html>