<?php
include_once  'banhangol.php';
  /**
    * 
    */
   class chuongtrinhKM extends DB_banhang 
   {
   		private $maKM='';
   		private $tenKM='';
   		private $hinhanhKm='';
   		private $urlKM='';
   		private $chitietCTKM='';
   		private $nguoitao='';
   		private $ngaytao='';
   		private $nguoisua='';
   		private $ngaysua='';

      	public function getCTKM($maKM)
  	   	{
  	   		$sql = 'select * from ctkm where maKM ='.$maKM;
          return $this->__conn->query($sql);
  	   	}
	   	public function setmaKM($maKM)
	   	{
	   		$this->maKM = $maKM;
	   	}
	   	public function setTenKM($tenKM)
        {
            $this->tenKM = $tenKM;
        }
        public function setHinhanhKM($hinhanhKM)
        {
            $this->hinhanhKM = $hinhanhKM;

        }
        public function seturlKM($urlKM)
        {
        	$this->urlKM = $urlKM;
        }
        public function setchitietCTKM($chitietCTKM)
        {
        	$this->nguoitao = $nguoitao;
        }
        public function setngaytao($ngaytao)
        {
        	$this->ngaytao = $ngaytao;
        }
        public function setnguoisua($nguoisua)
        {
        	$this->nguoisua= $nguoisua;
        }
        public function setngaysua($ngaysua)
        {
        	$this->ngaysua= $ngaysua;
        }
   } 
 ?>