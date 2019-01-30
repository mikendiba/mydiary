<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title><?php echo $title ?></title>
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

<!-- PRE LOADER -->

<!-- <div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div> -->

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="<?php echo base_url();?>" class="navbar-brand">My Diary</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <ul>
							<li><a href="<?php echo base_url();?>" class="active">Home</a></li>
							<li><a href="<?php echo base_url().'about';?>" class="active">About</a></li>
							<li><a href="<?php echo base_url('posts/create');?>" class="active">New Diary Post</a></li>
							<li><a href="<?php echo base_url('posts/');?>" class="active">View Posts</a></li>
							<li><a href="<?php echo base_url('posts/');?>" class="active">Logout</a></li>
						</ul>
               </ul>
          </div>

  </div>
</div>

<!-- Home Section -->