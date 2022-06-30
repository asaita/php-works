<?php

function recursiveUcgen($boyut){
    static $yatay=0;
    if($boyut!=$yatay){
        for($i=0;$i<=$yatay;$i++){
            echo "X";
        }
        echo '<br>';
        $yatay++;
        recursiveUcgen($boyut);
    }          
//
};

recursiveUcgen(15);

echo '<hr>';


function ucgen($boyut){
    $yatay=0;
         while($boyut!=$yatay){
            for($i=0;$i<=$yatay;$i++){
                echo "X";                           
            }
            echo '<br>';
           $yatay++;
        }

};

ucgen(15);


function f($sayi)
{
    $sayi2 = 2;
    $total = 1;
    for ($i = 1; $i <= $sayi; $sayi--) {
        $total *= $sayi;
    }
    return $total;
}

echo f(3) * f(2);
?>