<?php 

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

$planets2=array_filter($planets);

function uret($dizi, $sayi){
    
    $Rand_Key=array_rand($dizi, $sayi);

    return array_map( function ($i) use ($dizi){ return $dizi[$i]; }, $Rand_Key);

}
echo '<pre>';
print_r(uret($planets2,2));
print_r(uret($planets2,3));
print_r(uret($planets2,4));
print_r(uret($planets2,2));
print_r(uret($planets2,5));




?>