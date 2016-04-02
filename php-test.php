<?php
@include_once 'lib-code3of9/lib-code3of9.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Code 3 of 9 Font</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="css/code3of9.css">

	<style>
		th { text-align: center; }
	</style>

</head>
<body>
	<div class="container"><div class="row"><div class="col-md-12">
	<h1>Code3of9 PHP Library</h1>

	<h4>Encode full-ASCII to Code 39 charset</h4>
	<p>
	<span class="barcode barcode-md"><?php echo str_code39e('HTTP://C1K.IT/v'); ?></span><br>
	<code>str_code39e('HTTP://C1K.IT/v')</code>
	</p>

	<h4>Encode Code 39 charset with checksum</h4>
	<p>
	<span class="barcode barcode-md"><?php echo str_code39_check('CODE-39'); ?></span><br>
	<code>str_code39_check('CODE-39')</code>
	</p>

	<h4>Get creative</h4>
	<p>
	<span class="code39 barcode-md barcode-box"><?php

	$s = 'CODE-39';
	echo '_*';  // start
	echo '<b>' . $s . '</b>';
	echo code39_check( $s );
	echo '*_';  // stop

	?></span><br>
	<i class="text-muted">(See the source code, line <?php echo __LINE__ - 7; ?>)</i>
	</p>

	</div></div></div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
