<?php require "../Controller/ProductController.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListProduct</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Ten</th>
            <th>Gia</th>
        </tr>
        <?php $productDAO=new ProductController(); $products=$productDAO->index();?>
        <?php
            for($i=0; $i<sizeof($products); $i++){ ?>
            <tr>
                <td><?php echo($products[$i]->getName())?></td>
                <td><?php echo($products[$i]->getPrice())?></td>
            </tr>
                
        <?php    }
        ?>
    </table>
</body>
</html>