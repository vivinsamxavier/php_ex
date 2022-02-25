<?php

$conn = mysqli_connect('localhost','root','','cake_world');

      if(!$conn){
	  echo 'connection error:'.mysqli_connect_error();

}
$query ="SELECT * FROM cakes";

   $result = mysqli_query($conn,$query);
     
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;    
}
</style>
</head>
<body>

<h2>Select</h2>

    <table>
    <tr>
    <th>cake</th> 
    <th>color</th>
    <th>price</th>
    <th>special</th>
    <th>kg</th>
    <th>email</th>
    <th>operatiions<th>
    </tr>
  	<?php
  	while ($row = mysqli_fetch_assoc($result))

    {?>
   
    <tr>
    <td><?php echo $row['cake']; ?></td>
    <td><?php echo $row['color']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['special']; ?></td>
    <td><?php echo $row['kg']; ?></td>
    <td><?php echo $row['email']; ?></td>
    
    
    <td><a class="btn btn-primary" href="update.php?updateid=<?php echo $row['id']?>">update</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="delete.php?delid=<?php echo $row['id']?>">delete</a></td>
    </tr>
  

<?php }?>
</table>
<a href="add.php"; class="btn btn-success">ADD</a>
</body>

</html>

 
