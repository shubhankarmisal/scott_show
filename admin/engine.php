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
        $stateAddtxt = $_POST["stateAddtxt"];
        $cityAddtxt = $_POST["cityAddtxt"];
        $zipcodeAddtxt = $_POST["zipcodeAddtxt"];
        $countryAddtxt = $_POST["countryAddtxt"];
        $jsonAddtxt = $_POST["jsonAddtxt"];

        $conn= mysqli_connect($host, $user, $password, $dbname);
        $sql = "INSERT INTO branch(t_id,branch_name,b_address,b_city,b_state,b_country,zipcode,screen_txt) VALUE($t_id,'$branch_nametxt','$addressAddtxt','$cityAddtxt','$stateAddtxt','$countryAddtxt','$zipcodeAddtxt','$jsonAddtxt')";
        if($conn->query($sql) === TRUE){
            echo "successfully added new branch";
        }
        else{
            echo "technical issue";
        }
        $conn->close();

    break;

    case "add_movie":
        

       
        $movie_name = $_POST["movie_name"];
        $release_date = $_POST["release_date"];
        $movie_poster = $_POST["movie_poster"];
        $description = $_POST["description"];
        $json_data = json_encode($_POST["json_data"]);

        $conn= mysqli_connect($host, $user, $password, $dbname);
        $sql = "INSERT INTO add_movies(movie_name,release_date,m_description,movie_poster,remark,jsondata) VALUE('$movie_name','$release_date','$description','$movie_poster','active','$json_data')";
        
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