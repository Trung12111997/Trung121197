<?php 
include_once  'banhangol.php';
	/**
	 * 
	 */
	class slider extends DB_banhang 
	{  
		private $maslider='';
		private $tenslider='';
		private $tieudeSL='';
		private $hinhanhSL='';
		private $nguoitaoSL='';
		private $ngaytaoSL='';
		private $nguoisuaSL='';
		private $ngaysuaSL='';
		
		public  function getslider()
		{
			$sql = 'select * from slider';
         	 return $this->__conn->query($sql);
		}
		public function setmaslider($maslider)
		{
			$this->maslider=$maslider;
		}
		public function settenslider($tenslider)
		{
			$this->tenslider=$tenslider;
		}
		public function settieudeSL($tieudeSL)
		{
			$this->tieudeSL=$tieudeSL;
		}
		public function sethinhanhSL($hinhanhSL)
		{
			$this->hinhanhSL=$hinhanhSL;
		}
	}
 ?>