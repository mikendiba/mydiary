<section id="contact">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
<span style="color: red;"><?php echo validation_errors(); ?></span>

                    <?php echo form_open('posts/create'); ?>
                         <div class="col-md-4 col-sm-4">
                              <input name="title" type="text" class="form-control" placeholder="Title">
                         </div>
                         <!-- <div class="col-md-4 col-sm-4">
                              <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                      	 </div>
                         <div class="col-md-4 col-sm-4">
                              <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                      	 </div> -->
                         <div class="col-md-12 col-sm-12">
                              <textarea name="text" rows="5" class="form-control" placeholder="Content"></textarea>
                         </div>
                         <div class="col-md-3 col-sm-6">
                              <input name="submit" type="submit" class="form-control" id="submit" value="Create post">
                         </div>
                    </form>
               </div>

          </div>
     </div>
</section>
	