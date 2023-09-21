<?php $con = mysqli_connect('localhost', 'root', '', 'food_website'); ?>
<div class="container">

<section class="home">
    <div class="container position-relative p-0">
        <div class="container homeimg  bg-dark mb-5 py-3" >
            <?php include "header.php";?>
            <div class="conatiner my-5 py-5">
              <div class="row align-items-center g-5">
                  <div class="col-lg-6" data-aos="fade-right" data-aos-duration="500">
                      <h1 class="text-white display-3  px-2">Enjoy Our
                          <br>
                          Delicious Meal</h1>
                          <p class="text-white mb-4 pb-2  px-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                          <a class="btn btn-primary py-sm-3 px-sm-5 me-3 m_left " href="#">BOOK A TABLE</a> 
                  </div>
                  <div class="col-lg-6 text-center overflow-hidden" data-aos="fade-left" data-aos-duration="500">
                      <img class="img-fluid" src="images/homeimg2.png" alt="">
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>

<section class="service" data-aos="fade-up">
    <div class="container py-5">
    <div class="row">
        <div class="text-center">
                     <h5 class="menu-title">Food Menu</h5>
                     <h1 class="mb-5">Most Popular Items</h1>
                 </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-tie primary mb-4"></i>
                        <h5>Master Chefs</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 " >
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-utensils primary mb-4"></i>
                        <h5>Quality Food</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cart-plus primary mb-4"></i>
                        <h5>Online Order</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-headset primary mb-4"></i>
                        <h5>24/7 Service</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about" data-aos="fade-up">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="images/about-1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="images/about-2.jpg" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="images/about-3.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="images/about-4.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title  ff-secondary text-start primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils primary me-2"></i>Restoran</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 bprimary px-3">
                            <h1 class="flex-shrink-0 display-5 primary mb-0" data-toggle="counter-up">15</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 bprimary px-3">
                            <h1 class="flex-shrink-0 display-5 primary mb-0" data-toggle="counter-up">50</h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="text-uppercase mb-0">Master Chefs</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
            </div>
        </div>
    </div>
</section>

<section class="menu" data-aos="fade-up">
    <div class="container py-5">
        <div class="row">
            <div class="text-center">
                <h5 class="menu-title">Food Menu</h5>
                <h1 class="mb-5">Most Popular Items</h1>
            </div>
            <div class="text-center">
                <ul class="d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item " id="breakfast">
                        <a href="#"
                            class="d-flex align-items-center text-start mx-3 ms-0 pb-3 text-decoration-none active"
                            data-bs-toggle="pill">
                            <i class="fa fa-coffee fa-2x fontcolor"></i>
                            <div class="ps-3">
                                <small class="text-body text-color">Popular</small>
                                <h6 class="mt-n1 mb-0">Breakfast</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" id="launch">
                        <a href="#" class="d-flex align-items-center text-start mx-3 pb-3 text-decoration-none"
                            data-bs-toggle="pill">
                            <i class="fa fa-hamburger fa-2x fontcolor"></i>
                            <div class="ps-3 ">
                                <small class="text-body text-color">Special</small>
                                <h6 class="mt-n1 mb-0">Launch</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" id="dinner">
                        <a href="#" class="d-flex align-items-center text-start mx-3 me-0 pb-3 text-decoration-none"
                            data-bs-toggle="pill">
                            <i class="fa fa-utensils fa-2x fontcolor"></i>
                            <div class="ps-3 ">
                                <small class="text-body text-color">Lovely</small>
                                <h6 class="mt-n1 mb-0">Dinner</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab_content">
                    <div class="tab_pane" id="breakfast1">
                        <div class="row g-4">
                            <?php 
                            $query = "SELECT * FROM `adminmulti` WHERE `catagory`='Breakfast'";
                            $result = mysqli_query($con, $query);
                           
                            while($sql = mysqli_fetch_array($result)){ 
                            ?>
                            <div class="col-lg-6">
                                    <a href="details.php?detailsid=<?= $sql['id'] ?>"
                                        value="<?= $sql['id'] ?>">
                                        <div class="d-flex align-items-center">
                                        <?php
                                            $image = $sql['images'];
                                            $imagePaths = explode(',', $image );
                                            $index_to_access=0;
                                            ?>
                                        <?php
                                            foreach ($imagePaths as $imagePath=>$value) {
                                                if ($imagePath == $index_to_access) {
                                                    // Access the specific item at the desired index    
                                                ?>

                                                <img src="<?= $value?>" alt="" width="100px" height="100px"  class="px-1" >

                                                <?php
                                                }
                                            }
                                            ?>

                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span><?= $sql['name'] ?></span>
                                                    <span class="fontcolor"><?= $sql['price'] ?></span>
                                                </h5>
                                                <small class=" fst-italic"><?= $sql['description'] ?></small>
                                            </div>
                                        </div>
                                    </a>
                            </div>
                              
                            <?php 
                            } 
                            
                            ?>
                        </div>
                    </div>

                    <div class="tab_pane" id="launch1">
                        <div class="row g-4">
                            <?php 
                             $Launch = "SELECT * FROM `adminmulti` WHERE `catagory`='Launch'";
                             $result2 = mysqli_query($con, $Launch);
                            while($sql2 = mysqli_fetch_assoc($result2)){ 
                            ?>
                               <div class="col-lg-6">
                                    <a href="details.php?detailsid=<?= $sql2['id'] ?>" 
                                        value="<?= $sql2['id'] ?>">
                                        <div class="d-flex align-items-center">
                                        <?php
                                            $image2 = $sql2['images'];
                                            $imagePaths2 = explode(',', $image2 );
                                            $imageindex2=0;
                                            ?>
                                        <?php
                                            foreach ($imagePaths2 as $imagePath2=>$value2) {
                                                if ($imagePath2 == $imageindex2) {
                                                    // Access the specific item at the desired index    
                                                ?>

                                                <img src="<?= $value2?>" alt="" width="100px" height="100px"  class="px-1" >

                                                <?php
                                                }
                                            }
                                            ?>

                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span><?= $sql2['name'] ?></span>
                                                    <hr>
                                                    <span class="fontcolor"><?= $sql2['price'] ?></span>
                                                </h5>
                                                <small class=" fst-italic"><?= $sql2['description'] ?></small>
                                            </div>
                                        </div>
                                    </a>
                            </div>
                              
                         
                            <?php 
                             } 
                            ?>
                        </div>
                    </div>

                    <div class="tab_pane" id="dinner1">
                        <div class="row g-4">
                            <?php 
                             $Dinner = "SELECT * FROM `adminmulti` WHERE `catagory`='Dinner'";
                             $result3 = mysqli_query($con, $Dinner);
                                while($sql3 = mysqli_fetch_assoc($result3)){ 
                            ?>
                            <div class="col-lg-6">
                                    <a href="details.php?detailsid=<?= $sql3['id'] ?>" 
                                        value="<?= $sql3['id'] ?>">
                                        <div class="d-flex align-items-center">
                                        <?php
                                            $image3 = $sql3['images'];
                                            $imagePaths3 = explode(',', $image3 );
                                            $index_to_access3=0;
                                            ?>
                                        <?php
                                            foreach ($imagePaths3 as $imagePath3=>$value3) {
                                                if ($imagePath3 == $index_to_access3) {
                                                    // Access the specific item at the desired index    
                                                ?>

                                                <img src="<?= $value3?>" alt="" width="100px" height="100px"  class="px-1" >

                                                <?php
                                                }
                                            }
                                            ?>

                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span><?= $sql3['name'] ?></span>
                                                    <span class="fontcolor"><?= $sql3['price'] ?></span>
                                                </h5>
                                                <small class=" fst-italic"><?= $sql3['description'] ?></small>
                                            </div>
                                        </div>
                                    </a>
                            </div>  
                            <?php 
                             } 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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

<section class="client py-5" data-aos="fade-up">
        <div class="container">
            <div class="container">
                <div class="text-center">
                    <h5 class="client-title">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="feedbacks">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators buttonindicator">
                            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0"
                                class="active btn1" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
                                aria-label="Slide 2" class="btn1"></button>
                            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2"
                                aria-label="Slide 3" class="btn1"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <i class="fa fa-quote-left fa-2x fontcolor mb-3"></i>
                                        <p>labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                            labore diam</p>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded-circle" src="images/c1.jpg"
                                                style="width: 50px; height: 50px;">
                                            <div class="ps-3">
                                                <h5 class="mb-1">Client Name</h5>
                                                <small>Profession</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 ">
                                        <i class="fa fa-quote-left fa-2x fontcolor mb-3"></i>
                                        <p>labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                            labore diam</p>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded-circle" src="images/c2.jpg"
                                                style="width: 50px; height: 50px;">
                                            <div class="ps-3">
                                                <h5 class="mb-1">Client Name</h5>
                                                <small>Profession</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <i class="fa fa-quote-left fa-2x fontcolor mb-3"></i>
                                        <p>labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                            labore diam</p>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded-circle" src="images/c4.jpg"
                                                style="width: 50px; height: 50px;">
                                            <div class="ps-3">
                                                <h5 class="mb-1">Client Name</h5>
                                                <small>Profession</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <i class="fa fa-quote-left fa-2x fontcolor mb-3"></i>
                                        <p>labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                            labore diam</p>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded-circle" src="images/c5.jpg"
                                                style="width: 50px; height: 50px;">
                                            <div class="ps-3">
                                                <h5 class="mb-1">Client Name</h5>
                                                <small>Profession</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <i class="fa fa-quote-left fa-2x fontcolor mb-3"></i>
                                        <p>labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                            labore diam</p>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded-circle" src="images/c2.jpg"
                                                style="width: 50px; height: 50px;">
                                            <div class="ps-3">
                                                <h5 class="mb-1">Client Name</h5>
                                                <small>Profession</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <i class="fa fa-quote-left fa-2x fontcolor mb-3"></i>
                                        <p>labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                            labore diam</p>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded-circle" src="images/c1.jpg"
                                                style="width: 50px; height: 50px;">
                                            <div class="ps-3">
                                                <h5 class="mb-1">Client Name</h5>
                                                <small>Profession</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <i class="fa fa-quote-left fa-2x fontcolor mb-3"></i>
                                        <p>labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                            labore diam</p>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded-circle" src="images/c5.jpg"
                                                style="width: 50px; height: 50px;">
                                            <div class="ps-3">
                                                <h5 class="mb-1">Client Name</h5>
                                                <small>Profession</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <i class="fa fa-quote-left fa-2x fontcolor mb-3"></i>
                                        <p>labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                            labore diam</p>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded-circle" src="images/c4.jpg"
                                                style="width: 50px; height: 50px;">
                                            <div class="ps-3">
                                                <h5 class="mb-1">Client Name</h5>
                                                <small>Profession</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <i class="fa fa-quote-left fa-2x fontcolor mb-3"></i>
                                        <p>labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                            labore diam</p>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded-circle" src="images/c2.jpg"
                                                style="width: 50px; height: 50px;">
                                            <div class="ps-3">
                                                <h5 class="mb-1">Client Name</h5>
                                                <small>Profession</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php include "footer.php";?>
</div>


