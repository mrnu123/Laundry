<html>

<head>
    <?php
    include 'metaHead.html';
    ?>
   
</head>

<body>
    <?php
    session_start();
    if($_SESSION['login_status']==false){
        header("Location:login.php");
        exit;
    }
    include 'header.html';
    ?>
    <div class="jumbotron vertical-center mb-0">
        <div class="container">
            <div class="row mt-5">
                <div class="col col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
                <div class="col col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="card mx-auto">
                        <div class="card-title bg-primary">
                            <h2 class="ml-3 mt-4">
                                <h2 id="TitleRegister" class="ml-3 mt-5 mb-3">เข้าสู่ระบบ</h2>
                            </h2>
                        </div>
                        <div id="error_msg">
                           ชื่อผู้ใช้งาน หรือ รหัสผ่านผิด
                        </div>
                        <form class="mx-3" action="login_confirm.php" method="POST">
                            <div class="form-group">
                                <label for="username" class="mb-0">ชื่อผู้ใช้งาน</label>
                                <input class="form-control" name="username" id="username" type="text" placeholder="ตัวอย่าง SomSri">
                            </div>
                            <div class="form-group">
                                <label for="pwd" class="mb-0">รหัสผ่าน</label>
                                <input class="form-control" name="password" id="pwd" type="password" placeholder="************">
                            </div>

                            <div class="row">
                                <button class="btn btn-primary mb-3 mx-auto" id="submit_btn" type="submit">
                                    <div class="row mx-auto">
                                        <div class="col mx-auto mt-2 mb-2">ลงชื่อเข้าใช้</div>
                                        <div class="col mx-auto mt-2 mb-2">
                                            <span class="material-icons md-24">
                                                arrow_forward_ios
                                            </span>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col col-lg-2"></div>
            </div>
        </div>
    </div>
</body>

</html>