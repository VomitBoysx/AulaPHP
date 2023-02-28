<?php

//Classe
public class Pessoa(){
    //Atributos
    private $nome;
    private $endereço;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    //Método GET
    public function getNome(){
        return $this->nome;
    }

    //Método SET
    public function setNome(){
        $this->nome = $nome;
    }

    /*
    .  
    .  
    .  
    Deve-se colocar todos os métodos GET e SET correspondente a classe Pessoa()
    */
}


?>