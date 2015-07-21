<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>สมัครสมาชิก</title>
	<link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
	<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('js/jquery-1.11.3.min.js');?>""></script>
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">PEEKLOM</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url('index.php/memberzone');?>">เข้าสู่ระบบ</a></li>
          </ul>
        </li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url('index.php/logout');?>">logout</a></li>
        </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php echo validation_errors(); ?>
 <div class="row col-md-12">
 			<div class="container">
			<form class="form-horizontal" method="post" action="<?php echo base_url('index.php/Addmember');?>"
			<div class="form-group">
        <br style="clear:both">
              <h1 style="margin-bottom: 25px; text-align: center;">สมัครสมาชิก</h1>

							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">ชื่อ:</label>
									<div class="col-sm-8">
										<input type="Name" name="Name" class="form-control" id="inputEmail3" placeholder="Name">
									</div>
							</div>

							<div class="form-group">
	              <label for="inputEmail3" class="col-sm-2 control-label">นามสกุล:</label>
	                <div class="col-sm-8">
	                  <input type="Lastname" name="Lastname" class="form-control" id="inputEmail3" placeholder="Lastname">
	                </div>
	            </div>

				<div class="form-group">
	              <label for="inputEmail3" class="col-sm-2 control-label">ชื่อผู้ใช้งาน:</label>
	                <div class="col-sm-8">
	                  <input type="Username" name="Username" class="form-control" id="inputEmail3" placeholder="Username">
	                </div>
	            </div>

							<div class="form-group">
	              <label for="inputEmail3" class="col-sm-2 control-label">รหัสผ่าน:</label>
	                <div class="col-sm-8">
	                  <input type="Password" name="Password" class="form-control" id="inputEmail3" placeholder="Password">
	                </div>
	            </div>

							<div class="form-group">
							 <div class="col-sm-offset-2 col-sm-10">
								 <button type="submit" class="btn btn-default">Sign in</button>
							 </div>
						 </div>


      </form>
    	</div>
			</div>
</div>
</body>
</html>
