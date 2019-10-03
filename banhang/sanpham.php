<?php
include_once 'banhangol.php';
    class sanpham extends DB_banhang {
        private $maSP = '';
        private $tenSP='';
        private $hinhanhSP='';
        private $motaSP='';
        private $noidungSP='';
        private $ngaynhapSP='';
        private $hansdSP='';
        private $noisxSP='';
        private $giabanSP='';
        private $gianhapSP='';
        private $giakmSP='';
        private $urlSP='';
        private $nguoitaoSP='';
        private $ngaytaoSP='';
        private $nguoisuaSP='';
        private $ngaysuaSP='';
        public function getsanPham()
        {
            $sql = 'select * from sp ';
            return $this->__conn->query($sql);
        }

        public function getsanPhamDM($maDMSP, $limit)
        {
            $sql = 'select * from sp where maDMSP = '. $maDMSP . ' limit '.$limit;
            return $this->__conn->query($sql);
        }

        public function getsanPhamLM($limit)
        {
            $sql = 'select * from sp ORDER BY maSP limit '.$limit;
            return $this->__conn->query($sql);
        }
        
        public function setMaSP( $maSP)
        {
            $this->maSP = $maSP;
        }
        public function setTenSP($tenSP)
        {
            $this->tenSP = $tenSP;
        }
        public function setHinhanhSP($hinhanhSP)
        {
            $this->hinhanhSP = $hinhanhSP;

        }
        public function setMotaSP($motaSP)
        {
            $this->motaSP = $motaSP;
        }
        public function setNoidungSP($noidungSP)
        {
            $this->noidungSP = $noidungSP;
        }
        public function setNgaynhapSP($ngaynhapSP)
        {
            $this->ngaynhapSP = $ngaynhapSP;
        }
        public function setHansdSP($hansdSP)
        {
            $this->hansdSP = $hansdSP;
        }
        public function setNoisxSP($noisxSP)
        {
            $this->noisxSP = $noisxSP;
        }
        public function setGiabanSP($giabanSP)
        {
            $this->giabanSP = $giabanSP;
        }
        public function setGianhapSP($gianhapSP)
        {
            $this->gianhapSP = $gianhapSP;
        }
        public function setGiaKMSP($giakmSP)
        {
            $this->giakmSP = $giakmSP;
        }
        public function setUrlSP($urlSP)
        {
            $this->urlSP = $urlSP;
        }
        public function setnguoitaoSP($nguoitaoSP)
        {
            $this->nguoitaoSP=$nguoitaoSP;
        }
        public function setNgaytaoSP($setNgaytaoSP)
        {
            $this->ngaytaoSP = $setNgaytaoSP;
        }
        public function setNguoisuaSP($nguoisuaSP)
        {
            $this->nguoisuaSP = $nguoisuaSP;
        }
        public function setNgaysuaSP($ngaysuaSP)
        {
            $this->setNgaysuaSP = $ngaysuaSP;
        }
    }
?>
