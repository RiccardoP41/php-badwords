<!-- Creare una variabile con un paragrafo di testo. -->
<!-- Visualizzare a schermo il paragrafo con la relativa
lunghezza e sostituire la badword passata in GET con tre *. -->

<?php
 //variabile con paragrafo
$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

//visualizzo a schermo il par con la lunghezza
$length = strlen($text);


//sostituisco la badword con ***
$badword = $_GET["name"];
$textcensored = str_replace($badword,"***",$text);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p><?php echo $text;?></p>
        <p><?php echo $length . " caratteri di lunghezza";?></p>
        <p><?php echo $textcensored;?></p>
        <p><?php echo  strlen($textcensored) . " caratteri di lunghezza";?></p>
    </body>
</html>
