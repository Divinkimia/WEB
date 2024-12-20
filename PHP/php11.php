<html>
    <head>
        <title>Saisie</title>
    </head>
    <body>
        <?php
        $connexion = mysqli_connect("localhost","root","","empScePhp");
        if ($connexion)
        {
            //connexion reussie
            mysqli_set_charset ($connexion,"utf8");
            echo '<form action="php12.php" method=post>';
            echo "<h2>Saisie d'un employe</h2>";
            echo 'Matricule : <input type="text" name="matricule" size="3" /><br />';
            echo 'Nom : <input type="text" name="nom" size="25" /><br />';
            echo 'prenom : <input type="text" name="prenom" size="20" /><br />';
            echo 'cadre <input type="checkbox" name="cadre" /><br />';
            echo 'Service : <br />';
            echo'select name="service" size="5">';
            $requete="select * from service order by designation;";
            $resultat=mysqli_query($connexion, $requete); 
            $ligne= mysqli_fetch_assoc($resultat);
            if ($ligne)
            {
                echo '<option select value="'.$ligne["code"].'">' .$ligne["code"].''.$ligne["designation"];
                echo "</option>";
                $ligne=mysqli_fetch_assoc($resultat);

                while($ligne)
                {
                    echo'<option value="'.$ligne["code"].'">' .$ligne["code"].''.$ligne["designation"].'</option>';
                    $ligne=mysqli_fetch_assoc($resultat);
                }
            }
            echo "</select>";
            echo'<p />< input type="submit" value="Enregistrer" />
                        <input type="reset" value="Annuler" /><p />';
            echo'</form>';
        }   
        else
        {
            echo"probleme a la connexion <br/>";
        }
        mysqli_close($connexion);
        ?>
    </body>
</html>