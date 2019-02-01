
<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Create new diary post</h2>
                        <span style="color: red;"><?php echo validation_errors(); ?></span>
                         <?php echo form_open_multipart('posts/create'); ?>
                         <div class="form-group">
                              <input name="title" type="text" class="form-control" placeholder="Title">
                         </div>
                         <div class="form-group">
                              <textarea name="text" rows="5" class="form-control" placeholder="Content"></textarea>
                         </div>
                         <div class="form-group">
                              <input type="file" name="post_image" size="20" multiple="true" />
                         </div>
                         <div class="form-group">
                              <input name="submit" type="submit" class="form-control" id="submit" value="Create post">
                         </div>
                    </form>
                  

      
                    </div>
                </div>
            </div>
        </div>
</div>


	