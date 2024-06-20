<?php
class Consultorio {
    private $nome;
    private $anoNasc;
    private $peso;
    private $altura;

    public function __construct(){
        $this -> nome = "";
        $this -> anoNasc = 0;
        $this -> peso = 0.0;
        $this -> altura = 0.0;
    }

    public function setNome($nome){
        $this -> nome = $nome;
    }
    public function setAnoNasc($anoNasc){
        $this -> anoNasc = $anoNasc;
    }
    public function setPeso($peso){
        $this -> peso = $peso;
    }
    public function setAltura($altura){
        $this -> altura = $altura;
    }
    public function getNome(){
        return $this -> nome;
    }
    public function getAnoNasc(){
        return $this -> anoNasc;
    }
    public function getPeso(){
        return $this -> peso;
    }
    public function getAltura(){
        return $this -> altura;
    }
    public function calcularIdade($anoNasc){
        return (2024 - $anoNasc);
    }

    public function calcularImc($peso, $altura){
        $imc = $peso / pow($altura, 2);
        if ($imc < 18.5) {
            $classificacao = "Abaixo do Peso";
        } elseif ($imc < 24.9) {
            $classificacao = "Peso Normal";
        } elseif ($imc < 29.9) {
            $classificacao = "Sobrepeso";
        } else {
            $classificacao = "Obesidade";
        }
        return number_format($imc, 2) . " - Classificação: " . $classificacao;
    }

    public function imprimirResultado(){
        echo "Ficha técnica de $this->nome";
        echo "<br><br>Altura: $this->altura";
        echo "<br><br>Peso: $this->peso";
        echo "<br><br>Idade: " . $this->calcularIdade($this->getAnoNasc());
        echo "<br><br>IMC: " . $this->calcularImc($this->peso, $this->altura);
    }
}
?>
