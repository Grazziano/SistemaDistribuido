<?php
/* BANCO DE DADOS LOCAL */


function conectar()
{
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$db = "sistemadistribuido";

	$con = new mysqli($servidor, $usuario, $senha, $db);
	return $con;
}

$conexao = conectar();


/* BANCO DE DADOS HOSPEDADO */
/*
function conectar()
{
	$servidor = "localhost";
	$usuario = "id11295376_grazziano";
	$senha = "senac1988";
	$db = "id11295376_sistemadistribuido";

	$con = new mysqli($servidor, $usuario, $senha, $db);
	return $con;
}

$conexao = conectar();
*/
