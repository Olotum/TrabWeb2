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

<body class="m-5 meu_bg2">
  <nav class="meu_bg d-flex justify-content-between p-3">
      <div>
        <a href="add-colab.php" class="text-decoration-none text-white">Novo Colaborador</a>
        <a href="add-solicitacao.php" class="text-decoration-none text-white">Nova Solicitação</a>
        <a href="list-calls.html" class="text-decoration-none text-white">Lista de Colaboradores</a>
      </div>
    <a href="../Controller/Auth.php?operation=logout" class="text-white text-decoration-none">Sair</a>
  </nav>
  <main class="meu_card d-flex align-items-center mt-5">
    <form action="#" method="post" class="w-75 p-3">
      <label class="text-white" for="user_name">Nome do colaborador</label>
      <input type="text" id="user_name" name="user_name" class="form-control" required />
      <label class="text-white" for="user_cpf">CPF do colaborador</label>
      <input type="text" id="user_cpf" name="user_cpf" class="form-control" required />
      <label class="text-white" for="pc_number">Cargo do colaborador</label>
      <input type="text" id="cargo_colab" name="cargo_colab" class="form-control" required />
      <label class="text-white" for="setor" class="d-block">Setor</label>
      <select name="setor" id="setor" class="form-select">
        <option value="comercial">Comercial</option>
        <option value="limpeza">Limpeza</option>
        <option value="ti">TI</option>
      </select>
      <label class="text-white" for="nivel" class="d-block">Classificação</label>
      <select name="nivel" id="nivel" class="form-select">
        <option value="low">Baixo</option>
        <option value="medium">Médio</option>
        <option value="high">Alto</option>
      </select>
      <button class="btn btn-light mt-3">Registrar</button>
    </form>
  </main>
</body>

</html>