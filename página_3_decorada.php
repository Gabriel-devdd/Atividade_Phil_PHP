<?php 
    
    $N = 0;
    $soma = 0;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $N = $_POST['numero_N'];

    for($i = 1;$i <= $N;$i++){
        $soma += $i;
    }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de 1 a N</title>
</head>

<body style=
    "padding: 20px;
    background: linear-gradient(to right, #000000ee, #4A148C, #0070F3);
">

    <h1 style="
    box-shadow: 0px 0px 20px whitesmoke;
    width: 400px;
    color: black;
    margin: auto;
    text-align: center;
    background-color: whitesmoke;
    border-radius: 10px;">
        Soma dos números de 1 a N
    </h1>

    <br><br><br><br><br><br>

    <form action="page_3.php" method="POST">

        <section style="
        background-color: white;
        border-radius: 20px;
        width: 300px; 
        height: 400px;
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;">

            <label for="numero_N">
                Digite um número N qualquer
            </label>
            <br>

            <input 
                type="number" 
                name="numero_N" 
                id="numero_N" 
                placeholder="Digite um número N"
                style="padding: 10px;">

            <br><br>

            <button type="submit" style="background-color: #4A148C; 
                color: white;
                border-color: #7328ce;
                width: 70px;
                height: 30px;">
                Enviar
            </button>
            <br>

            <h2>Resultado</h2>

            <p style="text-align: center">
                A soma dos números de 1 até <?php echo $N; ?> é:
                <br>
                <strong><?php echo $soma; ?></strong>
            </p>

        </section>

    </form>

</body>
</html>
