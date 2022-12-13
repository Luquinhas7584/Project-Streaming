<?php 

class Animes{
    private $nome;
    private $ano;
    private $sin;


//puxa o valor da variavel
public function getNome(){
    return $this->nome;
}
//coloca na variavel
public function setNome($nome){
    $this->nome = $nome;
}

public function getSin(){
    return $this->sin;
}
//coloca na variavel
public function setSin($sin){
    $this->sin = $sin;
}
//definir todos os metodos ser e get para cada atributo

}
?>