<html>
<head>
    <title>Koneksi Databse MySQL</title>
</head>
<body>
    <h1>Demo Koneksi database MySQL</H1>
    <?php
    $con = mysqli_connect("localhost","root","","mydb");
    
    // Check connection
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();


    }
    exit();
    ?>

</body>
</html>
