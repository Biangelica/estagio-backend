<?php
    include("Conexao.php");

    $nome=$_GET["nome"];
    $email=$_GET["email"];
    $tel=$_GET["phone"];
    
      mysqli_query(abrirBanco(), "insert into contato (nome, email, telefone) values ('$nome', '$email', '$tel'");
    
    header("location:list.php");
 ?>
