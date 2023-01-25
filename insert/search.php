  <?php
include 'connect_search.php';
$searchErr = '';
$reg='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from reg where name like '%$search%' or name like '%$search%'");
        $stmt->execute();
        $reg = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
    }
    else
    {
        $searchErr = "Please enter the information";
    }
    
}
 
?>

  <html>
<head>

<style>
.container{
    width:70%;
    height:30%;
    padding:20px;
}
</style>
</head>
 <center>
<body style="background-color:pink;">
    <div class="container">
	<a href="details.php">Home</a>
    <h3><u>Search user details</u></h3>
    <br/><br/>
    <form class="form-horizontal" action="#" method="post">
    <div class="row">
        <div class="form-group">
            <label for="name"><b>Name:</b>:</label>
            <div>
              <input type="text" class="form-control" name="search" placeholder="search here">
            </div>
            <div>
              <button type="submit" name="save">Submit</button>
            </div>
        </div>
        <div class="form-group">
            <span class="error" style="color:red;">* <?php echo $searchErr;?></span>
        </div>
         
    </div>
    </form>
    <br/><br/>
    <h3><u>Search Result</u></h3><br/>
    <div>          
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>email</th>
            <th>address</th>
            <th>Phone number</th>
          </tr>
        </thead>
        <tbody>
		</body>
		</html>
                <?php
                 if(!$reg)
                 {
                    echo '<tr>No data found</tr>';
                 }
                 else{
                    foreach($reg as $key=>$value)
                    {
                        ?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $value['name'];?></td>
                        <td><?php echo $value['email'];?></td>
                        <td><?php echo $value['address'];?></td>
                        <td><?php echo $value['phone_number'];?></td>
                    </tr>
                         
                        <?php
                    }
                     
                 }
                ?>
<?php
include 'connect_search.php';
$searchErr = '';
$employee_details='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from reg where name like '%$search%' or name like '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
    }
    else
    {
        $searchErr = "Please enter the information";
    }
    
}
 
?>