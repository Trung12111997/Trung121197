<?php 
include_once  'banhangol.php';
	/**
	 * 
	 */
	class danhmucMN extends DB_banhang 
	{
		private $maDMMN = '';
		private $tenDMMN='';
		
		public function getdanhmucMN()
		{
			$sql = 'select * from dmmn';
			return $this->__conn->query($sql);
		}
		public function setmaDMMN($maDMMN)
		{
			$this->maDMMN=$maDMMN;
		}
		public function settenDMMN($tenDMMN)
		{
			$this->tenDMMN=$tenDMMN;
		}
		
	}
 ?>