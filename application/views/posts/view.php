


    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8"> 
          <h2><?php echo $title; ?></h2>
          <hr>
          
          <div class="container">
            
            <div class="post-single">
              <!-- <div class="post-thumbnail"><img src="img/blog-post-3.jpeg" alt="..." class="img-fluid"></div> -->
               <!--  <h3></h3> -->
                <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span><?php echo $posts_item['title']; ?></span></div></a>
                  <div class="d-flex align-items-center flex-wrap">       
                    <div class="date"><i class="icon-clock"></i> <?php echo $posts_item['timestamp'];?></div>
                  </div>
                </div>
                <div class="post-body">
                  <p><?php echo $posts_item['text'];?></p>
                 
                </div>
                
    
              </div>
            </div>
            <hr>
           
          
        </main>
        </div>
      </div>