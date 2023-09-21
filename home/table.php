
<div class="container bg-dark tableimg mb-5 py-3 ">
    <?php include "header.php"?>
    <div class="container text-center my-5 pt-5 pb-4" data-aos="fade-up">
        <div class="container">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item item1"><a href="#">Home </a></li>
                        <li class="breadcrumb-item item"><a href="#">Pages </a></li>
                        <li class="breadcrumb-item  item text-white active" aria-current="page">BOOKING</li>
                    </ol>
                </nav>
        </div>        
    </div>
</div>
<section class="Tablesection" data-aos="fade-up">
        <div class="container py-5 px-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 bg-dark d-flex align-items-center">
                    <div class="p-5 ">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form id="formdata" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="date" class="form-control datetimepicker-input" name="date" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                    <input type="text" class="form-control" id="number" name="number" placeholder="Number of people">
                                        <label for="number">No of People</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message" name="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class=" w-100 py-3" id="but" type="submit" name="submit" value="submit" >Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="result1"></div> -->
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
    $date = $_POST['date'];
    $number = $_POST['number'];
    $msg = $_POST['message'];
   
   
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
    $mail->Body = "Sender Name - $name <br><b>Sender Email - $email</b><br>Date- $date <br>No of people- $number <br> and Message -$msg <br> ";


    $mail->send();
   
  
    echo "message has been send";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    
 
}

?>
<?php include "footer.php"?>
   
