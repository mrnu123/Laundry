<?php
include'process.php';
?>
<html>
<?php
session_start();
?>
<head>
    <title>Register</title>
    <?php
    include 'metaHead.html';
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</head>

<body>
        <?php
        include 'header.html';
        ?>
       <!-- <div class="jumbotron vertical-center mb-0"> -->
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
                            <form name="registerForm" class="mx-3" action="register_confirm.php" method="post" onsubmit="return validateForm()">
                                <div class="row mb-0">
                                    <div class="col col-lg-6">
                                        <div class="form-group">
                                            <label class="mb-0" for="fname">ชื่อ</label>
                                            <input class="form-control" type="text" name="fname" id="fname" placeholder="ตัวอย่าง สมศรี" required>
                                        </div>
                                    </div>
                                    <div class="col col-lg-6">
                                        <div class="form-group">
                                            <label class="mb-0" for="lname">สกุล</label>
                                            <input class="form-control" type="text" name="lname" id="lname" placeholder="ตัวอย่าง ตั้งใจเรียน"required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="mb-0">E-mail</label>
                                    <div>
                                    <input class="form-control" name="email" id="email" type="email" aria-describedby="emailHelp" placeholder="ตัวอย่าง Somsri_TH@webmaster.com" required>
                                    <span></span>
                                    </div>
                                <div class="form-group">
                                    <label for="tel" class="mb-0">หมายเลขโทรศัพท์</label>
                                    <input class="form-control" name="tel" id="tel" type="tel" placeholder="ตัวอย่าง 0912345678" required>
                                </div>
                                <div class="form-group">
                                    <label for="userName" class="mb-0">ชื่อผู้ใช้งาน</label>
                                    <div>
                                    <input class="form-control" name="username" id="username" type="text" placeholder="ตัวอย่าง SomSri" required>
                                    <span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd" class="mb-0 mt-0">รหัสผ่าน</label>
                                    <input class="form-control" name="password" id="pwd" type="password" placeholder="************" required>
                                </div>
                                <div class="form-group">
                                    <label for="birthDay" class="mb-0">วันเกิด</label>
                                    <input class="form-control" name="DOB" id="birthDay" type="date" required>
                                </div>
                                <div class="form-group">
                                    <label for="gender" class="mb-0">เพศ</label>
                                    <select  class="form-control" name="gender" id="exampleFormControlSelect1"  required>
                                        <option value="">--กรุณาเลือก--</option>
                                        <option value=0>ชาย</option>
                                        <option value=1>หญิง</option>
                                    </select>
                                </div>

                                <div class="row mb-0">
                                    <button class="btn btn-primary mt-3 mb-0 mx-auto" type="submit">
                                        <div class="row mx-auto">
                                            <div class="col mx-auto mt-2">สร้างบัญชี</div>
                                            <div class="col mx-auto mt-2 mb-2">
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
       <!-- </div> -->
        
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script src="script.js"></script>