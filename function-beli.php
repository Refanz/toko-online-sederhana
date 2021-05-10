<?php

    class makanan{

        private $nama_makanan;
        private $harga_makanan;
        private $jumlah_beli;

        public function setNamaMakanan($nm){

            $this->nama_makanan = $nm;

        }
        public function setHargaMakanan($hm){

            $this->harga_makanan = $hm;

        }
        public function setJumlahBeli($jb){

            $this->jumlah_beli = $jb;

        }

        public function getNamaMakanan(){

            return $this->nama_makanan;
        }

        public function getHargaMakanan(){

            return $this->harga_makanan;


        }

        public function getJumlahBeli(){

            return $this->jumlah_beli;


        }

    }


    class beli{

        private $nama_makanan;
        private $harga_makanan;
        private $jumlah_beli;
        private $nama_pembeli;
        private $alamat_rumah;

        public function __construct($nm,$hm,$jb,$np,$ar){

            $this->nama_makanan = $nm;
            $this->harga_makanan = $hm;
            $this->jumlah_beli = $jb;
            $this->nama_pembeli = $np;
            $this->alamat_rumah = $ar;


        }

        public function getNamaMakanan(){

            return $this->nama_makanan;


        }

        public function getHargaMakanan(){

            return $this->harga_makanan;
        }

        public function getJumlahBeli(){

            return $this->jumlah_beli;
        }

        public function getNamaPembeli(){

            return $this->nama_pembeli;
        }

        public function getAlamatRumah(){

            return $this->alamat_rumah;
        }

  

    }



?>