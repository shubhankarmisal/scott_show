<?php include("header_nav.php"); ?>

<?php include("sidenav.php"); ?>

 
 <!-- Add Movie Banner -->
<div class="container">
  <form action="engine.php" method="post" id="add-banner-form" class="form-control mt-2" >
    <input type="hidden" name="mode" value="add_banner">
    <div class="add-new-movie pb-3">
        <h4>Add New Banner</h4>
    </div>
      <div class="row g-3 align-items-center mb-3" >
        <div class="col-md-2">
        <label for="movienametxt" class="form-label">Movie Name :</label>
        </div>
        <div class="col-md-5">
        <input type="text" id="movienametxt" class="form-control" name="movienametxt" aria-describedby="passwordHelpInline">
        </div>
    </div>
    
    <div class="row g-3 align-items-center mb-3">
        
            <div class="col-2">
                <label for="bannerimgtxt" class="col-form-label">Banner Img:</label>
            </div>
            <div class="col-5">
                <input type="file" id="bannerimgtxt" class="form-control" name="bannerimgtxt">
            </div>
            
    </div>
        
    
    <div class="row g-3 align-items-center mb-3">
        
        <div class="col-2">
        <label for="discribtiontxt">Description:</label>
        </div>
        <div class="col-5">
        <textarea class="form-control" placeholder="Description" name="discribtiontxt" id="discribtiontxt"></textarea>
        </div>
        
    </div>

    <div class="row g-3 align-items-center mb-3">
        
        <div class="col-2">
        <label for="trailertxt" class="col-form-label"> Trailer Link :</label>
        </div>
        <div class="col-5">
        <input type="text" id="trailertxt" class="form-control" name="trailertxt">
        </div>
        
    </div>

    

    <div class="row g-3 align-items-center mb-3">
        <div class="col-2">

        </div>
        <div class="col-5">
            
            <button type="submit" class="btn btn-success">Add</button> 
        </div>

    </div>
                    
  </form>


  <div class="row">
              
                <div class="col-3 mt-4">
                    <h4>All Movies List :</h4>
                </div>
                    <div class="table-responsive form-control">
                        <table class="table table-striped">
                         <thead class="table-info">
                           <tr>
                             <th scope="col">B_ID</th>
                             <th scope="col">Movie Name </th>
                             <th scope="col">Banner Img</th>
                             <th scope="col">Description</th>
                             <th scope="col">Trailer Link</th>
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

                            $sql= "SELECT * FROM add_banner";
                                $retval= mysqli_query($conn, $sql);

                                if(mysqli_num_rows($retval) > 0)
                                { 
                                $b_no = 0;
                                while($row= mysqli_fetch_assoc($retval))
                                    { 
                                    $b_no++
                        ?>

                           <tr>
                             <th scope="row"><?php echo $b_no; ?></th>
                             <td><?php echo $row["m_name"]; ?></td>
                             <td><?php echo $row["b_img"]; ?></td>
                             <td><?php echo $row["b_discribtion"]; ?></td>
                             <td>
                              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $b_no; ?>">
                                Trailer Link
                              </button>
                              <div class="modal fade" id="exampleModal<?php echo $b_no; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-body">
                                      <?php echo $row["Trailer_Link"]; ?>
                                    </div>
                                  </div>
                                </div>
                              </div>      
                              
                              </td>
                             <td>
                             <form action="engine.php" class="delete_banner_form" method="post">
                              <input type="hidden" name="b_id" value="<?php echo $row['ba_id'] ?>" >
                              <input type="hidden" name="mode" value="delete_banner" >
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
 

<?php include("footer_nav.php"); ?>

<script>
// Delete banner:-









$( ".delete_banner_form" ).submit(function( event ) {
 
 // Stop form from submitting normally
 event.preventDefault();

 // Get some values from elements on the page:
 var $form = $( this ),
   b_id = $form.find( "input[name='b_id']" ).val(),
   
   url = $form.attr( "action" );

 // Send the data using post
 var posting = $.post( url, { 'b_id': b_id, 'mode': 'delete_banner' } );

 // Put the results in a div
 posting.done(function( data ) {
   alert(data);
   location.reload(true);
 });
});


</script>
 
 