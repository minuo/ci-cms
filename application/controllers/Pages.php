<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('slice');
    }

    public function index()
    {
        $this->slice->view('admin.dashboard.pages');
    }

}
