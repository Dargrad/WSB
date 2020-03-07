<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "text<br>";
 $name ="Kowalski";
 $surename ="Janusz<br>";
    
    

    echo $name, "   " ,$surename;

    //Komentarz

    echo <<<SHOW
    <hr>
        Imię: $name<br>
        Nazwisko: $surename
        <hr>
SHOW;
        ?>
        </body>
        </html>
    

