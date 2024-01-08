<?php 
    $text_to_edit = $_GET["text_edit"];
    $word_to_censure = $_GET["word_censure"];
    $text_censured = str_replace($word_to_censure, "***", $text_to_edit)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- Link Css -->
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div>
        <h1>Il tuo paragrafo:</h1>
        <p>
            <?php 
            echo $text_to_edit;
            ?>
         </p>
         <h6>Lunghezza paragrafo: <?php echo strlen($text_to_edit); ?> caratteri</h6>
        <h6>Parola da censurare: <?php echo $word_to_censure; ?></h6>

    </div>
    <div>
        <h1>Il risultato è:</h1>
        <p>
            <?php 
            echo $text_censured;
            ?>
         </p>
         <h6>Lunghezza paragrafo censurato: <?php echo strlen($text_censured); ?> caratteri</h6>
    </div>
</body>
</html>