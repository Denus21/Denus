<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Звіт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Звіт</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'voloshenyk');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT p.nickname, p.rank, p.num_matches_won, map.map_name, f.name, f.damage FROM player AS p INNER JOIN map ON (p.map_id=map.id) INNER JOIN favorite_weapon AS f ON (p.favorite_weapon_id=f.id)')) {

        printf("Список: <br><br>");
        printf("<table><th>Нік</th><th>Ранг</th><th>Кількість виграних матчів</th><th>Карта</th><th>Улюблена зброя</th><th>Урон</th></tr>"); 
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['nickname'], $row['rank'], $row['num_matches_won'], $row['map_name'], $row['name'], $row['damage']); 
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
