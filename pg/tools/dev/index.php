<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="description" content="NUGA's Toolbox">
    <meta name="author" content="Nuga Jang">
    <title>nugaBox | Util</title>
    <link rel="icon" href="../images/favicon.ico">
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="../css/fontAwesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.min.js"></script>
    <script defer src="../js/bootstrap.min.js"></script>
    <script defer src="../js/bootstrap-colorpicker.min.js"></script>
    <script defer src="../js/jquery.slimscroll.min.js"></script>
    <script defer src="../js/punycode.js"></script>
    <script src="../js/clipboard.min.js"></script>
    <script defer src="../js/specialChar.js"></script>
    <script defer src="../js/script.js"></script>
</head>
<body>
<header class="p-3 text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center col-lg-6 mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="../images/banner_tools.png" alt="logo" class="logo" />
            </a>
            <div class="col-lg-2"></div>
            <ul class="nav col-12 col-lg-4 me-lg-auto mb-2 justify-content-center mb-md-0 ">
                <li><a href="/tools" class="nav-link px-2 text-secondary">일반 도구</a></li>
                <li><a href="/tools/dev" class="nav-link px-2 text-white">개발 도구</a></li>
                <li class="dropdown ms-3">
                    <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../images/nuga_circle.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="https://nugabox.com">NUGABOX</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="https://dev.nugabox.com" target="_blank">DevLabs</a></li>
                        <li><a class="dropdown-item" href="https://wiki.nugabox.io/" target="_blank">개발위키</a></li>
                        <li><a class="dropdown-item" href="https://velog.io/@nugabox" target="_blank">Velog</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="container-fluid">
    <div class="bd-callout bd-callout-info">
        <h3>Keep Going, Keep Smart</h3>
        <h6>Last Update : 2021.10.10</h6>
    </div>
    <!-- IP 확인 -->
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
    <!-- 포트 오픈 확인 -->
    <div class="section row mt-3" id="port_open">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"><i class="fad fa-network-wired" aria-hidden="true"></i> Port Open Check</h5>
                <div class="card-body">
                    <div class="row">
                        <label for="open_ip" class="col-3 col-md-2 col-form-label text-right">IP</label>
                        <div class="col-9 col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control" id="open_ip" name="open_ip" placeholder="IP 또는 Domain" value="127.0.0.1">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="open_port" class="col-3 col-md-2 col-form-label text-right">Port</label>
                        <div class="col-9 col-md-10">
                            <div class="input-group">
                                <input type="number" class="form-control" id="open_port" name="open_port" placeholder="포트 번호" min="0" max="65535" value="80">
                                <button type="button" class="btn btn-secondary" data-action="O"><i class="fad fa-check-circle"></i> 확인</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-secondary mb-0" role="alert"><pre class="port_openDs"></pre><a class="copy-btn" href="#" data-category="port_open"><i class="fad fa-clipboard" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 유니코드 변환 -->
    <div class="section row mt-3" id="kor_uni">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"><i class="fad fa-language" aria-hidden="true"></i> UniCode Converter</h5>
                <div class="card-body">
                    <div class="row">
                        <label for="kor" class="col-3 col-md-2 col-form-label text-right">한글</label>
                        <div class="col-9 col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control" id="kor" name="kor" value="">
                                <button type="button" class="btn btn-secondary" data-action="K"><i class="far fa-exchange-alt"></i> 변환</button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="unicode" class="col-3 col-md-2 col-form-label text-right">UniCode</label>
                        <div class="col-9 col-md-10">
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
    <!-- 퓨니코드 변환 -->
    <div class="section row mt-3" id="kor_puny">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"><i class="fab fa-korvue" aria-hidden="true"></i> Korean Domain Converter</h5>
                <div class="card-body">
                    <div class="row">
                        <label for="korDomain" class="col-3 col-md-2 col-form-label text-right">한글</label>
                        <div class="col-9 col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control" id="korDomain" name="korDomain" value="">
                                <button type="button" class="btn btn-secondary" data-action="K"><i class="far fa-exchange-alt"></i> 변환</button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="punycode" class="col-3 col-md-2 col-form-label text-right">퓨니코드</label>
                        <div class="col-9 col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control" id="punycode" name="punycode" value="">
                                <button type="button" class="btn btn-secondary" data-action="U"><i class="far fa-exchange-alt"></i> 변환</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-secondary mb-0" role="alert"><pre class="punycodeDs"></pre><a class="copy-btn" href="#" data-category="punycode"><i class="fad fa-clipboard" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p class="text-center mt-4">Copyright <script>document.write(new Date().getFullYear());</script> <a href="https://nugabox.com" target="_blank">NUGABOX</a>. All rights reserved.</p>
    </footer>
</div>
</body>
</html>