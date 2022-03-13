<?php include("header_1.php"); ?>

<?php include("userprofile_sidebar.php"); ?>

 <!-- My Profile -->

 
 <div class="col-md-10 border-right">
        <div class="border-right-left">

          <form action="">
          <div class="row mt-2">
                    
                
                <?php

                    $host= 'localhost';
                    $user= 'root';
                    $password= '';
                    $dbname= 'movies_db';

                    $conn= mysqli_connect($host, $user, $password, $dbname);

                    $sql= "SELECT * FROM user_table";
                        $retval= mysqli_query($conn, $sql);

                        if(mysqli_num_rows($retval) > 0)
                        { 
                        
                        while($row= mysqli_fetch_assoc($retval))
                            { 
                            
                        ?>
               
                    <div class="col-6 mb-3">  

                        <label for="fullnametxt">Name</label>
                        <input type="text" id="fullnametxt" class="form-control" name="fullnametxt" value="<?php echo $row["u_name"]; ?>">
                            
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="mobiletxt">Mobile No</label>
                        <input type="number" id="mobiletxt" class="form-control" name="mobiletxt" value="<?php echo $row["u_mobile_no"]; ?>">
                    </div>
                   
                    <div class="col-md-6 mb-3">
                        <label for="usernametxt">Username</label>
                        <input type="txt" id="usernametxt" class="form-control" name="usernametxt" value="<?php echo $row["username"]; ?>">
                    </div>

                    <div class="col-6 mb-3">
                        <label for="passwordtxt" >Password</label>
                        <input type="password" id="passwordtxt" class="form-control" name="passwordtxt" value="<?php echo $row["u_pass"]; ?>">
                    </div>
                    
                    <div class="col-md-8 mb-3">
                        <label for="addresstxt">Address</label>
                        <textarea class="form-control" name="addresstxt" id="addresstxt"><?php echo $row["u_address"]; ?></textarea>
                    </div>

                    <!-- <div class="col-md-7">
                        <div class="mt-1 text-center">
                            <button type="submit" class="btn btn-success" style="width:70px;">Add</button>
                        </div>
                    </div> -->
                    <?php  
                    }
                    
                }
                
                mysqli_close($conn);  
                
                ?>   
                </div>
                </div>
                </form>

        </div>
        
</div>
   


<?php include("footer_profile.php"); ?>   

 