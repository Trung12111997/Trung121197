<?php 
	/**
	 * 
	 */
	// class index1 extends DB_banhang
	// {
	// 	getSanpham();
	// 	public function getSanpham()
		// {
			require 'sanpham.php';
			$sanpham = new sanpham();
			$sanpham->connect();
			// lấy ra đc sp rồi đấy, tự làm tiếp đi, tự đổ ra, ví dụ
			$dssp = $sanpham->getsanPham();
		// }
		
	// }


 ?>
  <?php while($row=$dssp->fetch_assoc()){ ?>
	<div class="col-md-4" style="margin-top: 30px;">
		<div class="card text-center" style="width: 10%;">
		  <img src="<?=$row['hinhanhSP'] ?> " class="card-img-top" alt="..." width="80%">
		  <div class="card-body">
		    <h5 class="card-title" style="color: #b3b3b3;"><?=$row['tenSP'] ?> </h5>
		    <a href="#" class="btn btn-outline-default">Add to Cart</a>
		  </div>
		</div>
	</div>
	<?php } ?>