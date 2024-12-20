<html>
    <head>
        <title>Ajout d'un employe</title>
    </head>
    <body>
        <?php
        $connexion = mysqli_connect("localhost","root","","empScePhp");
        if ($connexion)
        {
            //connexion reussie
            mysqli_set_charset ($connexion,"utf8");
            if (empty($_POST["cadre"]))
            {
                $harCadre='n';
            }
            else
            {
                $charCadre='o';
            }
            $requete="insert into employe values ('".$_POST["matricule"]."','".$_POST["nom"]."','"
                                .$_POST["prenom"].'","'.$charCadre."','".$_POST["service"]."');";
            $ok=mysqli_query($connexion, $requete);
            if ($ok)
            {
                echo "l'employe a ete correctement ajoute";
            }
            else
            {
                echo "Attention, l'ajout de l'employe a echoue !!!"; 
            }
        }
        else
        {
            echo "probleme de connexion <br />";
        }
        mysqli_close($connexion);
        ?>
    </body>
</html>