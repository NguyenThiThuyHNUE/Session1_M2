<?php
$product=$_POST["product"];
$price=$_POST["price"];
$percent=$_POST["percent"];
$discount_amount=$price * $percent * 0.1;
$discount_price=$price-$discount_amount;
?>
<form action="display_discount.php" name="products" method="post">
    <h1> Product Discount Calculator</h1>
    <table>
        <tr>
            <td> <span>Product Description:</span></td>
            <td><?php echo $product?></td>

        </tr>
        <tr>
            <td> <span>List Price:</span></td>
            <td> <?php echo $price?></td>

        </tr>
        <tr>
            <td>     <span>Discount Percent:</span></td>
            <td><?php echo $percent?></td>

        </tr>
        <tr>
            <td> Discount Amount: </td>
            <td> <?php echo $discount_amount?></td>

        </tr>
        <tr>
            <td> Discount Price:</td>
            <td> <?php echo $discount_price?></td>

        </tr>
    </table>
</form>
