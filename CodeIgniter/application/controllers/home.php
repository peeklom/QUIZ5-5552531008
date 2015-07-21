<?php
class Home extends CI_Controller
{
  public function Logout()
  {
    $this->load->helper('url');
    
  

    setcookie('username','',time()-3600,'/');
    setcookie('password','',time()-3600,'/');
    redirect(base_url('index.php/home'));
  }
  public function index()
  {
    $this->load->helper('url');


    if(isset($_COOKIE['Username']) && isset($_COOKIE['Password']))
    {
      $this->load->model('register');
      $this->register->setUsername($_COOKIE['Username']);
      $this->register->setPassword($_COOKIE['Password']);

      if($this->register->CheackLogin())
      {
          redirect(base_url('index.php/Addmember'));

      }
    }

    if($this->input->post())
    {

      $this->load->model('register');
      $this->register->setUsername($this->input->post('Username'));
      $this->register->setPassword($this->input->post('Password'));

      if ($this->register->CheackLogin())
      {
        
        setcookie('Username',$this->input->post('Username'),(time()+3600),'/');
        setcookie('Password',$this->input->post('Password'),(time()+3600),'/');
        redirect(base_url('index.php/memberzone'));

      }
      else
      {
        
      }
    }

    $this->load->view('show_login');
   // $this->load->model('show_home');



  }
}

?>
