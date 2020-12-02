<?php

require "./Models/Student.php";

$student = new Student;
$student->name = $_POST['name'];
$student->telphone = $_POST['telphone'];

$validate = $student->registerStudent();

if ($validate == true) {
    echo json_encode(true);
} else {
    echo json_encode(false);
}
