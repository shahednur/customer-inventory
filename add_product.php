<?php include('includes/database.php'); ?>
<?php
if($_POST){
    //Assign Get variable
    $id=$_GET['id'];
    $name=mysql_real_escape_string($_POST['name']);
    $description=mysql_real_escape_string($_POST['description']);
    $price=mysql_real_escape_string($_POST['price']);
    $name2=mysql_real_escape_string($_POST['name2']);
    $descr=mysql_real_escape_string($_POST['descr']);
                                           
    //Create customer query
       $query2="INSERT INTO product_categories(name2,descr)
            VALUES('$name2','$descr')";
    
    //Run query
    $mysqli->query($query2);
                                           
    //Create Address query
     $query="INSERT INTO product(name,description,price,categories)
            VALUES('$name','$description','$price',$mysqli->insert_id)";
                                           
    //Run query
    $mysqli->query($query);
    
    $msg='Product added';
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

    <title>CManager System | Add Product</title>

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
          <h2>Add Product</h2>
            <form role="form" method="POST" action="add_product.php?id=<?php echo $id; ?>">
             <div class="form-group">
                <label>Product Name</label>
                <input name="name" type="text" class="form-control" placeholder="Enter Product Name">
              </div>
              <div class="form-group">
                <label>Description</label>
                <input name="description" type="text" class="form-control" placeholder="Write Description">
              </div>
              <div class="form-group">
                <label>Price</label>
                <input name="price" type="text" class="form-control" placeholder="Enter Price">
              </div>
              <div class="form-group">
                <label>Category Name</label>
                <input name="name2" type="text" class="form-control" placeholder="Enter Category">
              </div>
              <div class="form-group">
                <label>Category Descr</label>
                <input name="descr" type="text" class="form-control" placeholder="Enter Category Descr">
              </div>
              <input type="submit" class="btn btn-default" value="Add Product">
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