<?php

$begin = "// SPDX-License-Identifier: GPL-3.0

pragma solidity 0.8.20;

contract Storage {

";

$variable_template = "	uint256 variable%d;
";


$function_template = "	function store%d(uint256 value) public {
		variable%d = value;
	}

";

$end = "}";

for( $f=4; $f <= 15; $f++) {
	$file_name = sprintf("FunctionDispatcher_%d.sol", $f);
	printf("%s\n", $file_name);

	$variables = "";
	$functions = sprintf("\n\t/* %d functions */\n", $f);
	for($j=1; $j<=$f; $j++){
		$variables .= sprintf($variable_template, $j);
		$functions .= sprintf($function_template, $j, $j);
	}
	//printf("%s\n", $functions);

	$output =$begin
			.$variables
			.$functions
			.$end;

	$fd = fopen( $file_name, "w");
	fprintf($fd, "%s", $output);
	fclose( $fd);
//	printf("%s\n", $output);
	
}

?>