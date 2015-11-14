<?php $pagename="Home"; include('head.php'); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hey!</h1>
        <p>You've just entered my website. You will find many, many things on it. You can start by clicking on the button below.</p>
        <p><a class="btn btn-primary btn-lg" href="https://i.imgflip.com/pj31t.jpg" role="button">Enter my website</a>
		<a class="btn btn-material-blue btn-lg" href="https://www.youtube.com/user/zippedfire" role="button">YouTube channel</a>
		<a class="btn btn-material-light-blue btn-lg" href="https://github.com/zdimension/" role="button">GitHub page</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4" style="width: 31.5%;">
		  <img class="img-thumbnail" src="images/usbfastboot_installer.png" />
          <h2>USBFastBoot</h2>
          <p>USBFastBoot is a small utility that helps you to quickly test your bootable USBs or disk images. </p>
          <p><a class="btn btn-default" href="usbfastboot.php" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
		  <img class="img-thumbnail" src="images/sharpboot_frm.png" />
          <h2>SharpBoot</h2>
          <p>SharpBoot is a small utility for creating multiboot ISO or USB. </p>
          <p><a class="btn btn-default" href="sharpboot.php" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4" style="width: 35%;">
			<img class="img-thumbnail" src="https://avatars1.githubusercontent.com/u/13839977?v=3" style="height: 239px;" />
          <h2>Hassium</h2>
          <p>Hassium is a programming language written in C# for the heck of it. The syntax is a lot like C mixed with Python and it is very easy to learn to program in it. I didn't create it, I just contribute lots of code to it.</p>
          <p><a class="btn btn-default" href="https://github.com/HassiumTeam/Hassium" role="button">View on Github &raquo;</a><a class="btn btn-default" href="http://www.hassiumlang.com" role="button">Official website &raquo;</a></p>
        </div>
      </div>
	</div>
<?php include('foot.php'); ?>