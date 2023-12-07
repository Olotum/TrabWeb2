<?php require_once dirname(__DIR__) . "/Controller/Auth_Verify.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Help Desk - Lista de Solicitações</title>
    <link href="style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="meu_bg2 m-5">
    <nav class="meu_bg p-3 d-flex justify-content-between">
        <div>
            <a href="add-colab.php" class=" text-white">Novo Colaborador</a>
            <a href="add-colab.php" class=" text-white">Nova Solicitação</a>
            <a href="#" class=" text-white">Lista de Colaboradores</a>
        </div>
        <a href="../Controller/Auth.php?operation=logout" class=" text-white">Sair</a>
    </nav>
    <main class="text-white text-center">
        <table class="table table-bordered table-primary">
            <thead>
                <th>#</th>
                <th>Nome do solicitador</th>
                <th>Nome do responsavel</th>
                <th>Classificação</th>
                <th>Descrição</th>
                <th>Observações</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php
                if (empty($_SESSION["list-of-solicitacoes"])) :
                ?>
                    <td colspan=6>Não existem chamados cadastrados</td>
                <?php
                endif;
                foreach ($_SESSION["list-of-solicitacoes"] as $solicitacao) :
                ?>
                    <tr>
                        <td>
                            <?= $solicitacao["id"] ?>
                        </td>
                        <td>
                            <?= $solicitacao["solicitador"] ?>
                        </td>
                        <td>
                            <?= $solicitacao["colab"] ?>
                        </td>
                        <td>
                            <?= $solicitacao["classification"] ?>
                        </td>
                        <td>
                            <?= $solicitacao["description"] ?>
                        </td>
                        <td>
                            <?= ($solicitacao["notes"]) ? $solicitacao["notes"] : "Nenhuma observação" ?>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="../Controller/solicitacao.php?operation=findOne&code=<?= $solicitacao["id"] ?>" class="btn btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="../Controller/solicitacao.php?operation=delete&code=<?= $solicitacao["id"] ?>" class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>