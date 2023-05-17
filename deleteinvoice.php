<?php
include("invoice_db.php");
$quer=$_GET['del'];
echo $quer;
$delete="DELETE FROM invoices WHERE `invoice_number` = '$quer'";
$con = mysqli_query($conn,$delete);
if($con > 0)
{
	echo '<script>alert("DATA DELETED SUCCESSFULLY")</script>';
	header("location:invdatadisplay.php ");
}

?>