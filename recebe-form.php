<?php 

    $mensagem = "";
    $mensagemPost = "";
    $msgTabuada = "";
    $msgRespTabuada = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];    
    $semestre_atual = $_POST['semestreAt'];
    $semestre_curso = $_POST['semestreCur'];
    $numero = $_POST['numeroDig'];
    $semestres_faltando =   $semestre_curso - $semestre_atual;
    $mensagem = "<p> $nome esta no $semestre_atual semestre e faltam $semestres_faltando semestres para conclusão.</p>";

    if (isset($numero) && !empty($_POST['nome'])) {
    for($i = 1; $i <=10; $i++){
        $msgTabuada = "<p> TABUADA</p>";
        $msgRespTabuada = "<p> $numero x $i = " . ($numero * $i) . "</p>";
    }
}else {
    $mensagem = "<p style='color: red;'> NÃO FOI INFORMADO NUMERO ALGUM!!!</p>";
}
} else {
   $mensagemPost = "<p style='color: red;'>Não veio nada por POST!</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
     <style>
        body{
            display: flex;
            justify-content: center; 
            align-items: center;  
            height: 80vh;   
        }
     </style>
</head>
<body>
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <div class="card" style="width: 18rem; text-align: center;">
         <img src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2022/08/fatec-identidade.jpg" class="card-img-top" alt="...">
            <div class="card-body" >
                <h5 class="card-title">Ficha de semestre</h5>
                <p class="card-text">Dados dos alunos</p>
            </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nome: <?= $nome ?></li>
                        <li class="list-group-item">Semestre atual = <?= $semestre_atual ?></li>
                        <li class="list-group-item">Semestres restantes =  <?= $semestres_faltando ?></li>
                    </ul>
                <div class="card-body">
                    <a href="https://vestibular.fatec.sp.gov.br/home/" class="card-link">Card link</a>
                 </div>
        </div>
    <?php else: ?>
        <p style="color: red;">Nenhum dado recebido ainda.</p>
    <?php endif;?>

   <?php if (isset($numero) && !empty($_POST['numeroDig'])): ?>
    <table class="table text-center" style="width: 18vh; margin-left: 50px;">
     <thead>
            <tr>
                <th scope="col">Numero</th>
                <th scope="col">x</th>
                <th scope="col">numero</th>
                <th scope="col">=</th>
                <th scope="col">Resultado</th>
            </tr>
        </thead>
       <tbody>
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td>x</td>
                    <td><?= $numero ?></td>
                    <td>=</td>
                    <td><?= $numero * $i ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
    <?php endif; ?>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

