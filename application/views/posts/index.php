<h2><?php echo $title; ?></h2>

<section id="blog">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
               	<?php foreach ($posts as $posts_item): ?>
                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="images/blog-image1.jpg" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3><?php echo $posts_item['title']; ?></h3>
                         </div>
                         <div class="blog-post-format">
                            <span><a href="#"><img src="images/author-image1.jpg" class="img-responsive img-circle"> Jen Lopez</a></span>
                              <span><i class="fa fa-date"></i><?php echo $posts_item['timestamp'];?></span>
                              <!-- <span><a href="#"><i class="fa fa-comment-o"></i> 35 Comments</a></span> -->
                         </div>
                         <div class="blog-post-des">
                              <p><?php echo $posts_item['text']; ?></p>
                              <a href="<?php echo site_url('posts/'.$posts_item['slug']); ?>">View post</a>
                         </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
     </div>
 </section>

