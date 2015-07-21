<?php
class Register extends CI_Model
{
      var $id; //
      var $Username; //ชื่อผู้ใช้งาน
      var $Password; //รหัส
      var $Name; //ชื่อ
      var $Lastname; //นามสกุล
    	function __construct()
    	{
        $this->load->database();
    		parent::__construct();
    	}
      ####################GET:SET############################
      public function setId($id)
      {
        $this->id = $id;
      }

      public function getId()
      {
        return $this->id;
      }
      public function setUsername($Username)
      {
        $this->Username = $Username;
      }

      public function getUsername()
      {
        return $this->Username;
      }
      public function setPassword($Password)
      {
        $this->Password = $Password;
      }

      public function getPassword()
      {
        return $this->Password;
      }
      public function setName($Name)
    	{
    		$this->Name = $Name;
    	}

    	public function getName()
    	{
    		return $this->Name;
    	}
      public function setLastname($Lastname)
    	{
    		$this->Lastname = $Lastname;
    	}

    	public function getLastname()
    	{
    		return $this->Lastname;
    	}
      ###################################### findByPk ######################################

      	function findByPk($pk)
      	{
      		$query=$this->db->query
      			('
      				SELECT id,Username,Password,Name,Lastname FROM shcools WHERE id = "'. $pk .'"
      			');

      		return $query->row_array();
      	}
      ###################################### add ######################################
      	public function add()
      	{
      		$array = array
      		(
      			'Username'  => $this->getUsername(),
      			'Password'=>$this->getPassWord(),
      			'Name'=>$this->getName(),
      			'Lastname'=>$this->getLastname()
      		);

      		$this->db->insert('shcools', $array);

      		return $this->db->insert_id();
      	}
      ######################## function login #############################
        public function CheackLogin()
        {
          $spl=sprintf('SELECT id FROM shcools WHERE Username="%s" AND Password="%s"',
          $this->getUsername(),
          $this->getPassword(),
          $this->getName(),
          $this->getLastname());
          $query=$this->db->query($spl);

          return $query->num_rows();
        }
      ######################## function login #############################
        public function login()
         {
           $this -> db -> select('*');
           $this -> db -> from('shcools');
           $this -> db -> where('Username', $this->getUserName());
           $this -> db -> where('Password', $this->getPassWord());
           $this -> db -> limit(1);

           $query = $this -> db -> get();

           if($query -> num_rows() == 1)
           {
             return $query->result();
           }
           else
              return FALSE;

         }

      	 ######################## end function login #############################

}
?>
