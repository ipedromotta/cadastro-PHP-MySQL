<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include 'funcao/banco.php';

    $query = "SELECT * FROM devs";
    
    $query = mysqli_query($db, $query);
    ?>
</head>

<body>
    <header>
        <h1>Consulta de cadastros</h1>
    </header>
    <section>
        <form action="funcao/cadastros.php" method="POST">
            <label for="id">Desenvolvedor: <br>
            <select id="id" name="id" required>   
                <option value="" selected="selected">Selecione:</option>
                <?php
                    while($sel2 = mysqli_fetch_array($query))
                    {
                ?>
                <option value="<?php echo $sel2['id'] ?>"><?php echo $sel2['nome']; echo " "; echo $sel2['sobrenome']; ?></option>
                <?php
                    }
                ?>
			</select>
            </label><br>
            <button type="submit">Consultar</button><br>
            <button onclick="voltar()">Voltar</button>
        </form>
    </section>
    <footer>
        <p>Developed by &copy;Pedro Motta</p>
    </footer>
    <script src="main.js"></script>
</body>

</html>