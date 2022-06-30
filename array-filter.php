<?php
function tek($sayi)
{
    return ($sayi&1);
}
function cift($sayi)
{
    return !($sayi&1);
}

$array1=['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
$array2=[6,7,8,9,10];

//dizinin elemanlarını tek tek istediğimiz fonksiyona gönderiyor çıktılarını yazdırıyoruz
echo '<pre>';
print_r(array_filter($array2,"cift"));

function cube($n)
{
    return ($n * $n * $n);
}

// $a = [1, 2, 3, 4, 5];
// $b = array_map('cube', $array2);
// print_r($b);
echo '<pre>';
$c=array_map('cift',$array2);
print_r($c);

echo '<pre>';
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";

?>