<?php 

$phrase = $_GET['phrase'];
$secretWord = $_GET['secretWord'];


// $numberOfWord = [];
// $lenght = strlen($secretWord);
// foreach($numberOfWord as $lenght){
//     array_push($numberOfWord, "*");
// }
// $icon = var_dump($numberOfWord);

$censorship = str_replace("$secretWord", "***", $secretWord);

$results = "$phrase $censorship";
?>

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

    <h1><?php echo $results; ?></h1>

    </body>
</html>