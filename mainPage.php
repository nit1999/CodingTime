<?php 
   require 'mainProject/header.php'; //header file included
  require 'mainProject/api.php';
  ?>


<div class="row1" >
	<!------for leftside ------------->
  <?php 
      require 'mainProject/leftSide.php';
   ?>
  <!------for rightside ------------->
  <div class="column" style="background-color:#449DD1;overflow-y:scroll;overflow-x: hidden;border-top-right-radius: 12px;border-bottom-right-radius: 12px;box-shadow: 2px 2px 12px #78C0E0">
<div class="row">
<!---- loop------------>



<!----first codechef--------->
 <?php 
    require 'mainProject/codeChef.php';
  ?>
<!----second hackerEarth--------->
<?php 
    require 'mainProject/hackerEarth.php';
 ?>
<!----third codeForces--------->
 <?php 
    require 'mainProject/codeForces.php';
  ?>
<!----fourth leetCode--------->
<?php 
    require 'mainProject/leetCode.php';
 ?>

<!----fifth spoj--------->
<?php 
    require 'mainProject/spoj.php';
 ?>
<!----sixth topCoder--------->
<?php 
    require 'mainProject/topCoder.php';
 ?>
<!----seventh atCoder--------->
<?php 
   require 'mainProject/atCoder.php';
 ?>
 <!----eighth other--------->
<?php 
   require 'mainProject/other.php';
 ?>
</div>







  	</div>
  </div>


<?php 
  require 'mainProject/footer.php';
 ?>





