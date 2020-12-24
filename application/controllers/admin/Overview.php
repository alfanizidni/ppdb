<?php

class Overview extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // $this->cek_login();
    }

    public function index()
    {
        //load view admin/overview.php
        $this->load->view("admin/overview");
    }

    public function prosedur()
    {
        $this->load->view('admin/prosedur');
    }
}