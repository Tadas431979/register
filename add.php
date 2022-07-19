<?php
//require 'configDB.php';
$name =$_POST['name'];
$surname =$_POST['surname'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$age =$_POST['age'];
$gender =$_POST['gender'];
$activity =$_POST['activity'];
//echo $activity;



$dsn='mysql:host=localhost;dbname=register';
$pdo= new PDO($dsn,'root','');
$sql=  'INSERT INTO data( `name`, `surname`,`email`,`phone`,`age`,`gender`,`activity`) VALUES(:name,:surname,:email,:phone,:age,:gender,:activity) ';
$query= $pdo->prepare($sql);

$query->bindParam(':name', $name);
$query->bindParam(':surname', $surname);
$query->bindParam(':email', $email);
$query->bindParam(':phone', $phone);
$query->bindParam(':age', $age);
$query->bindParam(':gender', $gender);
$query->bindParam(':activity', $activity);
$query->execute();
//header('Location:/PDO');
//'surname'=>$surname,'email'=>$email,'phone'=>$phone,'age'=>$age,'gender'=>$gender,'activity'=>$activity