<!DOCTYPE html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/assets/banco de dados/conectar.php');
?>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca EEEM Willy Carlos Frohlich</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/header.php") ?>
    <div class="container my-5">
        <h1 class="text-center texto-vermelho">Acervo</h1>
        <div class="text-end"><a href="/cadastro" class="btn btn-poli btn-sm">Cadastrar livros</a></div>
        <hr>
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <?php
            $resultado = selectAll("acervo", []);
            foreach ($resultado as $livro) {
                extract($livro);
            ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="/assets/img/capa livros/<?= $img ?>" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title fw-bold"><?= $titulo ?></h4>
                            <h5 class="card-title"><?= $autor ?></h5>
                            <h5 class="card-title"><?= $classe_literaria ?></h5>
                            <p class="text-success mb-0">Disponível</p>
                            <a href="/livro?id=<?= $id ?>" class="btn btn-poli btn-sm float-end position-absolute" style="right: 10px; bottom: 10px;">Detalhes</a>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>





    <script src="/assets/js/bootstrap.bundle.js"></script>
</body>

</html>