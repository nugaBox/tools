var _piinfo;
var timerMain;
var timerWrite;
function pi() {
	if (_piinfo == undefined) _piinfo = new PiInfo();
	return _piinfo;
}
function PiInfo() {}
// 메인 정보표출
PiInfo.prototype.mainInfo = function(host, idx) {
	var self = this;
	var active = 'Y';
	$.getJSON('info.php', {'mode':'M','host':host}).done(function(data) {
		active = $.trim(data.active);
		if (active == 'Y') {
			$('#door_'+idx).removeClass('text-white');
			$('#door_'+idx).removeClass('bg-danger');
			$('#door_'+idx).find('.doorOpen').prop('disabled', false);
			$('#door_'+idx).find('.detailBtn').prop('disabled', false);
			$('#door_'+idx).find('.tagBtn').prop('disabled', false);
			// 서비스
			if ($.trim(data.status) == 'active') {
				if (!$('#door_'+idx).find('.active').hasClass('fa-spin')) {
					$('#door_'+idx).find('.active').addClass('fa-spin');
				}
			} else {
				if ($('#door_'+idx).find('.active').hasClass('fa-spin')) {
					$('#door_'+idx).find('.active').removeClass('fa-spin');
				}
			}
			// 정보
			var alert = data.alert;
			// CPU
			$('#door_'+idx).find('.usage').removeClass('badge-success');
			$('#door_'+idx).find('.usage').removeClass('badge-warning');
			$('#door_'+idx).find('.usage').removeClass('badge-light');
			$('#door_'+idx).find('.usage').addClass('badge-'+$.trim(alert.usage));
			// CPU
			$('#door_'+idx).find('.heat').removeClass('badge-success');
			$('#door_'+idx).find('.heat').removeClass('badge-warning');
			$('#door_'+idx).find('.heat').removeClass('badge-light');
			$('#door_'+idx).find('.heat').addClass('badge-'+$.trim(alert.heat));
			// RAM
			$('#door_'+idx).find('.ram').removeClass('badge-success');
			$('#door_'+idx).find('.ram').removeClass('badge-warning');
			$('#door_'+idx).find('.ram').removeClass('badge-light');
			$('#door_'+idx).find('.ram').addClass('badge-'+$.trim(alert.ram));
			// Swap
			$('#door_'+idx).find('.swap').removeClass('badge-success');
			$('#door_'+idx).find('.swap').removeClass('badge-warning');
			$('#door_'+idx).find('.swap').removeClass('badge-light');
			$('#door_'+idx).find('.swap').addClass('badge-'+$.trim(alert.swap));
			// Temperature
			$('#door_'+idx).find('.temp').removeClass('badge-success');
			$('#door_'+idx).find('.temp').removeClass('badge-warning');
			$('#door_'+idx).find('.temp').removeClass('badge-light');
			$('#door_'+idx).find('.temp').addClass('badge-'+$.trim(alert.temp));
			var f = $.trim(alert.tempc);
			var c = 'N/A';
			if (f != '') {
				c = (f - 32) / 1.8;
				c = c.toFixed(1)+'°C';
			}
			$('#door_'+idx).find('.tempc').html(c);
			// Storage
			$('#door_'+idx).find('.hdd').removeClass('badge-success');
			$('#door_'+idx).find('.hdd').removeClass('badge-warning');
			$('#door_'+idx).find('.hdd').removeClass('badge-light');
			$('#door_'+idx).find('.hdd').addClass('badge-'+$.trim(alert.hdd));
			// Network
			$('#door_'+idx).find('.net').removeClass('badge-success');
			$('#door_'+idx).find('.net').removeClass('badge-warning');
			$('#door_'+idx).find('.net').removeClass('badge-light');
			$('#door_'+idx).find('.net').addClass('badge-'+$.trim(alert.net));
			// Users
			$('#door_'+idx).find('.users').html($.trim(alert.users));
			// 활성 시간
			$('#door_'+idx).find('.uptime').html($.trim(data.uptime));
			// 태그 개수
			$('#door_'+idx).find('.tagCount').html($.trim(data.tagCount));
		} else {
			$('#door_'+idx).addClass('text-white');
			$('#door_'+idx).addClass('bg-danger');
			$('#door_'+idx).find('.doorOpen').prop('disabled', true);
			$('#door_'+idx).find('.detailBtn').prop('disabled', true);
			$('#door_'+idx).find('.tagBtn').prop('disabled', true);
			$('#door_'+idx).find('.active').removeClass('fa-spin');
		}
	});
	timerMain = setTimeout(function(){self.mainInfo(host, idx);}, 30000);
};
// 메인 정보표출 취소
PiInfo.prototype.mainStop = function() {
	if (timerMain != null) clearTimeout(timerMain);
};
// 태그 등록 대기
PiInfo.prototype.tagWrite = function() {
	var self = this;
	$.getJSON('info.php', {'mode':'W'}).done(function(data) {
		if ($.trim(data.tag) != '') {
			$('#tagID').val($.trim(data.tag)).trigger('change');
		}
	});
	if ($.trim($('#tagID').val()) == '') {
		timerWrite = setTimeout(function(){self.tagWrite();}, 1000);
	} else {
		if (timerWrite != null) clearTimeout(timerWrite);
	}
};
// 태그 등록 대기 취소
PiInfo.prototype.tagStop = function() {
	if (timerWrite != null) clearTimeout(timerWrite);
};
