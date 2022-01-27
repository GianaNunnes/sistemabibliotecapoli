<!DOCTYPE html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/assets/banco de dados/conectar.php');
?>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar aluno - Biblioteca EEEM Willy Carlos Frohlich</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/header.php"); ?>
    <div class="container my-5">
        <?php
        $att = false;
        if(isset($_GET['id'])){
            $att = true;
        }
        ?>
        <h1 class="text-center texto-vermelho"><?= ($att) ? "Atualizar" : "Cadastrar" ?> Aluno</h1>
        <hr>
        <?php
        if (isset($_POST) && $_POST) {
            $id = criar("leitores", $_POST);
            echo ("<h6 class='text-success'> Aluno " . $id . " cadastrado</h6>");
        }
        
        ?>
        <form action="" method="post" class="row row-cols-1 row-cols-md-2 gy-3">
            <div class="col">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="data_nascimento" class="form-label">Data de nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="data_cadastro" class="form-label">Data de cadastro</label>
                <input type="date" class="form-control" id="data_cadastro" name="data_cadastro" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="filiacao1" class="form-label">Filiação 1</label>
                <input type="text" class="form-control" id="filiacao1" name="filiacao1" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="filiacao2" class="form-label">Filiação 2</label>
                <input type="text" class="form-control" id="filiacao2" name="filiacao2" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="sexo" class="form-label">Sexo</label>
                <select class="form-select" id="sexo" name="sexo" value="<?= ($att ? "" : "") ?>">
                    <option selected>Sexo</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outro</option>
                </select>
            </div>
            <div class="col">
                <label for="turma" class="form-label">Turma</label>
                <input type="text" class="form-control" id="turma" name="turma" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="naturalidade" class="form-label">Naturalidade</label>
                <input type="text" class="form-control" id="naturalidade" name="naturalidade" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="identidade" class="form-label">Identidade</label>
                <input type="text" class="form-control" id="identidade" name="identidade" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="CPF" class="form-label">CPF</label>
                <input type="text" class="form-control" id="CPF" name="CPF" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="telefone1" class="form-label">Telefone 1</label>
                <input type="text" class="form-control" id="telefone1" name="telefone1" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="telefone2" class="form-label">Telefone 2</label>
                <input type="text" class="form-control" id="telefone2" name="telefone2" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="telefone_contato" class="form-label">Nome do contato</label>
                <input type="text" class="form-control" id="nome_contato" name="nome_contato" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="nome_contato" class="form-label">Nome do Contato</label>
                <input type="text" class="form-control" id="nome_contato" name="nome_contato" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="estado" class="form-label">Estado</label>
                <select class="form-select" name="estado" id="estado" title="Estado*" value="<?= ($att ? "" : "") ?>">
                    <option selected>Estado</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select>
            </div>
            <div class="col">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="ponto_referencia" class="form-label">Ponto de referência</label>
                <input type="text" class="form-control" id="ponto_referencia" name="ponto_referencia" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="obervacoes" class="form-label">Observações</label>
                <textarea rows="3" class="form-control" id="obervacoes" name="obervacoes"></textarea >
            </div>
            <div class="col">
                <label for="matricula" class="form-label">Matricula</label>
                <input type="text" class="form-control" id="matricula" name="matricula" value="<?= ($att ? "" : "") ?>">
            </div>
            <div class="col">
                <label for="horario" class="form-label">Data de retirada</label>
                <input type="datetime-local" class="form-control" id="horario" name="data" value="<?= ($att ? "" : "") ?>">
            </div>
            <button class="btn btn-poli float-end mt-3" type="submit">Salvar</button>
        </form>
    </div>
    <script src="/assets/js/bootstrap.bundle.js"></script>
</body>

</html>

<!-- 
nome
data_nascimento
data_cadastro
filiacao1
filiacao2
sexo
turma
naturalidade
identidade
CPF
telefone1
telefone2
telefone_contato
nome_contato
endereco
cidade
estado
cep
email
ponto_referencia
obervacoes
matricula
horario 
-->