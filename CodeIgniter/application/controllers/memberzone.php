<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MemberZone extends CI_Controller
{
  public function index()
  {
    $this->load->helper('url');
    

    if(isset($_COOKIE['Username'])&& isset($_COOKIE['Password']))
    {
      $this->load->model('register');
      $this->register->setUsername($_COOKIE['Username']);
      $this->register->setPassword($_COOKIE['Password']);

      if(!$this->register->CheackLogin())
      {
          redirect(base_url('index.php/addmember'));

      }
       
    }
      $this->load->view('show_home');

  }
}
?>
