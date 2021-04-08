<?php
	// 환경파일 불러오기
	require_once 'com/globalConstant.php';

	// 공통 로직
	//require_once $gs_includeFolder.'common.php';

	// 템플릿 출력
	if (!$ajaxView) require_once $gs_includeFolder.'template.php';

	// DB 종료
	//require_once $gs_comFolder.'dbClose.php';

?>
