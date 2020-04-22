<html>

<head>
    <?php
    session_start();
    include 'metaHead.html';
    ?>
</head>
<body>
    <?php
    if(isset($_SESSION['username'])){
        include 'headersuccess.php';
    }
    else{
        include 'header.html';
    }
    
    ?>
</body>
</html>