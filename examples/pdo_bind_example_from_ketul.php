<?php

try {
	// Get the connection instance
    $pdo = new PDO('mysql:host=localhost;dbname=phpcourse','vagrant','vagrant');
	// Set error mode attribute
    $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// Setup a one-off SQL statement and get a statement object
    $stmt = $pdo->prepare( 'Select firstname,lastname From customers
                            Where id = :id');
	// Print table
    $result = $stmt->execute([':id' => 2]);
	//  Print_r to test
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		var_dump($row);
	}
} catch (PDOException $e){
	//Handle error
	echo $e->getMessage();
}



//With Binding

try {
	// Get the connection instance
    $pdo = new PDO('mysql:host=localhost;dbname=phpcourse','vagrant','vagrant');
	// Set error mode attribute
    $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// Setup a one-off SQL statement and get a statement object
    $stmt = $pdo->prepare( 'Select id,firstname,lastname From customers
                            Where id= :id ');
    // NOTE: bindParam() requires a variable because it binds by reference!
    $id = 2;
    $stmt->bindParam(':id', $id);
    // Otherwise, if you just want to bind a value, use this:
    // $stmt->bindValue(':id', 2);
	// Print table
    $result = $stmt->execute();
	//  Print_r to test
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		var_dump($row);
	}
} catch (PDOException $e){
	//Handle error
	echo $e->getMessage();
}
