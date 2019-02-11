<style type="text/css">
    body {
      font-size: 15px;
      color: #343d44;
      font-family: "segoe-ui", "open-sans", tahoma, arial;
      padding: 0;
      margin: 0;
    }
    table {
      margin: auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 12px;
    }

    h1 {
      margin: 25px auto 0;
      text-align: center;
      text-transform: uppercase;
      font-size: 17px;
    }

    table td {
      transition: all .5s;
    }
    
    /* Table */
    .data-table {
      border-collapse: collapse;
      font-size: 14px;
      min-width: 537px;
    }

    .data-table th, 
    .data-table td {
      border: 1px solid #e1edff;
      padding: 7px 17px;
    }
    .data-table caption {
      margin: 7px;
    }

    /* Table Header */
    .data-table thead th {
      background-color: #508abb;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }

    /* Table Body */
    .data-table tbody td {
      color: #353535;
    }
    .data-table tbody td:first-child,
    .data-table tbody td:nth-child(4),
    .data-table tbody td:last-child {
      text-align: right;
    }

    .data-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }
    .data-table tbody tr:hover td {
      background-color: #ffffa2;
      border-color: #ffff0f;
    }

    /* Table Footer */
    .data-table tfoot th {
      background-color: #e5f5ff;
      text-align: right;
    }
    .data-table tfoot th:first-child {
      text-align: left;
    }
    .data-table tbody td:empty
    {
      background-color: #ffcccc;
    }
    .header_custom{
background: #FF5733;
padding-top: 10px;
padding-bottom: 10px;

    }
    

  </style>
  <script type="text/javascript">
    function selectByTagName(){
  var row = document.getElementsByTagName("tr");
  var table_data = row[1].getElementsByTagName("td");
  var cell = table_data[0].innerHTML;
 var deletion = table_data[4].getElementById($id);

alert(cell);
}
  </script>

</head>

  <table class="table table-hover">
    <div class="header_custom" id="diary_title">
    <h2 align="center">Delete Diary Posts</h2>
  </div>
     <thead class="thead-dark">
      
          <tr>
        <th scope="col">ID</th>
        <th scope="col">TITLE</th>
        <th scope="col">CONTENT</th>
        <th scope="col">POSTED ON</th>
        <th scope="col">DELETE</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
    $reg  = 'scope="row"';
    $total  = 0;
    


    $delete_id = 'id = "$id"';

    foreach ($posts as $posts_item) {
         echo form_open('posts/delete_post');

          echo '<tr> <td> <input type="hidden" name="post_id" value = "'.$posts_item['id'].'">'.$posts_item['id'].'</td>
          <td>'.$posts_item['title'].'</td>
          <td>'.$posts_item['text'].'</td>
          <td>'.$posts_item['timestamp'].'</td>
          <td ><input type="submit" value="Delete"></td>
        </tr>';

        echo "</form>";

      // $total += $row['amount'];
      // $no++;
    }?>
    </tbody>
    <tfoot>
      
    </tfoot>
  </table>
</body>