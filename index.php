<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Work for Lesson 12</title>
    <style>
        body {
            color: darkblue;
        }

        pre {
            color: black;
        }
    </style>
</head>
<body>
<h5>Заняття 12. Перезапис методів батька у класі нащадка </h5>
<hr>

<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\User, App\Employee, App\Product, App\Superuser, App\Student;

echo "<pre>",
"
    1.	Модифікуйте код класу User так, щоб у методі setName виконувалася перевірка того, 
    що довжина імені перевищує 3 символи.
    2.	Додайте до класу Student метод setName, в якому буде виконуватися перевірка того, 
    що довжина імені більше 3-х символів і менше 10 символів. Нехай цей метод використовує метод setName
    свого батька, щоб виконати частину перевірки.
    3.	Не підглядаючи в мій код, реалізуйте такий же клас Student, що успадковує від User.
    ",
"</pre>";

$newUser = new User(); //create an instance of the class
$newUser->setName("Ahmet");
$newUser->setAge(28);
echo("Name: " . $newUser->getName() . " " . "Age: " . $newUser->getAge()); //display $newUser information

echo "<br />";

echo "<hr />";

echo "<pre>",
"
    4.	Зробіть клас User, у якому будуть такі властивості лише читання: name і surname. Початкові значення 
    цих властивостей повинні встановлюватись у конструкторі. Зробіть також гетери цих властивостей.
    5.	Модифікуйте попереднє завдання так, щоб третім параметром конструктор передавалась дата 
    народження працівника у форматі рік-місяць-день. Запишіть її у властивість birthday. 
    Зробіть геттер для цієї властивості.
    6.	Модифікуйте попереднє завдання так, щоб був приватний метод calculateAge, який параметром 
    прийматиме дату народження, а повертатиме вік з урахуванням того, чи був уже день народження цього року, чи ні.
    7.	Модифікуйте попереднє завдання так, щоб метод calculateAge викликався в конструкторі об'єкта, 
    розраховував вік користувача та записував його в приватну властивість age. 
    Зробіть геттер для цієї властивості.
    ",
"</pre>";

$newSuperuser = new Superuser(); //create an instance of the class

echo "<br />";

echo "<hr />";

echo "<pre>",
"
    8.	Зробіть клас Employee, який успадковуватиметься від класу User. 
    Нехай новий клас має властивість salary, в якому зберігається зарплата працівника.
    Зарплата повинна передаватися четвертим параметром конструктор об'єкта. 
    Зробіть також геттер для цієї властивості.    ",
"</pre>";

$newEmployee = new Employee(); //create an instance of the class

echo("Name: " . $newEmployee->getName() . " " . "Age: " . $newEmployee->getAge()); //display $newEmployee information
echo "<br />";

echo "<hr />";

echo "<pre>",
"
    9.	Зробіть клас Product, у якому будуть такі характеристики: name, price.
    10.	Створіть об'єкт класу Product, запишіть його у змінну $ product1.
    11.	Надайте значення змінної $ product1 у змінну $ product2. Перевірте те, що обидві змінні посилаються
     на той самий об'єкт.",
"</pre>";

$newProduct = new Product(); //create an instance of the class
echo "<br />";

echo "<hr />";

?>
</body>
</html>