<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de 1 a N</title>
</head>
<body>
    <h1>Tabuada</h1>

    <form action = "page_5.php" method = "POST">
        
        <label for = "numero_N">Número</label> 
        <input type = "number" name = "numero_N" id = "numero_N" placeholder = "Digite um número N" >

        <button type="submit">Enviar</button>
    </form>


</body>
</html>

<?php

    $N = 0;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $N = $_POST['numero_N'];

        for($i = 1;$i <=10;$i++){
            $resultado = $i * $N;
            echo "<br> {$i} X {$N} = {$resultado}";
        }
    }

