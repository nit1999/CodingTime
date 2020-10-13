<?php 
 echo "hello";
 $location="21.240342,81.630981";
 $api_url="https://api.darksky.net/forecast/e51ed8f674a66d7cf223548231bd3a4c/".$location;
 $forecast=json_decode(file_get_contents($api_url));
 $temperature_current=$forecast->currently->temperature;
 $current_time=gmdate("H:i:s",$forecast->currently->time);
 $time_zone=$forecast->timezone;
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<p><?php echo $temperature_current; ?></p>
 	<p><?php echo $current_time; ?></p>
 	<p><?php echo $time_zone; ?></p>
 	<p><?php echo gmdate("d:H:i:s",950400); ?></p>
 	<p><?php echo $temp = date("Y-m-d",147934650);
 ?></p>
 </body>
 </html>
