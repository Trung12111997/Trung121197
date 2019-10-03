<?php 
	require 'banhangol.php';
	// $danhmucmn = new DB_banhang();
	// if(isset($_POST['tenDMMN'])){
	// 	$danhmucmn->insert('dmmn', array(
	// 	    'tenDMMN' => $_POST['tenDMMN']
	// 	));
	// 	echo 'Thêm thành công';
	// 	exit();
	// }
	$danhmucsp= new DB_banhang();

	//// chờ lệnh post insett để thêm 
	if(isset($_POST['luu'])){
		$danhmucsp->insert('dmsp', array(
		    'tenDMSP' => $_POST['tenDMSP']
		));
	}

	///// khi ấn sửa thì đổ lại các thông tin vào ô input để người dùng sửa lại
	if(isset($_POST['sua'])){
		$danhmuc = $danhmucsp->get_row('dmsp','maDMSP', $_POST['sua']);
	
	}

	//////khi ấn edit thì thực hiện update
	if(isset($_POST['edit'])){
		// print_r(array('tenDMSP' => $_POST['tenDMSP']));
		// exit();
		$danhmucsp->update(
			'dmsp',
			array('tenDMSP' => $_POST['tenDMSP']),
			'maDMSP',
			$_POST['edit']);
	
	}

	/// sẽ có 1 số cái k xóa đc vì dữ liệu đã liên kết vs bảng khác rooig......................... xong r đó
	if(isset($_POST['xoa'])){
		$danhmuc = $danhmucsp->remove('dmsp','maDMSP', $_POST['xoa']);
	
	}

	///// muốn update đc thì phải biết mã là gì xong where theo mã, thì mình sẽ đổ ra
	///// lấy ds các menu//// Hàm get_list này truyền vào là câu lệnh truy vấn, sẽ nhận đc 1 mảng ds 
	$listdanhmuc = $danhmucsp->get_list('select * from dmsp');
	


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action="" method="POST">
 		<?php if(isset($danhmuc)){ ?>
 			<!-- khi có post sửa thì đổ lại dữ liệu -->
	 		<input type="text" name="tenDMSP" value="<?= $danhmuc['tenDMSP'] ?>">
	 		<button type="submit" name="edit" value="<?= $danhmuc['maDMSP'] ?>">Lưu</button>
 		<?php }else{ ?>
 			<input type="text" name="tenDMSP" >
	 		<button type="submit" name="luu" value="luu">Lưu</button>
 		<?php } ?>
		<div style="margin-top: 20px">
			<table>
				<thead>
					<tr>
						<th>STT</th>
						<th>Mã</th>
						<th>Tên danh mục</th>
						<th>Tác vụ</th>
					</tr>
				</thead>
				<tbody>
					<!-- /////  dùng for để đổ ra mảng ds , hàm count để đếm số lượng phần tử của mảng-->
					<?php for ($i=0; $i < count($listdanhmuc); $i++) { 
					 ?>
					<tr>
						<td><?=$i+1 ?></td>
						<td><?= $listdanhmuc[$i]['maDMSP'] ?></td>
						<td><?= $listdanhmuc[$i]['tenDMSP'] ?></td>
						<td>
							<!-- ///////mình để value bằng mã thì khi post lên sẽ có mã của danhmucj để truy vấn -->
							<button type="submit" name="sua" value="<?= $listdanhmuc[$i]['maDMSP'] ?>">Sửa</button>
							<button type="submit" name="xoa" value="<?= $listdanhmuc[$i]['maDMSP'] ?>">Xóa</button>
						</td>
					</tr>
				   <?php } ?>
				</tbody>
			</table>
		</div>
 	</form>
 </body>
 </html>

 <style>
 	table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
  padding: 10px;
}
 </style>