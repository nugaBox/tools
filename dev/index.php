<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="description" content="NUGA's Toolbox">
    <meta name="author" content="Nuga Jang">
    <title>NUGABOX Tools</title>
    <link rel="icon" href="../images/favicon.ico">
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/fontAwesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.min.js"></script>
    <script defer src="../js/bootstrap.min.js"></script>
    <script defer src="../js/jquery.slimscroll.min.js"></script>
    <script src="../js/clipboard.min.js"></script>
    <script defer src="../js/dev/htmlencode.js"></script>
    <script defer src="../js/dev/base32.js"></script>
    <script defer src="../js/dev/base64.js"></script>
    <script defer src="../js/dev/punycode.js"></script>
    <script defer src="../js/dev/crypto.bundle.js"></script>
    <script defer src="../js/dev/script.js"></script>
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
        <h6>Last Update : 2021-10-10</h6>
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
                <h5 class="card-header"><i class="fad fa-network-wired" aria-hidden="true"></i> 포트 오픈 확인</h5>
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
    <!-- 인코더 -->
    <div class="section row mt-3" id="encoder">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"><i class="fad fa-exchange" aria-hidden="true"></i> 인코더</h5>
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-encoder" role="tablist">
                            <button class="nav-link active" id="nav-url-tab" data-bs-toggle="tab" data-bs-target="#nav-url" type="button" role="tab" aria-controls="nav-url" aria-selected="true">URL</button>
                            <button class="nav-link" id="nav-html-tab" data-bs-toggle="tab" data-bs-target="#nav-html" type="button" role="tab" aria-controls="nav-html" aria-selected="false">HTML</button>
                            <button class="nav-link" id="nav-base32-tab" data-bs-toggle="tab" data-bs-target="#nav-base32" type="button" role="tab" aria-controls="nav-base32" aria-selected="false">Base32</button>
                            <button class="nav-link" id="nav-base64-tab" data-bs-toggle="tab" data-bs-target="#nav-base64" type="button" role="tab" aria-controls="nav-base64" aria-selected="false">Base64</button>
                        </div>
                    </nav>
                    <div class="tab-content mt-2 p-2" id="nav-encoderContent">
                        <div class="tab-pane fade show active" id="nav-url" role="tabpanel" aria-labelledby="nav-url-tab">
                            <div class="row mt-2">
                                <label for="enc_url" class="col-3 col-md-2 col-form-label text-right">Encoder</label>
                                <div class="col-9 col-md-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="enc_url" name="enc_url" value="https://nugabox.com?name=누가" placeholder="https://nugabox.com?name=누가">
                                        <button type="button" class="btn btn-secondary" data-category="URL" data-action="K"><i class="far fa-exchange-alt"></i> 변환</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="dec_url" class="col-3 col-md-2 col-form-label text-right">Decoder</label>
                                <div class="col-9 col-md-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="dec_url" name="dec_url" value="https://nugabox.com?name=%EB%88%84%EA%B0%80" placeholder="https://nugabox.com?name=%EB%88%84%EA%B0%80">
                                        <button type="button" class="btn btn-secondary" data-category="URL" data-action="U"><i class="far fa-exchange-alt"></i> 변환</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-html" role="tabpanel" aria-labelledby="nav-html-tab">
                            <div class="row mt-2">
                                <label for="enc_html" class="col-3 col-md-2 col-form-label text-right">Encoder</label>
                                <div class="col-9 col-md-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="enc_html" name="enc_html" value="<html>Hello World</html>" placeholder="<html>Hello World</html>">
                                        <button type="button" class="btn btn-secondary" data-category="HTML" data-action="K"><i class="far fa-exchange-alt"></i> 변환</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="dec_html" class="col-3 col-md-2 col-form-label text-right">Decoder</label>
                                <div class="col-9 col-md-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="dec_html" name="dec_html" value="<?=htmlspecialchars('&lt;html&gt;Hello World&lt;/html&gt;');?>" placeholder="<?=htmlspecialchars('&lt;html&gt;Hello World&lt;/html&gt;');?>">
                                        <button type="button" class="btn btn-secondary" data-category="HTML" data-action="U"><i class="far fa-exchange-alt"></i> 변환</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-base32" role="tabpanel" aria-labelledby="nav-base32-tab">
                            <div class="row mt-2">
                                <label for="enc_base32" class="col-3 col-md-2 col-form-label text-right">Encoder</label>
                                <div class="col-9 col-md-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="enc_base32" name="enc_base32" value="nugabox" placeholder="nugabox">
                                        <button type="button" class="btn btn-secondary" data-category="B32" data-action="K"><i class="far fa-exchange-alt"></i> 변환</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="dec_base32" class="col-3 col-md-2 col-form-label text-right">Decoder</label>
                                <div class="col-9 col-md-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="dec_base32" name="dec_base32" value="NZ2WOYLCN54A====" placeholder="NZ2WOYLCN54A====">
                                        <button type="button" class="btn btn-secondary" data-category="B32" data-action="U"><i class="far fa-exchange-alt"></i> 변환</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-base64" role="tabpanel" aria-labelledby="nav-base64-tab">
                            <div class="row mt-2">
                                <label for="enc_base64" class="col-3 col-md-2 col-form-label text-right">Encoder</label>
                                <div class="col-9 col-md-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="enc_base64" name="enc_base64" value="nugabox" placeholder="nugabox">
                                        <button type="button" class="btn btn-secondary" data-category="B64" data-action="K"><i class="far fa-exchange-alt"></i> 변환</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="dec_base64" class="col-3 col-md-2 col-form-label text-right">Decoder</label>
                                <div class="col-9 col-md-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="dec_base64" name="dec_base64" value="bnVnYWJveA==" placeholder="bnVnYWJveA==">
                                        <button type="button" class="btn btn-secondary" data-category="B64" data-action="U"><i class="far fa-exchange-alt"></i> 변환</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-secondary mb-0" role="alert"><pre class="encoderDs"><span class="text-success"></span></pre><a class="copy-btn" href="#" data-category="encoder"><i class="fad fa-clipboard" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 컨버터 -->
    <div class="section row mt-3" id="converter">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"><i class="fad fa-drafting-compass" aria-hidden="true"></i> 컨버터</h5>
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-converter" role="tablist">
                            <button class="nav-link active" id="nav-unicode-tab" data-bs-toggle="tab" data-bs-target="#nav-unicode" type="button" role="tab" aria-controls="nav-unicode" aria-selected="true">유니코드</button>
                            <button class="nav-link" id="nav-punycode-tab" data-bs-toggle="tab" data-bs-target="#nav-punycode" type="button" role="tab" aria-controls="nav-punycode" aria-selected="false">한글도메인</button>
                        </div>
                    </nav>
                    <div class="tab-content mt-2 p-2" id="nav-converterContent">
                        <div class="tab-pane fade show active" id="nav-unicode" role="tabpanel" aria-labelledby="nav-unicode-tab">
                            <div class="row mt-2">
                                <label for="uni_kor" class="col-3 col-md-2 col-form-label text-right">한글</label>
                                <div class="col-9 col-md-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="uni_kor" name="uni_kor" value="">
                                        <button type="button" class="btn btn-secondary" data-category="UNI" data-action="K"><i class="far fa-exchange-alt"></i> 변환</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="uni_code" class="col-3 col-md-2 col-form-label text-right">UniCode</label>
                                <div class="col-9 col-md-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="uni_code" name="uni_code" value="">
                                        <button type="button" class="btn btn-secondary" data-category="UNI" data-action="U"><i class="far fa-exchange-alt"></i> 변환</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-punycode" role="tabpanel" aria-labelledby="nav-punycode-tab">
                            <div class="row mt-2">
                                <label for="puny_kor" class="col-3 col-md-2 col-form-label text-right">한글</label>
                                <div class="col-9 col-md-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="puny_kor" name="puny_kor" value="">
                                        <button type="button" class="btn btn-secondary" data-category="PUNY" data-action="K"><i class="far fa-exchange-alt"></i> 변환</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="puny_code" class="col-3 col-md-2 col-form-label text-right">PunyCode</label>
                                <div class="col-9 col-md-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="puny_code" name="puny_code" value="">
                                        <button type="button" class="btn btn-secondary" data-category="PUNY" data-action="U"><i class="far fa-exchange-alt"></i> 변환</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-secondary mb-0" role="alert"><pre class="converterDs"></pre><a class="copy-btn" href="#" data-category="converter"><i class="fad fa-clipboard" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 암호화 -->
    <div class="section row mt-3" id="crypto">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"><i class="fad fa-fingerprint" aria-hidden="true"></i> 암호화</h5>
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-crypto" role="tablist">
                            <button class="nav-link active" id="nav-homehash" data-bs-toggle="tab" data-bs-target="#nav-hash" type="button" role="tab" aria-controls="nav-hash" aria-selected="true">Hash</button>
                            <button class="nav-link" id="nav-hmac-tab" data-bs-toggle="tab" data-bs-target="#nav-hmac" type="button" role="tab" aria-controls="nav-hmac" aria-selected="false">HMAC</button>
                            <button class="nav-link" id="nav-pbkdf2-tab" data-bs-toggle="tab" data-bs-target="#nav-pbkdf2" type="button" role="tab" aria-controls="nav-pbkdf2" aria-selected="false">PBKDF2</button>
                            <button class="nav-link" id="nav-aes-tab" data-bs-toggle="tab" data-bs-target="#nav-aes" type="button" role="tab" aria-controls="nav-aes" aria-selected="false">AES</button>
                            <button class="nav-link" id="nav-randomString-tab" data-bs-toggle="tab" data-bs-target="#nav-randomString" type="button" role="tab" aria-controls="nav-randomString" aria-selected="false">RandomString</button>
                        </div>
                    </nav>
                    <div class="tab-content mt-2 p-2" id="nav-cryptoContent">
                        <div class="tab-pane fade show active" id="nav-hash" role="tabpanel" aria-labelledby="nav-hash-tab">
                            <div class="row mt-2">
                                <label for="crypto_hashAlgorithm" class="col-3 col-md-2 col-form-label text-right">알고리즘</label>
                                <div class="col-9 col-md-10">
                                    <select class="form-control" id="crypto_hashAlgorithm" name="crypto_hashAlgorithm">
                                        <option value="sha1" selected>SHA-1</option>
                                        <option value="sha224">SHA-224</option>
                                        <option value="sha256">SHA-256</option>
                                        <option value="sha384">SHA-384</option>
                                        <option value="sha512">SHA-512</option>
                                        <option value="md5">MD5</option>
                                        <option value="rmd160">RIPEMD-160</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="crypto_hashOrgText" class="col-3 col-md-2 col-form-label text-right">텍스트</label>
                                <div class="col-9 col-md-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="crypto_hashOrgText" name="crypto_hashOrgText" value="hello world">
                                        <button type="button" class="btn btn-secondary" data-category="HASH"><i class="far fa-exchange-alt"></i> 변환</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-hmac" role="tabpanel" aria-labelledby="nav-hmac-tab">

                        </div>
                        <div class="tab-pane fade" id="nav-pbkdf2" role="tabpanel" aria-labelledby="nav-pbkdf2-tab">

                        </div>
                        <div class="tab-pane fade" id="nav-aes" role="tabpanel" aria-labelledby="nav-aes-tab">

                        </div>
                        <div class="tab-pane fade" id="nav-randomString" role="tabpanel" aria-labelledby="nav-randomString-tab">

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-secondary mb-0" role="alert"><pre class="cryptoDs"></pre><a class="copy-btn" href="#" data-category="crypto"><i class="fad fa-clipboard" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <script src="https://utteranc.es/client.js" repo="nugaBox/tools" issue-term="pathname" theme="github-light" crossorigin="anonymous" async></script>
    </div>
    <footer>
        <p class="text-center mt-4">Copyright <script>document.write(new Date().getFullYear());</script> <a href="https://nugabox.com" target="_blank">NUGABOX</a>. All rights reserved.</p>
    </footer>
</div>
</body>
</html>