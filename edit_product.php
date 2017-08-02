<?php include('includes/database.php'); ?>
<?php 
 //Assign get variable
 $id=$_GET['id'];

//Create customer select query
$query="SELECT * FROM product INNER JOIN product_categories ON product_categories.id=product.categories WHERE product.id=$id";
$result=$mysqli->query($query) or die($mysqli->error.__LINE__);

if($result=$mysqli->query($query)){
    //Fetch object array
    while($row=$result->fetch_assoc()){
        $name = $row['name'];
        $description=$row['description'];
        $price=$row['price'];
        $name2=$row['name2'];
        $descr=$row['descr'];
    }
    
    //Free Result set
    $result->close();
}
?>
<?php 
if($_POST){
    //Assign get variable
    $id=$_GET['id'];
    
    $name=mysql_real_escape_string($_POST['name']);
    $description=mysql_real_escape_string($_POST['description']);
    $price=mysql_real_escape_string($_POST['price']);
    $name2=mysql_real_escape_string($_POST['name2']);
    $descr=mysql_real_escape_string($_POST['descr']);
    
    //Create address update
    $query="UPDATE product_categories
    SET
    name2='$name2',
    descr='$descr'
    WHERE id=$id";
    $mysqli->query($query) or die();
    
    //Create customer update
    $query="UPDATE product
    SET
    name='$name',
    description='$description',
    price='$price'
    WHERE id=$id"; 
    $mysqli->query($query) or die();
    
     $msg='Product updated';
    header('Location:product_show.php?msg='.urlencode($msg).'');
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

    <title>CManager System | Edit Product</title>

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
            <li role="presentation"><a href="add_customer.php">Add Customer</a></li>
            <li role="presentation" class="active"><a href="add_product.php">Product</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><span style="color:#337AB7;">C</span>Manager System</h3>
      </div>
      
      <div class="row marketing">
        <div class="col-lg-12">
          <h2>Edit Product</h2>
            <form role="form" method="POST" action="edit_product.php?id=<?php echo $id; ?>">
             <div class="form-group">
                <label>Product Name</label>
                <input name="name" type="text" class="form-control" value="<?php echo $name; ?>" placeholder="Enter Product Name">
              </div>
              <div class="form-group">
                <label>Description</label>
                <input name="description" type="text" class="form-control" value="<?php echo $description; ?>" placeholder="Description">
              </div>
              <div class="form-group">
                <label>Price</label>
                <input name="price" type="text" class="form-control" value="<?php echo $price; ?>" placeholder="Enter Price">
              </div>
              <div class="form-group">
                <label>Category</label>
                <input name="name2" type="text" class="form-control" value="<?php echo $name2; ?>" placeholder="Enter Category">
              </div>
              <div class="form-group">
                <label>Cat... Description</label>
                <input name="descr" type="text" class="form-control" value="<?php echo $descr; ?>" placeholder="Enter Description">
              </div>
              <input type="submit" class="btn btn-default" value="Update Product">
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