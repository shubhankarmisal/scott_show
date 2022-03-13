<?php include("header_nav.php"); ?>

<?php include("sidenav.php"); ?>


<div class="form-control py-5">
      <div class="btn-group mb-3 ">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_movie_modal">
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
                             <th scope="col">Description</th>
                             <th scope="col">Movie Poster</th>
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
                             <th scope="row" valign="middle"><?php echo $m_id; ?></th>
                             <td valign="middle">
                               <?php echo $row["movie_name"]; ?>
                             </td>
                             <td valign="middle">
                               <?php echo $row["release_date"]; ?>
                               </td>
                             <td valign="middle">
                               <?php echo $row["m_description"]; ?>
                              </td>
                             <td valign="middle">
                               <img src="assets/poster/<?php echo $row["movie_poster"]; ?>" height="80px">
                              </td>
                             
                             
                             <td  valign="middle">
                               <button type="reset" class="btn btn-primary">Edit</button>
                              </td>
                              <td valign="middle">
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
      <div class="modal fade" id="add_movie_modal" tabindex="-1" aria-labelledby="add_movie_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <form class="modal-content" id="add_movie_modal_form" enctype="multipart/form-data" action="engine.php" method="post" >
            <div class="modal-header">
              <h5 class="modal-title" id="add_movie_modal_label">Add New Movie</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             
              <div class="container ">
               
                    <div class="row">

                        <div class="col-12 mb-3">
                          <label for="movie_name_model_txt" classs="from-label">Movie Name : </label>
                          <input type="text" class="form-control" name="movie_name_model_txt" id="movie_name_model_txt">
                        </div>

                        <div class="col-md-6 mb-3">
                          <label  classs="from-label">Branch : </label>
                          <div class="border" style="border-radius:3px;overflow:auto;height:200px;">
                            <ul class="nav flex-column" >
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
                                    $m_id = 0;
                                    while($row= mysqli_fetch_assoc($retval))
                                        { 
                                      
                                      ?><?php 
                                        foreach (json_decode($row["screen_txt"], true)['screen'] as $value) {
                                          $m_id++
                                          ?>
                                            <li class="form-check nav-item">
                                              <input type="checkbox" class="form-check-input" name="screen_selected_modal" value='<?php echo $row["branch_name"].','.$row["t_name"].','.$value["screen_name"]; ?>' id="demochk<?php echo $m_id;?>" >
                                              <label class="form-check-label px-2 d-block" for="demochk<?php echo $m_id;?>"><?php echo $row["t_name"].' , '.$row["branch_name"].' - '.$value["screen_name"]; ?></label>
                                            </li>
                                    <?php } 
                                    }

                                }

                                mysqli_close($conn);  

                            ?> 

                            </ul>
                          </div>
                        </div>

                        <div class="col-md-6 mb-3">
                          <div class="col-12 mb-3">
                            <label for="release_date_modale_txt" classs="from-label">Release Date : </label>
                            <input type="date" class="form-control" name="release_date_modale_txt" id="release_date_modale_txt">
                          </div>   
                         
                            

                          <div class="col-12 mb-3">
                            <label for="movie_hr_modal_txt" classs="from-label">Movie Hr : </label>
                            <input type="number" class="form-control" name="movie_hr_modal_txt" id="movie_hr_modal_txt" placeholder="0">
                          </div>
                          
                          

                          <div class="col-12 mb-3">
                            <div class="row mb-0">

                              <div class="col-4">
                                <label for="upper_screen_model_txt" classs="from-label">Upper price : </label>
                                <input type="number" class="form-control" name="upper_screen_model_txt" id="upper_screen_model_txt">
                              </div>

                              <div class="col-4">
                                <label for="middle_screen_model_txt" classs="from-label">Middle price : </label>
                                <input type="number" class="form-control" name="middle_screen_model_txt" id="middle_screen_model_txt">
                              </div>

                              <div class="col-4">
                                <label for="lower_screen_model_txt" classs="from-label">Lower price : </label>
                                <input type="number" class="form-control" name="lower_screen_model_txt" id="lower_screen_model_txt">
                              </div>

                            </div>
                          </div>
                          
                        
                        </div>

                        <div class="col-12 mb-3">
                            <label for="description_modal_txt" classs="from-label">Discription : </label>
                            <textarea name="description_modal_txt" id="description_modal_txt" class="form-control" cols="30" rows="3"></textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                          <label for="movie_poster_modal_txt" classs="from-label">Movie Poster : </label>
                          <input type="file" class="form-control" name="movie_poster_modal_txt" id="movie_poster_modal_txt" accept="image/*" required>
                        </div>
                    </div>
                                
              
                
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Movie</button>
            </div>
            </form>
        </div>
      </div>

     

     

<?php include("footer_nav.php"); ?>

<script>

$( "#delete_movie_form" ).submit(function( event ) {
 
 // Stop form from submitting normally
 event.preventDefault();

 // Get some values from elements on the page:
 var  $form = $( this ),
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





$("#add_movie_modal_form").submit(function(event){
    // Stop form from submitting normally
  event.preventDefault();

  // Get some values from elements on the page:
  var $form = $( this ),
  movie_name = $form.find( "input[name='movie_name_model_txt']" ).val(),
  release_date = $form.find( "input[name='release_date_modale_txt']" ).val(),
  
  movie_hr = $form.find( "input[name='movie_hr_modal_txt']" ).val(),
  upper_screen = $form.find( "input[name='upper_screen_model_txt']" ).val(),
  middle_screen = $form.find( "input[name='middle_screen_model_txt']" ).val(),
  lower_screen = $form.find( "input[name='lower_screen_model_txt']" ).val(),
  
  
  description = $form.find( "textarea[name='description_modal_txt']" ).val(),
  movie_poster = $form.find( "input[name='movie_poster_modal_txt']" ).val();
  
  var screen_selected = [];
  $.each($("input[name='screen_selected_modal']:checked"), function() {
    var da = {
      "branch":($(this).val()).split(',')[0],
      "theator":($(this).val()).split(',')[1],
      "screen":($(this).val()).split(',')[2]
    }
   // $(this).val();
   // '{"branch":"'.$row["branch_name"].'","theator":"'.$row["t_name"].'","screen":"'.$value["screen_name"].'"}';
    screen_selected.push(da);
    console.log(da);
  });


    var file_data = $form.find( "input[name='movie_poster_modal_txt']" ).prop("files")[0];   
    var form_data = new FormData();
    form_data.append("file", file_data);
    
    $.ajax({
        url: "upload.php",
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(msg){
          movie_poster = msg;


          
  var jsondata = {
    "screen_selected":screen_selected,
    "release_date":release_date,
    "movie_hr":movie_hr,
    "upper_screen":upper_screen,
    "middle_screen":middle_screen,
    "lower_screen":lower_screen
  }


    url = $form.attr( "action" );

    // Send the data using post
      var posting = $.post( url, { 'movie_name': movie_name,
                                    'release_date':release_date,
                                    'description':description,
                                    'movie_poster':movie_poster,
                                    'json_data':jsondata,
                                    'mode': 'add_movie' } );

    // Put the results in a div
      posting.done(function( data ) {
      alert(data);
      location.reload(true);
    });


        }
    });




});



</script>