<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Вход в админ-панель</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
    <body>
    <form action="admin/admin.php" method="POST">
        <div class="admin">
        <h2>Вход в админ-панель</h2><br>
            <input type="text" class="field" name="login" placeholder="Введите логин"><br>
            <input type="text" class="field" name="password" placeholder="Введите пароль"><br><br>
            <button type="submit" class="btn">Войти</button>
        </div>
    </form>
    </body>
</html>