<?php
include_once 'banhangol.php';
	/**
	  * 
	  */
	 class danhmucTT extends DB_banhang 
	 {
	 	private $maDMTT='';
	 	private $tenDMTT='';
	 	
	 	function getdanhmucTT()
	 	{
			$sql = 'select * from dmtt ';
            return $this->__conn->query($sql);
		}
		public function setmaDMTT($maDMTT)
		{
			$this->maDMTT=$maDMTT;
		}
		public function settenDMSP($tenDMTT)
		{
			$this->tenDMTT=$tenDMTT;
		}
	 } 
 ?>