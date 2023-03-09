
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>โอนเงิน</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link href="css/cite.css" rel="stylesheet">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Add jQuery library -->
<script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>โอนเงิน</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <!-- <link href="css/styles.css" rel="stylesheet" /> -->

  <link href="../css/styles.css" rel="stylesheet" />
  <link href="../css/css.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
  <script type="text/javascript"
    src="https://platform-api.sharethis.com/js/sharethis.js#property=6146da0840d29100191b272f&product=inline-share-buttons"
    async="async"></script>

</head>
<body>

  <!-- Responsive navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">

        <a class="navbar-brand " href="../index0.php"><i class="fas fa-angle-left"></i> โอนเงิน</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>

      </div>
    </div>
  </nav>

  <br/>


<div class="col-md-8">
	<form name="frmadd"  method="post" action="../Bank/controller/con_money.php" enctype="multipart/form-data">
		
		

    <!-- <input type="hidden" id="cs_year" name="cs_year" value="2566"> ปีปัจจุบันเท่านั้น ต้องมาเปลี่ยนตัวเลขปีทุกปี -->
    <!-- <input type="list" id="cs_year" name="cs_year">  -->


  <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">บัญชี</label>
      <div class="col-sm-10">
        <input type="text" name="cs_name" class="form-control" id="cs_name" placeholder="กรอกเลขบัญชี">
      </div>
  </div>

  <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">จำนวนเงิน</label>
      <div class="col-sm-10">
        <input type="text" name="cs_name" class="form-control" id="cs_img" placeholder="กรอกจำนวนเงิน">
      </div>
  </div>

  <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">ชื่อ</label>
      <div class="col-sm-10">
        <input type="text" name="cs_name" class="form-control" id="cs_name" placeholder="กรอกชื่อ">
      </div>
  </div>

  <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">นามสกุล</label>
      <div class="col-sm-10">
        <input type="text" name="cs_name" class="form-control" id="cs_img" placeholder="กรอกนามสกุล">
      </div>
  </div>

  <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">ที่อยู่</label>
      <div class="col-sm-10">
        <input type="text" name="cs_name" class="form-control" id="cs_name" placeholder="กรอกที่อยู่">
      </div>
  </div>


  

  <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
    <button type="submit" class="btn btn-secondary btn-block"><i class="fa fa-pencil-square" aria-hidden="true"></i>ยืนยัน</button>    
  </div>

</div>


	</form>



 
</div>


<div class="col-md-2">
</div>
</div>
</div>
</br>
</br>
</br>




</body>
</html>