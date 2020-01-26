<?php
if(!function_exists('abrirBanco')) {
    function abrirBanco() {
    $conexao=mysqli_connect("localhost", "root", "", "bancoDados");
    return $conexao;
    }
}
