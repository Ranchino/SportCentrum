<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update unit in stock</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css-files/updateStockMobile.css">
    <link rel="stylesheet" href="../css-files/updateStockDesktop.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../Scripts/updateStock.js"></script>

</head>


<body>

        <h1><b>Admin Page for products</b> </h1>
    <br>
    <br>
    <div class="button-container">
    <a href="../view/adminPage.php">Go Back</a>
    <button onclick=listAllProducts()>List of all Products</button>
</div>
    <br>
    <div id="tempForm" style='text-align:center'> 
        <template id="productTemp">
            <h3><u>All Products on webPage:</u></h3>
            <input type="number" placeholder="Select product ID" id="productID">
            <input type="number" placeholder="Change unit in Stock" id="unitInStock">
            <button onclick=updateProductInStock()>Change product in Stock</button>
            <table id ="products">
                <tr>
                    <th>Product ID</th>
                    <th>category ID</th>
                    <th>Product Name</th>
                    <th>Unit In Stock</th>
                    <th>Unit Price</th>
                    <th>Quantity Per Unit</th>
                    <th>Picture Url</th>

                </tr>
            </table>
        </template>
    </div>

</body>
</html>

