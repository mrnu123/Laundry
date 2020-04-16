<html>

<head>
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
            <div class="row mt-5">
                <div class="col col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
                <div class="col col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="card mx-auto">
                        <div class="card-title bg-primary">
                            <h2 class="ml-3 mt-4">
                                <h2 id="TitleRegister" class="ml-3 mt-5 mb-3">เข้าสู่ระบบ</h2>
                            </h2>
                        </div>
                        <form class="mx-3" action="login_confirm.php" method="post">
                            <div class="form-group">
                                <label for="userName" class="mb-0">ชื่อผู้ใช้งาน</label>
                                <input class="form-control" id="userName" type="text" placeholder="ตัวอย่าง SomSri">
                            </div>
                            <div class="form-group">
                                <label for="pwd" class="mb-0">รหัสผ่าน</label>
                                <input class="form-control" id="pwd" type="password" placeholder="************">
                            </div>

                            <div class="row">
                                <button class="btn btn-primary mb-3 mx-auto" type="submit">
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