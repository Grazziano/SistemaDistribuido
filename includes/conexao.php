<?php

function conectar(){
	$servidor = "localhost";
	$porta = 5432;
	$bancoDeDados = "sistemadistribuido";
	$usuario = "postgres";
	$senha = "arkham1988";

	$conexao = pg_connect("host=$servidor port=$porta dbname=$bancoDeDados " + "user=$usuario password=$senha");
	if(!$conexao) {
		die("Não foi possível se conectar ao banco de dados.");
	}

	return $conexao;
}

$conexao = conectar();