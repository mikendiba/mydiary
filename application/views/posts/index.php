
     <!-- <div class="overlay"  style="background: #FF5733;"></div> -->
  
  <section style="background: url(http://localhost/mydiary/assets/img/diary.jpg); background-size: cover; background-position: center center" class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h1>MY DIARY</h1>
          </div>
        </div><a href=".posts-listing" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
      </div>
    </section>

<div class="container">
 
      <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8"> 
          <div class="container">
            <div class="row">
              <?php foreach ($posts as $posts_item): ?>
        <div class="post col-xl-6">
                
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <!-- <div class="category"><a href="#">Business</a></div> -->
                  </div><a href="<?php echo site_url('posts/'.$posts_item['slug']); ?>">
                    <h3 class="h4"><?php echo $posts_item['title']; ?></h3></a>
                  <p class="text-muted"><?php echo $posts_item['text']; ?></p>
                  <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                      <div class="avatar"><img src="img/avatar-3.jpg" alt="..." class="img-fluid"></div>
                      
                    <div class="date"><i class="icon-clock"></i><?php echo $posts_item['timestamp'];?></div>
            
              <div class="title"><span><a href="<?php echo site_url('posts/'.$posts_item['slug']); ?>">View post</a></span></div></a>
                  </footer>
                </div>
        </div>
        <?php endforeach ?>
      </div>
    </div>
  </main>
</div>
</div>


