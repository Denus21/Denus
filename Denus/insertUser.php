<?php

$mysqli = new mysqli('localhost', 'root', '', 'voloshenyk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$player_id = $_POST['player_id']; $login = $_POST['login']; $password = $_POST['password']; $name = $_POST['name']; $date_of_birth = $_POST['date_of_birth']; $age = $_POST['age']; 

$sql = "INSERT INTO user (id, player_id, login, password, name, date_of_birth, age) VALUES ('', '$player_id', '$login', '$password', '$name', '$date_of_birth', '$age')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showUser.php")
?>
