<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src='https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js'></script>
    <link rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
      <link href="css/style.css"  rel="stylesheet" type="text/css">
     <script>
     function f(){
     alert('Posted facebook Successfully');

     }
     </script>

  
    </head>
    <body class="nav-md">
        <div class="container body">
          <div class="main_container">
            <div class="col-md-3 left_col">
              <div class="left_col scroll-view">
                
              </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
              <div class="nav_menu" style='background:#73C8E4'>
               
              </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col" role="main" style="min-height: 325px;">
                <div class="">
            

       
             <a href="fbconfig.php" onclick='f()' class='btn btn-success'>Post Mashable News to<i class='fa fa-official'>Friends</i></a>
	
           
             

                </div>
             
              
            </div>

</body>
</html>


