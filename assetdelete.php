<?php
include("asset_db.php");
$quer=$_GET['del'];
echo $quer;
$delete="DELETE FROM asset WHERE `asset_code` = '$quer'";
$con = mysqli_query($conn,$delete);
if($con > 0)
{
	echo '<script>alert("DATA DELETED SUCCESSFULLY")</script>';
	header("location:assetdisplay.php ");
}

?>