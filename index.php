<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário com POST</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="container">
    <h1>Formulário com POST</h1>

    <form method="POST" action="recebe-form.php">

        <div class="mb-3">
            <label for="nome" class="form-label" require>Digite seu nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>

        <div class="mb-3">
            <label for="semestreAt" class="form-label">Informe seu semestre atual: </label>
             <select id="semestreAt" name="semestreAt" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7 </option>
                <option value="8">8 </option>
            </select>
        </div>
        <div class="mb-3">
            <label for="ano_nascimento" class="form-label">Informe quantos semestres tem seu curso:</label>
            <select id="semestreCur" name="semestreCur" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7 </option>
                <option value="8">8 </option>
            </select>
        </div>

        <div class="mb-3">
            <label for="ano_nascimento" class="form-label">Informe um numero de 01 a 10:</label>
            <select id="numeroDig" name="numeroDig" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7 </option>
                <option value="8">8 </option>
                <option value="9">9 </option>
                <option value="10">10 </option>
            </select>
        </div>
        
        


        <a href="index.php" class="btn btn-info">VOLTAR</a>

        <button type="reset" class="btn btn-warning">LIMPAR</button>

        <button type="submit" class="btn btn-success">ENVIAR PARA O PHP</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>