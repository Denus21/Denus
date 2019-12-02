<?php

$mysqli = new mysqli('localhost', 'root', '', 'voloshenyk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$nickname = $_POST['nickname']; $rank = $_POST['rank']; $num_matches_won = $_POST['num_matches_won']; $map_id = $_POST['map_id']; $favorite_weapon_id = $_POST['favorite_weapon_id']; $id = $_POST['id'];

$sql = "UPDATE player SET nickname='$nickname', rank='$rank', num_matches_won='$num_matches_won', map_id='$map_id', favorite_weapon_id='$favorite_weapon_id' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showPlayer.php")
?>
