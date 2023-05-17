<?php
//connect to database
include("invoice_db.php");

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM invoices ";

$result = mysqli_query($conn, $query);
//get invoice number from database
$invoice_number = $_GET['invoice_number']; //replace with the actual invoice number fetched from the database


//specify file path
$file_path = "invoices/".$invoice_number.".pdf"; //replace with the actual file path and extension

//check if file exists
if (file_exists($file_path)) {
    //set headers for file download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file_path).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_path));
    ob_clean();
    flush();
    readfile($file_path);
    exit;
} else {
    echo "File not found.";
}

//close database connection
mysqli_close($conn);
?>
