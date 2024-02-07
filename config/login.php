<?php

session_start();
include_once "conexao.php";

$email = mysqli_real_escape_string($coon, $_POST['email']);
$senha = mysqli_real_escape_string($coon, $_POST['senha']);

if(!empty($email) && !empty($senha)){

    $sql = mysqli_query($coon, "SELECT email FROM user WHERE email = '{$email}'");

    if(mysqli_num_rows($sql) > 0){
        $sql1 = mysqli_query($coon, "SELECT * FROM user WHERE email = '{$email}' AND senha = '{$senha}'");

        if(mysqli_num_rows($sql1) == 1){
            $dados = mysqli_fetch_array($sql1);

            $_SESSION['user_id'] = $dados['user_id'];
            echo "sucesso";
        }else {
            echo "E-mail ou senha invalido!";
        }
    }else {
        echo "Por favor insira um e-mail valido!";
    }

}else {
    echo "Por favor preencha os campos vazios!";
}