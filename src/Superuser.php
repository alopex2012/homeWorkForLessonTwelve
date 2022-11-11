<?php

namespace App;

class Superuser
{
    private $name;
    private $surname;
    private $birthday;
    private $age;

    public function __construct($name, $surname, $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->age = $this->calculateAge($birthday);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function getAge()
    {
        return $this->age;
    }

    private function calculateAge($birthday)
    {
        //split the string with the date of birth into components and add to the array
        $dateOfBirth = explode("-", $birthday);
        //check if the date of birth is less than the current date
        if (($dateOfBirth[1] <= date("m")) && ($dateOfBirth[2] <= date("d"))) {
            return date("Y") - $dateOfBirth[0];
        } else {
            return date("Y") - $dateOfBirth[0] - 1;
        }
    }

}