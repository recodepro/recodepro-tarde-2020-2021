<?php

require "./Models/Student.php";

header("Access-Control-Allow-Origin:*");    // Permite que outras aplicações acessem a API
header("Content-type: application/json");   //Indicação de arquivo JSON 

$students = Student::getAll();

echo json_encode($students);