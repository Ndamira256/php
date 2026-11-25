<?php

class Student
{
    private $name;
    private $age;
    private $registrationNumber;
    private $mathematicsMarks;
    private $englishMarks;
    private $scienceMarks;


    public function __construct($name, $age, $registrationNumber, $mathematicsMarks, $englishMarks, $scienceMarks)
    {
        $this->name = $name;
        $this->age = $age;
        $this->registrationNumber = $registrationNumber;
        $this->mathematicsMarks = $mathematicsMarks;
        $this->englishMarks = $englishMarks;
        $this->scienceMarks = $scienceMarks;
    }

    public function displayDetails()
    {
        return
            "=========================" . PHP_EOL .
            "STUDENT REPORT" . PHP_EOL .
            "=========================" . PHP_EOL .
            "Name: " . $this->name . PHP_EOL .
            "Age: " . $this->age . PHP_EOL .
            "Registrastion Number: " . $this->registrationNumber . PHP_EOL .
            " " . PHP_EOL .
            "Mathematics Marks: " . $this->mathematicsMarks . PHP_EOL .
            "English Marks: " . $this->englishMarks . PHP_EOL .
            "Science Marks: " . $this->scienceMarks . PHP_EOL .
            " " . PHP_EOL;
    }

    public function calculateAverage()
    {
        $total = $this->mathematicsMarks + $this->englishMarks + $this->scienceMarks;
        return "Average: " . round($total / 3) . PHP_EOL;
    }

    public function getGrade()
    {
        $total = $this->mathematicsMarks + $this->englishMarks + $this->scienceMarks;
        $average = round($total / 3);

        if ($average >= 80 && $average <= 100) {
            $grade = "A";
        } elseif ($average >= 70 && $average < 80) {
            $grade = "B";
        } elseif ($average >= 60 && $average < 70) {
            $grade = "C";
        } elseif ($average >= 50 && $average < 60) {
            $grade = "D";
        } else {
            $grade = "F";
        }
        return "Grade: " . $grade . PHP_EOL;
            
    }
    public function hasPassed()
    {
        $total = $this->mathematicsMarks + $this->englishMarks + $this->scienceMarks;
        $average = $total / 3;

        if($average > 50){
            return "Status: PASSED" . PHP_EOL .
            "=========================" . PHP_EOL;
        }
        else{
            return "Status: FAILED" . PHP_EOL . 
            "=========================" . PHP_EOL;
        }

    }
}

$student = new Student("Pancras", "21", "123", "95", "97", "99");

echo $student->displayDetails();
echo $student->calculateAverage();
echo $student->getGrade();
echo $student->hasPassed();
