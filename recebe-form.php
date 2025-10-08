<pre>
<?php
// Olhe o resultado na página e descreva aqui o que aconteceu...
print_r($_POST);
// exit();
?>
</pre>

<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<h1>Campos enviados por POST:</h1>";
    $nome = $_POST['nome'];
    echo "Nome: $nome <br>";
    // Podemos colocar o valor que veio por POST em outra variavel
    
    $semestre_atual = $_POST['semestreAt'];
    $semestre_curso = $_POST['semestreCur'];
    $numero = $_POST['numeroDig'];
    
    $semestres_faltando =   $semestre_curso - $semestre_atual;
    
    echo "<p> $nome esta no $semestre_atual semestre e faltam $semestres_faltando semestres para conclusão.</p>";

    if (isset($numero)) {
    for($i = 1; $i <=10; $i++){
        echo "<p> TABUADA</p>";
        echo "<p> $numero x $i = " . ($numero * $i) . "</p>";
    }
}else {
    echo "<p style='color: red;'> NÃO FOI INFORMADO NUMERO ALGUM!!!</p>";
}
} else {
    echo "<p style='color: red;'>Não veio nada por POST!</p>";
}



?>

<pre>
<?php
// Olhe o resultado na página e descreva aqui o que aconteceu...
print_r($_SERVER);
?>
</pre>