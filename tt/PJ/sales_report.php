<html>
    <head>
    
    <link rel="stylesheet" type="text/css" href="../css/bootstrap4/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../css/main_styles.css">
    

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
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
  var options = {'title':'ยอดขายต่อเดือน', 'width':500, 'height':400};

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
                                    <li class="active"><a href="../../first.php">หน้าหลัก</a></li>
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
<a href="after_login_sell.php"><button type="button" class="btn btn-primary" style="width:120px;">< ย้อนกลับ</button></a>
        <br>
        <br>

</div>
<div class="row">

    <div class="col-8"  style="padding-left:120px;">
        <b>ลงขายสินค้า</b>
    </div>
    <div class="col-4" >
       ยอดขายรวม &nbsp;&nbsp;&nbsp;
       <button type="button" class="btn btn-primary" style="width:250px;">ระบบคำนวณรายได้ที่ต้องการ</button>
    </div>
</div>
<hr>
 <div  class="row">
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

                       
        <footer class="container-fluid text-center foot" style="width:100%;padding-right: 0px;">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                        <div class="copyrights">
                                <img class="footimg"  src="../images/logo.png" alt="Logo">
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


    <!---

    <div>
        <form action="">
            <input type="text" name="FirstName" value=""> บาท <br>
            <select>
                <option value="">ข้าวหอมมะลิ</option>
                <option value="">ข้าวเหนียว</option>
                <option value="">ข้าวเพื่อสุขภาพ</option>
                <option value="">ข้าวขาว</option>
            </select>
            <br>
        </form>
        <div class="row">
            <div class="col-6">
                <fieldset>
                    จำนวนสินค้าที่ต้องขาย
                    <br>
                    <br>
                </fieldset>
            </div>
            <div class="col-6">
                <fieldset>
                    จะขายได้ภายใน
                    <br>
                    <br>
                </fieldset>
            </div>
        </div>

    </div>


    --->