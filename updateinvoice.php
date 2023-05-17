<?php 
session_start(); 

if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
    // Redirect the user to the login page
    header("Location: home.php");
    exit();
}

include("invoice_db.php");

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
    
    // update the invoice details in the database
    $query_update = "UPDATE `invoices` SET `vendor_code`='$vendorcode', `vendor_name`='$vendorname', `material_service_ordered`='$material', `invoice_date`='$date', `invoice_amount`='$invoiceamount', `cost_center`='$costcenter', `username`='$username', `user_department`='$userdept', `invoice_status`='$invstatus', `status_date`='$sdate', `remarks`='$remarks' WHERE `invoice_number`='$invoicenumber'";
    $result_update = mysqli_query($conn, $query_update);
    
    if($result_update) {
        echo '<script>alert("UPDATED SUCCESSFULLY")</script>';
    } else {
        echo "Error: " . mysqli_error($conn);
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


?>
<?php
include("invoice_db.php");
$id=$_GET['id'];
$query= "SELECT * From invoices WHERE `invoice_number` = '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Invoice Update Form</title>
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
        <input type="text" class="form-control" id="vendor-code" name="vendorcode" value="<?php echo $data['vendor_code']; ?>">
      </div>
      <div class="form-group">
        <label for="vendor-name">Vendor Name:</label>
        <input type="text" class="form-control" id="vendor-name" name=vendorname value="<?php echo $data['vendor_name']; ?>">
      </div>
      <div class="form-group">
        <label for="material-ordered">Material/Service Ordered:</label>
        <input type="text" class="form-control" id="material-ordered" name="material" value="<?php echo $data['material_service_ordered']; ?>">
      </div>
      <div class="form-group">
        <label for="invoice-number">Invoice Number:</label>
        <input type="text" class="form-control" id="invoice-number" name="invoicenumber" value="<?php echo $data['invoice_number']; ?>">
      </div>
      <div class="form-group">
        <label for="invoice-date">Invoice Date:</label>
        <input type="date" class="form-control" id="invoice-date" name="date" value="<?php echo $data['invoice_date']; ?>">
      </div>
      <div class="form-group">
        <label for="invoice-amount">Invoice Amount:</label>
        <input type="number" class="form-control" id="invoice-amount" name="invoiceamount" value="<?php echo $data['invoice_amount']; ?>">
      </div>
      <div class="form-group">
        <label for="cost-center">Cost Center:</label>
        <input type="text" class="form-control" id="cost-center" name="costcenter" value="<?php echo $data['cost_center']; ?>">
      </div>
      <div class="form-group">
        <label for="user-name">Username:</label>
        <input type="text" class="form-control" class="user-name"  name= "username" value="<?php echo $data['username']; ?>">
      </div>
      <div class="form-group">
        <label for="user-department">User Department:</label> 
        <input type="text" class="form-control" id="user-department" name="userdept"  value="<?php echo $data['user_department']; ?>">
      </div>
      <div class="form-group">
        <label for="invoice-status">Invoice Status:</label>
        <select class="form-control" id="invoice-status" name="invstatus">
          <option value="PAID" <?php if ($data['invoice_status'] == 'PAID'){echo "selected";}?>>PAID</option>
          <option value="UNPAID" <?php if ($data['invoice_status'] == 'UNPAID'){echo "selected";}?>>UNPAID</option>
          <option value="BOOKED" <?php if ($data['invoice_status'] == 'BOOKED'){echo "selected";}?>>BOOKED</option>
          <option value="GIVEN TO SANTOSH KOTIAN" <?php if ($data['invoice_status'] == 'SUBMITTED TO SANTOSH KOTIAN'){echo "selected";}?>>SUBMITTED TO SANTOSH KOTIAN</option>
          <option value="GIVEN TO PRADEEP BHRAMANKAR" <?php if ($data['invoice_status'] == 'SUBMITTED TO PRADEEP BHRAMANKAR'){echo "selected";}?>>SUBMITTED TO PRADEEP BHRAMANKAR</option>
        </select>
      </div>

      <div class="form-group"><label>Upload Invoice : </label><input type="file" name ="upload"></div>
      <div class="form-group">
        <label for="remarks">Remarks:</label>
        <input type="text" name ="remarks"class="form-control" value="<?php echo $data['remarks']; ?>" >
      </div>

      <div class="form-group">
        <label for="status-date">Status Date:</label>
        <input type="date" class="form-control" id="invoice-date" name="sdate"  value="<?php echo $data['status_date']; ?>">
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


