<html>
    <head>
        <title>un petit bonjour</title>
    </head>
    <body>
        <?php
            if (empty($_POST["familier"]))
            {
                echo "Bonjour".$_POST["prenom"];
            }
            else
            {
                echo "Salut".$POST["prenom"];
            }
        ?>
    </body>
</html>