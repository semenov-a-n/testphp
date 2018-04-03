<?

session_start();


?>

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

<? var_dump($_SESSION); ?>
<a href="/list.php?page=1">Список сообщений</a>
<script data-skip-moving="true">
    (function (w, d, u) {
        var s = d.createElement('script');
        s.async = 1;
        s.src = u + '?' + (Date.now() / 60000 | 0);
        var h = d.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s, h);
    })(window, document, 'https://bitrix24.sts-hydro.ru/upload/crm/site_button/loader_2_n5a6bd.js');
</script>
</body>
</html>