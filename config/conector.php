<?php

$pdo = new PDO('mysql:host=localhost;dbname=db_api_login', 'root', '');

$stmt = $pdo->prepare('SELECT api_id, api_email, api_senha, api_token FROM tb_api_login');
$stmt->execute();
$dados = $stmt->fetch(PDO::FETCH_ASSOC);
