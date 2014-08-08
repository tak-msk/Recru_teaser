<?php

class Debug {
	static public function printr ($obj, $return = false) {
		$data = '';
		$data .= '<pre>';
		$data .= print_r($obj, true);
		$data .= '</pre>';
		if ($return) {
			return $data;
		}
		print($data);
	}
	static public function dump ($obj) {
		echo '<pre>';
		var_dump($obj);
		echo '</pre>';
	}
}
