<?php

class barang extends controller
{
    public function index()
    {
       $this->tampilkan_view("f_barang/v_daftar_barang_120");
    }

     public function input()
     {
        $this->tampilkan_view("f_barang/v_input_barang_120");
     }

     public function tampil()
     {
         $this->tampilkan_view("f_barang/v_tampil_barang_120");
     }

     public function edit()
     {
         $this->tampilkan_view("f_barang/v_edit_barang_120");
     }

     public function hapus()
     {
         $this->tampilkan_view("f_barang/v_hapus_barang_120");
     }
}
