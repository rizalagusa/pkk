<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function index()
    {
        $data['content']='v_product';
        $this->load->view('template', $data);
    }
}