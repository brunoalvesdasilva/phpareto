### Functional utility library for php, basead in Pareto.js

- Only 2 core functions
- Written in php
- Encourages immutability


## Example

```php
require './src/index.php';

$sum = function($num1, $num2) { return $num1+$num2; };

echo curry($sum, 2, 2); // 4
echo curry($sum, 2)(2); // 4
echo curry($sum)(2)(2); // 4
```

## Misc
Se você quiser adicionar uma nova função ou reescrever uma função baseada no Pareto.js, abra uma issue e explique o motivo.
