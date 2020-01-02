<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test0611</title>
  </head>
  <body align=center>
  <h1><b>Test0611</b></h1>
	<?php
		$name=$_POST["name"];
		$num=$_POST["num"];
		$type=$_POST["type"];
		$act=$_POST["act"];
		echo "Hi!$name,你點的速食餐項目與費用:<br>";
		echo "<hr><br><br>";
		echo "速食餐項目:";
		foreach($type as $value)
		{
			if($value=="VIP客戶")
			{
				foreach($act as $value)
				{
				echo "$value ";
				if($value=="玉米濃湯($50)")
				$sum+=50;
				else if($value=="可樂($35)")
				$sum+=35;
				else if($value=="漢堡($90)")
				$sum+=90;
				else if($value=="炸雞塊($45)")
				$sum+=45;
				else if($value=="薯條($40)")
				$sum+=40;
				else 
				$sum+=20;
				}
				$newsum=$sum*0.9;
				echo "<br><br>餐點費用:$newsum ($sum)VIP客戶打九折";	
			}
			else if($value=="會員客戶")
			{
				foreach($act as $value)
				{
				echo "$value ";
				if($value=="玉米濃湯($50)")
				$sum+=50;
				else if($value=="可樂($35)")
				$sum+=35;
				else if($value=="漢堡($90)")
				$sum+=90;
				else if($value=="炸雞塊($45)")
				$sum+=45;
				else if($value=="薯條($40)")
				$sum+=40;
				else 
				$sum+=20;
				}
				$newsum=$sum*0.95;
				echo "<br><br>餐點費用:$newsum ($sum)會員客戶打九五折";	
			}
			else
			{
				foreach($act as $value)
				{
				echo "$value ";
				if($value=="玉米濃湯($50)")
				$sum+=50;
				else if($value=="可樂($35)")
				$sum+=35;
				else if($value=="漢堡($90)")
				$sum+=90;
				else if($value=="炸雞塊($45)")
				$sum+=45;
				else if($value=="薯條($40)")
				$sum+=40;
				else 
				$sum+=20;
				}
				$newsum=$sum;
				echo "<br><br>餐點費用:$newsum ($sum)一般客戶不打折";
			}	
		}
	?>	
  </body>
</html>
