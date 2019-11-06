<?php

    //chamando a classe para esse arquivo.
    include "Pessoas.php";
    //incluido a classe Funcionrio
    include "Funcionarios.php";

    //1.Criando uma pessoa a partir do modelo(classe Pessoa) - OBJETO -;
    //2.Quero criar uma nova Pessoa a partir do modelo Pessoas.
    $pessoaUm = new Pessoas();
    //Alterando uma atributo - Por ser publico
    //3.Esta acessando a carcteristica nome da variavel
    $pessoaUm->nome = "Vitor";
    //4.quando tenho um atributo privado apenas a classe pode alterar a info ou nao.
    //Portanto vamos ter um erro ao tentar printar na tela.
    //para mudar o atrivuto precisamos acessar o metodo acessor.
    $pessoaUm->setIdade(23);


    //echo "<h1>".$pessoaUm->nome."</h1>";
    //para acessar a idade por ser privada chamamos o metodo que criamos na classe Pessoas.
    //echo "<h1>".$pessoaUm->getIdade()."</h1>";

    //5.criando um segundo OBJETO.
    $pessoaDois = new Pessoas();
    $pessoaDois->nome = "Claudia";
    

    //var_dump($pessoaDois);

    //6.criando um novo Objeto com  Classe Funcionario
    $funcionarioUm = new Funcionarios();
    $funcionarioUm->nome = "Ligia";
    $funcionarioUm->setIdade(22);
    var_dump ($funcionarioUm);

?>