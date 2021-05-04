<?php

    $item1 = $_POST['item1'];
    $size1 = $_POST['size1'];
    if ($item1 === "Toshiba" && $size1 === "1 TB") {
        $price1 = 52;
    } else if ($item1 === "Toshiba" && $size1 === "2 TB") {
        $price1 = 75;
    } else if ($item1 === "Toshiba" && $size1 === "4 TB") {
        $price1 = 150;
    } else if ($item1 === "Samsung" && $size1 === "1 TB") {
        $price1 = 50;
    } else if ($item1 === "Samsung" && $size1 === "2 TB") {
        $price1 = 70;
    } else if ($item1 === "Samsung" && $size1 === "4 TB") {
        $price1 = 145;
    } else if ($item1 === "Seagate" && $size1 === "1 TB") {
        $price1 = 51;
    } else if ($item1 === "Seagate" && $size1 === "2 TB") {
        $price1 = 73;
    } else if ($item1 === "Seagate" && $size1 === "4 TB") {
        $price1 = 152;
    } 
    $qty1 = $_POST['qty1'];    
    $dsc1 = $_POST['dsc1'];   
    $tprice1 = $qty1 * $price1; 
    $nilai_dsc1 = $tprice1 * $dsc1 / 100;
    $subtotal1 = $tprice1 - $nilai_dsc1;

    $item2 = $_POST['item2'];
    $size2 = $_POST['size2'];
    if ($item2 === "Toshiba" && $size2 === "1 TB") {
        $price2 = 52;
    } else if ($item2 === "Toshiba" && $size2 === "2 TB") {
        $price2 = 75;
    } else if ($item2 === "Toshiba" && $size2 === "4 TB") {
        $price2 = 150;
    } else if ($item2 === "Samsung" && $size2 === "1 TB") {
        $price2 = 50;
    } else if ($item2 === "Samsung" && $size2 === "2 TB") {
        $price2 = 70;
    } else if ($item2 === "Samsung" && $size2 === "4 TB") {
        $price2 = 145;
    } else if ($item2 === "Seagate" && $size2 === "1 TB") {
        $price2 = 51;
    } else if ($item2 === "Seagate" && $size2 === "2 TB") {
        $price2 = 73;
    } else if ($item2 === "Seagate" && $size2 === "4 TB") {
        $price2 = 152;
    } 
    $qty2 = $_POST['qty2'];    
    $dsc2 = $_POST['dsc2'];   
    $tprice2 = $qty2 * $price2; 
    $nilai_dsc2 = $tprice2 * $dsc2 / 100;
    $subtotal2 = $tprice2 - $nilai_dsc2;

    $item3 = $_POST['item3'];
    $size3 = $_POST['size3'];
    if ($item3 === "Toshiba" && $size3 === "1 TB") {
        $price3 = 52;
    } else if ($item3 === "Toshiba" && $size3 === "2 TB") {
        $price3 = 75;
    } else if ($item3 === "Toshiba" && $size3 === "4 TB") {
        $price3 = 150;
    } else if ($item3 === "Samsung" && $size3 === "1 TB") {
        $price3 = 50;
    } else if ($item3 === "Samsung" && $size3 === "2 TB") {
        $price3 = 70;
    } else if ($item3 === "Samsung" && $size3 === "4 TB") {
        $price3 = 145;
    } else if ($item3 === "Seagate" && $size3 === "1 TB") {
        $price3 = 51;
    } else if ($item3 === "Seagate" && $size3 === "2 TB") {
        $price3 = 73;
    } else if ($item3 === "Seagate" && $size3 === "4 TB") {
        $price3 = 152;
    } 
    $qty3 = $_POST['qty3'];    
    $dsc3 = $_POST['dsc3'];   
    $tprice3 = $qty3 * $price3; 
    $nilai_dsc3 = $tprice3 * $dsc3 / 100;
    $subtotal3 = $tprice3 - $nilai_dsc3;

    $total = $subtotal1 + $subtotal2 + $subtotal3;
    $pajak = 10 / 100;
    $nilai_pajak = $total * $pajak;
    $bayar = $total + $nilai_pajak;

?>
<!DOCTYPE html>

<head>
    <title></title>
</head>

<body>

    BL Store <br>(NIM_Nama_Anda)<br>
    <table border="1">
    <tr>
        <td>Item</td>
        <td>Size</td>
        <td>Qty</td>
        <td>Price</td>
        <td>Dsc</td>
        <td>SubTotal</td>
    </tr>
    <tr>
        <td><?php echo $item1 ?></td>
        <td><?php echo $size1 ?></td>
        <td><?php echo $qty1 ?></td>
        <td><?php echo $price1 ?></td>
        <td><?php echo $dsc1 ?></td>
        <td><?php echo number_format($subtotal1, 2)?></td>
    </tr>
    <tr>
        <td><?php echo $item2 ?></td>
        <td><?php echo $size2 ?></td>
        <td><?php echo $qty2 ?></td>
        <td><?php echo $price2 ?></td>
        <td><?php echo $dsc2 ?></td>
        <td><?php echo number_format($subtotal2, 2)?></td>
    </tr>
    <tr>
        <td><?php echo $item3 ?></td>
        <td><?php echo $size3 ?></td>
        <td><?php echo $qty3 ?></td>
        <td><?php echo $price3 ?></td>
        <td><?php echo $dsc3 ?></td>
        <td><?php echo number_format($subtotal3, 2)?></td>
    </tr>
    </table>
    <table>
    <tr>
        <td>Total:</td>
        <td><?php echo number_format($total , 2) ?></td>
    </tr>
    <tr>
        <td>Pajak:</td>
        <td><?php echo number_format($nilai_pajak , 2) ?></td>
    </tr>
    <tr>
        <td>Bayar:</td>
        <td><?php echo number_format($bayar , 2) ?></td>
    </tr>
    </table>
    Terima kasih sudah berbelanja

    <?php
    $isi = "$item1";
    $struk = fopen("struk.txt","w") or die("Struk tidak ditemukan.");
    fwrite($struk,"<center> BL Store <br>(NIM_Nama_Anda)<br></center>");
    fclose($struk);
    ?>
</body>

</html>