<!DOCTYPE html>
<html lang="en">  
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title><?php echo "Login" ?></title>
<!--

Template 2085 Neuron

http://www.tooplate.com/view/2085-neuron

-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">

<!-- Main css -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">

</head>
<body>




<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body" style="background: #FF5733;">
                                        <h2>Login</h2>
    <?php
    if(!empty($success_msg)){
        echo '<p class="statusMsg">'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p class="statusMsg">'.$error_msg.'</p>';
    }
    ?>
                        <form action="" method="post">
                                <div class="form-group has-feedback">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required="" value="">
                                    <?php echo form_error('email','<span class="help-block">','</span>'); ?>
                                 </div>
                            <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="submit" name="loginSubmit" class="btn-primary" value="Submit"/>
        </div>
                        </form>
            <p class="footInfo">Don't have an account? <a href="<?php echo base_url(); ?>users/registration">Register here</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>





<!-- <div class="container">
    <h2>User Login</h2>
    <?php
  //  if(!empty($success_msg)){
  //      echo '<p class="statusMsg">'.$success_msg.'</p>';
  //  }elseif(!empty($error_msg)){
  //      echo '<p class="statusMsg">'.$error_msg.'</p>';
  //  }
    ?>
    <form action="" method="post">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="">
            <?php //echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <?php //echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="submit" name="loginSubmit" class="btn-primary" value="Submit"/>
        </div>
    </form>
    <p class="footInfo">Don't have an account? <a href="<?php// echo base_url(); ?>users/registration">Register here</a></p>
</div> -->
</body>
</html>
