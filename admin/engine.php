<?php 

$mode = $_POST["mode"];
$host= 'localhost';
$user= 'root';
$password= '';
$dbname= 'movies_db';
echo $mode ;
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


        default: echo "wrong mode";


}

 ?>