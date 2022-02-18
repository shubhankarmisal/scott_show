<?php 


if(!isset($_POST['mode'])){
    header('Location:./index.php');
}


switch($_POST['mode']){
    case 'addMovies':

        // $target_dir = "upload/";
        // $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
        // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // $target_file = $target_dir ."product".date("d").date("m").date("y").date("h").date("i").date("s").'.'.$imageFileType;

        // if (move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file)) {
           // echo "Done";


            $p_movie = $_POST[''];
        
            $p_img_url = $_POST[''];

            $host= 'localhost';
            $user= 'root';
            $password= '';
            $dbname= '';
            echo "hello";
            $conn= mysqli_connect($host, $user, $password, $dbname);
            $sql = "INSERT INTO tablename (movies,image_url) VALUE('$p_movie','$p_img_url')";
            echo "done1";
            if($conn->query($sql) === TRUE){
                echo "done2";
                header('Location:./index.php');
            }else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
              
            $conn->close();
        




        echo $imageFileType;
        print_r($_FILES['product_img']);

        break;


        case 'deleteMovie':
            $aid = $_POST[''];

            $host= 'localhost';
            $user= 'root';
            $password= '';
            $dbname= 'shopdb';

            $conn= mysqli_connect($host, $user, $password, $dbname);
            $sql = "DELETE FROM tablename WHERE a_id = $aid";
            if($conn->query($sql) === TRUE){
                
                header('Location: addtocart.php');
            }else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
            $conn->close();

        break;


        case 'updateProduct':
            $aid = $_POST[''];

            $host= 'localhost';
            $user= 'root';
            $password= '';
            $dbname= '';

            $conn= mysqli_connect($host, $user, $password, $dbname);
            $sql = "UPDATE tablename SET movie_name = 'spider_man' WHERE id = 1";
            if($conn->query($sql) === TRUE){
                
                header('Location: addtocart.php');
            }else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
            $conn->close();

        break;

    

        case 'updateqty':
            $pqty = $_POST['pqty'];
            $aid = $_POST['aid'];

            $host= 'localhost';
            $user= 'root';
            $password= '';
            $dbname= 'shopdb';

            $conn= mysqli_connect($host, $user, $password, $dbname);
            $sql = "UPDATE tablename SET qty = $pqty WHERE a_id = ";
            if($conn->query($sql) === TRUE){
                
                header('Location: addtocart.php');
            }else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
            $conn->close();

        break;

        case 'addtocart':

            $p_qty = $_POST['pqty'];
            $p_id = $_POST['pid'];

            $host= 'localhost';
            $user= 'root';
            $password= '';
            $dbname= 'shopdb';

            $conn= mysqli_connect($host, $user, $password, $dbname);
            $sql = "INSERT INTO addtocart(p_id,qty,remark) VALUE($p_id,$p_qty,'process')";
            if($conn->query($sql) === TRUE){
                
                header('Location: index.php');
            }else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
            $conn->close();

        break;



 }






?>