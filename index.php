<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- start php -->
    <?php
    $word = "Nel pozzo di San Patrizio c’è una pazza che lava una pezza. Arriva un pazzo, con un pezzo di pizza e chiede alla pazza se ne vuole un pezzo. La pazza rifiuta. Allora il pazzo prende la pazza, la pezza e la pizza e li butta nel pozzo di San Patrizio, protettore dei pazzi.";
    $word_length = strlen($word);
    $badword = $_GET["name"];
    $modified_word = str_replace($badword, "***", $word);
    $modified_length = strlen($modified_word);
    ?>
    <!-- finish php -->

    <!-- stampo in pagina -->
    <h2>Questa è la frase:</h2>
    <p>
        <?php echo $word; ?>
    </p>

    <h2>Questa è la lunghezza della frase:</h2>
    <p>
       La frase contiene <?php echo $word_length; ?> caratteri
    </p>

    <h2>Questa è la badword:</h2>
    <p>
        <?php echo $badword; ?>
    </p>

    <h2>Questa è la frase modificata:</h2>
    <p>
        <?php echo $modified_word; ?>
    </p>

    <h2>Questa è la lunghezza della frase modificata:</h2>
    <p>
        La frase modificata contiene <?php echo $modified_length; ?> caratteri
    </p>
</body>
</html>