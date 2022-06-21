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
?>