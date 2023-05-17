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
 $id=$_GET['id'];
$query = "SELECT * FROM `aasetreq` where emp_code='$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

?>
<?php

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
   $query_insert = "UPDATE  `aasetreq` SET `asset`='$asset', `emp_name` = '$emp_name', `emp_code` = '$emp_code', `email` = '$email', `number` = '$number', `address` = '$address', `location` ='$location' , `branch` = 'branch', `man_name` = 'man_name', `man_email`= '$man_email', `upd` = '$update', `remarks` = '$remarks' WHERE `emp_code` ='$id'";

        $result_insert = mysqli_query($conn, $query_insert);

        if($result_insert) {
            echo '<script>alert("DATA UPDATED SUCCESSFULLY")</script>';


        }



         else {
            echo "Error: " . mysqli_error($conn);
        }
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
$mail->AddAddress( $email);
$mail->SetFrom("ithelpdesk@nitco.in", "Nitco_IT");
$mail->AddCC($man_email);
$mail->Subject = "'Update On' Asset Request";
$content = "'Update On 'IT Asset Request for'<?php echo $emp_name?>'<table>
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


?>

  <meta http-equiv = "refresh" content = "0; url = http://localhost:80/itm/reqdisplay.php" />

  <?php
} else {
  echo "Email sent Error";
}


?>
<html>
<head> <title>Request Update Form</title>
	<style type="text/css">/* Base styles */
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
  background-color: lightyellow;
  align-self: center;
  box-shadow: 10px 10px 10px 10px rgba(0,0,0,0.1);
  opacity: 90%;
}
.title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
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

<body>
	<div class="container">
		<div class="title">
		Update Request Details

		</div>

		<form method="post" id="asset-request-form" >
			<div>
				<label for="asset_type"> Asset Type:</label>
				<select name="asset_type" id="asset_type" required>
					
					<option value="laptop" <?php if ($data['asset'] == 'Laptop'){echo "selected";}?>>Laptop</option>
					<option value="desktop" <?php if ($data['asset'] == 'Desktop'){echo "selected";}?>>Desktop</option>
				</select>
			</div>
			<div>
				<label for="employee_name">Employee Name:</label>
				<input type="text" name="employee_name" id="employee_name" value ="<?php echo $data['emp_name'];?>" required >
			</div>
			<div>
				<label for="employee_code">Employee Code:</label>
				<input type="text" name="employee_code" id="employee_code"  class ="input" value = "<?php echo $data['emp_code'];?>" required>
			</div>
			<div>
				<label for="employee_email">Employee Email:</label>
				<input type="email" name="employee_email" id="employee_email" value = "<?php echo $data['email'];?>" required>
			</div>
			<div>
				<label for="employee_number">Employee Number:</label>
				<input type="text" name="employee_number" id="employee_number" value = "<?php echo $data['number'];?>"required>
			</div>

			<div>
			<label for="additional_info">Address:</label>
			<textarea name="address" id="additional_info" > <?php echo $data['address'];?></textarea>
		</div>
			<div class="dropdown-content">
	<label> Location : </label>
     <select class="input" name ="location" id="loc" onchange="populateDistricts()"><option value= "North-1" <?php if ($data['location'] == 'North-1'){echo "selected";}?>>North-1</option> 
    <option value= "North-2" <?php if ($data['location'] == 'North-2'){echo "selected";}?>>North-2</option> <option value= "East" <?php if ($data['location'] == 'East'){echo "selected";}?>>East</option> <option value= "West" <?php if ($data['location'] == 'North-1'){echo "selected";}?>>West</option> <option value= "South" <?php if ($data['location'] == 'South'){echo "selected";}?>>South</option> <option value= "Corporate Office" <?php if ($data['location'] == 'Corporate Office'){echo "selected";}?>>Corporate Office</option>  

</select>

<div class="dropdown-content">
<label for="district" name="city">Branch:</label>
	<select class="input" name="branch" id="bnch" >
          <option value="Delhi" <?php if ($data['branch'] == 'Delhi'){echo "selected";}?>>Delhi</option>
  <option value="Delhi NCR" <?php if ($data['branch'] == 'Delhi NCR'){echo "selected";}?>>Delhi NCR</option>
  <option value="Prayagraj" <?php if ($data['branch'] == 'Prayagraj'){echo "selected";}?>>Prayagraj</option>
  <option value="Varanasi" <?php if ($data['branch'] == 'Varanasi'){echo "selected";}?>>Varanasi</option>
  <option value="Lucknow" <?php if ($data['branch'] == 'Lucknow'){echo "selected";}?>>Lucknow</option>
  <option value="Agra" <?php if ($data['branch'] == 'Agra'){echo "selected";}?>>Agra</option>
  <option value="Gorakhpur" <?php if ($data['branch'] == 'Gorakhpur'){echo "selected";}?>>Gorakhpur</option>
  <option value="Ayodhya" <?php if ($data['branch'] == 'Ayodhya'){echo "selected";}?>>Ayodhya</option>
  <option value="Haldwani" <?php if ($data['branch'] == 'Haldwani'){echo "selected";}?>>Haldwani</option>
  <option value="Gurugram" <?php if ($data['branch'] == 'Gurugram'){echo "selected";}?>>Gurugram</option>
  <option value="Dheradun" <?php if ($data['branch'] == 'Dheradun'){echo "selected";}?>>Dheradun</option>
  <option value="Panchkula" <?php if ($data['branch'] == 'Panchkula'){echo "selected";}?>>Panchkula</option>
  <option value="Patiala" <?php if ($data['branch'] == 'Patiala'){echo "selected";}?>>Patiala</option>
  <option value="Jammu" <?php if ($data['branch'] == 'Jammu'){echo "selected";}?>>Jammu</option>
  <option value="Ludhiana" <?php if ($data['branch'] == 'Ludhiana'){echo "selected";}?>>Ludhiana</option>
  <option value="Bathinda" <?php if ($data['branch'] == 'Bathinda'){echo "selected";}?>>Bathinda</option>
  <option value="Karnal" <?php if ($data['branch'] == 'Karnal'){echo "selected";}?>>Karnal</option>
  <option value="Hissar" <?php if ($data['branch'] == 'Hissar'){echo "selected";}?>>Hissar</option>
  <option value="Jaipur" <?php if ($data['branch'] == 'Jaipur'){echo "selected";}?>>Jaipur</option>
  <option value="Ambala" <?php if ($data['branch'] == 'Ambala'){echo "selected";}?>>Ambala</option>
  <option value="Bikaner" <?php if ($data['branch']== 'Bikaner'){echo "selected";}?>>Bikaner</option>

  <option value="Jalandhar" <?php if ($data['branch'] == 'Jalandhar'){echo "selected";}?>>Jalandhar</option>
  <option value="Amritsar" <?php if ($data['branch'] == 'Amritsar'){echo "selected";}?>>Amritsar</option>
  <option value="Solan" <?php if ($data['branch'] == 'Solan'){echo "selected";}?>>Solan</option>
  <option value="Srinagar" <?php if ($data['branch'] == 'Srinagar'){echo "selected";}?>>Srinagar</option>
  <option value="Kota" <?php if ($data['branch'] == 'Kota'){echo "selected";}?>>Kota</option>
  <option value="Kangra" <?php if ($data['branch'] == 'Kangra'){echo "selected";}?>>Kangra</option>
  <option value="Jodhpur" <?php if ($data['branch'] == 'Jodhpur'){echo "selected";}?>>Jodhpur</option>
  <option value="Udaipur" <?php if ($data['branch'] == 'Udaipur'){echo "selected";}?>>Udaipur</option>
  <option value="Rohtak" <?php if ($data['branch'] == 'Rohtak'){echo "selected";}?>>Rohtak</option>
  <option value="Kolkata" <?php if ($data['branch'] == 'Kolkata'){echo "selected";}?>>Kolkata</option>
  <option value="Patna" <?php if ($data['branch'] == 'Patna'){echo "selected";}?>>Patna</option>
  <option value="Bhubaneshwar" <?php if ($data['branch'] == 'Bhubaneshwar'){echo "selected";}?>>Bhubaneshwar</option>
  <option value="Guwahati" <?php if ($data['branch'] == 'Guwahati'){echo "selected";}?>>Guwahati</option>
  <option value="Ranchi" <?php if ($data['branch'] == 'Ranchi'){echo "selected";}?>>Ranchi</option>
  <option value="Dibrugarh" <?php if ($data['branch'] == 'Dibrugarh'){echo "selected";}?>>Dibrugarh</option>
  <option value="Agartala" <?php if ($data['branch'] == 'Agartala'){echo "selected";}?>>Agartala</option>
  <option value="Purnia" <?php if ($data['branch'] == 'Purnia'){echo "selected";}?>>Purnia</option>
  <option value="Howrah" <?php if ($data['branch'] == 'Howrah'){echo "selected";}?>>Howrah</option>
  <option value="Muzaffarpur" <?php if ($data['branch'] == 'Muzaffarpur'){echo "selected";}?>>Muzaffarpur</option>
  <option value="Dhanbad" <?php if ($data['branch'] == 'Dhanbad'){echo "selected";}?>>Dhanbad</option>
  <option value="Bhagalpur" <?php if ($data['branch'] == 'Bhagalpur'){echo "selected";}?>>Bhagalpur</option>
    <option value="Cuttack" <?php if ($data['branch'] == 'Cuttack'){echo "selected";}?>>Cuttack</option>
  <option value="Rayagada" <?php if ($data['branch'] == 'Rayagada'){echo "selected";}?>>Rayagada</option>
  <option value="Siliguri" <?php if ($data['branch'] == 'Siliguri'){echo "selected";}?>>Siliguri</option>
  <option value="Durgapur" <?php if ($data['branch'] == 'Durgapur'){echo "selected";}?>>Durgapur</option>
  <option value="Balasore" <?php if ($data['branch'] == 'Balasore'){echo "selected";}?>>Balasore</option>
  <option value="Bholpur" <?php if ($data['branch'] == 'Bholpur'){echo "selected";}?>>Bholpur</option>
  <option value="Sambalpur" <?php if ($data['branch'] == 'Sambalpur'){echo "selected";}?>>Sambalpur</option>
  <option value="Gaya" <?php if ($data['branch'] == 'Gaya'){echo "selected";}?>>Gaya</option>
  <option value="Sasaram" <?php if ($data['branch'] == 'Sasaram'){echo "selected";}?>>Sasaram</option>
  <option value="Kharagpur" <?php if ($data['branch'] == 'Kharagpur'){echo "selected";}?>>Kharagpur</option>
  <option value="Silvassa" <?php if ($data['branch'] == 'Silvassa'){echo "selected";}?>>Silvassa</option>
  <option value="Raipur" <?php if ($data['branch'] == 'Raipur'){echo "selected";}?>>Raipur</option>
  <option value="Morbi" <?php if ($data['branch'] == 'Morbi'){echo "selected";}?>>Morbi</option>
  <option value="Worli" <?php if ($data['branch'] == 'Worli'){echo "selected";}?>>Worli</option>
  <option value="Bhuj" <?php if ($data['branch'] == 'Bhuj'){echo "selected";}?>>Bhuj</option>
  <option value="Indore" <?php if ($data['branch'] == 'Indore'){echo "selected";}?>>Indore</option>
  <option value="Gwalior" <?php if ($data['branch'] == 'Gwalior'){echo "selected";}?>>Gwalior</option>
  <option value="Nagpur" <?php if ($data['branch'] == 'Nagpur'){echo "selected";}?>>Nagpur</option>
  <option value="Pune" <?php if ($data['branch'] == 'Pune'){echo "selected";}?>>Pune</option>
  <option value="Jabalpur" <?php if ($data['branch'] == 'Jabalpur'){echo "selected";}?>>Jabalpur</option>
  <option value="Bhopal" <?php if ($data['branch'] == 'Bhopal'){echo "selected";}?>>Bhopal</option>
  <option value="Goa" <?php if ($data['branch'] == 'Goa'){echo "selected";}?>>Goa</option>
  <option value="Ahmedabad" <?php if ($data['branch'] == 'Ahmedabad'){echo "selected";}?>>Ahemdabad</option>
  <option value="Nasik" <?php if ($data['branch'] == 'Nasik'){echo "selected";}?>>Nasik</option>
  <option value="Baroda" <?php if ($data['branch'] == 'Baroda'){echo "selected";}?>>Baroda</option>
  <option value="Surat" <?php if ($data['branch'] == 'Surat'){echo "selected";}?>>Surat</option>
  <option value="Nanded" <?php if ($data['branch'] == 'Nanded'){echo "selected";}?>>Nanded</option>
<option value="Banglore"<?php if ($data['city'] == 'Banglore') {echo " selected";}?>>Banglore</option>
  <option value="Chennai"<?php if ($data['city'] == 'Chennai') {echo " selected";}?>>Chennai</option>
  <option value="Hydrabad"<?php if ($data['city'] == 'Hydrabad') {echo " selected";}?>>Hydrabad</option>
  <option value="Cochin"<?php if ($data['city'] == 'Cochin') {echo " selected";}?>>Cochin</option>
  <option value="Ernakulum"<?php if ($data['city'] == 'Ernakulum') {echo " selected";}?>>Ernakulum</option>
  <option value="Hubli"<?php if ($data['city'] == 'Hubli') {echo " selected";}?>>Hubli</option>
  <option value="Coimbatore"<?php if ($data['city'] == 'Coimbatore') {echo " selected";}?>>Coimbatore</option>
  <option value="Vellore"<?php if ($data['city'] == 'Vellore') {echo " selected";}?>>Vellore</option>
  <option value="Pondicherry"<?php if ($data['city'] == 'Pondicherry') {echo " selected";}?>>Pondicherry</option>
  <option value="Trichy"<?php if ($data['city'] == 'Trichy') {echo " selected";}?>>Trichy</option>
  <option value="Mysore"<?php if ($data['city'] == 'Mysore') {echo " selected";}?>>Mysore</option>
  <option value="Calicut"<?php if ($data['city'] == 'Calicut') {echo " selected";}?>>Calicut</option>
  <option value="Visakhapatnam"<?php if ($data['city'] == 'Visakhapatnam') {echo " selected";}?>>Visakhapatnam</option>
  <option value="Kottayam"<?php if ($data['city'] == 'Kottayam') {echo " selected";}?>>Kottayam</option>
  <option value="Mangalore"<?php if ($data['city'] == 'Mangalore') {echo " selected";}?>>Mangalore</option>
  <option value="Pathanamthitta"<?php if ($data['city'] == 'Pathanamthitta') {echo " selected";}?>>Pathanamthitta</option>
  <option value="Vijayawada"<?php if ($data['city'] == 'Vijayawada') {echo " selected";}?>>Vijayawada</option>
  <option value="Madurai"<?php if ($data['city'] == 'Madurai') {echo " selected";}?>>Madurai</option>
  <option value="Tirunelvelli"<?php if ($data['city'] == 'Tirunelvelli') {echo " selected";}?>>Tirunelvelli</option>
  <option value="Thrissur"<?php if ($data['city'] == 'Thrissur') {echo " selected";}?>>Thrissur</option>
  <option value="Trivandrum"<?php if ($data['city'] == 'Trivandrum') {echo " selected";}?>>Trivandrum</option>
  <option value="Ernakulum"<?php if ($data['city'] == 'Ernakulum') {echo " selected";}?>>Ernakulum</option>
  <option value="Kanjurmarg"<?php if ($data['city'] == 'Kanjurmarg') {echo " selected";}?>>Kanjurmarg</option>  
</select>
</div>
   </div>

		<div>
			<label for="manager_name">Manager Name:</label>
			<input type="text" name="manager_name" id="manager_name"  value = "<?php echo $data['man_name'];?>"required>
		</div>
		<div>
			<label for="manager_email">Manager Email:</label>
			<input type="email" name="manager_email" id="manager_email" value = "<?php echo $data['man_email'];?>" required>
		</div>
		<div>
			<label for="update">Update:</label>
			<input type="text" name="update" id="upd" value = "<?php echo $data['upd'];?>"required>
		</div>

		<div>
			<label for="remark">Remark:</label>
			<input type="text" name="remark" id="rem" value = "<?php echo $data['remarks'];?>" required>
		</div>
		
		<input type="submit" name ="submit" class="save"></input>
	</form>

</div>
</form>
	</body>
</html>
