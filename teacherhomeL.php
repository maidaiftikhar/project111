<?php
session_start();
$teacheremail=$_SESSION['teacher_email'];
$conn=mysqli_connect('localhost','root','','student_portal');
if (isset($_POST['create'])) {
  $classname= mysqli_real_escape_string($conn,$_POST['classname']);
  $random=(rand(100000,999999));

  echo $random;
  echo $classname;
  echo $teacheremail;
 $query= "INSERT INTO classes (unique_id, teacher_email, class_name) VALUES ($random, '$teacheremail', '$classname')";
 $result=mysqli_query($conn,$query);
 if ($result) {
header('location: teacherhome.php');
 }
 else {
   echo "unsuccess";
 }
  // code...
}
mysqli_close($conn);
 ?>
