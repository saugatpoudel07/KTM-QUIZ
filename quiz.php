<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "ktmquiz");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 $type=$_GET["type"];
 
// Escape user inputs for security

 
// attempt insert query execution

 if($type=="ans1"){
 alert(rightanswer);
 }
if(mysqli_query($link, $sql)){
	

	?>
	 <script type="text/javascript">
  alert('Data Are Inserted Successfully Checkout Your Database Table');
  </script>
  <?php
header("Location:./index.php");
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 if(mysqli_query($link, $sql1)){
	

	?>
	 <script type="text/javascript">
  alert('Data Are Inserted Successfully Checkout Your Database Table');
  </script>
  <?php
header("Location:./index.php");
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 if(mysqli_query($link, $sql2)){
	

	?>
	 <script type="text/javascript">
  alert('Data Are Inserted Successfully Checkout Your Database Table');
  </script>
  <?php
header("Location:./index.php");
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

  