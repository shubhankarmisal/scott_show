<?php include("header_nav.php"); ?>

<?php include("sidenav.php"); ?>

<!-- Add new branch-->

<div class="form-control py-5">

    <div class="d-flex justify-content-between align-items-center">
       <h4 class="m-0">Branches</h4> 
       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#branchModal">
          Add Branch
        </button>
    </div>

    <hr>

    <!-- table -->
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                  <thead class="table-info">
                    <tr>
                      <th scope="col">Sr. No.</th>
                      <th scope="col">Theatre Name</th>
                      <th scope="col">Branch Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Json Data</th>
                      <th width="100px" scope="col"></th>
                      
                      
                      
                      
                    </tr>
                  </thead>
                  
                  <tbody class="table-striped">
                    
                  

                    <?php 
                        
                        
                          $host= 'localhost';
                          $user= 'root';
                          $password= '';
                          $dbname= 'movies_db';

                          $conn= mysqli_connect($host, $user, $password, $dbname);

                          $sql= "SELECT * FROM branch b,theatres t WHERE t.t_id = b.t_id";
                          $retval= mysqli_query($conn, $sql);

                          if(mysqli_num_rows($retval) > 0)
                          { 
                            $b_id = 0;
                              while($row= mysqli_fetch_assoc($retval))
                                { 
                                  $b_id++;
                          ?>
                                
                                
                                <tr>
                                  <th scope="row"><?php echo $b_id; ?></th>
                                  <td><?php echo $row["t_name"]; ?></td>
                                  <td><?php echo $row["branch_name"]; ?></td>
                                  <td><?php echo $row["b_address"]; ?></td>
                                  <td><?php echo $row["screen_txt"]; ?></td>

                                  <td>
                                    <form action="engine.php" method="post" id="delete_branch_form" >
                                        <input type="hidden" name="b_id" value="<?php echo $row['b_id']; ?>">
                                         <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                  </td>
                                </tr>


                              <?php   }
                              }
                          mysqli_close($conn);  
                          ?> 
                    
                    
                  </tbody>
                </table>
        </div>
    </div>
          
    
<!-- Add Modal -->
<div class="modal fade" id="branchModal" tabindex="-1" aria-labelledby="branchModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form action="engine.php" method="post" id="addbranchform" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="branchModalLabel">Add Branch Detail</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <input type="hidden"  value="add_branch" name="mode">
          <div class="row">
              <div class="col-sm-6">
                  <div class="mb-3">
                    <label for="selecttheatreAddtxt" class="form-label">Theatre Name:</label>
                    <select name="selecttheatreAddtxt" id="selecttheatre" class="form-select">
                        <?php 
                        
                        
                          $host= 'localhost';
                          $user= 'root';
                          $password= '';
                          $dbname= 'movies_db';

                          $conn= mysqli_connect($host, $user, $password, $dbname);

                          $sql= "SELECT * FROM theatres";
                          $retval= mysqli_query($conn, $sql);

                          if(mysqli_num_rows($retval) > 0)
                          { 
                              while($row= mysqli_fetch_assoc($retval))
                                { 
                          ?>
                                <option value="<?php echo $row["t_id"]; ?>"><?php echo $row["t_name"]; ?></option>
                              <?php   }
                              }
                          mysqli_close($conn);  
                          ?>   
                    </select>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="mb-3">
                    <label for="branch_nameAddtxt" class="form-label">Branch Name:</label>
                    <input type="text" name="branch_nameAddtxt" class="form-control" id="branch_nameAddtxt">
                  </div>
              </div>
              <div class="col-12">
                  <div class="mb-3">
                    <label for="addressAddtxt" class="form-label">Address:</label>
                    <textarea name="addressAddtxt" id="addressAddtxt" rows="3" class="form-control"></textarea>
                  </div>
              </div>
              <div class="col-12">
                  <div class="mb-3">
                    <label for="jsonAddtxt" class="form-label">Add Screen JSON Data:</label>
                    <textarea name="jsonAddtxt" id="jsonAddtxt" rows="5" class="form-control"></textarea>
                  </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add New Branch</button>
      </div>
    </form>
  </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="branchDeleteModal" tabindex="-1" aria-labelledby="branchDeleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="branchDeleteModalLabel">Add Branch Detail</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

          <div class="row">
              <div class="col-sm-6">
                  <div class="mb-3">
                    <label for="t_nametxt" class="form-label">Theatre Name:</label>
                    <input type="text" name="t_nametxt" class="form-control" disabled id="t_nametxt">
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="mb-3">
                    <label for="t_nametxt" class="form-label">Branch Name:</label>
                    <input type="text" name="t_nametxt" class="form-control" disabled id="t_nametxt">
                  </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Confirm Delete</button>
      </div>
    </form>
  </div>
</div>
                    




<?php include("footer_nav.php"); ?>


<script>




$( "#addbranchform" ).submit(function( event ) {
 
 // Stop form from submitting normally
 event.preventDefault();

 // Get some values from elements on the page:
 var $form = $( this ),
   t_id = $form.find( "select[name='selecttheatreAddtxt']" ).val(),
   branch_nametxt = $form.find( "input[name='branch_nameAddtxt']" ).val(),
   addressAddtxt = $form.find( "textarea[name='addressAddtxt']" ).val(),
   jsonAddtxt = $form.find( "textarea[name='jsonAddtxt']" ).val(),

   url = $form.attr( "action" );

  // Send the data using post
  var posting = $.post( url, { 
                        't_id': t_id,
                        'branch_nametxt': branch_nametxt, 
                        'addressAddtxt': addressAddtxt,
                        'jsonAddtxt': jsonAddtxt,
                        'mode': 'add_branch' 
                        } );

  // Put the results in a div
  posting.done(function( data ) {
    alert(data);
    location.reload(true);
  });
});


$( "#delete_branch_form" ).submit(function( event ) {
 
 // Stop form from submitting normally
 event.preventDefault();

 // Get some values from elements on the page:
 var $form = $( this ),
   b_id = $form.find( "input[name='b_id']" ).val(),
   
   url = $form.attr( "action" );

 // Send the data using post
 var posting = $.post( url, { 'b_id': b_id, 'mode': 'delete_branch' } );

 // Put the results in a div
 posting.done(function( data ) {
   alert(data);
   location.reload(true);
 });
});

</script>




