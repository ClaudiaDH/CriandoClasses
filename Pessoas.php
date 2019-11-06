<?php


//1.criando uma classe.
class Pessoas {

    //2.criando caracteristicas e colocando visibilidade.
    public $nome;
    private $idade;
    protected $cpf;
    public $email;

    //4.criando metodo acessores.
    public function setIdade($idade){
        //para acessa-lo temos que usar this, para dizer que o atributo é dela.
        //$idade é o parametro que recebo, nao o atributo.
        $this->idade = $idade;
    }
    //5.criando metodo para acessar idade - para que eu consiga printar na tela do index.
    //apenas retorna o valor da idade
    public function getIdade(){
        return $this->idade;
    }

    //3.criando os metodos(funções) e a visibilidade.
    public function falar(){
        echo "E ai!";
    }


}



?>