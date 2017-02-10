<?php
$product_name=$_POST["product_name"];
$product_type=$_POST["product_type"];
$product_details=$_POST["product_details"];
if (isset($_FILES['img'])) {
  $namefile = $_FILES['img']['name'];
  $type = $_FILES['img']['tmp_name'];
  $location = "img/";
  move_uploaded_file($type, $location.$namefile);
}
$new_location = $location.$namefile;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dark";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO product (id, product_name, produt_type, product_details, img)
VALUES ('', '$product_name', '$product_type', '$product_details', '$new_location')";

if ($conn->query($sql) === TRUE) {
    ?>
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
        <button type="button" name="button"><a href="add_product.php">Product Added</a></button>
      </body>
    </html>

<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
