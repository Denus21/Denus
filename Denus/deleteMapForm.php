<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Видалення даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showMap.php")    
    ?>

<form action="deleteMap.php" method="post">
        <label>ID карти, яку видаляємо</label><input name="id" type="text"><br>
        <input type="submit" value="Видалити рядок">
</form>

</body>
</html>