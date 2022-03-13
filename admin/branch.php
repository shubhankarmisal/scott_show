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
                      <th scope="col" width="80px">Sr. No.</th>
                      <th scope="col" width="200px"> Branch Name</th>
                      <th scope="col" width="400px">Address</th>
                      <th scope="col">Screen</th>
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
                                  <td><?php echo $row["branch_name"].','.$row["t_name"]; ?></td>
                                  <td><?php echo $row["b_address"].','.$row["b_country"].','.$row["b_state"].','.$row["b_city"].'-'.$row["zipcode"] ?></td>
                                  <td>
                                    <div style="overflow:auto;max-height:100px">
                                      <?php 
                                        foreach (json_decode($row["screen_txt"], true)['screen'] as $value) {
                                          echo '<button class="btn btn-outline-primary btn-sm mx-1">'.$value['screen_name'].'</button>';
                                        }
                                      ?>
                                    </div>
                                  </td>

                                  <td>
                                  <button type="button" class="btn btn-danger" onclick=updatedeletemodel(<?php echo $row['b_id']; ?>,"<?php echo $row['branch_name']; ?>","<?php echo $row['t_name']; ?>") data-bs-toggle="modal" data-bs-target="#branchDeleteModal">
                                    Delete
                                  </button>
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
                    <textarea name="addressAddtxt" id="addressAddtxt" rows="2" class="form-control"></textarea>
                  </div>  
              </div>
              <div class="col-md-3  mb-3">
                <label for="countryAddtxt" class="form-label">Country :</label>
                <input type="text" name="countryAddtxt" class="form-control" id="countryAddtxt">
              </div>
              <div class="col-md-3  mb-3">
                <label for="stateAddtxt" class="form-label">State:</label>
                <input type="text" name="stateAddtxt" class="form-control" id="stateAddtxt">
              </div>
              
              <div class="col-md-3 mb-3">
                <label for="cityAddtxt" class="form-label">City:</label>
                <input type="text" name="cityAddtxt" class="form-control" id="cityAddtxt">
              </div>
              <div class="col-md-3 mb-3">
                <label for="zipcodeAddtxt" class="form-label">Zip Code:</label>
                <input type="text" name="zipcodeAddtxt" class="form-control" id="zipcodeAddtxt">
              </div>
              

              <div class="col-12">
                  <div class="mb-3">
                    <label for="jsonAddtxt" class="form-label">Add Screen JSON Data:</label>
                    <textarea name="jsonAddtxt" id="jsonAddtxt" rows="4" class="form-control"></textarea>
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
  <form action="engine.php" method="post" id="delete_branch_form" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="branchDeleteModalLabel">Add Branch Detail</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="b_idmodaltxt" class="form-control" id="b_idmodaltxt">

          <div class="row">
              <div class="col-sm-6">
                  <div class="mb-3">
                    <label for="t_namemodeltxt" class="form-label">Theatre Name:</label>
                    <input type="text" name="t_namemodeltxt" class="form-control" disabled id="t_namemodeltxt">
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="mb-3">
                    <label for="b_namemodaltxt" class="form-label">Branch Name:</label>
                    <input type="text" name="b_namemodaltxt" class="form-control" disabled id="b_namemodaltxt">
                  </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Confirm Delete</button>
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
   stateAddtxt = $form.find( "input[name='stateAddtxt']" ).val(),
   cityAddtxt = $form.find( "input[name='cityAddtxt']" ).val(),
   zipcodeAddtxt = $form.find( "input[name='zipcodeAddtxt']" ).val(),
   countryAddtxt = $form.find( "input[name='countryAddtxt']" ).val(),

   url = $form.attr( "action" );

  // Send the data using post
  var posting = $.post( url, { 
                        't_id': t_id,
                        'branch_nametxt': branch_nametxt, 
                        'addressAddtxt': addressAddtxt,
                        'stateAddtxt': stateAddtxt,
                        'cityAddtxt': cityAddtxt,
                        'zipcodeAddtxt': zipcodeAddtxt,
                        'countryAddtxt': countryAddtxt,
                        'mode': 'add_branch',
                        'jsonAddtxt': jsonAddtxt
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
   b_id = $form.find( "input[name='b_idmodaltxt']" ).val(),
   
   url = $form.attr( "action" );

 // Send the data using post
 var posting = $.post( url, { 'b_id': b_id, 'mode': 'delete_branch' } );

 // Put the results in a div
 posting.done(function( data ) {
   alert(data);
   location.reload(true);
 });
});


function updatedeletemodel(b_id,b_name,t_name){
    $('#b_idmodaltxt').val(b_id);
    $('#t_namemodeltxt').val(t_name);
    $('#b_namemodaltxt').val(b_name);
}

</script>




