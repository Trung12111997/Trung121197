<?php 
include_once  'banhangol.php';
	/**
	 * 
	 */
	class tintuc extends DB_banhang 
	{	
		private $maTT='';
		private $tenTT='';
		private $urlTT='';
		private $ngaydangTT='';
		private $tieudeTT='';
		private $motaTT='';
		private $hinhanhTT='';
		private $noidungTT='';
		private $tacgia='';
		private $nguoitao='';
		private $ngaytao='';
		private $nguoisua='';
		private $ngaysua='';
		
		public function gettintuc($maDMTT) 
		{ 
			$sql = 'select * from tt where maDMTT = '.$maDMTT;
			 return $this->__conn->query($sql);

		}
		public function setmaTT($maTT)
		{
			$this->maTT=$maTT;

		}
		public function settenTT($tenTT)
		{
			$this->tenTT=$tenTT;
		}
		public function seturlTT($urlTT)
		{
			$this->urlTT=$urlTT;
		}
		public function setngaydangTT($ngaydangTT)
		{
			$this->ngaydangTT=$ngaydangTT;
		}
		public function settieudeTT($tieudeTT)
		{
			$this->tieudeTT=$tieudeTT;
		}
		public function setmotaTT($motaTT)
		{
			$this->motaTT= $motaTT;
		}
		public function sethinhanhTT($hinhanhTT)
		{
			$this->hinhanhTT=$hinhanhTT;
		}
		public function setnoidungTT($noidungTT)
		{
			$this->noidungTT=$noidungTT;
		}
		public function settacgia($tacgia)
		{
			$this->tacgia=$tacgia;
		}
		public function setnguoitao($nguoitao)
		{
			$this->nguoitao=$nguoitao;
		}
		public function setngaytao($ngaytao)
		{
			$this->ngaytao=$ngaytao;
		}
		public function setngaysua($ngaysua)
		{
			$this->ngaysua=$ngaysua;
		}
		public function setnguoisua($nguoisua)
		{
			$this->nguoisua=$nguoisua;
		}
	}
 ?>