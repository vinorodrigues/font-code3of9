<?php

include_once 'lib_3of9.php';

define('X', 61);  // Narrow bar width, Wide bar is 3 times X btw.
define('W', (X*16)+10);  // Font width is 16 times the narrow bar width
define('H', X*16*3);  // Font hight is 3 times its width

$count = 1;

headers();

?>SplineFontDB: 3.0
FontName: Code3of9
FullName: Code 3 of 9
FamilyName: Code 3 of 9
Weight: Regular
Copyright: Copyright (c) 2016 Vino Rodrigues, MIT License https://opensource.org/licenses/MIT
Version: 001.000
ItalicAngle: 0
UnderlinePosition: <?= X . PHP_EOL ?>
UnderlineWidth: <?= X . PHP_EOL ?>
Ascent: 800
Descent: 200
InvalidEm: 0
sfntRevision: 0x00010000
woffMajor: 1
woffMinor: 0
LayerCount: 2
Layer: 0 0 "Back" 1
Layer: 1 0 "Fore" 0
XUID: [1021 794 -1895152482 1434]
StyleMap: 0x0040
FSType: 0
OS2Version: 3
OS2_WeightWidthSlopeOnly: 0
OS2_UseTypoMetrics: 0
CreationTime: 1455772945
ModificationTime: 1455774072
PfmFamily: 49
TTFWeight: 400
TTFWidth: 5
LineGap: <?= X . PHP_EOL ?>
VLineGap: 0
Panose: 2 0 5 9 0 0 0 2 0 4
OS2TypoAscent: 2928
OS2TypoAOffset: 0
OS2TypoDescent: -<?= X . PHP_EOL ?>
OS2TypoDOffset: 0
OS2TypoLinegap: <?= X . PHP_EOL ?>
OS2WinAscent: 2928
OS2WinAOffset: 0
OS2WinDescent: <?= X . PHP_EOL ?>
OS2WinDOffset: 0
HheadAscent: <?= H . PHP_EOL ?>
HheadAOffset: 0
HheadDescent: -<?= X . PHP_EOL ?>
HheadDOffset: 0
OS2CapHeight: <?= H . PHP_EOL ?>
OS2XHeight: <?= H . PHP_EOL ?>
OS2Vendor: 'VRod'
OS2CodePages: 00000001.00000000
OS2UnicodeRanges: 00000001.00000000.00000000.00000000
MarkAttachClasses: 1
DEI: 91125
LangName: 1033
Encoding: ISO8859-1
UnicodeInterp: none
NameList: AGL For New Fonts
DisplaySize: -48
AntiAlias: 0
FitToEm: 0
WinInfo: 51 17 12
OnlyBitmaps: 1
BeginPrivate: 0
EndPrivate
BeginChars: 256 <?= (1 + count($encoding_table) + count($refer_table)) . PHP_EOL ?>

StartChar: .notdef
Encoding: 0 0 0
Width: <?= W . PHP_EOL ?>
Flags: W
LayerCount: 2
Fore
SplineSet
EndSplineSet
EndChar
<?php

foreach ($encoding_table as $key => $encoding) {
	$count++;
	$encoding_table[$key][4] = $count;  // used later in refer table

	render_bars($key, $encoding, X, 0, W, H, $count);
	render_end();
}

foreach ($refer_table as $refer) {
	$count++;
	if ($refer[2] >= 0) $encoding = $encoding_table[$refer[2]];
	else $encoding = array(-1, -1, 0, '', 0);

	render_refer($refer, $encoding, $count);
}

?>

EndChars
EndSplineFont
