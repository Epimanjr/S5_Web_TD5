<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml">   

    <head>    
        <title>Quizz</title>   
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head> 

    <body>  
        <?php
        $instruments = array(
            "Jimi Hendrix" => "Guitare",
            "Eric Clapton" => "Guitare",
            "David Gilmour" => "Guitare",
            "Pavel Steidl" => "Guitare",
            "Django Reinhardt" => "Guitare",
            "Glenn Gould" => "Piano",
            "Tim Minchin" => "Piano",
            "Yuja Wang" => "Piano",
            "Chuck Leavell" => "Piano",
            "Mai Thứ" => "Đàn bầu",
            "John Blackwell" => "Percussions",
            "Louis Armstrong" => "Trompette",
            "Miles Davis" => "Trompette"
        );

        $listeInstruments = array(
            "Piano",
            "Trompette",
            "Guitare",
            "Percussions",
            "Đàn bầu"
        );

        // On sélectionne 4 artistes aléatoirement (dans un tableau)
        $artistes = array_rand($instruments, 4);

        // Parcours pour affichage
        echo '<form method="POST" action="resquizz.php"><fieldset>';
        echo '<legend>Quizz sur les artistes : </legend>';
        for ($i = 0; $i < 4; $i++) {
            // Affichage de la question
            echo "<p><label>Quel est l'instrument de l'artiste " . $artistes[$i] . " ? </label>";

            // Choix d'un autre instrument (aléatoirement), différent de la bonne réponse
            $autreInstru = $instruments[$artistes[$i]];
            while ($autreInstru == $instruments[$artistes[$i]]) {
                // Sélection
                $autreInstru = $listeInstruments[array_rand($listeInstruments)];
            }

            // Sélection d'un nombre aléatoire pour affichage aléatoire
            $alea = rand(1, 2);
            echo $alea;

            if ($alea == 1) {
                // Affichage de l'instrument de l'arstiste
                echo "</label><input type=\"radio\" name=\"" . $artistes[$i] . "\" value=\"" . $instruments[$artistes[$i]] . "\"/><span class=\"spaninstrument\">" . $instruments[$artistes[$i]] . "</span>";
                // Affichage du nouvel instrument
                echo "<input type=\"radio\" name=\"" . $artistes[$i] . "\"value=\"" . $autreInstru . "\"/><span class=\"spaninstrument\">" . $autreInstru . "</span></p>";
            } else {
                // Affichage du nouvel instrument
                echo "<input type=\"radio\" name=\"" . $artistes[$i] . "\"value=\"" . $autreInstru . "\"/><span class=\"spaninstrument\">" . $autreInstru . "</span></p>";
                // Affichage de l'instrument de l'arstiste
                echo "</label><input type=\"radio\" name=\"" . $artistes[$i] . "\" value=\"" . $instruments[$artistes[$i]] . "\"/><span class=\"spaninstrument\">" . $instruments[$artistes[$i]] . "</span>";
            }
        }

        echo '<br/><input type="submit" value="Valider le quizz" name="valider" />';
        echo '</fieldset></form>';
        ?>

    </body> 
</html> 
