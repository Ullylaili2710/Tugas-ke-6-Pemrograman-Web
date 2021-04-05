<?php
$servername = "localhost"; // membuat variabel servername yang menyimpan nilai "localhost"
$username = "root"; // membuat variabel servername yang menyimpan nilai "root"
$password = ""; // membuat variabel servername yang menyimpan nilai ""
$dbname ="myDB"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connection
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO liga (kode, negara, champion) 
VALUES ('Jer', 'Jerman', '4')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
     // jika mysqli_query berhasil mengeksekusi variabel conn dan sql maka menampilkan pesan"new record created successfully"
} else {
    echo "error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
