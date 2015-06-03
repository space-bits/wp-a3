
			<!-- ########## Footer ########## -->
			<footer class="wrapper brown-bg round-last">
				<div id="copyright" class="half-wrapper">
					<span>&copy;2015 </span>
					<span>Andre Ribas (<a href="http://titan.csit.rmit.edu.au/~s3530481/wp/">s3530481</a>) &amp; </span>
					<span>Robert Laine-Wyllie (<a href="http://titan.csit.rmit.edu.au/~s3433096/wp/">s3433096</a>)</span>
		        </div>
		        <div id="validators" class="text-right half-wrapper">
		        	<span>Validators:</span>
		    		<span>
		    			<a href="http://validator.w3.org/check?uri=referer">html</a> |
		    			<a href="http://jigsaw.w3.org/css-validator/check/referer">css</a>
					</span>
			    </div>
			</footer>
			<?php
				if (file_exists("/home/eh1/e54061/public_html/wp/debug.php")) {
					include_once("/home/eh1/e54061/public_html/wp/debug.php");
				} else {
					include_once("static/debug.php");
				} 
			?>
		</body>
</html>
