<?php

class tawar extends controller
{
    public function index()
    {
        //menampilkan sebuah halaman daftar penawaran
        $this->tampilkan_view("f_tawar/v_daftar_tawar_120");
    }

    public function input()
    {
        //menampilkan sebuah halaman input penawaran
        $this->tampilkan_view("f_tawar/v_input_tawar_120");
    }

    public function tampil()
    {
        //menampilkan sebuah halaman tampil penawaran
        $this->tampilkan_view("f_tawar/v_tampil_tawar_120");
    }

    public function edit()
    {
        //menampilkan sebuah halaman edit penawaran
        $this->tampilkan_view("f_tawar/v_edit_tawar_120");
    }

    public function hapus()
    {
        //menampilkan sebuah halaman hapus penawaran
        $this->tampilkan_view("f_tawar/v_hapus_tawar_120");
    }
}
