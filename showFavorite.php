<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Favorite</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Favorite</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'voloshenyk');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM favorite_weapon')) { 

        printf("Список зброї: <br><br>");
        printf("<table><tr><th> ID </th><th> Назва зброї </th><th> Урон </th></tr>");
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'],  $row['name'], $row['damage']);
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertFavoriteForm.php">Вставити рядок</a><br></li>
		<li><a href="updateFavoriteForm.php">Редагувати рядок</a><br></li>
        <li><a href="deleteFavoriteForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
