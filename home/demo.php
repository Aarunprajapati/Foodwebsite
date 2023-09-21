<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <!-- Favicon -->
  <!-- <link href="img/favicon.ico" rel="icon"> -->

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700;800&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="demo.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="menu.css">
  <link rel="stylesheet" href="client.css">
  <link rel="stylesheet" href="service.css">
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="table.css">
  <link rel="stylesheet" href="footer.css">
</head>

<body>
  <header class="header">
    <div class="container p-0">
      <nav class="bg-dark px-4 px-lg-5 py-5 py-lg-0 sticky-top shadow-sm">
        <div class="container-fluid">
          <div class="d-flex justify-content-between">
            <a class="m-0" href="#">
              <h1 class="icon">
                <i class="fa fa-utensils me-3"></i>
                Restoran
              </h1>
            </a>
            <div class=" ms-auto py-0 pe-4 nav_links">
              <a class="active" href="main.php">HOME</a>
              <a class="text-white" href="about.php">ABOUT</a>
              <a class="text-white" href="service.php">SERVICE</a>
              <a class="text-white" href="menu.php">MENU</a>
              <div class="dropdown">
                <a href="#" class="dropdown-toggle text-white" data-bs-toggle="dropdown"
                  aria-expanded="false">PAGES</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="table.php">Booking</a></li>
                  <!-- <li><a class="dropdown-item" href=".php">Our Team</a></li> -->
                  <li><a class="dropdown-item" href="client.php">Testimonial</a></li>
                </ul>
              </div>
              <a class="text-white" href="table.php">CONTACT</a>
              <a class="btn btn-primary py-2 px-4" href="service.php">BOOK A TABLE</a>

            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <script>
    const navlinkA = document.querySelectorAll('.nav_links a');
    navlinkA.forEach(element => {
      element.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent the default behavior of the link
        navlinkA.forEach(nav => nav.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>

</body>

</html>
