// SPDX-License-Identifier: GPL-3.0

pragma solidity 0.8.20;

contract Storage {

	uint256 variable1;
	uint256 variable2;
	uint256 variable3;
	uint256 variable4;
	uint256 variable5;

	/* 5 functions */
	function store1(uint256 value) public {
		variable1 = value;
	}

	function store2(uint256 value) public {
		variable2 = value;
	}

	function store3(uint256 value) public {
		variable3 = value;
	}

	function store4(uint256 value) public {
		variable4 = value;
	}

	function store5(uint256 value) public {
		variable5 = value;
	}

}