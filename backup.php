<?php 
 $api_url="https://clist.by:443/api/v1/contest/?username=nit1999&api_key=dbad3d4e191e4bc4d5f0b67befb110afd75cef1f&order_by=-id";
 $contest=json_decode(file_get_contents($api_url));
 $first_duration=$contest->meta->limit;
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 </head>
 <body>
 <ul class="list-group">
 <?php 
foreach ($contest->objects as $key){
	$end_contest = new \DateTime($key->end);
$end_contest_format = $end_contest->format('H:i d.m.Y');
	$start_contest = new \DateTime($key->start);
$start_contest_format = $start_contest->format('H:i d.m.Y');
if($key->resource->id==2){

	?>
	<center>
    <img class="rounded" src="time2code/logos/codechef logo.png" alt="" height="80px"><?php
    } 
 else if($key->resource->id==1){ //start of codeforces logo
  ?>
  <center>
  <img class="rounded" src="time2code/logos/codeforces logo.png" alt="" height="80px" width="180px">
  </center>
  <?php
  }   //end of codechef logo
   else if($key->resource->id==73){   //hackerEarth logo
   ?>
  <center>
  <img class="rounded" src="time2code/logos/hackerEarth logo.jpg" alt="" height="80px" width="180px">
  </center>
  <?php
   }
   else if($key->resource->id==12){ //topcoder logo
   ?>
  <center>
  <img class="rounded" src="time2code/logos/topcoder code.png" alt="" height="80px" width="180px">
  </center>
  <?php
   }
   else if($key->resource->id==102){  //leetcode logo
   ?>
  <center>
  <img class="rounded" src="time2code/logos/leetcode logo.png" alt="" height="80px" width="180px">
  </center>
  <?php
   }
   else if($key->resource->id==93){  //atcoder logo
   ?>
  <center>
  <img class="rounded" src="time2code/logos/atcoder logo.png" alt="" height="80px" width="180px">
  </center>
  <?php
   }
   else  if($key->resource->id==26){  //spoj logo
   ?>
  <center>
  <img  class="rounded" src="time2code/logos/spoj logo.jpg" alt="" height="80px" width="180px">
  </center>
  <?php
   }
   else{  //other logo
   ?>
  <center>
  <img class="rounded" src="time2code/logos/other logo.jpg" alt="" height="80px" width="180px">
  </center>
  <?php
}
  ?>
  </center>
		<!--<h3><?php //echo $key->resource->name; ?></h3> -->
   <li class="list-group-item" style="border-bottom: 2px solid black;"><?php echo $key->event; ?>
    <br>
     <p style="float:right;">End = <?php echo " ".$end_contest_format; ?></p>
  	 <p style="float:left;">Start = <?php echo " ".$start_contest_format; ?></p>

   	<br>
   	<?php echo "duration = ".gmdate("d:H:i:s",$key->duration)." day "; ?>
   	<br>
   	<a href=<?php echo $key->href ?>><?php echo $key->href ?></a>;
   </li>
  <?php } ?>
</ul>




























 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
 </html>