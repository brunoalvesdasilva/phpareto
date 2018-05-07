<?php
function memoize($function) {
	return function(...$arguments) use ($function) {
		static $any = [];
	
		$key = serialize($arguments);
		
		if (isset($any[$key])) {
			return $any[$key];
		}
		
		return $any[$key] = $function(...$arguments);
	};	
}