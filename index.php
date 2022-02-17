<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Войти в школьный партал</title>
</head>
<body>
    <div>
        <form class="form" action="PHP/auth.php" method="POST">
        <h1 class="form_title">Вход</h1>
        <div class="form_grup">  
            <label class="form_label"></label>
            <input class="form_input" placeholder=" Email " required type="email" name="email">
        </div>
        <div class="form_grup">
            <label class="form_label"></label>
            <input class="form_input" placeholder=" Пароль " required type="password" name="password">
        </div>
            <button class="form_button" type="submit">Войти</button>
            <a href="register.php" class="form_button">Регистрация</a>
        </form>
    </div>  
</body>
</html>