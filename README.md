# font-code3of9
## Code 3 of 9 Font

A PHP code that generates FontForge source for a Code 3 of 9 Font set.

The font comes in two "weights", namely regular and bold.

* The regular font renders the barcode encoding.

  ![*1234*](./doc/eg_r.png "33")

* The bold font renders the barcode and human readable encoding.

  ![*1234*](./doc/eg_b.png)


## Compile and Generate, Hints

* On OSX, use `./build.sh` to generate *.sfd* source files.

* To reinstall fonts in OSX, remember to clear the font cache:

  `sudo atsutil databases -remove`

* Use FontForge to generate the font file.  Select _"OpenType (CCF)"_ when you "Generate Fonts..."



## How to use the fonts

* Select _'Code 3 of 9'_ font.

* Remember most bar codes have a leader and trailer with the data in-between.
With _3 of 9_ one uses the _'*' (asterisk)_ character.  So to encode _'1234'_ you will need to encode it as:

  `*1234*`

  You can also use parenthesis, brackets, braces or less-that/greater-than pairs:

  `(1234)`
  `[1234]`
  `{1234}`
  `<1234>`


*
