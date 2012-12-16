<html>

<head>
<title>Sorter</title>
</head>

<body>

<h1><center>Sorter</center></h1>


<?php

// Do we have post data?
if (isset($_REQUEST['num_items']))
{ 
	// Get number of items
	$numberOfItems = $_REQUEST['num_items'];

	// Get each item and stuff into a collection
	for ($iteratorIndex = 0; $iteratorIndex < $numberOfItems; $iteratorIndex++)
	{
		$itemCollection[] = $_REQUEST['item' . $iteratorIndex];
	}

	// Sort the item collection
	if (sort($itemCollection))
	{ ?>
		<h3>The sorted items are shown below</h3>
		<?php
		foreach($itemCollection as $item)
		{ 	
			echo $item . "<br />";
		}
	}
}

?>

<br />
<a href="start.php">Menu</a>

</body>

</html>
