<?php
   if(isset ($_POST['submit'])){
   $cake = $_POST['cake'];
   $color= $_POST['color'];
   $price = $_POST['price'];
   $special = $_POST['special'];
   $kg = $_POST['kg'];
   $email =$_POST['email'];

      $conn = mysqli_connect('localhost','root','','cake_world');

      if(!$conn){
	  echo 'connection error:'.mysqli_connect_error();
}

    $query ="INSERT INTO cakes(cake,color,price,special,kg,email)values('$cake','$color','$price','$special','$kg','$email')";
    // print_r($query);
    $result =mysqli_query($conn,$query);

    if($result){
    	//echo"successfully inseretd";
    }else{
    	echo"error";
    }

   }


  $errors =array('cake'=>'','color'=>'','price'=>'','special'=>'','kg'=>'','email'=>'');

if(isset($_POST['submit'])){

     if(empty($_POST['cake'])){
     $errors['cake'] = 'give a cake what you want <br />';
}else{
	$cake =$_POST['cake'];
	echo htmlspecialchars($_POST['cake']);
	
}
if(empty($_POST['color'])){
    $errors['color'] = 'give a cake color what you want <br />';
}else{
	$color =$_POST['color'];
	echo htmlspecialchars($_POST['color']);
	
}
 if(empty($_POST['price'])){
    $errors['price'] = 'give a price what you want <br />';
}else{
	$price =$_POST['price'];
	echo htmlspecialchars($_POST['price']);
	
}
if(empty($_POST['special'])){
   $errors['special'] = 'give a special what you want <br />';
}else{
	$special =$_POST['special'];
	echo htmlspecialchars($_POST['special']);
}
if(empty($_POST['kg'])){
    $errors['kg'] = 'give a kg what you want <br />';
}else{
	$kg =$_POST['kg'];
	echo htmlspecialchars($_POST['kg']);
	
}
if(empty($_POST['email'])){
    $errors['email'] = 'give a email <br />';
}else{
	$number =$_POST['email'];
	echo htmlspecialchars($_POST['email']);
}
}

?>


<!DOCTYPE html>
<html>
	
	<?php include('header.php'); ?>
	
   
   

    <section class="centertext"></section>
    <h4 class="center">Cake's For You</h4>

    <form class="white" action="add.php ?>" method="POST">
    	<lable>cake:</lable>
    	<input type="text" name ="cake">
        <div class="red-text"> <?php echo $errors['cake'];?></div>

    	<lable>color:</lable>
    	<input type="text" name ="color" >
    	<div class="red-text"> <?php echo $errors['color'];?></div>

    	<lable>price:</lable>
    	<input type="number" name ="price" >
        <div class="red-text"> <?php echo $errors['price'];?></div>

    	<lable>descrption of cake(special):</lable>
    	<input type="text" name ="special" >
        <div class="red-text"> <?php echo $errors['special'];?></div>

    	<lable>how much (k/g):</lable>
    	<input type="number" name ="kg"  >
        <div class="red-text"> <?php echo $errors['kg'];?></div>

    	
    	<lable>email:</lable>
    	<input type="email" name ="email" >
    	<div class="red-text"> <?php echo $errors['email'];?></div>

    	<div class ="center">
    	<input type="submit"  name="submit" value="submit" class= "btn brand z-depth-0">
    </div>
    </form>

	 <?php include('footer.php'); ?>
	 
</section>
</body>
</html>