
<?php
if (isset($this->session->userdata['username'])) {

 
}
?>


<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Security</title>

    <!-- Bootstrap css -->

    <link href="<?php echo base_url();?>template/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- admin css -->

     <link href="<?php echo base_url();?>template/assets/css/style.css" rel="stylesheet">
     <link href="<?php echo base_url();?>template/admin/css/font-awesome.min.css" rel="stylesheet">

   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

    .panel-default{

      

      border: 0px solid #4550cf;;
padding: 20px;
margin-top:150px;

box-shadow: 0px 0px 12px #1307da;
    }

    .form_row{

      margin-top:50px;
    }

    .panel-heading{
background:#feb300;

    }


    .login_heading{

      color: #fbf7f7;
background: green;
padding: 10px;
text-align: center;
border:10px;
margin-bottom: 20px;

     
    }

  </style>

  </head>

  <body >

    <div class="container">

    <div class="row">

      <div class="col-md-4">

      </div>

      <div class="col-md-4">

        <div class="panel panel-default">

          <!-- alert username and password login -->

           <?php 

              if($this->session->flashdata('msg'))

              {?>

                <div class="alert alert-danger">

                  <?php echo $msg=$this->session->flashdata('msg');;?>

                </div>

                <br/>
                
              <?php }

              ?>


            <div class="panel-heading">

                <h3 class="panel-title login_heading">Admin Login</h3>


            </div>

            <div class="panel-body">

            	<form action="<?php echo base_url('login/login_cheek');?>" method="post">

            		<div class="form-group">

                      <label for="division">Username</label>

                      <input type="text" name="username" class="form-control" required="required"/>

                    </div>

                    <div class="form-group">

                      <label for="division">Password</label>

                      <input type="password" name="password" class="form-control" required="required"/>

                    </div>

                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">

            	</form>
              <br/>

             
                   
            </div>

        </div>

    </div>
    <div class="col-md-4">

      </div>

  </div>

</div>







  <script src="<?php echo base_url();?>template/assets/js/jquery.min.js"></script>
   
    <script src="<?php echo base_url();?>template/assets/js/bootstrap.min.js"></script>

  </body>

</html>