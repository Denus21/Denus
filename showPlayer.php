<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Player</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Player</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'voloshenyk'); 
    $mysqli->set_charset("utf8"); 
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM player')) {   

        printf("Список музики: <br><br>");
        printf("<table><tr><th>ID</th><th>Нік</th><th>Ранг</th><th>Кількість виграних матчів</th><th>ID карти</th><th>ID улюбленої зброї</th></tr>");
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['nickname'], $row['rank'], $row['num_matches_won'], $row['map_id'], $row['favorite_weapon_id']); 
        };
        printf("</table>");
        
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertPlayerForm.php">Вставити рядок</a><br></li>
		<li><a href="updatePlayerForm.php">Редагувати рядок</a><br></li>
		<li><a href="deletePlayerForm.php">Видалити рядок</a><br></li>
        <li><a href="showZvitP.php">Звіт</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
