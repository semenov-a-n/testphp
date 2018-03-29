<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
</head>
<body>
<form action="/addRecord.php" metod="get">
    <textarea id="text" name="txt" required></textarea>
    <br>
    <br>
    <input type="submit" value="Отправить сообщение">
</form>
<br>
<a href="/list.php?page=1">Список сообщений</a>
</body>
</html>