<?php require_once dirname(__DIR__) . "/Controller/Auth_Verify.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Help Desk - Dashboard</title>
    <link href="style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="meu_bg2 m-5">
    <nav class="meu_bg p-3 d-flex justify-content-between">
        <div>
            <a href="add-colab.php" class=" text-white">Novo Colaborador</a>
            <a href="add-solicitacao.php" class=" text-white">Nova Solicitação</a>
            <a href="../Controller/Solicitacao.php?operation=findAll" class=" text-white">Lista de Solicitações</a>
        </div>
        <a href="../Controller/Auth.php?operation=logout" class=" text-white">Sair</a>
    </nav>
    <main class="text-white text-center">
        <h1>Bem-vindo ao nosso sistema <?= $_SESSION["user_data"]["name"] ?></h1>
        <img src="logo.jpeg" alt="Logo da empresa">
    </main>
</body>

</html>