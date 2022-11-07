<?php

namespace App;

class Student extends User
{
    private $course;
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
