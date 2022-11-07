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
//display $newUser information
echo("Name: " . $newUser->getName() . " " . "Age: " . $newUser->getAge());
echo "<br />";

$newStudent = new Student(); //create an instance of the class
$newStudent->setName("Ahmad");
$newStudent->setAge(22);
//display $newStudent information
echo("Name: " . $newStudent->getName() . " " . "Age: " . $newStudent->getAge());

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

//create an instance of the class
$newSuperuser = new Superuser("Ibrahim", "Sherhani", "1973-07-03");
//display $newSuperuser information
echo("Name: " . $newSuperuser->getName() . " " . "Birthday: " . $newSuperuser->getBirthday() . " " . "Age: " . $newSuperuser->getAge());
echo "<br />";
$newSuperuser1 = new Superuser("Ilhan", "Chambek", "1988-12-22");
//display $newSuperuser1 information
echo "Name: " . $newSuperuser1->getName() . " " . "Birthday: " . $newSuperuser1->getBirthday() . " " . "Age: " . $newSuperuser1->getAge();
echo "<hr />";

echo "<pre>",
"
    8.	Зробіть клас Employee, який успадковуватиметься від класу User. 
    Нехай новий клас має властивість salary, в якому зберігається зарплата працівника.
    Зарплата повинна передаватися четвертим параметром конструктор об'єкта. 
    Зробіть також геттер для цієї властивості.    ",
"</pre>";

//create an instance of the class
$newEmployee = new Employee("Mirza", "Immadulo", "1990-09-11", 3500);
//display $newEmployee information
echo("Name: " . $newEmployee->getName() . " " . "Birthday: " . $newEmployee->getBirthday() . " " . "Salary: " . $newEmployee->getSalary());

echo "<hr />";

echo "<pre>",
"
    9.	Зробіть клас Product, у якому будуть такі характеристики: name, price.
    10.	Створіть об'єкт класу Product, запишіть його у змінну $ product1.
    11.	Надайте значення змінної $ product1 у змінну $ product2. Перевірте те, що обидві змінні посилаються
     на той самий об'єкт.",
"</pre>";

$product1 = new Product("Car", 20000); //create an instance of the class
echo("Name product1: " . $product1->getName() . " " . "Price product1: " . $product1->getPrice());
echo "<br />";
$product2 = $product1;
echo("Name product2: " . $product2->getName() . " " . "Price product2: " . $product2->getPrice());

echo "<hr />";

?>
</body>
</html>