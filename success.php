<?php
require_once 'config.php';
echo '<pre>';print_r($_POST);

$sql="INSERT INTO payment_laser (payment_id,order_id,signature_hash) VALUE ('".$_POST['razorpay_payment_id']."','".$_POST['razorpay_order_id']."','".$_POST['razorpay_signature']."')";

if($conn->query($sql)===TRUE)
{
	echo "New record create successfully";
}else
{
	echo "Error:" .$sql."<br>".$conn->error;
}

$conn->close();
die; ?>