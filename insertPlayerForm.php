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
        include("showPlayer.php")    
    ?>

    <form action="insertPlayer.php" method="post">
        <label>ID гравця</label><input name="id" type="text"><br>
        <label>Нік</label><input name="nickname" type="text"><br>
        <label>Ранг</label><input name="rank" type="text"><br>
        <label>Кількість виграних матчів</label><input name="num_matches_won" type="text"><br>
        <label>ID карти</label><input name="map_id" type="text"><br>
        <label>ID улюбленої зброї</label><input name="favorite_weapon_id" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
