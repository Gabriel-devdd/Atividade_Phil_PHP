<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de 1 a N</title>
</head>
<body style=
    "padding: 10px;
    background: linear-gradient(to right, #000000ee, #4A148C, #0070F3);">

    <h1 style="box-shadow: 0px 0px 20px whitesmoke;
    width: 400px;
    color: black;
    margin: auto;
    text-align: center;
    background-color: whitesmoke;
    border-radius: 10px;">
        Soma dos números de 1 a N</h1>

    <form action = "page_3.php" method = "POST">
        
        <label for = "numero_N">Número N</label>
        <section style="
        background-color: white;
        width: 300px; 
        height: 400px;
        margin:auto;
        align-items: center;
        justify-content: center;
        display: flex;
        gap: 5px;"> 
            <input type = "number" name = "numero_N" id = "numero_N" placeholder = "Digite um número N" style="padding: 10px;padding-bottom: 10px;">
            <br><br>
            <button type="submit">Enviar</button>
        </section>

        

    </form>


</body>
</html>

<?php 
    
    $N = 0;
    $soma = 0;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $N = $_POST['numero_N'];

    for($i = 1;$i <= $N;$i++){
        $soma += $i;
    }
    echo "<br>{$soma}";
    }

?>



    