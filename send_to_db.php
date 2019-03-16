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

$sql = "INSERT INTO table_hw_15 (name, 
surname, 
gender,
age,
gender_2,
date_of_birth,
marital_status,
social_status,
residence,
relaxation,
forms,
books,
comments,
position,
placeholder,
email,
spam,
complexity) 
VALUES (
'$name',
'$surname',
'$gender',
'$age',
'$gender_2',
'$date_of_birth',
'$marital_status',
'$social_status',
'$residence',
'$relaxation',
'$forms',
'$books',
'$comments',
'$position',
'$placeholder',
'$email',
'$spam',
'$complexity'
)";
if (mysqli_query($conn, $sql)) {
    echo "Данные внесены. Все ок! <br/> <a href='out_db.php'>Вывод результата</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>