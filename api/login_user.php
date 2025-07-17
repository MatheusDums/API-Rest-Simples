<?php

require_once '../config/index.php';
require_once '../config/resposta.php';

$credenciais = array (
    'username' => 'dumss@icloud.com',
    'password' => 'dums1234',
);

$headers = getallheaders();
$authorizationHeader = $headers['Authorization'] ?? null;

if(!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic realm="API"');
}

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];
$token = substr($authorizationHeader, 6);

$dados = [
    'Usuario' => $user,
    'Senha' => $pass,
    'Token' => $token
];

if(($user === $credenciais['username']) and ($pass === $credenciais['password'])) {
        echo Response::json(200, 'Autorizado', $dados );
} else {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo Response::json(401, 'Não Autorizado', "");
    die();
}




?>