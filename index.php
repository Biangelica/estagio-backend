<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <title>Contato</title>
    </head>
    <body>
        <div class="container">
            <form method="get" action="gravar.php" class="formulario">
                <div class="form-group">
                    <label for="name">Nome Completo</label>
                    <input type="text" class="form-control" name="nome" id="name" placeholder="Nome e Sobrenome">
                </div>
                <div class="form-group">
                    <label for="email">Endereço de E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail">
                </div>
                <div class="form-group">
                    <label for="phone">Telefone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="(XX) XXXXX-XXXX">
                </div>
                <div class="form-group">
                    <label for="city">Cidade</label>            
                        <option>Selecione a cidade</option>
                        <?php
                            include("Conexao.php");
                            $sql=mysqli_query(abrirBanco(), "SELECT id, nomeCidade FROM cidades;");?> 
                            <select class="form-control" id="city" name="city">
                             <option>Selecione a cidade</option>
                       <?php
                            $resultado = mysqli_query(abrirBanco(), $sql);
                            while($linha = mysqli_fetch_array($sql)){ ?>     
                            <option value=" <?php echo $linha['id']; ?> "> <?php echo $linha['nomeCidade']; ?> </option>
                         <?php } ?>                    
                   </select>
                </div>
                <div class="form-group">
                    <label for="informations">Informações</label>
                    <textarea class="form-control" name="info" id="informations" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    </body>
</html>
