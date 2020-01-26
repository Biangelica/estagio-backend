<?php
    include("Conexao.php");

    $nome=$_GET["nome"];
    $email=$_GET["email"];
    $tel=$_GET["phone"];
    $cidade=$_GET["city"];
    
      mysqli_query(abrirBanco(), "insert into contato (nome, email, telefone, cidade) values ('$nome', '$email', '$tel', '$cidade'");
    
    header("location:list.php");
 ?>
