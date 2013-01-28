<?

$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
$is_mobile = preg_match('/(ios|android)/i', $ua);

?>


<meta charset="utf-8">
<title>Dough</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<script src="./jslib/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="./jslib/jquery-ui-1.8.24.custom.min.js" type="text/javascript"></script>
<script src="./jslib/dough.0.1.0.js" type="text/javascript"></script>
<script src="./js/event-dough.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="./archive/dough-0.1.1.css"/>
<link rel="stylesheet" type="text/css" href="./archive/dough-responsible-0.1.1.css"/>
<link rel="stylesheet" type="text/css" href="./css/common.css"/>