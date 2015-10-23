<?php
function displayUsers($count) {
	$i = 1;
	$result = '';
	while ($i <= $count) {	
		// use the factory to create a Faker\Generator instance
		$faker = Faker\Factory::create();	
		// generate data by accessing properties of faker object
		$result .= "<h4>" . $faker->name . "</h4><br />";
		if (isset($_POST['address'])) {
			$result .= "<i>" . $faker->address . "</i><br />";
		}
		if (isset($_POST['blurb'])) {
			$result .= $faker->text . "<br />";
		}
		$result .= "<br />";
		$result .= "<hr>";
		$i++;
	}      
		return $result;
}  

	// function will create Lorem Ipsum text into paragraph form
	function displayParagraphs($count) {
		$result = '';
		// object is created
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($count);
		// loop to create user requested number of paragraphs
		for ($i=0; $i < $count; $i++) {
			$result .= "<p>" . $paragraphs[$i] . "</p>";
		}
		return $result;
	}
?>