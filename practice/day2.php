<?php
// Variables
$name = "Laiba";
$semester = 6;
$gpa = 3.8;

echo "Student Name: " . $name . "\n";
echo "Semester: " . $semester . "\n";

// Operators
$a = 15;
$b = 4;
echo "Sum: " . ($a + $b) . "\n";
echo "Remainder: " . ($a % $b) . "\n";

// Loops - For loop
echo "For Loop Output: ";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "\n";

// Loops - Foreach with array
$subjects = ["Database", "Theory of Automata", "AI", "Software Design"];
echo "Subjects:\n";
foreach ($subjects as $subject) {
    echo "- " . $subject . "\n";
}

// Associative Array
$student = [
    "name" => "Laiba Gul",
    "rollNo" => "F23-0390",
    "section" => "SE-6th A"
];
echo "Roll No: " . $student["rollNo"] . "\n";

// Function
function calculateGrade($marks) {
    if ($marks >= 90) return "A+";
    elseif ($marks >= 80) return "A";
    elseif ($marks >= 70) return "B";
    else return "C";
}

echo "Grade for 85 marks: " . calculateGrade(85) . "\n";