<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Blog
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Navbar extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view("layout/header");
    $this->load->view("page/blog");
    $this->load->view("layout/footer");
  }

  public function layanan()
  {

  }

  public function singlePost()
  {
    $this->load->view("layout/header");
    $this->load->view("page/singlepost");
    $this->load->view("layout/footer");
  }

  public function about()
  {
    $this->load->view("layout/header");
    $this->load->view("page/about");
    $this->load->view("layout/footer");
  }

  public function kontak()
  {
    $this->load->view("layout/header");
    $this->load->view("page/kontak");
    $this->load->view("layout/footer");
  }

  public function kategori()
  {
    $this->load->view("layout/header");
    $this->load->view("page/kategori.php");
    $this->load->view("layout/footer");
  }
}


/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */