<?php
    namespace Projeto\ti23t\php;

    class Funcao{
        //Encapsulamento = EVITARR que outras classes do projeto acessem diretamente as suas variáveis
        private int $num1;
        private int $num2;
        private int $resultado;
        private float $peso;
        private float $altura;


        //Construtor = Instancia as variáveis = Dar Valores Iniciais
        public function __construct(){
            $this->resultado = 0;
        }//fim do construtor

        public function coletar(int $num1, int $num2){
            $this->num1         = $num1;
            $this->num2         = $num2;
        }//fim do coletar

            //Métodos modificadores(SET) e acesso(GET)
            public function __get(string $dados):mixed
            {
                return $this->dados;
            }//fim do get

            public function __set(string $variavel, string $novoDado):void
            {
                $this->variavel = $novoDado;
            }//fim do set

            //Métodos - somar, subtrair, multiplicar, dividir
            public function somar(){
                //Usando a função SET
                $this->resultado = $this->num1 + $this->num2;
                return "<br>A soma do $this->num1 e do $this->num2 é: $this->resultado<br>";
            }//fim do método somar

            public function subtrair (){
                $this->resultado = $this->num1 - $this->num2;
                return "<br>A subtração do $this->num1 e do $this->num2 é: $this->resultado<br>";
            }//fim do método subtrair

            public function multiplicar (){
                $this->resultado = $this->num1 * $this->num2;
                return "<br>A multiplicação do $this->num1 e do $this->num2 é: $this->resultado<br>";
            }//fim do método multiplicar

            public function dividir (){
                if ($this->num2 <= 0){
                    return "Impossível dividir por zero";
                }else{
                    $this->resultado = $this->num1 / $this->num2;
                }
                return "<br>A divisão do $this->num1 e do $this->num2 é: $this->resultado<br>";
            }//fim do dividir

            //Fórmula Bhaskara
            public function bhaskara(int $a, int $b, int $c){
                $delta = pow($b,2) - 4 * $a * $c;
                if($delta < 0){
                    return "Impossível calcular X1 e X2 de delta negativo, valor do delta: $delta";
                }else{
                    $x1 = (- $b + sqrt($delta))/(2 * $a);
                    $x2 = (- $b - sqrt($delta))/(2 * $a);
                    return "<br>Delta: $delta<br>X1: $x1<br>X2: $x2";
                }
            }//fim do bhaskara

            //Fórmula IMC
            public function calcularImc(float $peso, float $altura){
                $imc = 0;//Instanciando a variável
                if($peso <= 0  || $altura <= 0){
                    return "Pesou ou altura não estão corretos, informe um valor maior que zero!";
                }else{
                    $imc = $peso / ($altura^2);
                    if($imc <= 18.5){
                        return "Abaixo do peso normal, seu IMC é: ".$imc;
                    }else if ($imc > 18.5 && $imc <= 24.9){
                        return "Peso normal, seu IMC é: ".$imc;
                    }else if ($imc > 24.9 && $imc <= 29.9){
                        return "Excesso de peso, seu IMC é: ".$imc;
                    }else if ($imc > 29.9 && $imc <= 34.9){
                        return "Obesidade classe I ".$imc;
                    }else{
                        return "Obesidade classe II ".$imc;
                    }//fim do if de classificação
                    }//fim do if... else de validação
                }//fim do método

            //Área do retângulo
            public function retangulo(float $base, float $altura){
                $area = $base * $altura;
                if($area <=0){
                    return "Impossível ter uma área menor ou igual a 0";
                }else{
                    return "A área do retângulo é: $area";
                }
            }//fim do retangulo

            //Área do triângulo
            public function triangulo(float $base, $altura){
                $area = ($base * $altura)/2;
            if($area <= 0){
                return "Impossível ter uma área menor ou igual a zero!";
            }else{
                return "A área do triângulo é: $area";
            }
        }//fim do triangulo

        //Preço com 18% de imposto
        public function preco(float $precoProduto){
            $valor = ($precoProduto * 0.18) + $precoProduto;
        if($precoProduto <= 0){
            return "Erro, preço do produto precisa ser positivo";
        }else{
            return "O preço do produto é: $valor";
        }
        }//fim do preco

        //Leia a idade e converta para dias
        public function idade(int $idade){
            $dias = $idade * 365;
        if($idade <= 0){
            return "Não existe como converter para dias uma idade com valor menor ou igual a zero!";
        }else{
            return "O valor convertido da idade para dias é: $dias";
        }
        }//fim da idade

        //Leia dois números e exiba a soma
        public function somarDoisNumeros(){
            $this->resultado = $this->num1 + $this->num2;
            return "<br>A soma do $this->num1 e do $this->num2 é: $this->resultado<br>";
        }//fim do método somar

        //Leia um número e exiba o dobro
        public function dobroDoisNumeros(int $num1){
            $resultado = $num1 * 2;
            return "O resultado do dobro do número é: $resultado";
        }//fim do método dobro

        //Média de três números
        public function mediaTres(int $num1, int $num2, int $num3){
            $resultado = ($num1 + $num2 + $num3) / 3;
            return "<br>A média é: $resultado";
        }//fim do método média

        //Raiz quadrada
        public function raiz(float $numero){
            $resultado = sqrt($numero);
            return "<br>A raiz quadrada é: $resultado";
        }//fim do método raiz quadrada

        public function centimetros(float $metros){
            $resultado = $metros * 100;
            return "<br>Em centímetros: $resultado";
        }//fim do método metros para centímetros

        public function circulo(float $raio){
            $resultado = pi() * pow($raio,2);
            return "<br>A área do círculo é: $resultado";
        }//fim da área do círculo

        public function fahrenheit(float $celsius){
            $resultado = ($celsius * 9/5) + 32;
            return "<br>Fahrenheit: $resultado";
        }//fim do fahrenheit

        public function desconto(float $preco){
            $resultado = $preco - ($preco * 10/100);
            return "<br>Preço com desconto: R$ $resultado";
        }//fim do desconto

        public function idadeMeses(int $idade){
            $resultado = $idade * 12;
            return "<br>Idade em meses: $resultado";
        }//fim do Idade para Meses

        //Método do par ou ímpar
        public function parImpar(int $numero){
            $resultado = ($numero % 2);
            return ["Par","Ímpar"][$resultado];
        }//fim do par ou ímpar

        //Volume da caixa
        public function caixa(float $comprimento, float $largura, float $altura){
            $volume = $comprimento * $largura * $altura;
        if($volume <= 0){
            return "Impossível calcular um volume menor ou igual a zero!";
        }else{
            return "O volume da caixa é: $volume";
        }
        }//fim da caixa

        //Recebendo um número e calcule seu quadrado e cubo
        public function quadradoECubo(int $numero){
            $quadrado = pow($numero,2);
            $cubo = pow($numero,3);
            return "O quadrado é: $quadrado <br>O cubo é: $cubo";
        }//fim do método quadrado e cubo

        //Velocidade média
        public function velocidadeMedia(float $distancia, float $tempo){
            $velocidade = $distancia / $tempo;
        if($tempo <= 0){
            return "O tempo deve ser maior que zero!";
        }else{
            return "A velocidade média é: $velocidade";
        }
        }//fim da velocidade média

        //Média aritmética
        public function mediaAritmetica(float $num1, float $num2){
            $resultado = ($num1 + $num2) / 2;
            return "A média aritmética é: $resultado";
        }//fim da média aritmética

        //Salário mensal
            public function salario(float $valorHora, float $horas){
            $salario = $valorHora * $horas;
            return "O salário mensal é: R$ $salario";
        }//fim do salário

        //Tempo restante de vida
        public function tempoVida(int $idade){
            $resultado = 100 - $idade;
        if($idade >= 100){
            return "A pessoa já possui 100 anos ou mais.";
        }else{
            return "Faltam $resultado anos para completar 100 anos.";
        }
        }//fim do tempo restante

        //Soma e média
        public function somaMedia(float $num1, float $num2, float $num3){
            $soma = $num1 + $num2 + $num3;
            $media = $soma / 3;
            return "A soma é: $soma <br>A média é: $media";
        }//fim da soma e média

        }//fim da classe função
?><!-- Fechamento da TAG PHP -->