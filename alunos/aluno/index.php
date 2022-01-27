<!DOCTYPE html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/assets/banco de dados/conectar.php');
$aluno = selectOne('leitores', $_GET);
extract($aluno);
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
        <h1 class="text-center texto-vermelho"><?= $nome ?></h1>
        <hr>
        <div class="row row-cols-1 row-cols-md-3 g-3" id="detalhesAlunos">
            <div class="col">
                <div class="border">
                    <h5>Nome</h5>
                    <p><?= $nome ?></p>
                </div>
            </div>



            <div class="col">
                <div class="border">
                    <h5>Data Nascimento</h5>
                    <p><?= $data_nascimento ?></p>
                </div>
            </div>
            
                <div class="col">
                    <div class="border">
                        <h5>Data de cadastro</h5>
                        <p><?= $data_cadastro ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Filiação 1</h5>
                        <p><?= $filiacao1 ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Filiação 2</h5>
                        <p><?= $filiacao2 ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Sexo</h5>
                        <p><?= $sexo ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Turma </h5>
                        <p><?= $turma ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Naturalidade</h5>
                        <p><?= $naturalidade ?></p>
                    </div>
                </div>


                <div class="col">
                    <div class="border">
                        <h5>RG</h5>
                        <p><?= $identidade ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>CPF</h5>
                        <p><?= $CPF ?></p>
                    </div>
                </div>

                
                <div class="col">
                    <div class="border">
                        <h5>Telefone para contato 1</h5>
                        <p><?= $telefone1 ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Nome do contato</h5>
                        <p><?= $nome_contato ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Telefone para contato 2</h5>
                        <p><?= $telefone2 ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Nome do contato</h5>
                        <p><?= $nome_contato ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Endereço</h5>
                        <p><?= $endereco ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Cidade</h5>
                        <p><?= $cidade ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Estado</h5>
                        <p><?= $estado ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>CEP</h5>
                        <p><?= $cep ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Email</h5>
                        <p><?= $email ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Ponto de referência</h5>
                        <p><?= $ponto_referencia ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Observações</h5>
                        <p><?= $obervacoes ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Matrícula</h5>
                        <p><?= $matricula ?></p>
                    </div>
                </div>

                <div class="col">
                    <div class="border">
                        <h5>Horário de retirada</h5>
                        <p><?= $horario ?></p>
                    </div>
                </div>

















            </div>
        </div>
        <script src="/assets/js/bootstrap.bundle.js"></script>
</body>

</html>