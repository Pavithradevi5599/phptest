<?php include('connect.php')?>
<?php include('t_connection.php')?>
<html>
<head>
<title>registration</title>
</head>
<body style="background-color:pink;">
<center>
<div>
<p><a href="home.php">HOME</a></p>
</div>
<div class="header">
<h2>Signup</h2>
</div>
<form method="post" action="details.php">
<?php include('error.php'); ?>
<div>
<label>Name</label>
<input type="text" name="name" value="<?php echo $name;?>">
</div>
<div>
<label>Email</label>
<input type="text" name="email"  $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"; value="<?php echo $email;?>">
</div>
<div>
<label>address</label>
<textarea cols="21" rows="4" name="address" value="<?php echo $address;?>"></textarea>
</div>
<div>
<label>Mobile</label>
<input type="tel" name="phone_number" pattern="[6789][0-9]{9}"   value="<?php echo $phone_number;?>">
</div>
<div>
  <input type="reset" type="submit" name="reset">
<button type="sumbit" name="insert" class="button">Insert</button>
<a href="search.php">Search</a>
</div>
<table  class="table table-bordered" >
    <thead>
      <tr>
		<th>#</th>
        <th>name</th>
        <th>email</th>
        <th>Address</th>
		<th>Phone number</th>
		</tr>
    </thead>
    <tbody>
	<?php
	$res=mysqli_query($link,"select * from reg");
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["name"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["address"]; echo "</td>";
		echo "<td>"; echo $row["phone_number"]; echo "</td>";
		echo "</tr>";
	}
	
	?>
	
             
         </tbody>
      </table>
    </div>
</div>
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>
    </tbody>
  </table>

				
</form>
</body>
</html>