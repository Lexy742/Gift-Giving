<?php
require_once 'connection.php';
session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['username1']) && !isset($_SESSION['packname'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['username'];
  $filter1 = $_SESSION['packname'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row1=mysqli_fetch_array($query);
  $query1=mysqli_query($conn,"SELECT * FROM `package` WHERE `Package_ID`='$filter1'")or die(mysqli_error());
  $row2=mysqli_fetch_array($query1);
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    Online Gift Giving Platform - Order A Package Page
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

        <style type="text/css">
        
          table{
    align-items: center;
  }

   th, tr, td{
    padding: 10px 10px;
  }
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData1();
})  
</script>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index2.php">
          <span>
            Online Gift Giving Platform
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index2.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index2.php">
                View Shop
              </a>
            </li>
                        <li class="nav-item">
              <a class="nav-link" href="index2.php">
                My Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index2.php">
                My Features
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
            <a href="logout.php">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Logout
              </span>
            </a>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->

    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        Welcome <?php echo $row1['User_Type']; ?>, <br>
                        <?php echo $row1['Fullname']; ?>! 
                      </h1>
                      <p>
                        Shop Unique and Thoughtful Presents for your loved ones, at the Online Gift Giving Platform.
                      </p>
                      <a href="#contact">
                        Contact Us
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="images/online-shopping.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                       Welcome <?php echo $row1['User_Type']; ?>, <br>
                        <?php echo $row1['Fullname']; ?>! 
                      </h1>
                      <p>
                        Explore Our Curated Selection of Gifts for Your Treasured Ones! Show them your love <3
                      </p>
                      <a href="#data">
                        Database 
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="images/gift.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        Welcome <?php echo $row1['User_Type']; ?>, <br>
                        <?php echo $row1['Fullname']; ?>!  
                      </h1>
                      <p>
                        Trust the Online Gift Giving Platform for Memorable Gifts and Exceptional Service!.
                      </p>
                      <a href="#feat">
                        My Features 
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="images/online-shopping.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
            </a>
            <img src="images/line.png" alt="" />
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- make an order section -->

  <section class="contact_section ">
    <div class="container px-0">
      <div class="heading_container ">
                <br>
        <br>
        <h2 class="">
          Make an Order for: <?php echo $row2['Name']; ?>.
        </h2>
        <br>
        <p><i><?php echo $row2['Description']; ?></i></p>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-12 col-md-6 px-0">
          <form action="insertion.inc.php" method="POST" enctype="multipart/form-data">
            <div>
              <input type="hidden" value="<?php echo $row2['User_ID']; ?>,<?php echo $filter1; ?>,<?php echo $row2['Price']; ?>" name="sp" required />
            </div>
            <div>
              <input type="number" min="0" max="<?php echo $row2['Stock_Level']; ?>" placeholder="Quantity" name="quan" required />
            </div>            
            <div class="d-flex ">
              <button type="submit" name="makeO">
                MAKE ORDER
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end make an order section -->

  <!-- contact section -->

  <section id="contact" class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <h6>
              CONTACT US
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Nairobi, Kenya. </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+254 712345678</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> info@giftgiving.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved.
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end contact section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>