<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Lab05</title>
    
    <style>

        table, th, tr, td{
    
            border: 2px solid black;
    
         }
    </style>
</head>

<body>

<?php 

Class Courses 
{
public  $CourseCode;
public  $CourseName;
public $CourseDescription;
public $Grade; 

public function setCourseCode($CourseCode)
{
$this->CourseCode = $CourseCode;
}

public function getCourseCode()
{
return $this->CourseCode;
}

public function setCourseName($CourseName)
{
$this->CourseName = $CourseName;
}
public function getCourseName()
{
return $this->CourseName;
}

public function setCourseDescription($CourseDescription)
{
$this->CourseDescription = $CourseDescription;
}

public function getCourseDescription()
{
return $this->CourseDescription;
}
public function setGrade($Grade)
{
$this->Grade = $Grade;
}

public function getGrade()

{

return $this->Grade;


}

}

$MyClass1 = new courses();

$MyClass1->setCourseCode  ('202');

$MyClass1->setCourseName('SWE');

$MyClass1->setCourseDescription('This course is designed to give students the opportunity to enhance and enrich their skills in Web programming.');

$MyClass1->setGrade("A.");




echo  "<table style=width:100%>";
echo "<tr>";
echo "<th>". $MyClass1->getCourseCode(); "</th>";
echo "<th>". $MyClass1->getCourseName(); "</th>";
echo "<th>". $MyClass1->getCourseDescription(); "</th>";
echo "<th>". $MyClass1->getGrade(); "</th>";
echo "</tr>";
"</table>";



$MyClass2 = new courses();

$MyClass2->setCourseCode  ('305');

$MyClass2->setCourseName('PHY');

$MyClass2->setCourseDescription('Physics II.');

$MyClass2->setGrade("D.");



echo  "<table style=width:100%>";
echo "<tr>";
echo "<th>". $MyClass2->getCourseCode(); "</th>";
echo "<th>". $MyClass2->getCourseName(); "</th>";
echo "<th>".  $MyClass2->getCourseDescription(); "</th>";
echo "<th>". $MyClass2->getGrade(); "</th>";
echo "</tr>";
"</table>";

echo "<br>";

$MyClass3 = new courses();

$MyClass3->setCourseCode  ('204');

$MyClass3->setCourseName('MTH 204');

$MyClass3->setCourseDescription('Calculus II.');

$MyClass3->setGrade("B+.");

echo "<br>";

echo  "<table style=width:100%>";
echo "<tr>";
echo "<th>". $MyClass3->getCourseCode(); "</th>";
echo "<th>".  $MyClass3->getCourseName(); "</th>";
echo "<th>".  $MyClass3->getCourseDescription(); "</th>";
echo "<th>". $MyClass3->getGrade(); "</th>";
echo "</tr>";
"</table>";
echo "<br>";

?>

</body>
</html>