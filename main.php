<?php 

   require 'header.php'; //header file included
  require 'api.php';
  ?>


<div class="row1" >
	<!------for leftside ------------->
  <?php 
      require 'leftSide.php';
      $offset=$offset_value_get;
   ?>
  <!------for rightside ------------->
  <div class="column" style="background-color:#449DD1;overflow-y:scroll;overflow-x: hidden;border-top-right-radius: 12px;border-bottom-right-radius: 12px;box-shadow: 2px 2px 12px #78C0E0">
<div class="row">
<!---- loop------------>


<!----first codechef--------->
 <?php 
 if (isset($_POST['codeChefVar'])){
    require 'codeChef.php';
}
//<!----second hackerEarth--------->

 else if (isset($_POST['hackerEarthVar'])){
     require 'hackerEarth.php';
}
   

//<!----third codeForces--------->

else if (isset($_POST['codeForcesVar'])){
    require 'codeForces.php';
}

//<!----fourth leetCode--------->
 else if (isset($_POST['leetCodeVar'])){
    require 'leetCode.php';
}
    
//<!----fifth spoj--------->
 else if (isset($_POST['spojVar'])){
    require 'spoj.php';
}
   
//<!--all contest show default or click --->
 else{
   require 'codeChef.php';
   require 'hackerEarth.php';
   require 'codeForces.php';
    require 'leetCode.php';
    require 'spoj.php';
require 'topCoder.php';
 require 'atCoder.php';
 require 'other.php';
}
  ?>
  <!----sixth topCoder--------->
<?php 
    // require 'topCoder.php';
 ?>
<!----seventh atCoder--------->
<?php 
   // require 'atCoder.php';
 ?>
 <!----eighth other--------->
<?php 
   // require 'other.php';
 ?>
</div>







  	</div>
  </div>


<?php 
  require 'footer.php';
 ?>





