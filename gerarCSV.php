<?php
include("Conexao.php");

$all = selectAllData();

/*"$arqexcel" Seleciona cada linha das tabelas e as insere ordenadamente em uma tabala */
$arqexcel = "<meta charset='UTF-8'>";

$arqexcel .= "<table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Nome</th>
                        <th scope='col'>E-mail</th>
                        <th scope='col'>Telefone</th>
                        <th scope='col'>Cidade / Estado</th>
                    </tr>
                </thead>
                <tbody>";
                 
                
                    include ("Conexao.php");
                    $seleciona=mysqli_query(abrirBanco(), "select con.*, cid.nomeCidade, cid.uf  from contato con inner join cidades cid on con.cidade = cid.id order by nomeCidade ");
                    while($campo=mysqli_fetch_array($seleciona)){                  
                    $arqexcel .=  "  <tr>
                            <td> {$campo["id"]}</td>
                            <td> {$campo["nome"]}</td>
                            <td>  {$campo["email"]}></td>
                            <td>  {$campo["telefone"]}</td>
                            <td>  {$campo["nomeCidade"]}</td>
                            <td>  {$campo["uf"]}</td>
                            </tr>";
                    }
               $arqexcel .=" </tbody>
            </table>";
               
               //Cria um arquivo chamado relatorio.xls com as informações contidas em $arqexcel
               header("Content-Type: application/xls");
               header("Content-Disposition:attachment; filename = relatorio.xls");
               echo $arqexcel;
