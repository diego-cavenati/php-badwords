<?php 

$textUser = strtolower(trim($_GET['textUser']));
$badWord = strtolower($_GET['badWord']);

// $numberOfWord = [];
// $lenght = strlen($secretWord);
// foreach($numberOfWord as $lenght){
//     array_push($numberOfWord, "*");
// }
// $icon = var_dump($numberOfWord);

$textCensored = null;
if(strcasecmp($badWord, $textUser)){
    $textCensored = str_replace($badWord, "****", $textUser);
} else {
    $textCensored = $textUser;
}

?>

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

    <h1><?php echo ucfirst($textCensored); ?></h1>

    </body>
</html>