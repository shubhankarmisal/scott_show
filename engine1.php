<?php 

$mode = $_POST["mode"];
$host= 'localhost';
$user= 'root';
$password= '';
$dbname= 'movies_db';

switch($mode){
    case "add_feedback":
        $fname = $_POST["fnametxt"];
        $lname = $_POST["lnametxt"];
        $email = $_POST["emailtxt"];
        $m_num = $_POST["m_numtxt"];
        $msg= $_POST["msgtxt"];
        $conn= mysqli_connect($host, $user, $password, $dbname);
        $sql = "INSERT INTO feedback(f_name, l_name, email_id, mobile_no, f_message ) VALUE('$$fname','$lname','$email','$m_num','$msg')";
        if($conn->query($sql) === TRUE){
            echo "successfully added new theatres";
        }
            else{
                echo "technical issue";
            }
            $conn->close();

        break;


        case "sign_up":
            $s_name = $_POST["sign_up_name"];
            $s_email = $_POST["sign_up_email"];
            $s_pass = $_POST["sign_up_passwd"];
            $remark = "user";
            echo "done";
            $conn= mysqli_connect($host, $user, $password, $dbname);
            $sql = "INSERT INTO admin_login (uname, password ,remark) VALUE('$s_name','$s_pass','user')";
            if($conn->query($sql) === TRUE){
               
                header('Location:./sign_in.php');
            }
                else{
                    echo "technical issue";
                }
                $conn->close();

           
    
            break;

            case "add_userdetails":
                $f_name = $_POST["fullnametxt"];
                $u_pass = $_POST["passwordtxt"];
                $username = $_POST["usernametxt"];
                $u_num = $_POST["mobiletxt"];
                $u_msg = $_POST["addresstxt"];
                $remark = "user";
                $conn= mysqli_connect($host, $user, $password, $dbname);
                $sql = "INSERT INTO user_table(u_name,u_pass,username,u_mobile_no,u_address,remark ) VALUE('$f_name','$u_pass','$username','$u_num','$u_msg','user')";
                if($conn->query($sql) === TRUE){
                    // echo '<script>alert("user added successfully")</script>';
                     header('Location: index.php');
                }
                    else{
                        echo "technical issue";
                    }
                    $conn->close();
        
                break;
}