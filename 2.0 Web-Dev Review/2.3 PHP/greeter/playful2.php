<?php

$my_student = ["Marvin",110785,"Nicholas","Wisdom"];
#print_r($my_students);

$name = "Saruni";
//Using an array
$my_student = array(104414,$name);


var_dump($my_students);
echo "<br>";
echo "<br>";

//Associative array-expliicitly define the keys
$student_list = [
  113361 => "Ian",
  110486 => 'Wachira',
  11689 => "Oyaro",
];


echo $my_student[1];
$full_name = "Saruni Muthui";
$my_students[1] = $full_name;

echo $my_students[1];


//remove
unset($my_students);

var dump($my_students);

$array1 =[];
$array2 =['one'];

var_dump(inset($student_list[11649]));
echo '<br>';
var_dump(inset($array3));

#one-d, n-d
$student_list_kcse = [
[1,'index-1'.'Don'],
[2,'index-2'.'Mark'],
[3,'index-3'.'Joan']
];


$d_3 = [
  ["Stephen",[1,4]],
  ["Thiarara",[1,5]],
];
echo$student_list_kcse[2][2];
echo$student_list_kcse[1][2];

echo$d_3[1][1][1];
