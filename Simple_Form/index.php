<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="register.php">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="pass">
        <input type="password" name="repeat_password" placeholder="repeat password">
        <input type="email" name="email" placeholder="email">
        <button type="submit">Зарегистрироваться</button>
    </form>
    <br>
    <br>
    <br>
    <form method="post" action="login.php">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Войти</button>
    </form>
</body>
</html>
