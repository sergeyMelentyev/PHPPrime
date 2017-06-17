<?php

// types
gettype($str);		// "string"
gettype($int);		// "integer"
gettype($bool);		// "boolean"
gettype($x);		// "NULL"
is_string($str);	// "1"
is_integer($int);	// "1"
is_bool($bool);		// "1"
is_null($x);		// ""

// type cohesion
$x = "str";
settype($x, "integer");		// with side effect, will change type of "$x"
$y = (int)$x;		// without side effect, will convert a copy of "$x"

// variable declaration
$number = 10;
const NAME = "Sergey";
$n = "name"; $$n = "Sergey";		// $name = "Sergey";
unset($name);

// pointers
$val = &$number;		// 10

// strings
$str = "str"
echo "text ${str}s";		// "strs"
$first = $str{0};		// get first char
$last = $str{strlen($str)-1};		// get last char
$str{strlen($str)-1} = "R";		// "stR"

$strs = $str . "word";		// string concatenation
$strs = "$str $str";		// the same, will not work with const
