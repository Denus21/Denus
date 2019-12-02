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

    if($result = $mysqli->query('SELECT u.name, u.login, u.password, u.date_of_birth, u.age, p.nickname, p.rank, p.num_matches_won FROM user AS u INNER JOIN player AS p ON (u.player_id=p.id)')) {

        printf("Список: <br><br>");
        printf("<table><th>Ім'я</th><th>Логін</th><th>Пароль</th><th>День народження</th><th>Вік</th><th>Нік</th><th>Ранг</th><th>Кількість виграних матчів</th></tr>"); 
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['name'], $row['login'], $row['password'], $row['date_of_birth'], $row['age'], $row['nickname'], $row['rank'], $row['num_matches_won']); 
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
