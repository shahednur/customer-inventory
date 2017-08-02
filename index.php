<?php include('includes/database.php');?>
<?php 
//Create the select query
$query="SELECT 
        customer.id,
        customer.first_name,
        customer.last_name,
        customer.email,
        customer.password,
        customer_address.address,
        customer_address.address2,
        customer_address.city,
        customer_address.state,
        customer_address.zipcode
        FROM customer
        INNER JOIN customer_address
        ON customer_address.customer_id=customer.id ORDER BY join_date DESC";
//Get results
$result=$mysqli->query($query) or die($mysqli->error.__LINE__);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CManager System | Dashboard</title>

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
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="add_customer.php">Add Customer</a></li>
            <li role="presentation"><a href="product_show.php">Product</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><span style="color:#337AB7;">C</span>Manager System</h3>
      </div>
      
      <div class="row marketing">
        <div class="col-lg-12">
         <?php
           if(isset($_GET['msg'])){
               echo '<div class="customeradded">';
               echo $_GET['msg'];
               echo '</div>';
           }   
         ?>
          <h2>Customers</h2>
           <table class="table table-striped">
            <thead>
                <tr>
                    <th width=20%>Customer Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
               <?php
                //Check if at least one row is found
                if($result->num_rows>0){
                    //Loop through results
                    while($row=$result->fetch_assoc()){
                        //Display customer info
                        $output='<tr>';
                        $output .='<td>'.$row['first_name'].' '.$row['last_name'].'</td>';
                        $output .='<td>'.$row['email'].'</td>';
                        $output .='<td>'.$row['address'].' '.$row['city'].' '.$row['state'].'</td>';
                        $output .='<td><a href="edit_customer.php?id='.$row['id'].'" class="btn btn-default btn-sm">Edit</a></td>';
                        $output .='</tr>';
                        
                        //echo output
                        echo $output;
                    }
                }else{
                    echo "Sorry, no customers were found.";
                }
                ?>
            </tbody>
          </table>
        </div>
      </div>

      <footer class="footer">
        <p>&copy; 2017 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
