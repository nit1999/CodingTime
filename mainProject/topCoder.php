<?php 
    require 'api.php';
 ?>
 <?php 
 foreach ($contest->objects as $key){
  $end_contest = new \DateTime($key->end);
$end_contest_format = $end_contest->format('h:i a  d.m.Y');
  $start_contest = new \DateTime($key->start);
$start_contest_format = $start_contest->format('h:i a  d.m.Y');
if($key->resource->id==12){
  ?>
<div class="col-sm">
	<div class="cardCss text-black" style="background-color:#8FC643;">
  <img  src="time2code/logos/topcoder code.png" alt="Avatar" style="height:100px;width:300px;">
  <div class="containerCss">
    <p class="h6 text-center" style="border-bottom: 1px solid red;"><strong><?php echo $key->event; ?></strong></p>
    <center><a href=<?php echo $key->href; ?> style="text-align: center;word-wrap:break-word;"><?php echo $key->href ?></a></center>
  <div class="row" style="border-top: 1px solid red;margin-left:12px;margin-right: 12px;">
    <div class="col-sm" >
<p style="float:left;">Start = <?php echo " ".$start_contest_format; ?></p></div>
    <div class="col-sm">
      <p style="float:right;">End = <?php echo " ".$end_contest_format; ?></p>
    </div>
</div>
  <div class="row" style="border-top: 1px solid red;margin-left:12px;margin-right: 12px;">
  	 <div class="col-sm text-center">
  	 	Remainder
  	 </div>
</div>
  </div>
</div>
</div>
<?php } } ?>