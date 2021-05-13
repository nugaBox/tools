<?php
// ===============================================================================================
// Program Name : globalConstant.php
// Description : 글로벌 상수화 취급할 공통 변수 선언
// 이 파일은 모든 파일에서 호출된다.
// ===============================================================================================
/* PHP설정값, 헤더, 세션 설정 */
@header('Content-Type: text/html; charset=UTF-8');
@header('P3P:CP="ALL CURa ADMa DEVa TAIa OUR BUS IND PHY ONL UNI PUR FIN COM NAV INT DEM CNT STA POL HEA PRE LOC OTC"');
@header('Pragma: no-cache');
@header('Cache-Control: max-age=1, s-maxage=1, no-cache, must-revalidate');

/* 공통 변수 선언 */
global $gs_baseURL, $gs_rootDirectory, $gs_rootPath, $gs_comFolder, $gs_includeFolder, $gs_cssFolder, $gs_jsFolder, $gs_imagesFolder;
global $gs_homeName, $gs_homeDirectory, $gs_homePath, $gs_templateDirectory, $gs_templatePath, $gs_compilePath, $gs_uploadDirectory, $gs_uploadPath;
global $gs_session;
global $gs_CMSDirectory, $gs_CMSPath, $gs_CMSNM, $gs_CMSVersion, $gs_CMSTitle, $gs_CMSCompany, $gs_CMSRole, $gs_debugMode;
global $gs_host, $gs_scriptFilename, $gs_basename;
global $gs_dataBaseType, $gs_dataBaseUser, $gs_dataBasePass, $gs_dataBaseHost, $gs_dataBaseCharset, $gs_dataBaseNm;
global $gs_SFTP, $gs_SFTPPort, $gs_SFTPId, $gs_SFTPPw, $gs_SFTPChown, $gs_backupPath;
global $gs_role, $gs_limitId, $gs_limitSite;
global $gs_pwEncrypt, $gs_pwEncryptTP, $gs_boardEncrypt, $gs_boardEncryptTP, $gs_privacyEncrypt, $gs_bszUser_key, $gs_bszIV, $gs_board_key;
global $gs_site, $gs_menuId;

/* 대표 URL */
$gs_baseURL = 'https://dev.nugabox.com/';

/* 기본 경로 설정 */
$gs_rootDirectory = '/';															/* 시작위치가(index) 있는 디렉토리 */
$gs_rootPath = $_SERVER['DOCUMENT_ROOT'].$gs_rootDirectory;							/* 홈페이지 루트 절대경로 */
$gs_comFolder = $gs_rootPath.'com/';												/* 공통함수가 위치한 절대경로 */
$gs_includeFolder = $gs_rootPath.'include/';										/* 공통 include 가 위치한 절대경로 */

$gs_cssFolder = $gs_rootDirectory.'css/';										    /* 공통 css 가 위치한 경로 */
$gs_jsFolder = $gs_rootDirectory.'js/';										        /* 공통 js 가 위치한 경로 */
$gs_imagesFolder = $gs_rootDirectory.'images/';										/* 공통 images 가 위치한 경로 */

$gs_homeName = 'home';																/* 사이트 기본 이름 */
$gs_homeDirectory = $gs_rootDirectory.$gs_homeName.'/';								/* 기본 사이트 경로 */
$gs_homePath = $gs_rootPath.$gs_homeName.'/';										/* 기본 사이트 절대경로 */
ini_set('include_path', $gs_rootPath.'com/DB');

/* Session 설정 */
/*@session_save_path($gs_rootPath.'session/');*/
@session_cache_limiter('nocache, must-revalidate');
@session_start();
$gs_session = session_id();
set_time_limit(0);

//mysql
$gs_dataBaseType = 'mysqli';     /* DataBase Type */
$gs_dataBaseUser = 'dbuser';    /* DataBase User */
$gs_dataBasePass = 'DBuser001!';  /* DataBase Password */
$gs_dataBaseHost = 'localhost'; /* DataBase Host */
$gs_dataBaseCharset = 'utf8';   /* DataBase Charset */
$gs_dataBaseNm = 'devphpdb';       /* DataBase Name */

$gs_SFTP = 'localhost';		/* sFtp 주소 */
$gs_SFTPPort = 122;          /* sFtp 포트 */
$gs_SFTPId = 'ngjang';		/* sFtp 아이디 */
$gs_SFTPPw = 'dbwkck001!';	/* sFtp 패스워드 */
$gs_SFTPChown = 'user';	/* sFtp 사용자권한 */
$gs_backupPath = '/volume1/web/develop/devphp/backup/';	/* 백업폴더 위치 */

/* 주소값 가져오기 */
$gs_host = $_SERVER['HTTP_HOST'];	/* 도메인명(호스트)명 */
$gs_scriptFilename = explode('/', $_SERVER['SCRIPT_FILENAME']);
$gs_basename = basename($_SERVER['PHP_SELF'],'.php');

$gs_role = array('1'=>'인증로그인', '2'=>'회원', '5'=>'직원', '7'=>'부서관리자', '9'=>'최고관리자');	 /* 전체 권한 */
$gs_limitId = '/admin|administrator|manager|adm|server|php|mysql|cms|siiru/i';      			/* 입력제한 ID */
$gs_limitSite = 'bb|co|com|G-PIN|'.$gs_homeName.'|images|include|pj|session|siiru|upload|view';	/* 사이트제한 ID */

/* 암호화 */
// 사용자 비밀번호 사용됩니다.
$gs_pwEncrypt = 'Y';

// 암호화 타입 설정 [md5, sha256, mysql]
$gs_pwEncryptTP = 'sha256';

// 게시판 비밀번호에 사용됩니다.
$gs_boardEncrypt = 'Y';

// 암호화 타입 설정 [md5, sha256, mysql]
$gs_boardEncryptTP = 'mysql';

// 사용자 개인정보에 사용되는 암/복호화 사용유무
$gs_privacyEncrypt = 'Y';

// 암호통신에 사용할 키값과 IV(Initialization Vector)를 설정. 16bytes로 구성
// 16진수(0xFE) 형태로 구성되며 0x를 제외한 나머지 문자.
$gs_bszUser_key = array('43','4F','4D','49','4E','EA','B0','80','EB','AF','BC','53','69','69','52','55');
$gs_bszIV = array('53','69','69','52','55','EA','B0','80','EB','AF','BC','43','4F','4D','49','4E');

// 게시판 랜덤 SEQ key [key에 BOARDID를 붙여서 적용됨.]
$gs_board_key = 'siirucomin-';

/* 공통함수 셋팅 */
//require_once $gs_comFolder.'globalHeader.php';
?>
