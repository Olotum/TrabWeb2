<?php require_once dirname(__DIR__) . "/Controller/Auth_Verify.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP HelpDesk - Novo chamado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="m-5">
  <nav class="bg-primary d-flex justify-content-between p-3">
    <div>
      <a href="add-colab.php" class="text-decoration-none text-white">Novo Colaborador</a>
      <a href="add-solicitacao.php" class="text-decoration-none text-white">Nova Solicitação</a>
      <a href="list-calls.html" class="text-decoration-none text-white">Lista de Colaboradores</a>
    </div>
    <a href="../Controller/Auth.php?operation=logout" class="text-white text-decoration-none">Sair</a>
  </nav>
  <main class="bg-primary card d-flex align-items-center mt-5">
    <form action="#" method="post" class="w-75 p-3">
      <label for="colaborador" class="d-block">Colaborador</label>
      <select name="colaborador" id="colaborador" class="form-select">
        <option value="user1">Alan</option>
        <option value="user2">Robert</option>
        <option value="user3">Lucia</option>
      </select>
      <label for="nivel" class="d-block">Urgência</label>
      <select name="nivel" id="nivel" class="form-select">
        <option value="low">Baixo</option>
        <option value="medium">Médio</option>
        <option value="high">Alto</option>
      </select>
      <label for="description">Descrição da ocorrência</label>
      <textarea name="description" id="description" cols="30" rows="5" class="form-control" required></textarea>
      <label for="notes">Notas e observações</label>
      <textarea name="notes" id="notes" cols="30" rows="5" class="form-control"></textarea>
      <button class="btn btn-light mt-3">Registrar</button>
    </form>
  </main>
</body>

</html>