<?php

namespace App;

class Student extends User
{
    private $course;

    public function setName($name)
    {
        if (strlen($name) < 10) {
            //assign a name using the method of the parent class
            parent::setName($name);
        }
    }

    public function setAge($age)
    {
        if ($age <= 25)
        {
            parent::setAge($age);
        }
    }
    public function getCourse()
    {
        return $this->course;
    }
    public function setCourse($course)
    {
        $this->course = $course;
    }
}
