<?php 
  class Cinema{
        private $filme;
        //definir todos os atributos
        private $filmec;


    public function __construct($filme, Filme $filmec){
        //tratamento do metodo construtor
    }

    //puxa o valor da variavel
    public function getFilme(){
        return $this->filme;
    }
    //coloca na variavel
    public function setFilme($filme2){
        $this->filme = $filme2;
    }

    //definir todos os metodos ser e get para cada atributo

  }
?>