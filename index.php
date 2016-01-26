<?php
defined('_JEXEC') or die;

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

// Load optional rtl Bootstrap css and Bootstrap bugfixes
JHtmlBootstrap::loadCss($includeMaincss = true);

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<jdoc:include type="head" />
	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
	<![endif]-->
	<link href="css/bootstrap-rtl.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<script src="js/respond.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
</head>
<body>

	<!-- Menu & logo & Navigation !-->
	<div class="container">
		<header class="row1">
			<div class="col-lg-2">
				<a href="/"><img src="img/logo.png" alt="marketing-era"></img></a>
			</div>
			<div class="col-lg-10"><br> 
				<jdoc:include type="modules" name="search" style="html5" />
			</div>
		</header>
		<div class="row2">
			<nav class="col-lg-12">
				<jdoc:include type="modules" name="nav" style="html5" />
			</nav>
		</div>
	</div>
	
    <!-- ----------------------------------------------- --!>
	<!-- New Mosaic !-->
	<div class="container tiles">
		<div class="grid effect-1" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 200 }' >
            <div class="grid-item grid-item--width2"> 
                <div class="image">
                <img src="img/400x.png" alt="" />
                <h3>Colorful Tile Wide<br>Test Image<br>Text jljljljlkw</h3>
                </div>
            </div>
            <div class="grid-item"> 
                <div class="image">
                    <img src="img/200x.png" alt="" />
                    <h3>Colorful Tile<br>Test Image<br>Text 1djklsakw</h3>
                </div>
            </div>
            <div class="grid-item"> 
                <div class="image">
                    <img src="img/200x2.png" alt="" />
                    <h3>Colorful Tile 2<br>Test Image<br>Text jljljl</h3>
                </div>
            </div>
            <div class="grid-item"> <div class="image">
                    <img src="img/400x2.png" alt="" />
                    <h3>Green Tile<br>Test Image<br>Text jkl;l</h3>
                </div>
            </div>
            <div class="grid-item"> 
                  <div class="image">
                    <img src="img/200x4.png" alt="" />
                    <h3>Colorful Tile 2<br>Test Image<br>Text jljljl</h3>
                  </div>
            </div>
            <div class="grid-item"> 
                <div class="image">
                    <img src="img/200x3.png" alt="" />
                    <h3>Colorful Tile<br>Test Image<br>Text 1djklsakw</h3>
                </div>
            </div>
            <div class="grid-item grid-item--width2"> 
                <div class="image">
                <img src="img/400xw.png" alt="" />
                <h3>Colorful Tile Wide<br>Test Image<br>Text jljljljlkw</h3>
                </div>
            </div>
        </div>
	</div>



	<!-- Content section of the website !-->

	<div class="container content">
		<div class="col-lg-3">
			<jdoc:include type="modules" name="left" style="html5" />
		</div>
		<div class="col-lg-9">
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
	</div>

	<!-- footer !-->
	<footer>
		<div class="container footer">
			<div class="row">
				<p>تمامی حقوق این سایت برای "عصر بازاریابی" محفوظ است.</p>
				<p>هرگونه استفاده از محتوای 
				این سایت با ذکر منبع و درج لینک مطلب مجاز است. </p>
				<jdoc:include type="modules" name="footer" style="html5" />
			</div>
		</div>
	</footer>

	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>
