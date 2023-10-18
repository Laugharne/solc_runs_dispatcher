<?php

$base_dir = __DIR__;
printf("%s\n", $base_dir);

for( $f=4; $f <= 15; $f++) {
	$file_name = sprintf("FunctionDispatcher_%d.sol", $f);
	printf("%s\n", $file_name);
	$sol_file = "{$base_dir}//{$file_name}";

	for($run = 200; $run <= 1000; $run += 100) {
		$output = "{$base_dir}/output/{$run}_{$f}";
		@mkdir($output, 0777);
		$cmd = "solc --asm --overwrite --optimize-runs {$run} -o {$output} {$sol_file}";
		printf("  %s\n", $cmd);
		system($cmd);
	}

	
}

?>