<?php
$con = mysqli_connect('localhost', 'root', '', 'food_website');
if (isset($_POST['submit1'])) {
$emailID = $_POST['email'];

if(empty($emailID)){
    echo "please enter a valid email address";
}
else {
$checkSql = "SELECT * FROM `email` WHERE email = '$emailID'";
$checkResult = mysqli_query($con, $checkSql);
// if (mysqli_num_rows($checkResult) > 0) {
//     echo "Email already exists ";
// } else {
   
    $sql = "INSERT INTO `email` (`email`) VALUES ('$emailID')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "Your email has been successfully inserted.";
        echo "<script>alert('Your email has been successfully inserted')</script>";
    } else {
        echo "Error inserting email.";
    }
    // }
  }
}
?>
<section class="footer">
    <div class="container bg-dark text-light footer pt-5 mt-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light icon  btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light icon btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light icon btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light icon btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <form id="emailform" method="POST">
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" name="email" id="email2" placeholder="Your email">
                            <button type="submit" name="submit1" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="">
              <i class="bi bi-arrow-up"></i>
             </a>
        <div class="result"></div>
        
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        offset: 60, // offset (in px) from the original trigger point
        delay: 5, // values from 0 to 3000, with step 50ms
        duration: 350, // values from 0 to 3000, with step 50ms
        easing: 'ease-in', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom',
    });
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
    <script>
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.nav_bar').addClass('sticky-top shadow-sm');
        } else {
            $('.nav_bar').removeClass('sticky-top shadow-sm');
        }
    });
  </script>
    <script>
    const navlinkA = document.querySelectorAll('.nav_links a');

    navlinkA.forEach(element => {
      element.addEventListener('click', function (e) {
       
        navlinkA.forEach(nav => nav.classList.remove('active'));

        this.classList.add('active');
     
      });
    });
  </script>
 
    <script>
            
            let breakfast =document.getElementById("breakfast");
            let launch =document.getElementById("launch");
            let dinner =document.getElementById("dinner");
            let breakfast1 =document.getElementById("breakfast1");
            let launch1 =document.getElementById("launch1");
            let dinner1 =document.getElementById("dinner1");
            launch1.style.display = "none";
            // breakfast1.style.display = "none"
            breakfast.style.borderBottom = "2px solid #FEA116";
            dinner1.style.display = "none"
            breakfast.addEventListener('click',function(){
                    breakfast.style.borderBottom = "2px solid #FEA116";
                    launch.style.borderBottom = "none";
                    dinner.style.borderBottom = "none";
                    breakfast1.style.display = "block";
                    launch1.style.display = "none"
                    dinner1.style.display = "none"
                
            })
            launch.addEventListener('click',function(){  
                   launch.style.borderBottom = "2px solid #FEA116";
                   breakfast.style.borderBottom = "none";
                   dinner.style.borderBottom = "none";
                   breakfast1.style.display = "none";
                   launch1.style.display = "block"
                   dinner1.style.display = "none"
               
            })
            dinner.addEventListener('click',function(){
                    dinner.style.borderBottom = "2px solid #FEA116";
                    launch.style.borderBottom = "none";
                    breakfast.style.borderBottom = "none";
                    breakfast1.style.display = "none";
                    launch1.style.display = "none"
                    dinner1.style.display = "block"
             
            })
   
        </script>
 
<?php
$con= mysqli_connect('localhost','root','','food_website');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $number=$_POST['number'];
    $message=$_POST['message'];
    
    $sql="INSERT INTO `food` ( `name`, `email`, `date`, `number`, `message`) 
    VALUES ('$name', '$email', '$date', '$number', '$message')";
    $result=mysqli_query($con,$sql);
    if($result){
    // echo "Your request has been sent successfully";
    echo "<script>alert('Your Table Book Successfully')</script>";
    }
    else{
    echo"error";
    }

}
?>


<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit1'])){
    $emailID = $_POST['email'];
    // echo $emailID;
   
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
    $mail->addAddress($emailID, '<team@FOODWEBSITE.com>');     //Add a recipient
  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test contact form';
    $mail->Body = "Sender MailID-$emailID<br> Welcome to our Website";
    $mail->send();
   
    // echo "message has been send";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    
 
}

?>
