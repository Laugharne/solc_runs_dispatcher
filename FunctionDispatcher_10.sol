// SPDX-License-Identifier: GPL-3.0

pragma solidity 0.8.20;

contract Storage {

	uint256 variable1;
	uint256 variable2;
	uint256 variable3;
	uint256 variable4;
	uint256 variable5;
	uint256 variable6;
	uint256 variable7;
	uint256 variable8;
	uint256 variable9;
	uint256 variable10;

	/* 10 functions */
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

	function store6(uint256 value) public {
		variable6 = value;
	}

	function store7(uint256 value) public {
		variable7 = value;
	}

	function store8(uint256 value) public {
		variable8 = value;
	}

	function store9(uint256 value) public {
		variable9 = value;
	}

	function store10(uint256 value) public {
		variable10 = value;
	}

}