<?php
    session_start();
    $_SESSION['login_status']=false;
    $servername = "localhost";
    $usernamedb ="root";
    $passworddb ='';
    $dbname = "laundrydb";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $salt = $password;
    $password = hash('gost', $password . $salt);
    $conn = new mysqli($servername, $usernamedb, $passworddb, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        
        $sql = "SELECT username, password FROM tb_user";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {

    // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                // echo"Usename :{$row['username']} Password {$row['password']}";
               
                if($row['username']==$username and $row['password']==$password)
                {
                   
                    $_SESSION['username']=$row['username'];
                    $_SESSION['password']=$row['password'];
                    header("Location:index.php");
                    exit;
                }               
            }
            if($row['username']!=$username or $row['password']!=$password)
            {
                $_SESSION['login_status']=true;
                header("Location:login_error.php");
            }
           
        } 
    mysqli_close($conn);       
    }
?>