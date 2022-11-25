<!doctype html> 
<html lang='it'> 
    <head>
        <meta charset='utf-8'> 
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name='author' content='Diego Cavenati'>
        <title>Php Badwords</title>
         <!-- Font awesome -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'>
        <!-- Personal CSS -->
        <link rel='stylesheet' href='./assets/css/style.css'>
    </head>
    <body>

    <h1>Badwords</h1>
    <form action="results.php" method="get">
        <div class="phrase">
            <label for="phrase" class="form-label">Scrivi quello che vuoi</label>
            <input type="text" name="phrase" id="phrase">
        </div>
        <div class="secretWord">
            <label for="secretWord" class="form-label">Scrivi la parola segreta</label>
            <input type="text" name="secretWord" id="secretWord">
        </div>
        <button type="submit">Invia</button>
    </div>
    </form>
    </body>
</html>