<?PHP
function curry($function, ...$arguments) {
	
	$reflection = new ReflectionFunction($function);
	$funcArgs  = $reflection->getParameters();
	
	if (count($funcArgs) === count($arguments)) {
		return $function(...$arguments);
	}
	
	return function(...$args) use ($function, $arguments) 
	{ 
		$arguments = array_merge($arguments, $args);
		return curry($function, ...$arguments);
	}; 
}