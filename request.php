<?php session_start(); 

if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
   // Redirect the user to the login page
   header("Location: home.php");
   exit();

   setcookie($_SESSION['user_id'], "", time() - 2500);
}

?>
<?php 
 
include("request_db.php");
if(isset($_POST['submit'])) {
    $asset = $_POST['asset_type'];
    $emp_name = $_POST['employee_name'];
    $emp_code = $_POST['employee_code'];
    $email = $_POST['employee_email'];
    $number = $_POST['employee_number'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $branch = $_POST['branch'];
    $man_name = $_POST['manager_name'];
    $man_email = $_POST['manager_email'];
    $update = $_POST['update'];
    $remarks = $_POST['remark'];

   
        $query_insert = "INSERT INTO `aasetreq` (`asset`, `emp_name`, `emp_code`, `email`, `number`, `address`, `location`, `branch`, `man_name`, `man_email`, `upd`, `remarks`) values ('$asset', '$emp_name', '$emp_code', '$email', '$number', '$address', '$location', '$branch', '$man_name', '$man_email', '$update', '$remarks')";

        $result_insert = mysqli_query($conn, $query_insert);


}
?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
if(isset($_POST['submit'])) {
    $asset = $_POST['asset_type'];
    $emp_name = $_POST['employee_name'];
    $emp_code = $_POST['employee_code'];
    $email = $_POST['employee_email'];
    $number = $_POST['employee_number'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $branch = $_POST['branch'];
    $man_name = $_POST['manager_name'];
    $man_email = $_POST['manager_email'];
    $update = $_POST['update'];
    $remarks = $_POST['remark'];


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
$mail->AddAddress( "ithelpdesk@nitco.in" );
$mail->SetFrom("ithelpdesk@nitco.in", "Nitco_IT");
$mail->AddCC($man_email);
$mail->AddCC($email);
$mail->Subject = "IT Asset Request";
$content = "<table>
            <tr><td><b>Asset Type:</b></td><td>$asset</td></tr>
            <tr><td><b>Employee Name:</b></td><td>$emp_name</td></tr>
            <tr><td><b>Employee Code:</b></td><td>$emp_code</td></tr>
            <tr><td><b>Employee Email:</b></td><td>$email</td></tr>
            <tr><td><b>Employee Number:</b></td><td>$number</td></tr>
            <tr><td><b>Address:</b></td><td>$address</td></tr>
            <tr><td><b>Location:</b></td><td>$location</td></tr>
            <tr><td><b>Branch:</b></td><td>$branch</td></tr>
            <tr><td><b>Manager Name:</b></td><td>$man_name</td></tr>
            <tr><td><b>Manager Email:</b></td><td>$man_email</td></tr>
            <tr><td><b>Update:</b></td><td>$update</td></tr>
            <tr><td><b>Remarks:</b></td><td>$remarks</td></tr>
          </table>";

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo '<script>alert("Email Sent")</script>';
  //var_dump($mail);

  ?>

  <meta http-equiv = "refresh" content = "0; url = http://localhost:80/itm/reqdisplay.php" />

  <?php
} else {
  echo "Email sent Error";
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>IT Asset Request Form</title>
	<style>
		/* Reset default browser styles */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

/* Style for body */
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

/* Style for container */
.container {
  max-width: 600px;
  margin: auto;
  padding: 20px;
  background-color: lightpink;
  align-self: center;
  box-shadow: 10px 10px 10px 10px rgba(0,0,0,0.1);
  opacity: 90%;
}

/* Style for h1 */
h1 {
  font-size: 28px;
  font-weight: bold;
  margin-bottom: 20px;
  text-align: center;
}

/* Style for form elements */
form div {
  margin-bottom: 10px;
}

/* Style for form labels */
label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

/* Style for form inputs */
input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  background-color: #fff;
  font-size: 16px;
}

/* Style for select element */
select {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  background-color: #fff;
  font-size: 16px;
  appearance: none; /* remove default arrow */
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill="%23343a40" d="M6.9,7.1l3.8,3.8l3.8-3.8c0.6-0.6,1.6-0.6,2.1,0c0.6,0.6,0.6,1.6,0,2.1l-4.4,4.4c-0.6,0.6-1.6,0.6-2.1,0l-4.4-4.4C6.3,8.7,6.3,7.7,6.9,7.1z"/></svg>');
  background-repeat: no-repeat;
  background-position: right 10px center;
}

/* Style for button */
button {
  padding: 10px 20px;
  border-radius: 0px;
  background-color: #007bff;
  color: #fff;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Style for submit button */
.save {
  padding: 10px 20px;
  border-radius: 0px;
  background-color: #007bff;
  color: #fff;
  font-size: 16px;
  border: none;
  margin-left: 40%;
  cursor: pointer;
}

/* Style for dropdown content */
.dropdown-content {
  position: relative;
}

/* Style for dropdown options */
.dropdown-content select,
.dropdown-content input {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  background-color: #fff;
  font-size: 16px;
  margin-top: 5px;
}

/* Style for dropdown options on hover */
.dropdown-content:hover {
  display: block;
}

/* Style for dropdown options */
.dropdown-content select option {
  background-color: #fff;
  color: #333;
}
img {
  width: 4%;
  height: 6%;
  margin-left: 15%;
}

/* Style for required fields */

	</style>


<script >   function populateDistricts() {
            var location = document.getElementById("loc").value;
            var districtDropdown = document.getElementById("bnch");
            districtDropdown.innerHTML = "";
            if (location == "North-1" ) {
                var districts = ["Delhi","Delhi NCR","Prayagraj","Varanasi","Lucknow","Agra","Gorakhpur","Ayodhya","Haldwani","Gurugram","Dheradun"];
            } else if (location == "North-2") {
                var districts = ["Panchkula","Patiala","Jammu","Ludhiana","Bathinda","Karnal","Hissar","Jaipur","Ambala","Bikaner","Jalndhar","Amritsar","Solan","srinagar","Jammu","Kota","Kangra","Jodhpur","Udaipur","Rohtak"];
            }
            else if (location == "East") {
                var districts = ["Kolkatta", "Patna","Bhubaneshwar","Guwahati","Ranchi","Dibrugarh","Agartala","Purnia","Howrah","Muzaffarpur","Dhanbad","Bhagalpur","Cuttack","Rayagada","Siliguri","Durgapur","Balasore","Bholpur","Sambalpur","Gaya","Sasaram","Kharagpur"];
            }
            else if (location == "West") {
                var districts = ["Silvassa", "Raipur","Morbi","Worli","Bhuj","Indore","Gwalior","Nagpur","Pune","Jabalpur","Bhopal","Goa","Kolhapur","Ahmedabad","Nasik","Baroda","Surat","Nanded"];
            }
            else if (location == "South") {
                var districts = ["Banglore", "Chennai","Hydrabad","Cochin","Ernakulum","Hubli","Coimbatore","Vellore","Pondicherry","Trichy","Mysore","Calicut","Visakhapatnam","Kottayam","Mangalore","Pathanamthitta","Vijayawada","Madurai","Tirunelvelli","Thrissur","Trivandrum","Ernakulum"];
            }
            else if (location == "Corporate Office") {
                var districts = ["Kanjurmarg"];
            }



             else {
                var districts = [];
            }
            for (var i = 0; i < districts.length; i++) {
                var option = document.createElement("option");
                option.value = districts[i];
                option.text = districts[i];
                districtDropdown.add(option);
            }
        }
    
 </script>







</head>
<body style="background-image: url('canada_montreal_city_night_winter_58623_1920x1080.jpg');" >

<a href="home.php"> <img src ="home.png" > </a>

	<br>

	
	<div class="container">

		<h1>IT Asset Request Form</h1>
		<form method="post" id="asset-request-form" onsubmit="sendEmail(); reset(); return false;">
			<div>
				<label for="asset_type">Asset Type:</label>
				<select name="asset_type" id="asset_type" required>
					<option value="">Select Asset</option>
					<option value="laptop">Laptop</option>
					<option value="desktop">Desktop</option>
				</select>
			</div>
			<div>
				<label for="employee_name">Employee Name:</label>
				<input type="text" name="employee_name" id="employee_name" required>
			</div>
			<div>
				<label for="employee_code">Employee Code:</label>
				<input type="text" name="employee_code" id="employee_code" required>
			</div>
			<div>
				<label for="employee_email">Employee Email:</label>
				<input type="email" name="employee_email" id="employee_email" required>
			</div>
			<div>
				<label for="employee_number">Employee Number:</label>
				<input type="text" name="employee_number" id="employee_number" required>
			</div>

			<div>
			<label for="additional_info">Address:</label>
			<textarea name="address" id="additional_info"></textarea>
		</div>
			<div class="dropdown-content">
	<label> Location : </label>
     <select class="input" name ="location" id="loc" onchange="populateDistricts()"><option value= "North-1">North-1</option> 
    <option value= "North-2">North-2</option> <option value= "East">East</option> <option value= "West">West</option> <option value= "South">South</option><option value= "Corporate Office">Corporate Office</option>  


</select>

<div class="dropdown-content">
<label for="district" name="city">Branch:</label>
	<select id="bnch" class="input" name="branch"required></select>
</div>
   </div>

		<div>
			<label for="manager_name">Manager Name:</label>
			<input type="text" name="manager_name" id="manager_name" required>
		</div>
		<div>
			<label for="manager_email">Manager Email:</label>
			<input type="email" name="manager_email" id="manager_email" required>
		</div>
		<div>
			<label for="update">Update:</label>
			<input type="text" name="update" id="update" required>
		</div>

		<div>
			<label for="remark">Remark:</label>
			<input type="text" name="remark" id="remark" required>
		</div>
		
		<input type="submit" name ="submit" class="save"></input>
	</form>
</div>  
</body>
</html>