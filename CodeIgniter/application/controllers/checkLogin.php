<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class CheckLogin extends CI_Controller
{
   function __construct()
   {
    $this->load->helper('url');
     parent::__construct();
   }

   public function index()
   {
     $this->load->helper('url');

     if(isset($_COOKIE['Username']) && isset($_COOKIE['Password']))
     {
       $this->load->model('register');
       $this->User->setUsername($_COOKIE['Username']);
       $this->User->setPassword($_COOKIE['Password']);

       if($this->User->CheackLogin())
       {
           redirect(base_url('index.php/show_home'));

       }
     }

     if($this->input->post())
     {
       $this->load->model('register');
       $this->User->setUsername($this->input->post('Username'));
       $this->User->setPassword($this->input->post('Password'));

       if($this->User->CheackLogin())
       {
         setcookie('Username',$this->input->post('Username'),(time()+3600),'/');
         setcookie('Password',$this->input->post('Password'),(time()+3600),'/');
         redirect(base_url('index.php/show_home'));

       }
       else
       {
         echo'fail';
       }
     }

     $this->load->view('show_login');
   }
 }
}

?>
