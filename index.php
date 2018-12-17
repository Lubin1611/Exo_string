<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Compléter le code ci dessous pour afficher la longueur de la chaine de caracteres

 echo Strlen("google")."<br>";

    echo"<br><br>"; //Decommentez les <br> pour tester l'affichage lorsque vous aurez plusieurs instructions

 // Compléter le code ci dessous pour inverser la chaine de caractere

    echo Strrev("anticonstitutionellement")."<br>";

// Et si vous testiez également avec votre prénom ?

    echo Strrev("Meunier Lubin");

    echo"<br><br>";

// Compléter le code ci dessous pour remplacer le mot ok par non
    $oldtxt = "Ok Google!";
    $newtxt = str_replace("Ok", "NON", $oldtxt);

echo $newtxt;