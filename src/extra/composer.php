<?PHP
function composer(...$functions) {
	return function($value) use ($functions) {
		return array_reduce($functions, function($curry, $current) use ($value) {
			return $current($curry??$value);
		});
	};
}