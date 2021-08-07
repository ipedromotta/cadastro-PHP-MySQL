<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
    <link rel="stylesheet" href="../style.css">
    <script>
        function voltar(){
            window.location.href = "../"
        }
    </script>
    <?php
        $id = $_POST["id"];
        include 'banco.php';

        $query = "SELECT * FROM devs WHERE ID = $id;";
        $query = mysqli_query($db, $query);
        $sel = mysqli_fetch_array($query);

    ?>
</head>
<body>
    <header>
        <h1>Cadastro</h1>
    </header>
    <section>
    <label for="nome">
        <strong>Nome:</strong><?php echo $sel["nome"] ?><br>
        <strong>Sobrenome:</strong><?php echo $sel["sobrenome"]?><br>
        <strong>Email:</strong><?php echo $sel["email"]?><br>
        <strong>Lado:</strong><?php echo $sel["lado"]?><br>
        <strong>Senioridade:</strong><?php echo $sel["senioridade"]?><br>
        <strong>Tecnologias:</strong><?php echo $sel["tecnologias"]?><br>
        <strong>Experiência:</strong><?php echo $sel["experiencia"]?><br>
        <button onclick="voltar()">Voltar</button>
    </section>
    <footer>
        <p>Developed by &copy;Pedro Motta</p>
    </footer>
</body>
</html>