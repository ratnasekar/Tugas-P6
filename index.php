<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h1>BL Store</h1>
    <form action="proses.php" method="post">
        <table>
            <tr>
                <td>ITEM</td>
                <td>SIZE</td>
                <td>QTY</td>
                <td>DSC(%)</td>
            </tr>
            <?php
              $item_opt = array("Toshiba", "Samsung", "Seagate");
              $size_opt = array("1 TB", "2 TB", "4 TB");
            ?>
            <tr>
                <td>
                    <select name="item1">                        
                        <?php
                        foreach ($item_opt as $item) {
                            echo '<option value="' . $item . '" selected>' . $item . '</option>';
                        }
                        ?>
                    </select>
                </td>
                <td>
                    <select name="size1">
                        
                        <?php                       
                        foreach ($size_opt as $size) {
                            echo '<option value="' . $size . '" selected>' . $size . '</option>';
                        }
                        ?>
                    </select>
                </td>
                <td><input type="number" name="qty1"></td>
                <td><input type="number" name="dsc1" ></td>
            </tr>
            <tr>
                <td>
                    <select name="item2">                        
                        <?php
                        foreach ($item_opt as $item) {
                            echo '<option value="' . $item . '" selected>' . $item . '</option>';
                        }
                        ?>
                    </select>
                </td>
                <td>
                    <select name="size2">
                        
                        <?php                       
                        foreach ($size_opt as $size) {
                            echo '<option value="' . $size . '" selected>' . $size . '</option>';
                        }
                        ?>
                    </select>
                </td>
                <td><input type="number" name="qty2"></td>
                <td><input type="number" name="dsc2"></td>
            </tr>
            <tr>
                <td>
                    <select name="item3">                        
                        <?php
                        foreach ($item_opt as $item) {
                            echo '<option value="' . $item . '" selected>' . $item . '</option>';
                        }
                        ?>
                    </select>
                </td>
                <td>
                    <select name="size3">
                        
                        <?php                       
                        foreach ($size_opt as $size) {
                            echo '<option value="' . $size . '" selected>' . $size . '</option>';
                        }
                        ?>
                    </select>
                </td>
                <td><input type="number" name="qty3"></td>
                <td><input type="number" name="dsc3"></td>
            </tr>
            
            
        </table>
        <input type="submit" name="" value="Cetak">
    </form>
</body>

</html>