<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
    <h2>Add Product</h2>
    <form action="addproductdb.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
      <table class="table table-bordered">
        <tr>
          <td>Product Name:</td>
          <td><input type="text" name="product_name"/></td>
        </tr>
        <tr>
          <td>Product Type:</td>
          <td><input type="text" name="product_type"/></td>
        </tr>
        <tr>
          <td>Product Details:</td>
          <td><textarea name="product_details" rows="8" cols="80"></textarea></td>
        </tr>
        <tr>
          <td>Product Image:</td>
          <td><input type="file" name="img"/></td>
        </tr>
        <tr>
          <td></td>
          <td><input class="btn btn-danger" type="submit" name="submit" value="Add Product" onclick="myFunction"/></td>
        </tr>
      </table>
        </div>
    </form>

  </div>
  </body>
</html>
