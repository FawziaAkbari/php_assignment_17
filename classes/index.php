<?php

class Student {
    public $present;
    public $status = false;

    public function __construct ($present) {
        $this->present = $present;
    } 

    public function isAttendence() {
        return $this->status;
    }

    
    public function attendence() {
         $this->status = true;
        
    }
}

$students = [
    new Student("present"),
    new Student("upsent"),
    new Student("upsent"),
    new Student("present")
];


// $students = [
//     new Student("Fawzia"),
//     new Student("Asila"),
//     new Student("Najma"),
//     new Student("Zahra"),
//     new Student("Somaya"),
//     ]
// ;

$students[0]->attendence();
$students[3]->attendence();
// echo "<pre>";
// var_dump($students);

require 'view.php';