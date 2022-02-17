<?php
$name = filter_var(trim($_POST['name']), //берутся данные из поля name также фильтруется (trim удаляет ненужные пробелы)
FILTER_SANITIZE_STRING); //принимает тип фильтрации


$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);

$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);



$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);


//Проверка

if(mb_strlen($name) < 5 || mb_strlen($name) > 90) {
    echo "Недопустимая длинна имени";
    exit();
} else if(mb_strlen($login) < 3 || mb_strlen($login) > 50) {
    echo "Недопустимая длинна логина";
    exit();
}
else if(mb_strlen($password) < 3 || mb_strlen($password) > 20) {
    echo "Недопустимая длинна пароля (от 3 до 20 символов)";
    exit();
}


$password = md5($password."qwerty"); //создает хеш и создает соль

$mysql = new mysqli('localhost', 'root', 'root', 'case'); //(Подключение к БД) тут пишем хост, имя пользователя пароль, имя бд
$mysql->query("INSERT INTO `user` (`name`, `login`, `email`, `password`)
 VALUES('$name', '$login', '$email', '$password') ");

 $mysql->close();

 header('Location: /'); //Переход на выбранную страницу

?>