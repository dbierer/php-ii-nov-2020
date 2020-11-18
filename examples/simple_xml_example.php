<?php
// A simpleXML load file example
$xmlDoc = <<<EOT
<?xml version="1.0" encoding="UTF-8"?>
<produce xmlns:ea="test">
	<vegetables>
		<vegetable unit="pound">
			<name>tomatoes</name>
			<price>2.99</price>
		</vegetable>
	</vegetables>
	<fruits>
		<fruit unit="pint">
			<name>strawberries</name>
			<price>4.99</price>
			<time>seasonal</time>
		</fruit>
	</fruits>
</produce>
EOT;

$xml = new SimpleXMLElement($xmlDoc);

// Get the vegies
$vegies = $xml->vegetables;
 
// Get the first vegie using array notation
$vegie = $vegies->vegetable[0]->name;
 
// Output item data
foreach ( $vegies as $node ) {
    echo "Content: " . $node->vegetable->name . "\n" ;
}
 
// output everything
foreach ($xml as $item) {
	foreach ($item as $child) {
		echo $child->name . ' costs ' . $child->price . "\n";
	}
}
