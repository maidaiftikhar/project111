<?php
session_start();

$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student_portal');

if (isset($_POST['register'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);

  if (empty($name)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password1)) { array_push($errors, "Password is required"); }
  if ($password1 != $password2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM teachers WHERE teacher_email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) {

    if ($user['teacher_email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password1);

  	$query = "INSERT INTO teachers (teacher_name, teacher_email, teacher_password)
  			  VALUES('$name', '$email', '$password')";
  	mysqli_query($db, $query);
    if ($query) {
      $_SESSION['name'] = $name;
      $_SESSION['teacher_email'] = $email;
    $_SESSION['success'] = "You are now logged in";
    header('location: teacherhome.php');
    }
  }
}
mysqli_close($db);
?>
