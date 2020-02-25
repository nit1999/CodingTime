<!--api call and decode --->
<?php 
 $api_url="https://clist.by:443/api/v1/contest/?username=nit1999&api_key=dbad3d4e191e4bc4d5f0b67befb110afd75cef1f&order_by=-id";
 $contest=json_decode(file_get_contents($api_url));
 $first_duration=$contest->meta->limit;
 ?>
 <!--footer --->
 <?php  require "time2code/header.php" ?>

 <!--main body --->

 <p class="text-center font-weight-bold">limit = <?php echo $first_duration; ?></p>
 <ul class="list-group">
 <?php 
 $start_contest="";
foreach ($contest->objects as $key){
  //date_default_timezone_set("Asia/Calcutta");
	$end_contest = new \DateTime($key->end);
$end_contest_format = $end_contest->format('h:i a d.m.Y');
	$start_contest = new \DateTime($key->start);
$start_contest_format = $start_contest->format('h:i a d.m.Y');
 
// time to integer
// $str=$key->start;
// $timestamp = strtotime($str);
// echo "date to integer = ".$timestamp;

  if($key->event=='Codeforces Round #624 (Div. 3)'){
  
?>
 <br>
	<center>
		<h3><?php echo $key->resource->name; ?></h3>
	</center>
   <li class="list-group-item" style="border-bottom: 2px solid black;"><?php echo $key->event; ?>
    <br>
     <p style="float:right;">End = <?php echo " ".$end_contest_format; ?></p>
  	 <p style="float:left;">Start = <?php echo " ".$start_contest_format; ?></p>
     <br>
    
     <!--- script code--->
        
        <?php
       // echo "default time = ".date_default_timezone_get();
         $str=$key->start;//utc format
         echo $str."<br>";
         // hour and min convert to integer
         $HrMin= $start_contest->format('H:i:s');
         echo $HrMin."<br>";
         //store hr and min in integer
         $HrMin_integer=strtotime($HrMin);
         echo "type define = ".$HrMin_integer."<br>";
         //add time to integer 
         $India_time_offset=330*60;
         $add_sec=$HrMin_integer + $India_time_offset;
         echo "add second in hr & min = ".$add_sec."<br>";
         //convert back to its original format
         echo "converted date and time = ".date("H:i:s", $add_sec)."<br>";
        //if hour is greater than 24 hr. then change in day value format
         $date_store=date("H:i:s", $add_sec);
         echo $date_store."<br>";
         //hour check
          $Hr_check=date("H", $add_sec);
          echo $Hr_check."<br>";
         if($Hr_check>24){
           $Hr_check_change=$Hr_check/24;
           echo date(d,$start_contest+$Hr_check_change);
         }
        else
           echo "everthing is ok"."<br>";
           $all_value_print= $start_contest->format('d:m:Y')." ".$date_store;
           echo $all_value_print;
          ?>
         
         
     <!---end script code--->
   	<br>
   	<?php echo "duration = ".gmdate("d:H:i:s",$key->duration)." Day/hr/min/sec "; ?>
   	<br>
   	<a href=<?php echo $key->href ?>><?php echo $key->href ?></a>;
   </li>
  <?php } } ?>
</ul>
<?php 
//date_default_timezone_set("Asia/Calcutta");
//echo "Today is " . date("h:i a  d.m.Y") . "<br>";
// $str=date_default_timezone_get();
//   echo $str;
  ?>
  <br>
  <?php 

 ?>







<!--footer --->
<?php require 'time2code/footer.php'; ?>



























