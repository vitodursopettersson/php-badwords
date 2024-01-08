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
        <form action="result.php" method="get">
            <label for="text-to-edit">Inserisci il testo</label>
            <textarea name="text_edit" id="text-to-edit" cols="30" rows="10"></textarea>
            <label for="word-to-censure">Parola da censurare</label>
            <input type="text" id="word-to-censure" name="word_censure">
            <button>Invia</button>
        </form>
    </div>
</body>
</html>