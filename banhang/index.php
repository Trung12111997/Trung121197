
<?php
	require 'sanpham.php';
	require 'danhmucMN.php';
	require 'chuongtrKM.php';
	require 'slider.php';
	require 'thuonghieuSP.php';
	require 'tintuc.php';
	require 'danhmuctintuc.php';

	$danhmuc = new danhmucMN();
	$sanpham = new sanpham();
	$khuyenmai = new chuongtrinhKM();
	$slider = new slider();
	$thuonghieusp = new thuonghieuSP();
	$tintuc = new tintuc();
	$danhmuctintuc = new danhmucTT();
	$danhmuc->connect();
	$sanpham->connect();
	$khuyenmai->connect();
	$slider->connect();
	$thuonghieusp->connect();
	$tintuc->connect();
	$danhmuctintuc->connect();

	$danhmuc = $danhmuc->getdanhmucMN();
	$sanpham6 = $sanpham->getsanPhamLM(6);
	$VEGETABLES = $sanpham->getsanPhamDM(1,3);
// print_r($VEGETABLES);
// exit();
	$RICE = $sanpham->getsanPhamDM(3,3);
	$BRUNO = $sanpham->getsanPhamDM(5,3);

	$khuyenmaione = $khuyenmai->getCTKM(1);
	$khuyenmaitwo = $khuyenmai->getCTKM(2);
	$khuyenmaithree = $khuyenmai->getCTKM(3);
	$khuyenmaifour = $khuyenmai->getCTKM(4);

	$slide = $slider->getslider();

	$thuonghieu = $thuonghieusp->getthuonghieuSP();

	$bangtin = $danhmuctintuc->getdanhmucTT();
	// $bangtin = $tintuc->gettintuc();

	// $connect= mysqli_connect('localhost','root','','banhangol') or die("loi ket noi");
	// mysqli_set_charset($connect,'utf8');

	// $sql = 'select * from danhmuc';
	// $danhmuc=$connect->query($sql);

	// $sql = 'select * from sanpham  ORDER BY maSP limit 6';
	// $sanpham6=$connect->query($sql);

	// $sql = 'select * from sanpham where maDM = 2 limit 3';
	// $VEGETABLES=$connect->query($sql);

	// $sql = 'select * from sanpham where maDM = 3 limit 3';
	// $RICE=$connect->query($sql);

	// $sql = 'select * from sanpham where maDM = 4 limit 3';
	// $BRUNO =$connect->query($sql);

	// $sql = 'select * from khuyenmai where maKM = 1';
	// $khuyenmaione =$connect->query($sql);

	// 	$sql = 'select * from khuyenmai where maKM = 2';
	// $khuyenmaitwo =$connect->query($sql);

	// 	$sql = 'select * from khuyenmai where maKM = 3';
	// $khuyenmaithree =$connect->query($sql);

	// 		$sql = 'select * from khuyenmai where maKM = 4';
	// $khuyenmaifour =$connect->query($sql);
	// $sql = 'select * from sliderr ';
	// $slide =$connect->query($sql);


	// $sql = 'select * from thuonghieu ';
	// $thuonghieu =$connect->query($sql);

	// $sql = 'select * from bangtin ';
	// $bangtin =$connect->query($sql);

	// $sql = 'select * from hoptacpt ';
	// $hoptacpt =$connect->query($sql);

	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="custom/index.css">

	<script type="text/javascript" src="public/js/jquery.js"></script>
	<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="container fit">
			<div class="header">
				<div class="header_inner">
					<center><img src="public/images/logo.png" alt="" style="margin-top: 34px;"></center>	
				</div>
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
					  <a class="navbar-brand hiddenmenu" href="#">MENU</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav mr-auto">
					      <li class="nav-item">
					        <a class="nav-link" href="#">HOME </a>
					      </li>
					      <?php while($row=$danhmuc->fetch_assoc()){ ?>
					      <li class="nav-item">
					        <a class="nav-link" href="#"><?=$row['tenDMMN'] ?> </a>
					      </li>
					  		<?php } ?>
					      
					      
					  </div>
					</nav>
				</div>
				

				<div class=" slide container">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <?php  $k=1;    while($row=$slide->fetch_assoc()){?>
					    	<div class="carousel-item <?php if($k==1) echo 'active' ?> ">
						      <img src="<?=$row['hinhanhSL'] ?>" class="d-block w-100" alt="...">
						    </div>
					    <?php $k=0; } ?>
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
				<div class=" row">
					<div class="col-md-12 banerone">
						<div class="col-md-6">
							<img src="public/images/sub_banner_1.jpg" class="banner1" alt="" width="100%">
						</div>
						<div class=" col-md-6">
							<img src="public/images/sub_banner_2.jpg" class="banner2"  alt="" width="100%">
						</div>
					</div> 
				</div>
					
				
				<div class="buttonn col-md-12 text-center">
					<button type="button" class="btn btn-outline-success">FEATURED</button>
					<button type="button" class="btn btn-outline-success">BEST SELLER</button>
					<button type="button" class="btn btn-outline-success">NEW PRODUCES</button>
				</div>
				<div class="muiten col-md-12 text-center flex">
					<div class="col-md-5 text-right">
						<hr class="hr1">
					</div>
					<div class="col-md-2">
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						
					</div>
					<div class="col-md-5"><hr></div>
					
				</div>
				<div class="col-md-12 text-center" >
				<div class="col-md-12">
				<div class="row">
					 <?php while($row=$sanpham6->fetch_assoc()){ ?>
					<div class="col-md-4" style="margin-top: 30px;">
						<div class="card text-center" style="width: 100%;">
						  <img src="<?=$row['hinhanhSP'] ?> " class="card-img-top" alt="..." width="80%">
						  <div class="card-body">
						    <h5 class="card-title" style="color: #b3b3b3;"><?=$row['tenSP'] ?> </h5>
						    <a href="#" class="btn btn-outline-default">Add to Cart</a>
						  </div>
						</div>
					</div>
					<?php } ?>
					
				</div>
				</div>
				</div>

				
		   	</div>
		   	<div class=" giua mt-5">
		   		<div class="col-md-12">
		   			<div class="row">
		   				<?php while($row=$khuyenmaione->fetch_assoc()){ ?>
		   				<div class="col-md-4">
		   					<img src="<?=$row['hinhanhKM'] ?>" alt=""width="100%";>
		   				</div>
		   				<?php } ?>

		   				<div class="col-md-8">
		   					<div class="row" >
		   					<?php while($row=$khuyenmaitwo->fetch_assoc()){ ?>		   					
		   						<div class="col-md-6">
		   							<img src="<?=$row['hinhanhKM'] ?>" alt=""width="100%";>	
		   						</div>
		   					<?php } ?>
		   					<?php while($row=$khuyenmaithree->fetch_assoc()){ ?>		   				
		   						<div class="col-md-6">
		   							<img src="<?=$row['hinhanhKM'] ?>" alt=""width="100%";>
		   						</div>	
		   					<?php } ?>		   						   						
		   					</div>
		   					<?php while($row=$khuyenmaifour->fetch_assoc()){ ?>		   				
		   					<div class="row mt-4" >
			   					<div class="col-md-12">
			   						<img src="<?=$row['hinhanhKM'] ?>" alt=""width="100%";>
			   					</div>
		   					</div>
		   					<?php } ?>		   						   						

		   				</div>
		   			</div>
		   		</div>
		   		<div class="col-md-12">
		   			<div class="row vrb">
		   				<div class="col"><h4>VEGETABLES</h4></div>
		   				<div class="col"><h4>RICE & GRAINS</h4></div>
		   				<div class="col"><h4>BRUNO PASTA</h4></div>
		   			</div>
		   		</div>
		   		<div class="col-md-12">
		   			<div class="row chitiet">
		   				<?php while($row=$VEGETABLES->fetch_assoc()){ ?>
		   				<div class="col ">
		   					<a href="" class="flex">
		   						<div class="col-md-4">
			   						<img src="<?=$row['hinhanhSP'] ?> " width="100%">
			   					</div>
			   					<div class="col-md-8">
			   						<h5><?=$row['tenSP'] ?> </h5>
			   						<p><span>$ <?=$row['gianhapSP'] ?> </span> <b>$ <?=$row['giabanSP'] ?> </b></p>
			   						<p>+ Add To Cart</p>
			   					</div>
		   					</a>
		   				</div>
		   				<?php } ?>
		   			</div>
		   			<div class="row chitiet">
		   				<?php while($row=$RICE->fetch_assoc()){ ?>
		   				<div class="col ">
		   					<a href="" class="flex">
		   						<div class="col-md-4">
			   						<img src="<?=$row['hinhanhSP'] ?> " width="100%">
			   					</div>
			   					<div class="col-md-8">
			   						<h5><?=$row['tenSP'] ?> </h5>
			   						<p><span>$ <?=$row['gianhapSP'] ?> </span> <b>$ <?=$row['giabanSP'] ?> </b></p>
			   						<p>+ Add To Cart</p>
			   					</div>
		   					</a>
		   				</div>
		   				<?php } ?>
		   			</div>
		   			<div class="row chitiet">
		   				<?php while($row=$BRUNO->fetch_assoc()){ ?>
		   				<div class="col ">
		   					<a href="" class="flex">
		   						<div class="col-md-4">
			   						<img src="<?=$row['hinhanhSP'] ?> " width="100%">
			   					</div>
			   					<div class="col-md-8">
			   						<h5><?=$row['tenSP'] ?> </h5>
			   						<p><span>$ <?=$row['gianhapSP'] ?> </span> <b>$ <?=$row['giabanSP'] ?> </b></p>
			   						<p>+ Add To Cart</p>
			   					</div>
		   					</a>
		   				</div>
		   				<?php } ?>
		   			</div>
		   			
		   		</div>
		   		<?php while($row=$bangtin->fetch_assoc()){ ?>
			   		<div class="col-md-12">
			   			 <center><p class="uor"><?=$row['tenDMTT'] ?></p> </center>
			   		</div>
			   		<div class="col-md-12 ">
			   			<div class="row">
			   		<?php 
					$ctbangtin =$tintuc->gettintuc($row['maDMTT']);
			   		while($row=$ctbangtin->fetch_assoc()){ ?>
		   				<div class="col-md-6 flex nhom">
		   					<div class="col-md-5">
		   						<img src="<?=$row['hinhanhTT'] ?>" alt="" width="100%">
		   					</div>
		   					<div class=" col-md-7">
		   						<div class="date">
		   							<span class="number">23</span>
		   							<span class="month">Dec</span>
		   						</div>
		   						 <h5><?=$row['tieudeTT'] ?></h5>
		   						 <p class="chua"><?=$row['noidungTT'] ?></p>
		   						 <div class="author">
		   						 	<span class="comment"><?=$row['binhluanTT'] ?> Comments</span>
		   						 	<span class="arrow">-</span>
		   						 	<span class="dates">May 8, 2014</span> 
		   						 </div>
		   					</div>
		   				</div>
			   		<?php } ?>
		   		<?php } ?>
		   				</div>
		   			</div>
		   		<div class="col-md-12 text-center square">
		   			<div></div>
		   			<div></div>
		   			<div></div>
		   		</div>
		   		<div class="col-md-12">
		   			 <center><p class="uor">BRANDS</p> </center>
		   		</div>
		   		<div class="col-md-12 flex glchung ">
		   			<?php while($row=$thuonghieu->fetch_assoc()){ ?>
		   			<div class="col">
		   				<img src="<?=$row['hinhanhTHSP'] ?>" alt="" width="100%">
		   			</div>
		   			<?php } ?>
		   		</div>
		   	</div>
		   	<div class="footer ">
		   		<div class="col-md-12 footer1 flex ">
		   			<div class="col-md-7">

		   				<span class="news_inner1"><i class="fa fa-envelope-o" aria-hidden="true"></i> Join the Community </span>
		   				<span class="news_inner2"> to be Updated Firstly ?</span>
		   			</div>
		   			<div class="col-md-5">
		   				<div class="input-group mb-3">
						  <input type="text" class="form-control" placeholder="Enter your email address ..." aria-label="Recipient's username" aria-describedby="basic-addon2">
						  <div class="input-group-append">
						    <span class="input-group-text" id="basic-addon2">Subscribe</span>
						  </div>
						</div>
		   			</div>
		   		</div>
		   		<div class="col-md-12 footer2">
		   			<div class="row">
		   				<div class="col">
		   					<div  class=" a ">
		   						<img src="public/images/footer_logo.png" alt="" >
		   					</div>
		   					<div class="chu">
		   						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum. dignissimos ducimus qui blanditiis praesentium voluptatum dignissimos ducimus qui blanditiis praesentium voluptatum</p>
		   					</div>
		   				</div>
		   				<div class="col">
		   					<h6 class="formcuoi">My Account</h6>
		   					<p class="tongnd">Ask In forum</p>
		   					<p class="tongnd">Help Desk</p>
		   					<p class="tongnd">Payment Method</p>
		   					<p class="tongnd">Promotions</p>
		   					<p class="tongnd">Custom Works</p>
		   					<p class="tongnd">Promotions</p>
		   					<p class="tongnd">Brands</p>
		   				</div>
		   				<div class="col">
		   					<h6 class="formcuoi">Information</h6>
		   					<p class="tongnd">About Us</p> 
		   					<p class="tongnd">Careers</p>
		   					<p class="tongnd">Delivery Inforamtion</p>
		   					<p class="tongnd">Privacy Policy</p>
		   					<p class="tongnd">Terms & Condition</p>
		   					<p class="tongnd">Brands</p>
		   				</div>
		   				<div class="col">
		   					<h6 class="formcuoi">Contact Us</h6>
		   					<div class="diadiem flex">
		   						<i class="fa fa-map-marker" aria-hidden="true"></i>
		   						<p class="tongnd">Megnor Computer Private Limited, 507-Union Trade Centre, Ring Road, Surat, India.</p>
		   					</div>
		   					<div class="phone flex">
		   						<i class="fa fa-phone" aria-hidden="true"></i>
		   						<p class="tongnd">Phone No:- (91)-261 3023333</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   		<div class="col-md-12 footer3 flex ">
		   			<div class="col-md-3 ">
		   				<img src="public/images/visa1.png" class="anhvisa" alt="">
		   				<img src="public/images/visa2.png"class="anhvisa" alt="">
		   				<img src="public/images/visa3.png"class="anhvisa" alt="">
		   				<img src="public/images/visa4.png" class="anhvisa"alt="">
		   			</div>
		   			<div class="col-md-7 giuacuoi">
		   				<div class="thongtin flex ">
		   				<div><span class="one">Site Map</span></div>
		   				<div><span class="one">Search Terms</span></div>
		   				<div><span class="one">Advanced Search</span></div>
		   				<div><span class="one">Orders and Returns </span></div>
		   				<div><span class="">Contact Us</span></div>
		   				</div>
		   				<div class="cuoicung text-center">
		   					<span>© 2014 Magento Demo Store. All Rights Reserved.</span>
		   				</div>		   				
		   			</div>
		   			<div class="col-md-2 flex ">
		   				<div class="mangxh"><i class="fa fa-facebook" aria-hidden="true"></i></div>
		   				<div class="mangxh"><i class="fa fa-twitter" aria-hidden="true"></i></div>
		   				<div class="mangxh"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
		   				<div class="mangxh"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
		   			</div>
		   		</div>

		   	</div>
		</div>
	</div>

</body>
</html>