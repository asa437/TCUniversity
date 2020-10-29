<?php
include_once "../base220.php";

if(!empty($_POST['acc']) && !empty($_POST['pw'])){
    $chk=$Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
    if($chk>0){
        $_SESSION['login']=$_POST['acc'];
        to('../admin.php');
    }else{
        echo "<script>alert('帳號或密碼錯誤')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../plugins/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="../plugins/custom.css">
    <!-- 字型在css -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Open+Sans@1&display=swap"
      rel="stylesheet">
    <script src="https://kit.fontawesome.com/145a02c86c.js" crossorigin="anonymous"></script>
    <script src="../plugins/jquery-3.5.1.min.js"></script>
    <script src="../plugins/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="d-flex justify-content-center">
  <!-- <a href="../index.php"> <span class="btn btn-info h3 float-right m-3" > 回首頁 </span></a> -->
  <a href="../customer.php"> <span class="btn btn-info h3 float-right m-3" > 訪客登入 </span></a>
</div>

    <div class=" container py-1 ">
      <h1 class="text-center AsaWord font-weight-bold py-3">登入頁面</h1>
      <form class="w-75 mx-auto " method="post" action="login.php" id="LOG">
        <div class="card  mx-auto " style="max-width: 400px;">
          <img src="http://220.128.133.15/s1090208/Bootstrap-Resume/login/heaven-3676393_1920.jpg" class="card-img-top">
            <a href="../index.php"> <span class="float-left m-1 h6" style="font-weight:bold" > 回首頁 </span></a>
          <div class="form-row card-body">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Account</label>
              <input type="Account" name="acc" class="form-control" id="inputEmail4" placeholder="請輸入帳號">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Password</label>
              <input type="password" name="pw" class="form-control" id="inputPassword4" placeholder="請輸入密碼">
            </div>
            <div class="d-flex justify-content-between align-items-center   flex-column w-100" style="height:100px;">
              <button type="submit" class="btn btn-primary" style="width:150px;">Sign in</button>
              <button type="reset" class="btn btn-primary" style="width:150px;">reset</button>
            </div>
          </div>
        </div>
      </form>



</body>
</html>