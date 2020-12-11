<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - partie 1</title>
</head>
<body>
  <h1>Partie 1</h1>  

<h2>Exercice 1 </h2>

<p> Créer une variable name et l'initialiser avec la valeur de votre choix.  Afficher son contenu.</p>


<p> La variable 'name' contient : </p>
<?php
$name = 'Stéphane';

echo $name;
?>


<h2>Exercice 2 </h2>

<p> Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.  Attention age est de type entier.  Afficher leur contenu.</p>
<?php
$lastname = 'Cavillon';
$firstname = 'Stéphane';
$age = 31;

echo ('Bonjour, je m\'appelle ' . $firstname . ' ' . $lastname . ' et j\'ai ' . $age . ' ans !');

?>


<h2>Exercice 3 </h2>
<p> Créer une variable km. L'initialiser à 1. Afficher son contenu.  
Changer sa valeur par 3. Afficher son contenu.  
Changer sa valeur par 125. Afficher son contenu.</p>


<?php
$km = 1;

echo $km;
echo '<br>';

$km = 3;

echo $km;
echo '<br>';

$km = 125;

echo $km;

?>



<h2>Exercice 4 </h2>
<p> Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.  
Les afficher.</p>

<?php
$string = (string)'chaine de caractère';
$int = (int) 2;
$float = (float) 1.2;
$boolean = (boolean) false;

echo $string;
echo '<br>';
echo $int;
echo '<br>';
echo $float;
echo '<br>';
echo $boolean;

?>

<h2>Exercice 5 </h2>
<p> Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.  
Donner une valeur à cette variable et l'afficher. </p>

<?php
$int1 = (int) null;
var_dump($int1);
echo $int1;
echo '<br>';
$int1 = 42;
echo $int1;
?>



<h2>Exercice 6 </h2>
<p> Créer une variable name et l'initialiser avec la valeur de votre choix.  
Afficher : Bonjour + name + , comment vas tu ?.</p>
<?php
$name = 'Stéphane';

echo 'Bonjour ' . $name. ', comment vas tu ?'

?>


<h2>Exercice 7 </h2>
<p> Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.  Attention age est de type entier.  
Afficher : Bonjour + lastname + firstname + , tu as + age + ans. </p>

<?php
$lastname = 'Cavillon';
$firstname = 'Stéphane';
$age = 31;

echo ('Bonjour ' . $firstname . ' ' . $lastname . ', tu as ' . $age . ' ans !');

?>


<h2>Exercice 8 </h2>
<p> Créer 3 variables.  
Dans la première mettre le résultat de l'opération 3 + 4.  
Dans la deuxième mettre le résultat de l'opération 5 * 20.  
Dans la troisième mettre le résultat de l'opération 45 / 5.  
Afficher le contenu des variables.
</p>

<?php
$a = 3+4;
$b = 5*20;
$c = 45/5;

echo $a;
echo '<br>';

echo $b;
echo '<br>';

echo $c;

?>

</body>
</html>