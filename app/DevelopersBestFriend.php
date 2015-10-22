<?php

namespace App;

class DevelopersBestFriend {
	
	public function displayParagraphs($count) {
		$result = '';
		// $count = $request->input('count');
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($count);
		for ($i=0; $i < $count; $i++) {
			$result .= "<p>" . $paragraphs[$i] . "</p>";
		}
		return $result;
	}
}