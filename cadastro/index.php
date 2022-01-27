<?php
include($_SERVER['DOCUMENT_ROOT'] . '/assets/banco de dados/conectar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros - Biblioteca EEEM Willy Carlos Frohlich</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
</head>

<body>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/header.php");
    ?>
    <div class="container my-5">
        <h1 class="text-center texto-vermelho">Cadastro de livros</h1>
        <hr>
        <?php $arquivoOK = true;
        if (isset($_POST) && $_POST) {
            if (isset($_FILES['img']) && $_FILES['img']['name'] != '') {
                if ($_FILES['img']['error'] == 0) {
                    if ($_FILES['img']['size'] < 1000000) {
                        move_uploaded_file($_FILES['img']['tmp_name'], ('../assets/img/capa livros/' . $_FILES['img']['name']));
                        $_POST['img'] = $_FILES['img']['name'];
                        $arquivoOK = true;
                    } else {
                        $arquivoOK = false;
                        echo ("<h6 class='text-warning'>Erro ao cadastrar o livro pois a imagem é muito grande, o máximo é 1MB </h6>");
                    }
                } else {
                    $arquivoOK = false;
                    echo ("<h6 class='text-danger'> Erro ao carregar a imagem </h6>");
                }
            }
            if ($arquivoOK) {
                $id = criar("acervo", $_POST);
                echo ("<h6 class='text-success'> Livro " . $id . " cadastrado </h6>");
            }
        } ?>
        <form action="" method="post" enctype="multipart/form-data" class="row row-cols-1 row-cols-md-2 gy-3">
            <div class="col">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
            </div>
            <div class="col">
                <label for="sub_titulo" class="form-label">Sub título</label>
                <input type="text" class="form-control" id="sub_titulo" name="sub_titulo">
            </div>
            <div class="col">
                <label for="editora" class="form-label">Editora</label>
                <input type="text" class="form-control" id="editora" name="editora">
            </div>
            <div class="col">
                <label for="classe_literaria" class="form-label">Classe literária</label>
                <input type="text" class="form-control" id="classe_literaria" name="classe_literaria">
            </div>
            <div class="col">
                <label for="tipo_item" class="form-label">Tipo do item</label>
                <input type="text" class="form-control" id="tipo_item" name="tipo_item">
            </div>
            <div class="col">
                <label for="autor" class="form-label">Autor(es)</label>
                <input type="text" class="form-control" id="autor" name="autor">
            </div>
            <div class="col">
                <label for="exemplar" class="form-label">Exemplar</label>
                <input type="number" class="form-control" id="exemplar" name="exemplar">
            </div>
            <div class="col">
                <label for="volume" class="form-label">Volume</label>
                <input type="number" class="form-control" id="volume" name="volume">
            </div>
            <div class="col">
                <label for="edicao" class="form-label">Número de páginas</label>
                <input type="text" class="form-control" id="edicao" name="edicao">
            </div>
            <div class="col">
                <label for="numero_paginas" class="form-label">Número de páginas</label>
                <input type="text" class="form-control" id="numero_paginas" name="numero_paginas">
            </div>
            <div class="col">
                <label for="ano_edicao" class="form-label">Ano de edição</label>
                <input type="number" class="form-control" id="ano_edicao" name="ano_edicao">
            </div>
            <div class="col">
                <label for="aquisicao" class="form-label">Data de aquisição</label>
                <input type="date" class="form-control" id="aquisicao" name="aquisicao">
            </div>
            <div class="col">
                <label for="tombo" class="form-label">Tombo</label>
                <input type="number" class="form-control" id="tombo" name="tombo">
            </div>
            <div class="col">
                <label for="cdd" class="form-label">CDD</label>
                <input type="number" class="form-control" id="cdd" name="cdd">
            </div>
            <div class="col">
                <label for="cdu" class="form-label">CDU</label>
                <input type="number" class="form-control" id="cdu" name="cdu">
            </div>
            <div class="col">
                <label for="cutter" class="form-label">Cutter</label>
                <input type="text" class="form-control" id="cutter" name="cutter">
            </div>
            <div class="col">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn">
            </div>
            <div class="col">
                <label for="idioma" class="form-label">Idioma</label>
                <input type="text" class="form-control" id="idioma" name="idioma">
            </div>
            <div class="col">
                <label for="img" class="form-label">Imagem de capa</label>
                <input type="file" class="form-control" id="img" name="img">
            </div>
            <div class="col">
                <label for="observacoes" class="form-label">Observações</label>
                <textarea class="form-control" id="observacoes" name="observacoes" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-poli d-block mt-5">Salvar</button>
        </form>
    </div>

    <script src="/assets/js/bootstrap.bundle.js"></script>
</body>

</html>