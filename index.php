<!doctype html> 
<html lang='it'> 
    <head>
        <meta charset='utf-8'> 
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name='author' content='Diego Cavenati'>
        <title>Php Badwords</title>
        <!-- Personal CSS -->
        <link rel='stylesheet' href='./style.css'>
    </head>
    <body>

    <h1>Badwords</h1>
    <form action="results.php" method="get">
        <div class="textUser">
            <label for="textUser" class="form-label">Scrivi quello che vuoi</label>
            
            <textarea name="textUser" id="textUser" cols="30" rows="10"></textarea>
        </div>
        <div class="badWord">
            <label for="badWord" class="form-label">Scrivi la parola segreta</label>
            <input type="text" name="badWord" id="badWord">
        </div>
        <button type="submit">Invia</button>
    </div>
    </form>
    </body>
</html>