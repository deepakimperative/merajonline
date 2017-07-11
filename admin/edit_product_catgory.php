<?php
session_start();
if(isset($_SESSION['admin_email']))
{
    include("dbconnection.php");
}  else {
   header("location:index.php");  
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $web_title; ?> | Admin | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
    <!-- Bootstrap 3.3.4 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

       <?php 
          include("momforumnotification.php");
          ?>
          
          
      <!-- Left side column. contains the logo and sidebar -->
      
      <?php
      include_once("includes/leftnavigation.php");
      ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Update Product Catgory
            <small></small>
          </h1>
          <ol class="breadcrumb">
              <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li><a href="product_catogries.php"><i class="fa fa-dashboard"></i> Product Catgory</a></li>
            <li class="active">update product catgory</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
         

          

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
              <!-- MAP & BOX PANE -->
              <!-- /.box -->
              <!-- /.row -->

              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                   
                <!-- /.box-header -->
                <!-- form start -->
                <?php
                 $clothing_types=  getAllProductCatgoryById($_REQUEST['id']);
                 $clothing_type=  mysql_fetch_array($clothing_types);
                ?>
                <form role="form" method="post" action="updateproductcatgory.php" enctype="multipart/form-data">
                    <input type="hidden" name="clothing_type_id" value="<?php echo $clothing_type['catogry_id'];  ?>">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Clothing Type Name</label>
                      <input type="text" name="Clothing_type_name" class="form-control" id="Clothing_type_name" value="<?php echo $clothing_type['catogery_name'];  ?>" placeholder="Enter Product Catgory name">
                    </div>
                     
                    <div class="form-group">
                      <label for="exampleInputEmail1">Product Description</label>
                      <textarea class="form-control" rows="3" name="catogery_description" id="catogery_description"><?php echo $clothing_type['catogery_description'];  ?></textarea>
                      
                    </div>           
                    <div class="form-group">
                      <label for="exampleInputEmail1">Clothing Meta Tag Title</label>
                      <input type="text" name="clothing_type_title" value="<?php echo $clothing_type['clothing_type_title'];  ?>" class="form-control" id="clothing_type_title" >
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Meta Keyword</label>
                      <textarea class="form-control" rows="3" name="meta_keywords" id="meta_keywords"><?php echo $clothing_type['meta_keywords'];  ?></textarea>
                      
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Meta Description</label>
                      <textarea class="form-control" rows="3" name="meta_description" id="meta_description"><?php echo $clothing_type['meta_description'];  ?></textarea>
                      
                    </div>
                    
                  <!-- /.box-body -->

                  <div class="box-footer">
                      <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                      <a href="clothes-type.php" class="btn btn-primary">Back</a>
                  </div>
                </form>
            
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php include_once("includes/footer.php"); ?>

      <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>