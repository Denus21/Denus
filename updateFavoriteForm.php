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

<form action="updateFavorite.php" method="post">
        <label>ID зброї, яку змінюємо</label><input name="id" type="text"><br>
        <label>Нова назва</label><input name="name" type="text"><br>
        <label>Новий урон</label><input name="damage" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>