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
echo " 10 so nguyen to dau tien la: ";
$n=10;
$dem=0;
$i=2;
while ($dem<$n){
    if (isPrimeNumber($i)){
        echo $i ." ";
        $dem++;
    }
    $i++;

}
?>