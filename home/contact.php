<?php
 $con= mysqli_connect('localhost','root','','food_website');

if(isset($_POST['submit']))
{
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
        echo "<script>alert('Data has been send Successfully in database')</script>";
    
    }
    else{
    echo"error";
    }
    }
}

?>
<div class="container bg-dark aboutimg mb-5 aboutheader">
                <?php include "header.php" ?>;   
                <div class="container text-center my-5 pt-5 pb-4" data-aos="fade-up">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item item1"><a href="#">Home </a></li>
                            <li class="breadcrumb-item item"><a href="#">Pages </a></li>
                            <li class="breadcrumb-item  item text-white active" aria-current="page">contact</li>
                        </ol>
                    </nav>
                </div>
</div>
<section data-aos="fade-up">
    <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center ">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                        <h1 class="mb-5">Contact For Any Query</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="row gy-4">
                                <div class="col-md-4">
                                    <h5 class="section-title ff-secondary fw-normal text-start text-primary">Booking</h5>
                                    <p><i class="fa fa-envelope-open text-primary me-2"></i>book@example.com</p>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="section-title ff-secondary fw-normal text-start text-primary">General</h5>
                                    <p><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="section-title ff-secondary fw-normal text-start text-primary">Technical</h5>
                                    <p><i class="fa fa-envelope-open text-primary me-2"></i>tech@example.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <img src="images/map.avif" alt="googleMap" class="img-fluid" style="height: 372px;">
                        </div>
                        <div class="col-md-6">
                            <div>
                                <form id="formdata1" method="POST">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name1" name="name" placeholder="Your Name">
                                                <label for="name1">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="email1" name="email" placeholder="Your Email">
                                                <label for="email1">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="subject1" name="subject" placeholder="Subject">
                                                <label for="subject1">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a message here" id="message1" name="message" style="height: 150px"></textarea>
                                                <label for="message1">Message</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="submit" value="submit" class="btn btn-primary w-100 py-3" >Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="result2"></div>
</section>

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    $subject = $_POST['subject'];
   
//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server setting
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;   
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'lovearun010@gmail.com';                     //SMTP username
    $mail->Password   = 'egylsbfyiiwbolup';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('lovearun010@gmail.com', 'contact form');
    $mail->addAddress($email, '<team@FOODWEBSITE.com>');     //Add a recipient
  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test contact form';
    $mail->Body    = "Sender Name - $name <br><b>Sender Email - $email</b><br> and Message -$msg <br>";


    $mail->send();
   
    echo "<script>alert('Email has been send Successfully')</script>";
    // echo "message has been send";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>
<?php include "footer.php" ?>























<!-- <script>
$(document).ready(function(){
$('#formdata1').submit(function(e){
e.preventDefault();
var name=$('#name1').val();
var email=$('#email1').val();
var subject=$('#subject1').val();
var message =$('#message1').val();
$.ajax({
 url:"insert1.php",
 type:"POST",
 data:{
    name:name,
    email:email,
    subject:subject,
    message:message
 },
 
 success:function(response){
//   alert(response);
 },
 error:function(error){
    $('#result2').html(' An error is occured:'+ error);
 }
});
});
});
</script> -->
