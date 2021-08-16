<?php
$nome = strtoupper($_POST['nome']);
$sobrenome = strtoupper($_POST['sobrenome']);
$email = $_POST['email'];
$lado = $_POST['devweb'];
$senioridade = $_POST['senioridade'];
$tecnologias = $_POST['tecnologia'];
$experiencia = $_POST['experiencia'];
$tabela1 = 'devs';
$tecs = "";

foreach($tecnologias as $tecnologia){
    $tecs .= $tecnologia .", ";
}

include 'banco.php';

$query = "INSERT INTO `$tabela1` (`NOME`, `SOBRENOME`, `EMAIL`, `LADO`, `SENIORIDADE`, `tecnologias`, `experiencia`) VALUES ('$nome', '$sobrenome', '$email', '$lado', '$senioridade', '$tecs', '$experiencia') ";

#$executar = mysqli_query($db,$query);
if (mysqli_query($db,$query)) {
    echo("<script language = 'javascript'> alert('Cadastro realizado com sucesso!'); </script>");
    echo("<script language = 'javascript'> location.href = '../app/cadastrar.html'; </script>");
} else {
    echo("<script language = 'javascript'> alert('Erro no sistema!'); </script>");
    echo("<script language = 'javascript'> location.href = '../app/cadastrar.html'; </script>");
    #echo "Error: " . $query . "<br>" . mysqli_error($db);
}
mysqli_close($db);

?>