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
        include("showFavorite.php")    
    ?>

    <form action="insertFavorite.php" method="post">
        <label>Назва зброї</label><input name="name" type="text"><br>
        <label>Її урон</label><input name="damage" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
