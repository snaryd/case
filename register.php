<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Регистрация</title>
</head>
<body>
    <form class="form" action="PHP/check.php" method="POST">
        <h1 class="form_title">Регистрация</h1>
            <div class="form_grup">
                <label class="form_label"></label>
                <input class="form_input" placeholder=" ФИО " required="" type="name" name="name" >
            </div>
            <div class="form_grup">
                <label class="form_label"></label>
                <input class="form_input" placeholder=" Логин " required="" type="login" name="login">
            </div>
            <div class="form_grup">
                <label class="form_label"></label>
                <input class="form_input" placeholder=" Email " required="" type="email" name="email">
            </div>
            <div class="form_grup">
                <label class="form_label"></label>
                <input class="form_input" placeholder=" Пароль " required="" type="password" name="password">
            </div>
            <div class="form_grup">
                <label class="form_label"></label>
                <input class="form_input" placeholder=" Повторите пароль " required="" type="password">
            </div>
            <div class="form_grup">
                <p><input type="checkbox" name="a" required="" value="1680" > Согласие на обработку персональный данных</p>
            </div>
            <button class="form_button" type="submit">Зарегистрироваться</button>
            <br>
            <br>
            <a href="index.php" class="form_button" > Авторизоваться</a>
        </form>
</body>
</html>