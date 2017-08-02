<?php include('includes/database.php'); ?>
<?php 
 //Assign get variable
 $id=$_GET['id'];

//Create customer select query
$query="SELECT * FROM customer INNER JOIN customer_address ON customer_address.customer_id=customer.id WHERE customer.id=$id";
$result=$mysqli->query($query) or die($mysqli->error.__LINE__);

if($result=$mysqli->query($query)){
    //Fetch object array
    while($row=$result->fetch_assoc()){
        $first_name = $row['first_name'];
        $last_name=$row['last_name'];
        $email=$row['email'];
        $password=$row['password'];
        $address=$row['address'];
        $address2=$row['address2'];
        $city=$row['city'];
        $state=$row['state'];
        $zipcode=$row['zipcode'];
    }
    
    //Free Result set
    $result->close();
}
?>
<?php 
if($_POST){
    //Assign get variable
    $id=$_GET['id'];
    
    $first_name=mysql_real_escape_string($_POST['first_name']);
    $last_name=mysql_real_escape_string($_POST['last_name']);
    $email=mysql_real_escape_string($_POST['email']);
    $password=mysql_real_escape_string(md5($_POST['password']));
    $address=mysql_real_escape_string($_POST['address']);
    $address2=mysql_real_escape_string($_POST['address2']);
    $city=mysql_real_escape_string($_POST['city']);
    $state=mysql_real_escape_string($_POST['state']);
    $zipcode=mysql_real_escape_string($_POST['zipcode']);
    
    //Create customer update
    $query="UPDATE customer
    SET
    first_name='$first_name',
    last_name='$last_name',
    email='$email',
    password='$password'
    WHERE id=$id"; 
    $mysqli->query($query) or die();
    
    //Create address update
    $query="UPDATE customer_address
    SET
    address='$address',
    address2='$address2',
    city='$city',
    state='$state',
    zipcode='$zipcode'
    WHERE customer_id=$id";
        
    $mysqli->query($query) or die();
    
     $msg='Customer updated';
    header('Location:index.php?msg='.urlencode($msg).'');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CManager System | Edit Customer</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/jubtron-narrow.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation" class="active"><a href="add_customer.php">Add Customer</a></li>
            <li role="presentation"><a href="add_product.php">Product</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><span style="color:#337AB7;">C</span>Manager System</h3>
      </div>
      
      <div class="row marketing">
        <div class="col-lg-12">
          <h2>Edit Customers</h2>
            <form role="form" method="POST" action="edit_customer.php?id=<?php echo $id; ?>">
             <div class="form-group">
                <label>First Name</label>
                <input name="first_name" type="text" class="form-control" value="<?php echo $first_name; ?>" placeholder="Enter First Name">
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input name="last_name" type="text" class="form-control" value="<?php echo $last_name; ?>" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label>Email address</label>
                <input name="email" type="email" class="form-control" value="<?php echo $email; ?>" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control" value="<?php echo $password; ?>" placeholder="Enter Password...">
              </div>
              <div class="form-group">
                <label>Address</label>
                <input name="address" type="text" class="form-control" value="<?php echo $address; ?>" placeholder="Enter Address">
              </div>
              <div class="form-group">
                <label>Address2</label>
                <input name="address2" type="text" class="form-control" value="<?php echo $address2; ?>" placeholder="Enter Address2">
              </div>
              <div class="form-group">
                <label>City</label>
                <input name="city" type="text" class="form-control" value="<?php echo $city; ?>" placeholder="Enter City">
              </div>
              <div class="form-group">
                <label>State</label>
                <input name="state" type="text" class="form-control" value="<?php echo $state; ?>" placeholder="Enter State">
              </div>
              <div class="form-group">
                <label>Zipcode</label>
                <input name="zipcode" type="text" class="form-control" value="<?php echo $zipcode; ?>" placeholder="Enter Zipcode">
              </div>
              <input type="submit" class="btn btn-default" value="Update Customer">
           </form>
        </div>
      </div>

      <footer class="footer">
        <p>&copy; 2017 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>