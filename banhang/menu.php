<?php
/**
 * 
 */
class menu
{
	private $maMN='';
	private $tenMN='';
	private $linkMN ='';
	public function getmenu()
		{
			return  $this->maMN . ' - ' . $this->tenMN .' - '. $this->linkMN;
		}
	 public function setMN( $maMN)
        {
            $this->maMN = $maMN;
        }
      public function settenMN( $tenMN)
        {
            $this->tenMN = $tenMN;
        }
       public function setlinkMN( $linkMN)
        {
            $this->linkMN = $linkMN;
        }
?>