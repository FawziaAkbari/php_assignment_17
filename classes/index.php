<?php

class Student {
    public $present;
    public $status = false;

    public function __construct ($present) {
        $this->present = $present;
    } 

    public function isAttendence() {
        return $status;
    }

    
    public function attendence() {
        $this->status = true;
        return $status;
    }


}

$students = [+
    new Student("present"),
    new Student("upsent"),
    new Student("upsent"),
    new Student("present")
];

$students[0]->attendence();

require 'view.php';