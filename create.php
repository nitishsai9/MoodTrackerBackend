<?php

include "db.php";


$arr = json_decode(file_get_contents('php://input'), true);


$rollno = $arr["rollno"];
$name = $arr["name"];

$mood = $arr["mood"];

$data = $arr["data"];

$sql = "INSERT INTO Persons(rollno, name, mood, data) VALUES (?,?,?,?)";

$stmt= $dbh->prepare($sql);
$ans=$stmt->execute([$rollno, $name, $mood,$data]);


echo $ans;
?>