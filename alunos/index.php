<!DOCTYPE html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/assets/banco de dados/conectar.php');
$alunos = selectAll('leitores', []);
?>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos - Biblioteca EEEM Willy Carlos Frohlich</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/header.php") ?>
    <div class="container my-5">
        <h1 class="text-center texto-vermelho">Alunos</h1>
        <div class="text-end"><a href="/alunos/cadastro/" class="btn btn-poli">Cadastrar aluno</a></div>
        <hr>
        <table class="table-bordered table-hover table-striped table-responsive table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Turma</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Matrícula</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $aluno) {
                    extract($aluno)
                ?>
                    <tr>
                        <td><?= $nome ?></td>
                        <td><?= $turma ?></td>
                        <td><?= $telefone_contato ?></td>
                        <td><?= $email ?></td>
                        <td><?= $matricula ?></td>
                        <td><a href="/alunos/aluno/?id=<?= $id ?>" class="btn btn-poli btn-sm">Detalhes</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="/assets/js/bootstrap.bundle.js"></script>
</body>

</html>