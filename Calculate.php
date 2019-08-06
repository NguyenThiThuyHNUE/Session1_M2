<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caculate</title>
</head>
<body>
<?php
        $n1 = " ";
        $n2 = " ";
        $caculate = " ";

         if (isset($_POST['number1'])==true && isset($_POST['number2'])==true && isset($_POST['caculate'])==true ){
             $n1           = $_POST['number1'];
             $caculate     = $_POST['caculate'];
             $n2           = $_POST['number2'];
             switch ($caculate){
                 case "+":
                     $result=$n1+$n2;
                     break;
                 case "-":
                     $result=$n1-$n2;
                     break;
                 case "*":
                     $result=$n1*$n2;
                     break;
                 case "/":
                     $result=$n1/$n2;
                     break;
             }
         }
?>
<div class="content">
    <h1> Caculate</h1>
    <form method="post" name="main-form">
        <div class="row">
            <span> So thu nhat: </span>
            <input type="text" name="number1" value="<?php echo $n1;?>">
        </div>

        <div class="row">
            <span> Phep tinh: </span>
            <input type="text" name="caculate" value="<?php echo $caculate;?>">
        </div>

        <div class="row">
            <span> So thu hai: </span>
            <input type="text" name="number2" value="<?php echo $n2;?>">
        </div>

        <div class="row">
            <input type="submit" value="xem_ket_qua" name="submit">
        </div>

        <div class="row">
          <p> Ket qua: <?php echo $n1 ." ". $caculate. " ". $n2. " = ". $result?> </p>
        </div>
    </form>
</div>

</body>
</html>
