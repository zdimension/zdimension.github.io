<?php $pagename="USBFastBoot"; include('head.php'); ?>
<div class="page-header">
	<h1>USBFastBoot <small><small>Seriously, who reads those small texts?</small></small></h1>
</div>
<div class="container">
	<h2>What is USBFastBoot?</h2>
	<p>
	USBFastBoot is a small utility that helps you to quickly test your bootable USBs or disk images. 
	In fact, currently it works for drives (USB, HDD and CD/DVD), ISO (cd image) and IMG (floppy image).
	It simply adds a context menu item "Boot on QEMU" that you can click to... boot on QEMU.
	Here's the installer :
	<br><br>
	<img class="img-thumbnail" src="images/usbfastboot_installer.png"/>
	<br><br>
	And here's what it looks in the menu :
	<br><br>
	<img class="img-thumbnail" src="images/menuufb.png"/>
	<br><br>
	<? $f='ufb1inst'; include('download.php'); ?>. (4.10 MB, installer). It requires the .NET Framework.
	</p>
</div>
<?php include('foot.php'); ?>