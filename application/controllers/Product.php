<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function kelompok()
    {
        $data = array(
            "title"     => NAMETITLE . " - Product",
            "content"   => "admin/pages/product/kelompok",
            "titlehead"     => "Product / Daftar Kelompok",
            "show_produk"   => "show",
            "mn_produk1"   => "active",
            "private_js"   => "admin/pages/product/js/kelompok_js",
        );

        $this->load->view('admin/wrapper', $data);
    }

    public function addkelompok()
    {
        echo $_POST['name'] . '<br>';
        die;
    }

    public function kategori()
    {
        $data = array(
            "title"     => NAMETITLE . " - Product",
            "content"   => "admin/pages/product/kategori",
            "titlehead"     => "Product / Daftar Kategori",
            "show_produk"   => "show",
            "mn_produk2"   => "active",
            "private_js"   => "admin/pages/product/js/kategori_js",
        );

        $this->load->view('admin/wrapper', $data);
    }

    public function addkategori()
    {
        echo $_POST['outlet'] . '<br>';
        echo $_POST['name'] . '<br>';
        echo $_POST['kelompok'] . '<br>';
        echo @$_POST['show'] . '<br>';

        die;
    }

    public function varian()
    {
        $data = array(
            "title"     => NAMETITLE . " - Product",
            "content"   => "admin/pages/product/varian",
            "titlehead"     => "Product / Daftar Varian",
            "show_produk"   => "show",
            "mn_produk4"   => "active",
            "private_js"   => "admin/pages/product/js/varian_js",
        );

        $this->load->view('admin/wrapper', $data);
    }

    public function addvarian()
    {
        echo $_POST['name'] . '<br>';

        $locations = $_POST['addSubForm'];

        foreach ($locations as $key => $subValue) {
            echo $subValue['sub'] . '<br>';
        }

        // print_r($locations);

        die;
    }

    public function produk()
    {
        $data = array(
            "title"     => NAMETITLE . " - Product",
            "content"   => "admin/pages/product/produk",
            "titlehead"     => "Product / Daftar Produk",
            "show_produk"   => "show",
            "mn_produk3"   => "active",
            "private_js"   => "admin/pages/product/js/index",
        );

        $this->load->view('admin/wrapper', $data);
    }

    public function addproduk()
    {
        $data = array(
            "title"     => NAMETITLE . " - Product",
            "content"   => "admin/pages/product/produk-add-step-1",
            "titlehead"     => "Product / Tambah Produk",
            "show_produk"   => "show",
            "mn_produk3"   => "active",
            "private_js"   => "admin/pages/product/js/index",
        );

        $this->load->view('admin/wrapper', $data);
    }

    public function addprodukstep2()
    {
        $data = array(
            "title"     => NAMETITLE . " - Product",
            "content"   => "admin/pages/product/produk-add-step-2",
            "titlehead"     => "Product / Tambah Produk",
            "show_produk"   => "show",
            "mn_produk3"   => "active",
            "private_js"   => "admin/pages/product/js/index",
        );

        $this->load->view('admin/wrapper', $data);
    }

    public function addprodukstep3()
    {
        $data = array(
            "title"     => NAMETITLE . " - Product",
            "content"   => "admin/pages/product/produk-add-step-3",
            "titlehead"     => "Product / Tambah Produk",
            "show_produk"   => "show",
            "mn_produk3"   => "active",
            "private_js"   => "admin/pages/product/js/index",
        );

        $this->load->view('admin/wrapper', $data);
    }

    public function addprodukstep_summary()
    {
        $data = array(
            "title"     => NAMETITLE . " - Product",
            "content"   => "admin/pages/product/produk-add-step-final",
            "titlehead"     => "Product / Tambah Produk",
            "show_produk"   => "show",
            "mn_produk3"   => "active",
            "private_js"   => "admin/pages/product/js/index",
        );

        $this->load->view('admin/wrapper', $data);
    }
}
