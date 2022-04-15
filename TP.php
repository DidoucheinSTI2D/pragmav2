<?php
header ("Refresh:5");
$csv = '/var/www/html/TPihm.csv';
$csv2 = '/var/www/html/valeur.csv';

$titre = 'Température de la maison';

function read($csv){
    $file = fopen($csv, 'r');
    while (!feof($file)) {
        $line[] = fgetcsv($file, 1024);
    }
    fclose($file);
    return $line;
}

function write($csv2){
    $file = fopen($csv, 'r');
    while (!feof($file)) {
        $line[] = fgetcsv($file, 1024);
    }
    fclose($file);
    return $line;
}

?>

<html>
<head>
<title>Temperature de la maison</title>
<link rel="icon" type="image/png" sizes="16x16" href="https://cdn.discordapp.com/attachments/951420273398267964/960531589614424114/pp_cropped.png">

</head>
<body>
<style>

body {
    background-image: linear-gradient(#FF7A29, black);
    }
#topbar {
    background-color: white;
    position: fixed;
    width: 100%;
    height: 70px;
    opacity: 0.6;
    z-index: 1;
    top: 0;
    left: 0;
    }

#accueil {
    text-align: left;
    margin-top: 22px;
    margin-left: 30px;
    color: yellow;
    font-size: 130%;
    }

#temp {
    font-size: 300%;
    color: black;
    text-decoration: underline;
    position: absolute;
    top: 6%; left: 50%;
    transform: translate(-50%, -50%);
    }
#valeur {
	position: absolute;
	top: 15%; left: 50%;
    	transform: translate(-50%, -50%);
	font-size: 550%;
    }

#valeur2 {
    position: absolute;
    top: 50%; left: 50%; 
    transform: translate(-50%, -50%);
    color: white;
    }

</style>
<div id="topbar"><p id="accueil"><a href="Accueil.html">Accueil</a></p></div>

<div id='here'>
<p id="temp">Temperature:</p>
<p id="valeur">
<?php $csv = read($csv);
print_r($csv[0][0]);
?></p>
</div>

<div id="valeur2">
<form action="valeur.csv" method="post">
<p>Votre temperature : <input type="text" name="consigne" /></p><p><input type="submit" value="Valider"></p>
</form>
</div>

</body>
</html>';



