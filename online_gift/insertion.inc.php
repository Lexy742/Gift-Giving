<?php
require 'connection.php';
session_start();

// Register User
if (isset($_POST['regu'])) {
    // ... (your existing code)

    if ($password == $passwordconfirm) {
        if ($mod == "0") {
            // Use password_hash instead of md5
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users`(`Fullname`, `Phone_Number`, `Email_Address`, `User_Type`, `Password`) VALUES ('$fname','$phone','$email','User','$hashedPassword')";
            mysqli_query($conn, $sql);
            // header("Location: index.html?userregistration=success");
            exit;
        } else if ($mod == "1") {
            // ... (your existing code)
        }
    } else {
        echo "Passwords do not match.";
    }
}

//Update User
if (isset($_POST['upu'])) {
 $uid = $_POST['uid'];
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];
 $phone = $_POST['phone'];
 $mod = $_POST['mod'];

 if ($password == $passwordconfirm) {
  if ($mod == 1) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index.php?updateadministrator=success");
  }else if ($mod == 2) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index1.php?updatestaff=success");
  }else if ($mod == 3) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index2.php?updateuser=success");
  }
 }else{
  echo "Passwords do not match.";
 }
}

//Delete A User
if($_REQUEST['action'] == 'deleteU' && !empty($_REQUEST['id'])){ 
$deleteItem = $_REQUEST['id'];
$sql = "DELETE FROM `users` WHERE `User_ID` = '$deleteItem'";
mysqli_query($conn, $sql); 
$sql1 = "DELETE FROM `orders` WHERE `User_ID` = '$deleteItem'";
mysqli_query($conn, $sql1); 
$sql2 = "DELETE FROM `package` WHERE `User_ID` = '$deleteItem'";
mysqli_query($conn, $sql2); 
header("Location: index.php?deleteuser=success");
}

//Make An Order
if (isset($_POST['makeO'])) {
    $uid = $_SESSION['username'];
    $quan = $_POST['quan'];
    $sp = explode(',', $_POST['sp']);
    $sid = $sp[0];
    $pid = $sp[1];
    $tp = $quan * $sp[2];
    
$sql = "INSERT INTO `orders`(`User_ID`, `Staff_ID`, `Package_ID`, `Total_Price`, `Quantity`) VALUES ('$uid','$sid','$pid','$tp','$quan')";

  mysqli_query($conn, $sql);

  header("Location: index2.php?makeanorder=success");

}

//Delete An Order 
if($_REQUEST['action'] == 'deleteO' && !empty($_REQUEST['id'])){ 
$deleteItem = $_REQUEST['id'];
$sql = "DELETE FROM `orders` WHERE `Order_ID` = '$deleteItem'";
mysqli_query($conn, $sql);
header("Location: index2.php?deleteanorder=success");
}

//Cancel An Order 
if($_REQUEST['action'] == 'cancelO' && !empty($_REQUEST['id'])){ 
$deleteItem = $_REQUEST['id'];
$sql = "UPDATE `orders` SET `Status` = 'Cancelled' WHERE `Order_ID` = '$deleteItem'";
mysqli_query($conn, $sql); 
header("Location: index2.php?cancelanorder=success");
}

//Complete An Order 
if($_REQUEST['action'] == 'completeO' && !empty($_REQUEST['id']) && !empty($_REQUEST['id1']) && !empty($_REQUEST['id2'])){ 
$updateItem = $_REQUEST['id'];
$quan = $_REQUEST['id1'];
$pid = $_REQUEST['id2'];
$sql = "UPDATE `orders` SET `Status` = 'Completed' WHERE `Order_ID` = '$updateItem'";
mysqli_query($conn, $sql); 
$sql1 = "UPDATE `package` SET `Stock_Level` =  `Stock_Level` - '$quan' WHERE `Package_ID` = '$pid'";
mysqli_query($conn, $sql1); 
header("Location: index1.php?completeanorder=success");
}


//Add A Package
if(isset($_POST["addP"])){
    $uid = $_SESSION['staffname'];
    $pname = $_POST['pname'];
    $sl = $_POST['sl'];
    $desc = $_POST['desc'];
    $amo = $_POST['amo'];

            $filename = $_FILES['image']['name'];

$valid_extensions = array("jpg","jpeg","png");

$extension = pathinfo($filename, PATHINFO_EXTENSION);

if((in_array(strtolower($extension),$valid_extensions))) {

if((move_uploaded_file($_FILES['image']['tmp_name'], "images/".$filename))){

  $sql = "INSERT INTO `package`(`User_ID`, `Name`, `Description`, `Image`, `Stock_Level`, `Price`) VALUES ('$uid','$pname','$desc','$filename','$sl','$amo')";

   mysqli_query($conn, $sql);

  header("Location: index1.php?addapackage=success");
  }else{
  echo "An Error Occured: Image directory not found.";
}
}else{
  echo "An Error Occured: Kindly check the image format, current format is not accepted.";
} 
 }

//Redirect to Order A Package
if($_REQUEST['action'] == 'orderP' && !empty($_REQUEST['id'])){ 

$pid = $_REQUEST['id'];
$_SESSION['packname'] = $pid;
header("Location: index2_order.php?selectpackage=success");

}

//Delete A Package 
if($_REQUEST['action'] == 'deleteP' && !empty($_REQUEST['id'])){ 
$deleteItem = $_REQUEST['id'];
$sql = "DELETE FROM `package` WHERE `Package_ID` = '$deleteItem'";
mysqli_query($conn, $sql);
header("Location: index1.php?deleteapackage=success");
}

?>