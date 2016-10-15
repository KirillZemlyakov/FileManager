<?php require 'header.php'; ?>
<div class="mainblock2">
	<div class="titlemain">
		<p>$_SERVER content:</p>
	</div>
	<div class="content1 server">
		
	<span><?php

$indices = array(
	'PHP_SELF',
	'argv',
	'argc',
	'GATEWAY_INTERFACE',
	'SERVER_ADDR',
	'SERVER_NAME',
	'SERVER_SOFTWARE',
	'SERVER_PROTOCOL',
	'REQUEST_METHOD',
	'REQUEST_TIME',
	'REQUEST_TIME_FLOAT',
	'QUERY_STRING',
	'DOCUMENT_ROOT',
	'HTTP_ACCEPT',
	'HTTP_ACCEPT_CHARSET',
	'HTTP_ACCEPT_ENCODING',
	'HTTP_ACCEPT_LANGUAGE',
	'HTTP_CONNECTION',
	'HTTP_HOST',
	'HTTP_REFERER',
	'HTTP_USER_AGENT',
	'HTTPS',
	'REMOTE_ADDR',
	'REMOTE_HOST',
	'REMOTE_PORT',
	'REMOTE_USER',
	'REDIRECT_REMOTE_USER',
	'SCRIPT_FILENAME',
	'SERVER_ADMIN',
	'SERVER_PORT',
	'SERVER_SIGNATURE',
	'PATH_TRANSLATED',
	'SCRIPT_NAME',
	'REQUEST_URI',
	'PHP_AUTH_DIGEST',
	'PHP_AUTH_USER',
	'PHP_AUTH_PW',
	'AUTH_TYPE',
	'PATH_INFO',
	'ORIG_PATH_INFO'
);

echo '<table style="border-spacing: 2em;">' . "\n";

	foreach ($indices as $index) {
		$result = (isset( $_SERVER[$index] )) ?
			('<td>' . $_SERVER[$index] . '</td>') :
			('<td>-</td>');
		echo '<tr><td>$_SERVER[\'<i style="color: red;">' . $index . '</i>\']</td>' . $result . '</tr>' . "\n";
	}

echo '</table>';

/*foreach ($_POST as $value) {
	echo $value;
}

foreach ($_GET as $value) {
	echo $value;
}*/

?></span>

	</div>
<?php require 'footer.php'; ?>