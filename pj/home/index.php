<?php
session_start();
print_r($_SESSION); exit;
if(!isset($_SESSION['user_id'])){
    echo "<script>alert('로그인 해주시기 바랍니다');</script>";
    header('Location: /');
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
    <link rel="icon" href="/home/images/favicon.ico">
    <title>Luke's DevLabs</title>

    <!-- CSS -->
    <link href="/home/css/bootstrap.min.css" rel="stylesheet" type="text/css" crossorigin="anonymous">
  	<link href="/home/css/awesome-bootstrap-checkbox.css" rel="stylesheet" type="text/css" crossorigin="anonymous">
  	<link href="/home/css/animate.min.css" rel="stylesheet" type="text/css" crossorigin="anonymous">
  	<link href="/home/css/sweetalert.css" rel="stylesheet" type="text/css" crossorigin="anonymous">
  	<link href="/home/css/toastr.min.css" rel="stylesheet" type="text/css" crossorigin="anonymous">
    <link href="/home/css/siiru.css" rel="stylesheet" type="text/css" crossorigin="anonymous">
    <link href="/home/css/common.css" rel="stylesheet" type="text/css" crossorigin="anonymous">
  	<link href="/home/css/fontawesome.min.css" rel="stylesheet" type="text/css" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>
                Luke's DevLabs <small class="m-hidden"></small>
                <span class="float-right">
                    <i class="fas fa-user-circle"></i>  장누가 <button type="button" id="logout" class="btn btn-sm btn-dark"><i class="fas fa-sign-out-alt"></i> Log out</button>
                </span>
            </h1>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/"><img src="/home/images/J-Logo-Circle-TH.png" width="30" alt="nugaBox"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home/index.php">메인 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">서명 만들기</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:showWorshipList('soo','10')">수영로 주일설교</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:showWorshipList('soo','06')">수영로 금요철야</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="animated fadeIn">
            <div id="content">
                <div class="row" id="worshipListAll">
                    <div class="worshipList" id="soo_10">
                        <h3>수영로 주일설교 리스트</h3>
                        <table class="table worshipTable">
                            <colgroup>
                                <col width="15%">
                                <col width="15%">
                                <col width="25%">
                                <col width="13%">
                                <col width="8%">
                                <col width="24%">
                            </colgroup>
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">날짜</th>
                                    <th scope="col">설교자</th>
                                    <th scope="col">제목</th>
                                    <th scope="col">본문</th>
                                    <th scope="col">상세</th>
                                    <th scope="col">텍스트 복사</th>
                                </tr>
                            </thead>
                            <tbody id="listData_soo_10"></tbody>
                        </table>
                        <a href="#" class="btn btn-warning btn-lg" id="viewAdd" tNum="1"><i class="fas fa-cloud-download-alt"></i> 더보기</a>
                    </div>
                    <div class="worshipList" id="soo_06">
                        <h3>수영로 금요철야 리스트</h3>
                        <table class="table worshipTable">
                          <colgroup>
                            <col width="15%">
                            <col width="15%">
                            <col width="25%">
                            <col width="13%">
                            <col width="8%">
                            <col width="24%">
                          </colgroup>
                          <thead class="thead-light">
                              <tr>
                                  <th scope="col">날짜</th>
                                  <th scope="col">설교자</th>
                                  <th scope="col">제목</th>
                                  <th scope="col">본문</th>
                                  <th scope="col">상세</th>
                                  <th scope="col">텍스트 복사</th>
                              </tr>
                          </thead>
                            <tbody id="listData_soo_06"></tbody>
                        </table>
                        <a href="#" class="btn btn-warning btn-lg" id="viewAdd" tNum="1"><i class="fas fa-cloud-download-alt"></i> 더보기</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-hidden="true">
      		<div class="modal-dialog modal-lg">
      			<div class="modal-content animated bounceInRight">
      				<div class="modal-header">
      					<h5 class="modal-title"><i class="fas fa-bible modal-icon"></i>  설교정보 상세 보기</h5>
      					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      				</div>
      				<div class="modal-body">
      					<div class="worshipView infoView">
                  <dl class="vInfo row">
      							<dt class="col-md-2 text-right">설교구분</dt>
      							<dd class="col-md-10"></dd>
      						</dl>
      						<dl class="vWriter row">
      							<dt class="col-md-2 text-right">설교자</dt>
      							<dd class="col-md-10"></dd>
      						</dl>
                  <dl class="vRegdate row">
      							<dt class="col-md-2 text-right">날짜</dt>
      							<dd class="col-md-10"></dd>
      						</dl>
                  <dl class="vTilte row">
      							<dt class="col-md-2 text-right">제목</dt>
      							<dd class="col-md-10"></dd>
      						</dl>
                  <dl class="vBible row">
      							<dt class="col-md-2 text-right">본문</dt>
      							<dd class="col-md-10"></dd>
      						</dl>
                  <dl class="vContent row">
      							<dt class="col-md-2 text-right">설교내용<br><div></div></dt>
      							<dd class="col-md-10"><textarea rows="10" class="form-control"></textarea></dd>
      						</dl>
      					</div>
      				</div>
      				<div class="modal-footer">
                <div></div>
      					<button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal"><i class="fas fa-times modal-icon"></i> Close</button>
      				</div>
      			</div>
      		</div>
      	</div>

    </div>
    <div class="page-footer text-center">
      <p>&copy; Copyright <script>document.write(new Date().getFullYear());</script> <a href="/" target="_blank"><strong>LUKE'S DEVLABS</strong></a>. All rights reserved.</p>
  </div>
    <!-- JavaScript -->
    <script src="/home/js/jquery.min.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/popper.min.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/bootstrap.min.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/pace.min.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/moment.min.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/bootstrap-filestyle.min.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/jquery.alphanum.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/jquery.mask.min.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/jquery.filtertable.min.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/jquery.slimscroll.min.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/jquery.validate.min.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/jquery.validate_ko.min.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/sweetalert.min.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/toastr.min.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/siiru.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="/home/js/common.js"></script><script src="/home/js/jquery.confetti.js" type="text/javascript" crossorigin="anonymous"></script>
</body>
</html>
