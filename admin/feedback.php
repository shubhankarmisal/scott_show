<?php include("header_nav.php"); ?>

<?php include("sidenav.php"); ?>

 <!-- Feedback List -->

 <section>
        <div class="form-control py-5">
            <div class="row">
                <div class="col-3">
                    <h4>Feedback :</h4>
                </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                         <thead class="table-info">
                           <tr>
                             <th scope="col">Cust ID</th>
                             <th scope="col">FullName</th>
                             <th scope="col">Email:ID</th>
                             <th scope="col">Mobile:No</th>
                             <th scope="col">Message</th>
                             <th scope="col"></th>
                             
                           </tr>
                         </thead>
                         
                         <tbody class="table-striped">

           
                      <?php

                        $host= 'localhost';
                        $user= 'root';
                        $password= '';
                        $dbname= 'movies_db';

                        $conn= mysqli_connect($host, $user, $password, $dbname);

                        $sql= "SELECT * FROM feedback";
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
                                    <td><?php echo $row["f_name"].' '. $row["l_name"] ; ?></td>
                                    <td><?php echo $row["email_id"]; ?></td>
                                    <td><?php echo $row["mobile_no"]; ?></td>
                                    <td><?php echo $row["f_message"]; ?></td>
                                  
                                    
                                    <td>
                                      <form action="engine.php" id="delete_feedback_form" method="post">
                                        <input type="hidden" name="f_id" value="<?php echo $row["f_id"] ?>" >
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
</section>



<?php include("footer_nav.php"); ?>

<script>
  $( "#delete_feedback_form" ).submit(function( event ) {
 
 // Stop form from submitting normally
 event.preventDefault();

 // Get some values from elements on the page:
 var $form = $( this ),
   f_id = $form.find( "input[name='f_id']" ).val(),
   
   url = $form.attr( "action" );

 // Send the data using post
 var posting = $.post( url, { 'f_id': f_id, 'mode': 'delete_feedback' } );

 // Put the results in a div
 posting.done(function( data ) {
   alert(data);
   location.reload(true);
 });
});
</script>