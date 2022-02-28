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
        $f_id = $_POST["f_id"];
        
        $conn= mysqli_connect($host, $user, $password, $dbname);
        $sql = "DELETE FROM feedback WHERE f_id = $f_id";
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

    case "add_movies":
        $m_name = $_POST["movienametxt"];
        $rel_date = $_POST["releasedatetxt"];
        $m_director = $_POST["directortxt"];
        $m_actors = $_POST["actorstxt"];
        $m_poster = $_POST["movieposterimg"];
        $m_dis = $_POST["discribtiontxt"];
        $conn= mysqli_connect($host, $user, $password, $dbname);
        $sql = "INSERT INTO add_movies(m_name,release_date,director,actors,movie_poster,m_description) 
                VALUE('$m_name','$rel_date','$m_director','$m_actors','$m_poster','$m_dis')";
        
        if($conn->query($sql) === TRUE){
            echo "successfully added new movie";
        }
            else{
                echo "technical issue";
            }
            $conn->close();

    break;


    case "add_banner":
        $b_name = $_POST["movienametxt"];
        $banner_img = $_POST["bannerimgtxt"];
        $b_dis = $_POST["discribtiontxt"];
        $b_trailer = $_POST["trailertxt"];
        echo $b_trailer;
        echo $banner_img;
        $remark = '';
        $conn= mysqli_connect($host, $user, $password, $dbname);
        $sql = "INSERT INTO add_banner (m_name,b_img,b_discribtion,Trailer_Link) VALUE('$b_name','$banner_img','$b_dis','$b_trailer')";
        if($conn->query($sql) === TRUE){
            echo "successfully added new banner";
        }
            else{
                echo "technical issue";
            }
            $conn->close();

    break;

    case "delete_banner":
        $b_id = $_POST["b_id"];
        
        $conn= mysqli_connect($host, $user, $password, $dbname);
        $sql = "DELETE FROM add_banner WHERE b_id = $b_id";
        if($conn->query($sql) === TRUE){
            echo "successfully deleted Banner";
        }
            else{
                echo "technical issue";
            }
            $conn->close();

    break;


    case "delete_movie":
        $m_id = $_POST["m_id"];
        
        $conn= mysqli_connect($host, $user, $password, $dbname);
        $sql = "DELETE FROM add_movies WHERE m_id = $m_id";
        if($conn->query($sql) === TRUE){
           alert ("successfully deleted movie");
        }
            else{
                echo "technical issue";
            }
            $conn->close();

    break;



    default: echo "wrong mode";


}

 ?>