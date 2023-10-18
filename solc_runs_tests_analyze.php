<?php

$base_dir = __DIR__;
printf("%s\n", $base_dir);

$tag_1_str = "    tag_1:";
$tag_2_str = "    tag_2:";
$tag_inner = "    tag_";


for( $f=4; $f <= 15; $f++) {


	for($run = 200; $run <= 1000; $run += 100) {
		$output = "{$base_dir}/output/{$run}_{$f}";
		$file_name = "{$output}/Storage.evm";
		printf("%s\n", $file_name);
		$lines    = file($file_name);
		$nn_lines = count( $lines);

		$tag_1_line = 0;
		for( $l = 0; $l < $nn_lines; $l++)  {
			$line = $lines[$l];
			if( strpos( $line, $tag_1_str) === false) { continue;}
			$tag_1_line = $l;
			break;
		}

		$tag_2_line = 0;
		for( $l = $tag_1_line+1;  $l < $nn_lines; $l++)  {
			$line = $lines[$l];
			if( strpos( $line, $tag_2_str) === false) {continue;}
			$tag_2_line = $l;
			break;
		}

		if( ($tag_1_line == 0) || ($tag_2_line == 0)) {
			printf("tag_1 {$tag_1_line}\n");
			printf("tag_2 {$tag_2_line}\n");
			printf("\nEXIT\n\n");
			exit(1);
		}

		$nn_split = 0;
		for( $l = $tag_1_line+1; $l < $tag_2_line; $l++) {
			$line = $lines[$l];
			if( strpos( $line, $tag_inner) === false) {continue;}
			$line = trim($line);
			if( substr( $line, -1) != ":") {continue;}
			printf(">{$line}\n");
			$nn_split++;
		}

		printf("#function={$f}\trun={$run}\t{$nn_split}\n");

	}

	
}

?>