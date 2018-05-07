<?php
function pipe(...$functions) {
	return function($initial) use($functions) { 
		return array_reduce($functions, function($init, $current) use ($initial) {
			return $current($init??$initial);
		});
	};
}