<?php

// exo Damier

/*$taille = 10;

function monDamier($taille) { 
    for($i = 0; $i < $taille; $i++) {
        echo"<br>";
        for( $j = 0; $j < $taille; $j++ ) {
            if((($i + $j)%2 === 0)) {
                echo "*";
            } else {
                echo "#";
            }
        }
    }
}
monDamier(10);*/



// Exo Pyramide a l'endroit
/*$hauteur = 10;

function creerPyramide($hauteur) {
    for($i = 1; $i <= $hauteur; $i++) {
        echo "<br>";
        for($j = 1; $j <= $hauteur - $i; $j++) {
            echo  ' ';
        }
        for($k = 1; $k <= 2 * $i - 1; $k++) {
            echo  '*';
        }
    }
}

creerPyramide(10);*/



// Exo pyramide à l'envers
/*$hauteur = 10;

function creerPyramide($hauteur) {
    for($i = $hauteur; $i >= 1; $i--) {
        echo "<br>";
        for($j = 0; $j < $hauteur - $i; $j++) {
            echo  ' ';
        }
        for($k = 1; $k <= 2 * $i - 1; $k++) {
            echo  '*';
        }
    }
}

creerPyramide(10);*/



// Exo Assurance

/*$age = 40;
$duree = 0;

function assurance($age, $duree) {
    if($age < 40 && $duree > 10) {
        echo "On vous prend en charge\n";
    } else if ($age > 40 && $duree < 10) {
        echo "On ne vous prend pas en charge\n";
    } else {
        echo "Retourner chez votre mère\n";
    }
}

assurance($age, $duree);*/



// EXO M10 PHP

$nom = 'Deschamps';// Variable nom
$prenom = 'Delphine';//Variable prenom(type string)
$age = 40;//Variable age(type int)
$km = 240.5;//Variable klm(type float)
$bool = false;//Variable booléan
echo " Je m'appelle $nom $prenom et j'ai $age ans et j'ai roulée $km KM en voiture. Et oui tout est $bool dis.", "<br>";

$addition = 3 + 4;//Variable addition
$multiplication = 5 * 20;//Variable multiplication
$division = 45 / 5;//Variable division
echo "Le résultat de l'addition est $addition. <br>", "Le résultat de la multiplication est  $multiplication. <br>","Le résultat de la division est $division", "<br>";


$agee = 34;//Variable agee
//Fonction majeur ou mineur
function majeur($agee) {
if( $agee >= 18){
    echo "Vous êtes majeur,","<br>";
} else {
    echo "Vous êtes mineur", "<br>";
}

} 

majeur($agee);//Rappelle de la fonction


$date = 18;//Variable date
$genre = 'Homme';//Variable genre

//Fonction femme majeur ou mineur et homme majeur ou mineur
function genree($date, $genre) {
    if($date >= 18 && $genre === "Femme"){
        echo "Vous êtes une femme majeure","<br>";
    }else if ($date < 18 && $genre === "Femme"){
        echo "Vous êtes une femme mineure","<br>";
    }else if ($date >= 18 && $genre === "Homme"){
        echo "Vous êtes un homme majeur", "<br>";
    }else if ($date < 18 && $genre === "Homme"){
        echo "Vous êtes un homme mineur","<br>";
    }else {
        echo "Vous êtes non genré(e)", "<br>";//Sinon non genré(e)
    }
}
 genree($date, $genre);//Rappelle de la fonction


$maVariable = "Homme";//Variable maVariable

//Fonction développeur ou développeuse
function sex($maVariable){
    if($maVariable === "Homme") {
        echo "Vous êtes un développeur !!!","<br>";
    } else {
        echo "Vous êtes une dévelloppeuse !!!","<br>";
    }
}

sex($maVariable);//Rappelle de la fonction


$good = false;//Variable good

//Fonction ok ou non
function ok($good) {
    if($good === false) {
        echo "C'est pas bon !!!","<br>";
    } else {
        echo "c'est OK!!!","<br>";
    }
}

ok($good);//Rappelle de la fonction


$number = 0;//Variable number

//Boucle qui permet d'afficher d'incrémenter tant que la variable est inférieur à 10
while ($number < 10) {
    echo "$number<br>";  
    $number++;
}


$uno = 0;//Variable uno
$dos = 10;//Variable dos

//Boucle qui permet de multiplier la première variable avec la deuxième tant que la première variable n'est pas supérieur à 20
while ($uno < 20) {
    echo $uno * $dos,"<br>";
    $uno++;
}

$tres = 100;//Variable tres
$quatro = 10;//Variable quatro

//Boucle qui permet de diviser la première variable par la deuxième tant que la première variable n'est pas supérieur à 10
while ($tres >= 10) {
    echo $tres / $quatro,"<br>";
    $tres--;
}


$varia = 6;//Variable varia

//Boucle qui permet d'incrémenter la moitiè de la variable $varia tant que celle ci est inférieur ou égal à 10
for($i = 0; $varia <= 10; $i++){
    echo "$varia <br>";
    $varia += $varia / 2;
}

$pas = 1;//Variable pas

//Boucle qui permet de générer le nombre de pas de 1 à 15 avec un pas de 1
for($i = 0; $pas <= 15; $i++) {
    echo "$pas On y arrive presque <br>";
    $pas = $pas + 1;
}

$pass = 20;//Variable pass

//Boucle qui permet de générer le nombre de pas de 0 à 20 avec un pas de 1 
for($i = 0; $pass >= 0; $i--) {
    echo "$pass C'est presque bon <br>";
    $pass = $pass - 1; 
}


$dpas = 15;//Variable dpas

//Boucle qui permet de générer le nombre de pas de 1 à 100 avec un pas de 15
for($i = 0; $dpas <= 100; $i++) {
    echo "$dpas On tient le bon bout <br>";
    $dpas = $dpas + 15;
}

$enfin = 200;//Variable enfin

//Boucle qui permet de générer le nombre de pas de 0 à 200 avec un pas de 12
for($i = 0; $enfin >= 0; $i--) {
    echo "$enfin Enfin <br>";
    $enfin = $enfin - 12;
}

$mois = array ("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");//Variable $mois dans un tableau(array)
$mois[7] = "août";
print_r($mois);
echo $mois[2],"<br>";
echo $mois[4],"<br>";

$départementsHautDeFrance = array (
    "01" => "Ain",
    "02" => "Aisne",
    "59" => "Nord",
    "60" => "Oise",
    "62" => "Pas-de-Calais",
    "80" => "Somme",
    "51" => "Reims",
);
print_r($départementsHautDeFrance);
echo $départementsHautDeFrance[59];

foreach($mois as $moisCourant) {
    echo $moisCourant . " ";
}

foreach($départementsHautDeFrance as $départements) {
    echo $départements . " ";
}

foreach($départementsHautDeFrance as $numéro => $nom) {
    echo "Le département $nom à le numéro $numéro :<br>";
}


function retournerTrue() {
    return true;
}


$resultat = retournerTrue();
echo "Le résultat de la fonction est : " . var_export($resultat, true), "<br>";


function retournerChaine($maChaine) {
    return $maChaine;
}

$chaine = "Bonjour je suis une chaîne de caractères.";
$resultats = retournerChaine($chaine);
echo "La chaîne de caractères retournée est : " . $resultats, "<br>";


function concatenationChaine($chaine1, $chaine2) {
    return $chaine1 . $chaine2;
}
    $chaine1 = "Bonjour,<br>";
    $chaine2 = "Ca va ? <br>";
    $resulta = concatenationChaine($chaine1, $chaine2);
    echo "La concaténation des deux chaînes est : " . $resulta;


function numbers($nombre1, $nombre2) {
    if($nombre1 > $nombre2) {
       return "Le premier nombre ($nombre1) est le plus grand.";
    } else if ($nombre1 < $nombre2) {
       return " Le premier nombre ($nombre1) est le plus petit.";
    } else {
       return "Les deux nombres ($nombre1) et ($nombre2) sont égaux. <br>";
    }
}

$nombre1 = 35;
$nombre2 = 35;

$result = numbers($nombre1, $nombre2);
echo $result;


function conca($nombre, $chene) {
    return $nombre . $chene;
}

$nombre = 30;
    $chene = "J'ai <br>";
    $final = conca($chene, $nombre);
    echo "La concaténation du nombre et de la chaine de caractères est :  . $final  ans, <br>";



function calcul($n1 = 0, $n2 = 0, $n3 = 0) {
   return $n1 + $n2 + $n3;    
} 

$reste1 = calcul();
$reste2 = calcul(12, 10, 100);

echo "La somme par défaut est :" . $reste1 . "<br>";
echo "La somme avec des valeurs spécifiées est :" . $reste2;


//Exo Immatriculation

/*$lettres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$chiffres = '0123456789';


function immat($lettres, $chiffres) {
    
$partieLettres = substr(str_shuffle ($lettres), 0, 2);
$partieChiffres = substr(str_shuffle($chiffres), 0, 3);
$partieFinale = substr(str_shuffle($lettres), 0, 2);

$plaque = $partieLettres . '-'. $partieChiffres . '-' .$partieFinale;

     return $plaque;
}
for ($i = 0; $i < 100; $i++){
$plaqueImmat = immat($lettres, $chiffres,);
echo  $plaqueImmat, "<br>";

}*/