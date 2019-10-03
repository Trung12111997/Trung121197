<?php
	/**
	  * 
	  */
	 class danhmucSP
	 {
	 	private $maDMSP='';
	 	private $tenDMSP='';
	 	
	 	function getdanhmucSP()
	 	{
			return $this->maDMSP . ' - ' . $this->tenDMSP;
		}
		public function setmaDMSP($maDMSP)
		{
			$this->maDMSP=$maDMSP;
		}
		public function settenDMSP($tenDMSP)
		{
			$this->tenDMSP=$tenDMSP;
		}
	 } 
 ?>