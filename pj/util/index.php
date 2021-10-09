<?php
$str = $_POST['sign-userNm'];
if ($str != null){
    $result = "당신은 '{$str}'이라고 썼습니다.";
} else {
    $result = "아무것도 쓴 것이 없습니다.";
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="description" content="누가의 유틸 모음">
    <meta name="author" content="Nuga Jang">
    <title>nugaBox | Util</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="css/fontAwesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script defer src="js/bootstrap.min.js"></script>
    <script defer src="js/bootstrap-colorpicker.min.js"></script>
    <script defer src="js/jquery.slimscroll.min.js"></script>
    <script src="js/clipboard.min.js"></script>
    <script defer src="js/specialChar.js"></script>
    <script defer src="js/script.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row title">
		<div class="col-12">
            <a href="https://nugabox.com"><img src="/images/nuga_circle.png" alt="Persona" class="login-img" /><h1>nugaBox</h1></a><h1><span>Util</span></h1>
		</div>
	</div>
    <div class="section row mt-3" id="myip">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"><i class="fad fa-router" aria-hidden="true"></i> My IP</h5>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-secondary mb-0" role="alert">
                                <pre class="myipDs"><span class="text-success"><?=$_SERVER["REMOTE_ADDR"]?></span></pre>
                                <a class="copy-btn" href="#" data-category="myip"><i class="fad fa-clipboard" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="section row mt-3" id="slash">
		<div class="col-12">
			<div class="card">
				<h5 class="card-header"><i class="fad fa-keyboard" aria-hidden="true"></i> Slash in Path</h5>
				<div class="card-body">
					<div class="row">
                        <label for="slashTp" class="col-md-1 col-form-label text-right"></label>
						<div class="col-12 col-md-11 select-row">
                            <div class="form-check">
                                <input type="radio" id="slashTp1" name="slashTp" class="form-check-input" value="slashTp1" checked>
                                <label class="form-check-label" for="slashTp1"> <i class="fab fa-windows" aria-hidden="true"></i> <i class="far fa-arrow-right" aria-hidden="true"></i> <i class="fab fa-apple" aria-hidden="true"></i> </label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="slashTp2" name="slashTp" class="form-check-input" value="slashTp2">
                                <label class="form-check-label" for="slashTp2"> <i class="fab fa-apple" aria-hidden="true"></i> <i class="far fa-arrow-right" aria-hidden="true"></i> <i class="fab fa-windows" aria-hidden="true"></i>  </label>
                            </div>
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="cominPath" name="cominPath" value="Y" checked>
                                <label class="form-check-label" for="cominPath"> COMIN NAS</label>
                            </div>
						</div>
					</div>
					<div class="row mt-2">
						<label for="keyword" class="col-2 col-md-1 col-form-label text-right">경로</label>
						<div class="col-10 col-md-11">
							<div class="input-group">
								<input type="text" class="form-control" id="path" name="path" value="" placeholder="BackSlash(\) → Slash(/)">
                                <button type="button" class="btn btn-secondary" data-action="U"><i class="far fa-exchange-alt"></i> 변환</button>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-12">
							<div class="alert alert-secondary mb-0" role="alert"><pre class="pathDs"></pre><a class="copy-btn" href="#" data-category="path"><i class="fad fa-clipboard" aria-hidden="true"></i></a></div>
                            <div class="mt-4 mb-2 pathHotkey"><i class="fas fa-keyboard" aria-hidden="true"></i> <span>경로 이동 단축키</span><br><kbd>Command + Shift + g</kbd> / <kbd><i class="fab fa-windows" aria-hidden="true"></i>(Win) + R</kbd></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="section row mt-3" id="specialChar">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">
                    <div class="row">
                        <div class="col-12">
                            <i class="fad fa-alicorn" aria-hidden="true"></i> Special Character
                        </div>
                    </div>
                </h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div id="specialCharOutput"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section row mt-3" id="signGen">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"><i class="fad fa-id-card" aria-hidden="true"></i> E-mail Signature Generator</h5>
                <div class="card-body">
                    <form id="signForm" action="action.php" target="preview" method="post">
                        <input type="hidden" name="action" value="P">
                        <div class="row mt-2">
                            <label for="sign-essential" class="col-3 col-md-2 col-form-label text-right">필수정보</label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sign-userNm" name="sign-userNm" value="장누가 선임">
                                    <label for="sign-userNm">이름/직급</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-essential" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sign-comNm" name="sign-comNm" value="(주)가민정보시스템">
                                    <label for="sign-comNm">직장명</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-essential" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sign-comTeam" name="sign-comTeam" value="정보기술연구소 프레임웍연구">
                                    <label for="sign-comTeam">소속 부서</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-essential" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sign-comAddr" name="sign-comAddr" value="광주광역시 동구 동계천로 76 가민정보 빌딩">
                                    <label for="sign-comAddr">직장 주소</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-essential" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sign-tel-com" name="sign-tel-com" value="062-653-2879">
                                    <label for="sign-tel-com">직장 전화번호</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-essential" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sign-tel-phone" name="sign-tel-phone" value="010-0000-0000">
                                    <label for="sign-tel-phone">휴대 전화번호</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-essential" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sign-email" name="sign-email" value="admin@nugabox.com">
                                    <label for="sign-email">이메일</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-telinfo" class="col-3 col-md-2 col-form-label text-right">선택사항</label>
                            <div class="col-9 col-md-10">
                                <div class="input-group">
                                    <div class="input-group-text col-5 col-md-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="sign-tel-faxYn" name="sign-tel-faxYn" value="N">
                                            <label class="form-check-label" for="sign-tel-faxYn">FAX</label>
                                        </div>
                                    </div>
                                    <input type="tel" class="form-control col-7 col-md-10" id="sign-tel-fax" name="sign-tel-fax" placeholder="직장 FAX번호" value="062-676-4869">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-telinfo" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="input-group">
                                    <div class="input-group-text col-5 col-md-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="sign-tel-directYn" name="sign-tel-directYn" value="N">
                                            <label class="form-check-label" for="sign-tel-directYn">직통</label>
                                        </div>
                                    </div>
                                    <input type="tel" class="form-control col-7 col-md-10" id="sign-tel-direct" name="sign-tel-direct" placeholder="직통 전화번호" value="070-0000-0000">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-logo" class="col-3 col-md-2 col-form-label text-right">로고</label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="url" class="form-control" id="sign-logo-url" name="sign-logo-url" value="https://i.imgur.com/hTu1xEo.png">
                                    <label for="sign-logo-url">로고 이미지 URL</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-logo" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="url" class="form-control" id="sign-logo-link" name="sign-logo-link" value="https://www.comin.com">
                                    <label for="sign-logo-link">로고 링크 URL</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-color" class="col-3 col-md-2 col-form-label text-right">컬러</label>
                            <div class="col-9 col-md-10">
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" id="sign-colorCd" name="sign-colorCd" value="#A3282D"/>
                                    <input type="color" class="form-control form-control-color" id="sign-color" value="#A3282D" title="Choose your color">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-end">
                                <button type="button" class="btn btn-primary" data-action="G"><i class="far fa-magic"></i> 코드 생성</button>
                                <button type="button" class="btn btn-secondary" data-action="P"><i class="far fa-browser"></i> 미리보기</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-secondary mb-0" role="alert"><pre class="signGenDs"></pre></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section row mt-3" id="kor_uni">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"><i class="fad fa-language" aria-hidden="true"></i> UniCode</h5>
                <div class="card-body">
                    <div class="row">
                        <label for="kor" class="col-3 col-lg-1 col-form-label text-right">한글</label>
                        <div class="col-9 col-lg-11">
                            <div class="input-group">
                                <input type="text" class="form-control" id="kor" name="kor" value="">
                                <button type="button" class="btn btn-secondary" data-action="K"><i class="far fa-exchange-alt"></i> 변환</button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="unicode" class="col-3 col-lg-1 col-form-label text-right">UniCode</label>
                        <div class="col-9 col-lg-11">
                            <div class="input-group">
                                <input type="text" class="form-control" id="unicode" name="unicode" value="">
                                <button type="button" class="btn btn-secondary" data-action="U"><i class="far fa-exchange-alt"></i> 변환</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-secondary mb-0" role="alert"><pre class="unicodeDs"></pre><a class="copy-btn" href="#" data-category="unicode"><i class="fad fa-clipboard" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p class="text-center mt-4">Copyright <script>document.write(new Date().getFullYear());</script> NUGABOX. All rights reserved.</p>
    </footer>
</div>
</body>
</html>