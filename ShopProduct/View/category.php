<?php require "../Controller/CategoryController.php"?>
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
        </tr>
        <?php $categoryDAO=new CategoryController(); $categories=$categoryDAO->index();?>
        <?php
            foreach($categories as $category){
                echo "<tr><td>$category->name</td></tr>";
            }
        ?>
    </table>
</body>
</html>