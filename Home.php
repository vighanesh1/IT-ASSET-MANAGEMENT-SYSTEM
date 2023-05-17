
<?php session_start(); 

if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
   // Redirect the user to the login page
   header("Location: login.php");
   exit();

   setcookie($_SESSION['user_id'], "", time() - 600);
}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <style>
      img {
      width: 100px;
      border-radius: 50%;}
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #EEEEEE;
        color:blue;
      }
      .container {
        width: 80%;
        margin-top: 10%;
        margin-left: 10%;
        display: table;
      }
      .row {
        display: table-row;
      }
      .cell {
        display: table-cell;
        text-align: center;
        vertical-align: middle;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
        opacity: 0.97;
    background: transparent;
      }
      .cell:hover {
        transform: translateY(-5px);
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
      }
      .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: #ffffff;
        text-decoration: none;
        border-radius: 0px;
        transition: all 0.3s ease;
      }
      .button:hover {
        background-color: #3e8e41;
      }
      h2{color: red;}
    </style>
  </head>
  <body>

  	<center><h2>IT Assets Management System</h2></center>
    <center><img src = "nitco.png"></center>
    <div class="container">
      <div class="row">
        <div class="cell">
          <a href="request.php" class="button">Assets Request</a>
        </div>
         <div class="cell">
          <a href="reqdisplay.php" class="button">Display Assets Request</a>
        </div>
        <div class="cell">
          <a href="form.php" class="button">Asset Allocation</a>
        </div>
      </div>
      <div class="row">
        <div class="cell">
          <a href="display.php" class="button">Display Allocated Assets</a>
        </div>
        <div class="cell">
          <a href="invoiceform.php" class="button">Invoice Entry</a>
        </div>
        <div class="cell">
          <a href="underconstruction.html" class="button">IT Ticket System</a>
        </div>         
      </div>
      <div class="cell"><a href="Asset.php" class="button">Asset Entry</a>
                 </div>
                 <div class="cell"><a href="Assetdisplay.php" class="button">Asset Display</a>
                 </div>
      <div class="cell">
          <a href="itbudget.php" class="button">Analytics</a>
        </div>
        
    </div>
  </body>
</html>
