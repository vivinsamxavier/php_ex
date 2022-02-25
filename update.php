<?php
$cake ="";
$color="";
$price="";
$special="";
$kg="";
$email="";


   if(isset ($_POST['submit'])){
   $id=$_POST['updateid'];
   $select =mysqli_query($conn,"SELECT * FROM cakes WHERE id='$id'");
   $data = mysqli_fetch_assoc($select);
   $cake =$_POST['cake'];
   $color=$_POST['color'];
   $price =$_POST['price'];
   $special =$_POST['special'];
   $kg =$_POST['kg'];
   $email =$_POST['email'];

      $conn = mysqli_connect('localhost','root','','cake_world');

      if(!$conn){
	  echo 'connection error:'.mysqli_connect_error();
}

    $query ="UPDATE `cakes` SET id='$id',cake='$cake' ,color='$color' ,price='$price' ,special='$special' ,kg='$kg' ,email='$email' WHERE id=$id";
    
    $result =mysqli_query($conn,$query);

    if($result){
         echo"successfully inseretd";
    }else{
    	echo"error";
    }

   }



?>

<!DOCTYPE html>
<html>
	
	<?php include('header.php'); ?>
	
    <section class="centertext"></section>
    <h4 class="center">Cake's For You</h4>

    <form class="white" action="" method="get">
    	<lable>cake:</lable>
    	<input type="text" name ="cake" value="<?php echo $cake;?>" >
        

    	<lable>color:</lable>
    	<input type="text" name ="color" value="<?php echo $color;?>">
    	

    	<lable>price:</lable>
    	<input type="number" name ="price" value="<?php echo $price;?>">
        

    	<lable>descrption of cake(special):</lable>
    	<input type="text" name ="special" value="<?php echo $special;?>">
     

    	<lable>how much (k/g):</lable>
    	<input type="number" name ="kg" value="<?php echo $kg;?>">
       

    	
    	<lable>email:</lable>
    	<input type="email" name ="email" value="<?php echo $email;?>" >
    	

    	<div class ="center">
    	<input type="submit"  name="submit" value="update" class= "btn brand z-depth-0">
    </div>
    </form>

	 <?php include('footer.php'); ?>
	 
</section>
</body>
</html>