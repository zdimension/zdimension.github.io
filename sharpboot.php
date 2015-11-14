<?php  $pagename="SharpBoot"; include('head.php'); ?>
<div class="page-header">
	<h1>SharpBoot <small><small>Yet another free alternative to Xboot, WinSetupFromUsb, SARDU and others</small></small></h1>
</div>
<div class="container">
	<img class="img-thumbnail" src="images/sharpboot_frm.png"/>
	<h2>What is SharpBoot?</h2>
	<p>
	SharpBoot is a small utility for creating multiboot ISO or USB.
	You just need to drag-n-drop some iso files inside, and it automatically adds description and category (for supported ISO files). 
	You can also choose a background image (or use default) and a screen resolution (640x480, 800x600, 1024x768).
	It uses Syslinux or Grub4Dos (you can choose) for the menu, and it can install directly to an USB key (without generating an ISO file).<br><br>
	<? $f='shb'; include('download.php'); ?>. (6.06 MB, portable exe, English/Français/Deutsch/Română). It requires the .NET Framework 4.0.
	</p>
</div>
<?php include('foot.php'); ?>