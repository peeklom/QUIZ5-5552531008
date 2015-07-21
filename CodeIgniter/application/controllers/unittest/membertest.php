<?php

class MemberTest extends CI_Controller
{
	public function index()
	{
		$memberId = 0;

		$this->load->library('unit_test');

		$this->load->model('Register');

		#######################add##################################
		$this->Register->setUserName('peeklom');
		$this->Register->setPassWord('peeklom128');
		$this->Register->setName('wijittra');
		$this->Register->setLastname('peeklom');

		$test=$this->Register->add();
		$memberId=$test;

		$expected_result='is_int';

		$this->unit->run($test,$expected_result,'UT-01:INSERT TEST ACCOUNT');
		########################Login#################################

		$this->Register->setUserName('peeklom');
		$this->Register->setPassWord('peeklom128');


		$test=$this->Register->Login();
		$expected_result=true;

		$this->unit->run($test,$expected_result,'UT-02:Login Pass');

		#########################Login################################

		$this->Register->setUserName('123');
		$this->Register->setPassWord('peeklom128');

		$test=$this->Register->Login();
		$expected_result=false;

		$this->unit->run($test,$expected_result,'UT-03:Login fail(UserName Not Match)');

		#######################Login##################################

		$this->Register->setUserName('peeklom');
		$this->Register->setPassWord('knn');

		$test=$this->Register->Login();
		$expected_result=false;

		$this->unit->run($test,$expected_result,'UT-04:Login  fail(PassWord Not Match)');


		########################Login#################################

		$this->Register->setUserName('nnnnn');
		$this->Register->setPassWord('dlfskd');

		$test=$this->Register->Login();
		$expected_result=false;
		$this->unit->run($test,$expected_result,'UT-05:Login  fail(UserName and PassWord Not Match)');
		########################report #################################

		$result=$this->Register->findByPk($memberId);

		$test=$result['Name'];
		$expected_result='wijittra';

		$this->unit->run($test,$expected_result,'UT-07: name Change');

		########################report #################################


		$test=$result['Lastname'];
		$expected_result='peeklom';

		$this->unit->run($test,$expected_result,'UT-08:lastname Change');



		echo $this->unit->report();

		###http://localhost/mit/index.php/unittest/membertest



	}
}
?>
