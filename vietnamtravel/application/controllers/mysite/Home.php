<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
        // Gọi đến hàm khởi tạo của cha
        parent::__construct();
    }

	/**
	 * Funciton index call my home page
	 */
	public function index()
	{
		$this->load->view('mysite/home_view');
	}
}
