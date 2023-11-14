<?php require_once dirname(__DIR__) . "/Controller/Auth_Verify.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Help Desk - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="m-5">
    <nav class="bg-primary p-3 d-flex justify-content-between">
        <div>
            <a href="add-colab.php" class="text-decoration-none text-white">Novo Colaborador</a>
            <a href="add-colab.php" class="text-decoration-none text-white">Nova Solicitação</a>
            <a href="list-calls.html" class="text-decoration-none text-white">Lista de Colaboradores</a>
        </div>
        <a href="../Controller/Auth.php?operation=logout" class="text-decoration-none text-white">Sair</a>
    </nav>
    <main class="text-center">
        <h1>Bem-vindo ao nosso sistema <?= $_SESSION["user_data"]["name"] ?></h1>
        <img src="https://blog.milvus.com.br/wp-content/uploads/atendimento-a-cliente-como-tornar-o-help-desk-mais-eficiente.jpg" alt="Call Center" width=500>
    </main>
</body>

</html>