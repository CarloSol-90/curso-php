




<?php
//Declarar una variable, siempre con $
// Se concatena con .
$name = "Carlos";
$isDev = true;
$age = 33;

$isOld =  $age < 20;


define('LOGO_PHP', 'https://cdn.freebiesupply.com/logos/large/2x/php-logo-png-transparent.png');

$output = "Hola $name, tengo $age años 😁";
$outputAge = match (true) {
$age < 2    => "Eres un bebé, $name ",
$age <= 10  => "Eres un niño, $name",
$age < 18   => "Eres un adolescente, $name",
$age === 18 => "Eres mayor de edad, $name",
default     => "Eres un adulto, $name 🙂",
}
?>

<?php 
$bestLanguages = ["java", "Phyton", "C++", "PHP", "o"];
$bestLanguages[] = "javascript";

$person = [
    "name" => "Carlos",
    "age" => 33,
    "isDev" => true,
    "languages" => ["Javaascript", "Typescript", "Php"]
];
$person["name"] = "louis";
$person["languages"][] = "Java";
?>

<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
       <li> <?=$key . " " . $language ?></li>
    <?php endforeach ?>
</ul> 

<h2><?= $outputAge?></h2>


















<img src="<?= LOGO_PHP ?>" alt="logo" width="200">
<h1>
<?= $output ?>
</h1>









<style>
    :root{
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>