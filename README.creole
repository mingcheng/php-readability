= PHP Readability Library =

[[http://code.google.com/p/arc90labs-readability/|Readability.js by Arc90]]
ported to PHP.

PS: for Node.js port, [[https://github.com/arrix/node-readability/|pls check this]].


== Requirements ==

* PHP Version >= 5
* [[http://www.php.net/manual/en/book.dom.php|PHP has builded with DOM(Document Object Model)]]


== Live demo == 

http://lab.gracecode.com/readability/

== Example ==

{{{
require 'lib/Readability.inc.php';

$Readability     = new Readability($html, $html_input_charset); // default charset is utf-8
$ReadabilityData = $Readability->getContent();

echo "<h1>".$ReadabilityData['title']."</h1>";
echo $ReadabilityData['content'];
}}}

