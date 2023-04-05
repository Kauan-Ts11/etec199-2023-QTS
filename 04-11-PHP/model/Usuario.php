<?php
    class Usuario {


        //ATRIBUTOS

        private $nome, $cpf, $rendimento;


        //CONSTRUTOR

        public function __construct($nome, $cpf, $rendimento) {

            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->rendimento = $rendimento;
            $this->aliquota = $this->calcularAliquota();
            $this->imposto = $this->calcularImposto();

        }


        //MÉTODO PARA CALCULAR ALÍQUOTA

        public function calcularAliquota() {

            if ($this->rendimento > 0 && $this->rendimento <= 22847.76) {
                return 0;
            }
            else if ($this->rendimento > 22847.76 && $this->rendimento <= 33919.80) {
                return 7.5;
            }
            else if ($this->rendimento > 33919.80 && $this->rendimento <= 45012.60) {
               return 15;
            }
            else if ($this->rendimento > 45012.60 && $this->rendimento <= 55976.16) {
                return 22.5;
            }
            else {
                return 27.5;
            }

        }


        //MÉTODO PARA CALCULAR IMPOSTO A PAGAR

        public function calcularImposto() {
            if ($this->aliquota == 0) {
                return 0;
            }
            else {
               $this->imposto = ($this->rendimento * $this->aliquota) / 100;

                return ($this->imposto = number_format($this->imposto, 2, '.',''));
            }
        }


        //MÉTODOS GETTERS 

        public function getNome(){return $this->nome;}
        public function getcpf(){return $this->cpf;}
        public function getRendimento(){return "R$".$this->rendimento;}
        public function getAliquota(){return $this->aliquota."%";}
        public function getImposto(){return "R$".$this->imposto;}

       

        //MÉTODOS SETTERS

        public function setNome($nome){$this->nome = $nome;}
        public function setCpf($cpf){$this->cpf = $cpf;}
        
        public function setRendimento($rendimento){

            $this->rendimento = $rendimento;
            $this->aliquota = $this->calcularAliquota();
            $this->imposto = $this->calcularImposto();
        }

    }
?>