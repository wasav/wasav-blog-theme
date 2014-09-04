<?php

	function getContentAverageReadingTime($content){
	
		$word = str_word_count(strip_tags($content));
		$m = floor($word / 200);
		$s = floor($word % 200 / (200 / 60));
		
		$est = $m . ' min';
		
		return $est;
	}
