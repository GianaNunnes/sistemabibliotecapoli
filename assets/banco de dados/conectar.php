<?php
$host = "localhost";
$user = 'root';
$pass = "";
$bd = "biblioteca";

$mysqli = new MySQLi($host, $user, $pass, $bd);
if ($mysqli->connect_error) {
    exit("erro ao conectar ao banco de dados: " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");

function executeQuery($sql, $dados)
{
    global $mysqli;
    $stmt = $mysqli->prepare($sql);
    $valores = array_values($dados);
    $tipos = str_repeat("s", count($valores));
    $stmt->bind_param($tipos, ...$valores);
    $stmt->execute();
    return $stmt;
}

function criar($tabela, $dados)
{
    $sql = "INSERT INTO $tabela SET ";
    $i = 0;
    foreach ($dados as $key => $value) {
        if ($i == 0) {
            $sql .= " $key=?";
        } else {
            $sql .= ", $key=?";
        }
        $i++;
    }

    $stmt = executeQuery($sql, $dados);
    return $stmt->insert_id;
}

function atualizar($tabela, $id, $dados)
{
    $sql = "UPDATE $tabela SET ";
    $i = 0;
    foreach ($dados as $key => $value) {
        if ($i == 0) {
            $sql .= " $key=?";
        } else {
            $sql .= ", $key=?";
        }
        $i++;
    }
    $sql .= " WHERE id=?";
    $dados["id"] = $id;
    $stmt = executeQuery($sql, $dados);
    return $stmt->affected_rows;
}

function selectOne($tabela, $condicao)
{
    $sql = "SELECT * FROM $tabela";
    $i = 0;
    foreach ($condicao as $key => $value) {
        if ($i == 0) {
            $sql .= " WHERE $key=?";
        } else {
            $sql .= " AND $key=?";
        }
        $i++;
    }
    $sql .= " LIMIT 1";

    $stmt = executeQuery($sql, $condicao);
    $resultado = $stmt->get_result()->fetch_assoc();
    return $resultado;
}

function selectAll($tabela, $condicao = [])
{
    global $mysqli;
    $sql = "SELECT * FROM $tabela";
    if (empty($condicao)) {
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $resultado;
    } else {
        $i = 0;
        foreach ($condicao as $key => $value) {
            if ($i == 0) {
                $sql .= " WHERE $key=?";
            } else {
                $sql .= " AND $key=?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $condicao);
        $resultado = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $resultado;
    }
}
