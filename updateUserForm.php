<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showUser.php")    
    ?>

<form action="updateUser.php" method="post">
        <label>ID аккаунта, який редагується</label><input name="id" type="text"><br>
        <label>ID гравця</label><input name="player_id" type="text"><br>
        <label>Логін</label><input name="login" type="text"><br>
        <label>Пароль</label><input name="password" type="text"><br>
        <label>Ім'я</label><input name="name" type="text"><br>
        <label>День народження</label><input name="date_of_birth" type="text"><br>
        <label>Вік</label><input name="age" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>