	<?php
class Order
{
	public function getAll()
	{
		return implode(',', get_object_vars($this));
	}
}
try {	
    // Get the connection instance
    $pdo = new PDO('mysql:host=localhost;dbname=phpcourse', 'vagrant', 'vagrant');
    // Set error mode attribute
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// Execute a one-off SQL statement and get a statement object
    $stmt = $pdo->query('SELECT * FROM orders');
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Order');
	// Returns an associative array indexed by column name
    while ($obj = $stmt->fetch()) {
		echo $obj->getAll() . "\n";
	}
} catch (PDOException $e ){
    // Handle exception...
}
