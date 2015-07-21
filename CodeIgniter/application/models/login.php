<?php
class Login extends CI_Model
{
  var $Username ;
  var $Password ;
  function __construct()
	{
    $this->load->database();
		parent::__construct();
	}

###################################### GET SET ######################################
    public function setUsername($Username){
        $this->Username = $Username;
     }
    public function getUsername(){
        return $this->Username;
     }
    public function setPassword($Password){
        $this->Password = $Password;
     }
    public function getPassword(){
        return $this->Password;
     }
######################## function login #############################
function login()
 {
   $this -> db -> select('*');
   $this -> db -> from('registers');
   $this -> db -> where('Username', $this->getUsername());
   $this -> db -> where('Password',($this->getPassword()));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
		  return FALSE;  

   }
 }
 ######################## end function login #############################


}
?>
