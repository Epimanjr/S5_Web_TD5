<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml">   

    <head>    
        <title>Patates</title>   
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head> 

    <body>  
        <?php
        
        
        // Test de la langue
        global $anglais;
        if (isset($_GET['anglais'])) {
            include('langues/en-lang.php');
        } else {
            include('langues/fr-lang.php');
        }
        
        $TXT_PATATES = TXT_PATATES;
        if(isset($_GET['rev'])) {
            $TXT_PATATES = strrev(TXT_PATATES);
        }
        
        // Affichage de la chaine de caractère en fonction de la langue
        echo "<p>" . $TXT_PATATES . "</p>";

        // Variable globale
        global $patates;

        if (isset($_GET['saisieGet'])) {
            $patates = $_GET['saisieGet'];
        } else {
            if (isset($_POST["saisiePost"])) {
                $patates = $_POST['saisiePost'];
            } else {
                $patates = "5";
            }
        }

        // Affiche le nombre de patates
        echo "<p>" . NOMBRE . "<b>" . $patates . "</b><br/>" . NOMBREDEF . "</p>";

        // Affiche le bon nombre d'images
        echo "<div>";
        for ($i = 0; $i < $patates; $i++) {
            echo "<img src=\"images/patate.png\" alt=\"patates\" />";
        }
        echo "</div>"
        ?>

        <!--  Formulaires avec un champ de texte et un bouton valider -->
        <div class="formulaire">
            <!-- Avec la méthode GET -->
            <form method="GET" action="patates.php">
                <fieldset>
                    <!-- Légende du formulaire -->
                    <legend><?php echo FORMGET?></legend>

                    <!-- Champ de saisie -->
                    <label><?php echo NOMBRE?></label><input type="text" name="saisieGet" />

                    <!-- Bouton valider -->
                    <input type="submit" value="<?php echo VALIDERGET?>" />
                </fieldset>
            </form>
        </div>
        <div class="formulaire">
            <!-- Avec la méthode POST -->
            <form method="POST" action="patates.php">
                <fieldset>
                    <!-- Légende du formulaire -->
                    <legend><?php echo FORMPOST?></legend>

                    <!-- Champ de saisie -->
                    <label><?php echo NOMBRE?></label><input type="text" name="saisiePost" />

                    <!-- Bouton valider -->
                    <input type="submit" value="<?php echo VALIDERPOST?>" />
                </fieldset>

            </form>
        </div>

        <div>
            <!-- Boutons qui permettent de changer de langues -->
            <form method="GET" action="patates.php">
                <input type="submit" value="<?php echo BOUTONFR?>" name="francais" />
                <input type="submit" value="<?php echo BOUTONEN?>" name="anglais" />
                <input type="submit" value="Reverse" name="rev" />
            </form>
        </div>
    </body> 
</html> 