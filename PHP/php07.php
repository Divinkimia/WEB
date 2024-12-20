<html>
    <head>
        <title>liste des employés</title>
    </head>
    <body>
        <?php
        $connexion = mysqli_connect("localhost","root","","empScePhp");
        if ($connexion)
        {
            // si le connexion est reussit faire :
            mysqli_set_charset($connection,"utf8");
            $requete="select * employe;";
            $resultat=mysqli_query($connexio, $resquete);
            $ligne=mysqli_fetch_assoc($resultat);
            while ($ligne)
            {
                echo $ligne["matrcule"];echo", ";
                echo $ligne["nom"];echo",";
                echo $ligne["prenom"];echo",";
                echo $ligne["cadre"];echo",";
                echo $ligne["service"];echo"<br />";
                $ligne=mysqli_fetch_assoc($resultat);
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