<?php
function isPrimeNumber($n){
    if ($n<2){
        return false;
    }
    for ($i=2; $i<= sqrt($n); $i++){
        if ($n%$i==0){
            return false;
        }
    }return true;
}
    echo " Cac so nguyen to nho hon 100 la: ";
    for($i=1; $i<100; $i++){
        if(isPrimeNumber($i)){
            echo $i . " ";
        }
    }
?>