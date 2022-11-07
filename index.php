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
<h5>Заняття 11. Наслідування класів </h5>
<hr>

<?php

    require_once __DIR__ . '/vendor/autoload.php';

    use App\User, App\Employee, App\Driver, App\Programmer, App\Student;

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
    echo ("Name: " . $newUser->getName() . " " . "Age: " . $newUser->getAge()); //display $newUser information
    echo "<br />";

    $newEmployee = new Employee(); //create an instance of the class
    $newEmployee->setName("Abdula");
    $newEmployee->setAge(54);
    echo ("Name: " . $newEmployee->getName() . " " . "Age: " . $newEmployee->getAge()); //display $newEmployee information
    echo "<br />";

    echo "<hr />";

 ?>
</body>
</html>