<?php

$mysqli = new mysqli('localhost', 'root', '', 'voloshenyk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id']; $player_id = $_POST['player_id']; $login = $_POST['login']; $password = $_POST['password']; $name = $_POST['name']; $date_of_birth = $_POST['date_of_birth']; $age = $_POST['age']; 

$sql = "UPDATE user SET player_id='$player_id', login='$login', password=$password, name='$name', date_of_birth='$date_of_birth', age='$age' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showUser.php")
?>
