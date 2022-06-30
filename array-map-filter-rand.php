<?php 

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

$planets2=array_filter($planets);

function uret($dizi, $sayi){
    $Rand_Key=array_rand($dizi, $sayi);
    for ($i=0; $i <$sayi ; $i++) { 
        echo $dizi[$Rand_Key[$i]] . "<br>";
    }
   echo "<br>";
}
uret($planets2,2);
uret($planets2,3);
uret($planets2,4);
uret($planets2,2);
uret($planets2,5);




?>