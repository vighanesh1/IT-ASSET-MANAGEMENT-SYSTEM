<?php session_start(); 

if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
   // Redirect the user to the login page
   header("Location: assetdisplay.php");
   exit();

   setcookie($_SESSION['user_id'], "", time() - 2500);
}

?>
<html>
<head> 
<style>
    table {
        border-collapse: collapse;
        width:100%;
    }
    th, td {
        padding: 8px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #DF58D3;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #EEA62F;
    }
    .export-btn {
        background-color: #4CAF50;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
        margin-bottom: 16px;
    }

    a {
        background-color: #3d85c6;
        color: white;
        padding: 4px 8px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: center;
        margin-bottom: 12px;
        margin-left : 12px;
    }
    button {
        background-color: #4CAF50;
        color: white;
        padding: 4px 8px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: center;
        margin-bottom: 12px;
    }
</style>
<script>
function exportToExcel() {
    // Get the table data
    var table = document.getElementsByTagName("table")[0];
    var rows = table.getElementsByTagName("tr");
    var data = [];
    for (var i = 0; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
        var row = [];
        for (var j = 0; j < cells.length; j++) {
            row.push(cells[j].innerText);
        }
        data.push(row.join(","));
    }
    var csv = data.join("\n");

    // Download the file
    var link = document.createElement("a");
    link.setAttribute("href", "data:text/csv;charset=utf-8," + encodeURIComponent(csv));
    link.setAttribute("download", "assets.csv");
    link.style.display = "none";
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
</script>
<script type="text/javascript">
//Search
function searchTable() {
    // Declare variables
    var input, filter, table, tr, td, i, j, txtValue;
    input = document.getElementById("search-box");
    filter = input.value.toUpperCase();
    table = document.getElementsByTagName("table")[0];
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        // Skip the header row
        if (i == 0) {
            continue;
        }
        // Loop through all table cells in this row
        for (j = 0; j < tr[i].cells.length; j++) {
            td = tr[i].cells[j];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break;
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
}
</script>
<script type="text/javascript"> 
function tag(){
    var table=document.getElementsByTagName("table");
    var rows= document.getElementById("row");
    var cells = document.getElementById("cell");
    windows.alert("Asset Code is" 'NL' cells);


}

</script>
</head>
<body><input type="text" id="search-box" onkeyup="searchTable()" placeholder="Search...">

<?php
include("asset_db.php");

$query = "SELECT * FROM `asset`";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo " <tr><th>Assets</th><th>Make</th><th>Model</th><th>Configuration</th><th>SerialNumber</th><th>Asset Code<th>Cost Center</th><th>Remarks</th><th>Operation</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr id='row'><td >" . $row['assets'] . "</td><td>" . $row['make'] . "</td><td>" . $row['model'] . "</td><td>" . $row['configuration'] . "</td><td>" . $row['serialnumber'] . "</td><td id='cell'>" . $row['asset_code'] . "</td><td>" . $row['serialnumber'] . "</td><td>" . $row['remarks'] . "</td> <td>
            <a href = 'assetupdate.php?id=$row[asset_code];' > Update </a>  <a href= 'assetdelete.php?del=$row[asset_code]'>Delete</a><br><br> <input type='submit' value = 'Asset Tag'name='assettag' id=$row[asset_code] onclick=tag()> </td></tr>";
    }
    echo "</table>";
    echo "<button class='export-btn' onclick=exportToExcel() >Export to Excel</button>";
} else {
    echo "<h2>No data found!</h2>";
}

mysqli_close($conn);
?>
</body>
</html>
