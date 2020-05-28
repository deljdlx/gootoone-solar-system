<?php

require __DIR__.'/class/Star.php';
require __DIR__.'/class/Planet.php';
require __DIR__.'/class/StellarSystem.php';

require __DIR__.'/solar-system.php';



//! allé c'est partie pour l'affichage ! Woot woot du css et du bootstrap, ça va être la fête je sens !
?>
<!doctype html>
<html lang="fr">
<head>

    <meta charset="utf-8"/>
    <title>Système solaire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body>




<?php
    $soleil = $systemeSolaire->getStar();
    $planets = $systemeSolaire->getPlanets();
?>

<div class="container">
    <div class="row" class="system-info">
        <div class="col-12 col-md-4 mr-md-0 pr-md-0">
            <div class="border-bottom border-dark star"  style="background-image: url(<?=$systemeSolaire->image?>);">
            </div>
        </div>
        <div class="col-12 col-md-8 ml-md-0 pl-md-0">
            <div class="border-bottom border-dark system-description">
                <?php
                    $totalSatellites = 0;
                    foreach($planets as $planet) {
                        $totalSatellites += $planet->satellites;
                    }
                    echo '<h1>' . $systemeSolaire->name . '</h1>';
                    echo '<ul class="details">';
                        echo '<li>Âge : ' . $systemeSolaire->age .' milliard d\'années</li>';
                        echo '<li>Etoile : ' . $soleil->name .'</li>';
                        echo '<li>Nombre de planètes : ' . count($planets) .'</li>';
                        echo '<li>Nombre totaux de satellites connus : ' . $totalSatellites .'</li>';
                    echo '</ul>';
                ?>
            </div>
        </div>
    </div>

	<div class="row">
        <?php
            foreach($planets as $planet) {
                include(__DIR__ . '/template/planet.php');
            }
        ?>
	</div>
</div>






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>