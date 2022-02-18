<?php
    
    $uname= $_POST["usernametxt"];
    $upass = $_POST["passwordtxt"];
   
  
    
    $host= 'localhost';
    $user= 'root';
    $password= '';
    $dbname= 'movies_db';

    $conn= mysqli_connect($host, $user, $password, $dbname);
    $valid = false;
    $remark = "";

    
    $sql= "SELECT * FROM admin_login";
    $retval= mysqli_query($conn, $sql);

    if(mysqli_num_rows($retval) > 0)
    {
        while($row= mysqli_fetch_assoc($retval))
        { 
            if($row['uname'] == $uname && $row['password'] == $upass){
               
                $valid = true;
                $remark = $row["remark"];
                break;
            }
        }
    }


    if($valid){
        session_start();
        $_SESSION["user_remark"] = $remark;
        if($remark == "admin"){
            $_SESSION["user"] = $uname;

            header('Location: admin/dashboard.php');
              
        }  else if($remark == "user"){
            $_SESSION["user"] = $uname;  
        header('Location: index.php');

        }
        
    }else
    {
        header('Location: sign_in.php');
    }




    mysqli_close($conn);  

?>  





