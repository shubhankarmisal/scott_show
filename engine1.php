<?php 

$mode = $_POST["mode"];
$host= 'localhost';
$user= 'root';
$password= '';
$dbname= 'movies_db';
echo $mode ;
switch($mode){
    case "addfeedback":
        $f_name = $_POST["fname"];
        $l_name = $_POST["lname"];
        $email_id = $_POST["email"];
        $m_num = $_POST["m-num"];
        $f_msg = $_POST["msg"];
        $conn= mysqli_connect($host, $user, $password, $dbname);
        $sql = "INSERT INTO feedback(f_name, l_name, email_id, mobile_no, f_message ) VALUE('$f_name','$l_name','$email_id','$m_num','$f_msg')";
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
}