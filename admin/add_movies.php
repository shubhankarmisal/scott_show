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
                             <th scope="col">Actors </th>
                             <th scope="col">Details</th>
                             
                           </tr>
                         </thead>
                         
                         <tbody class="table-striped">
                           <tr>
                             <th scope="row">1</th>
                             <td>Mark</td>
                             <td>Otto</td>
                             <td>@mdo</td>
                             <td>@mdo</td>
                             <td >
                               <button type="reset" class="btn btn-success">Edit</button>
                               <button type="submit" class="btn btn-danger">Delete</button>
                             </td>
                           </tr>
                           <tr>
                             <th scope="row">2</th>
                             <td>Mark</td>
                             <td>Otto</td>
                             <td>@mdo</td>
                             <td>@mdo</td>
                             <td >
                               <button type="reset" class="btn btn-success">Edit</button>
                               <button type="submit" class="btn btn-danger">Delete</button>
                             </td>
                           </tr>
                           <tr>
                             <th scope="row">3</th>
                             <td>Mark</td>
                             <td>Otto</td>
                             <td>@mdo</td>
                             <td>@mdo</td>
                             <td >
                               <button type="reset" class="btn btn-success">Edit</button>
                               <button type="submit" class="btn btn-danger">Delete</button>
                             </td>
                           </tr>
                          
                           
                           
                         </tbody>
                       </table>
                    </div>
         
                
            </div>
        </div>
    
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">Add New Movie</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             
              <div class="container ">
                <h5>
                <form action="engine.php" method="post" >
                  <input type="hidden" name="mode" value="addMovies">
                  <div class="row g-3 align-items-center mb-3" >
                    <h4>Add New Movies</h4>
                      <div class="col-md-3">
                        <label for="inputPassword" class="col-form-label">Movies :</label>
                      </div>
                      <div class="col-md-9">
                        <input type="text" id="inputPassword" class="form-control" name="inputPassword" aria-describedby="passwordHelpInline">
                      </div>
                    
                    </div>
                    
                    <div class="row g-3 align-items-center mb-3">
                        
                            <div class="col-3">
                              <label for="inputdate" class="col-form-label"><h5> Release Date :</h5></label>
                            </div>
                            <div class="col-9">
                              <input type="date" id="inputdate" class="form-control" name="inputdate">
                            </div>
                            
                      </div>
                      
                    
                          <div class="row g-3 align-items-center mb-3">
                        
                      <div class="col-3">
                        <label for="inputtext" class="col-form-label"><h5> Director :</h5></label>
                      </div>
                      <div class="col-9">
                        <input type="text" id="inputtext" class="form-control">
                      </div>
                      
                    </div>

                    <div class="row g-3 align-items-center mb-3">
                        
                      <div class="col-3">
                        <label for="inputtext" class="col-form-label"><h5> Actors :</h5></label>
                      </div>
                      <div class="col-9">
                        <input type="text" id="inputtext" class="form-control" name="inputtext">
                      </div>
                      
                    </div>

                    <div class="row g-3 align-items-center mb-3">
                        
                      <div class="col-3">
                        <label for="inputtext" class="col-form-label"><h5> Trailer Link :</h5></label>
                      </div>
                      <div class="col-9">
                        <input type="link" id="inputtext" class="form-control" name="inputtext">
                      </div>
                      
                    </div>

                    <div class="row g-3 align-items-center mb-3">
                        
                      <div class="col-3">
                        <label for="inputfile" class="col-form-label"><h5> Movie Poster :</h5></label>
                      </div>
                      <div class="col-9">
                        <!-- <label for="formFileSm" class="form-label">Select file</label> -->
                        <input class="form-control form-control-sm" id="formFileSm" type="file" name="posterimg">

                      </div>
                      
                    </div>

                    <div class="row g-3 align-items-center mb-3">
                        
                      <div class="col-3">
                        <label for="floatingTextarea2" class="col-form-label"><h5>Discribtion :</h5></label>
                      </div>
                      <div class="col-9">
                          <textarea class="form-control" placeholder="Information" id="floatingTextarea2" style="height: 100px" name="floatingTextarea2"></textarea>
                          <label for="floatingTextarea2"></label>
                      </div>
                      
                    </div>

                    <div class="row g-3 align-items-center mb-4">
                        
                      <div class="col-3">
                        <label for="inputbanner" class="col-form-label"><h5> Movie Banner :</h5></label>
                      </div>
                      <div class="col-9">
                        <input class="form-control form-control-sm" id="formFileSm" type="file" name="formFileSm">
                      </div>
                      
                    </div>

                    <div class="row g-3 align-items-center mb-3">
                        <div class="col-3">

                      </div>
                      <div class="col-9">
                          
                          <button type="submit" class="btn btn-success">Save</button> |
                            <button type="submit" class="btn btn-danger">delete</button>
                        </div>

                  </div>
                </form>
                 </h5>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

     

     

<?php include("footer_nav.php"); ?>