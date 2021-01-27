<?php

/**
 * 1. Générez un nombre aléatoire compris entre 0 et 50, affichez le avec echo dans un nouveau <div>.
 */

// TODO Votre code ici.

echo "<div>".rand(0, 50)."</div><br>";

/**
 * 2. Générez un nombre aléatoire compris entre 50 et getrandmax, affichez le résultat dans un nouveau <p>
 */

// TODO Votre code ici.

echo "<p>".rand(50, getrandmax())."</p><br>";

/**
 * 3. Générez un nombre aléatoire compris entre 0 et 50
 * ==> si le nombre est inférieur ou égal à 25, affichez : vous avez gagné ( dans un nouveau <p> )
 * ==> si ce n'est pas le cas, affichez : vous avez perdu ( dans un nouveau <p> )
 */

// TODO Votre code ici.

$rng = rand(0, 50);
if ($rng<=25) echo "<p>Vous avez gagné</p><br>";
else echo "<p>Vous avez perdu</p><br>";

/**
 * 4. Créez une fonction qui génère un nombre aléatoire compris entre $max et $min ( paramètres ).
 * ==> Si le nombre est compris entre $max et $max -100, regénérez un nouveau nombre avec un appel récursif.
 * ==> Si ce n'est pas le cas, retournez tout simplement le nombre généré.
 * @param int $min
 * @param int $max
 */

// TODO Votre code ici.
/**
 * @param int $min
 * @param int $max
 * @return int
 */

function random(int $min, int $max): int{
    $rng = rand($min, $max);
    if ($rng>$max-100) random($min, $max);
    else return $rng;
}

$rng = random(54, 1457);
echo $rng;


