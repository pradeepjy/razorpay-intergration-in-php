<?php
require_once 'config.php';
require_once 'razorpay/Razorpay.php';

use Razorpay\Api\Api;

$keyId= 'rzp_test_cXRS179aDtmJNb';
$secretKey='6oIb573V45A7ArhNw9IYzBWD';
$api=new Api($keyId,$secretKey);

$customer_name=$_POST['customer_name'];
$customer_email=$_POST['customer_email'];
$customer_mobile=$_POST['customer_mobile'];
$pay_amt=$_POST['pay_amt'];
 
// /*to create order to razorpay*/
 // $order=[
 // 'receipt'=>rand(1000, 9999) . 'ORD',
 // 'amount'=>$pay_amt,
 // 'payment_capture'=>1,
 // 'currency'=>'INR',
 //  'payment_capture' => 1 // auto capture
 // ];
 // var_dump($order->amount);die();
 // $order = $api->order->create($order);
 // ====================
$orderData = [
    'receipt'         => rand(1000, 9999) . 'ORD',
    'amount'          => $pay_amt * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];
// var_dump($displayAmount);die();
?>

<!-- <meta name="viewport" content="width=device-width">
<form method="post" action="success.php">
	<script>
		src=""
		data-key="<?php echo $keyId; ?>"
		data-amount="<?php echo $displayAmount; ?>"
		data-currency="INR"
		data-order_id="<?php echo $razorpayOrderId; ?>"
		data-buttontext="Pay with Razorpay"
		data-name="Myinboxhub"
		data-description="For Donation"
		data-image
	</script>
</form> -->

<form action="success.php" method="POST"> 
	<script src="https://checkout.razorpay.com/v1/checkout.js" 
	   data-key="<?php echo $keyId; ?>" 
	   data-amount="<?php echo $displayAmount; ?>"
	   data-currency="INR" 
	   data-order_id="<?php echo $razorpayOrderId; ?>"
	   data-buttontext="Pay with Razorpay"    
	   data-name="Acme Corp"    
	   data-description="Test transaction"    
	   data-image="https://example.com/your_logo.jpg"    
	   data-prefill.name="<?php echo $customer_name; ?>"    
	   data-prefill.email="<?php echo $customer_email; ?>"    
	   data-prefill.contact="<?php echo $customer_mobile; ?>"    
	   data-theme.color="#528FF0">
	   </script>
	   <input type="hidden" custom="Hidden Element" name="hidden">
	</form>