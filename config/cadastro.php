<?php

session_start();
include_once "conexao.php";

$nome = mysqli_real_escape_string($coon, $_POST['name']);
$apelido = mysqli_real_escape_string($coon, $_POST['apelido']);
$email = mysqli_real_escape_string($coon, $_POST['email']);
$senha = mysqli_real_escape_string($coon, $_POST['senha']);

if(!empty($nome) && !empty($apelido) && !empty($email) && !empty($senha)){

    //Validar email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){

        //Verificando se o e-mail ja existe na db ou nao
        $sql1 = "SELECT * FROM user WHERE email = '{$email}'";
        $result1 = mysqli_query($coon, $sql1);

        if(mysqli_num_rows($result1) > 0){
            echo "$email - O e-mail ja existe tente de novo!";
        }else {

            $gerar_id = rand(time(), 1000000); //Esse metodo era gerar numeros aleatorios que vao servir de id para os usuarios

            $sql2 = mysqli_query($coon, "INSERT INTO user(user_id,nome,apelido,email,senha)
                                        VALUES({$gerar_id},'{$nome}','{$apelido}','{$email}','{$senha}')");

            if($sql2){
                $sql3 = mysqli_query($coon, "SELECT email FROM user WHERE email = '{$email}'");

                if(mysqli_num_rows($sql3) > 0){
                    $dados = mysqli_fetch_array($sql3);

                    $_SESSION['user_id'] = $dados['user_id'];
                    echo "sucesso";
                }else {
                    echo "ERRO de sistema!";
                }
            }else {
                echo "ERRO ao inserir os dados tente mais tarde!";
            }
        }

    }else {
        echo "$email - O e-mail e invalido!";
    }

}else {
    echo "Por favor preencha os campos vazios!";
}