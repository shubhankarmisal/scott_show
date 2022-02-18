<?php include("header_nav.php"); ?>

<?php include("sidenav.php"); ?>

<!-- Add new branch-->

<div class="form-control py-5">

<div class="form-control mb-2">
          <h4>Add New Branch</h4>
              <form action="engine.php" method="post" id="">
                  
                  
                      
                  <div class="row">

                    <div class="col-auto">
                        <div class="mb-3">
                         <label for="t_nametxt" class="form-label">Branch Name:</label>
                         <input type="text" name="t_nametxt" class="form-control" id="t_nametxt">
                        </div>

                    </div>
                    <div class="col-auto">
                        <div class="mb-3">
                          <label for="t_locationtxt" class="form-label">Branch Location:</label>
                          <input type="text" name="t_locationtxt" class="form-control" id="t_locationtxt">
                        </div>

                    </div>
                  
                    <div class="col-2 d-flex align-items-end">
                        <div class="mb-3">
                          <button type="submit" class="btn btn-success">Add Branch</button> 
                        </div>
                    </div>


                  </div>

              </form>
          </div>

          <!-- table -->
            <div class="row">
                <div class="col-12">
                    <h4>Branches</h4>

                    <table class="table table-striped">
                         <thead class="table-info">
                           <tr>
                             <th scope="col">Branch ID</th>
                             <th scope="col">Branch Name</th>
                             <th scope="col">Branch Location</th>
                             <th width="200px" scope="col"></th>
                             
                             
                             
                             
                           </tr>
                         </thead>
                         
                         <tbody class="table-striped">
                           <tr>
                             <th scope="row">1</th>
                             <td>Mark</td>
                             <td>Otto</td>
                             
                             <td >
                               <button type="reset" class="btn btn-success">Edit</button>
                               <button type="submit" class="btn btn-danger">Delete</button>
                             </td>
                           </tr>
                           <tr>
                             <th scope="row">2</th>
                             <td>Mark</td>
                             <td>Otto</td>
                             
                             <td >
                               <button type="reset" class="btn btn-success">Edit</button>
                               <button type="submit" class="btn btn-danger">Delete</button>
                             </td>
                           </tr>
                           <tr>
                             <th scope="row">3</th>
                             <td>Mark</td>
                             <td>Otto</td>
                            
                             <td >
                               <button type="reset" class="btn btn-success">Edit</button>
                               <button type="submit" class="btn btn-danger">Delete</button>
                             </td>
                           </tr>
                          
                           
                           
                         </tbody>
                       </table>
                </div>
            </div>
          
                       
                    




<?php include("footer_nav.php"); ?>







