<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title>nugaBox | Util</title>
    <link rel="icon" href="images/favicon_toolbox.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontAwesome.min.css">
    <script src="js/jquery.min.js"></script>
    <script defer src="js/bootstrap.min.js"></script>
    <script defer src="js/jquery.slimscroll.min.js"></script>
	<style>
		body{font-family:'Apple SD Gothic Neo',sans-serif;font-size:1rem;}
		h1{padding-top:10px;font-weight:700;}
        .title { margin-top:20px; }
        .title > div { display: flex;}
        .title img { width:50px; height:50px; }
        .title h1 { font-weight:300; font-size:2em; margin: 0 12px;}
        .title h1 span { font-weight:700; margin-left:8px;}
		.custom-control{margin-top:5px;}
		.custom-control-label{padding-top:2px;cursor:pointer;}
		.workDs,.pathDs,.tableDs{font-size:.8em;}
        .copy-btn {display: block; position: absolute; bottom: 10px; right: 10px; border: solid 1px #d6d8db; padding: 4px 8px 2px; border-radius: 5px;}
        .custom-control-input:checked~.custom-control-label::before { border-color: #B13B3E; background-color: #B13B3E;}
        .pathHotkey > i { margin-right:6px;}
        .pathHotkey > span { margin-bottom:8px; }
        @media all and (min-width:768px) {
            .pathHotkey > br { display:none;}
            .pathHotkey > span { margin-right:10px; }
        }
	</style>
</head>
<body>
<div class="container-fluid">
<!--	<form id="siiru" name="siiru" method="post" class="form-horizontal">-->
	<div class="row title">
		<div class="col-12">
			<img src="/images/nuga_circle.png" alt="Persona" class="login-img" />
			<h1>DevLabs<span>Util</span></h1>
		</div>
	</div>
	<div class="row mt-3 unicodeLayout">
		<div class="col-12">
			<div class="card">
				<h5 class="card-header"><i class="fad fa-code" aria-hidden="true"></i> UniCode</h5>
				<div class="card-body">
					<div class="form-row">
						<label for="kor" class="col-3 col-lg-1 col-form-label text-right">한글</label>
						<div class="col-9 col-lg-11">
							<div class="input-group">
								<input type="text" class="form-control" id="kor" name="kor" value="">
								<div class="input-group-append">
									<button type="button" class="btn btn-secondary" data-action="K"><i class="far fa-exchange-alt"></i> 변환</button>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row mt-2">
						<label for="unicode" class="col-3 col-lg-1 col-form-label text-right">UniCode</label>
						<div class="col-9 col-lg-11">
							<div class="input-group">
								<input type="text" class="form-control" id="unicode" name="unicode" value="">
								<div class="input-group-append">
									<button type="button" class="btn btn-secondary" data-action="U"><i class="far fa-exchange-alt"></i> 변환</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-12">
							<div class="unicodeDs alert alert-secondary mb-0" role="alert">&nbsp;<a class="copy-btn" href="#" data-category="unicode"><i class="fad fa-clipboard" aria-hidden="true"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-3 pathLayout">
		<div class="col-12">
			<div class="card">
				<h5 class="card-header"><i class="fad fa-terminal" aria-hidden="true"></i> Slash in Path</h5>
				<div class="card-body">
					<div class="form-row">
                        <label for="slashTp" class="col-2 col-lg-1 col-form-label text-right"></label>
						<div class="col-10 col-lg-11">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="slashTp1" name="slashTp" class="custom-control-input" value="slashTp1" checked>
                                <label class="custom-control-label" for="slashTp1"> <i class="fab fa-windows" aria-hidden="true"></i> <i class="far fa-arrow-right" aria-hidden="true"></i> <i class="fab fa-apple" aria-hidden="true"></i> </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="slashTp2" name="slashTp" class="custom-control-input" value="slashTp2">
                                <label class="custom-control-label" for="slashTp2"> <i class="fab fa-apple" aria-hidden="true"></i> <i class="far fa-arrow-right" aria-hidden="true"></i> <i class="fab fa-windows" aria-hidden="true"></i>  </label>
                            </div>
                            <div class="custom-control custom-switch custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="cominPath" name="cominPath" value="Y" checked>
                                <label class="custom-control-label" for="cominPath"> COMIN NAS</label>
                            </div>
						</div>
					</div>
					<div class="form-row mt-2">
						<label for="keyword" class="col-2 col-lg-1 col-form-label text-right">경로</label>
						<div class="col-10 col-lg-11">
							<div class="input-group">
								<input type="text" class="form-control" id="path" name="path" value="" placeholder="BackSlash(\) → Slash(/)">
								<div class="input-group-append">
                                    <button type="button" class="btn btn-secondary" data-action="U"><i class="far fa-exchange-alt"></i> 변환</button>
								</div>
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
<!--	</form>-->
</div>
<script type="text/javascript">
	$(document).ready(function() {
		// 출력폼
		$('.workDs,.pathDs').slimScroll({height:'50px',start:'bottom'});

		// UniCode
		$('.unicodeLayout .btn').click(function() {
			var str = '';
			if ($(this).data('action') == 'K') {
				if ($.trim($('#kor').val()) != '') {
					str = escape($.trim($('#kor').val()));
					str = str.split("%").join("\\");
					str = str.split("\\20").join(" ");
					$('.unicodeDs').html('<span class="text-success">'+$.trim(str)+'</span>');
				}
			} else {
				if ($.trim($('#unicode').val()) != '') {
					str = $.trim($('#unicode').val());
					str = unescape(str.split("\\").join("%"));
					$('.unicodeDs').html('<span class="text-success">'+$.trim(str)+'</span>');
				}
			}
		});
		// Slash in Path
		$('.pathLayout .btn').click(function() {
		    var str = '';
            var slashTp = $(":input:radio[name=slashTp]:checked").val().right(1);
            var cominPathYn = $('#cominPath').val();
            var cominboxArr = ["dat", "datback", "hndvr", "lecture", "pgm", "photo"];
            var cominfileArr = ["siiru", "devtools", "scan", "공공교육사업본부", "더블스타", "정보기술연구소", "제조금융사업본부"];

            // BackSlash to Slash (Win -> Mac)
            if (slashTp == '1' && $.trim($('#path').val()) != '') {
                str = $.trim($('#path').val());
                var strArr = str.split("\\");
                // var strArr2 = strArr[2].toLowerCase();
                // Comin NAS
                if (cominPathYn == 'Y') {
                    if (strArr[2] == "cominfile" || strArr[2] == "cominbox" || strArr[2] == "cominFile" || strArr[2] == "cominBox" || strArr[2] == "192.168.1.7" || strArr[2] == "192.168.1.8") {
                        strArr[2] = 'Volumes';
                        strArr.splice(0, 1);
                    }
                }
                str = strArr.join("/");
                $('.pathDs').html('<span class="text-success">' + $.trim(str) + '</span>');
            }
            // Slash to BackSlash (Mac -> Win)
            else if (slashTp == '2' && $.trim($('#path').val()) != '') {
                str = $.trim($('#path').val());
                var strArr = str.split("/");
                // Comin NAS
                if (cominPathYn == 'Y') {
                    if (strArr[1] == 'Volumes') {
                        if($.inArray(strArr[2], cominboxArr) != -1) {
                            strArr[1] = '\\cominBox';
                        } else if($.inArray(strArr[2], cominfileArr) != -1) {
                            strArr[1] = '\\cominFile';
                        }
                    }
                }
                str = strArr.join("\\");
                $('.pathDs').html('<span class="text-success">' + $.trim(str) + '</span>');
            }
		});
        $("input:radio[name=slashTp]").click(function() {
            var slashTp = $(this).val().right(1);
            if(slashTp == '1') $('#path').attr('placeholder',"BackSlash(\\) → Slash(/)");
            else $('#path').attr('placeholder',"Slash(/) → BackSlash(\\)");
        })
        $('#cominPath').click(function(){
            if($(this).val() == 'Y') $(this).val('N');
            else $(this).val('Y');
        })
        $('.copy-btn').click(function(){
            var category = $(this).data('category') + 'Ds';
            var str = $('.'+category).children('.text-success').text();
            copyToClipboard(str);
        })
	});
	// 화면 이동
	// function scrollMove(obj) {
	// 	var scmove = obj.offset().top;
	// 	$('html, body').animate({scrollTop : scmove}, 'slow');
	// }
	// 숫자 3자리 단위마다 콤마(comma)
	function numberWithCommas(x) {
		return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
	}
	// ajax 전송
	function ajaxForm(outData) {
		$.ajax({
			type : 'post',
			url : 'action.php',
			data : $('#data').serialize(),
			dataType : 'json',
			success : function(data) {
				outData(data);
			}
		});
	}
	// right substr 사용하기
    String.prototype.right = function(length){
        if(this.length <= length) return this;
        else return this.substring(this.length - length, this.length);
    }
    // 클립보드 복사 함수
    function copyToClipboard(val) {
        var t = document.createElement("textarea");
        document.body.appendChild(t);
        t.value = val;
        t.select();
        document.execCommand('copy');
        document.body.removeChild(t);
    }
</script>
</body>
</html>