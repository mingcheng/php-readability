# PHP Readability Library

## Back the fun of reading

The PHP port of [[http://code.google.com/p/arc90labs-readability/|Readability.js by Arc90]].


## Requirements

* PHP Version >= 5
* [[http://www.php.net/manual/en/book.dom.php|PHP has builded with DOM(Document Object Model)]]


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



PS: For Node.js port, You can [[https://github.com/arrix/node-readability/|check this]].

