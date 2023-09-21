<?php $con = mysqli_connect('localhost', 'root', '', 'food_website'); ?>

<div class="container bg-dark aboutimg mb-5 py-3 aboutheader">
    <?php include "header.php" ?>;
    <div class="container text-center my-5 pt-5 pb-4" data-aos="fade-up">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item item1"><a href="#">Home </a></li>
                <li class="breadcrumb-item item"><a href="#">Pages </a></li>
                <li class="breadcrumb-item  item text-white active" aria-current="page">MENU</li>
            </ol>
        </nav>
    </div>
</div>
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

<?php include "footer.php"; ?>