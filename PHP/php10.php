<html>
    <head>
        <title> Selection du service</title>
    </head>
    <body>
        <?php
        $connexion = mysqli_connect("localhost","root","","empScePhp");
        if ($connexion)
        {
            // connection reussie
            mysqli_set_charset($connexion,"utf8");
            $requete="select nom,prenom from employe where service='".$_POST["service"]."',";
            $nb=0;
            echo "<h1> liste nominative des employes</h1>";
            echo '<p /><table border="2" width="75%">';
            echo "<tr><th>NOM</th><th>PRENOM</th></tr>";
            $resultat=mysqli_query($connexion, $requete);
            $ligne==mysqli_fetch_assoc($resultat);
            while($ligne)
            {
                echo "<tr><td>".$ligne["nom"]."<tr><td>".$ligne["prenom"]."</tr></td>";
                $sb++;
                $ligne=mysqli_fetch_assoc($resultat);
            }
        echo "</table><p />";
        echo "il y a".$sb."emplayes.";
        }
        else
        {
            echo"probleme a la connexion <br />";
        }

        mysqli_close($connexion)
        ?>
    </body>
</html>