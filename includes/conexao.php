<?php

function conectar()
{
	$db = "sistemadistribuido";
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";

	$conexao = new mysqli($servidor, $senha, $usuario, $db);
	if (!$conexao) {
		die("Não foi possível se conectar ao banco de dados.");
	}

	return $conexao;
}

$conexao = conectar();
