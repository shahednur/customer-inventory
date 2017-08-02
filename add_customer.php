<?php include('includes/database.php'); ?>
<?php
if($_POST){
    //Assign Get variable
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
                                           
    //Create customer query
    $query="INSERT INTO customer(first_name,last_name,email,password)
            VALUES('$first_name','$last_name','$email','$password')";
    
    //Run query
    $mysqli->query($query);
                                           
    //Create Address query
    $query2="INSERT INTO customer_address(customer_id,address,address2,city,state,zipcode)
            VALUES('$mysqli->insert_id','$address','$address2','$city','$state','$zipcode')";
                                           
    //Run query
    $mysqli->query($query2);
    
    $msg='Customer added';
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

    <title>CManager System | Add Cusomter</title>

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
            <li role="presentation"><a href="product_show.php">Product</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><span style="color:#337AB7;">C</span>Manager System</h3>
      </div>
      
      <div class="row marketing">
        <div class="col-lg-12">
          <h2>Add Customers</h2>
            <form role="form" method="POST" action="add_customer.php?id=<?php echo $id; ?>">
             <div class="form-group">
                <label>First Name</label>
                <input name="first_name" type="text" class="form-control" placeholder="Enter First Name">
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input name="last_name" type="text" class="form-control" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label>Email address</label>
                <input name="email" type="email" class="form-control" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control" placeholder="Enter Password...">
              </div>
              <div class="form-group">
                <label>Address</label>
                <input name="address" type="text" class="form-control" placeholder="Enter Address">
              </div>
              <div class="form-group">
                <label>Address2</label>
                <input name="address2" type="text" class="form-control" placeholder="Enter Address2">
              </div>
              <div class="form-group">
                <label>City</label>
                <input name="city" type="text" class="form-control" placeholder="Enter City">
              </div>
              <div class="form-group">
                <label>State</label>
                <input name="state" type="text" class="form-control" placeholder="Enter State">
              </div>
              <div class="form-group">
                <label>Zipcode</label>
                <input name="zipcode" type="text" class="form-control" placeholder="Enter Zipcode">
              </div>
              <input type="submit" class="btn btn-default" value="Add Customer">
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