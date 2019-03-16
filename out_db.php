<?php
include "variables.php";

$servername = "localhost";
$database = "hw_15";
$username = "root";
$password = "password";


$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Ура! Подключились! <br/>";

// сделал на быструю руку, не хватило времени

$result = mysqli_query($conn,"SELECT * FROM `table_hw_15`");
while ($myrow = mysqli_fetch_array($result)) {
    echo "Имя - ".$myrow ['name']."<br>";
    echo "Фамилия - ".$myrow ['surname']."<br>";
}

?>