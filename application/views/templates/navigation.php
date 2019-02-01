  <header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input type="search" name="search" id="search" placeholder="What are you looking for?">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <style type="text/css">
          .nav-chez {
     display: inline-block;
    display: -moz-inline-box;
    *display: inline; /* For IE7 */
    zoom: 1; /* Trigger hasLayout */
    width: 25%;
    text-align: center;
    height: 15px;
  }
        </style>
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand --><a href="<?php echo base_url();?>" class="navbar-brand">My Diary</a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->

          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?php echo base_url();?>" class="active">Home</a></li>
            &nbsp;
            <li class="nav-item"><a href="<?php echo base_url().'about';?>" class="active">About</a></li>
            &nbsp;
            <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Diary Posts
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="nav-item"><a href="<?php echo base_url('posts/create');?>" class="active">New Post</a></li>
          <li class="nav-item"><a href="<?php echo base_url('posts/delete');?>" class="active">Delete Post</a></li>
          <li class="nav-item"><a href="<?php echo base_url('posts/edit');?>" class="active">EDit Post</a></li>
        </ul>
      </li>
      &nbsp;
            <li class="nav-item"><a href="<?php echo base_url('users/logout');?>" class="active">Logout</a></li>
            </ul>
            <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
            <ul class="langs navbar-text"><a href="#" class="active">EN</a><span>           </span><a href="#">ES</a></ul>
          </div>
        </div>
      </nav>
    </header>



