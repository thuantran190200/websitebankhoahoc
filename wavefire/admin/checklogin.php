<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dcxemay";

$myusername=$_POST['username'];

$mypassword=$_POST['password'];


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Ten, Chucvu FROM nhanvien WHERE Ten='$myusername' and Chucvu='$mypassword'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["Ten"].  $row["Chucvu"]. "<br>";
    header("location:admin/index.php");
  }
} else {
  echo "0 results";
}

mysqli_close($conn);


?>