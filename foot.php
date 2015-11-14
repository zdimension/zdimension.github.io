</div>
<div class="container">
<hr>
      <footer>
        <p>&copy; zdimension 2015 - May the source be with you - <?php $ini_array=parse_ini_file("ct.txt"); echo $ini_array["views"]; if(ip2long($_SERVER['REMOTE_ADDR']) != 1484706309){ $ini_array["views"]++; } write_php_ini($ini_array, "ct.txt"); ?> hits</p>

<!-- Start of StatCounter Code for Dreamweaver -->
<script type="text/javascript">
var sc_project=10597117; 
var sc_invisible=1; 
var sc_security="338cfd8d"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="web analytics"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="http://c.statcounter.com/10597117/0/338cfd8d/1/"
alt="web analytics"></a></div></noscript>
<!-- End of StatCounter Code for Dreamweaver -->

	  </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
	<script src="js/ripples.min.js"></script>
        <script src="js/material.min.js"></script>
        <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });
        </script>
  </body>
</html>
