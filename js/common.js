$(document).ready(function(){
	// 설교 리스트 세팅
	getWorshipList('soo','10','0');
	getWorshipList('soo','06','0');

	// 기본 리스트 : 수영로 주일설교
	$('#soo_10').show();

	// 모달은 레아아웃 밖으로 뺀다.
	$('.modal').appendTo('body');

	// 설교 리스트 더보기 클릭 시
	//$('#viewAdd').click(function() { // document ready하면서 처음 로드된 요소만 먹힘... 아래처럼 해줘야 함
	$(document).on("click", "#viewAdd", function(){
		var ctgStr = $(this).parents('div').attr('id');
		var ctg = ctgStr.split('_')[0];
		var mcode = ctgStr.split('_')[1];
		var tNum = $(this).attr('tNum');

		// 설교 리스트 가져오고 targetNum +1 세팅
		getWorshipList(ctg,mcode,tNum);
		tNum = Number(tNum)+1;
		$(this).attr('tNum',tNum.toString());

		// 화면 맨 아래로 이동
		var scrollHeight = $(document).height();
		$('body,html').animate({
			scrollTop: scrollHeight
		}, 800);
	});

	// 버튼 클릭시 같은 행 볼드 처리
	$(document).on("click", ".btnCopy, #btnView", function(){
		$('.table tbody tr').css("font-weight","normal");
		$(this).parents('td').parents('tr').css("font-weight","bold");
	});

	// 리스트 위에 마우스 호버 시 색상 변경
	$(document).on("mouseover", ".table tbody tr", function(){
		$(this).css("backgroundColor","#e9ecef");
	});
	$(document).on("mouseout", ".table tbody tr", function(){
		$(this).css("backgroundColor","#fff");
	});

	// 상세 페이지 모달 내용 넣기
	$('#viewModal').on('show.bs.modal', function (event) {
			var worshipData = event.relatedTarget; // 모달 불러오면서 data 속성 모두 가져옴
			var ctg = $(worshipData).data('ctg');
			var mcode = $(worshipData).data('mcode');
			var seq = $(worshipData).data('seq');
			var writer = $(worshipData).data('writer');
			var wortitle = $(worshipData).data('wortitle');
			var bible = bibleFullConvert($(worshipData).data('bible'));
			var regdateFm = $(worshipData).data('regdate');
			// 설교정보 세팅
			if(ctg == 'soo') worInfo = '수영로 ';
			if(mcode == '10') worInfo += '주일설교'; else if (mcode == '06') worInfo += '금요철야';
			// regdate 형식 변환
			regdate = $.trim(regdateFm.replaceAll("-",""));
			// 데이터 넣기 + 복사 버튼
			$('.vInfo').find('dd').html(worInfo);
			$('.vWriter').find('dd').html(writer);
			$('.vRegdate').find('dd').html(regdateFm);
			$('.vTilte').find('dd').html('<a href="javascript:copyToClipboard(\''+wortitle+'\')"><strong>'+wortitle+'</strong></a>');
			$('.vBible').find('dd').html('<a href="javascript:copyToClipboard(\''+bible+'\')">'+bible+'</a>');
			$('.vContent').find('div').html('<a class="btn btn-danger btn-xs btnCopy" href="javascript:getContentTxt(\''+ctg+'\',\''+mcode+'\',\''+regdate+'\',\''+seq+'\',\'copy\')"><i class="fa fa-copy"></i> 복사</a>');
			$('.modal-footer').find('div').html('<a class="btn btn-outline-danger btn-sm" href="https://www.sooyoungro.org/new-layout/syrtv/worshipTextPopForm.jsp?lcode=01&mcode='+mcode+'&regdate='+regdate+'&seq='+seq+'" target="_blank"><i class="fas fa-link modal-icon"></i> 원본 링크</a>')
			getContentTxt(ctg,mcode,regdate,seq,'view'); // 설교내용은 getContentTxt에서 success 후 직접 넣어줌
	});
});

// 설교 리스트 보기
function showWorshipList(ctg,mcode){
	var ctgStr = ctg + '_' + mcode;
	$('.worshipList').hide();
	$('#'+ctgStr).show();
}

// 설교 리스트 가져오기
function getWorshipList(ctg,mcode,tNum){
	mcode = pad(mcode,2); // 자리 수 맞추기
	var ctgStr = ctg + '_' + mcode;
	var data = {"lcode":'01', "mcode":mcode, "writerType":'A', "targetNum":tNum};
  $.ajax({
		url:"pj/parsing/pj/getList_"+ctg+".php",
		type:'POST',
		data: data,
		success:function(result){
			// php에서 JSON으로 받은 값 Array로 변환
			var resultArray = JSON.parse(result);
			var listData = resultArray['data'];

			// Array값을 목록으로 붙여주기
			for (var i=0; i < resultArray['data'].length; i++){
				var worshipRow = '<tr>';
				worshipRow += '	<td>'+ listData[i].regdateFm +'</td>';
				worshipRow += '	<td>'+ listData[i].writer +'</td>';
				worshipRow += '	<td>'+ listData[i].wortitle +'</td>';
				worshipRow += '	<td>'+ listData[i].bible +'</td>';
				worshipRow += '	<td><button type="button" data-toggle="modal" data-target="#viewModal" class="detailBtn btn btn-success btn-xs" id="btnView" data-ctg="'+ctg+'" data-mcode="'+mcode+'" data-seq="'+listData[i].seq+'" data-writer="'+listData[i].writer+'" data-wortitle="'+listData[i].wortitle+'" data-bible="'+listData[i].bible+'" data-regdate="'+listData[i].regdateFm+'"><i class="fas fa-search"></i> VIEW</button></td>';
				worshipRow += '	<td><a class="btn btn-secondary btn-xs btnCopy" href="javascript:copyText(\'title\',\''+listData[i].wortitle+'\')"><i class="far fa-copy"></i> 제목</a>';
				worshipRow += '	<a class="btn btn-warning btn-xs btnCopy" href="javascript:copyText(\'bible\',\''+listData[i].bible+'\')"><i class="far fa-copy"></i> 본문</a>';
				//worshipRow += '	<a class="btn btn-primary btn-xs btnCopy" href="./pj/getData_'+ctg+'.php?mcode='+mcode+'&regdate='+listData[i].regdate+'&seq='+listData[i].seq+'">Copy Txt</a></td>';
				worshipRow += '	<a class="btn btn-danger btn-xs btnCopy" href="javascript:copyText(\'content\',\''+ctg+'_'+mcode+'_'+listData[i].regdate+'_'+listData[i].seq+'\')"><i class="far fa-copy"></i> 설교내용</a></td>';
				$('#listData_'+ctgStr).append(worshipRow);
			}
    },
    error:function(jqXHR, textStatus, errorThrown){
			toastr.error(textStatus + " : " + errorThrown,'에러 발생!');
			//alert("에러 발생~~ \n" + textStatus + " : " + errorThrown);
			self.close();
    }
	});
}

// 카피 버튼
function copyText(type,val){
	// 설교제목
	if (type == 'title'){
		copyToClipboard(val);
	}
	// 설교본문
	else if (type == 'bible'){
		var bibleTxt = bibleFullConvert(val);
		copyToClipboard(bibleTxt);
	}
	// 설교내용
	else if (type == 'content'){
		var ctg = val.split('_')[0];
		var mcode = val.split('_')[1];
		var regdate = val.split('_')[2];
		var seq = val.split('_')[3];
		getContentTxt(ctg,mcode,regdate,seq,'copy'); // 설교내용은 getContentTxt에서 success 후 직접 넣어줌
	}
}

// 설교내용 데이터 가져오기
function getContentTxt(ctg,mcode,regdate,seq,type){
	mcode = pad(mcode,2); // 06이 6으로 넘어가서 ajax 넘어올 때 500 에러 뜨거나, 한글을 공백으로 가져옴. 인코딩 문제인 줄 알고 삽질... 자리 수 맞춰서 0 넣어주는 함수 적용
	seq = pad(seq,3);
	var data = {"mcode":mcode, "regdate":regdate, "seq":seq};
	$.ajax({
		url:"pj/parsing/pj/getData_"+ctg+".php",
		type:'POST',
		data: data,
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
		dataType: "html",
		success:function(result){
			if(!result || result == '') result = '없음';
			var resultK = $.trim(result.replace(/%/g, '%25')); // 한글 변환

			// 주일설교일때
			if (mcode != '06'){
				var resultN = resultK.replaceAll('\<br\>','\n'); // 개행문자 치환 replace는 한번만 치환하므로 replaceAll 프로토 함수 선언 (아래에 있음)
			} else {
			// 금요철야일때
				var resultN = resultK.replaceAll('\<br\>',''); // 개행문자 제거
				resultN = resultN.replaceAll(/ +/g, " "); //여러 공백을 공백 하나로 치환
			}

			// type에 따라서 마지막 수행 (ajax는 return 할 수 없음)
			if(type == 'copy'){
				copyToClipboard(resultN);
			}
			else if(type == 'view') {
				$('.vContent').find('textarea').html(resultN);
			}
		},
		error:function(jqXHR, textStatus, errorThrown){
			toastr.error(textStatus + " : " + errorThrown,'에러 발생!');
			//alert("에러 발생~~ \n" + textStatus + " : " + errorThrown);
			self.close();
		}
	});
}

// 클립보드 복사 함수
function copyToClipboard(val) {
	var t = document.createElement("textarea");
	document.body.appendChild(t);
	t.value = val;
	t.select();
	document.execCommand('copy');
	document.body.removeChild(t);
	if (val.length > 20) val = val.substr(0,20)+'...';
	toastr.success('내용 : '+val,'텍스트가 복사되었습니다');
}

// 성경본문 Full 표기 변환
function bibleFullConvert(bible){
	// 정규식
	var patternKor = /[^\uAC00-\uD7AF\u1100-\u11FF\u3130-\u318F]/gi;
	var patternNum = /[^0-9]/g;
	// 본문 변환
	var bibleStr = $.trim(bible.replace(patternKor,"")); // [성경책명] 한글만 추출
	var headNum = $.trim(bible.split(':')[0].replace(patternNum,"")); // [장] :으로 분기하고 숫자만 추출
	var jang = (bibleStr != '시') ? '장': '편'; // 시편일 때는 [장] -> [편]
	var contentNum = $.trim(bible.split(':')[1].replace(/ /g, '').replace(/-/g, '~')); // [절] :으로 분기하고 공백 제거, ~ 대체
	// Full 표기 Return
	return fullStr = bibleMatch(bibleStr) + " " + headNum + jang + " " +  contentNum + "절";
}

// 성경책명 변환
function bibleMatch(bible){
	if (bible == '창') return '창세기';
	else if (bible == '출') return '출애굽기';
	else if (bible == '레') return '레위기';
	else if (bible == '민') return '민수기';
	else if (bible == '신') return '신명기';
	else if (bible == '수') return '여호수아';
	else if (bible == '삿') return '사사기';
	else if (bible == '룻') return '룻기';
	else if (bible == '삼상') return '사무엘상';
	else if (bible == '삼하') return '사무엘하';
	else if (bible == '왕상') return '열왕기상';
	else if (bible == '왕하') return '열왕기하';
	else if (bible == '대상') return '역대상';
	else if (bible == '대하') return '역대하';
	else if (bible == '스') return '에스라';
	else if (bible == '느') return '느헤미야';
	else if (bible == '에') return '에스더';
	else if (bible == '욥') return '욥기';
	else if (bible == '시') return '시편';
	else if (bible == '잠') return '잠언';
	else if (bible == '전') return '전도서';
	else if (bible == '아') return '아가';
	else if (bible == '사') return '이사야';
	else if (bible == '렘') return '예레미야';
	else if (bible == '애') return '예레미야애가';
	else if (bible == '겔') return '에스겔';
	else if (bible == '단') return '다니엘';
	else if (bible == '호') return '호세아';
	else if (bible == '욜') return '요엘';
	else if (bible == '암') return '아모스';
	else if (bible == '옵') return '오바댜';
	else if (bible == '욘') return '요나';
	else if (bible == '미') return '미가';
	else if (bible == '나') return '나훔';
	else if (bible == '합') return '하박국';
	else if (bible == '습') return '스바냐';
	else if (bible == '학') return '학개';
	else if (bible == '슥') return '스가랴';
	else if (bible == '말') return '말라기';
	else if (bible == '마') return '마태복음';
	else if (bible == '막') return '마가복음';
	else if (bible == '눅') return '누가복음';
	else if (bible == '요') return '요한복음';
	else if (bible == '행') return '사도행전';
	else if (bible == '롬') return '로마서';
	else if (bible == '고전') return '고린도전서';
	else if (bible == '고후') return '고린도후서';
	else if (bible == '갈') return '갈라디아서';
	else if (bible == '엡') return '에베소서';
	else if (bible == '빌') return '빌립보서';
	else if (bible == '골') return '골로새서';
	else if (bible == '살전') return '데살로니가전서';
	else if (bible == '살후') return '데살로니가후서';
	else if (bible == '딤전') return '디모데전서';
	else if (bible == '딤후') return '디모데후서';
	else if (bible == '딛') return '디도서';
	else if (bible == '몬') return '빌레몬서';
	else if (bible == '히') return '히브리서';
	else if (bible == '약') return '야고보서';
	else if (bible == '벧전') return '베드로전서';
	else if (bible == '벧후') return '베드로후서';
	else if (bible == '요일') return '요한일서';
	else if (bible == '요이') return '요한이서';
	else if (bible == '요삼') return '요한삼서';
	else if (bible == '유') return '유다서';
	else if (bible == '계') return '요한계시록';
	else return bible;
}

// replaceAll prototype 선언
String.prototype.replaceAll = function(org, dest) {
    return this.split(org).join(dest);
}

// 자리 수 맞추기 위한 0 넣는 함수
function pad(n, width) {
	n = n + '';
	return n.length >= width ? n : new Array(width - n.length + 1).join('0') + n;
}
