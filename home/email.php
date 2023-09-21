<?php
$con = mysqli_connect('localhost', 'root', '', 'food_website');
if (isset($_POST['email'])) {
$email = $_POST['email'];

if(empty($email)){
    echo "please enter a valid email address";
}
else {
$checkSql = "SELECT email FROM `email` WHERE email = '$email'";
$checkResult = mysqli_query($con, $checkSql);
if (mysqli_num_rows($checkResult) > 0) {
    echo "Email already exists ";
} else {
   
    $sql = "INSERT INTO `email` (`email`) VALUES ('$email')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Your email has been successfully inserted.";
    } else {
        echo "Error inserting email.";
    }
    }
  }
}
else {
    echo "Email field is empty.";
}

?>
