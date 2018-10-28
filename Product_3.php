<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main_styles.css">
</head>
<script>

</script>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo">
								<a href="#"><img src="images/logo.png" alt=""></a>
							</div>
							<div class="main_nav">
								<ul>
								<li><a href="index.php">หน้าหลัก</a></li>
									<li><a href="#">เกียวกับเรา</a></li>
									<li><a href="#">ติดต่อเรา</a></li>
								</ul>
							</div>
						</div>
					
					</div>
					<div>
					<br>
					<a href="./tt/PJ/cart.php"><button type="button" class="btn btn-primary" style="width:100px;">ดูตะกร้า</button></a>

					</div>
				</div>
			</div>
		</header>
	</div>
	<br>
	<!-- Product Content -->
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<form class="img_from">
					<div class="product_content_inner">
						<div class="product_image_row d-flex flex-md-row flex-column align-items-md-end align-items-start justify-content-start">
							<div class="product_image_1 product_image">
								<img src="images/3.jpg" alt="">
							</div>
							
						</div>
					</div>

						<form action="#" id="product_form" class="product_form">
							<br>
							<div class="product_name">ข้าวหอมมะลิ</div>
							<div class="product_price">150.00 บาท</div>
							<fieldset>
								<div class="product_description"><i>สายพันธุ์ข้าวที่มีถิ่นกำเนิดในประเทศไทย <br>มีลักษณะกลิ่นหอมคล้ายใบเตย <br>
        เป็นพันธุ์ข้าวที่ทำให้ข้าวไทยเป็นสินค้า<br>ส่งออกที่รู้จักไปทั่วโลก</i><br><br><br></div>
							</fieldset>
							

						</form>
					
				</form>
			</div>
			<div class="col-md-6 col-lg-6">
				<form class="buy_page">
					<div class="product_content_inner">
						<div class="product_image_row d-flex flex-md-row flex-column align-items-md-end align-items-start justify-content-start">
						</div>
					</div>
					<div class="product_name">ประเภท </div>
					<br>
					<div>
						<select class="select_buy">
							<option value="คิว">คิวบ์</option>
							<option value="กระสอบ">กระสอบ</option>
							<option value="ตัน">ตัน</option>
						</select>
					</div>
					<br>
					<br>
					<div class="product_name">ราคา </div>
					<br>
					<input class="pice_buy" type="text" value="150">
					<br>
					<br>
					<a href="tt/PJ/first_buy.php"><button type="button" >หยิบใส่ตะกร้า</button></a>

				</form>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<!-- Footer -->
	<footer class="container-fluid text-center foot">
			<div class="copyrights">
					<img class="footimg"  src="images/logo.png"  alt="Logo">
				<hr class="dark-line">
									<h5 class="active">อีเมล : ricehere.buu@gmail.com </h5>
									<h5 class="active">โทร : 0853939908</h5>
				<p class="white-txt small">
					ซื้อง่าย ขายข้าว จากชาวนาคุณภาพ นึกถึง Rice Here 
				</p>
			</div>
	</footer>
</body>
</html>