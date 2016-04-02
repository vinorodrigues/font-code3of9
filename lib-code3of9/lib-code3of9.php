<?php

/**
 * Encode a string to Code 39 Extended (Full ASCII)
 */
function str_code39e($string) {
	static $c39e = array(
		'%U', '$A', '$B', '$C', '$D', '$E', '$F', '$G', '$H', '$I',
		'$J', '$K', '$L', '$M', '$N', '$O', '$P', '$Q', '$R', '$S',
		'$T', '$U', '$V', '$W', '$X', '$Y', '$Z', '%A', '%B', '%C',
		'%D', '%E', ' ', '/A', '/B', '/C', '/D', '/E', '/F', '/G',
		'/H', '/I', '/J', '/K', '/L', '-', '.', '/O', '0', '1', '2',
		'3', '4', '5', '6', '7', '8', '9', '/Z', '%F', '%G', '%H', '%I',
		'%J', '%V', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
		'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W',
		'X', 'Y', 'Z', '%K', '%L', '%M', '%N', '%O', '%W', '+A', '+B',
		'+C', '+D', '+E', '+F', '+G', '+H', '+I', '+J', '+K', '+L',
		'+M', '+N', '+O', '+P', '+Q', '+R', '+S', '+T', '+U', '+V',
		'+W', '+X', '+Y', '+Z', '%P', '%Q', '%R', '%S', '%X' );
	$ret = '';
	$len = strlen( $string );
	for ( $i=0; $i < $len; $i++ ) { $ret .= $c39e[ ord($string[$i]) ]; }
	return $ret;
}

/**
 * Calculate the MOD 43 check character
 * @see http://www.acordex.com/consulting/BarCode39.html
 */
function code39_check( $string ) {
	static $c39 = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ-. $/+%';
	$checksum = 0;
	$len = strlen( $string );
	for ( $i=0; $i < $len; ++$i ) { $checksum += strpos( $c39, $string[$i] ); }
	return $c39[ $checksum % 43 ];
}

/**
 * Encode the Code 39 with checksum
 */
function str_code39_check( $string ) {
	return $string . code39_check( $string );
}

/**
 * Encode the Code 39 Extended with checksum
 */
function str_code39e_check( $string ) {
	$ret = str_code39e( $string );
	return $ret . code39_check( $ret );
}

/* ----- eof ----- */
