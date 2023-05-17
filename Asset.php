

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
  background-color: #E188F1;
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
  margin-left: 90%;
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
<body>

    
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a  href="home.php"> <img src ="home.png" > </a>
<div class="container">
        <div class="title">
        Asset Entry Form

        </div>
       <form  action ="#" method="POST">
    <div class="form">


    <div class="dropdown-content">
    <label> Asset : </label>
     <select class="input" name ="assets"  ><option value= "Laptop">Laptop</option> 
    <option value= "Desktop">Desktop</option> 

</select>

   </div>
   <div class="dropdown-content">
    <label>  Make : </label>
     <select class="input" name ="laptop"><option value= "Dell">Dell</option> 
    <option value= "HP">HP</option> <option value= "Lenovo">Lenovo</option> <option value= "Acer">Acer</option> <option value= "Asus">Asus</option> <option value= "Toshiba">Toshiba</option> <option value= "Sony">Sony</option> <option value= "Apple">Apple</option> 

</select>
   </div>
<div class="input_field"><label>Model 
    </label><input type="text" name="model" class="input"   required ></div>
    <div class="input_field"><label>Serial Number 
    </label><input type="text" name="serialnumber" class="input"   required ></div>
    <div class="input_field"><label>Configuration 
    </label><input type="text" name="configuration" class="input"   required ></div>
    
    <div class="input_field"><label>Asset Code 
    </label><input type="text" name="assetcode" class="input"  required ></div>

    <div class="input_field"><label>Cost Center 
    </label><input type="text" name="cost_center" class="input"   required ></div>
    <div class="input_field"><label>Remarks 
    </label><input type="text" name="remarks" class="input"   required ></div>
    <div><input type="submit" name="data" value="SAVE"></input></div>

    
      
</div>
</form>
    </body>
</html>

<?php 
include("asset_db.php");

if(isset($_POST['data'])) {
    $asset= $_POST['assets'];
    $make= $_POST['laptop'];
    $model= $_POST['model'];
    $serialnumber = $_POST['serialnumber'];
    $configuration = $_POST['configuration'];
    $asset_code = $_POST['assetcode'];
    $costcenter = $_POST['cost_center'];
    $remarks= $_POST['remarks'];
    // Check for duplicate entry
    $query_check = "SELECT * FROM `asset` WHERE `asset_code` = '$asset_code'";
    $result_check = mysqli_query($conn, $query_check);

    if (mysqli_num_rows($result_check) > 0) {
        // Duplicate entry found
        echo '<script>alert("Error: Duplicate entry for asset_code '.$asset_code.'")</script>';
    } else {
            // No duplicate entry found, proceed with inserting data
        $query_insert = "INSERT INTO `asset` (`assets`,`make`,`model`,`serialnumber`,`configuration`,`asset_code`,`costcenter`,`remarks`) values ('$asset','$make','$model','$serialnumber','$configuration','$asset_code','$costcenter','$remarks')";
        $result_insert = mysqli_query($conn, $query_insert);

        if($result_insert) {
            echo '<script>alert("DATA INSERTED SUCCESSFULLY")</script>';
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

    