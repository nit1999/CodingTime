<?php 
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
  <form action="passing_value.php" method="post">
     <select name="check" id="check">
     	<option value="1">2344</option>
     	<option value="2:34">435</option>
     	<option value="3">345</option>
     	<option value="4">34573</option>
     </select><br>
     <input type="submit" name="submit" value="submit">
  </form>
</body>
</html>
<?php 
  if(isset($_POST['check'])){
$value = $_POST['check'];
echo "Your registration is: ".$value;
}
 ?>
 <?php 
session_destroy();
  ?>