<?php 
session_start();
if(isset($_SESSION["user_remark"])){
    if($_SESSION["id"] == "u_id")
    {
        echo "add success";
        
    }else{
        echo "not added";
    }
}
 ?>

<?php include("header_1.php"); ?>

<?php include("userprofile_sidebar.php"); ?>

     
<div class="col-md-10 border-right">
        <div class="border-right-left">

          <form action="engine1.php" method="post"  >
              <input type="hidden" name="mode" value="add_userdetails">
                <div class="row mt-2">
                    <div class="col-6 mb-3">

                        <label for="fullnametxt">Name</label>
                        <input type="text" id="fullnametxt" class="form-control" name="fullnametxt" value="">
                            
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="mobiletxt">Mobile_No</label>
                        <input type="number" id="mobiletxt" class="form-control" name="mobiletxt" value="">
                    </div>
                   
                    <div class="col-md-6 mb-3">
                    <?php 
                        
                        
                        $host= 'localhost';
                        $user= 'root';
                        $password= '';
                        $dbname= 'movies_db';
                        
                        $conn= mysqli_connect($host, $user, $password, $dbname);

                        $sql= "SELECT * FROM admin_login WHERE id = '<?php echo $_SESSION["u_id"] ?>'";
                        $retval= mysqli_query($conn, $sql);

                        if(mysqli_num_rows($retval) > 0)
                        { 
                            while($row= mysqli_fetch_assoc($retval))
                              { 
                                
                             
                        ?>

                        <label for="usernametxt">Username</label>
                        <input type="txt" id="usernametxt" class="form-control" name="usernametxt"
                         value="<?php echo $row["uname"]; ?>">
                    

                         <?php  
                                
                                }
                              }
                          mysqli_close($conn);  
                          ?>   
                        </div>

                    <div class="col-6 mb-3">
                        <label for="passwordtxt" >Password</label>
                        <input type="password" id="passwordtxt" class="form-control" name="passwordtxt" value="">
                    </div>
                    
                    <div class="col-md-8 mb-3">
                        <label for="addresstxt">Address</label>
                        <textarea class="form-control" name="addresstxt"  id="addresstxt"></textarea>
                    </div>

                    <div class="col-md-7">
                        <div class="mt-1 text-center">
                            <button type="submit" class="btn btn-success" style="width:70px;">Add</button>
                        </div>
                    </div>
                </div>
          </form>

        </div>
        
</div>
    


<?php include("footer_1.php"); ?>   

<script>

$( "#add_user_form" ).submit(function( event ) {
 
 // Stop form from submitting normally
 event.preventDefault();

 // Get some values from elements on the page:
 var $form = $( this ),
   fullnametxt = $form.find( "input[name='fullnametxt']" ).val(),
   mobiletxt = $form.find( "input[name='mobiletxt']" ).val(),
   usernametxt = $form.find( "input[name='usernametxt']" ).val(),
   passwordtxt = $form.find( "input[name='passwordtxt']" ).val(),
   addresstxt = $form.find( "textarea[name='addresstxt']" ).val(),
   url = $form.attr( "action" );

 // Send the data using post
 var posting = $.post( url, { 'fullnametxt': fullnametxt,
                              'mobiletxt': mobiletxt, 
                              'usernametxt': usernametxt, 
                              'passwordtxt': passwordtxt, 
                              'addresstxt': addresstxt, 
                              'mode': 'add_userdetails' } );

 // Put the results in a div
 posting.done(function( data ) {
   alert(data);
   location.reload(true);
 });
});

</script>



