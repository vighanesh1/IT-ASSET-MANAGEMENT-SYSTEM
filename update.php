<?php session_start(); 

if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
   // Redirect the user to the login page
   header("Location: home.php");
   exit();

   setcookie($_SESSION['user_id'], "", time() - 2500);
}

?>


<?php
include("dbconnect.php");
$id=$_GET['id'];
$query= "SELECT * From laptop_details WHERE `emp_code` = '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

?>
<style>
/* Set default font styles for the form */
body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 20px auto;
            width: 80%;
            max-width: 800px;
            background-color: lightpink;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);

        }

        .title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .input_field {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            width: 100%;
        }

            .processor {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            width: 100%;
        }

    .serial {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            width: 100%;
        }   
.model {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            width: 100%;
        }

        .label {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
            
        }

        .input {
            padding: 5px;
            border-radius: 5px;
            border: none;
            outline: none;
            background-color: #f9f9f9;
            font-size: 16px;
            width: 100%;
        }

        select.input {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            border: none;
            outline: none;
            background-color: #f9f9f9;
            font-size: 16px;
        }


        .dropdown-content {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
            width: 100%;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }

        img {
  width: 4%;
  height: 6%;
  margin-left: 15%;
}
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

<!DOCTYPE html>
<html>
<head>
    <title>Update Form</title>
</html>>
<body>

<div class="container">
    <div>
<a  href="home.html"> <img src ="home.png" style="margin:2%" > </a> 
        <div class="title">
        Update Details

        </div>
<form   method="POST" >
    <div class="form">

    <div class="dropdown-content">
    <label> Asset Type : </label>
     <select class="input" name ="asset" ><option value= "Laptop" <?php if ($data['assets'] == 'Laptop'){echo "selected";}?>>Laptop
     </option> 
    <option value= "Desktop" <?php if ($data['assets'] == 'Desktop'){echo "selected";}?>>Desktop</option></select> </div>    

    <div class="input_field"><label>Employee 
    First and Last Name : </label><input type="text"  value = "<?php echo $data['emp_name'];?>"name="emp_name" class="input"></div> 
    <div class="input_field"><label>Employee Code : </label><input type="integer" name="emp_code" class="input"  value = "<?php echo $data['emp_code'];?>"></div>
    <div class="input_field"><label>Official Email : </label><input type="varchar" name="email" class="input"  value = "<?php echo $data['email'];?>"></div> 
    <div class="input_field"><label>Contact Number :  </label><input type="integer" name="number" class="input" value = "<?php echo $data['number'];?>"></div>

    <div class="dropdown-content" >
    <label> Zone : </label>
     <select class="input" name ="state"  id="loc" onchange="setDistrict()"><option value= "North-1" <?php if ($data['state'] == 'North-1'){echo "selected";}?>>North-1
     </option> 
     <option value= "North-2" <?php if ($data['state'] == 'North-2'){echo "selected";}?>>North-2</option> <option value= "East" <?php if ($data['state'] == 'East'){echo "selected";}?>>East</option> <option value= "West" <?php if ($data['state'] == 'West'){echo "selected";}?>>West</option> <option value= "South" <?php if ($data['state'] == 'South'){echo "selected";}?>>South</option><option value= "" <?php if ($data['state'] == 'South'){echo "selected";}?>>Corporate Office</option>

</select>
<div class="input_field">
    <label>Location : </label>

        
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
    <div class="dropdown-content">
    <label> Laptop Make : </label>
     <select class="input" name ="make" ><option value= "Dell" <?php if ($data['make'] == 'Dell'){echo "selected";}?>>Dell
     </option> 
    <option >HP</option> <option value= "Lenovo" <?php if ($data['make'] == 'Lenovo'){echo "selected";}?>>Lenovo</option> <option value= "Acer" <?php if ($data['make'] == 'Acer'){echo "selected";}?>>Acer</option> <option value= "Asus" <?php if ($data['make'] == 'Asus'){echo "selected";}?>>Asus</option> <option value= "Toshiba" <?php if ($data['make'] == 'Toshiba'){echo "selected";}?>>Toshiba</option> <option value= "Sony" <?php if ($data['make'] == 'Sony'){echo "selected";}?>>Sony</option> 
</select>
   </div>
<div class = "model"> <label>Model : </label><input type="varchar" name="model" class="input" value = "<?php echo $data['model'];?>"></div>
<div class = "serial"> <label>Serial Number : </label><input type="varchar" name="serial" class="input" value = "<?php echo $data['serial'];?>"></div>
<div class = "processor"> <label>Processor : </label><input type="varchar" name="processor" class="input" value = "<?php echo $data['processor'];?>"> </div>
<div class = "dropdown-content"> <label>RAM : </label><select class="input" name ="memory"><option value= "2GB" <?php if ($data['memory'] == '2GB'){echo "selected";}?>>2GB</option><option value= "4GB" <?php if ($data['memory'] == '4GB'){echo "selected";}?>>4GB</option> 
    <option value= "8GB" <?php if ($data['memory'] == '8 GB'){echo "selected";}?>>8GB</option> <option value= "12GB" <?php if ($data['memory'] == '12GB'){echo "selected";}?>>12GB</option> <option value= "16GB" <?php if ($data['memory'] == '16GB'){echo "selected";}?>>16GB</option> <option value= "32GB" <?php if ($data['memory'] == '32GB'){echo "selected";}?>>32GB</option> <option value= "64GB"<?php if ($data['memory'] == '64GB'){echo "selected";}?>>64GB</option></select></div>
<div class = "dropdown-content"> <label>HDD :  </label><select class="input" name ="storage"><option value= "280GB" <?php if ($data['storage'] == '280GB'){echo "selected";}?>>280GB</option><option value= "320GB" <?php if ($data['storage'] == '320GB'){echo "selected";}?>>320GB</option><option value= "500GB" <?php if ($data['storage'] == '500GB'){echo "selected";}?>>500GB</option>
    <option value= "1TB" <?php if ($data['storage'] == '1TB'){echo "selected";}?>>1TB</option></select> </select> </div>
<div class = "dropdown-content"> <label> Windows/Mac : </label><select class="input" name ="os"><option value= "Windows11" <?php if ($data['os'] == 'Windows11'){echo "selected";}?>>Windows11</option> <option value= "Windows10" <?php if ($data['os'] == 'Windows10'){echo "selected";}?>>Windows10</option> <option value= "Windows7" <?php if ($data['os'] == 'Windows7'){echo "selected";}?>>Windows7</option> <option value= "Windows Vista" <?php if ($data['os'] == 'Windows Vista'){echo "selected";}?>>Windows Vista</option><option value= "Mac" <?php if ($data['os'] == 'Mac'){echo "selected";}?>>Mac</option> </select> </div>
<div class = "dropdown-content"> <label> MS Office : </label><select class="input" name ="office">
    <option value= "MS Office 2021" <?php if ($data['office'] == 'MS Office 2021'){echo "selected";}?>>MS Office 2021</option>
    <option value= "MS Office 2013" <?php if ($data['office'] == 'MS Office 2013'){echo "selected";}?>>MS Office 2013</option> <option value= "MS Office 2010" <?php if ($data['office'] == 'MS Office 2010'){echo "selected";}?>>MS Office 2010</option> 
    <option value= "MS Office 2007"  <?php if ($data['office'] == 'MS Office 2007'){echo "selected";}?>>MS Office 2007</option></select> </div>
    <div class="input_field"><label> 
    Remarks : </label><input type="text" name="remakrs" class="input"  placeholder="Remarks"  ></div> 
<div><input type="submit" name="data" value="SAVE"></input></div>
</div>
</form>
    </body>
</html>


<?php if(isset($_POST['data'])) {
    $asset= $_POST['asset'];
    $emp_name = $_POST['emp_name'];
    $emp_code = $_POST['emp_code'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $state = $_POST['state'];
    $branch = $_POST['branch'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $serial = $_POST['serial'];
    $processor = $_POST['processor'];
    $memory = $_POST['memory'];
    $storage = $_POST['storage'];
    $os = $_POST['os'];
    $office = $_POST['office'];
    $remarks=$_POST['remarks'];


    
        $query_insert = "UPDATE `laptop_details` SET `assets`='$asset',`emp_name`='$emp_name',`emp_code`='$emp_code',`email`='$email',`number`='$number',`state`='$state',`branch`='$branch',`assets`='$asset',`make`='$make',`model`='$model', `serial`='$serial',`processor`='$processor',`memory`='$memory',`storage`='$storage',`os`='$os',`office`='$office',`remarks` ='$remarks' WHERE `emp_code` = '$id'";
        $result_insert = mysqli_query($conn, $query_insert);


 if($result_insert) {
            echo '<script>alert("DATA UPDATED SUCCESSFULLY")</script>';


            ?>

<meta http-equiv = "refresh" content = "0; url = http://localhost:80/itm/display.php" />

<?php
        }



         else {
            echo "Error: " . mysqli_error($conn);
        }
         



}

?>