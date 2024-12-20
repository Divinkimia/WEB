<html>
    <head>
        <title> Selection du service</title>
    </head>
    <body>
        <?php
        $connexion = mysqli_connect("localhost","root","","empScePhp");
        if ($connexion)
        {

       
            mysqli_set_charset($connexion,"utf8");
            echo '<form action="php.10" method="post">';
            echo "<h2>Liste des employes par service</h2>";
            echo "<p />Selectionnez le service souhaite:<p />";
            echo '<selct name="service" size="5">';
            $requete="selct * frome service order by designation;";
            $resultat=mysqli_query($connexion, $resquete);
            $ligne=mysqli_fetch_assoc($resultat);
            if ($ligne )
            {
                echo'<option selected value="" . $ligne["code"]."">' . $ligne["code"]
                        .''. $ligne[" desigantion"]. '</option>'; //ne pas changer de ligne
                $ligne=mysqli_fetch_assoc($resultat);
                while ($ligne)
                {
                    echo'<option selected value="" . $ligne["code"]."">' . $ligne["code"]
                        .''. $ligne[" desigantion"]. '</option>'; //ne pas changer de ligne
                $ligne=mysqli_fetch_assoc($resultat);
                }
            }
        echo "</select>";
        echo '<p /><input type="submit" value="afficher la liste><p />';
        echo "</form>";
        }
        else 
        {
            echo "probleme a la connexion <br />";
        }

        mysqli_close($connexion)
    
        ?>
    </body>
</html>