<?php
require_once 'connection.php';
session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['username1'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['username'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row1=mysqli_fetch_array($query);
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
    Online Gift Giving Platform - Customer Homepage
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
        <a class="navbar-brand" href="#">
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
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#shop">
                View Shop
              </a>
            </li>
                        <li class="nav-item">
              <a class="nav-link" href="#data">
                My Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#feat">
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

  <!-- shop section -->

  <section id="shop" class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
                <br>
        <br>
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <?php

$sql = "SELECT `Package_ID`, `Name`, `Description`, `Image`, `Stock_Level`, `Price` FROM `package` WHERE `Stock_Level` > 0";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
            <!-- <a title="<?php echo($row["Description"]); ?>" href=""> -->
              <div class="img-box">
                <img src="images/<?php echo($row["Image"]); ?>" title="<?php echo($row["Stock_Level"]); ?> Available in Stock." alt="">
              </div>
              <div class="detail-box">
                <h6>
                  <?php echo($row["Name"]); ?>
                </h6>
                <h6>
                  Price
                  <span>
                    <?php echo($row["Price"]); ?>
                  </span>
                  <br>
                </h6>
              </div>
              <div class="new">

                <br>
<button onclick="return confirm('Are you sure that you want to order this package?') ? window.location.href='insertion.inc.php?action=orderP&id=<?php echo $row["Package_ID"]; ?>' : true;" title="Order Package"><i class="fa fa-shopping-basket" aria-hidden="true"></i></button>

              </div>
            <!-- </a> -->
            <?php
          }
        }else{
          echo "No Products in Stock.";
        }
        ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- my orders section -->

  <section id="data" class="saving_section ">
    <div class="box">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="detail-box">
              <div class="heading_container">
                        <br>
        <br>
                <h2>
                  Database 
                </h2>
                <h3>List of My Orders</h3>
              </div>
                                       <table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Order ID</th>
<th style="text-align: left;
  padding: 8px;">Staff Details</th>
  <th style="text-align: left;
  padding: 8px;">Package</th>
 <th style="text-align: left;
  padding: 8px;">Quantity</th>
   <th style="text-align: left;
  padding: 8px;">Total Price</th>
  <th style="text-align: left;
  padding: 8px;">Status</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php

$sql = "SELECT `orders`.`Order_ID`, `orders`.`User_ID`, `orders`.`Staff_ID`, `orders`.`Package_ID`, `orders`.`Total_Price`, `orders`.`Quantity`, `orders`.`Created_At`, `orders`.`Status`, `users`.`Fullname`, `users`.`Phone_Number`, `package`.`Name` FROM `users` JOIN `orders` ON `orders`.`Staff_ID` = `users`.`User_ID` JOIN `package` ON `package`.`Package_ID` = `orders`.`Package_ID` WHERE `orders`.`User_ID` = '$filter'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Order_ID"]); ?></td>
<td><?php echo($row["Fullname"]); ?> reach out via <?php echo($row["Phone_Number"]); ?></td>
<td><?php echo($row["Name"]); ?></td>
<td><?php echo($row["Quantity"]); ?></td>
<td><?php echo($row["Total_Price"]); ?> kshs.</td>
<td><?php echo($row["Status"]); ?> </td>
<?php
if ($row["Status"] == 'Pending') {
?>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to cancel this order?')?window.location.href='insertion.inc.php?action=cancelO&id=<?php echo($row["Order_ID"]); ?>':true;" title='Cancel Order'>Cancel</button></td>
<?php
}else{
?>
<?php
}
?>
</tr>
<?php
}
} else { echo "No results"; }

?>

</table>
              <div class="btn-box">
                <a onclick="printData1();" class="btn1">
                  Print
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end my orders section -->

  <!-- my features section -->

  <section id="feat" class="contact_section ">
    <div class="container px-0">
      <div class="heading_container ">
                <br>
        <br>
        <h2 class="">
          My Features
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-md-12 col-lg-5 px-0">
          <form action="insertion.inc.php" method="POST">
          <div>
              <input type="text" placeholder="Fullname" value="<?php echo $row1['Fullname']; ?>" name="fname" required />
              <input type="hidden" value="2" required name="mod">
              <input type="hidden" value="<?php echo $filter; ?>" required name="uid">
            </div>
            <div>
              <input type="email" placeholder="Email Address" value="<?php echo $row1['Email_Address']; ?>" name="email" required />
            </div>
            <div>
              <input type="text" placeholder="Phone Number" value="<?php echo $row1['Phone_Number']; ?>" name="phone" required />
            </div>
            <div>
              <input type="password" placeholder="Password" name="password" required />
            </div>
            <div>
              <input type="password" placeholder="Confirm Password" name="cpassword" required />
            </div>
            <div class="d-flex ">
              <button type="submit" name="upu">
                UPDATE MY DETAILS
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end my features section -->

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