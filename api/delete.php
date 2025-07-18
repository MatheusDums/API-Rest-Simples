<?php
require_once '../config/index.php';
require_once '../config/resposta.php';
require_once '../config/dados.php';
require_once '../config/conector.php';

$headers = getallheaders();
$authorizationHeader = $headers['Authorization'] ?? null;
$token = $authorizationHeader;

if(!isset($token)){
    header('WWW-Authenticate: Basic realm="API"');
} else {
    if($token !== $dados['api_token']) {
        header('WWW-Authenticate: Basic realm="API"');
        echo Response::json(401, 'Não Autorizado', "");
    } else {

$dados = file_get_contents("php://input");
$dados_log = json_decode($dados, true);

$id_remover = $dados_log['id'];
$indice_remover = null;

foreach($data as $indice => $elemento) {
    if (isset($elemento['id']) && $elemento['id'] == $id_remover ) {
        $indice_remover = $indice;
        break;
    }
}

if($indice_remover !== null) {
    unset($data[$indice_remover]);
}

    file_put_contents('../config/dados.php', '<?php $data = ' .  var_export($data, true) . ';');
        
    echo "Elemento Id $id_remover removido com sucesso!";

    }}
?>