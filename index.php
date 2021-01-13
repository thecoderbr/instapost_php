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
                <form action="salvar_ponto.php" method="post">
                    <div class="row mb-3">
                        <label for="dtPonto" class="col-3 col-form-label">Data do Ponto</label>
                        <div class="col-9">
                        <input type="text" readonly class="form-control" name="dtPonto" id="dtPonto">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="horario" class="col-3 col-form-label">Horário</label>
                        <div class="col-9">
                        <input type="text" class="form-control" id="horario" name="horario" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="matricula" class="col-3 col-form-label">Matrícula</label>
                        <div class="col-9">
                        <input type="text" class="form-control" id="matricula" name="matricula" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label col-3">Tipo de Marcação</label>
                        <div class="col-9">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipoMarcacao" id="tipoEntrada" value="ENTRADA" checked>
                            <label class="form-check-label" for="tipoEntrada">
                            Entrada
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="tipoMarcacao" id="tipoSaida" value="SAIDA">
                            <label class="form-check-label" for="tipoSaida">
                            Saída
                            </label>
                        </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Marcar</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        ( () => {
            let hoje = new Date()
            document.querySelector("#dtPonto").value = hoje.toLocaleDateString('pt-BR')
            document.querySelector("#horario").value = hoje.toLocaleTimeString("pt-BR", {timeStyle: 'short'})
        })()
    </script>
</body>
</html>