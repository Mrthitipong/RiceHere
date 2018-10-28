<html>

<head>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap4/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../css/main_styles.css">

</head>

<body>

    <div class="super_container">
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <div class="logo">
                                <a href="#"><img src="../images/logo.png" alt=""></a>
                            </div>
                            <div class="main_nav">
                                <ul>
                                    <li class="active"><a href="../../index.php">หน้าหลัก</a></li>
                                    <li><a href="#">เกี่ยวกับเรา</a></li>
                                    <li><a href="#">ติดต่อเรา</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!---- header---->

    <br>
    <br>
    <br>
    <br>
    <div style="padding-left :40px;">
        <a href="after_login_sell.php"> <button type="button" class="btn btn-primary" style="width:120px;">
                < ย้อนกลับ</button> </a> <br>
                    <br>

    </div>
    <div class="row">

        <div class="col-6" style="padding-left:120px;">
            <h2>ลงขายสินค้า</h2>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-6">
            <ul style="list-style-type:none">

                <br>
                <li>เลือกประเภท</li>
                <select class="select_buy" style=" width:70%">
                    <option value="คิวบ์">คิวบ์</option>
                    <option value="กระสอบ">กระสอบ</option>
                    <option value="ตัน">ตัน</option>
                </select>
                <br> <br>
                <li>ระบุจำนวน</li>
                <input class="email_user" type="text" name="uname">
                <br>
                <br>
                <li>ระบุราคาต่อหน่วย</li>
                <input class="email_user" type="text" name="uname">
            </ul>
        </div>
        <div class="col-6">

            <form>
                <fieldset class="ffset" form="form1">
                    <div>ภาพสินค้า</div>
                    <br>
                    <button type="button" class="btn btn-primary">ใส่รูปภาพ</button>
                    <br>
                </fieldset>
            </form>
            <form>
                <fieldset class="ffset" form="form1">
                    <div>คำอธิบายสินค้า</div>
                    <br>
                    <input type="text" style=" width:500px;  height: 200px;">
                </fieldset>
            </form>
            <button type="button" class="btn btn-primary">ส่ง</button>
        </div>

        </ul>
    </div>
    </div>

    <br>
    <br>


    <footer class="container-fluid text-center foot" style="width:100%;padding-right: 0px;">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="copyrights">
                    <img class="footimg" src="../images/logo.png" alt="Logo">
                    <hr class="dark-line">
                    <h5 class="active">อีเมล : ricehere.buu@gmail.com </h5>
                    <h5 class="active">โทร : 0853939908</h5>
                    <p class="white-txt small">
                        ซื้อง่าย ขายข้าว จากชาวนาคุณภาพ นึกถึง Rice Here
                    </p>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </footer>




</body>

</html>