
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>ยินดีต้อนรับ</title>
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

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
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


  <body>
    <div class="row col-md-12">
      <div class="container">
      	<form class="form-horizontal" method="post" action="<?php echo base_url('index.php/Home');?>"
        <div class="form-group">
          <h2 class="form-signin-heading">ยินดีต้อนรับเข้าสู่ระบบ</h2>

            <?php
            echo "Hello User:".$_COOKIE['Username'];
            ?>


				</form>

      </div>
    </div>
      <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
