<?php
if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;
$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];
$members = [
        'ngjang'=>['pw'=>'dbwkck001!', 'name'=>'NUGA']
]; 
if(!$user_id) {
        echo "<script>alert('아이디를 입력하세요.');history.back();</script>";
        exit;
}
if(!$user_pw) {
        echo "<script>alert('비밀번호를 입력하세요.');history.back();</script>";
        exit;
}
if(!isset($members[$user_id])) {
        echo "<script>alert('존재하지 않는 아이디입니다.');history.back();</script>";
        exit;
}
if($members[$user_id]['pw'] != $user_pw) {
        echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.');history.back();</script>";
        exit;
}
session_start();
$_SESSION['user_id'] = $user_id;
$_SESSION['user_name'] = $members[$user_id]['name'];
?>
<meta http-equiv='refresh' content='0;url=/'>