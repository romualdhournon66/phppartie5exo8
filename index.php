<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 5 exercice 8</title>
    </head>
    <body>
        <div align="center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 align="center">PHP Partie 5 exercice 8</h1>
                    </div>
                </div>
                <div align="center">
                    <p class="text">Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>
                    <li>Janvier</li>
                    <li>Février</li>
                    <li>Mars</li>
                    <li>Avril</li>
                    <li>Mai</li>
                    <li>Juin</li>
                    <li>Juillet</li>
                    <li>Aout</li>
                    <li>Septembre</li>
                    <li>Octobre</li>
                    <li>Novembre</li>
                    <li>Décembre</li>
                </div>
                <p align="center">Affichage du tableau avec ses valeurs en utilisant une boucle for pour ce tableau dit "numéroté"</p>
                <?php
// On crée notre array $months
                $months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
// Puis on fait une boucle pour tout afficher :
                for ($numero = 0; $numero < 12; $numero++) {
                    echo $months[$numero] . '<p>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>

