<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>医保支付比例为：</title>
</head>
<body>
<h1>感谢您的提交，您的医保支付比例为：</h1>
<center><br><h2>
    <?php
	$totalamount = $_POST["totalamount"];//定义变量
	$sumofindividualpayments = $_POST["personalaccountpayment"] + $_POST["individualpayment"];//个人支付总和
	$medicalinsuranceco_payment = $totalamount - $sumofindividualpayments;//医保统筹支付
	$payoutratio = $medicalinsuranceco_payment / $totalamount;//计算医保支付比例
	$percentage = $payoutratio * 100;//结果×100
    /*
    数据合法性验证
    */
	if($percentage > 100){
		echo'数据不合法';
	}elseif($percentage < 0){
		echo'数据不合法';
	}else{
	echo $percentage.'%';
	echo '<br>';
	echo '本次医保统筹支付：'.$medicalinsuranceco_payment.'元';
	}
	?>
</center></br></h2>
</body>
</html>
