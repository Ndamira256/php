<?php

abstract class Person 
{
    protected string $name;
    protected int $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function introduce();
  
    
}

class Student extends Person
{
    private int $registrationNumber;
    private int $mathematicsMarks;
    private int $englishMarks;
    private int $scienceMarks;
    private static int $count = 0;
    


    public function __construct(string $name, int $age, int $registrationNumber, int $mathematicsMarks, int $englishMarks, int $scienceMarks)
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
    #[Override]
    public function introduce()
    {
        return "Hello my name is {$this->name}, i am {$this->age} years old" . PHP_EOL; 
    }
    public static function countStudents(){
        return self::$count++ . PHP_EOL;
    }
  
    public function greet()
    {
        throw new \Exception('Not implemented');
    }
}

Class Teacher extends Person
{
    private $schoolName;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce()
    {
        return "Hello my name is {$this->name} i am {$this->age} years old, i am a teacher" . PHP_EOL;
    }

    
    public function greet()
    {
        throw new \Exception('Not implemented');
    }


}

$student1 = new Student("Elvis", 17, 123, 95, 97, 90);
$student2 = new Student("John", 19, 124, 70, 60, 48);
$student3 = new Student("Doe", 18, 125, 50, 67, 70);
$student4 = new Student("Emma", 16, 126, 75, 77, 78);
$teacher = new Teacher("Mary", 34);



echo $teacher->introduce();
echo $student1->introduce();
echo $student1->displayDetails();
echo $student1->calculateAverage();
echo $student1->getGrade();
echo $student1->hasPassed();

echo $student2->introduce();
echo $student2->displayDetails();
echo $student2->calculateAverage();
echo $student2->getGrade();
echo $student2->hasPassed();

echo $student3->introduce();
echo $student3->displayDetails();
echo $student3->calculateAverage();
echo $student3->getGrade();
echo $student3->hasPassed();

echo $student4->introduce();
echo $student4->displayDetails();
echo $student4->calculateAverage();
echo $student4->getGrade();
echo $student4->hasPassed();

echo Student::countStudents();


