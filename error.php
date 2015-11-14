<?php
$erid = $_GET['e'];

$names = [
	'404' => 'Error 404 : File not found.',
	'403' => 'Error 403 : Access denied.'
];

$message = '<h1>Move along, there is nothing to see here.</h1>';

if(!in_array($erid, array_keys($names)))
{
$pagename = 'Move along, move along.';
}
else
{
$message = str_ireplace(array_keys($names), $names, $erid);
$pagename = $message;
}


include('head.php');

echo '<h2>' . $message . '</h2><br><h4>Well done, you\'ve managed to break our servers.</h4>';

include('foot.php');
?>