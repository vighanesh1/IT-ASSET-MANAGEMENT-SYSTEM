<?php session_start(); 

if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
   // Redirect the user to the login page
   header("Location: home.php");
   exit();

   setcookie($_SESSION['user_id'], "", time() - 2500);
}

?>

<?php include ("invoice_db.php");
if(isset($_POST['submit'])){

$vendorcode=$_POST['vendorcode'];
$vendorname=$_POST['vendorname'];
$material=$_POST['material'];
$invoicenumber=$_POST['invoicenumber'];
$date=$_POST['date'];
$invoiceamount=$_POST['invoiceamount'];
$costcenter=$_POST['costcenter'];
$username=$_POST['username'];
$userdept=$_POST['userdept'];
$invstatus=$_POST['invstatus'];
$sdate=$_POST['sdate'];
$remarks=$_POST['remarks'];

$query_check = "SELECT * FROM `invoices` WHERE `invoice_number` = '$invoicenumber'";
    $result_check = mysqli_query($conn, $query_check);

    if (mysqli_num_rows($result_check) > 0) {
        // Duplicate entry found
        echo '<script>alert("Error: Duplicate entry for Invoice NUmber '.$invoicenumber.'")</script>';
    } else {
            // No duplicate entry found, proceed with inserting data
        $query_insert = "INSERT INTO `invoices` (`vendor_code`,`vendor_name`, `material_service_ordered`, `invoice_number`, `invoice_date`,`invoice_amount`,`cost_center`, `username`, `user_department`, `invoice_status`, `status_date`, `remarks`) values ('$vendorcode','$vendorname', '$material', '$invoicenumber', '$date','$invoiceamount','$costcenter','$username','$userdept','$invstatus','$sdate',  
        '$remarks')";
        $result_insert = mysqli_query($conn, $query_insert);





        if($result_insert) {
            echo '<script>alert("SAVED SUCCESSFULLY")</script>';
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

$folder = 'invoices/';
if(isset($_FILES['upload']) && $_FILES['upload']['error'] == 0){
    $filename = $_FILES['upload']['name'];
    $tempname = $_FILES['upload']['tmp_name'];
    
    // get the invoice number from the form input
    $invoicenumber = $_POST['invoicenumber'];
    
    // get the file extension
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    // generate a new filename using the invoice number and file extension
    $newfilename = $invoicenumber.'.'.$ext;
    
    // move the uploaded file to the folder with the new filename
    move_uploaded_file($tempname, $folder.$newfilename);
}

?>





/* <?php

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
if(isset($_POST['submit'])){

$vendorcode=$_POST['vendorcode'];
$vendorname=$_POST['vendorname'];
$material=$_POST['material'];
$invoicenumber=$_POST['invoicenumber'];
$date=$_POST['date'];
$invoiceamount=$_POST['invoiceamount'];
$costcenter=$_POST['costcenter'];
$username=$_POST['username'];
$userdept=$_POST['userdept'];
$invstatus=$_POST['invstatus'];
$sdate=$_POST['sdate'];
$remarks=$_POST['remarks'];


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 0;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "ithelpdesk@nitco.in";
$mail->Password   = "Pass@4321";  
$mail->IsHTML(true);
$mail->AddAddress("ithelpdesk@nitco.in");
$mail->SetFrom("ithelpdesk@nitco.in", "Nitco_IT");
$mail->AddCC("pradeepbrahmankar@nitco.in" ,"santoshkotian@nitco.in", "pushkardandge@nitco.in", "reemaremy@nitco.in");
$mail->Subject = " IT Invoice Submission Status";
$content = "'IT Invoice of' $vendorname ' has been submitted' <table>
            <tr><td><b>Vendor Code : </b></td><td>$vendorcode</td></tr>
            <tr><td><b>Vendor Name:</b></td><td>$vendorname</td></tr>
            <tr><td><b>Material:</b></td><td>$material</td></tr>
            <tr><td><b>Invoice Number:</b></td><td>$invoicenumber</td></tr>
            <tr><td><b>Invoice Date:</b></td><td>$date</td></tr>
            <tr><td><b>Invoice Amount:</b></td><td>$invoiceamount</td></tr>
            <tr><td><b>Cost Center:</b></td><td>$costcenter</td></tr>
            <tr><td><b>Username:</b></td><td>$username</td></tr>
            <tr><td><b>User Department:</b></td><td>$userdept</td></tr>
            <tr><td><b>Invoice Status:</b></td><td>$invstatus</td></tr>
            <tr><td><b>Status Date:</b></td><td>$sdate</td></tr>
            <tr><td><b>Remarks:</b></td><td>$remarks</td></tr>
          </table>";

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo '<script>alert("Email Sent")</script>';
  //var_dump($mail);

  ?>

  
<meta http-equiv = "refresh" content = "0; url = http://localhost:80/itm/invdatadisplay.php" />
  <?php
} else {
  echo '<script>alert("EMAIL SENT")</script>';
}


?>

<meta http-equiv = "refresh" content = "0; url = http://localhost:80/itm/invdatadisplay.php" />
  <?php
} else {
  echo "Email sent Error";
}


?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Invoice Entry Form</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Include custom CSS -->
  <style>
    /* Add your custom CSS styles here */
    

       .form-group label {
      font-weight: bold;
    }
    select.form-control {
      width: 100%;
    }
    .container {
      margin-top: 50px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      padding: 20px;
      background-color: #fff;
      overflow: hidden;
      position: relative;
    }
    .container:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.8);
      z-index: -1;
      transform: translateY(100%);
      transition: transform 0.5s ease-in-out;
    }
    .container:hover:before {
      transform: translateY(0);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Invoice Entry Form</h1>
    <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="vendor-code">Vendor Code:</label>
        <input type="text" class="form-control" id="vendor-code" name="vendorcode">
      </div>
      <div class="form-group">
        <label for="vendor-name">Vendor Name:</label>
        <input type="text" class="form-control" id="vendor-name" name=vendorname>
      </div>
      <div class="form-group">
        <label for="material-ordered">Material/Service Ordered:</label>
        <input type="text" class="form-control" id="material-ordered" name="material">
      </div>
      <div class="form-group">
        <label for="invoice-number">Invoice Number:</label>
        <input type="text" class="form-control" id="invoice-number" name="invoicenumber">
      </div>
      <div class="form-group">
        <label for="invoice-date">Invoice Date:</label>
        <input type="date" class="form-control" id="invoice-date" name="date">
      </div>
      <div class="form-group">
        <label for="invoice-amount">Invoice Amount:</label>
        <input type="number" class="form-control" id="invoice-amount" name="invoiceamount">
      </div>
      <div class="form-group">
        <label for="cost-center">Cost Center:</label>
        <input type="text" class="form-control" id="cost-center" name="costcenter">
      </div>
      <div class="form-group">
        <label for="user-name">Username:</label>
        <input type="text" class="form-control" class="user-name"  name= "username">
      </div>
      <div class="form-group">
        <label for="user-department">User Department:</label> 
        <input type="text" class="form-control" id="user-department" name="userdept">
      </div>
      <div class="form-group">
        <label for="invoice-status">Invoice Status:</label>
        <select class="form-control" id="invoice-status" name="invstatus">
          <option value="PAID">PAID</option>
          <option value="UNPAID">UNPAID</option>
          <option value="BOOKED">BOOKED</option>
          <option value="GIVEN TO SANTOSH KOTIAN">SUBMITTED TO SANTOSH KOTIAN</option>
          <option value="GIVEN TO PRADEEP BHRAMANKAR">SUBMITTED TO PRADEEP BHRAMANKAR</option>
        </select>
      </div>

      <div class="form-group"><label>Upload Invoice : </label><input type="file" name ="upload"></div>
      <div class="form-group">
        <label for="remarks">Remarks:</label>
        <input type="text" name ="remarks"class="form-control" >
      </div>

      <div class="form-group">
        <label for="status-date">Status Date:</label>
        <input type="date" class="form-control" id="invoice-date" name="sdate">
      </div>
      <input type ="submit" name ="submit" value="SAVE">
    </form>
  </div>
  <!-- Include jQuery and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
