<?php include("header_nav.php"); ?>

<?php include("sidenav.php"); ?>


<div class="form-control py-5">
      <div class="btn-group mb-3 ">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add New Movies
</button>

      </div>
            <div class="row">
              
                <div class="col-3">
                    <h4>All Movies List :</h4>
                </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                         <thead class="table-info">
                           <tr>
                             <th scope="col">Movie ID</th>
                             <th scope="col">Movie Name</th>
                             <th scope="col">Release Date</th>
                             <th scope="col">Director</th>
                             <th scope="col">Actors</th>
                             <th scope="col">Movie_Poster</th>
                             <th scope="col">M-discription</th>
                             <th scope="col">M_Date</th>
                             <th  width="80px" scope="col"></th>
                             <th  width="100px" scope="col"></th>
                             
                           </tr>
                         </thead>
                         
                         <tbody class="table-striped">
                         <?php

                            $host= 'localhost';
                            $user= 'root';
                            $password= '';
                            $dbname= 'movies_db';

                            $conn= mysqli_connect($host, $user, $password, $dbname);

                            $sql= "SELECT * FROM add_movies";
                                $retval= mysqli_query($conn, $sql);

                                if(mysqli_num_rows($retval) > 0)
                                { 
                                $m_id = 0;
                                while($row= mysqli_fetch_assoc($retval))
                                    { 
                                    $m_id++
                            ?>

                           <tr>
                             <th scope="row"><?php echo $m_id; ?></th>
                             <td>
                               <?php echo $row["m_name"]; ?>
                             </td>
                             <td>
                               <?php echo $row["release_date"]; ?>
                               </td>
                             <td>
                               <?php echo $row["director"]; ?>
                              </td>
                             <td>
                               <?php echo $row["actors"]; ?>
                              </td>
                             <td>
                               <?php echo $row["movie_poster"]; ?>
                              </td>
                             <td>
                               <?php echo $row["m_description"]; ?>
                              </td>
                             <td>
                               <?php echo $row["m_date"]; ?>
                              </td>
                             
                             
                             <td >
                               <button type="reset" class="btn btn-primary">Edit</button>
                              </td>
                              <td>
                                <form action="engine.php" id="delete_movie_form" method="post">
                                  <input type="hidden" name="m_id" value="<?php echo $row['m_id'] ?>" >
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
    
      <!--Add Movie Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">Add New Movie</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             
              <div class="container ">
                <h5>
                <form action="engine.php" method="post" >
                  <input type="hidden" name="mode" value="add_movies">
                  <div class="row g-3 align-items-center mb-3" >
                    <h4>Add New Movies</h4>
                      <div class="col-md-3">
                        <label for="movienametxt" class="col-form-label">Movies :</label>
                      </div>
                      <div class="col-md-9">
                        <input type="text" id="movienametxt" class="form-control" name="movienametxt" aria-describedby="passwordHelpInline">
                      </div>
                    
                    </div>
                    
                    <div class="row g-3 align-items-center mb-3">
                        
                            <div class="col-3">
                              <label for="releasedatetxt" class="col-form-label"><h5> Release Date :</h5></label>
                            </div>
                            <div class="col-9">
                              <input type="date" id="releasedatetxt" class="form-control" name="releasedatetxt">
                            </div>
                            
                    </div>
                      
                    
                    <div class="row g-3 align-items-center mb-3">
                        
                      <div class="col-3">
                        <label for="directortxt" class="col-form-label"><h5> Director :</h5></label>
                      </div>
                      <div class="col-9">
                        <input type="text" id="directortxt" class="form-control" name="directortxt" >
                      </div>
                      
                    </div>

                    <div class="row g-3 align-items-center mb-3">
                        
                      <div class="col-3">
                        <label for="actorstxt" class="col-form-label"><h5> Actors :</h5></label>
                      </div>
                      <div class="col-9">
                        <input type="text" id="actorstxt" class="form-control" name="actorstxt">
                      </div>
                      
                    </div>  

                    <div class="row g-3 align-items-center mb-3">
                        
                      <div class="col-3">
                        <label for="movieposterimg" class="col-form-label"><h5> Movie Poster :</h5></label>
                      </div>
                      <div class="col-9">
                        <!-- <label for="formFileSm" class="form-label">Select file</label> -->
                        <input class="form-control form-control-sm" id="movieposterimg" name="movieposterimg" type="file">

                      </div>
                      
                    </div>

                    <div class="row g-3 align-items-center mb-3">
                        
                      <div class="col-3">
                        <label for="discribtiontxt" class="col-form-label"><h5>Discribtion :</h5></label>
                      </div>
                      <div class="col-9">
                          <textarea class="form-control" placeholder="Information" id="discribtiontxt" style="height: 100px" name="discribtiontxt"></textarea>
                          <label for="discribtiontxt"></label>
                      </div>
                      
                    </div>

                    <div class="row g-3 align-items-center mb-3">
                        <div class="col-3">

                      </div>
                      <div class="col-9">
                          
                          <button type="submit" class="btn btn-success">Add</button> 
                            
                        </div>

                    </div>
                    
                </form>
                 </h5>
              </div>

            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
          </div>
        </div>
      </div>

     

     

<?php include("footer_nav.php"); ?>

<script>

$( "#delete_movie_form" ).submit(function( event ) {
 
 // Stop form from submitting normally
 event.preventDefault();

 // Get some values from elements on the page:
 var $form = $( this ),
   m_id = $form.find( "input[name='m_id']" ).val(),
   
   url = $form.attr( "action" );

 // Send the data using post
 var posting = $.post( url, { 'm_id': m_id, 'mode': 'delete_movie' } );

 // Put the results in a div
 posting.done(function( data ) {
   alert(data);
   location.reload(true);
 });
});

</script>