<?php
// Base class
class Person {
    public $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function greet() {
        echo "Hello, my name is " . $this->name . "\n";
    }
}

// Inheritance
class Student extends Person {
    private $rollNo;
    public $semester;

    public function __construct($name, $age, $rollNo, $semester) {
        parent::__construct($name, $age);
        $this->rollNo = $rollNo;
        $this->semester = $semester;
    }

    public function showInfo() {
        echo "Name: " . $this->name . "\n";
        echo "Roll No: " . $this->rollNo . "\n";
        echo "Semester: " . $this->semester . "\n";
    }
}

// Trait
trait Logger {
    public function log($message) {
        echo "[LOG]: " . $message . "\n";
    }
}

class Teacher extends Person {
    use Logger;

    public function teach($subject) {
        echo $this->name . " is teaching " . $subject . "\n";
        $this->log("Class started for " . $subject);
    }
}

// Using the classes
$student1 = new Student("Laiba Gul", 21, "F23-0390", 6);
$student1->greet();
$student1->showInfo();

echo "\n";

$teacher1 = new Teacher("Dr. Ahmed", 40);
$teacher1->greet();
$teacher1->teach("Software Design");