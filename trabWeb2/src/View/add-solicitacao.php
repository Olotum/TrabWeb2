<?php require_once dirname(__DIR__) . "/Controller/Auth_Verify.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP HelpDesk - Novo chamado</title>
  <link href="style.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="meu_bg2 m-5">
  <nav class="meu_bg p-3 d-flex justify-content-between">
    <div>
        <a href="add-colab.php" class=" text-white">Novo Colaborador</a>
        <a href="add-colab.php" class=" text-white">Nova Solicitação</a>
        <a href="../Controller/Auth.php?operation=logout" class=" text-white">Lista de Colaboradores</a>
    </div>
    <a href="../Controller/Auth.php?operation=logout" class=" text-white">Sair</a>
  </nav>
  <main class="meu_card d-flex align-items-center mt-5">
    <form action="../Controller/Solicitacao.php?operation=insert" method="post" class="w-75 p-3">
      <label class="text-white" for="solicitador" class="d-block">Seu ID</label>
      <input name="solicitador" id="solicitador" class="form-control" required></input>
      <label class="text-white" for="colaborador" class="d-block">ID do colaborador</label>
      <input name="colaborador" id="colaborador" class="form-control" required></input>
      <label class="text-white" for="nivel" class="d-block">Urgência</label>
      <select name="nivel" id="nivel" class="form-select">
        <option value="low">Baixo</option>
        <option value="medium">Médio</option>
        <option value="high">Alto</option>
      </select>
      <label class="text-white" for="description">Descrição da ocorrência</label>
      <textarea name="description" id="description" cols="30" rows="5" class="form-control" required></textarea>
      <label class="text-white" for="notes">Notas e observações</label>
      <textarea name="notes" id="notes" cols="30" rows="5" class="form-control"></textarea>
      <button class="btn btn-light mt-3">Registrar</button>
    </form>
  </main>
</body>

</html>