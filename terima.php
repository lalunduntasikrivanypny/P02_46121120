<?php

class terima extends controller
{
    public function index()
    {
        //menampilkan sebuah halaman daftar penerimaan
        $this->tampilkan_view("f_terima/v_daftar_terima_120");
    }

    public function input()
    {
        //menampilkan sebuah halaman input penawaran
        $this->tampilkan_view("f_terima/v_input_terima_120");
    }

    public function tampil()
    {
        //menampilkan sebuah halaman tampil penawaran
        $this->tampilkan_view("f_terima/v_tampil_terima_120");
    }

    public function edit()
    {
        //menampilkan sebuah halaman edit penerimaan
        $this->tampilkan_view("f_terima/v_edit_terima_120");
    }

    public function hapus()
    {
        //menampilkan sebuah halaman hapus penerimaan
        $this->tampilkan_view("f_terima/v_hapus_terima_120");
    }
}
