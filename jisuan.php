<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>感谢您的提交，您的医保支付比例为：</h1>
<center><br><h2>
    <?php
	$heji = $_POST["hejijine"];
	$gerenpayzong = $_POST["gerenpay"] + $_POST["gerenpay2"];
	$jieguo3 = $heji - $gerenpayzong;
	$jieguo2 = $jieguo3 / $heji;
	$jieguobaifenshu = $jieguo2 * 100;
	if($jieguobaifenshu > 100){
		echo'数据不合法';
	}elseif($jieguobaifenshu < 0){
		echo'数据不合法';
	}else{
	echo $jieguobaifenshu.'%';
	echo '<br>';
	echo '本次医保统筹支付：'.$jieguo3.'元';
	}
	?>
</center></br></h2>
</body>
</html>
