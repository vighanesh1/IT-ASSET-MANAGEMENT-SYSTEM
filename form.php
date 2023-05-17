

<html>
<head> <title>Asset Configuration Form</title>
    <style>
        /* Reset default browser styles */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

/* Apply styles to the body */
body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  color: #333;
  background-color: #f2f2f2;
}

/* Apply styles to the container */
.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 30px;
  background-color: #F5F5DC;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Apply styles to the title */
.title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

/* Apply styles to the notice */
.notice {
  margin-bottom: 20px;
  color: #777;
}

/* Apply styles to the form */
.form {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  grid-gap: 20px;
}

/* Apply styles to the input fields */
.input_field {
  margin-bottom: 20px;
}

/* Apply styles to the labels */
label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

/* Apply styles to the dropdown content */
.dropdown-content {
  margin-bottom: 20px;
}

/* Apply styles to the select elements */
select.input {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  line-height: 1.5;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
}

/* Apply styles to the input elements */
input.input {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  line-height: 1.5;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
}

/* Apply styles to the submit button */
[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  font-size: 16px;
  line-height: 1.5;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: -20%;
}

[type="submit"]:hover {
  background-color: #0069d9;
}

        img {
  width: 4%;
  height: 6%;
  margin-left: 15%;
}
    </style> </head>
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
<body>

    
 &nbsp &nbsp &nbsp &nbsp &nbsp<a  href="home.php"> <img src ="home.png" > </a>
<div class="container">
        <div class="title">
        Asset Configuration Form

        </div>
        <div class="notice">
        *Please Enter Data As Per Examples Shown In Input Field You Can Directly Strat Typing into Input Field Given Example Will Automatically Disaper </div> 
<form  action ="#" method="POST">
    <div class="form">


    <div class="dropdown-content">
    <label> Asset : </label>
     <select class="input" name ="assets"  ><option value= "Laptop">Laptop</option> 
    <option value= "Desktop">Desktop</option>  

</select>
   </div>
    <div class="input_field"><label>Employee 
    First and Last Name : </label><input type="text" name="em" class="input"  placeholder="Vighanesh Shirke" required ></div> 
    <div class="input_field"><label>Employee Code : </label><input type="integer" name="eid" class="input" placeholder="1234567" required ></div>
    <div class="input_field"><label>Official Email : </label><input type="varchar" name="email" class="input" placeholder="xyz@nitco.in" required ></div> 
    <div class="input_field"><label>Contact Number :  </label><input type="integer" name="number" class="input" placeholder="9912345678" required ></div>
    
  <div class="dropdown-content">
    <label> Zone : </label>
     <select class="input" name ="location" id="loc" onchange="populateDistricts()"><option value= "North-1">North-1</option> 
    <option value= "North-2">North-2</option> <option value= "East">East</option> <option value= "West">West</option> <option value= "South">South</option> <option value= "Corporate Office">Corporate Office</option> 

</select>
   </div>

<div class="dropdown-content">
<label for="district" name="city">Location:</label>
    <select id="bnch" class="input" name="branch"required></select>
</div>


    <div class="dropdown-content">
    <label> Laptop Make : </label>
     <select class="input" name ="laptop"><option value= "Dell">Dell</option> 
    <option value= "HP">HP</option> <option value= "Lenovo">Lenovo</option> <option value= "Acer">Acer</option> <option value= "Asus">Asus</option> <option value= "Toshiba">Toshiba</option> <option value= "Sony">Sony</option> <option value= "Apple">Apple</option> 

</select>
   </div>
<div class = "model"> <label>Model : </label><input type="varchar" name="model" class="input" placeholder="Latiude 3410" required ></div>
<div class = "serial"> <label>Serial Number : </label><input type="varchar" name="serial" class="input" placeholder="XYZ1234" required></div>
<div class = "processor"> <label>Processor : </label><input type="varchar" name="processor" class="input" placeholder="Intel ® Core™ i3-4005U CPU @ 1.70GHz"> </div>
<div class = "dropdown-content"> <label>RAM : </label><select class="input" name ="memory"><option value= "2GB">2GB</option><option value= "4GB">4GB</option> 
    <option value= "8GB">8GB</option> <option value= "12GB">12GB</option> <option value= "16GB">16GB</option> <option value= "32GB">32GB</option> <option value= "64GB">64GB</option></select></div>
<div class = "dropdown-content"> <label>HDD :  </label><select class="input" name ="storage"><option value= "280GB">280GB</option><option value= "320GB">320GB</option><option value= "500GB">500GB</option>
    <option value= "1TB">1TB</option></select> </div>
<div class = "dropdown-content"> <label> Windows/Mac : </label><select class="input" name ="os"><option value= "Windows11">Windows11</option> <option value= "Windows10">Windows10</option> <option value= "Windows7">Windows7</option> <option value= "Windows Vista">Windows Vista</option><option value= "Mac">Mac</option>  </select> </div>
<div class = "dropdown-content"> <label> MS Office : </label><select class="input" name ="mso">
    <option value= "MS Office 2021">MS Office 2021</option>
    <option value= "MS Office 2013" >MS Office 2013</option> <option value= "MS Office 2010">MS Office 2010</option> 
    <option value= "MS Office 2007">MS Office 2007</option></select> </div> 
    <div class="input_field"><label> 
    Remarks : </label><input type="text" name="remarks" class="input"  placeholder="remarks"  ></div> <br>
<div><input type="submit" name="data" value="SAVE"></input></div>

</div>
</form>
    </body>
</html>

<?php 
include("dbconnect.php");

if(isset($_POST['data'])) {
    $asset= $_POST['assets'];
    $emp_name = $_POST['em'];
    $emp_code = $_POST['eid'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $location = $_POST['location'];
    $branch = $_POST['branch'];
    $make = $_POST['laptop'];
    $model = $_POST['model'];
    $serial = $_POST['serial'];
    $processor = $_POST['processor'];
    $memory = $_POST['memory'];
    $storage = $_POST['storage'];
    $os = $_POST['os'];
    $office = $_POST['mso'];
    $remarks=$_POST['remarks'];

    // Check for duplicate entry
    $query_check = "SELECT * FROM `laptop_details` WHERE `emp_code` = '$emp_code'";
    $result_check = mysqli_query($conn, $query_check);

    if (mysqli_num_rows($result_check) > 0) {
        // Duplicate entry found
        echo '<script>alert("Error: Duplicate entry for emp_code '.$emp_code.'")</script>';
    } else {
            // No duplicate entry found, proceed with inserting data
        $query_insert = "INSERT INTO `laptop_details` (`assets`,`emp_name`, `emp_code`, `email`, `number`,`state`,`branch`, `make`, `model`, `serial`, `processor`, `memory`, `storage`, `os`, `office`,`remarks`) values ('$asset','$emp_name', '$emp_code', '$email', '$number','$location','$branch','$make','$model','$serial','$processor','$memory', '$storage', '$os','$office','$remarks')";
        $result_insert = mysqli_query($conn, $query_insert);

        if($result_insert) {
            echo '<script>alert("DATA INSERTED SUCCESSFULLY")</script>';
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

    