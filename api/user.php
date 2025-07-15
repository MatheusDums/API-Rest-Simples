<?php
require_once '../config/index.php';
require_once '../config/resposta.php';
require_once '../config/dados.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    if($id < 0 || $id > count($data) -1 ) {
    echo Response::json(400, 'error', 'Id não encontrado');
    exit;
} else {
    echo Response::json(200, 'success', $data[$id]);
}
} else {
    $dados = file_get_contents("php://input");

    $dados_log = json_decode($dados, true);

    $new_id = $dados_log['id'];

    $newData = [
        $new_id = $dados_log['id'],
        $new_nome = $dados_log['nome'],
        $new_idade = $dados_log['idade'],
        $new_email = $dados_log['email'],
        $new_senha = $dados_log['senha']
    ];

    
    



    
}




/* --------------- */

   /*  $new_id = $dados_log['id'];

    $new_nome = $dados_log['nome'];
    $new_idade = $dados_log['idade'];
    $new_email = $dados_log['email'];
    $new_senha = $dados_log['senha'];

    if(isset($data[$new_id])) {
        $data[$new_id]['nome'] = $new_nome;
    }
 */

/* --------------- */
        
    /* foreach($data as $dataint) {
    if(in_array($new_id, $dataint)) {
        echo "Cadastro encontrado.";
        $dataint['nome'] = $new_nome;
        $dataint['idade'] = $new_idade;
        $dataint['email'] = $new_email;
        $dataint['senha'] = $new_senha;

        echo $dataint['nome'];
        break;
    } */

/*         echo Response::json(200, 'success', $dataint); */

 




?>

