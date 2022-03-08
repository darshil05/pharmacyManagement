<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard - Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/restrict.js"></script>
  </head>
  <body>
    <?php include "sections/sidenav.php"; ?>
    <div class="container-fluid">
      <div class="container">
        <!-- header section -->
        <?php
          require "php/header.php";
          createHeader('home', 'Home', '');
        ?>
        <!-- header section end -->

        <!-- form content -->
        <div class="row">
        
        
        </div>

       

        <div class="row">

          <?php
            function createSection2($icon, $location, $title) {
              echo '
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="padding: 10px;">
              		<div class="dashboard-stats" style="padding: 30px 15px;" onclick="location.href=\''.$location.'\'">
              			<div class="text-center">
                      
              				<div class="h5">'.$title.'</div>
              			</div>
              		</div>
                </div>
              ';
            }
           
            createSection2('', 'add_customer.php', 'Add New Customer');
            createSection2('', 'add_medicine.php', 'Add New Medicine');
            createSection2('', 'add_supplier.php', 'Add New Supplier');
            createSection2('', 'add_purchase.php', 'Add New Purchase');
             createSection2('', 'add_invoice.php', 'Add New Invoice');
          ?>

        </div>
        <!-- form content end -->

  

      </div>
    </div>
  </body>
</html>
