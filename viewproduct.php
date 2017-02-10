<?php
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

$sql = "SELECT * FROM product";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <?php
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<div class='row'><div class='col-md-3'>";?>
                <img  src="<?php echo $row["img"]?>" height="225px" width="225px">
<?php
  echo "</div><div class='col-md-5'><h4>".$row["product_name"]."</h4><h5>".$row["produt_type"]."</h5><p>".
  $row["product_details"]."</p></div></div><hr><a href = 'edit.php?edit=$row[id]'>Edit</a>";
          }
      } else {
          echo "0 results";
      }
      $conn->close();
      ?>
    </div>
  </body>
</html>
