<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djama Sindeaux");
$cad->setEmail("djama@hcode.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();

 ?>