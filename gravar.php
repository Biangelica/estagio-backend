<?php
    include("Conexao.php");

    $nome=$_GET["nome"];
    $email=$_GET["email"];
    $tel=$_GET["phone"];
    $cidade=$_GET["city"];
    $info=$_GET["info"];
    
        mysqli_query(abrirBanco(), "insert into contato (nome, email, telefone, cidade, info) values ('$nome', '$email', '$tel', '$cidade', '$info')");
    
    header("location:list.php");
 ?>
