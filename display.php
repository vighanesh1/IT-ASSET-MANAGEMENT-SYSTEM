<?php session_start(); 

if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
   // Redirect the user to the login page
   header("Location: home.php");
   exit();

   setcookie($_SESSION['user_id'], "", time() - 2500);
}

?>

<html>
<head> 
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
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
        background-color: #4CAF50;
        color: white;
        padding: 4px 8px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
        margin-bottom: 16px;
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
    link.setAttribute("download", "laptop_details.csv");
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
</head>
<body><input type="text" id="search-box" onkeyup="searchTable()" placeholder="Search...">

<?php
include("dbconnect.php");

$query = "SELECT * FROM `laptop_details`";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo " <tr><th>Assets</th><th>Employee Name</th><th>Employee Code</th><th>Official Email</th><th>Contact Number</th><th>Location</th><th>Branch<th>Laptop Make</th><th>Model</th><th>Serial Number</th><th>Processor</th><th>RAM</th><th>HDD</th><th>Windows/Mac</th><th>MS Office</th><th>Remarks</th><th>Operation</th>></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['assets'] . "</td><td>" . $row['emp_name'] . "</td><td>" . $row['emp_code'] . "</td><td>" . $row['email'] . "</td><td>" . $row['number'] . "</td><td>" . $row['state'] . "</td><td>" . $row['branch'] . "</td><td>" . $row['make'] . "</td><td>" . $row['model'] . "</td><td>" . $row['serial'] . "</td><td>" . $row['processor'] . "</td><td>" . $row['memory'] . "</td><td>" . $row['storage'] . "</td><td>" . $row['os'] . "</td><td>" . $row['office'] . "</td><td>" . $row['remarks'] . "</td> <td>
            <a href = 'update.php ? id=$row[emp_code];' > Update </a></td></tr>";
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
