<?php

require __DIR__ . '/../vendor/autoload.php';

$ref = new ReflectionClass('Underbar\\Eager');
$categoryPattern = '/\*\s+@category\s+(Collections|Arrays|Parallel|Objects|Chaining)|^$/';
$varargsPattern = '/\*\s+@varargs/';

echo '<?php', PHP_EOL;
echo "namespace {$ref->getNamespaceName()};", PHP_EOL;
echo 'trait Enumerable{', PHP_EOL;

foreach ($ref->getMethods() as $method) {
    $docComment = $method->getDocComment();
    $isMatchedCategory = preg_match($categoryPattern, $docComment);
    $isVarargs = preg_match($varargsPattern, $docComment);

    if (!$method->isPublic()
        || !$isMatchedCategory
        || strpos($method->getName(), '_') === 0) {
        continue;
    }

    $args = array('$this' => '$this');
    foreach ($method->getParameters() as $i => $param) {
        if ($i === 0) {
            continue;
        }

        $arg = '';
        if ($param->isPassedByReference()) {
            $arg .= '&';
        }
        $variable = '$' . chr(ord('a') + $i - 1);
        $arg .= $variable;
        if ($param->isOptional()) {
            $arg .= '=';
            $arg .= var_export($param->getDefaultValue(), true);
        }
        $args[$variable] = $arg;
    }

    if ($method->returnsReference()) {
        echo "function &{$method->getName()}(";
    } else {
        echo "function {$method->getName()}(";
    }
    echo implode(',', array_slice($args, 1));
    echo '){';

    if ($isVarargs) {
        echo "return call_user_func_array('{$ref->getName()}::{$method->getName()}', array_merge(array(\$this), func_get_args()));";
    } else {
        echo "return Eager::{$method->getName()}(";
        echo implode(',', array_keys($args));
        echo ');';
    }

    echo '}', PHP_EOL;
}

echo <<<EOF
function lazy(){return Lazy::chain(\$this);}
}
EOF;
