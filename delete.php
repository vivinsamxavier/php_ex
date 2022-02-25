<?php 
  
  if(isset($_GET['delid'])){
  $id=$_GET['delid'];



 $conn = mysqli_connect('localhost','root','','cake_world');

if(!$conn){
	die('connection error'.mysqli_connect_error());
}

 $query="DELETE FROM cakes WHERE id = $id";
 $result = mysqli_query($conn,$query);

if($result){
	echo "successfully delete";

}else{
	echo"Error while deleting record";
}


  }

?>

<!DOCTYPE html>
<html>
	<body>
		<div>
		<a href="view.php"; class="btn btn-success">view</a>
	</div>
</body>

</html>

	</body>

</html>