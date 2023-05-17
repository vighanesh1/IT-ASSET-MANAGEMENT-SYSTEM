<?php
$servername ="localhost";
$username ="root";
$password = "";
$dbname = "analytics";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
    echo "connection established";

    $check = "SELECT `invoice_number` FROM data";
    $qur = mysqli_query($conn, $check);
    print_r($check[`invoice`]);
    if (mysqli_num_rows($qur) <= 0) {
        $sql = "INSERT INTO data (`Month`, `Amount`, `invoice_number`)
                SELECT MONTH(`invoice_date`), `invoice_amount`, `invoice_number`
                FROM invoice.invoices";
        $result = mysqli_query($conn, $sql);
    }
}
else
{
    echo "connection failed";
}

?>