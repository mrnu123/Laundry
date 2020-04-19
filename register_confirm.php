<?php
session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$DOB = $_POST['DOB'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$salt = $password;
$password = hash('gost', $password . $salt);
date_default_timezone_set("Asia/bangkok");
$date_time=date("Y-m-d H:i:s");
$servername = "localhost";
$usernamedb = "root";
$passworddb = "";
$dbname = "laundrydb";
$conn = new mysqli($servername, $usernamedb, $passworddb, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO tb_user (fname, lname, email,tel,username,password,DOB,gender,time_stamp)
VALUES ('$fname', '$lname', '$email','$tel','$username','$password','$DOB',$gender,'$date_time')";
// mysqli_query($conn, $sql)



?>

<html>
    <head>
        <title>ระบบลงทะเบียน</title>
        <?php
        include 'metaHead.html';
        ?>
    </head>
    <body>
        <?php
        include 'header.html';
        ?>
        <div class="jumbotron vertical-center mb-0">
        <div class="container">
 
                    <?php
                if (mysqli_query($conn, $sql)) {
                    ?>
                    <div class="regis_success">
                    <div class="row">
                    <div class="col col-lg-12 mx-auto">
                    
                    <span class="material-icons  md-100">
                        library_add_check
                    </span>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col col-lg-12 mx-auto">
                            
                    <?php
                    echo "ลงทะเบียนสำเร็จ";                   
                        
                } else{
                         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                        

$conn->close();
?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col col-lg-12 mx-auto">
                        <br>
                        <h6 id="center"><a href="login.php">คลิกที่นี่เพื่อไปหน้าล็อกอิน</a></h6>
                       
                    </div>
                    </div>  
        </div>
        </div>
    </body>
</html>