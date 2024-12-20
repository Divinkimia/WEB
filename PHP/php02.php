<html>
    <head><title>Seconde script php</title></heade>
    <body>
        <?php
        // mon commentaire
        $jour=date("d");
        $mois=date("m");
        $an=date("Y");
        echo "Bonjour, ici Brother...<br /><br />";
        echo "Nous sommes le ".$jour."/".$mois."/".$an."<br />";
        echo 'Votre adresse IP est'.$_SERVER["REMOTE_ADDR"]."<br />";
        echo "Vous utiliser le navigareur".$_SERVER["HTTP_USER_AGENT"].'<br />';
        ?>
    </body>
</html>