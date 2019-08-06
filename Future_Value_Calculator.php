
<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $amount=$_POST["Amount"];
    $rate=$_POST["Rate"];
    $year=$_POST["Years"];
    $calculate=0;
    for ($i=1; $i<=$year; $i++)  {
        $calculate=$amount+($amount * $rate);
    }

?>
    <form method="post">
        <table>
            <tr>
                <td> Investment Amount: </td>
                <td> <input type="number" name="Amount" value="<?php echo $amount; ?>"></td>
            </tr>
            <tr>
                <td> Yearly Interest Rate:</td>
                <td> <input type="text" name="Rate" value="<?php echo $rate; ?>"></td>
            </tr>
            <tr>
                <td> Number of Years: </td>
                <td> <input type="number" name="Years" value="<?php echo $year; ?>"></td>
            </tr>
            <tr>
                <td> <button type="submit"> Calculate</button></td>
                <td> <p> <?php echo $calculate ?>  </p>   </td>

            </tr>
        </table>
    </form>

</body>
</html>