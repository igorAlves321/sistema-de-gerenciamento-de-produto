<?php
    include_once("testelogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <title>Cadastro De Tipos de Empresa</title>
</head>
<body>
    <div id="aria-live-container" class="sr-only" aria-live="polite"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-12 col-sm-8">
                <h1>Olá <?php echo $_SESSION["nome"]; ?></h1>
                <a href="sair.php" class="btn btn-primary">Sair</a>
                <div class="mb-3 mt-3">
                    <label for="nome" class="form-label">Nome do Tipo:</label>
                    <input type="text" class="form-control" id="nome" 
                                        placeholder="Digite o nome do tipo de empresa">
                </div>
                <button type="button" class="btn btn-info mb-3" id="btnCadastrar">Cadastrar</button>

                <div class="text-center mt-4">
                    <a href="index.php" class="btn btn-primary">Voltar</a>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="js/tipoempresa.js"></script>
</body>
</html>
