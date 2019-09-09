<?php
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
