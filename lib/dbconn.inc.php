<?
//**************************************************************************
// 화 일 명  : dbconn.inc.php
// 용    도   : DB 관련 라이브러리
//**************************************************************************

// web site connect string 
$DB_HOST = "10.13.228.6";
$DB_USER = "root";
$DB_PASS = "dnpqvywns!!!";
$DB_NAME = "OVEN";


// db connection
function db_connect($host="", $user="", $pass="", $name="") {
	global $mysql_connect;
	global $DB_HOST, $DB_USER, $DB_PASS, $DB_NAME; 

	if ($host=="") {
		$host		= $DB_HOST;	$user	= $DB_USER;	$pass	= $DB_PASS;	$name	= $DB_NAME;
	}
	
	if (!$mysql_connect) {
		$mysql_connect = mysql_connect($host, $user, $pass) or fnc_error("dberror01", $_SERVER[REQUEST_URI]); 
		mysql_select_db($name, $mysql_connect) or fnc_error("dberror02", $_SERVER[REQUEST_URI]); 
		mysql_query('set session character_set_connection=utf8;');
		mysql_query('set names utf8'); 

	}

	return $mysql_connect; 
}


// db query 
function db_query($pQuery, $pConnect = "") {
	global $mysql_connect, $GLOBAL_VAR;
	$temp_connect = ($pConnect == "") ? $mysql_connect : $pConnect;
	
	$result = mysql_query($pQuery, $temp_connect);

	if (!$result) {
		echo $pQuery;
		echo "<br><b>에러가발생하였습니다.</b><br>에러메세지 : <font color='FF0000'>".mysql_error()."</font>"; 
		exit;
	}	
	
	if ($GLOBAL_VAR[DB_DEBUG]) {
		echo "<b style='color:ff0000'>$pQuery</b><br>";
	}
	return $result;
}

// db_result; 
function db_result($pResult, $pRow = 0, $pCol = 0) {
	return mysql_result($pResult, $pRow, $pCol);
}


// db_num_rows; 
function db_num_rows($pResult) {
	return mysql_num_rows($pResult);
}

// db_insert_id
function db_insert_id() {
	return mysql_insert_id();
}

// db_fetch_array; 
function db_fetch_array($pResult) {
	return mysql_fetch_array($pResult);
}

// db_free_result; 
function db_free_result($pResult) {
	mysql_free_result($pResult);
}

// db next index (auto increment value); 
function db_nextidx($tablename) {	
	global $mysql_connect;
	if ($mysql_connect) {
		$query = "SHOW TABLE STATUS LIKE '".$tablename."' ";
		$arrdata = db_fetch_array(db_query($query));
		$result = $arrdata[Auto_increment];

	} else {
		echo "DB CONNECTION ERROR";
		exit;
	}

	return $result; 
}


// db disconnect
function db_disconnect($pConnect = "") {
	global $mysql_connect;
	if ($pConnect == "") 	{
		if ($mysql_connect) {
			mysql_close($mysql_connect);
			$mysql_connect = "";
		}
	}
	else {
		mysql_close($pConnect);
	}
}
?>