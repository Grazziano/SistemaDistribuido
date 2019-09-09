<?php

function conectar()
{
	$bancoDeDados = "sistemadistribuido";
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";

	$conexao = new mysqli($servidor, $senha, $usuario, $bancoDeDados);
	if (!$conexao) {
		die("Não foi possível se conectar ao banco de dados.");
	}

	return $conexao;
}

$conexao = conectar();
