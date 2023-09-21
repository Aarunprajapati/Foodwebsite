<?php
$con= mysqli_connect('localhost','root','','food_website');

$name=$_POST['name'];
$email=$_POST['email'];
$date=$_POST['date'];
$number=$_POST['number'];
$message=$_POST['message'];

$sql="INSERT INTO `food` ( `name`, `email`, `date`, `number`, `message`) 
VALUES ('$name', '$email', '$date', '$number', '$message')";
$result=mysqli_query($con,$sql);
if($result){
echo "Your request has been sent successfully";

}
else{
echo"error";
}
?>