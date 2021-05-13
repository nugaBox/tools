var gs_rootDirectory = '/bowDoor/';
$(document).ready(function() {
    // 숫자만 입력
	$('.numeric').numeric('positiveInteger');
	// 영문 _ 만 입력
	$('.alpha').alphanum({
		allowNumeric: false,
		allowSpace: false,
		allow: '_'
	}).css('ime-mode', 'disabled');
	// 영문 숫자 _ . 만 입력
	$('.alphanum').alphanum({
		allowSpace: false,
		allow: '_.'
	}).css('ime-mode', 'disabled');
	// 영문 숫자 _  만 입력
	$('.alphanum2').alphanum({
		allowSpace: false,
		allow: '_'
	}).css('ime-mode', 'disabled');
	// IP . 만 입력
	$('.alphanum3').alphanum({
		allowSpace: false,
		allowLatin: false,
		allow: '.'
	}).css('ime-mode', 'disabled');
	// 전화번호만 입력
	$('.alphanum4').alphanum({
		allowSpace: false,
		allowLatin: false,
		allow: '-'
	}).css('ime-mode', 'disabled');
	// 한글입력제거
	$('.nothangul').keyup(function() {
		var inputVal = $(this).val();
		$(this).val(inputVal.replace(/[\ㄱ-ㅎㅏ-ㅣ가-힣]/gi,''));
	});
	// 대문자로만
	$('.upper').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});
    // 스크롤 관련
	$('.scroll-container').slimScroll({
		height: '100%'
	});
	// 파일스타일
	$(':file').filestyle();
	// 검색구분 선택
	$('.dropdown-menu').on('click', 'a', function() {
		$('#'+$(this).data('form')).val($(this).data('val'));
		$('#'+$(this).data('form')+'Text').text($(this).text());
		$(this).parent().dropdown('toggle');
		return false;
	});
    // 오류 알림 설정
    toastr.options = {
        closeButton: true,
        progressBar: true,
        showMethod: 'slideDown',
        timeOut: 4000
    };
    // 모달은 레아아웃 밖으로 뺀다.
    $('.modal').appendTo('body');
    // 로그아웃
    $('#logout').click(function() {
        ajaxForm({'action':'logOut'}, '', '', function(data) {
            document.location.href = gs_rootDirectory;
        });
    });
    // validator 기본셋팅
	$.validator.setDefaults({
		errorElement: 'span',
		errorClass: 'invalid-feedback',
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				validator.errorList[0].element.focus();
			}
		},
		highlight: function (element, errorClass, validClass) {
			$(element).addClass('is-invalid');
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass('is-invalid');
		},
		errorPlacement: function (error, element) {
			if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
				error.insertAfter(element.parent());
			} else {
				error.insertAfter(element);
			}
		}
	});
	$.validator.addMethod('time24', function(value, element) {
		if (value !== '') {
			return /^([01]?[0-9]|2[0-3])(:[0-5][0-9]){1}$/.test(value);
		} else {
			return true;
		}
	}, '올바른 시간을 입력하세요.');
	$.validator.addMethod('firstalpha', function(value, element) {
		if (value !== '') {
			return /(^[a-zA-Z])/.test(value);
		} else {
			return true;
		}
	}, '첫글자는 영문만 입력하실수 있습니다.');
	$.validator.addMethod('IP4Checker', function(value, element) {
		if (value !== '') {
			return /^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/.test(value);
		} else {
			return true;
		}
	}, '올바른 IP를 입력하세요.');
});
// 폼 전송 [form form data, swal or toastr, validate, output]
function ajaxForm(as_formData, as_alert, validate, out_data) {
	var ls_processData = true;
	var ls_contentType = 'application/x-www-form-urlencoded; charset=UTF-8';
	if ($.type(as_formData) === 'object') {
		if ( as_formData instanceof FormData) {
			ls_processData = false;
			ls_contentType = false;
		}
	}
	$.ajax({
		type : 'post',
		url : 'action.php',
		cache : false,
		data : as_formData,
		processData : ls_processData,
		contentType: ls_contentType,
		dataType : 'json',
		success : function(data) {
			if (data.errChk == 'N') {
				if (($.type(data.successTitle) !== 'undefined') && (data.successTitle !== '')) {
					if (as_alert == 'swal') {
						swal({
							title: data.successTitle,
							text: data.successMsg,
							type: 'success',
							timer: 1000,
							showConfirmButton: false,
							html: true
						});
					} else {
						// success, info, warning, error
			            toastr.success(data.successMsg, data.successTitle);
					}
					if (($.type(data.redirect) !== 'undefined') && (data.redirect !== '')) {
						// 메세지를 뿌리기 위해 딜레이
						setTimeout(function() {
							if (data.redirect == 'reload') {
								document.location.reload(true);
							} else {
								document.location.href = data.redirect;
							}
						}, 1000);
					}
				} else {
					if (($.type(data.redirect) === 'undefined') || (data.redirect === '')) {
					} else if (data.redirect == 'reload') {
						document.location.reload(true);
					} else {
						document.location.href = data.redirect;
					}
				}
			} else {
				var form_err = [];
				var errCount = 0;
				if ($.type(data.inputArr) != 'undefined') {
					$.each(data.inputArr, function(input_name, input_msg) {
						if (input_msg.focus) $('#'+input_name).focus();
						form_err[input_name] = input_msg.msg;
						errCount++;
					});
				}
				if (errCount > 0) validate.showErrors(form_err);
				if (($.type(data.errTitle) !== 'undefined') && (data.errTitle !== '')) {
					if (as_alert == 'swal') {
						swal({
							title: data.errTitle,
							text: data.errMsg,
							type: 'error',
							showConfirmButton: true,
							confirmButtonClass: 'btn-danger',
							confirmButtonText: 'Close'
						});
					} else {
						// success, info, warning, error
			            toastr.error(data.errMsg, data.errTitle);
					}
				}
			}
			if ($.type(out_data) === 'function') out_data(data);
		},
		error : function(xhr,status,error) {
			if (as_alert == 'swal') {
				swal({
					title: 'ajaxForm Error',
					text: '['+xhr.status+'] ' + error,
					type: 'error',
					showConfirmButton: true,
					confirmButtonClass: 'btn-danger',
					confirmButtonText: 'Close'
				});
			} else {
				// success, info, warning, error
	            toastr.error('['+xhr.status+'] ' + error, 'ajaxForm Error');
			}
		}
	});
}
// 숫자 3자리 단위마다 콤마(comma)
function numberWithCommas(x) {
	return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}
// HTML escape
function escapeHtml(text) {
	return text.toString().replace(/["]/g, '&quot;');
}
