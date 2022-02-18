<?php include("header_nav.php"); ?>

<?php include("sidenav.php"); ?>

<!-- Add new Theater -->

<div class="form-control py-5">

<div class="form-control">
          <h4>Add New Theatre</h4>
              <form action="engine.php" method="post" id="add_theatre_form">
                  
                  
                      
                  <div class="row">

                    <div class="col-auto">
                        <div class="mb-3">
                         <label for="t_nametxt" class="form-label">Theatre Name:</label>
                         <input type="text" name="t_nametxt" class="form-control" id="t_nametxt">
                        </div>

                    </div>
                    <div class="col-auto">
                        <div class="mb-3">
                          <label for="t_locationtxt" class="form-label">Theatre Location:</label>
                          <input type="text" name="t_locationtxt" class="form-control" id="t_locationtxt">
                        </div>

                    </div>
                  
                    <div class="col-2 d-flex align-items-end">
                        <div class="mb-3">
                          <button type="submit" class="btn btn-success">Add Theatre</button> 
                        </div>
                    </div>


                  </div>

              </form>
          </div>


<div class="row">
    <div class="col-12">
        <h4>Theatres</h4>
            <table class="table table-striped">
                  <thead class="table-info" >
                    <tr>
                      <th scope="col">Theatre ID</th>
                      <th scope="col">Theatre Name</th>
                      <th scope="col">Theatre Location</th>
                      <th width="80px" scope="col"></th>
                      <th width="100px" scope="col"></th>
                      
                    </tr>
                  </thead>
                <tbody>

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
          $t_no = 0;
          while($row= mysqli_fetch_assoc($retval))
            { 
              $t_no++
          ?>

          <tr>
                
                <th scope="row"><?php echo $t_no; ?></th>
                <td><?php echo $row["t_name"]; ?></td>
                <td><?php echo $row["t_location"]; ?></td>
              
                <td>
                <button onclick=updateeditmodal(<?php echo '"'.$row["t_name"].'","'.$row['t_location'].'","'.$row['t_id'].'"'; ?>) type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Edit
                </button>

                </td>
                
                <td>
                  <form action="engine.php" id="delete_theatre_form" method="post">
                    <input type="hidden" name="t_id" value="<?php echo $row["t_id"] ?>" >
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>


                </td>
                
                
              
          </tr>


          


            <?php  
            }

          }

          mysqli_close($conn);  

          ?>   

          
          
                  </tbody>
                </table>
          </div>
          
          
      </div>
      

       
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Udate Theatre</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            
         
          <form action="engine.php" method="post" id="update_theatre_form">
                 <input type="hidden" value="" id="t_idtxt">
                  <div class="row">

                    <div class="col-12">
                        <div class="mb-3">
                         <label for="t_nametxt" class="form-label">Theatre Name:</label>
                         <input type="text" name="t_nametxt" class="form-control" id="t_nametxt">
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                          <label for="t_locationtxt" class="form-label">Theatre Location:</label>
                          <input type="text" name="t_locationtxt" class="form-control" id="t_locationtxt">
                        </div>

                    </div>
                  
                    <div class="col-12 d-flex align-items-end">
                        <div class="mb-3">
                          <button type="submit" class="btn btn-success">Update Theatre</button> 
                        </div>
                    </div>


                  </div>

          </form>


          </div>
         
        </div>
      </div>
    </div>

<?php include("footer_nav.php"); ?>




<script>

$( "#add_theatre_form" ).submit(function( event ) {
 
  // Stop form from submitting normally
  event.preventDefault();
 
  // Get some values from elements on the page:
  var $form = $( this ),
    t_nametxt = $form.find( "input[name='t_nametxt']" ).val(),
    t_locationtxt = $form.find( "input[name='t_locationtxt']" ).val(),
    url = $form.attr( "action" );
 
  // Send the data using post
  var posting = $.post( url, { 't_nametxt': t_nametxt,'t_locationtxt': t_locationtxt, 'mode': 'add_theatre' } );
 
  // Put the results in a div
  posting.done(function( data ) {
    alert(data);
    location.reload(true);
  });
});

$( "#delete_theatre_form" ).submit(function( event ) {
 
 // Stop form from submitting normally
 event.preventDefault();

 // Get some values from elements on the page:
 var $form = $( this ),
   t_id = $form.find( "input[name='t_id']" ).val(),
   
   url = $form.attr( "action" );

 // Send the data using post
 var posting = $.post( url, { 't_id': t_id, 'mode': 'delete_theatre' } );

 // Put the results in a div
 posting.done(function( data ) {
   alert(data);
   location.reload(true);
 });
});

function updateeditmodal(t_name, t_location, t_id){
 $('#update_theatre_form #t_nametxt').val(t_name); 
 $('#update_theatre_form #t_locationtxt').val(t_location); 
 $('#update_theatre_form #t_idtxt').val(t_id); 
}

$( "#update_theatre_form" ).submit(function( event ) {
 
 // Stop form from submitting normally
 event.preventDefault();

 // Get some values from elements on the page:
 var $form = $( this ),
   t_id = $form.find( "#t_idtxt" ).val(),
   t_name = $form.find( "input[name='t_nametxt']" ).val(),
   t_location = $form.find( "input[name='t_locationtxt']" ).val(),
   
   url = $form.attr( "action" );

 // Send the data using post
 var posting = $.post( url, { 't_id': t_id, 'mode': 'update_theatre', 't_name': t_name, 't_location':t_location } );

 // Put the results in a div
 posting.done(function( data ) {
   alert(data);
   location.reload(true);
 });
});
</script>


