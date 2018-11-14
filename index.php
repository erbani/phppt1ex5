<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>PHP Exercice 5 Partie 1</title>
    </head>
    <body>
        <?php
        settype($autrement, 'int');
       $autrement = NULL;
        ?> 
        <p>voici ma variable <?= $autrement ?></p>

        <?php
        $autrement = 5;
        ?>
        <p>revoici la meme variable <?= $autrement ?></p>
    </body>
</html>
