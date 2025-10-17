<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Cadastro Confirmado</title>
</head>
<body style="margin: 0; height: 100vh; display: flex; justify-content: center; align-items: center;">

<div class="w3-container w3-teal w3-padding-16" style="max-width: 500px; margin: auto; border-radius: 5px;">
    <h3>Cadastro Confirmado com Sucesso</h3>

    <?php
    $nome = $_POST['txtNome'];
    $sobrenome = $_POST['txtSobrenome'];
    $email = $_POST['txtEmail'];
    $formacao = $_POST['txtFormacao'];
    $emprego = $_POST['txtEmprego'];

    echo "<p><b>Nome:</b> $nome</p>";
    echo "<p><b>Sobrenome:</b> $sobrenome</p>";
    echo "<p><b>Email:</b> $email</p>";
    echo "<p><b>Formação:</b> $formacao</p>";
    echo "<p><b>Descrição Último Emprego:</b> $emprego</p>";
    ?>
</div>

</body>
</html>
