<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700;800&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="menu.css">
  <link rel="stylesheet" href="client.css">
  <link rel="stylesheet" href="service.css">
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="table.css">
  <link rel="stylesheet" href="footer.css">
</head>
<body>
  <header class="header" data-aos="fade-down" data-aos-duration="800"  data-aos-delay="20">
    <div class="container position-relative p-0">
      <nav class="nav_bar bg-transparent px-4 px-lg-5 py-3 py-lg-0">
        <div class="container-fluid">
          <div class="d-flex justify-content-between py-1"   >
            <a class="m-0" href="main.php">
              <h1 class="icon">
                <i class="fa fa-utensils me-3"></i>
                Restoran
              </h1>
            </a>
            <div class="ms-auto py-0 pe-4 nav_links">
              <a class="nav_item text-white active" href="main.php" id="home" >HOME</a>
              <a class="nav_item text-white" href="about.php" id="about">ABOUT</a>
              <a class="nav_item text-white" href="service.php" id="service">SERVICE</a>
              <a class="nav_item text-white" href="menu.php" id="menu">MENU</a>
              <div class="dropdown">
                <a href="#" class="dropdown-toggle text-white" data-bs-toggle="dropdown"
                  aria-expanded="false">PAGES</a>
                <ul class="dropdown-menu">
                  <li class="drop_li"><a class="dropdown-item" href="table.php">Booking</a></li>
                  <!-- <li><a class="dropdown-item" href=".php">Our Team</a></li> -->
                  <li  class="drop_li"><a class="dropdown-item" href="client.php">Testimonial</a></li>
                </ul>
              </div>
              <a class="text-white" href="contact.php" id="contact">CONTACT</a>
              <button class="btn1 py-2 px-4" href="service.php" type="button" id="booktable">BOOK A TABLE</button>

            </div>
          </div>
        </div>
      </nav>
    </div>
    
  </header>
</body>
</html>
