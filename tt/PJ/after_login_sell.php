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


                    <div class="col-2">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <div class="logo">
                                <a href="#"><img src="../images/logo.png" alt=""></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-5">
                        <br>

                        
                        <div class="main_nav">
                                <ul>
                                    <li><a style="color:white;">ระบบจัดการของผู้ขาย</a></li>
                                  
                                </ul>
                            </div>

                    </div>
                    <div class="col-5" align="right" style="color:white;">
                        <br>
                        <div id="user_para"></div>
                        <button  onclick="logout()" style="width:132px; ,height: 19px;" > ออกจากระบบ</button>
                        

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
    <br>
    <div class="row">
        <div class="col-12" align="center" style="height:200px;">
            <h2>ยินดีต้อนรับเข้าสู่ ระบบจัดการของผู้ขาย</h2>
        </div>
    </div>

    <div class="row" style="height:100px;">
        <div class="col-6" align="right">
            <a href="upload_product.php"><button type="button" class="btn btn-success" style="width:150px;">ลงขายสินค้า</button></a>
        </div>
        <div class="col-6">
            <a href="sales_report.php"><button type="button" class="btn btn-success" style="width:150px;">ดูยอดขาย</button></a>
        </div>
    </div>




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
<script type="text/javascript" src="../../js/loginWeb.js"></script>
<script>
function logout() {
         firebase.auth().signOut();
        document.location.href = "../../index.php.php";
        }
</script>
</html>