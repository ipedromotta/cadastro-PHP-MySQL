<?php 
$servidor = 'localhost';
$banco = 'cadastros';
$usuario = 'root';
$senha = '';
$db = mysqli_connect($servidor, $usuario, $senha,$banco);
if(!$db)
{
	echo "Erro ao conectar ao banco de dados!";
}
?>