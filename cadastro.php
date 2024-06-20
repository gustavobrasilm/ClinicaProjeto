<?php
include 'Consultorio.php';

$resultado = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $anoNasc = $_POST['anoNasc'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $paciente = new Consultorio();
    $paciente->setNome($nome);
    $paciente->setAnoNasc($anoNasc);
    $paciente->setPeso($peso);
    $paciente->setAltura($altura);

    ob_start();
    $paciente->imprimirResultado();
    $resultado = ob_get_clean();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC de Paciente</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <h1>Ficha de Paciente</h1>
    <form action="cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="anoNasc">Ano de Nascimento:</label>
        <input type="number" id="anoNasc" name="anoNasc" required><br><br>

        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.01" required><br><br>

        <label for="altura">Altura (m):</label>
        <input type="number" id="altura" name="altura" step="0.01" required><br><br>

        <input type="submit" value="Imprimir">
        <input type="button" value="Voltar ao Início" onclick="window.location.href='index.php'">
    </form>
    <div class="resultado">
        <?php
        if ($resultado) {
            echo $resultado;
        }
        ?>
    </div>
</body>
</html>
