<?php
require ("Pessoa.php");
  class Fruta {
      //nome dos atributos
    public $nome;
    public $cor;
    // metodos

  function __construct($nome,$cor){
      $this-> nome =$nome;
      $this->cor=$cor;
  }

    function set_name($nome){
      $this->nome = $nome;
    }
    function set_cor($cor){
      $this->cor =$cor;
    }
    function get_name(){
      return $this ->nome;
    }
    function get_cor(){
      return $this ->cor;
    }
  }
  // criar palavra
  $morango = new Fruta("morango_ifsp_turmaB", "vermelho");
  $maca = new Fruta("maca_ifsp_turmaB", "vermelho");

  //$morango->set_name("morango_ifsp_turmaB")
  //$maca->set_name("maca_ifsp_turmaB")

  echo "</br>".$morango->get_name();
  echo "</br>".$maca->get_name();
  

  $aluno1 = new Pessoa ("Leonam", 18, "estudante");
  echo $aluno1->apresentar();

  ?> 
