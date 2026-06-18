<?php
    namespace Projeto\ti23t\php;

    class Funcao{
        //Encapsulamento = EVITARR que outras classes do projeto acessem diretamente as suas variáveis
        private int $num1;
        private int $num2;
        private int $resultado;



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

        }//fim do construtor
?><!-- Fechamento da TAG PHP -->