<?php

    session_start();
    include_once "config/conexao.php";

    if(!isset($_SESSION['user_id'])){
        header('location: login.php');// O script era lhe direcionar a essa pagina
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
    <!--Projecto by ClevCodes link do canal https:///www.youtube.com/@clevcodes-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Sistema de Login</title>
</head>
<body>
    <?php

    $sql = mysqli_query($coon, "SELECT * FROM user WHERE user_id = {$_SESSION['user_id']}");

    if(mysqli_num_rows($sql) > 0){
        $dados = mysqli_fetch_array($sql);
    }
    
    ?>
    <section class="conteudo">
        <header class="cabecalho">
            <h1 style="text-align: center;">Bem-vindo a ClevCodes <br/><?php echo $dados['nome'] ." ". $dados['apelido'];?></h1>
        </header>

        <a href="logout.php">Terminar sessao</a>
    </section>
</body>
</html>