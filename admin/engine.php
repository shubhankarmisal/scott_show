<?php 

$mode = $_POST["mode"];
$host= 'localhost';
$user= 'root';
$password= '';
$dbname= 'movies_db';


switch($mode){
    case "add_theatre":
        $t_name = $_POST["t_nametxt"];
        $t_locat = $_POST["t_locationtxt"];
        $conn= mysqli_connect($host, $user, $password, $dbname);
        $sql = "INSERT INTO theatres(t_name,t_location,t_status) VALUE('$t_name','$t_locat','active')";
        if($conn->query($sql) === TRUE){
            echo "successfully added new theatres";
        }
            else{
                echo "technical issue";
            }
            $conn->close();

    break;

    case "delete_theatre":
        $t_id = $_POST["t_id"];
        
        $conn= mysqli_connect($host, $user, $password, $dbname);
        $sql = "DELETE FROM theatres WHERE t_id = $t_id";
        if($conn->query($sql) === TRUE){
            echo "successfully deleted theatre";
        }
            else{
                echo "technical issue";
            }
            $conn->close();

    break;

    case "update_theatre":
            $t_id = $_POST["t_id"];
            $t_name = $_POST["t_name"];
            $t_location = $_POST["t_location"];
            
            $conn= mysqli_connect($host, $user, $password, $dbname);
            $sql = "UPDATE theatres SET t_name= '$t_name', t_location= '$t_location' WHERE t_id = $t_id";
            if($conn->query($sql) === TRUE){
                echo "successfully update theatre";
            }
                else{
                    echo "technical issue";
                }
                $conn->close();
    
    break;

    case "delete_feedback":
        $t_id = $_POST["f_id"];
        
        $conn= mysqli_connect($host, $user, $password, $dbname);
        $sql = "DELETE FROM theatres WHERE t_id = $t_id";
        if($conn->query($sql) === TRUE){
            echo "successfully deleted feedback";
        }
            else{
                echo "technical issue";
            }
            $conn->close();

    break;

    case "delete_branch":
        $b_id = $_POST["b_id"];
        
        $conn= mysqli_connect($host, $user, $password, $dbname);
        $sql = "DELETE FROM branch WHERE b_id = $b_id";
        if($conn->query($sql) === TRUE){
            echo "successfully deleted branch";
        }
            else{
                echo "technical issue";
            }
            $conn->close();

    break;

    case "admin_sign_up":
        $admin_s_name = $_POST["sign_up_name"];
        $admin_s_email = $_POST["sign_up_email"];
        $admin_s_pass = $_POST["sign_up_passwd"];
        $remark = "admin";
        echo "done";
        $conn= mysqli_connect($host, $user, $password, $dbname);
        $sql = "INSERT INTO admin_login (uname, password ,remark) VALUE('$admin_s_name','$admin_s_pass','admin')";
        if($conn->query($sql) === TRUE){
            
            header('Location:../sign_in.php');
        }
            else{
                echo "technical issue";
            }
            $conn->close();

    break;

    case "add_branch":
        $t_id = $_POST["t_id"];
        $branch_nametxt = $_POST["branch_nametxt"];
        $addressAddtxt = $_POST["addressAddtxt"];
        $jsonAddtxt = $_POST["jsonAddtxt"];

        $conn= mysqli_connect($host, $user, $password, $dbname);
        $sql = "INSERT INTO branch(t_id,branch_name,b_address,screen_txt) VALUE($t_id,'$branch_nametxt','$addressAddtxt','$jsonAddtxt')";
        if($conn->query($sql) === TRUE){
            echo "successfully added new branch";
        }
        else{
            echo "technical issue";
        }
        $conn->close();

    break;


    default: echo "wrong mode";


}

 ?>