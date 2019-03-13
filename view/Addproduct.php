<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add products - Admin</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../Scripts/addproduct.js"></script>


</head>
<body>
    <div class="container">
        <br />
        <h3 align="center">Add a new products here!</a></h3>
        <h5 align="center">Insert one product at a time</a></h5>
        <br />
        <br />
        <br />
        <div align="right" style="margin-top:5px;">
            <a href="../view/adminPage.php" name="backToAdmin" id="backToAdmin" class="btn btn-warning btn-xs">Back to Admin Page</a>
        </div>
        <br />
        
        <div align="right" style="margin-bottom:5px;">
            <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
        </div>
        <br />
        <form method="post" id="user_form">
            <div class="table-responsive">
            <table class="table table-striped table-bordered" id="user_data">
                <tr>
                    <th>Category ID</th>
                    <th>Product Name</th>
                    <th>Unit In Stock</th>
                    <th>Unit Price</th>
                    <th>Quentity Per Unit</th>
                    <th>Image</th>
                    <th>Details</th>
                    <th>Remove</th>
                </tr>
            </table>
            </div>
            <div align="center">
            <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Insert" />
            </div>
        </form>
        <br />
    </div>
    <div id="user_dialog" title="Add Data">
        <div class="form-group">
            <label for="sel1">Select Category ID</label>
            <select class="form-control" name="category_id" id="category_id">
                <option value="1">1 - Men</option>
                <option value="2">2 - Women</option>
                <option value="3">3 - Children</option>
                <option value="4">4 - Accessories</option>
            </select>
            <span id="error_category_id" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label>Enter: Product name</label>
            <input type="text" name="product_name" id="product_name" class="form-control" />
            <span id="error_product_name" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label>Enter: Unit in stock</label>
            <input type="number" name="unit_in_stock" id="unit_in_stock" class="form-control" />
            <span id="error_unit_in_stock" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label>Enter: Unit Price in KR</label>
            <input type="text" name="unit_price" id="unit_price" class="form-control" />
            <span id="error_unit_price" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label>Enter: Quentity per Unit</label>
            <input type="number" name="quentity_per_unit" id="quentity_per_unit" class="form-control" />
            <span id="error_quentity_per_unit" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label>Enter: Image URL</label>
            <input type="text" name="image_url" id="image_url" class="form-control" />
            <span id="error_image_url" class="text-danger"></span>
        </div>
        <div class="form-group" align="center">
            <input type="hidden" name="row_id" id="hidden_row_id" />
            <button type="button" name="save" id="save" class="btn btn-info">Spara</button>
        </div>
    </div>
    <div id="action_alert" title="Action">
    </div>
</body>
</html>
