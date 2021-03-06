<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="description" content="NUGA's Toolbox">
    <meta name="author" content="Nuga Jang">
    <meta property="og:image" content="/tools/images/meta_tools.png">
    <meta property="og:title" content="NUGABOX Tools">
    <meta property="og:type" content="website">
    <meta property="og:description" content="made by NUGA">
    <title>NUGABOX Tools</title>
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#272b35">
    <meta name="msapplication-TileColor" content="#272b35">
    <meta name="theme-color" content="#ffffff">
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
<style>

</style>
<header class="p-3 text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="//dev.nugabox.com/tools" class="d-flex align-items-center col-lg-6 mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="images/banner_tools_light.png" alt="logo" class="logo" />
            </a>
            <div class="col-lg-2"></div>
            <ul class="nav col-12 col-lg-4 me-lg-auto mb-2 justify-content-center mb-md-0 ">
                <li><a href="/tools" class="nav-link px-2 text-white">?????? ??????</a></li>
                <li><a href="/tools/dev" class="nav-link px-2 text-secondary">?????? ??????</a></li>
                <li class="dropdown ms-3">
                    <a href="javascript:;" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="images/nuga_circle.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="https://nugabox.com">NUGABOX</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="https://dev.nugabox.com" target="_blank">DevLabs</a></li>
                        <li><a class="dropdown-item" href="https://nugabox.github.io" target="_blank">?????? ??????</a></li>
                        <li><a class="dropdown-item" href="https://wiki.nugabox.io" target="_blank">?????? ??????</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="container-fluid">
    <div class="bd-callout bd-callout-info">
        <h3>Stay Hungry, Stay Foolish.</h3>
        <h6><span class="badge bg-light text-dark mt-2">Last Updated???/???2022-02-04</span></h6>
    </div>
<!--	<div class="row title">-->
<!--		<div class="col-12">-->
<!--            <a href="https://nugabox.com"><img src="/images/nuga_circle.png" alt="Persona" class="login-img" /><h1>nugaBox</h1></a><h1><span>Util</span></h1>-->
<!--		</div>-->
<!--	</div>-->
    <!-- ?????? ?????? -->
	<div class="section row mt-3" id="slash">
		<div class="col-12">
			<div class="card">
				<h5 class="card-header"><i class="fad fa-keyboard" aria-hidden="true"></i> ???????????? ?????? ??????</h5>
				<div class="card-body">
                    <div class="row mt-2">
                        <label for="keyword" class="col-2 col-md-1 col-form-label text-right"></label>
                        <div class="col-10 col-md-4">
                            <div class="form-check form-check-inline">
                                <input type="radio" id="slashTp1" name="slashTp" class="form-check-input" value="slashTp1" checked>
                                <label class="form-check-label" for="slashTp1"> <i class="fab fa-windows" aria-hidden="true"></i> <i class="far fa-arrow-right" aria-hidden="true"></i> <i class="fab fa-apple" aria-hidden="true"></i> </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="slashTp2" name="slashTp" class="form-check-input" value="slashTp2">
                                <label class="form-check-label" for="slashTp2"> <i class="fab fa-apple" aria-hidden="true"></i> <i class="far fa-arrow-right" aria-hidden="true"></i> <i class="fab fa-windows" aria-hidden="true"></i>  </label>
                            </div>
                        </div>
                        <label for="keyword" class="col-2 col-md-1 col-form-label text-right"></label>
                        <div class="col-6 col-md-4">
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="cominPath" name="cominPath" value="Y" checked>
                                <label class="form-check-label" for="cominPath"> COMIN NAS</label>
                            </div>
                        </div>
                    </div>
					<div class="row mt-2">
						<label for="keyword" class="col-2 col-md-1 col-form-label text-right">??????</label>
						<div class="col-10 col-md-11">
							<div class="input-group">
								<input type="text" class="form-control" id="path" name="path" value="" placeholder="BackSlash(\) ??? Slash(/)">
                                <button type="button" class="btn btn-secondary" data-action="U"><i class="far fa-exchange-alt"></i> ??????</button>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-12">
							<div class="alert alert-secondary mb-0" role="alert"><pre class="pathDs"></pre><a class="copy-btn" href="javascript:;" data-category="path"><i class="fad fa-clipboard" aria-hidden="true"></i></a></div>
                            <div class="mt-4 mb-2 pathHotkey"><i class="fas fa-keyboard" aria-hidden="true"></i> <span>?????? ?????? ?????????</span><br><kbd>Command + Shift + g</kbd> / <kbd><i class="fab fa-windows" aria-hidden="true"></i>(Win) + R</kbd></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- ?????? ???????????? ?????? -->
	<div class="section row mt-3" id="hangul">
		<div class="col-12">
			<div class="card">
				<h5 class="card-header"><i class="fad fa-yin-yang" aria-hidden="true"></i> ?????? ???????????? ??????</h5>
				<div class="card-body">
					<div class="row mt-2">
						<div class="col-12">
							<div class="input-group">
								<input type="text" class="form-control" id="hangultxt" name="hangultxt" value="">
                                <button type="button" class="btn btn-secondary" data-action="U"><i class="far fa-exchange-alt"></i> ??????</button>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-12">
							<div class="alert alert-secondary mb-0" role="alert"><pre class="hangulDs"></pre><a class="copy-btn" href="javascript:;" data-category="hangul"><i class="fad fa-clipboard" aria-hidden="true"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- ???????????? -->
    <div class="section row mt-3" id="specialChar">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">
                    <div class="row">
                        <div class="col-12">
                            <i class="fad fa-alicorn" aria-hidden="true"></i> ?????? ??????
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
    <!-- HTML ?????? ????????? -->
    <div class="section row mt-3" id="signGen">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"><i class="fad fa-id-card" aria-hidden="true"></i> HTML ?????? ?????????</h5>
                <div class="card-body">
                    <form id="signForm" action="action.php" target="preview" method="post">
                        <input type="hidden" name="action" value="P">
                        <div class="row mt-2">
                            <label for="sign-essential" class="col-3 col-md-2 col-form-label text-right">????????????</label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sign-userNm" name="sign-userNm" value="????????? ??????">
                                    <label for="sign-userNm">??????/??????</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-essential" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sign-comNm" name="sign-comNm" value="(???)?????????????????????">
                                    <label for="sign-comNm">?????????</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-essential" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sign-comTeam" name="sign-comTeam" value="????????????????????? ??????????????????">
                                    <label for="sign-comTeam">?????? ??????</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-essential" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sign-comAddr" name="sign-comAddr" value="??????????????? ?????? ???????????? 76 ???????????? ??????">
                                    <label for="sign-comAddr">?????? ??????</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-essential" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sign-tel-com" name="sign-tel-com" value="062-653-2879">
                                    <label for="sign-tel-com">?????? ????????????</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-essential" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sign-tel-phone" name="sign-tel-phone" value="010-0000-0000">
                                    <label for="sign-tel-phone">?????? ????????????</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-essential" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sign-email" name="sign-email" value="admin@nugabox.com">
                                    <label for="sign-email">?????????</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-select" class="col-3 col-md-2 col-form-label text-right">????????????</label>
                            <div class="col-9 col-md-10">
                                <div class="input-group">
                                    <div class="input-group-text col-5 col-md-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="sign-tel-directYn" name="sign-tel-directYn" value="N">
                                            <label class="form-check-label" for="sign-tel-directYn">??????</label>
                                        </div>
                                    </div>
                                    <input type="tel" class="form-control col-7 col-md-10" id="sign-tel-direct" name="sign-tel-direct" placeholder="?????? ????????????" value="070-0000-0000">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-select" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="input-group">
                                    <div class="input-group-text col-5 col-md-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="sign-tel-faxYn" name="sign-tel-faxYn" value="N">
                                            <label class="form-check-label" for="sign-tel-faxYn">FAX</label>
                                        </div>
                                    </div>
                                    <input type="tel" class="form-control col-7 col-md-10" id="sign-tel-fax" name="sign-tel-fax" placeholder="?????? FAX??????" value="062-676-4869">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-select" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="input-group">
                                    <div class="input-group-text col-5 col-md-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="sign-warningYn" name="sign-warningYn" value="N">
                                            <label class="form-check-label" for="sign-warningYn">????????????</label>
                                        </div>
                                    </div>
                                    <input type="tel" class="form-control col-7 col-md-10" id="sign-warning" name="sign-warning" placeholder="????????????" value="??? ????????? ????????? ??????????????? ?????? ??????????????????, ????????? ????????? ???????????? ???????????? ?????? ??? ????????????. ????????? ?????? ??????, ??? ????????? ????????? ????????? ?????? ?????? ????????? ???????????? ???3????????? ??????, ??????, ?????? ?????? ???????????? ?????? ????????? ???????????????. ?????? ??? ????????? ?????? ????????? ?????? ????????? ?????? ????????? ??????????????? ??? ????????? ?????? ???????????? ????????? ????????????. This E-mail may contain confidential information and/or copyright material. This E-mail is intended for the use of the Addressee only. If you receive this E-mail by mistake, please delete it without reproducing, distributing or retaining." disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-logo" class="col-3 col-md-2 col-form-label text-right">??????</label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="url" class="form-control" id="sign-logo-url" name="sign-logo-url" value="https://i.imgur.com/hTu1xEo.png">
                                    <label for="sign-logo-url">?????? ????????? URL</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-logo" class="col-3 col-md-2 col-form-label text-right"></label>
                            <div class="col-9 col-md-10">
                                <div class="form-floating">
                                    <input type="url" class="form-control" id="sign-logo-link" name="sign-logo-link" value="https://www.comin.com">
                                    <label for="sign-logo-link">?????? ?????? URL</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="sign-color" class="col-3 col-md-2 col-form-label text-right">??????</label>
                            <div class="col-9 col-md-10">
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" id="sign-colorCd" name="sign-colorCd" value="#A3282D"/>
                                    <input type="color" class="form-control form-control-color" id="sign-color" value="#A3282D" title="Choose your color">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-end">
                                <button type="button" class="btn btn-primary" data-action="G"><i class="far fa-magic"></i> ?????? ??????</button>
                                <button type="button" class="btn btn-secondary" data-action="P"><i class="far fa-browser"></i> ????????????</button>
                            </div>
                        </div>
                        <div class="col-12 mt-2 text-end"><small>??? ??? ???????????? ???????????? ????????? ?????? ????????????.</small></div>
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
    <div class="mt-5 p-3">
        <div class="row">
            <div class="col-6">
                <h5><i class="fad fa-comments-alt"></i>  ??????</h5>
            </div>
            <div class="col-6 text-end">
                <a href="https://github.com/nugaBox" target="_blank"><h6><span class="badge bg-dark text-light mt-2"><i class="fab fa-github-alt"></i> nugaBox</span></h6></a>
            </div>
        </div>
        <small>????????? ?????? ?????? ??? ?????? ?????? ???????????????</small>
        <script src="https://utteranc.es/client.js" repo="nugaBox/tools" issue-term="pathname" theme="github-light" crossorigin="anonymous" async></script>
    </div>
    <footer>
        <p class="text-center mt-4">Copyright <script>document.write(new Date().getFullYear());</script> <a href="https://nugabox.com" target="_blank">NUGABOX</a>. All rights reserved.</p>
    </footer>
</div>
</body>
</html>