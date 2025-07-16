<?php
require_once '../config/index.php';
require_once '../config/resposta.php';
require_once '../config/dados.php';

$dados = file_get_contents("php://input");
$dados_log = json_decode($dados, true);

$id_remover = $dados_log['id'];

echo "Id do cadastro a ser deletado: " . $id_remover;


?>