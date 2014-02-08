# PHP Readability Library

## Back the fun of reading

The PHP port of [Readability.js by Arc90](http://code.google.com/p/arc90labs-readability/).


## Requirements

* PHP Version >= 5
* [PHP has builded with DOM(Document Object Model)](http://www.php.net/manual/en/book.dom.php)


## Live demo 

http://graceco.de/readability/


## Usage

```
require 'lib/Readability.inc.php';

$Readability     = new Readability($html, $html_input_charset); // default charset is utf-8
$ReadabilityData = $Readability->getContent(); // throws an exception when no suitable content is found

// You can see more params by var_dump($ReadabilityData);
echo "<h1>".$ReadabilityData['title']."</h1>";
echo $ReadabilityData['content'];
```



PS: For Node.js port, You can [check this](https://github.com/arrix/node-readability/).

