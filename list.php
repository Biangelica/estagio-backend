<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <title>Cadastros</title>
    </head>
    <body>
        <div class="container">
            <span class="align-text-top">
                <button type="button" class="btn btn-primary">Download CSV</button>
            </span>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Cidade / Estado</th>
                    </tr>
                </thead>
                <tbody>
                 <?php
                    include ("Conexao.php");
                    $seleciona=mysqli_query(abrirBanco(), "SELECT con.*, cid.nomeCidade, cid.uf  FROM contato con INNER JOIN cidades cid on con.cidade = cid.id ORDER BY nomeCidade ");
                    while($campo=mysqli_fetch_array($seleciona)){?>                  
                        <tr>
                            <td> <?=$campo["id"]?></td>
                            <td> <?=$campo["nome"]?></td>
                            <td>  <?=$campo["email"]?></td>
                            <td>  <?=$campo["telefone"]?></td>
                            <td>  <?=$campo["nomeCidade"]?></td>
                            <td>  <?=$campo["uf"]?></td>
                            </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    </body>
</html>
