<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";  // membuat variabel servername yang menyimpan nilai "localhost"
$username = "root"; // membuat variabel servername yang menyimpan nilai "root"
$password = ""; // membuat variabel servername yang menyimpan nilai ""
$dbname ="myDB";

// create conection
$conn = mysqli_connect ($servername, $username, $password, $dbname);
// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql ="SELECT kode, negara, champion FROM liga";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "kode: " . $row["kode"]. " - Negara: " . $row["negara"]. " ". $row
        ["champion"]. "<br>";
    }
} else {
    echo "0 result";
}

mysqli_close($conn);    
?>

</body>
</html>
