<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Help Desk - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

</head>

<body class="custom-bg m-5 ">
    <nav class="card">
        <nav class="text-center text-light">
            <?php session_start(); ?>
            <h1>Bem-vindo ao nosso sistema <?= $_SESSION["name"] ?></h1>
            <img src="logo.jpeg" alt="Call Center" width=500>
        </nav>
        <main class="text-light text-center p-3">
            <a href="add-new-call.php" class="btn btn-outline-light">Gerenciar Equipe</a>
        </main>
    </nav>
</body>

</html>