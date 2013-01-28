<?
include("../lib/common.inc.php");

$ip = $_SESSION["addr"];
$info = $_POST["info"]; 
$regidate = date("Y-m-d H:i:s");

if($ip != "127.0.0.1" && $ip != "192.168.161.129"){
	db_connect();
	
	//파일 저장.
	$table = "DOUGH_LOG";
	$query_log = "insert into $table set log_ip='$ip', log_info='$info', log_regidate='$regidate'";
	$result_log = db_query($query_log);
	
	db_disconnect();
};
?>



