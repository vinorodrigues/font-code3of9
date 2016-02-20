<?php

global $encoding_table, $refer_table;

$encoding_table = array(
	0 => array('0', 'nnnwwnwnn', 48, 'zero'),
	1 => array('1', 'wnnwnnnnw', 49, 'one'),
	2 => array('2', 'nnwwnnnnw', 50, 'two'),
	3 => array('3', 'wnwwnnnnn', 51, 'three'),
	4 => array('4', 'nnnwwnnnw', 52, 'four'),
	5 => array('5', 'wnnwwnnnn', 53, 'five'),
	6 => array('6', 'nnwwwnnnn', 54, 'six'),
	7 => array('7', 'nnnwnnwnw', 55, 'seven'),
	8 => array('8', 'wnnwnnwnn', 56, 'eight'),
	9 => array('9', 'nnwwnnwnn', 57, 'nine'),
	10 => array('A', 'wnnnnwnnw', 65, 'A'),
	11 => array('B', 'nnwnnwnnw', 66, 'B'),
	12 => array('C', 'wnwnnwnnn', 67, 'C'),
	13 => array('D', 'nnnnwwnnw', 68, 'D'),
	14 => array('E', 'wnnnwwnnn', 69, 'E'),
	15 => array('F', 'nnwnwwnnn', 70, 'F'),
	16 => array('G', 'nnnnnwwnw', 71, 'G'),
	17 => array('H', 'wnnnnwwnn', 72, 'H'),
	18 => array('I', 'nnwnnwwnn', 73, 'I'),
	19 => array('J', 'nnnnwwwnn', 74, 'J'),
	20 => array('K', 'wnnnnnnww', 75, 'K'),
	21 => array('L', 'nnwnnnnww', 76, 'L'),
	22 => array('M', 'wnwnnnnwn', 77, 'M'),
	23 => array('N', 'nnnnwnnww', 78, 'N'),
	24 => array('O', 'wnnnwnnwn', 79, 'O'),
	25 => array('P', 'nnwnwnnwn', 80, 'P'),
	26 => array('Q', 'nnnnnnwww', 81, 'Q'),
	27 => array('R', 'wnnnnnwwn', 82, 'R'),
	28 => array('S', 'nnwnnnwwn', 83, 'S'),
	29 => array('T', 'nnnnwnwwn', 84, 'T'),
	30 => array('U', 'wwnnnnnnw', 85, 'U'),
	31 => array('V', 'nwwnnnnnw', 86, 'V'),
	32 => array('W', 'wwwnnnnnn', 87, 'W'),
	33 => array('X', 'nwnnwnnnw', 88, 'X'),
	34 => array('Y', 'wwnnwnnnn', 89, 'Y'),
	35 => array('Z', 'nwwnwnnnn', 90, 'Z'),
	36 => array('-', 'nwnnnnwnw', 45, 'hyphen'),
	37 => array('.', 'wwnnnnwnn', 46, 'period'),
	38 => array(' ', 'nwwnnnwnn', 32, 'space'),
	39 => array('$', 'nwnwnwnnn', 36, 'dollar'),
	40 => array('/', 'nwnwnnnwn', 47, 'slash'),
	41 => array('+', 'nwnnnwnwn', 43, 'plus'),
	42 => array('%', 'nnnwnwnwn', 37, 'percent'),
	43 => array('*', 'nwnnwnwnn', 42, 'asterisk'),
	44 => array('(', 'nwnnwnwnn', 40, 'parenright', 0, 'r'),
	45 => array(')', 'nwnnwnwnn', 41, 'parenleft', 0, 'l'),
);

$refer_table = array(
	array('a', 97, 10),
	array('b', 98, 11),
	array('c', 99, 12),
	array('d', 100, 13),
	array('e', 101, 14),
	array('f', 102, 15),
	array('g', 103, 16),
	array('h', 104, 17),
	array('i', 105, 18),
	array('j', 106, 19),
	array('k', 107, 20),
	array('l', 108, 21),
	array('m', 109, 22),
	array('n', 110, 23),
	array('o', 111, 24),
	array('p', 112, 25),
	array('q', 113, 26),
	array('r', 114, 27),
	array('s', 115, 28),
	array('t', 116, 29),
	array('u', 117, 30),
	array('v', 118, 31),
	array('w', 119, 32),
	array('x', 120, 33),
	array('y', 121, 34),
	array('z', 122, 35),

	array('exclam', 33, 43),
	array('bracketright', 91, 44),
	array('bracketleft', 93, 45),
	array('braceleft', 123, 44),
	array('braceright', 125, 45),
	array('less', 60, 44),
	array('greater', 62, 45),
	array('backslash', 92, 40),

	array('quotedbl', 34, -1),
	array('numbersign', 35, -1),
	array('ampersand', 38, -1),
	array('quotesingle', 39, -1),
	array('comma', 44, -1),
	array('colon', 58, -1),
	array('semicolon', 59, -1),
	array('equal', 61, -1),
	array('question', 63, -1),
	array('at', 64, -1),
	array('asciicircum', 94, -1),
	array('underscore', 95, -1),
	array('grave', 96, -1),
	array('bar', 124, -1),
	array('asciitilde', 126, -1),
);

function headers() {
	header('Content-type: text/plain');
	header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
	header('Cache-Control: post-check=0, pre-check=0', false);
	header('Pragma: no-cache');
	header('Expires: ' . gmdate("D, d M Y H:i:s") . ' GMT');
	header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
}

function render_bars($key, $encoding, $xx, $yy, $ww, $hh, $count) {

	$offs = intval($xx / 2);
	echo PHP_EOL;
?>
StartChar: <?= $encoding[3] . PHP_EOL ?>
Encoding: <?= $encoding[2] . ' ' . $encoding[2] . ' ' . $count . PHP_EOL ?>
Width: <?= $ww . PHP_EOL ?>
Flags: W
LayerCount: 2
Fore
SplineSet
<?php
	$y = ($key < 44) ? $yy : 0;
	for ($j = 0; $j < 9; $j++) {
		$val = substr($encoding[1], $j, 1);
		$len = ($val == 'w' ? ($xx * 3) : $xx);
		if ($j%2==false) {
			echo $offs . ' ' . $hh . ' m 1' . PHP_EOL;
			echo ' ' . ($offs+$len) . ' ' . $hh . ' l 1' . PHP_EOL;
			echo ' ' . ($offs+$len) . ' ' . $y . ' l 1' .  PHP_EOL;
			echo ' ' . $offs . ' ' . $y . ' l 1' . PHP_EOL;
			echo ' ' . $offs . ' ' . $hh . ' l 1' . PHP_EOL;
		}
		$offs += $len + 1;
	}
}

function render_end() {
?>
EndSplineSet
EndChar
<?php
}

function render_refer($refer, $encoding, $count) {
	echo PHP_EOL;
	?>
StartChar: <?= $refer[0] . PHP_EOL ?>
Encoding: <?= $refer[1] . ' ' . $refer[1] . ' ' . $count . PHP_EOL ?>
Width: <?= W . PHP_EOL ?>
Flags: W
LayerCount: 2
Fore
Refer: <?= $encoding[4] . ' ' . $encoding[2] . ' N 1 0 0 1 0 0 2' . PHP_EOL ?>
EndChar
<?php
}
