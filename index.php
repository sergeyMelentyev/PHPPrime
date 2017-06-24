<?php
function types() {
	gettype($str);		// "string"
	gettype($int);		// "integer"
	gettype($bool);		// "boolean"
	gettype($x);		// "NULL"
	is_string($str);	// "1"
	is_integer($int);	// "1"
	is_bool($bool);		// "1"
	is_null($x);		// ""	
}
function cohesion() {
	$x = "str";
	settype($x, "integer");		// with side effect, will change type of "$x"
	$y = (int)$x;		// without side effect, will convert a copy of "$x"
}
function variable() {
	$number = 10;
	const NAME = "Sergey";
	$n = "name"; $$n = "Sergey";		// $name = "Sergey";
	unset($name);

	global $name;						// affect global var from inner scope
	$GLOBALS['name'] = "Sergey";		// the same as above

	static $count = 0;					// will save state on new stack call
}
function pointer() {
	$number = 10;
	$val = &$number;		// 10	
}
function string() {
	$str = "str"
	echo "text ${str}s";		// "strs"
	$first = $str{0};		// get first char
	$last = $str{strlen($str)-1};		// get last char
	$str{strlen($str)-1} = "R";		// "stR"

	$strs = $str . "word";		// string concatenation
	$strs = "$str $str";		// the same, will not work with const
}
function array() {
	// assosiated array
	$user = [
		"name" => "Sergey",
		"login" => "root",
		"pass" => 123,
		true
	];
	$user["name"];		// "Sergey"
	$user[0];			// 1
	count($user);		// 4
	var_dump($user);	// echo index, data type and value

	// add new value
	$user[] = "Olga";	// without index specification

	// iterator
	foreach ($user as $val) {}				// only values
	foreach ($user as $key => $val) {}		// key-values pares

	// pass by reference
	$vals = [1,2,3];
	foreach ($vals as &$v) { $v *= 2; }		// [2,4,6]
}
function func() {
	// default parameters
	function name($name; $value = 1) {}

	// arguments array
	func_num_args();					// return number of args
	func_get_arg(0);					// return first arg

	// strongly typed args
	function name(array $param) {}		// only arg of type array can be applied to func
	function name(callable $param) {}	// only arg of type callabe can be applied to func

	// return several values
	function nums() { return [1,2,3]; }
	list($one, $two, $three) = nums();
	$two = nums()[1];					// get secong value from returned arr
	# also pass args by ref and use for results before return statement
}
function scope() {
	
}
