Criar uma API REST em PHP com testes no Postman

Detalhes da pendência:
Criar uma API simples em PHP para simular um sistema de login e atualização de dados de usuário.
Você deverá utilizar o Postman para testar os seguintes métodos HTTP:

Criar uma API com as seguintes rotas:

POST /login.php
Recebe email e senha e valida com um banco simulado (array). Se estiver correto, retorna os dados do usuário.


GET /user.php?id=1
Retorna os dados do usuário com o ID informado. 
OK


PUT /user.php
Atualiza os dados do usuário com base no ID e nos campos enviados no corpo da requisição.