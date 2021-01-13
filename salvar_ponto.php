<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Ponto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
<?php

$dtPonto = $_POST["dtPonto"] ?? date('d/m/Y');
$hrPonto = $_POST["horario"] ?? date('H:m');
$matricula = $_POST["matricula"] ?? "";
$tipoMarcacao = $_POST["tipoMarcacao"];

try{
    $conn = new mysqli("localhost", "root", "", "thecoder");
    if ($conn->connect_errno) {
        printf("Não pode conectar no banco de dados");
        exit();
    }

    $dtPonto = $conn->real_escape_string($dtPonto);
    $hrPonto = $conn->real_escape_string($hrPonto);
    $matricula = $conn->real_escape_string($matricula);
    $tipoMarcacao = $conn->real_escape_string($tipoMarcacao);

    $sql = "INSERT INTO ponto(dtponto,hrponto,matricula,tipo) 
        VALUES('$dtPonto','$hrPonto','$matricula','$tipoMarcacao')";

    if(!$conn->query($sql)){
        printf("O ponto não pode ser registrado, por favor tente novamente!");
        exit();
    }

    printf("Ponto registrado com sucesso!");
    $conn->close();
}catch(\Exception $e){
    printf("Ocorreu algum erro no sistema, aguarde alguns minutos e tente novamente");
}
?>
            <a href="index.php" class="btn btn-warning">Voltar</a>
        </div>
    </div>
</div>
</body>
</html>