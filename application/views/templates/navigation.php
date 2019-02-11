  <header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg" >
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
        <div class="container" >
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand --><a href="<?php echo base_url();?>" class="navbar-brand">MY DIARY</a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->

          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?php echo base_url();?>" class="active">HOME</a></li>
            &nbsp;&nbsp;
            <li class="nav-item"><a href="<?php echo base_url().'about';?>" class="active">ABOUT</a></li>
            &nbsp;&nbsp;
            <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">DIARY POSTS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="nav-item"><a href="<?php echo base_url('posts/create');?>" class="active">NEW POST</a></li>
          <li class="nav-item"><a href="<?php echo base_url('posts/delete');?>" class="active">DELETE POST</a></li>
        </ul>
      </li>
      &nbsp;&nbsp;
            <li class="nav-item"><a href="<?php echo base_url('users/logout');?>" class="active">LOGOUT</a></li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>



