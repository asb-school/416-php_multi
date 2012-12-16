

<html>

<head>
<title>Sorter</title>
</head>

<body>

<h1><center>Sorter</center></h1>

<h3>Enter the items you want to sort</h3>
<br />

<?php 


// Check to see if we have post data
if (isset($_POST['num_items']))
{
	// Save to local variable for easier coding
	$numItemsToSort = $_POST['num_items'];

	// Check to see if it is an integer
	if (is_numeric($numItemsToSort))
	{ ?>
		<form action="sort_items.php" method="post">

		<?php
		// Create forms for items to sort
		for ($iteratorIndex = 0; $iteratorIndex < $numItemsToSort; $iteratorIndex++)
		{ ?>
			<!-- Display item number -->
			<label>Item <?php echo $iteratorIndex + 1; ?> to sort</label>

			<!-- Display the input text field -->
			<input type="text" name="item<?php echo $iteratorIndex; ?>" />
			<br />

		<?php } ?>

		<input type="hidden" name="num_items" value="<?php echo $numItemsToSort; ?>" />

		<p>I made a mistake! <a href="./num_items.php">Go back</a></p>

		<input type="submit" value="Submit" />
		</form>
	<?php }
	else
	{
		echo "User did not input a valid number. You should go here: <a href=\"./num_items.php\">Enter Number of Items</a>";
	}
}
else
{
	echo "You have reached this page out of sequence. You should go here: <a href=\"./num_items.php\">Enter Number of Items</a>";
}

?>



</body>
</html>