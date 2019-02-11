<!-- <?php //foreach ($posts as $posts_item) :?>
	<table>
		<th>
			<th>ID</th>
			<th>Title</th>
			<th>Content</th>
			<th>Posted On</th>
			<th>Delete</th>
		</th>
		<tr>
			<td><?php// echo $posts_item['id'];?></td>
			<td><?php// echo $posts_item['title'];?></td>
			<td><?php// echo $posts_item['text'];?></td>
			<td><?php// echo $posts_item['timestamp'];?></td>
			<td><button>Delete</button></td>
		</tr>
	</table>

<?php //endforeach ?> -->
<script type="text/javascript">
// 	function pick_id(){

// 		var Row = document.getElementById("datatable1");
// var Cells = Row.getElementsByTagName("td");
// var picked_id = Cells[0].innerText;
//  alert(picked_id);


// 	}
function selectDataTable(){
  // var table = document.getElementsByTagName("tr");
  // var table_row = table[1].getElementsByTagName("td");
  var table_cell = document.getElementById("post_id");
  var cell_content = table_cell.innerHTML;
  alert(cell_content);
}


</script> 


    <div class="row">
         <div class="col-md-12">     

      <div class="row">
         <div class="col-md-12">

          <div class="card-head style-primary ">
                            
                        </div>
    <div class="card" >
        <div class="card-body" style="display: block;overflow-x: auto; white-space: nowrap;">
              
          <div class="box-body">
                <table id="datatable1" class="table table-striped table-hover">
                <thead>
                    <tr>
                        	<th>ID</th>
							<th>Title</th>
							<th>Content</th>
							<th>Posted On</th>
							<th>Delete</th>
                    </tr>
                </thead>
                <tbody>
               <?php foreach ($posts as $posts_item) :?>
              
               	<tr>
            <td id="post_id"><?php echo $posts_item['id'];?></td>
            <td><?php echo $posts_item['title'];?></td>
            <td><?php echo $posts_item['text'];?></td>
            <td><?php echo $posts_item['timestamp'];?></td>
<td><a ><button class="btn" type="submit" name="Delete" onclick="selectDataTable()"> Delete </button></a></td>
            </tr>
              
  <!-- href="<?php //echo base_url('posts/delete_post')?>" -->
                <?php endforeach; ?>
                
                </tbody>
                
              </table>
              
          </div>
          </div>
        </div>
      </div>
         
   </div>
  </div>
     
 </div>