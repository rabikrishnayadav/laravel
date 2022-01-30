<?php 

// function for print data
if (!function_exists('print_data')) {
	function print_data($data){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
}

// function for formatted date

if (!function_exists('get_formated_date')) {
	function get_formated_date($date, $format){
		$formattedDate = date($format, strtotime($date));
		return $formattedDate;
	}
}