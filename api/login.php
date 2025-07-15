<?php
require_once '../config/index.php';
require_once '../config/resposta.php';
require_once '../config/dados.php';

$dados = file_get_contents("php://input");

if($dados) {
$dados_log = json_decode($dados, true);

$email = $dados_log['email'];
$senha = $dados_log['senha'];


$encontrado = false;

foreach($data as $dataint) {
    if(in_array($email, $dataint) and in_array($senha, $dataint) ) {
        echo Response::json(200, 'success', $dataint);
        $encontrado = true;
        break;
    }
}

if($encontrado === false) {
    echo Response::json(400, 'error', 'Credenciais Incorretas');
}


}

/* if(($email === $data[1]['email']) and ($senha === $data[1]['senha']) ) {
    echo Response::json(200, 'success', $data[1]);
} else {
    echo Response::json(400, 'error', 'Credenciais Incorretas');
}; */

/* echo count($data); */

/* for($i = 0; $i < count($data); $i++) {
    if($data){
        if($email === $data[$i]['email'] and $senha === $data[$i]['senha']){
                echo Response::json(200, 'success', $data[$i]);
            } else {

            }
        }
    }
 */  

/* $data = json_decode($jsonData, true);
if($data) {
    $email = $data['email'];
    echo "O email digitado foi " . $email;
} else {
    echo "erro";
} */

/* if(($email === $data[1]['email']) and ($senha === $data[1]['senha']) ) {
    echo Response::json(200, 'success', $data[1]);
} else {
    echo Response::json(400, 'error', 'Credenciais Incorretas');
};
 */

?>