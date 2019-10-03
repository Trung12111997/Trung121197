<?php
 /**
  * 
  */
 class banner
 {
 	private $mabanner='';
 	private $tenbanner='';
 	private $hinhanhBN=''; cvf  
 	private $ngaytao='';
 	private $nguoisua='';
 	private $ngaysua='';
 	 public function getbanner()
 	{
 		 return $this->mabanner . ' - ' . $this->tenbanner .' - '. $this->hinhanhBN .' - ' . $this->nguoitao .' - ' . $this->ngaytao .' - ' . $this->nguoisua .' - ' . $this->ngaysua;
 	}
 	public function setmabanner($mabanner)
 	{
 		$this->mabanner=$mabanner;
 	}
 	public function settenbanner($tenbanner)
 	{
 		$this->tenbanner=$tenbanner;
 	}
 	public function sethinhanhBN($hinhanhBN)
 	{
 		$this->hinhanhBN=$hinhanhBN;
 	}
 	public function setnguoitao($nguoitao)
 	{
 		$this->nguoitao=$nguoitao;
 	}
 	public function setnguoisua($nguoisua)
 	{
 		$this->nguoisua=$nguoisua;
 	}
 	public function setngaysua($ngaysua)
 	{
 		$this->ngaysua=$ngaysua;
 	}
 }
?>