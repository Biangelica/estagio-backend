<?php
//função faz conexao com o banco de dados
if(!function_exists('abrirBanco')) {
    function abrirBanco() {
    $conexao=mysqli_connect("localhost", "root", "", "bancoDados");
    return $conexao;
    }
}

//Função utilizada somente para selecionar as informações dos usuarios e retorna-las
if(!function_exists('selectAllData')) {
    function selectAllData() {
     $banco = abrirBanco();
    $sql = "select con.*, cid.nomeCidade, cid.uf  from contato con inner join cidades cid on con.cidade = cid.id order by nomeCidade ";
    $resultado = $banco->query($sql);
    while($row = mysqli_fetch_array($resultado)){
        $all[] = $row;
    }
    return $all;
    }
}
?>
