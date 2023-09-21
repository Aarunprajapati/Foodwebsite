<?php
$con= mysqli_connect('localhost','root','','food_website');

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
if(empty($email) && empty($name) && empty($subject) && empty($message)){
    echo "please enter a valid data";
}
else {

$sql="INSERT INTO `contact` ( `name`, `email`, `subject`, `message`) 
VALUES ('$name', '$email', '$subject', '$message')";
$result=mysqli_query($con,$sql);
if($result){
echo "Your request has been sent successfully insert1 ";

}
else{
echo"error";
}
}
?>