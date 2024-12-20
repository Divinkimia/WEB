<html>
    <head>
        <title>Liste des employes</title>
    </head>
    <body>
        <?php
        $connexion = mysqli_connect("localhost","root","","empScePhp");
        if ($connexion)
        {
            // si ma connexion est reussie faire
            mysqli_set_charset($connexion,"utf8");
            $requete="selection nom,prenom from employe;";
            $nb=0;
            echo "<h1> liste nomative des employes<h1>";
            echo '<p /><table border="2" widh="75%">';
            echo "<tr><th>NOM</th><th>PRENOM</th></tr>";
            $resulet=mysqli_query($connexion, $requete);
            $ligne=mysqli_fetch_assoc($resultat);
            while($ligne)
            {
                echo"<tr><td>".$ligne["nom"]."</td><td>".$ligne["prenom"]."</td></tr>";
                $nb++;
                $ligne=mysqli_fetch_assoc($resultat);
            
            }
            echo"</table><p />";
            echo "il y a ".$nb."employes.";
        }
        else
        {
            echo "probleme à la connexion <br />";
        }
        mysqli_close($connexion);
        ?>
    </body>
</html>

