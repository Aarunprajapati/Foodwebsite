<?php $con = mysqli_connect('localhost', 'root', '', 'food_website'); ?>
<?php
$foodId = $_GET['detailsid'];

// Query the database to get details of the selected food item
$query = "SELECT * FROM adminmulti WHERE id = $foodId";
$result = mysqli_query($con, $query);

// if (mysqli_num_rows($result) > 0) {
$food = mysqli_fetch_array($result);
$image = $food['images'];

?>



<!-- <body> -->
<div class="container bg-dark aboutimg mb-5 py-3 aboutheader">
    <?php include "header.php" ?>;
    <div class="container text-center my-5 pt-5 pb-4" data-aos="fade-up">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Food Details</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item item1"><a href="#">Home </a></li>
                <li class="breadcrumb-item item"><a href="#">Pages </a></li>
                <li class="breadcrumb-item  item text-white active" aria-current="page">ADDCART</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-4">
            <!-- <img src="images/m1.jpg" alt="" style="width:200px; " class="rounded-4"> -->
            <?php
           $image = $food['images'];
            $imagePaths = explode(',', $image);
            $index_to_access = 0;
            ?>
            <?php
            foreach ($imagePaths as $imagePath => $value) {
                if ($imagePath == $index_to_access) {
                    // Access the specific item at the desired index    
                    ?>

                    <img src="<?= $value ?>" alt="" width="200px" height="200px" class="px-1 rounded-4">

                    <?php
                }
            }
            ?>
        </div>
        <div class="col-lg-6">
            <h1>
                <?= $food['name'] ?>
            </h1>

            <h5>Description:
                <?= $food['description'] ?>
            </h5>
            <h3>Price: $
                <?= $food['price'] ?>
            </h3>
        </div>
        <div class="container py-5 ">
            <?php
            $imagePaths = explode(',', $image);
            ?>
            <div class="d-flex" style="width:300px;">
                <?php
                foreach ($imagePaths as $imagePath) {
                    ?>

                    <img src="<?= $imagePath ?>" alt="" width="200px" height="200px" class="px-2 rounded-4">

                    <?php
                }
                ?>

            </div>
        </div>




    </div>
    <?php include "footer.php" ?>