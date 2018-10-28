<html>

<head>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap4/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../css/main_styles.css">
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
   
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.structure.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.css">


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['ข้าวเหนียว', 10],
                ['ข้าวหอมมะลิ', 2],
                ['ข้าวกล้อง', 8]

            ]);

            // Optional; add a title and set the width and height of the chart
            var options = { 'title': 'ยอดขายต่อเดือน', 'width': 500, 'height': 400 };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }

    </script>

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
        <a href="after_login_sell.php"><button type="button" class="btn btn-primary" style="width:120px;">
                ย้อนกลับ</button> </a> <br>
        <br>

    </div>
    <div class="row">

        <div class="col-8" style="padding-left:120px;">
            <b>ลงขายสินค้า</b>
        </div>
        <div class="col-4">
            ยอดขายรวม &nbsp;&nbsp;&nbsp;
            <button type="button" id="cal_price" class="btn btn-primary" style="width:250px;">ระบบคำนวณรายได้ที่ต้องการ</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-3">
            <div id="piechart"></div>
        </div>
        <div class="col-1">

        </div>
        <div class="col-8">
            <br>
            <br>
            <table class="table">
                <thead>
                    <tr align="center">
                        <th>วันที่</th>
                        <th>รายการ</th>
                        <th>จำนวน</th>
                        <th>ราคาต่อหน่วย</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <tr>
                        <td>15/10/2018</td>
                        <td>ข้าวเหนียว</td>
                        <td>5</td>
                        <td>150.00</td>

                    </tr>
                    <tr>
                        <td>15/10/2018</td>
                        <td>ข้าวกล้อง</td>
                        <td>3</td>
                        <td>220.00</td>
                    </tr>
                    <tr>
                        <td>15/10/2018</td>
                        <td>ข้าวหอมมะลิ</td>
                        <td>10</td>
                        <td>170.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <div id="login_div" class="main-div">
        <div id="box" title="Basic dialog">
            <div class="container" align="center">
                <div class="email"><b>รายได้ที่ต้องการ</b></div>
                <input class="email_user" id="profit" type="text" name="uname">
                <div>ชนิดสินค้า</div>
                <select class="select_buy" style=" width:70%">
                 <option value="คิวบ์"></option>
                    <option value="คิวบ์">ข้าวหอมมะลิ</option>
                    <option value="กระสอบ">ข้าวเหนียว</option>
                    <option value="ตัน">ข้าวเพื่อสุขภาพ</option>
                </select>
                
                <div>ขนาดสินค้า</div>
                <select class="select_buy" style=" width:70%">
                 <option value="คิวบ์"></option>
                    <option value="คิวบ์">คิวบ์</option>
                    <option value="กระสอบ">กระสอบ</option>
                    <option value="ตัน">ตัน</option>
                </select>
                
                <div class="row">
                            
                            <div class="col-6" align="center" >
                            <div>จำนวนสินค้า</div>
                            <div class="div1"></div></div>
                            
                            <div class="col-6">
                            <div>จะขายได้ถายใน</div>
                            <div class="div2"></div>
                         </div>
                  </div>
                <br>
                <button  class="btn btn-warning" align="center" id="Sign_up1">คำนวน</button>

            </div>
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
<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/jquery-ui.js"></script>
<script type="text/javascript" src="../../js/jquery-ui.min.js"></script>
<script>
    $(function () {
        $("#box").dialog({
            autoOpen: false,
            title: 'กรุณากรอกข้อมูล',
            width: 400,
            height: 550,
            modal: true,
            resizable: false,
            draggable: false,
        });
        $("#cal_price").on("click", function () {
            $("#box").dialog("open");
        });
        $("#Sign_up1").on("click", function () {
            $("#box").dialog("close");
        });
    });

</script>

</html>