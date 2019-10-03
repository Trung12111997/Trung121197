<?php
	$connect= mysqli_connect('localhost','root','','daihoctdt') or die("loi ket noi");
	mysqli_set_charset($connect,'utf8');


	$sql = 'select * from khoa';
	$khoa=$connect->query($sql);
	$sql = 'select * from menukhoac';
	$menukhoac=$connect->query($sql);

	// print_r($sanpham6->fetch_assoc());
	// exit();
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="custom/index.css">

	<script type="text/javascript" src="public/js/jquery.js"></script>
	<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<div class="container-fluid">
		<div class=" row headermot">
			<div class="col-md-12 Phanmot">
				<div class="row">
					<div class="col-md-4 khoa">
						<i class="fa fa-university" aria-hidden="true"></i>
						<span> Khoa</span>
						<span class="topbar-separator">|</span>
						<span> Viện</span>
						<span class="topbar-separator">|</span>
						<span> Trung tâm</span>
						<span class="topbar-separator">|</span>
						<span> Thư viện</span>
						<span class="topbar-separator">|</span>
						<span> VFIS</span>
					</div>
					<div class="col-md-3"></div>						
					<div class="col-md-5 giangvien">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span> Giảng viên/Viên chức </span>
						<span class="topbar-separator">|</span>
						<span> Sinh viên </span>
						<span class="topbar-separator">|</span>
						<span> Cựu sinh viên</span>
						<span class="topbar-separator">|</span>
						<img src="public/images/co.png" alt="">
					</div>						
				</div>				
			</div>
		</div>
		<div class=" col-md- 12 row phanhai">
			<div class="col-md-6 tentruong">
				<img src="public/images/tentruong.png" alt="" width="60%">
			</div>
			<div class="col-md-6 row giayCN">
				<div class="col-md-6"></div>					
				<div class="col-md-6">
					<img  class="gchungnhan" src="public/images/giaycn.png" alt="" width="100%">
				</div>					
			</div>
		</div>
		<div class="col-md-12 row phanba">
			<div class="container">
				<div class="row">

					<nav class="navbar navbar-expand-lg navbar-light bg-light menuchinh">
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					      <?php while($row=$menukhoac->fetch_assoc()){ ?>
					   			 <ul class="navbar-nav mr-auto">
							      <li class="nav-item">
							        <a class="nav-link" href="#"><?=$row['tenMenu'] ?></a>
							      </li>
					  		<?php } ?>
					     
					  </div>
					  <i class="fa fa-search" aria-hidden="true"></i>
					</nav>
				</div>
			</div>
		</div>
		<div class="contend">
			<div class="col-md-12 phanbon">
				<div class="row">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="public/images/slide1.jpg" class="d-block w-100" alt="..." width="100%">
					    </div>
					    <div class="carousel-item">
					      <img src="public/images/slide3.jpg" class="d-block w-100" alt="..." width="100%">
					    </div>
						<div class="carousel-item ">
					      <img src="public/images/slide.jpg" class="d-block w-100" alt="..." width="100%">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
			<div class=" col-md-12 phannam">
					<center>Tin tức</center>
			</div>
			<div class="col-md-12 phansau">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="card" >
							  <img src="public/images/The-thao.png" class="card-img-top" alt="...">
							  <div class="card-body cardbds">
							    <h5 class="card-title thongdiep">Kỷ niệm 73 năm Ngày thể thao Việt Nam và 2 năm thành lập Khoa khoa học thể thao</h5>
							    <span class="hoptac">Hợp tác</span>
							    <span class="ngay"> | 24/03/2019</span>
							    <p class="card-text cardts"> Tại buổi lễ, Lãnh đạo Khoa đã chúc mừng Lãnh đạo các doanh nghiệp nhân Ngày thể thao Việt Nam... </p>
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card" >
							  <img src="public/images/Solar.png" class="card-img-top" alt="...">
							  <div class="card-body cardbds">
							    <h5 class="card-title thongdiep">Hợp tác với Công ty TNHH sản xuất First Solar Việt Nam</h5>
							    <span class="hoptac">Hợp tác</span>
							    <span class="ngay"> | 24/03/2019</span>
							    <p class="card-text cardts">  First Solar là tập đoàn chuyên sản xuất tấm năng lượng mặt trời của Mỹ, thành lập năm 1999...  </p>
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card" >
							  <img src="public/images/hima3.jpg" class="card-img-top" alt="...">
							  <div class="card-body cardbds">
							    <h5 class="card-title thongdiep">Khoa quản trị kinh doanh hợp tác với Công ty cổ phần Đông trùng-Hạ thảo HIMA</h5>
							    <span class="hoptac">Hợp tác</span>
							    <span class="ngay"> | 24/03/2019</span>
							    <p class="card-text cardts">  HIMA sẽ hỗ trợ hoạt động giáo dục bậc đại học cho Khoa bằng cách chia xẻ kinh nghiệm thực tiễn trong lĩnh vực kinh doanh, góp phần định hướng nghề nghiệp cho sinh viên.  </p>
							  </div>
							</div>
						</div>

					</div>	
				</div>
			</div>
			<div class="col-md-12 phanbay">
				<span>tin khác</span>
				<i class="fa fa-angle-right" aria-hidden="true"></i>
				<i class="fa fa-angle-right" aria-hidden="true"></i>
			</div>
			<div class="col-md-12 phantam " style="background-color: #F9FADC">
				<center class="sukien"> Sự kiện</center>
			</div>
			<div class="col-md-12 phanchin"  style="background-color: #F9FADC">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="card" >
							  <img src="public/images/FMA-2019-1000.jpg" class="card-img-top anhca" alt="..." width="100%">
							  <div class="card-body ">
							    <h5 class="card-title">Hội thảo về quản trị tài chính Khu vực Châu Á – Thái Bình Dương 2019</h5>
							    <p class="card-text"> Hội thảo là sự kiện qui tụ các nhà khoa học, nhà nghiên cứu và các học giả, những người làm công tác chuyên môn hàng đầu thế giới trong Ngành tài chính;... </p>
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card" >
							  <img src="public/images/Solar.png" class="card-img-top  anhca" alt="..." width="100%">
							  <div class="card-body">
							    <h5 class="card-title">Seminar về Hoá lượng tử tính toán</h5>
							    <p class="card-text ">  Báo cáo viên sẽ giới thiệu sơ lược về phương pháp phiễu loạn Møller–Plesset (MP); đồng thời trình bày một số kết quả tính toán hóa học có giá trị sử dụng phương pháp MP... </p>
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row ngaysk1">
								<div class="col-md-4 event-date">
									<span class="day">30</span>
									<br>
              						<span class="month">Tháng 3</span>
								</div>
								<div class="col-md-8">
									<p>Thi khởi nghiệp Năm 2019</p>
								</div>
							</div>
							<div class="row  ngaysk">
								<div class="col-md-4 event-date">
									<span class="day">30</span>
									<br>
              						<span class="month">Tháng 3</span>
								</div>
								<div class="col-md-8 ">
									<p>Cuộc thi: Đầu tư chứng khoán-2019</p>
								</div>
							</div>
							<div class="row ngaysk">
								<div class="col-md-4 event-date">
									<span class="day">30</span>
									<br>
              						<span class="month">Tháng 3</span>
								</div>
								<div class="col-md-8">
									<p>TDTU Open days 2019</p>
								</div>
							</div>
							<div class="row ngaysk">
								<div class="col-md-4 event-date">
									<span class="day">30</span>
									<br>
              						<span class="month">Tháng 3</span>
								</div>
								<div class="col-md-8">
									<p>Khai thác hiệu quả Cơ sở dữ liệu Web of Science</p>
								</div>
							</div>
						</div>
					</div>

					</div>	
				</div>
			<div class="col-md-12 phanbay" style="background-color: #F9FADC">
				<span>sự kiện khác</span>
				<i class="fa fa-angle-right" aria-hidden="true"></i>
				<i class="fa fa-angle-right" aria-hidden="true"></i>
			</div>
			<div class="col-md-12 phantam " style="background-color: #F9FADC">
				<center class="sukien"> Chọn TDTU để xây dựng tương lai, tại sao?</center>
			</div>
			<div class="col-md-12 phanmuoi">
				<div class=" container">
					<div class="row">
						<div class="col-md-4 carmuoi">
							<div class="card cardhoc1" style="width: 18rem;">
							  <img src="public/images/chuongtrinh5.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <p class="card-text chuongtrinh"> 1-TDTU là đại học đứng thứ 2 toàn quốc về tổng thể, đứng số 1 toàn quốc về khoa học-công nghệ và sáng tạo tri thức mới </p>
							  </div>
							</div>
						</div>
						<div class="col-md-4 carmuoi">
							<div class="card cardhoc1" style="width: 18rem;">
							  <img src="public/images/chuongtrinh7.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <p class="card-text chuongtrinh">  2-Điều kiện, phương pháp dạy và học chuyên dụng, hiện đại  </p>
							  </div>
							</div>
						</div>
						<div class="col-md-4 carmuoi">
							<div class="card cardhoc1" style="width: 18rem;">
							  <img src="public/images/chuongtrinh6.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <p class="card-text chuongtrinh">  3-Lực lượng chuyên môn hùng mạnh và chuyên nghiệp </p>
							  </div>
							</div>
						</div>
					</div>
					<div class="row cthanghai">
						<div class="col-md-3 carbar">
							<div class="card cardhoc" style="width: 18rem;">
							  <img src="public/images/chuongtrinh1.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <p class="card-text chuongtrinh">  4-Chương trình giáo dục đại học và sau đại học tiên tiến  </p>
							  </div>
							</div>
						</div>
						<div class="col-md-3 carbar ">
							<div class="card cardhoc" style="width: 18rem;">
							  <img src="public/images/chuongtrinh3.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <p class="card-text chuongtrinh"> 5-Môi trường học tập tiêu chuẩn quốc tế 5 sao  </p>
							  </div>
							</div>
						</div>
						<div class="col-md-3 carbar">
							<div class="card cardhoc" style="width: 18rem;">
							  <img src="public/images/chuongtrinh2.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <p class="card-text chuongtrinh">  6-Chuẩn đầu ra của giáo dục đạt tầm quốc tế  </p>
							  </div>
							</div>
						</div>
						<div class="col-md-3 carbar">
							<div class="card cardhoc" style="width: 18rem;">
							  <img src="public/images/chuongtrinh4.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <p class="card-text chuongtrinh"> 7-Môi trường rèn luyện tốt nhất </p>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 phanmmot">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							 <center><img src="public/images/student.png" alt=""></center> 
						</div>
						<div class="col-md-6">
							<span class="svtn">Sinh viên tốt nghiệp TDTU</span>
							<div class="row cmgltvv">
								<div class="col-md-1 daulike">
									<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
								</div>
								<div class=" col-md-11 ttlike">
									<span class="cmg">Chuyên môn giỏi</span>
									<br>
									<span class="ltvv">Lý thuyết vững vàng, thực hành thành thạo; 100% sinh viên tốt nghiệp TDTU có việc làm trong năm đầu tiên.</span>
								</div>
							</div>
							<div class="row cmgltvv">
								<div class="col-md-1 daulike">
									<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
								</div>
								<div class=" col-md-11 ttlike">
									<span class="cmg">Kỹ năng đa dạng</span>
									<br>
									<span class="ltvv">Phát triển tối đa năng lực bản thân với các kỹ năng mềm cần thiết: tiếng Anh (IELTS 5.0), Tin học (MOS 750), Sinh tồn (bơi 50m), ...</span>
								</div>
							</div>
							<div class="row cmgltvv">
								<div class="col-md-1 daulike">
									<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
								</div>
								<div class=" col-md-11 ttlike">
									<span class="cmg">Đạo đức chuẩn mực</span>
									<br>
									<span class="ltvv">Rèn luyện trong môi trường nghiêm túc: Hiếu thảo với cha mẹ, Thượng tôn pháp luật, Tinh thần phụng sự cộng đồng.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 phantamt " style="background-color: #F9FADC">
				<center class="sukienkhoa"> 17 Khoa</center>
			</div>
			<div class="col-md-12 phanmhai">
				<div class="container">
					<div class="row">
						 <?php while($row=$khoa->fetch_assoc()){ ?>
						<div class="col-md-3">
							<div class="card cackhoa" style="width: 18rem;">
								  <img src="<?=$row['haKhoa'] ?>" class="card-img-top" alt="...">
								  <div class="card-body">
								    <p class="card-text"><?=$row['tenKhoa'] ?></p>
								  </div>
							</div>
						</div>
						<?php } ?>
						

					</div>
				</div>
			</div>
		</div>
		<div class=" col-md-12 footer ">
			<div class="container">
				<div class="row nganhsa">
					<div class="col-md-2">
						<p class="gdone">Giáo dục </p>
						<p class="gdtwo">Danh mục ngành</p>
						<p class="gdtwo">Hướng dẫn học vụ </p>
						<p class="gdtwo">Sinh viên </p>
						<p class="gdtwo">Công khai thông tin </p>
						<p class="gdtwo">Tra cứu văn bằng </p>
					</div>
					<div class="col-md-2">
						<p class="gdone">Khoa học-Công nghệ  </p>
						<p class="gdtwo">Công bố mới</p>
						<p class="gdtwo">Đã công bố </p>
						<p class="gdtwo">Bằng sáng chế</p>
						<p class="gdtwo">Tạp chí khoa học </p>
						<p class="gdtwo">Quỹ khoa học-công nghệ </p>
					</div>
					<div class="col-md-2">
						<p class="gdone">Đơn vị trực thuộc </p>
						<p class="gdtwo">Khoa trường</p>
						<p class="gdtwo">Viện trung tâm</p>
						<p class="gdtwo">Phòng ban </p>
						<p class="gdtwo">Trường quốc tế Việt Nam </p>
						<p class="gdtwo">Phần Lan </p>
					</div>
					<div class="col-md-2">
						<p class="gdone">Thông tin</p>
						<p class="gdtwo">Liên hệ</p>
						<p class="gdtwo">Tuyển dụng </p>
						<p class="gdtwo">Trải nghiệm</p>
						<p class="gdtwo">Websites cũ </p>
						<p class="gdtwo">Sơ đồ trang </p>
					</div>
					<div class="col-md-4 phuongthuclh">
						<p class="lienhemoi">Đại học Tôn Đức Thắng</p>
						<p class="diadiem">Số 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, TP. Hồ Chí Minh, Việt Nam.</p>
						<span class="diadiem">Kết nối với TDTU</span> 
						<img src="public/images/facebook.png" alt="">
						<img src="public/images/youtobe.png" alt="">
						<img src="public/images/twiter.png" alt="">
						<img src="public/images/Google.png" alt="">
					</div>
				</div>
				
			</div>
		</div>
		<center class="footercuoi" >Copyright © 2018 Đại học Tôn Đức Thắng</center>
	</div>
			
	</div>
	
</body>
</html>