<?
$page = $_GET["page"];

include("lib/common.inc.php");

$_SESSION["addr"] = $_SERVER["REMOTE_ADDR"];

if(!$page)
	$page = "intro";
?>

<!DOCTYPE html>
<html lang="kr">
<head>
<?

include("view/common/header.php");

?>
</head>
<body class="responsible">
<?

include("view/common/nav-top.php");

include("view/".$page.".php");
?>


</body>
</html>
