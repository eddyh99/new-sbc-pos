<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data = array(
            "title"     => NAMETITLE . " - Dashboard",
            "titlehead"     => "Dashboard",
            "content"   => "admin/pages/index",
            "mn_home"   => "active",
        );

        $this->load->view('admin/wrapper', $data);
    }
}
