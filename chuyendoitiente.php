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
$usd= $_POST["usd"];
$vn=$usd*23000;
?>
<form method="post">
    <input name="usd" placeholder="Nhap so tien USD" value="<?php echo $usd?>">
    <input type="submit" value=" chuyen " >
    <input type="text" value=" <?php echo $vn;?>">
</form>
</body>
</html>
