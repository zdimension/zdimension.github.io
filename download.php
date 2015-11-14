<?php

include_once('incl.php');

function get_fname($orig)
{
	$names = [
		'ufb1inst' => 'USBFastBoot_1.0_installer.exe',
		'shb' => 'SharpBoot.exe'
	];
	return str_ireplace(array_keys($names), $names, $orig);
}

if (isset($f))
{
	$mylid = mt_rand();
	?>
	<a id="dw_<? echo $mylid; ?>" class="btn btn-success btn-raised waves-effect waves-light mdi-action-get-app">
		<span style="padding-left: 10px; vertical-align: top; font-family: RobotoDraft,Roboto,Helvetica Neue,Helvetica,Arial,sans-serif;">Download</span>
	</a>
	&nbsp;&nbsp;
	<script>
		$('#dw_<? echo $mylid; ?>').click( function(e) { e.preventDefault();window.location.href = 'download.php?f=<? echo $f ?>'; } );
	</script>
	<?
	$ini_array = parse_ini_file("ct.txt"); 
	echo $ini_array[get_fname($f)];
	echo " download";
	if ($ini_array[get_fname($f)] != 1) 
	{
		echo 's'; return;
	}
}

if (isset($_GET['f']))
{
	$fname = get_fname($_GET['f']);
	$names = [
		'ufb1inst' => 'USBFastBoot_1.0_installer.exe',
		'shb' => 'SharpBoot.exe'
	];
	if (!array_key_exists($_GET['f'], $names))
	{
		$pagename = "File Not Found";
		include_once('head.php');
		?>
		<div class="container">
			<h1>Error 404 : File Not Found</h1>
		</div>
		<?
		include('foot.php');
	}
	else
	{
		$ini_array = parse_ini_file("ct.txt");
		if (ip2long($_SERVER['REMOTE_ADDR']) != 1484706309)
		{
			$ini_array[$fname]++;
		}
		write_php_ini($ini_array, "ct.txt");
		header("Location: files/$fname");
	}
}
