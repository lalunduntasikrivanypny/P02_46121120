<?php

class kirim extends controller
{
    public function index()
    {
        //menampilkan sebuah halaman kosong
        $this->tampilkan_view("f_kirim/v_daftar_kirim_120");
    }

    public function input()
    {
        //menampilkan sebuah halaman kosong
        $this->tampilkan_view("f_kirim/v_input_kirim_120");
    }

    public function tampil()
    {
        //menampilkan sebuah halaman kosong
        $this->tampilkan_view("f_kirim/v_tampil_kirim_120");
    }

    public function edit()
    {
        //menampilkan sebuah halaman kosong
        $this->tampilkan_view("f_kirim/v_edit_kirim_120");
    }

    public function hapus()
    {
        //menampilkan sebuah halaman kosong
        $this->tampilkan_view("f_kirim/v_hapus_kirim_120");
    }
}
