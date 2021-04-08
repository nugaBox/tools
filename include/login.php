<?php
session_start();
if(isset($_SESSION['user_id'])){
    echo "<script>alert('로그인 상태입니다.');</script>";
    require_once $gs_includeFolder.'template.php';
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="<?=$gs_imagesFolder?>favicon.ico">
<title>DevLabs | nugaBox</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" >
<link rel="stylesheet" href="<?=$gs_cssFolder?>style.css">
</head>
<body>
  <div class="wrap">
    <div class="image">
      <img src="<?=$gs_imagesFolder?>main_background.png" alt="Hombre de negocios" class="image-man" />
    </div>
    <div class="login">
      <img src="<?=$gs_imagesFolder?>nuga_circle.png" alt="Persona" class="login-img" />
      <h1 class="login-title">NUGABOX</h1>
      <h3 class="login-subtitle">DevLabs</h3>
      <form class="login-form" method='post' action='include/loginChk.php'>
        <div class="form-group">
          <label class="form-label" for="username">id</label>
            <input type="text" class="form-input" id="username" name='user_id' />
        </div>
        <div class="form-group">
          <label class="form-label" for="password">password</label>
            <input type="password" class="form-input" id="password" name='user_pw' />
        </div>
        <button type="submit" class="login-submit">LOGIN</button>
        <div class="login-forgot">
          <a href='javascript:void(0);' onclick="alert('저런.... 😔');$.confetti.start();">혹시... 로그인이 안되나요?</a>
        </div>
      </form>
    </div>
  </div>
  <script src="<?=$gs_jsFolder?>jquery.min.js" type="text/javascript" crossorigin="anonymous"></script>
  <script src="<?=$gs_jsFolder?>jquery.confetti.js" type="text/javascript" crossorigin="anonymous"></script>
</body>
</html>