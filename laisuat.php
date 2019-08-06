<?php
$gia = 25000000;
$sothang = 9; //$_GET["sothang"]; //Lấy dữ liệu trên Form//
$phantramtratruoc = "0.2"; //$_GET["phantramtratruoc"]; // //
$laisuat="0.02";
$thanhtoanbandau = $gia*$phantramtratruoc; //~~~~ lấy từ Db nhưng mình ko biết code//
$sotienconlai = $gia - $thanhtoanbandau;
$laihangthang = $sotienconlai*$laisuat*$sothang;
$tienhangthang = ($sotienconlai + $laihangthang)/$sothang;
?>
<table width="100%" border="1">
    <tr>
        <td>Số tiền trả trước</td>
        <td>Số tiền còn lại</td>
        <td>Trả hàng tháng</td>
    </tr>
    <tr>
        <td><?php echo number_format($thanhtoanbandau,0,",",".");?></td>
        <td><?php echo number_format($sotienconlai,0,",",".");?></td>
        <td><?php echo number_format($tienhangthang,0,",",".");?></td>
    </tr>
</table>
