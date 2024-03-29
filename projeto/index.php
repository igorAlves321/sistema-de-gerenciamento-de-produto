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
    <title>Página Inicial</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 mt-5 p-3 border rounded">
                <h1 class="text-center text-primary mb-4">Olá <?php echo $_SESSION["nome"]; ?></h1>
                <div class="text-center">
                    <a href="sair.php" class="btn btn-danger mb-3">Sair</a>
                </div>

                <h2 class="text-center text-secondary mb-3">Escolha</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="empresa.php" class="btn btn-primary d-block mx-auto">Empresas</a></li>
                    <li class="list-group-item"><a href="produto.php" class="btn btn-primary d-block mx-auto">Produtos</a></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>
