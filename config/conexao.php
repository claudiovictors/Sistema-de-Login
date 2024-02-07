<?php

$coon = mysqli_connect("localhost","root","","login");

if(mysqli_connect_error()){
    echo "Falha na conexao: ".mysqli_connect_error();
}