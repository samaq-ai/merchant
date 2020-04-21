<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:samadb.database.windows.net,1433; Database = devopsdb", "master", "Qcard420422468Dd");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "master", "pwd" => "Qcard420422468Dd", "Database" => "devopsdb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:samadb.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>