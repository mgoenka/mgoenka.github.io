<?php
	session_start();
	$maxround = 26;
	$curround = 26;

	$gate = $_REQUEST['gate'];

	do
	{

	if ($_SESSION['counter'] == 0)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 49)
			$pgate1 = "1";
		else if ($pirate1 < 89)
			$pgate1 = "2";
		else if ($pirate1 < 108)
			$pgate1 = "3";
		else if ($pirate1 < 135)
			$pgate1 = "4";
		else if ($pirate1 < 140)
			$pgate1 = "5";
		else if ($pirate1 < 221)
			$pgate1 = "6";
		else if ($pirate1 < 257)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 49)
			$pgate2 = "1";
		else if ($pirate2 < 89)
			$pgate2 = "2";
		else if ($pirate2 < 108)
			$pgate2 = "3";
		else if ($pirate2 < 135)
			$pgate2 = "4";
		else if ($pirate2 < 140)
			$pgate2 = "5";
		else if ($pirate2 < 221)
			$pgate2 = "6";
		else if ($pirate2 < 257)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 49)
			$pgate3 = "1";
		else if ($pirate3 < 89)
			$pgate3 = "2";
		else if ($pirate3 < 108)
			$pgate3 = "3";
		else if ($pirate3 < 135)
			$pgate3 = "4";
		else if ($pirate3 < 140)
			$pgate3 = "5";
		else if ($pirate3 < 221)
			$pgate3 = "6";
		else if ($pirate3 < 257)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 1)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 51)
			$pgate1 = "1";
		else if ($pirate1 < 92)
			$pgate1 = "2";
		else if ($pirate1 < 110)
			$pgate1 = "3";
		else if ($pirate1 < 136)
			$pgate1 = "4";
		else if ($pirate1 < 137)
			$pgate1 = "5";
		else if ($pirate1 < 219)
			$pgate1 = "6";
		else if ($pirate1 < 256)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 51)
			$pgate2 = "1";
		else if ($pirate2 < 92)
			$pgate2 = "2";
		else if ($pirate2 < 110)
			$pgate2 = "3";
		else if ($pirate2 < 136)
			$pgate2 = "4";
		else if ($pirate2 < 137)
			$pgate2 = "5";
		else if ($pirate2 < 219)
			$pgate2 = "6";
		else if ($pirate2 < 256)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 51)
			$pgate3 = "1";
		else if ($pirate3 < 92)
			$pgate3 = "2";
		else if ($pirate3 < 110)
			$pgate3 = "3";
		else if ($pirate3 < 136)
			$pgate3 = "4";
		else if ($pirate3 < 137)
			$pgate3 = "5";
		else if ($pirate3 < 219)
			$pgate3 = "6";
		else if ($pirate3 < 256)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 2)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 52)
			$pgate1 = "1";
		else if ($pirate1 < 93)
			$pgate1 = "2";
		else if ($pirate1 < 109)
			$pgate1 = "3";
		else if ($pirate1 < 134)
			$pgate1 = "4";
		else if ($pirate1 < 134)
			$pgate1 = "5";
		else if ($pirate1 < 217)
			$pgate1 = "6";
		else if ($pirate1 < 254)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 52)
			$pgate2 = "1";
		else if ($pirate2 < 92)
			$pgate2 = "2";
		else if ($pirate2 < 109)
			$pgate2 = "3";
		else if ($pirate2 < 134)
			$pgate2 = "4";
		else if ($pirate2 < 134)
			$pgate2 = "5";
		else if ($pirate2 < 217)
			$pgate2 = "6";
		else if ($pirate2 < 254)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 52)
			$pgate3 = "1";
		else if ($pirate3 < 93)
			$pgate3 = "2";
		else if ($pirate3 < 109)
			$pgate3 = "3";
		else if ($pirate3 < 134)
			$pgate3 = "4";
		else if ($pirate3 < 134)
			$pgate3 = "5";
		else if ($pirate3 < 217)
			$pgate3 = "6";
		else if ($pirate3 < 254)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 3)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 56)
			$pgate1 = "1";
		else if ($pirate1 < 99)
			$pgate1 = "2";
		else if ($pirate1 < 108)
			$pgate1 = "3";
		else if ($pirate1 < 129)
			$pgate1 = "4";
		else if ($pirate1 < 129)
			$pgate1 = "5";
		else if ($pirate1 < 214)
			$pgate1 = "6";
		else if ($pirate1 < 251)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 56)
			$pgate2 = "1";
		else if ($pirate2 < 99)
			$pgate2 = "2";
		else if ($pirate2 < 108)
			$pgate2 = "3";
		else if ($pirate2 < 129)
			$pgate2 = "4";
		else if ($pirate2 < 129)
			$pgate2 = "5";
		else if ($pirate2 < 214)
			$pgate2 = "6";
		else if ($pirate2 < 251)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 56)
			$pgate3 = "1";
		else if ($pirate3 < 99)
			$pgate3 = "2";
		else if ($pirate3 < 108)
			$pgate3 = "3";
		else if ($pirate3 < 129)
			$pgate3 = "4";
		else if ($pirate3 < 129)
			$pgate3 = "5";
		else if ($pirate3 < 214)
			$pgate3 = "6";
		else if ($pirate3 < 251)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 4)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 62)
			$pgate1 = "1";
		else if ($pirate1 < 106)
			$pgate1 = "2";
		else if ($pirate1 < 106)
			$pgate1 = "3";
		else if ($pirate1 < 121)
			$pgate1 = "4";
		else if ($pirate1 < 121)
			$pgate1 = "5";
		else if ($pirate1 < 209)
			$pgate1 = "6";
		else if ($pirate1 < 245)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 62)
			$pgate2 = "1";
		else if ($pirate2 < 106)
			$pgate2 = "2";
		else if ($pirate2 < 106)
			$pgate2 = "3";
		else if ($pirate2 < 121)
			$pgate2 = "4";
		else if ($pirate2 < 121)
			$pgate2 = "5";
		else if ($pirate2 < 209)
			$pgate2 = "6";
		else if ($pirate2 < 245)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 62)
			$pgate3 = "1";
		else if ($pirate3 < 106)
			$pgate3 = "2";
		else if ($pirate3 < 106)
			$pgate3 = "3";
		else if ($pirate3 < 121)
			$pgate3 = "4";
		else if ($pirate3 < 121)
			$pgate3 = "5";
		else if ($pirate3 < 209)
			$pgate3 = "6";
		else if ($pirate3 < 245)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 5)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 25)
			$pgate1 = "1";
		else if ($pirate1 < 63)
			$pgate1 = "2";
		else if ($pirate1 < 104)
			$pgate1 = "3";
		else if ($pirate1 < 141)
			$pgate1 = "4";
		else if ($pirate1 < 141)
			$pgate1 = "5";
		else if ($pirate1 < 226)
			$pgate1 = "6";
		else if ($pirate1 < 273)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 25)
			$pgate2 = "1";
		else if ($pirate2 < 63)
			$pgate2 = "2";
		else if ($pirate2 < 104)
			$pgate2 = "3";
		else if ($pirate2 < 141)
			$pgate2 = "4";
		else if ($pirate2 < 141)
			$pgate2 = "5";
		else if ($pirate2 < 226)
			$pgate2 = "6";
		else if ($pirate2 < 273)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 25)
			$pgate3 = "1";
		else if ($pirate3 < 63)
			$pgate3 = "2";
		else if ($pirate3 < 104)
			$pgate3 = "3";
		else if ($pirate3 < 141)
			$pgate3 = "4";
		else if ($pirate3 < 141)
			$pgate3 = "5";
		else if ($pirate3 < 226)
			$pgate3 = "6";
		else if ($pirate3 < 273)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 6)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 27)
			$pgate1 = "1";
		else if ($pirate1 < 66)
			$pgate1 = "2";
		else if ($pirate1 < 102)
			$pgate1 = "3";
		else if ($pirate1 < 138)
			$pgate1 = "4";
		else if ($pirate1 < 138)
			$pgate1 = "5";
		else if ($pirate1 < 222)
			$pgate1 = "6";
		else if ($pirate1 < 269)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 27)
			$pgate2 = "1";
		else if ($pirate2 < 66)
			$pgate2 = "2";
		else if ($pirate2 < 102)
			$pgate2 = "3";
		else if ($pirate2 < 138)
			$pgate2 = "4";
		else if ($pirate2 < 138)
			$pgate2 = "5";
		else if ($pirate2 < 222)
			$pgate2 = "6";
		else if ($pirate2 < 269)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 27)
			$pgate3 = "1";
		else if ($pirate3 < 66)
			$pgate3 = "2";
		else if ($pirate3 < 102)
			$pgate3 = "3";
		else if ($pirate3 < 138)
			$pgate3 = "4";
		else if ($pirate3 < 138)
			$pgate3 = "5";
		else if ($pirate3 < 222)
			$pgate3 = "6";
		else if ($pirate3 < 269)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 7)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 29)
			$pgate1 = "1";
		else if ($pirate1 < 69)
			$pgate1 = "2";
		else if ($pirate1 < 101)
			$pgate1 = "3";
		else if ($pirate1 < 137)
			$pgate1 = "4";
		else if ($pirate1 < 137)
			$pgate1 = "5";
		else if ($pirate1 < 221)
			$pgate1 = "6";
		else if ($pirate1 < 267)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 29)
			$pgate2 = "1";
		else if ($pirate2 < 69)
			$pgate2 = "2";
		else if ($pirate2 < 101)
			$pgate2 = "3";
		else if ($pirate2 < 137)
			$pgate2 = "4";
		else if ($pirate2 < 137)
			$pgate2 = "5";
		else if ($pirate2 < 221)
			$pgate2 = "6";
		else if ($pirate2 < 267)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 29)
			$pgate3 = "1";
		else if ($pirate3 < 69)
			$pgate3 = "2";
		else if ($pirate3 < 101)
			$pgate3 = "3";
		else if ($pirate3 < 137)
			$pgate3 = "4";
		else if ($pirate3 < 137)
			$pgate3 = "5";
		else if ($pirate3 < 221)
			$pgate3 = "6";
		else if ($pirate3 < 267)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 8)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 31)
			$pgate1 = "1";
		else if ($pirate1 < 71)
			$pgate1 = "2";
		else if ($pirate1 < 99)
			$pgate1 = "3";
		else if ($pirate1 < 133)
			$pgate1 = "4";
		else if ($pirate1 < 133)
			$pgate1 = "5";
		else if ($pirate1 < 219)
			$pgate1 = "6";
		else if( $pirate1 < 264)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 31)
			$pgate2 = "1";
		else if ($pirate2 < 71)
			$pgate2 = "2";
		else if ($pirate2 < 99)
			$pgate2 = "3";
		else if ($pirate2 < 133)
			$pgate2 = "4";
		else if ($pirate2 < 133)
			$pgate2 = "5";
		else if ($pirate2 < 219)
			$pgate2 = "6";
		else if ($pirate2 < 264)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 31)
			$pgate3 = "1";
		else if ($pirate3 < 71)
			$pgate3 = "2";
		else if ($pirate3 < 99)
			$pgate3 = "3";
		else if ($pirate3 < 133)
			$pgate3 = "4";
		else if ($pirate3 < 133)
			$pgate3 = "5";
		else if ($pirate3 < 219)
			$pgate3 = "6";
		else if ($pirate3 < 264)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 9)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 33)
			$pgate1 = "1";
		else if ($pirate1 < 72)
			$pgate1 = "2";
		else if ($pirate1 < 97)
			$pgate1 = "3";
		else if ($pirate1 < 129)
			$pgate1 = "4";
		else if ($pirate1 < 129)
			$pgate1 = "5";
		else if ($pirate1 < 220)
			$pgate1 = "6";
		else if ($pirate1 < 263)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 33)
			$pgate2 = "1";
		else if ($pirate2 < 72)
			$pgate2 = "2";
		else if ($pirate2 < 97)
			$pgate2 = "3";
		else if ($pirate2 < 129)
			$pgate2 = "4";
		else if ($pirate2 < 129)
			$pgate2 = "5";
		else if ($pirate2 < 220)
			$pgate2 = "6";
		else if ($pirate2 < 263)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 33)
			$pgate3 = "1";
		else if ($pirate3 < 72)
			$pgate3 = "2";
		else if ($pirate3 < 97)
			$pgate3 = "3";
		else if ($pirate3 < 129)
			$pgate3 = "4";
		else if ($pirate3 < 129)
			$pgate3 = "5";
		else if ($pirate3 < 220)
			$pgate3 = "6";
		else if ($pirate3 < 263)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 10)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 34)
			$pgate1 = "1";
		else if ($pirate1 < 72)
			$pgate1 = "2";
		else if ($pirate1 < 94)
			$pgate1 = "3";
		else if ($pirate1 < 122)
			$pgate1 = "4";
		else if ($pirate1 < 122)
			$pgate1 = "5";
		else if ($pirate1 < 219)
			$pgate1 = "6";
		else if ($pirate1 < 261)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 34)
			$pgate2 = "1";
		else if ($pirate2 < 72)
			$pgate2 = "2";
		else if ($pirate2 < 94)
			$pgate2 = "3";
		else if ($pirate2 < 122)
			$pgate2 = "4";
		else if ($pirate2 < 122)
			$pgate2 = "5";
		else if ($pirate2 < 219)
			$pgate2 = "6";
		else if ($pirate2 < 261)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 34)
			$pgate3 = "1";
		else if ($pirate3 < 72)
			$pgate3 = "2";
		else if ($pirate3 < 94)
			$pgate3 = "3";
		else if ($pirate3 < 122)
			$pgate3 = "4";
		else if ($pirate3 < 122)
			$pgate3 = "5";
		else if ($pirate3 < 219)
			$pgate3 = "6";
		else if ($pirate3 < 261)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 11)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 34)
			$pgate1 = "1";
		else if ($pirate1 < 71)
			$pgate1 = "2";
		else if ($pirate1 < 93)
			$pgate1 = "3";
		else if ($pirate1 < 119)
			$pgate1 = "4";
		else if ($pirate1 < 119)
			$pgate1 = "5";
		else if ($pirate1 < 219)
			$pgate1 = "6";
		else if ($pirate1 < 260)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 34)
			$pgate2 = "1";
		else if ($pirate2 < 71)
			$pgate2 = "2";
		else if ($pirate2 < 93)
			$pgate2 = "3";
		else if ($pirate2 < 119)
			$pgate2 = "4";
		else if ($pirate2 < 119)
			$pgate2 = "5";
		else if ($pirate2 < 219)
			$pgate2 = "6";
		else if ($pirate2 < 260)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 34)
			$pgate3 = "1";
		else if ($pirate3 < 71)
			$pgate3 = "2";
		else if ($pirate3 < 93)
			$pgate3 = "3";
		else if ($pirate3 < 119)
			$pgate3 = "4";
		else if ($pirate3 < 119)
			$pgate3 = "5";
		else if ($pirate3 < 219)
			$pgate3 = "6";
		else if ($pirate3 < 260)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 12)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 35)
			$pgate1 = "1";
		else if ($pirate1 < 64)
			$pgate1 = "2";
		else if ($pirate1 < 101)
			$pgate1 = "3";
		else if ($pirate1 < 113)
			$pgate1 = "4";
		else if ($pirate1 < 113)
			$pgate1 = "5";
		else if ($pirate1 < 213)
			$pgate1 = "6";
		else if ($pirate1 < 253)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 35)
			$pgate2 = "1";
		else if ($pirate2 < 64)
			$pgate2 = "2";
		else if ($pirate2 < 101)
			$pgate2 = "3";
		else if ($pirate2 < 113)
			$pgate2 = "4";
		else if ($pirate2 < 113)
			$pgate2 = "5";
		else if ($pirate2 < 213)
			$pgate2 = "6";
		else if ($pirate2 < 253)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 35)
			$pgate3 = "1";
		else if ($pirate3 < 64)
			$pgate3 = "2";
		else if ($pirate3 < 101)
			$pgate3 = "3";
		else if ($pirate3 < 113)
			$pgate3 = "4";
		else if ($pirate3 < 113)
			$pgate3 = "5";
		else if ($pirate3 < 213)
			$pgate3 = "6";
		else if ($pirate3 < 253)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}

	//Start Reward Structure 4
	else if ($_SESSION['counter'] == 13)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 26)
			$pgate1 = "1";
		else if ($pirate1 < 66)
			$pgate1 = "2";
		else if ($pirate1 < 88)
			$pgate1 = "3";
		else if ($pirate1 < 137)
			$pgate1 = "4";
		else if ($pirate1 < 139)
			$pgate1 = "5";
		else if ($pirate1 < 206)
			$pgate1 = "6";
		else if ($pirate1 < 247)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 26)
			$pgate2 = "1";
		else if ($pirate2 < 66)
			$pgate2 = "2";
		else if ($pirate2 < 88)
			$pgate2 = "3";
		else if ($pirate2 < 137)
			$pgate2 = "4";
		else if ($pirate2 < 139)
			$pgate2 = "5";
		else if ($pirate2 < 206)
			$pgate2 = "6";
		else if ($pirate2 < 247)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 26)
			$pgate3 = "1";
		else if ($pirate3 < 66)
			$pgate3 = "2";
		else if ($pirate3 < 88)
			$pgate3 = "3";
		else if ($pirate3 < 137)
			$pgate3 = "4";
		else if ($pirate3 < 139)
			$pgate3 = "5";
		else if ($pirate3 < 206)
			$pgate3 = "6";
		else if ($pirate3 < 247)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 14)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 24)
			$pgate1 = "1";
		else if ($pirate1 < 64)
			$pgate1 = "2";
		else if ($pirate1 < 83)
			$pgate1 = "3";
		else if ($pirate1 < 134)
			$pgate1 = "4";
		else if ($pirate1 < 134)
			$pgate1 = "5";
		else if ($pirate1 < 205)
			$pgate1 = "6";
		else if ($pirate1 < 246)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 24)
			$pgate2 = "1";
		else if ($pirate2 < 64)
			$pgate2 = "2";
		else if ($pirate1 < 83)
			$pgate1 = "3";
		else if ($pirate1 < 134)
			$pgate1 = "4";
		else if ($pirate1 < 134)
			$pgate1 = "5";
		else if ($pirate2 < 205)
			$pgate2 = "6";
		else if ($pirate2 < 246)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 24)
			$pgate3 = "1";
		else if ($pirate3 < 64)
			$pgate3 = "2";
		else if ($pirate1 < 83)
			$pgate1 = "3";
		else if ($pirate1 < 134)
			$pgate1 = "4";
		else if ($pirate1 < 134)
			$pgate1 = "5";
		else if ($pirate3 < 205)
			$pgate3 = "6";
		else if ($pirate3 < 246)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 15)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 20)
			$pgate1 = "1";
		else if ($pirate1 < 61)
			$pgate1 = "2";
		else if ($pirate1 < 76)
			$pgate1 = "3";
		else if ($pirate1 < 128)
			$pgate1 = "4";
		else if ($pirate1 < 128)
			$pgate1 = "5";
		else if ($pirate1 < 204)
			$pgate1 = "6";
		else if ($pirate1 < 245)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 20)
			$pgate2 = "1";
		else if ($pirate2 < 61)
			$pgate2 = "2";
		else if ($pirate2 < 76)
			$pgate2 = "3";
		else if ($pirate2 < 128)
			$pgate2 = "4";
		else if ($pirate2 < 128)
			$pgate2 = "5";
		else if ($pirate2 < 204)
			$pgate2 = "6";
		else if ($pirate2 < 245)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 20)
			$pgate3 = "1";
		else if ($pirate3 < 61)
			$pgate3 = "2";
		else if ($pirate3 < 76)
			$pgate3 = "3";
		else if ($pirate3 < 128)
			$pgate3 = "4";
		else if ($pirate3 < 128)
			$pgate3 = "5";
		else if ($pirate3 < 204)
			$pgate3 = "6";
		else if ($pirate3 < 245)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 16)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 14)
			$pgate1 = "1";
		else if ($pirate1 < 55)
			$pgate1 = "2";
		else if ($pirate1 < 61)
			$pgate1 = "3";
		else if ($pirate1 < 118)
			$pgate1 = "4";
		else if ($pirate1 < 118)
			$pgate1 = "5";
		else if ($pirate1 < 204)
			$pgate1 = "6";
		else if ($pirate1 < 245)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 14)
			$pgate2 = "1";
		else if ($pirate2 < 55)
			$pgate2 = "2";
		else if ($pirate2 < 61)
			$pgate2 = "3";
		else if ($pirate2 < 118)
			$pgate2 = "4";
		else if ($pirate2 < 118)
			$pgate2 = "5";
		else if ($pirate2 < 204)
			$pgate2 = "6";
		else if ($pirate2 < 245)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 14)
			$pgate3 = "1";
		else if ($pirate3 < 55)
			$pgate3 = "2";
		else if ($pirate3 < 61)
			$pgate3 = "3";
		else if ($pirate3 < 118)
			$pgate3 = "4";
		else if ($pirate3 < 118)
			$pgate3 = "5";
		else if ($pirate3 < 204)
			$pgate3 = "6";
		else if ($pirate3 < 245)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 17)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 11)
			$pgate1 = "1";
		else if ($pirate1 < 53)
			$pgate1 = "2";
		else if ($pirate1 < 56)
			$pgate1 = "3";
		else if ($pirate1 < 116)
			$pgate1 = "4";
		else if ($pirate1 < 116)
			$pgate1 = "5";
		else if ($pirate1 < 203)
			$pgate1 = "6";
		else if ($pirate1 < 245)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 11)
			$pgate2 = "1";
		else if ($pirate2 < 53)
			$pgate2 = "2";
		else if ($pirate2 < 56)
			$pgate2 = "3";
		else if ($pirate2 < 116)
			$pgate2 = "4";
		else if ($pirate2 < 116)
			$pgate2 = "5";
		else if ($pirate2 < 203)
			$pgate2 = "6";
		else if ($pirate2 < 245)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 11)
			$pgate3 = "1";
		else if ($pirate3 < 53)
			$pgate3 = "2";
		else if ($pirate3 < 56)
			$pgate3 = "3";
		else if ($pirate3 < 116)
			$pgate3 = "4";
		else if ($pirate3 < 116)
			$pgate3 = "5";
		else if ($pirate3 < 203)
			$pgate3 = "6";
		else if ($pirate3 < 245)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 18)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 47)
			$pgate1 = "1";
		else if ($pirate1 < 76)
			$pgate1 = "2";
		else if ($pirate1 < 124)
			$pgate1 = "3";
		else if ($pirate1 < 139)
			$pgate1 = "4";
		else if ($pirate1 < 178)
			$pgate1 = "5";
		else if ($pirate1 < 240)
			$pgate1 = "6";
		else if ($pirate1 < 263)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 47)
			$pgate2 = "1";
		else if ($pirate2 < 76)
			$pgate2 = "2";
		else if ($pirate2 < 124)
			$pgate2 = "3";
		else if ($pirate2 < 139)
			$pgate2 = "4";
		else if ($pirate2 < 178)
			$pgate2 = "5";
		else if ($pirate2 < 240)
			$pgate2 = "6";
		else if ($pirate2 < 263)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 47)
			$pgate3 = "1";
		else if ($pirate3 < 76)
			$pgate3 = "2";
		else if ($pirate3 < 124)
			$pgate3 = "3";
		else if ($pirate3 < 139)
			$pgate3 = "4";
		else if ($pirate3 < 178)
			$pgate3 = "5";
		else if ($pirate3 < 240)
			$pgate3 = "6";
		else if ($pirate3 < 263)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 19)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 42)
			$pgate1 = "1";
		else if ($pirate1 < 71)
			$pgate1 = "2";
		else if ($pirate1 < 112)
			$pgate1 = "3";
		else if ($pirate1 < 136)
			$pgate1 = "4";
		else if ($pirate1 < 167)
			$pgate1 = "5";
		else if ($pirate1 < 231)
			$pgate1 = "6";
		else if ($pirate1 < 261)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 42)
			$pgate2 = "1";
		else if ($pirate2 < 71)
			$pgate2 = "2";
		else if ($pirate2 < 112)
			$pgate2 = "3";
		else if ($pirate2 < 136)
			$pgate2 = "4";
		else if ($pirate2 < 167)
			$pgate2 = "5";
		else if ($pirate2 < 231)
			$pgate2 = "6";
		else if ($pirate2 < 261)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 42)
			$pgate3 = "1";
		else if ($pirate3 < 71)
			$pgate3 = "2";
		else if ($pirate3 < 112)
			$pgate3 = "3";
		else if ($pirate3 < 136)
			$pgate3 = "4";
		else if ($pirate3 < 167)
			$pgate3 = "5";
		else if ($pirate3 < 231)
			$pgate3 = "6";
		else if ($pirate3 < 261)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 20)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 40)
			$pgate1 = "1";
		else if ($pirate1 < 69)
			$pgate1 = "2";
		else if ($pirate1 < 108)
			$pgate1 = "3";
		else if ($pirate1 < 134)
			$pgate1 = "4";
		else if ($pirate1 < 161)
			$pgate1 = "5";
		else if ($pirate1 < 227)
			$pgate1 = "6";
		else if ($pirate1 < 260)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 40)
			$pgate2 = "1";
		else if ($pirate2 < 69)
			$pgate2 = "2";
		else if ($pirate2 < 108)
			$pgate2 = "3";
		else if ($pirate2 < 134)
			$pgate2 = "4";
		else if ($pirate2 < 161)
			$pgate2 = "5";
		else if ($pirate2 < 227)
			$pgate2 = "6";
		else if ($pirate2 < 260)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate1 < 40)
			$pgate3 = "1";
		else if ($pirate3 < 69)
			$pgate3 = "2";
		else if ($pirate3 < 108)
			$pgate3 = "3";
		else if ($pirate3 < 134)
			$pgate3 = "4";
		else if ($pirate3 < 161)
			$pgate3 = "5";
		else if ($pirate3 < 227)
			$pgate3 = "6";
		else if ($pirate3 < 260)
			$pgate3 = "7";
		else
			$pgate1 = "8";
	}
	else if ($_SESSION['counter'] == 21)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 39)
			$pgate1 = "1";
		else if ($pirate1 < 68)
			$pgate1 = "2";
		else if ($pirate1 < 106)
			$pgate1 = "3";
		else if ($pirate1 < 131)
			$pgate1 = "4";
		else if ($pirate1 < 155)
			$pgate1 = "5";
		else if ($pirate1 < 224)
			$pgate1 = "6";
		else if ($pirate1 < 259)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 39)
			$pgate2 = "1";
		else if ($pirate2 < 68)
			$pgate2 = "2";
		else if ($pirate2 < 106)
			$pgate2 = "3";
		else if ($pirate2 < 131)
			$pgate2 = "4";
		else if ($pirate2 < 155)
			$pgate2 = "5";
		else if ($pirate2 < 224)
			$pgate2 = "6";
		else if ($pirate2 < 259)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 39)
			$pgate3 = "1";
		else if ($pirate3 < 68)
			$pgate3 = "2";
		else if ($pirate3 < 106)
			$pgate3 = "3";
		else if ($pirate3 < 131)
			$pgate3 = "4";
		else if ($pirate3 < 155)
			$pgate3 = "5";
		else if ($pirate3 < 224)
			$pgate3 = "6";
		else if ($pirate3 < 259)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 22)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 38)
			$pgate1 = "1";
		else if ($pirate1 < 67)
			$pgate1 = "2";
		else if ($pirate1 < 105)
			$pgate1 = "3";
		else if ($pirate1 < 127)
			$pgate1 = "4";
		else if ($pirate1 < 148)
			$pgate1 = "5";
		else if ($pirate1 < 220)
			$pgate1 = "6";
		else if ($pirate1 < 258)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 38)
			$pgate2 = "1";
		else if ($pirate2 < 67)
			$pgate2 = "2";
		else if ($pirate2 < 105)
			$pgate2 = "3";
		else if ($pirate2 < 127)
			$pgate2 = "4";
		else if ($pirate2 < 148)
			$pgate2 = "5";
		else if ($pirate2 < 220)
			$pgate2 = "6";
		else if ($pirate2 < 258)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 38)
			$pgate3 = "1";
		else if ($pirate3 < 67)
			$pgate3 = "2";
		else if ($pirate3 < 105)
			$pgate3 = "3";
		else if ($pirate3 < 127)
			$pgate3 = "4";
		else if ($pirate3 < 148)
			$pgate3 = "5";
		else if ($pirate3 < 220)
			$pgate3 = "6";
		else if ($pirate3 < 258)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 23)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 37)
			$pgate1 = "1";
		else if ($pirate1 < 66)
			$pgate1 = "2";
		else if ($pirate1 < 105)
			$pgate1 = "3";
		else if ($pirate1 < 123)
			$pgate1 = "4";
		else if ($pirate1 < 142)
			$pgate1 = "5";
		else if ($pirate1 < 217)
			$pgate1 = "6";
		else if ($pirate1 < 257)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 37)
			$pgate2 = "1";
		else if ($pirate2 < 66)
			$pgate2 = "2";
		else if ($pirate2 < 105)
			$pgate2 = "3";
		else if ($pirate2 < 123)
			$pgate2 = "4";
		else if ($pirate2 < 142)
			$pgate2 = "5";
		else if ($pirate2 < 217)
			$pgate2 = "6";
		else if ($pirate2 < 257)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 37)
			$pgate3 = "1";
		else if ($pirate3 < 66)
			$pgate3 = "2";
		else if ($pirate3 < 105)
			$pgate3 = "3";
		else if ($pirate3 < 123)
			$pgate3 = "4";
		else if ($pirate3 < 142)
			$pgate3 = "5";
		else if ($pirate3 < 217)
			$pgate3 = "6";
		else if ($pirate3 < 257)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 24)
		{
			$pirate1 = rand(0, 300);
			$pirate2 = rand(0, 300);
			$pirate3 = rand(0, 300);

			if ($pirate1 < 36)
				$pgate1 = "1";
			else if ($pirate1 < 64)
				$pgate1 = "2";
			else if ($pirate1 < 104)
				$pgate1 = "3";
			else if ($pirate1 < 119)
				$pgate1 = "4";
			else if ($pirate1 < 137)
				$pgate1 = "5";
			else if ($pirate1 < 215)
				$pgate1 = "6";
			else if ($pirate1 < 256)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 36)
				$pgate2 = "1";
			else if ($pirate2 < 64)
				$pgate2 = "2";
			else if ($pirate2 < 104)
				$pgate2 = "3";
			else if ($pirate2 < 119)
				$pgate2 = "4";
			else if ($pirate2 < 137)
				$pgate2 = "5";
			else if ($pirate2 < 215)
				$pgate2 = "6";
			else if ($pirate2 < 256)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 36)
				$pgate3 = "1";
			else if ($pirate3 < 64)
				$pgate3 = "2";
			else if ($pirate3 < 104)
				$pgate3 = "3";
			else if ($pirate3 < 119)
				$pgate3 = "4";
			else if ($pirate3 < 137)
				$pgate3 = "5";
			else if ($pirate3 < 215)
				$pgate3 = "6";
			else if ($pirate3 < 256)
				$pgate3 = "7";
			else
				$pgate3 = "8";
	}

	else if ($_SESSION['counter'] == 25)
		{
			$pirate1 = rand(0, 300);
			$pirate2 = rand(0, 300);
			$pirate3 = rand(0, 300);

			if ($pirate1 < 30)
				$pgate1 = "1";
			else if ($pirate1 < 56)
				$pgate1 = "2";
			else if ($pirate1 < 104)
				$pgate1 = "3";
			else if ($pirate1 < 104)
				$pgate1 = "4";
			else if ($pirate1 < 117)
				$pgate1 = "5";
			else if ($pirate1 < 210)
				$pgate1 = "6";
			else if ($pirate1 < 252)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 30)
				$pgate2 = "1";
			else if ($pirate2 < 56)
				$pgate2 = "2";
			else if ($pirate2 < 104)
				$pgate2 = "3";
			else if ($pirate2 < 104)
				$pgate2 = "4";
			else if ($pirate2 < 117)
				$pgate2 = "5";
			else if ($pirate2 < 210)
				$pgate2 = "6";
			else if ($pirate2 < 252)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 30)
				$pgate3 = "1";
			else if ($pirate3 < 56)
				$pgate3 = "2";
			else if ($pirate3 < 104)
				$pgate3 = "3";
			else if ($pirate3 < 104)
				$pgate3 = "4";
			else if ($pirate3 < 117)
				$pgate3 = "5";
			else if ($pirate3 < 210)
				$pgate3 = "6";
			else if ($pirate3 < 252)
				$pgate3 = "7";
			else
				$pgate3 = "8";
	}


	} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

	if(!isset($_SESSION['gameid']))
	{
		//Code for combination generator
		//Specify data for index 0 at the beginning
		//Randomly generated indices are from 1 to 10...assigned as 0 to 9
		//Specify data for index $maxround at the end

		$_SESSION['gameid'] = rand(1, 26);
		//$_SESSION['gameid'] = 37;

		if ($_SESSION['gameid'] == 1)
			$_SESSION['combo'] = array(23,13,16,19,9,12,5,25,2,24,6,22,4,8,18,17,1,3,14,11,15,26,20,7,10,21,27);
		else if ($_SESSION['gameid'] == 2)
			$_SESSION['combo'] = array(23,16,9,13,5,19,12,2,25,24,22,4,6,18,8,1,17,14,15,3,20,11,10,26,21,7,27);
		else if ($_SESSION['gameid'] == 3)
			$_SESSION['combo'] = array(16,9,23,5,13,2,19,12,22,25,4,24,18,6,1,14,8,15,17,20,10,3,21,11,7,26,27);
		else if ($_SESSION['gameid'] == 4)
			$_SESSION['combo'] = array(9,5,16,23,2,13,19,22,12,4,18,25,24,1,14,6,15,20,8,10,17,21,7,3,26,11,27);
		else if ($_SESSION['gameid'] == 5)
			$_SESSION['combo'] = array(5,9,2,16,23,22,13,4,19,18,12,1,25,14,24,15,20,6,10,21,8,7,17,26,11,3,27);
		else if ($_SESSION['gameid'] == 6)
			$_SESSION['combo'] = array(2,5,9,16,22,23,4,18,13,19,1,12,14,15,25,20,24,10,21,6,7,26,8,11,17,3,27);
		else if ($_SESSION['gameid'] == 7)
			$_SESSION['combo'] = array(2,5,22,9,4,16,18,23,1,13,14,19,15,12,20,10,25,21,24,7,26,6,11,3,8,17,27);
		else if ($_SESSION['gameid'] == 8)
			$_SESSION['combo'] = array(2,22,4,5,18,9,16,1,23,14,15,13,20,19,10,12,21,7,25,26,24,11,3,6,17,8,27);
		else if ($_SESSION['gameid'] == 9)
			$_SESSION['combo'] = array(22,4,2,18,5,1,9,14,16,15,23,20,10,13,21,19,7,12,26,11,25,3,24,17,6,8,27);
		else if ($_SESSION['gameid'] == 10)
			$_SESSION['combo'] = array(22,4,18,2,1,14,5,15,9,20,16,10,23,21,7,13,26,19,11,12,3,25,17,24,8,6,27);
		else if ($_SESSION['gameid'] == 11)
			$_SESSION['combo'] = array(4,18,22,1,14,2,15,20,5,10,9,21,16,7,23,26,11,13,3,19,12,17,8,25,24,6,27);
		else if ($_SESSION['gameid'] == 12)
			$_SESSION['combo'] = array(18,4,1,22,14,15,20,2,10,21,5,7,9,26,16,11,23,3,13,17,19,8,12,6,25,24,27);
		else if ($_SESSION['gameid'] == 13)
			$_SESSION['combo'] = array(1,18,14,4,15,22,20,10,21,2,7,26,5,11,9,3,16,23,17,8,13,19,6,12,24,25,27);
		else if ($_SESSION['gameid'] == 14)
			$_SESSION['combo'] = array(1,14,15,18,20,4,10,22,21,7,26,2,11,3,5,9,17,16,8,23,6,13,19,24,12,25,27);
		else if ($_SESSION['gameid'] == 15)
			$_SESSION['combo'] = array(14,15,1,20,10,18,21,4,7,22,26,11,3,2,17,5,8,9,16,6,23,24,13,25,19,12,27);
		else if ($_SESSION['gameid'] == 16)
			$_SESSION['combo'] = array(15,20,14,10,1,21,7,18,26,4,11,22,3,17,2,8,5,6,9,16,24,23,25,13,12,19,27);
		else if ($_SESSION['gameid'] == 17)
			$_SESSION['combo'] = array(20,10,15,21,14,7,1,26,11,18,3,4,22,17,8,2,6,5,24,9,25,16,23,12,19,13,27);
		else if ($_SESSION['gameid'] == 18)
			$_SESSION['combo'] = array(10,21,20,7,15,26,14,11,1,3,18,17,4,8,22,6,2,24,25,5,9,12,16,19,23,13,27);
		else if ($_SESSION['gameid'] == 19)
			$_SESSION['combo'] = array(21,7,10,26,20,11,15,3,14,1,17,8,18,4,6,22,24,25,2,12,5,19,9,13,16,23,27);
		else if ($_SESSION['gameid'] == 20)
			$_SESSION['combo'] = array(7,26,21,11,10,3,20,15,17,14,8,1,6,18,4,24,22,25,12,2,19,13,5,9,23,16,27);
		else if ($_SESSION['gameid'] == 21)
			$_SESSION['combo'] = array(26,11,7,3,21,10,17,20,8,15,14,6,1,24,18,25,4,22,12,19,13,2,23,5,16,9,27);
		else if ($_SESSION['gameid'] == 22)
			$_SESSION['combo'] = array(11,3,26,7,17,21,8,10,20,6,15,14,24,1,25,18,12,4,19,22,13,23,2,16,9,5,27);
		else if ($_SESSION['gameid'] == 23)
			$_SESSION['combo'] = array(3,11,17,26,8,7,21,6,10,20,24,15,25,14,1,12,19,18,13,4,22,23,16,9,2,5,27);
		else if ($_SESSION['gameid'] == 24)
			$_SESSION['combo'] = array(17,3,8,11,26,6,7,21,24,10,25,20,15,12,14,19,1,13,18,23,4,16,22,9,5,2,27);
		else if ($_SESSION['gameid'] == 25)
			$_SESSION['combo'] = array(17,8,3,6,11,26,24,7,25,21,10,12,20,19,15,13,14,1,23,16,18,9,4,5,22,2,27);
		else if ($_SESSION['gameid'] == 26)
			$_SESSION['combo'] = array(8,17,6,3,24,11,25,26,7,12,21,19,10,13,20,15,23,14,16,1,9,5,18,4,2,22,27);


		else if ($_SESSION['gameid'] == 37)
			$_SESSION['combo'] = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37);


		$_SESSION['position'] = 1;
		$_SESSION['counter'] = $_SESSION['combo'][$_SESSION['position']] - 1;
		$_SESSION['won'] = 0;
		$_SESSION['lost'] = 0;
		$_SESSION['points'] = 0;
		$_SESSION['username'] = $_COOKIE['name'];
		$_SESSION['useremail'] = $_COOKIE['email'];
		$_SESSION['usergender'] = $_COOKIE['gender'];
		$_SESSION['usercountry'] = $_COOKIE['country'];
	}
	else
	{
		$_SESSION['position']++;
		$_SESSION['counter'] = $_SESSION['combo'][$_SESSION['position']] - 1;
		$i = 1;
		if(!isset($_SESSION['username']))
		{
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		}
	}

	if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}

	$_SESSION['selection'][$_SESSION['combo'][$_SESSION['position'] - 1]] = $gate;
	$_SESSION['timemillis'][$_SESSION['combo'][$_SESSION['position'] - 1]] = time()-$_SESSION['pretime'];
	$_SESSION['guard'][$_SESSION['combo'][$_SESSION['position'] - 1]][1] = $pgate1;
	$_SESSION['guard'][$_SESSION['combo'][$_SESSION['position'] - 1]][2] = $pgate2;
	$_SESSION['guard'][$_SESSION['combo'][$_SESSION['position'] - 1]][3] = $pgate3;


	$_SESSION['pretime'] = time();




	if (($gate == "") || ($gate == null))
	{
		$_SESSION['position']--;
		$_SESSION['counter'] = $_SESSION['combo'][$_SESSION['position']] - 1;
		$_SESSION['pretime'] = time();
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/"
      xmlns:fb="http://www.facebook.com/2008/fbml">


<head>

<meta name="google-site-verification" content="k7FHwFm9BvIqcIOqVtg-bAMkTaXC-CLs2RAtaqeypEc" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Keywords" content="mohit, goenka, mohitgoenka, mgoenka, moheet, goinka, gonka, castle, feedbacks, usc" />
<meta name="Description" content="This website is a place for curriculum as well as fun activities" />
<meta property="og:title" content="Mohit's Castle"/>
<meta property="og:type" content="activity"/>
<meta property="og:url" content="http://www.mohitgoenka.com"/>
<meta property="og:image" content="http://www.mohitgoenka.com/img/Castle.png"/>
<meta property="fb:admins" content="683925722"/>
<meta property="og:site_name" content="Mohit Goenka's Website"/>
<meta property="og:description" content="This website is a place for curriculum as well as fun activities"/>
<meta property="og:email" content="admin@mohitgoenka.com"/>

<!-- Your Site Title -->
<title  onload='right();'>Mohit's Castle</title>
<!-- END TITLE -->

<link rel="shortcut icon" href="http://www.mohitgoenka.com/Home/favicon.png" type="image/x-icon" />

<!-- CSS Style Sheets -->
<link rel="stylesheet" href="http://www.mohitgoenka.com/css/style.css" type="text/css" media="screen" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="green-theme" href="http://www.mohitgoenka.com/css/style2.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="blue-theme" href="http://www.mohitgoenka.com/css/style3.css" />
<!-- END CSS Style Sheet -->

<script type="text/javascript" src="http://www.mohitgoenka.com/index.js" language="JAVASCRIPT"></script>
<script type="text/javascript" src="http://www.mohitgoenka.com/css/New_Style.js" language="JAVASCRIPT"></script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15301637-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<!--div id="fb-root"></div>
<script>
	window.fbAsyncInit = function() {
		FB.init({appId: '138151759539266', status: true, cookie: true,
			xfbml: true});
    };
    (function() {
		var e = document.createElement('script');
        e.type = 'text/javascript';
        e.src = document.location.protocol +
          '//connect.facebook.net/en_US/all.js';
        e.async = true;
        document.getElementById('fb-root').appendChild(e);
      }());
</script-->

<noscript>
	Your browser does not support JavaScript! OR The JavaScript has been turned off!<br/>
	Please upgrade your browser OR turn on the JavaScript on your browser.
</noscript>

</head>



<body id="section-index">

<div id="header">

<!-- Your Site Name -->
<h1>Games</h1>
<!-- END Site Name -->


<!-- Your Site Slogan -->
<h2>Life takes turns. Either be a Perfectionist or a Workaholic. Time is Precious, Save as much as Possible.</h2>
<!-- END Site Slogan -->

<table><tr><td width="700px">
<!--fb:login-button show-faces="true" width="300"></fb:login-button-->
</td>

<td align="right" width="300px">
<form method="get" action="http://www.google.com/search" target="_blank" align="right">
	<input type="radio"  name="sitesearch" value="http://www.mohitgoenka.com" style="display: none;" checked />
	<input type="text"   name="q" size="30"	maxlength="255" value="" />
	<input type="submit" value="Search" /><br />
</form>
</td></tr></table>
</div>


<!-- Top Links -->
<div id="navigation" style="margin-bottom:5px;">
</div>
<!-- END Top Links -->



<!-- Change the banner by replacing the image in: img/orange/orange-banner.jpg -->
<div id="main-image" style="margin-bottom:5px;"></div>
<!-- END Banner -->


<div id="container">
<div id="content">


<!-- Content -->
<div id="content-main">

<!-- Homepage Article -->

<div class="post">

<div class="posttitle">
<h2 id="GT">The Guards and The Treasure</h2>
Welcome&nbsp;<?php echo $_SESSION['username']; ?>!
<br/>
</div>

<?php if ($_SESSION['counter'] < $maxround) { ?>
	<a href="javascript: void(0)" onclick="popup('instructions.php', 'Instructions: The Guards and the Treasure')"><h3>Detailed instructions</h3></a>
	<h3>Round <?php echo $_SESSION['position']+1; ?> of <?php echo $curround; ?></h3>
<?php } ?>

<?php
	if ($_SESSION['counter'] >= $maxround)
	{ ?>
		<a href="javascript: void(0)" onclick="popup('feedback.php', 'Feedback: The Guards and the Treasure')"><h3>Leave your Feedback</h3></a>
		<br/>
		<br/>
		<table align="center" cellspacing="10" cellpadding="50" bgcolor="black">
				<tr bgcolor = #555555>
					<th>Game ID</th><th>Your Selection</th><th>Guards' Door</th><th>Won</th><th>Lost</th><th>Points</th>
				</tr>
	<?php
		$twon = 0;
		$tlost = 0;
		$tpoints = 0;
		$today = date("F j, Y, g:i a");
		$data = "\n".$_SESSION['username'].",".$_SESSION['useremail'].",".$_SESSION['usergender'].",".$_SESSION['usercountry'].",".$_SESSION['gameid'].",$today,";
		$time = "\n".$_SESSION['username'].",".$_SESSION['useremail'].",".$_SESSION['usergender'].",".$_SESSION['usercountry'].",".$_SESSION['gameid'].",$today";
		$obs = "\n".$_SESSION['username'].",".$_SESSION['useremail'].",".$_SESSION['usergender'].",".$_SESSION['usercountry'].",".$_SESSION['gameid'].",$today";
		for ($i = 1, $j = 1; (($i <= $maxround) && ($j <= $curround)); $i++)
		{


			?>
			<?php if ($_SESSION['selection'][$i] > 0) {
				$data = $data.$_SESSION['selection'][$i].",";
				$time = $time.",".$_SESSION['timemillis'][$i];
				$obs = $obs.",";
				for ($scroller = 0; $scroller < 5; $scroller++)
					$obs = $obs.$_SESSION['observations'][$i][$scroller];
			?>
				<tr align = "center" >
					<td><?php echo $j++; ?></td>
					<td><?php echo $_SESSION['selection'][$_SESSION['combo'][$j - 2]]; ?></td>
					<td><?php if ($_SESSION['guard'][$_SESSION['combo'][$j - 2]][1] > 0) echo $_SESSION['guard'][$_SESSION['combo'][$j - 2]][1]; ?><?php if ($_SESSION['guard'][$_SESSION['combo'][$j - 2]][1] > 0) echo ", "; ?><?php echo $_SESSION['guard'][$_SESSION['combo'][$j - 2]][2]; ?> and <?php echo $_SESSION['guard'][$_SESSION['combo'][$j - 2]][3]; ?></td>
				<?php if(($_SESSION['selection'][$_SESSION['combo'][$j - 2]] != $_SESSION['guard'][$_SESSION['combo'][$j - 2]][1]) && ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] != $_SESSION['guard'][$_SESSION['combo'][$j - 2]][2]) && ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] != $_SESSION['guard'][$_SESSION['combo'][$j - 2]][3]))
					{
						$twon++;
						$won = "Yes";
						$lost = "No";


						if (($_SESSION['combo'][$j - 2] == 1) || ($_SESSION['combo'][$j - 2] == 2) || ($_SESSION['combo'][$j - 2] == 3) || ($_SESSION['combo'][$j - 2] == 4)
						|| ($_SESSION['combo'][$j - 2] == 5) || ($_SESSION['combo'][$j - 2] == 6) || ($_SESSION['combo'][$j - 2] == 7) || ($_SESSION['combo'][$j - 2] == 8)
						|| ($_SESSION['combo'][$j - 2] == 9) || ($_SESSION['combo'][$j - 2] == 10) || ($_SESSION['combo'][$j - 2] == 11) || ($_SESSION['combo'][$j - 2] == 12)
						|| ($_SESSION['combo'][$j - 2] == 13))
						{
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 8;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 6;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 1;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 1;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 7;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 5;
						}

						else if (($_SESSION['combo'][$j - 2] == 14) || ($_SESSION['combo'][$j - 2] == 15) || ($_SESSION['combo'][$j - 2] == 16) || ($_SESSION['combo'][$j - 2] == 17)
						|| ($_SESSION['combo'][$j - 2] == 18) || ($_SESSION['combo'][$j - 2] == 19) || ($_SESSION['combo'][$j - 2] == 20) || ($_SESSION['combo'][$j - 2] == 21)
						|| ($_SESSION['combo'][$j - 2] == 22) || ($_SESSION['combo'][$j - 2] == 23) || ($_SESSION['combo'][$j - 2] == 24) || ($_SESSION['combo'][$j - 2] == 25)
						|| ($_SESSION['combo'][$j - 2] == 26))
						{
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 7;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 9;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 2;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 9;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 7;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 8;
						}

						$tpoints += $points;
					} else {
						$tlost++;
						$won = "No";
						$lost = "Yes";


						if (($_SESSION['combo'][$j - 2] == 1) || ($_SESSION['combo'][$j - 2] == 2) || ($_SESSION['combo'][$j - 2] == 3) || ($_SESSION['combo'][$j - 2] == 4)
						|| ($_SESSION['combo'][$j - 2] == 5) || ($_SESSION['combo'][$j - 2] == 6) || ($_SESSION['combo'][$j - 2] == 7) || ($_SESSION['combo'][$j - 2] == 8)
						|| ($_SESSION['combo'][$j - 2] == 9) || ($_SESSION['combo'][$j - 2] == 10) || ($_SESSION['combo'][$j - 2] == 11) || ($_SESSION['combo'][$j - 2] == 12)
						|| ($_SESSION['combo'][$j - 2] == 13))
						{
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -6;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -9;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -7;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -7;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = -2;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = -5;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = -2;
						}

						else if (($_SESSION['combo'][$j - 2] == 14) || ($_SESSION['combo'][$j - 2] == 15) || ($_SESSION['combo'][$j - 2] == 16) || ($_SESSION['combo'][$j - 2] == 17)
						|| ($_SESSION['combo'][$j - 2] == 18) || ($_SESSION['combo'][$j - 2] == 19) || ($_SESSION['combo'][$j - 2] == 20) || ($_SESSION['combo'][$j - 2] == 21)
						|| ($_SESSION['combo'][$j - 2] == 22) || ($_SESSION['combo'][$j - 2] == 23) || ($_SESSION['combo'][$j - 2] == 24) || ($_SESSION['combo'][$j - 2] == 25)
						|| ($_SESSION['combo'][$j - 2] == 26))
						{
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -4;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -8;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -5;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -8;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -9;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = -4;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = -1;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = -6;
						}

						$tpoints += $points;
					} ?>

					<td><?php echo $won; ?></td>
					<td><?php echo $lost; ?></td>
					<td><?php echo $points; ?></td>
				</tr>
				<?php	} ?>
	<?php	} ?>
		<tr align = "center">
			<td>Total</td><td></td><td></td><td><?php echo $twon; ?></td><td><?php echo $tlost; ?></td><td><?php echo $tpoints; ?></td>
		</tr>
	</table>
<?php
	$data = $data.$twon.",".$tlost.",".$tpoints;
	$handle = fopen('scores.csv', 'a+');
	fwrite($handle, $data);
	fclose($handle);
	$handle = fopen('time.csv', 'a+');
	fwrite($handle, $time);
	fclose($handle);
	$handle = fopen('observations.csv', 'a+');
	fwrite($handle, $obs);
	fclose($handle);
} ?>



<div class="entry">

<?php if ($_SESSION['counter'] < $maxround) { ?>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
<br/>

<table align="center" cellspacing="10" cellpadding="50" bgcolor="black">
	<tr bgcolor = #3b9c9c align="center">
		<th>Gates</th>
		<th>Gate 1<br/><Input type="radio" name="gate" value="1"/></th>
		<th>Gate 2<br/><Input type="radio" name="gate" value="2"/></th>
		<th>Gate 3<br/><Input type="radio" name="gate" value="3"/></th>
		<th>Gate 4<br/><Input type="radio" name="gate" value="4"/></th>
		<th>Gate 5<br/><Input type="radio" name="gate" value="5"/></th>
		<th>Gate 6<br/><Input type="radio" name="gate" value="6"/></th>
		<th>Gate 7<br/><Input type="radio" name="gate" value="7"/></th>
		<th>Gate 8<br/><Input type="radio" name="gate" value="8"/></th>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 0) || ($_SESSION['counter'] == 1) || ($_SESSION['counter'] == 2) || ($_SESSION['counter'] == 3) ||
			($_SESSION['counter'] == 4) || ($_SESSION['counter'] == 5) || ($_SESSION['counter'] == 6) || ($_SESSION['counter'] == 7)
			|| ($_SESSION['counter'] == 8) || ($_SESSION['counter'] == 9) || ($_SESSION['counter'] == 10) || ($_SESSION['counter'] == 11)
			|| ($_SESSION['counter'] == 12)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left">Your Rewards</td>
		<td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
		<td valign="bottom">6<br/><img src="Images/w6.jpg"></td>
		<td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
		<td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
		<td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
		<td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
		<td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
		<td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left">Your Penalties</td>
		<td valign="top"><img src="Images/l6.jpg"><br/>-6</td>
		<td valign="top"><img src="Images/l9.jpg"><br/>-9</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
		<td valign="top"><img src="Images/l7.jpg"><br/>-7</td>
		<td valign="top"><img src="Images/l7.jpg"><br/>-7</td>
		<td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
		<td valign="top"><img src="Images/l5.jpg"><br/>-5</td>
		<td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 13) || ($_SESSION['counter'] == 14) || ($_SESSION['counter'] == 15) || ($_SESSION['counter'] == 16)
			|| ($_SESSION['counter'] == 17) || ($_SESSION['counter'] == 18) || ($_SESSION['counter'] == 19) || ($_SESSION['counter'] == 20)
			|| ($_SESSION['counter'] == 21) || ($_SESSION['counter'] == 22) || ($_SESSION['counter'] == 23) || ($_SESSION['counter'] == 24)
			|| ($_SESSION['counter'] == 25)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left">Your Rewards</td>
		<td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
		<td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
		<td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
		<td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
		<td valign="bottom">2<br/><img src="Images/w2.jpg"></td>
		<td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
		<td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
		<td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left">Your Penalties</td>
		<td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
		<td valign="top"><img src="Images/l8.jpg"><br/>-8</td>
		<td valign="top"><img src="Images/l5.jpg"><br/>-5</td>
		<td valign="top"><img src="Images/l8.jpg"><br/>-8</td>
		<td valign="top"><img src="Images/l9.jpg"><br/>-9</td>
		<td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
		<td valign="top"><img src="Images/l1.jpg"><br/>-1</td>
		<td valign="top"><img src="Images/l6.jpg"><br/>-6</td>
	</tr>
<?php } ?>

<?php if ($_SESSION['counter'] == 0) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
				{
					do
						{
							$pirate1 = rand(0, 300);
							$pirate2 = rand(0, 300);
							$pirate3 = rand(0, 300);

		if ($pirate1 < 49)
			$pgate1 = "1";
		else if ($pirate1 < 89)
			$pgate1 = "2";
		else if ($pirate1 < 108)
			$pgate1 = "3";
		else if ($pirate1 < 135)
			$pgate1 = "4";
		else if ($pirate1 < 140)
			$pgate1 = "5";
		else if ($pirate1 < 221)
			$pgate1 = "6";
		else if ($pirate1 < 257)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 49)
			$pgate2 = "1";
		else if ($pirate2 < 89)
			$pgate2 = "2";
		else if ($pirate2 < 108)
			$pgate2 = "3";
		else if ($pirate2 < 135)
			$pgate2 = "4";
		else if ($pirate2 < 140)
			$pgate2 = "5";
		else if ($pirate2 < 221)
			$pgate2 = "6";
		else if ($pirate2 < 257)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 49)
			$pgate3 = "1";
		else if ($pirate3 < 89)
			$pgate3 = "2";
		else if ($pirate3 < 108)
			$pgate3 = "3";
		else if ($pirate3 < 135)
			$pgate3 = "4";
		else if ($pirate3 < 140)
			$pgate3 = "5";
		else if ($pirate3 < 221)
			$pgate3 = "6";
		else if ($pirate3 < 257)
			$pgate3 = "7";
		else
			$pgate3 = "8";
						} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

	if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 1) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
				{
					do
						{
							$pirate1 = rand(0, 300);
							$pirate2 = rand(0, 300);
							$pirate3 = rand(0, 300);

		if ($pirate1 < 51)
			$pgate1 = "1";
		else if ($pirate1 < 92)
			$pgate1 = "2";
		else if ($pirate1 < 110)
			$pgate1 = "3";
		else if ($pirate1 < 136)
			$pgate1 = "4";
		else if ($pirate1 < 137)
			$pgate1 = "5";
		else if ($pirate1 < 219)
			$pgate1 = "6";
		else if ($pirate1 < 256)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 51)
			$pgate2 = "1";
		else if ($pirate2 < 92)
			$pgate2 = "2";
		else if ($pirate2 < 110)
			$pgate2 = "3";
		else if ($pirate2 < 136)
			$pgate2 = "4";
		else if ($pirate2 < 137)
			$pgate2 = "5";
		else if ($pirate2 < 219)
			$pgate2 = "6";
		else if ($pirate2 < 256)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 51)
			$pgate3 = "1";
		else if ($pirate3 < 92)
			$pgate3 = "2";
		else if ($pirate3 < 110)
			$pgate3 = "3";
		else if ($pirate3 < 136)
			$pgate3 = "4";
		else if ($pirate3 < 137)
			$pgate3 = "5";
		else if ($pirate3 < 219)
			$pgate3 = "6";
		else if ($pirate3 < 256)
			$pgate3 = "7";
		else
			$pgate3 = "8";

						} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 2) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
				{
					do
						{
							$pirate1 = rand(0, 300);
							$pirate2 = rand(0, 300);
							$pirate3 = rand(0, 300);

		if ($pirate1 < 52)
			$pgate1 = "1";
		else if ($pirate1 < 93)
			$pgate1 = "2";
		else if ($pirate1 < 109)
			$pgate1 = "3";
		else if ($pirate1 < 134)
			$pgate1 = "4";
		else if ($pirate1 < 134)
			$pgate1 = "5";
		else if ($pirate1 < 217)
			$pgate1 = "6";
		else if ($pirate1 < 254)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 52)
			$pgate2 = "1";
		else if ($pirate2 < 92)
			$pgate2 = "2";
		else if ($pirate2 < 109)
			$pgate2 = "3";
		else if ($pirate2 < 134)
			$pgate2 = "4";
		else if ($pirate2 < 134)
			$pgate2 = "5";
		else if ($pirate2 < 217)
			$pgate2 = "6";
		else if ($pirate2 < 254)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 52)
			$pgate3 = "1";
		else if ($pirate3 < 93)
			$pgate3 = "2";
		else if ($pirate3 < 109)
			$pgate3 = "3";
		else if ($pirate3 < 134)
			$pgate3 = "4";
		else if ($pirate3 < 134)
			$pgate3 = "5";
		else if ($pirate3 < 217)
			$pgate3 = "6";
		else if ($pirate3 < 254)
			$pgate3 = "7";
		else
			$pgate3 = "8";
						} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>

<?php } else if ($_SESSION['counter'] == 3) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
				{
					do
						{
							$pirate1 = rand(0, 300);
							$pirate2 = rand(0, 300);
							$pirate3 = rand(0, 300);

		if ($pirate1 < 56)
			$pgate1 = "1";
		else if ($pirate1 < 99)
			$pgate1 = "2";
		else if ($pirate1 < 108)
			$pgate1 = "3";
		else if ($pirate1 < 129)
			$pgate1 = "4";
		else if ($pirate1 < 129)
			$pgate1 = "5";
		else if ($pirate1 < 214)
			$pgate1 = "6";
		else if ($pirate1 < 251)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 56)
			$pgate2 = "1";
		else if ($pirate2 < 99)
			$pgate2 = "2";
		else if ($pirate2 < 108)
			$pgate2 = "3";
		else if ($pirate2 < 129)
			$pgate2 = "4";
		else if ($pirate2 < 129)
			$pgate2 = "5";
		else if ($pirate2 < 214)
			$pgate2 = "6";
		else if ($pirate2 < 251)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 56)
			$pgate3 = "1";
		else if ($pirate3 < 99)
			$pgate3 = "2";
		else if ($pirate3 < 108)
			$pgate3 = "3";
		else if ($pirate3 < 129)
			$pgate3 = "4";
		else if ($pirate3 < 129)
			$pgate3 = "5";
		else if ($pirate3 < 214)
			$pgate3 = "6";
		else if ($pirate3 < 251)
			$pgate3 = "7";
		else
			$pgate3 = "8";
						} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 4) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 62)
			$pgate1 = "1";
		else if ($pirate1 < 106)
			$pgate1 = "2";
		else if ($pirate1 < 106)
			$pgate1 = "3";
		else if ($pirate1 < 121)
			$pgate1 = "4";
		else if ($pirate1 < 121)
			$pgate1 = "5";
		else if ($pirate1 < 209)
			$pgate1 = "6";
		else if ($pirate1 < 245)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 62)
			$pgate2 = "1";
		else if ($pirate2 < 106)
			$pgate2 = "2";
		else if ($pirate2 < 106)
			$pgate2 = "3";
		else if ($pirate2 < 121)
			$pgate2 = "4";
		else if ($pirate2 < 121)
			$pgate2 = "5";
		else if ($pirate2 < 209)
			$pgate2 = "6";
		else if ($pirate2 < 245)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 62)
			$pgate3 = "1";
		else if ($pirate3 < 106)
			$pgate3 = "2";
		else if ($pirate3 < 106)
			$pgate3 = "3";
		else if ($pirate3 < 121)
			$pgate3 = "4";
		else if ($pirate3 < 121)
			$pgate3 = "5";
		else if ($pirate3 < 209)
			$pgate3 = "6";
		else if ($pirate3 < 245)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

				if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 5) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 25)
			$pgate1 = "1";
		else if ($pirate1 < 63)
			$pgate1 = "2";
		else if ($pirate1 < 104)
			$pgate1 = "3";
		else if ($pirate1 < 141)
			$pgate1 = "4";
		else if ($pirate1 < 141)
			$pgate1 = "5";
		else if ($pirate1 < 226)
			$pgate1 = "6";
		else if ($pirate1 < 273)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 25)
			$pgate2 = "1";
		else if ($pirate2 < 63)
			$pgate2 = "2";
		else if ($pirate2 < 104)
			$pgate2 = "3";
		else if ($pirate2 < 141)
			$pgate2 = "4";
		else if ($pirate2 < 141)
			$pgate2 = "5";
		else if ($pirate2 < 226)
			$pgate2 = "6";
		else if ($pirate2 < 273)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 25)
			$pgate3 = "1";
		else if ($pirate3 < 63)
			$pgate3 = "2";
		else if ($pirate3 < 104)
			$pgate3 = "3";
		else if ($pirate3 < 141)
			$pgate3 = "4";
		else if ($pirate3 < 141)
			$pgate3 = "5";
		else if ($pirate3 < 226)
			$pgate3 = "6";
		else if ($pirate3 < 273)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 6) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 27)
			$pgate1 = "1";
		else if ($pirate1 < 66)
			$pgate1 = "2";
		else if ($pirate1 < 102)
			$pgate1 = "3";
		else if ($pirate1 < 138)
			$pgate1 = "4";
		else if ($pirate1 < 138)
			$pgate1 = "5";
		else if ($pirate1 < 222)
			$pgate1 = "6";
		else if ($pirate1 < 269)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 27)
			$pgate2 = "1";
		else if ($pirate2 < 66)
			$pgate2 = "2";
		else if ($pirate2 < 102)
			$pgate2 = "3";
		else if ($pirate2 < 138)
			$pgate2 = "4";
		else if ($pirate2 < 138)
			$pgate2 = "5";
		else if ($pirate2 < 222)
			$pgate2 = "6";
		else if ($pirate2 < 269)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 27)
			$pgate3 = "1";
		else if ($pirate3 < 66)
			$pgate3 = "2";
		else if ($pirate3 < 102)
			$pgate3 = "3";
		else if ($pirate3 < 138)
			$pgate3 = "4";
		else if ($pirate3 < 138)
			$pgate3 = "5";
		else if ($pirate3 < 222)
			$pgate3 = "6";
		else if ($pirate3 < 269)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 7) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 29)
			$pgate1 = "1";
		else if ($pirate1 < 69)
			$pgate1 = "2";
		else if ($pirate1 < 101)
			$pgate1 = "3";
		else if ($pirate1 < 137)
			$pgate1 = "4";
		else if ($pirate1 < 137)
			$pgate1 = "5";
		else if ($pirate1 < 221)
			$pgate1 = "6";
		else if ($pirate1 < 267)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 29)
			$pgate2 = "1";
		else if ($pirate2 < 69)
			$pgate2 = "2";
		else if ($pirate2 < 101)
			$pgate2 = "3";
		else if ($pirate2 < 137)
			$pgate2 = "4";
		else if ($pirate2 < 137)
			$pgate2 = "5";
		else if ($pirate2 < 221)
			$pgate2 = "6";
		else if ($pirate2 < 267)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 29)
			$pgate3 = "1";
		else if ($pirate3 < 69)
			$pgate3 = "2";
		else if ($pirate3 < 101)
			$pgate3 = "3";
		else if ($pirate3 < 137)
			$pgate3 = "4";
		else if ($pirate3 < 137)
			$pgate3 = "5";
		else if ($pirate3 < 221)
			$pgate3 = "6";
		else if ($pirate3 < 267)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 8) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 31)
			$pgate1 = "1";
		else if ($pirate1 < 71)
			$pgate1 = "2";
		else if ($pirate1 < 99)
			$pgate1 = "3";
		else if ($pirate1 < 133)
			$pgate1 = "4";
		else if ($pirate1 < 133)
			$pgate1 = "5";
		else if ($pirate1 < 219)
			$pgate1 = "6";
		else if( $pirate1 < 264)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 31)
			$pgate2 = "1";
		else if ($pirate2 < 71)
			$pgate2 = "2";
		else if ($pirate2 < 99)
			$pgate2 = "3";
		else if ($pirate2 < 133)
			$pgate2 = "4";
		else if ($pirate2 < 133)
			$pgate2 = "5";
		else if ($pirate2 < 219)
			$pgate2 = "6";
		else if ($pirate2 < 264)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 31)
			$pgate3 = "1";
		else if ($pirate3 < 71)
			$pgate3 = "2";
		else if ($pirate3 < 99)
			$pgate3 = "3";
		else if ($pirate3 < 133)
			$pgate3 = "4";
		else if ($pirate3 < 133)
			$pgate3 = "5";
		else if ($pirate3 < 219)
			$pgate3 = "6";
		else if ($pirate3 < 264)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 9) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 33)
			$pgate1 = "1";
		else if ($pirate1 < 72)
			$pgate1 = "2";
		else if ($pirate1 < 97)
			$pgate1 = "3";
		else if ($pirate1 < 129)
			$pgate1 = "4";
		else if ($pirate1 < 129)
			$pgate1 = "5";
		else if ($pirate1 < 220)
			$pgate1 = "6";
		else if ($pirate1 < 263)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 33)
			$pgate2 = "1";
		else if ($pirate2 < 72)
			$pgate2 = "2";
		else if ($pirate2 < 97)
			$pgate2 = "3";
		else if ($pirate2 < 129)
			$pgate2 = "4";
		else if ($pirate2 < 129)
			$pgate2 = "5";
		else if ($pirate2 < 220)
			$pgate2 = "6";
		else if ($pirate2 < 263)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 33)
			$pgate3 = "1";
		else if ($pirate3 < 72)
			$pgate3 = "2";
		else if ($pirate3 < 97)
			$pgate3 = "3";
		else if ($pirate3 < 129)
			$pgate3 = "4";
		else if ($pirate3 < 129)
			$pgate3 = "5";
		else if ($pirate3 < 220)
			$pgate3 = "6";
		else if ($pirate3 < 263)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 10) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 34)
			$pgate1 = "1";
		else if ($pirate1 < 72)
			$pgate1 = "2";
		else if ($pirate1 < 94)
			$pgate1 = "3";
		else if ($pirate1 < 122)
			$pgate1 = "4";
		else if ($pirate1 < 122)
			$pgate1 = "5";
		else if ($pirate1 < 219)
			$pgate1 = "6";
		else if ($pirate1 < 261)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 34)
			$pgate2 = "1";
		else if ($pirate2 < 72)
			$pgate2 = "2";
		else if ($pirate2 < 94)
			$pgate2 = "3";
		else if ($pirate2 < 122)
			$pgate2 = "4";
		else if ($pirate2 < 122)
			$pgate2 = "5";
		else if ($pirate2 < 219)
			$pgate2 = "6";
		else if ($pirate2 < 261)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 34)
			$pgate3 = "1";
		else if ($pirate3 < 72)
			$pgate3 = "2";
		else if ($pirate3 < 94)
			$pgate3 = "3";
		else if ($pirate3 < 122)
			$pgate3 = "4";
		else if ($pirate3 < 122)
			$pgate3 = "5";
		else if ($pirate3 < 219)
			$pgate3 = "6";
		else if ($pirate3 < 261)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";
		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 11) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 34)
			$pgate1 = "1";
		else if ($pirate1 < 71)
			$pgate1 = "2";
		else if ($pirate1 < 93)
			$pgate1 = "3";
		else if ($pirate1 < 119)
			$pgate1 = "4";
		else if ($pirate1 < 119)
			$pgate1 = "5";
		else if ($pirate1 < 219)
			$pgate1 = "6";
		else if ($pirate1 < 260)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 34)
			$pgate2 = "1";
		else if ($pirate2 < 71)
			$pgate2 = "2";
		else if ($pirate2 < 93)
			$pgate2 = "3";
		else if ($pirate2 < 119)
			$pgate2 = "4";
		else if ($pirate2 < 119)
			$pgate2 = "5";
		else if ($pirate2 < 219)
			$pgate2 = "6";
		else if ($pirate2 < 260)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 34)
			$pgate3 = "1";
		else if ($pirate3 < 71)
			$pgate3 = "2";
		else if ($pirate3 < 93)
			$pgate3 = "3";
		else if ($pirate3 < 119)
			$pgate3 = "4";
		else if ($pirate3 < 119)
			$pgate3 = "5";
		else if ($pirate3 < 219)
			$pgate3 = "6";
		else if ($pirate3 < 260)
			$pgate3 = "7";
		else
			$pgate3 = "8";

				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 12) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 35)
			$pgate1 = "1";
		else if ($pirate1 < 64)
			$pgate1 = "2";
		else if ($pirate1 < 101)
			$pgate1 = "3";
		else if ($pirate1 < 113)
			$pgate1 = "4";
		else if ($pirate1 < 113)
			$pgate1 = "5";
		else if ($pirate1 < 213)
			$pgate1 = "6";
		else if ($pirate1 < 253)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 35)
			$pgate2 = "1";
		else if ($pirate2 < 64)
			$pgate2 = "2";
		else if ($pirate2 < 101)
			$pgate2 = "3";
		else if ($pirate2 < 113)
			$pgate2 = "4";
		else if ($pirate2 < 113)
			$pgate2 = "5";
		else if ($pirate2 < 213)
			$pgate2 = "6";
		else if ($pirate2 < 253)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 35)
			$pgate3 = "1";
		else if ($pirate3 < 64)
			$pgate3 = "2";
		else if ($pirate3 < 101)
			$pgate3 = "3";
		else if ($pirate3 < 113)
			$pgate3 = "4";
		else if ($pirate3 < 113)
			$pgate3 = "5";
		else if ($pirate3 < 213)
			$pgate3 = "6";
		else if ($pirate3 < 253)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 13) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 26)
			$pgate1 = "1";
		else if ($pirate1 < 66)
			$pgate1 = "2";
		else if ($pirate1 < 88)
			$pgate1 = "3";
		else if ($pirate1 < 137)
			$pgate1 = "4";
		else if ($pirate1 < 139)
			$pgate1 = "5";
		else if ($pirate1 < 206)
			$pgate1 = "6";
		else if ($pirate1 < 247)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 26)
			$pgate2 = "1";
		else if ($pirate2 < 66)
			$pgate2 = "2";
		else if ($pirate2 < 88)
			$pgate2 = "3";
		else if ($pirate2 < 137)
			$pgate2 = "4";
		else if ($pirate2 < 139)
			$pgate2 = "5";
		else if ($pirate2 < 206)
			$pgate2 = "6";
		else if ($pirate2 < 247)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 26)
			$pgate3 = "1";
		else if ($pirate3 < 66)
			$pgate3 = "2";
		else if ($pirate3 < 88)
			$pgate3 = "3";
		else if ($pirate3 < 137)
			$pgate3 = "4";
		else if ($pirate3 < 139)
			$pgate3 = "5";
		else if ($pirate3 < 206)
			$pgate3 = "6";
		else if ($pirate3 < 247)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 14) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 24)
			$pgate1 = "1";
		else if ($pirate1 < 64)
			$pgate1 = "2";
		else if ($pirate1 < 83)
			$pgate1 = "3";
		else if ($pirate1 < 134)
			$pgate1 = "4";
		else if ($pirate1 < 134)
			$pgate1 = "5";
		else if ($pirate1 < 205)
			$pgate1 = "6";
		else if ($pirate1 < 246)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 24)
			$pgate2 = "1";
		else if ($pirate2 < 64)
			$pgate2 = "2";
		else if ($pirate1 < 83)
			$pgate1 = "3";
		else if ($pirate1 < 134)
			$pgate1 = "4";
		else if ($pirate1 < 134)
			$pgate1 = "5";
		else if ($pirate2 < 205)
			$pgate2 = "6";
		else if ($pirate2 < 246)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 24)
			$pgate3 = "1";
		else if ($pirate3 < 64)
			$pgate3 = "2";
		else if ($pirate1 < 83)
			$pgate1 = "3";
		else if ($pirate1 < 134)
			$pgate1 = "4";
		else if ($pirate1 < 134)
			$pgate1 = "5";
		else if ($pirate3 < 205)
			$pgate3 = "6";
		else if ($pirate3 < 246)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 15) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 20)
			$pgate1 = "1";
		else if ($pirate1 < 61)
			$pgate1 = "2";
		else if ($pirate1 < 76)
			$pgate1 = "3";
		else if ($pirate1 < 128)
			$pgate1 = "4";
		else if ($pirate1 < 128)
			$pgate1 = "5";
		else if ($pirate1 < 204)
			$pgate1 = "6";
		else if ($pirate1 < 245)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 20)
			$pgate2 = "1";
		else if ($pirate2 < 61)
			$pgate2 = "2";
		else if ($pirate2 < 76)
			$pgate2 = "3";
		else if ($pirate2 < 128)
			$pgate2 = "4";
		else if ($pirate2 < 128)
			$pgate2 = "5";
		else if ($pirate2 < 204)
			$pgate2 = "6";
		else if ($pirate2 < 245)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 20)
			$pgate3 = "1";
		else if ($pirate3 < 61)
			$pgate3 = "2";
		else if ($pirate3 < 76)
			$pgate3 = "3";
		else if ($pirate3 < 128)
			$pgate3 = "4";
		else if ($pirate3 < 128)
			$pgate3 = "5";
		else if ($pirate3 < 204)
			$pgate3 = "6";
		else if ($pirate3 < 245)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";
		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 16) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 14)
			$pgate1 = "1";
		else if ($pirate1 < 55)
			$pgate1 = "2";
		else if ($pirate1 < 61)
			$pgate1 = "3";
		else if ($pirate1 < 118)
			$pgate1 = "4";
		else if ($pirate1 < 118)
			$pgate1 = "5";
		else if ($pirate1 < 204)
			$pgate1 = "6";
		else if ($pirate1 < 245)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 14)
			$pgate2 = "1";
		else if ($pirate2 < 55)
			$pgate2 = "2";
		else if ($pirate2 < 61)
			$pgate2 = "3";
		else if ($pirate2 < 118)
			$pgate2 = "4";
		else if ($pirate2 < 118)
			$pgate2 = "5";
		else if ($pirate2 < 204)
			$pgate2 = "6";
		else if ($pirate2 < 245)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 14)
			$pgate3 = "1";
		else if ($pirate3 < 55)
			$pgate3 = "2";
		else if ($pirate3 < 61)
			$pgate3 = "3";
		else if ($pirate3 < 118)
			$pgate3 = "4";
		else if ($pirate3 < 118)
			$pgate3 = "5";
		else if ($pirate3 < 204)
			$pgate3 = "6";
		else if ($pirate3 < 245)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 17) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 11)
			$pgate1 = "1";
		else if ($pirate1 < 53)
			$pgate1 = "2";
		else if ($pirate1 < 56)
			$pgate1 = "3";
		else if ($pirate1 < 116)
			$pgate1 = "4";
		else if ($pirate1 < 116)
			$pgate1 = "5";
		else if ($pirate1 < 203)
			$pgate1 = "6";
		else if ($pirate1 < 245)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 11)
			$pgate2 = "1";
		else if ($pirate2 < 53)
			$pgate2 = "2";
		else if ($pirate2 < 56)
			$pgate2 = "3";
		else if ($pirate2 < 116)
			$pgate2 = "4";
		else if ($pirate2 < 116)
			$pgate2 = "5";
		else if ($pirate2 < 203)
			$pgate2 = "6";
		else if ($pirate2 < 245)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 11)
			$pgate3 = "1";
		else if ($pirate3 < 53)
			$pgate3 = "2";
		else if ($pirate3 < 56)
			$pgate3 = "3";
		else if ($pirate3 < 116)
			$pgate3 = "4";
		else if ($pirate3 < 116)
			$pgate3 = "5";
		else if ($pirate3 < 203)
			$pgate3 = "6";
		else if ($pirate3 < 245)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 18) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 47)
			$pgate1 = "1";
		else if ($pirate1 < 76)
			$pgate1 = "2";
		else if ($pirate1 < 124)
			$pgate1 = "3";
		else if ($pirate1 < 139)
			$pgate1 = "4";
		else if ($pirate1 < 178)
			$pgate1 = "5";
		else if ($pirate1 < 240)
			$pgate1 = "6";
		else if ($pirate1 < 263)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 47)
			$pgate2 = "1";
		else if ($pirate2 < 76)
			$pgate2 = "2";
		else if ($pirate2 < 124)
			$pgate2 = "3";
		else if ($pirate2 < 139)
			$pgate2 = "4";
		else if ($pirate2 < 178)
			$pgate2 = "5";
		else if ($pirate2 < 240)
			$pgate2 = "6";
		else if ($pirate2 < 263)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 47)
			$pgate3 = "1";
		else if ($pirate3 < 76)
			$pgate3 = "2";
		else if ($pirate3 < 124)
			$pgate3 = "3";
		else if ($pirate3 < 139)
			$pgate3 = "4";
		else if ($pirate3 < 178)
			$pgate3 = "5";
		else if ($pirate3 < 240)
			$pgate3 = "6";
		else if ($pirate3 < 263)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 19) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 42)
			$pgate1 = "1";
		else if ($pirate1 < 71)
			$pgate1 = "2";
		else if ($pirate1 < 112)
			$pgate1 = "3";
		else if ($pirate1 < 136)
			$pgate1 = "4";
		else if ($pirate1 < 167)
			$pgate1 = "5";
		else if ($pirate1 < 231)
			$pgate1 = "6";
		else if ($pirate1 < 261)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 42)
			$pgate2 = "1";
		else if ($pirate2 < 71)
			$pgate2 = "2";
		else if ($pirate2 < 112)
			$pgate2 = "3";
		else if ($pirate2 < 136)
			$pgate2 = "4";
		else if ($pirate2 < 167)
			$pgate2 = "5";
		else if ($pirate2 < 231)
			$pgate2 = "6";
		else if ($pirate2 < 261)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 42)
			$pgate3 = "1";
		else if ($pirate3 < 71)
			$pgate3 = "2";
		else if ($pirate3 < 112)
			$pgate3 = "3";
		else if ($pirate3 < 136)
			$pgate3 = "4";
		else if ($pirate3 < 167)
			$pgate3 = "5";
		else if ($pirate3 < 231)
			$pgate3 = "6";
		else if ($pirate3 < 261)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 20) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 40)
			$pgate1 = "1";
		else if ($pirate1 < 69)
			$pgate1 = "2";
		else if ($pirate1 < 108)
			$pgate1 = "3";
		else if ($pirate1 < 134)
			$pgate1 = "4";
		else if ($pirate1 < 161)
			$pgate1 = "5";
		else if ($pirate1 < 227)
			$pgate1 = "6";
		else if ($pirate1 < 260)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 40)
			$pgate2 = "1";
		else if ($pirate2 < 69)
			$pgate2 = "2";
		else if ($pirate2 < 108)
			$pgate2 = "3";
		else if ($pirate2 < 134)
			$pgate2 = "4";
		else if ($pirate2 < 161)
			$pgate2 = "5";
		else if ($pirate2 < 227)
			$pgate2 = "6";
		else if ($pirate2 < 260)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate1 < 40)
			$pgate3 = "1";
		else if ($pirate3 < 69)
			$pgate3 = "2";
		else if ($pirate3 < 108)
			$pgate3 = "3";
		else if ($pirate3 < 134)
			$pgate3 = "4";
		else if ($pirate3 < 161)
			$pgate3 = "5";
		else if ($pirate3 < 227)
			$pgate3 = "6";
		else if ($pirate3 < 260)
			$pgate3 = "7";
		else
			$pgate1 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 21) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 39)
			$pgate1 = "1";
		else if ($pirate1 < 68)
			$pgate1 = "2";
		else if ($pirate1 < 106)
			$pgate1 = "3";
		else if ($pirate1 < 131)
			$pgate1 = "4";
		else if ($pirate1 < 155)
			$pgate1 = "5";
		else if ($pirate1 < 224)
			$pgate1 = "6";
		else if ($pirate1 < 259)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 39)
			$pgate2 = "1";
		else if ($pirate2 < 68)
			$pgate2 = "2";
		else if ($pirate2 < 106)
			$pgate2 = "3";
		else if ($pirate2 < 131)
			$pgate2 = "4";
		else if ($pirate2 < 155)
			$pgate2 = "5";
		else if ($pirate2 < 224)
			$pgate2 = "6";
		else if ($pirate2 < 259)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 39)
			$pgate3 = "1";
		else if ($pirate3 < 68)
			$pgate3 = "2";
		else if ($pirate3 < 106)
			$pgate3 = "3";
		else if ($pirate3 < 131)
			$pgate3 = "4";
		else if ($pirate3 < 155)
			$pgate3 = "5";
		else if ($pirate3 < 224)
			$pgate3 = "6";
		else if ($pirate3 < 259)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 22) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 38)
			$pgate1 = "1";
		else if ($pirate1 < 67)
			$pgate1 = "2";
		else if ($pirate1 < 105)
			$pgate1 = "3";
		else if ($pirate1 < 127)
			$pgate1 = "4";
		else if ($pirate1 < 148)
			$pgate1 = "5";
		else if ($pirate1 < 220)
			$pgate1 = "6";
		else if ($pirate1 < 258)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 38)
			$pgate2 = "1";
		else if ($pirate2 < 67)
			$pgate2 = "2";
		else if ($pirate2 < 105)
			$pgate2 = "3";
		else if ($pirate2 < 127)
			$pgate2 = "4";
		else if ($pirate2 < 148)
			$pgate2 = "5";
		else if ($pirate2 < 220)
			$pgate2 = "6";
		else if ($pirate2 < 258)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 38)
			$pgate3 = "1";
		else if ($pirate3 < 67)
			$pgate3 = "2";
		else if ($pirate3 < 105)
			$pgate3 = "3";
		else if ($pirate3 < 127)
			$pgate3 = "4";
		else if ($pirate3 < 148)
			$pgate3 = "5";
		else if ($pirate3 < 220)
			$pgate3 = "6";
		else if ($pirate3 < 258)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 23) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
		<td valign="bottom" colspan="8">
		<?php for($i = 0; $i < 5; $i++)
		{
			do
				{
					$pirate1 = rand(0, 300);
					$pirate2 = rand(0, 300);
					$pirate3 = rand(0, 300);

		if ($pirate1 < 37)
			$pgate1 = "1";
		else if ($pirate1 < 66)
			$pgate1 = "2";
		else if ($pirate1 < 105)
			$pgate1 = "3";
		else if ($pirate1 < 123)
			$pgate1 = "4";
		else if ($pirate1 < 142)
			$pgate1 = "5";
		else if ($pirate1 < 217)
			$pgate1 = "6";
		else if ($pirate1 < 257)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 37)
			$pgate2 = "1";
		else if ($pirate2 < 66)
			$pgate2 = "2";
		else if ($pirate2 < 105)
			$pgate2 = "3";
		else if ($pirate2 < 123)
			$pgate2 = "4";
		else if ($pirate2 < 142)
			$pgate2 = "5";
		else if ($pirate2 < 217)
			$pgate2 = "6";
		else if ($pirate2 < 257)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 37)
			$pgate3 = "1";
		else if ($pirate3 < 66)
			$pgate3 = "2";
		else if ($pirate3 < 105)
			$pgate3 = "3";
		else if ($pirate3 < 123)
			$pgate3 = "4";
		else if ($pirate3 < 142)
			$pgate3 = "5";
		else if ($pirate3 < 217)
			$pgate3 = "6";
		else if ($pirate3 < 257)
			$pgate3 = "7";
		else
			$pgate3 = "8";
				} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

		} ?>
		</td>
	</tr>

	<?php } else if ($_SESSION['counter'] == 24) { ?>
		<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
			<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
			<td valign="bottom" colspan="8">
			<?php for($i = 0; $i < 5; $i++)
			{
				do
					{
						$pirate1 = rand(0, 300);
						$pirate2 = rand(0, 300);
						$pirate3 = rand(0, 300);

			if ($pirate1 < 36)
				$pgate1 = "1";
			else if ($pirate1 < 64)
				$pgate1 = "2";
			else if ($pirate1 < 104)
				$pgate1 = "3";
			else if ($pirate1 < 119)
				$pgate1 = "4";
			else if ($pirate1 < 137)
				$pgate1 = "5";
			else if ($pirate1 < 215)
				$pgate1 = "6";
			else if ($pirate1 < 256)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 36)
				$pgate2 = "1";
			else if ($pirate2 < 64)
				$pgate2 = "2";
			else if ($pirate2 < 104)
				$pgate2 = "3";
			else if ($pirate2 < 119)
				$pgate2 = "4";
			else if ($pirate2 < 137)
				$pgate2 = "5";
			else if ($pirate2 < 215)
				$pgate2 = "6";
			else if ($pirate2 < 256)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 36)
				$pgate3 = "1";
			else if ($pirate3 < 64)
				$pgate3 = "2";
			else if ($pirate3 < 104)
				$pgate3 = "3";
			else if ($pirate3 < 119)
				$pgate3 = "4";
			else if ($pirate3 < 137)
				$pgate3 = "5";
			else if ($pirate3 < 215)
				$pgate3 = "6";
			else if ($pirate3 < 256)
				$pgate3 = "7";
			else
				$pgate3 = "8";
					} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

							if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

			} ?>
			</td>
	</tr>

	<?php } else if ($_SESSION['counter'] == 25) { ?>
		<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
			<td bgcolor = "#afc7c7" align="left">Observations of Guards</td>
			<td valign="bottom" colspan="8">
			<?php for($i = 0; $i < 5; $i++)
			{
				do
					{
						$pirate1 = rand(0, 300);
						$pirate2 = rand(0, 300);
						$pirate3 = rand(0, 300);

			if ($pirate1 < 30)
				$pgate1 = "1";
			else if ($pirate1 < 56)
				$pgate1 = "2";
			else if ($pirate1 < 104)
				$pgate1 = "3";
			else if ($pirate1 < 104)
				$pgate1 = "4";
			else if ($pirate1 < 117)
				$pgate1 = "5";
			else if ($pirate1 < 210)
				$pgate1 = "6";
			else if ($pirate1 < 252)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 30)
				$pgate2 = "1";
			else if ($pirate2 < 56)
				$pgate2 = "2";
			else if ($pirate2 < 104)
				$pgate2 = "3";
			else if ($pirate2 < 104)
				$pgate2 = "4";
			else if ($pirate2 < 117)
				$pgate2 = "5";
			else if ($pirate2 < 210)
				$pgate2 = "6";
			else if ($pirate2 < 252)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 30)
				$pgate3 = "1";
			else if ($pirate3 < 56)
				$pgate3 = "2";
			else if ($pirate3 < 104)
				$pgate3 = "3";
			else if ($pirate3 < 104)
				$pgate3 = "4";
			else if ($pirate3 < 117)
				$pgate3 = "5";
			else if ($pirate3 < 210)
				$pgate3 = "6";
			else if ($pirate3 < 252)
				$pgate3 = "7";
			else
				$pgate3 = "8";
					} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

						if ($pgate2 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate2;
		$pgate2 = $temp;
	}
	if ($pgate3 < $pgate1)
	{
		$temp = $pgate1;
		$pgate1 = $pgate3;
		$pgate3 = $temp;
	}
	if ($pgate3 < $pgate2)
	{
		$temp = $pgate2;
		$pgate2 = $pgate3;
		$pgate3 = $temp;
	}
	print "[$pgate1, $pgate2, $pgate3] ";
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]][$i] = "[$pgate1, $pgate2, $pgate3]";

			} ?>
			</td>
	</tr>

<?php } ?>

<?php if (($_SESSION['counter'] == 0) || ($_SESSION['counter'] == 1) || ($_SESSION['counter'] == 2) || ($_SESSION['counter'] == 3)
			|| ($_SESSION['counter'] == 4) || ($_SESSION['counter'] == 5) || ($_SESSION['counter'] == 6) || ($_SESSION['counter'] == 7)
			|| ($_SESSION['counter'] == 8) || ($_SESSION['counter'] == 9) || ($_SESSION['counter'] == 10) || ($_SESSION['counter'] == 11)
			|| ($_SESSION['counter'] == 12)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>5</td><td>3</td><td>8</td><td>3</td><td>3</td><td>4</td><td>3</td><td>6</td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-2</td><td>-5</td><td>-4</td><td>-6</td><td>-3</td><td>-10</td><td>-7</td><td>-2</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 13) || ($_SESSION['counter'] == 14) || ($_SESSION['counter'] == 15) || ($_SESSION['counter'] == 16)
			|| ($_SESSION['counter'] == 17) || ($_SESSION['counter'] == 18) || ($_SESSION['counter'] == 19) || ($_SESSION['counter'] == 20)
			|| ($_SESSION['counter'] == 21) || ($_SESSION['counter'] == 22) || ($_SESSION['counter'] == 23) || ($_SESSION['counter'] == 24)
			|| ($_SESSION['counter'] == 25)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>5</td><td>9</td><td>10</td><td>2</td><td>10</td><td>4</td><td>8</td><td>8</td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-10</td><td>-4</td><td>-9</td><td>-3</td><td>-10</td><td>-10</td><td>-2</td><td>-5</td>
	</tr>
<?php } ?>

<?php if ($_SESSION['counter'] < $maxround) { ?>
</table>

<br/>Please choose a door to attack. Press the Submit Button to confirm your selection.<br/>
<br/>

<input type="submit" type="submit" name="submit_form" id="submit_form" value="Submit">
<br/>
<h4>Please refresh the page if your game is stuck.</h4>
<h4>Your scores will be displayed at the end of the game.</h4>
</form>
<?php } ?>

<?php if ($_SESSION['counter'] >= $maxround) {
	session_destroy();
 } ?>

<script type="text/javascript">
	function uploadToFacebook()
	{
		FB_RequireFeatures(["Api"],function()
		{
			FB.init("3bdf35a7c722a4a6e636c1e96da4334f","xd_receiver.htm");
			FB.Connect.requireSession();
			FB.Facebook.get_sessionState().waitUntilReady(function()
			{
				FB.Connect.streamPublish('is playing the game of "The Guards and The Treasure".',{"name": "<?php echo $_SESSION['username']; ?> won <?php echo $tpoints; ?> points by winning <?php echo $twon; ?> of 12 rounds. Play to win an iPod Touch!","caption": "Let's beat the guards and steal some treasure! Click to launch the Game!", "href": "http://games.mohitgoenka.com", "media": [{'type':'image','src':'http://games.mohitgoenka.com/Images/treasure.jpg','href':'http://games.mohitgoenka.com'}], "action_links": [{"text":"Play the game of \"The Guards and The Treasure\"!","href":"http://games.mohitgoenka.com"}],"app_has_no_session":false,"body_general":null})
			});
		});
	}
</script>

<script type="text/javascript" src="http://static.ak.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php"></script>

</div>
</div>
<br />

<!-- END Homepage Article -->

<!-- Homepage Article >

<div class="post">

<div class="posttitle">
<h2 id="comment">Comments</h2>
</div>

<div class="entry" style="background-color:#eceff5; padding: 0.45em;">
	<fb:comments width="541"></fb:comments>
</div>

</div>
<br />

<!-- END Homepage Article -->

</div>

<!-- END Content -->


<!-- Right Side Menu -->

<!--div id="nav-right" style="margin-bottom:5px;">

</div-->

<!-- END Right Side Menu -->


<!-- Footer -->
</div>
</div>

<div class="footer-area" style="margin-top:5px;"><b>Copyright &copy; 2010 - All Rights Reserved</b>

<div id="back-to-top"><a href="javascript:backToTop()">Back to Top</a>
</div>

</div>

<div class="Theme-Sponsors" style="margin-bottom:5px;" align="left">This Page was last updated on January 19, 2011</div>
<!-- END Footer -->

</body>

</html>