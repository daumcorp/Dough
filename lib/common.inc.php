<?

//**************************************************************************
// 화 일 명  : common.inc.php
// 용    도   : 공통라이브러리
//**************************************************************************

$DOCUMENT_ROOT = "/";

ob_start();
session_cache_expire(18000000);
session_start();
header("pragma: no-cache");
header("expires: 0");
date_default_timezone_set('Asia/Seoul');

if($_SESSION[login_session] != "") {
	session_cache_expire(18000000);
	session_start();
}
$PHP_SELF = $_SERVER[PHP_SELF];

include_once ("dbconn.inc.php");


//코드를 이스케이프.

function escapeCode($str){
	$result = ltrim($str);
	$result = htmlspecialchars($result);
	$result = preg_replace("/\n/","<br/>",$result);
	$result = preg_replace("/\t/","&nbsp;&nbsp;&nbsp;&nbsp;",$result);
	$result = preg_replace("/#{/", "<span class='emph'>", $result);
	$result = preg_replace("/}#/", "</span>", $result);
	echo $result;
};

?>