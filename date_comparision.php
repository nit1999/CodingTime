<?php 

$now = new DateTime();
echo $now->format('d:m:Y');  
$k=$now;
echo "<br>";
$k_date=$k->format('d-m');
echo $k_date;
echo "<br>";
//date_format -->format('H:i  d.m.Y');
$date1=date_create("2013-03-15");//current_date
$date2=date_create("2013-12-12");//start_date
$date3=date_create("2013-12-12");//end_date
$diff=date_diff($date1,$date2); 
//upcoming contest
/*
 if(start_date > current_date)
  $diff=date_diff($start_date,$current_date)
   if(diff>0)
     {
	
     }

*/
 //live contest
 /*
  if(current_date>=start_date && current_date<=end)

 */
  $diff_val= $diff->format("%a");
echo $diff_val;
 ?>