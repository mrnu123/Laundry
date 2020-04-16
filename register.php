<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <?php
    include 'metaHead.html';
    ?>
</head>

<body>
<div class="jumbotron vertical-center mb-0">
    <div class="container mt-4">
        <?php
        include 'header.html';
        ?>
       
            <div class="container">
                <div class="row mt-5">
                    <div class="col col-lg-2"></div>
                    <div class="col col-lg-8 col-md-12">
                        <div class="card mx-auto">
                            <div class="card-title bg-primary">
                                <h2 class="ml-3 mt-4">
                                    <h2 id="TitleRegister" class="ml-3 mt-5 mb-0">สร้างบัญชีผู้ใช้</h2>
                                    <footer class="blockquote-footer ml-4 mt-0 mb-1">
                                        <small class="text-muted">
                                            <cite title="Source Title">ระบบลงทะเบียน</cite>
                                        </small>
                                    </footer>
                                </h2>
                            </div>
                            <form class="mx-3" action="register_confirm.php" method="post">
                                <div class="row mb-0">
                                    <div class="col col-lg-6">
                                        <div class="form-group">
                                            <label class="mb-0" for="fname">ชื่อ</label>
                                            <input class="form-control" type="text" name="fname" id="fname" placeholder="ตัวอย่าง สมศรี">
                                        </div>
                                    </div>
                                    <div class="col col-lg-6">
                                        <div class="form-group">
                                            <label class="mb-0" for="lname">สกุล</label>
                                            <input class="form-control" type="text" name="lname" id="lname" placeholder="ตัวอย่าง ตั้งใจเรียน">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="mb-0">E-mail</label>
                                    <input class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="ตัวอย่าง Somsri_TH@webmaster.com">
                                </div>
                                <div class="form-group">
                                    <label for="tel" class="mb-0">หมายเลขโทรศัพท์</label>
                                    <input class="form-control" id="tel" type="tel" placeholder="ตัวอย่าง 0912345678">
                                </div>
                                <div class="form-group">
                                    <label for="userName" class="mb-0">ชื่อผู้ใช้งาน</label>
                                    <input class="form-control" id="userName" type="text" placeholder="ตัวอย่าง SomSri">
                                </div>
                                <div class="form-group">
                                    <label for="pwd" class="mb-0">รหัสผ่าน</label>
                                    <input class="form-control" id="pwd" type="password" placeholder="************">
                                </div>
                                <div class="form-group">
                                    <label for="birthDay" class="mb-0">วันเกิด</label>
                                    <input class="form-control" id="birthDay" type="date">
                                </div>
                                <div class="form-group">
                                    <label for="gender" class="mb-0">เพศ</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>--กรุณาเลือก--</option>
                                        <option>ชาย</option>
                                        <option>หญิง</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <button class="btn btn-primary mb-3 mx-auto" type="submit">
                                        <div class="row mx-auto">
                                            <div class="col mx-auto mt-2">สร้างบัญชี</div>
                                            <div class="col mx-auto mt-2">
                                                <span class="material-icons md-24">
                                                    send
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