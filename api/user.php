<?php
require_once '../config/index.php';
require_once '../config/resposta.php';
$data = require_once '../config/dados.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    if($id < 0 || $id > count($data) -1 ) {
    echo Response::json(400, 'error', 'Id não encontrado');
    exit;
} else {
    echo Response::json(200, 'success', $data[$id]);
}
} else {
    echo 'Teste';
    exit;
}




?>

