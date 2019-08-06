<?php
function one_number($number){
   $arr_numberone=["zero"," one", "two", "three","four", "five", " six","seven","eight","nine"];
   return $arr_numberone[$number];
}
function two_number($number){
    $small_20=[10 =>"ten", 11=>" eleven", 12 => 'twelve', 13=> "thirteen", 14=> "fourteen", 15=> "fifteen", 16=> "sixteen", 17=>"seventeen", 18 =>"eightteen", 19=>"nineteen",];
    $big_20 =[20=> "twenty", 3 => 'thirty', 4 => 'fourty', 5 => 'fifty', 6 => 'sixty', 7 => 'seventy', 8 => 'eighty', 9 => 'nicety'];
    if ($number<20){
        return $small_20[$number];
    }
    if($number[1]==0){
        return $big_20[$number[0]];
    }else{
        return $big_20[$number[0]] . ' '. one_number($number[1]);
    }
}
function three_number ($number){
    if ($number % 100 ==0){
        return one_number($number[0]) .' '."hundred";
    }
    if ($number[1]==0){
        return one_number($number[0]). "hundred end ". one_number($number[2]);
    }return one_number($number[0]) . ' '. " humdred" . ' '. two_number(substr($number, 1,2));
}
function convert_to_words($number){
    switch (strlen($number)){
        case 1:
            $words= one_number($number);
            break;
        case 2:
            $words=two_number($number);
            break;
        case 3:
            $words=three_number($number);
            break;
        default:
            $words= " out of ability";
    }
    return $words;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doc so</title>
</head>
<body>
<form method="post">
    <label> Nhap so can doc: </label>
    <input type="number" name="number"><br>
    <button type="submit"> Submit</button>

</form>
<?php
if( $_SERVER('REQUEST_METHOD')=="POST"){
    $number=$_POST["number"];
    echo convert_to_words($number);
}

?>
</body>
</html>
