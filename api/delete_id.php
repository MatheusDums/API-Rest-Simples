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

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    if($id < 0 || $id > count($data) -1 ) {
    echo Response::json(400, 'error', 'Id não encontrado');
    exit;
} else {
    $id_remover = $id;
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
}
}
    }}

?>