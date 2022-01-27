<!DOCTYPE html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/assets/banco de dados/conectar.php');
$livro = selectOne('acervo', $_GET);
extract($livro);
?>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?> - Biblioteca EEEM Willy Carlos Frohlich</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/header.php") ?>
    <div class="container my-5">
        <h1 class="text-center texto-vermelho"><?= $titulo ?></h1>
        <a href="/cadastro/?editar=<?= $id ?>" class="btn btn-poli btn-warning">Editar</a>
        <hr>
        <div class="row row-cols-1 row-cols-md-3 g-2" id="detalhesLivro">
            <div class="col">
                <div class="border">
                    <h5>Título</h5>
                    <p><?= $titulo ?></p>
                </div>
            </div>
            <div class="col">
                <div class="border">
                    <h5>Sub título</h5>
                    <p><?= $sub_titulo ?></p>
                </div>
            </div>
            <div class="col">
                <div class="border">
                    <h5>Editora</h5>
                    <p><?= $editora ?></p>
                </div>
            </div>
            <div class="col">
                <div class="border">
                    <h5>Classe literária</h5>
                    <p><?= $classe_literaria ?></p>
                </div>
            </div>
            <div class="col">
                <div class="border">
                    <h5>Tipo do item</h5>
                    <p><?= $tipo_item ?></p>
                </div>
            </div>
            <div class="col">
                <div class="border">
                    <h5>Autor(es)</h5>
                    <p><?= $autor ?></p>
                </div>
            </div>
            <div class="col">
                <div class="border">
                    <h5>Exemplar</h5>
                    <p><?= $exemplar ?></p>
                </div>
            </div>
            <div class="col">
                <div class="border">
                    <h5>Volume</h5>
                    <p><?= $volume ?></p>
                </div>
            </div>
            <div class="col">
                <div class="border">
                    <h5>Número de páginas</h5>
                    <p><?= $edicao ?></p>
                </div>
            </div>
            <div class="col">
                <div class="border">
                    <h5>Número de páginas</h5>
                    <p><?= $numero_paginas ?></p>
                </div>
            </div>
            <div class="col">
                <div class="border">
                    <h5>Ano de edição</h5>
                    <p><?= $ano_edicao ?></p>
                </div>
            </div>
            <div class="col">
                <div class="border">
                    <h5>Data de aquisição</h5>
                    <p><?= $aquisicao ?></p>
                </div>
            </div>
            <div class="col">
                <div class="border">
                    <h5>Tombo</h5>
                    <p><?= $tombo ?></p>
                </div>
            </div>
            
            <div class="col">
                <div class="border">
                    <h5>CDD</h5>
                    <p><?= $cdd ?></p>
                </div>
            </div>

            <div class="col">
                <div class="border">
                    <h5>CDU</h5>
                    <p><?= $cdu ?></p>
                </div>
            </div>

            <div class="col">
                <div class="border">
                    <h5>Cutter</h5>
                    <p><?= $cutter ?></p>
                </div>
            </div>

            <div class="col">
                <div class="border">
                    <h5>ISBN</h5>
                    <p><?= $isbn ?></p>
                </div>
            </div>

            <div class="col">
                <div class="border">
                    <h5>Idioma</h5>
                    <p><?= $idioma ?></p>
                </div>
            </div>
            
            <!-- <div class="col">
                <div class="border">
                    <h5>Imagem de capa</h5>
                    <p><?= $img ?></p>
                </div>
            </div>
            <div class="col">
                <div class="border">
                    <h5>Observações</h5>
                    <p><?= $observacoes ?></p>
                </div>
            </div> -->
        </div>
    </div>
    <script src="/assets/js/bootstrap.bundle.js"></script>
</body>

</html>