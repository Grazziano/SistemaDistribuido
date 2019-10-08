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

$pdo = new PDO("mysql: host=localhost; dbname=sistemadistribuido", "root", "senac1988");

$conexao = conectar();
