<?php 

include_once  'banhangol.php';
  /**
    * 
    */
   class thuonghieuSP extends DB_banhang 
   {

        public function getthuonghieuSP()
        {
          $sql = 'select * from thuonghieusp ';
          return $this->__conn->query($sql);
        }
   } 
 ?>