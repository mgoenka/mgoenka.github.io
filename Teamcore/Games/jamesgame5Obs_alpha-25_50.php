<?php
	session_start();
	$maxround = 36;
	$curround = 36;

	$gate = $_REQUEST['gate'];

	do
	{

	if ($_SESSION['counter'] == 0)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 43)
			$pgate1 = "1";
		else if ($pirate1 < 100)
			$pgate1 = "2";
		else if ($pirate1 < 124)
			$pgate1 = "3";
		else if ($pirate1 < 141)
			$pgate1 = "4";
		else if ($pirate1 < 192)
			$pgate1 = "5";
		else if ($pirate1 < 233)
			$pgate1 = "6";
		else if ($pirate1 < 262)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 43)
			$pgate2 = "1";
		else if ($pirate2 < 100)
			$pgate2 = "2";
		else if ($pirate2 < 124)
			$pgate2 = "3";
		else if ($pirate2 < 141)
			$pgate2 = "4";
		else if ($pirate2 < 192)
			$pgate2 = "5";
		else if ($pirate2 < 233)
			$pgate2 = "6";
		else if ($pirate2 < 262)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 43)
			$pgate3 = "1";
		else if ($pirate3 < 100)
			$pgate3 = "2";
		else if ($pirate3 < 124)
			$pgate3 = "3";
		else if ($pirate3 < 141)
			$pgate3 = "4";
		else if ($pirate3 < 192)
			$pgate3 = "5";
		else if ($pirate3 < 233)
			$pgate3 = "6";
		else if ($pirate3 < 262)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 1)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 44)
			$pgate1 = "1";
		else if ($pirate1 < 110)
			$pgate1 = "2";
		else if ($pirate1 < 122)
			$pgate1 = "3";
		else if ($pirate1 < 141)
			$pgate1 = "4";
		else if ($pirate1 < 199)
			$pgate1 = "5";
		else if ($pirate1 < 241)
			$pgate1 = "6";
		else if ($pirate1 < 261)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 44)
			$pgate2 = "1";
		else if ($pirate2 < 110)
			$pgate2 = "2";
		else if ($pirate2 < 122)
			$pgate2 = "3";
		else if ($pirate2 < 141)
			$pgate2 = "4";
		else if ($pirate2 < 199)
			$pgate2 = "5";
		else if ($pirate2 < 241)
			$pgate2 = "6";
		else if ($pirate2 < 261)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 44)
			$pgate3 = "1";
		else if ($pirate3 < 110)
			$pgate3 = "2";
		else if ($pirate3 < 122)
			$pgate3 = "3";
		else if ($pirate3 < 141)
			$pgate3 = "4";
		else if ($pirate3 < 199)
			$pgate3 = "5";
		else if ($pirate3 < 241)
			$pgate3 = "6";
		else if ($pirate3 < 261)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 2)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 49)
			$pgate1 = "1";
		else if ($pirate1 < 121)
			$pgate1 = "2";
		else if ($pirate1 < 123)
			$pgate1 = "3";
		else if ($pirate1 < 132)
			$pgate1 = "4";
		else if ($pirate1 < 196)
			$pgate1 = "5";
		else if ($pirate1 < 247)
			$pgate1 = "6";
		else if ($pirate1 < 253)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 49)
			$pgate2 = "1";
		else if ($pirate2 < 121)
			$pgate2 = "2";
		else if ($pirate2 < 123)
			$pgate2 = "3";
		else if ($pirate2 < 132)
			$pgate2 = "4";
		else if ($pirate2 < 196)
			$pgate2 = "5";
		else if ($pirate2 < 247)
			$pgate2 = "6";
		else if ($pirate2 < 253)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 49)
			$pgate3 = "1";
		else if ($pirate3 < 121)
			$pgate3 = "2";
		else if ($pirate3 < 123)
			$pgate3 = "3";
		else if ($pirate3 < 132)
			$pgate3 = "4";
		else if ($pirate3 < 196)
			$pgate3 = "5";
		else if ($pirate3 < 247)
			$pgate3 = "6";
		else if ($pirate3 < 253)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 3)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 69)
			$pgate1 = "1";
		else if ($pirate1 < 135)
			$pgate1 = "2";
		else if ($pirate1 < 144)
			$pgate1 = "3";
		else if ($pirate1 < 163)
			$pgate1 = "4";
		else if ($pirate1 < 221)
			$pgate1 = "5";
		else if ($pirate1 < 263)
			$pgate1 = "6";
		else if ($pirate1 < 294)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 69)
			$pgate2 = "1";
		else if ($pirate2 < 135)
			$pgate2 = "2";
		else if ($pirate2 < 144)
			$pgate2 = "3";
		else if ($pirate2 < 163)
			$pgate2 = "4";
		else if ($pirate2 < 221)
			$pgate2 = "5";
		else if ($pirate2 < 263)
			$pgate2 = "6";
		else if ($pirate2 < 294)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 69)
			$pgate3 = "1";
		else if ($pirate3 < 135)
			$pgate3 = "2";
		else if ($pirate3 < 144)
			$pgate3 = "3";
		else if ($pirate3 < 163)
			$pgate3 = "4";
		else if ($pirate3 < 221)
			$pgate3 = "5";
		else if ($pirate3 < 263)
			$pgate3 = "6";
		else if ($pirate3 < 294)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 4)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 85)
			$pgate1 = "1";
		else if ($pirate1 < 151)
			$pgate1 = "2";
		else if ($pirate1 < 151)
			$pgate1 = "3";
		else if ($pirate1 < 170)
			$pgate1 = "4";
		else if ($pirate1 < 228)
			$pgate1 = "5";
		else if ($pirate1 < 270)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 85)
			$pgate2 = "1";
		else if ($pirate2 < 151)
			$pgate2 = "2";
		else if ($pirate2 < 151)
			$pgate2 = "3";
		else if ($pirate2 < 170)
			$pgate2 = "4";
		else if ($pirate2 < 228)
			$pgate2 = "5";
		else if ($pirate2 < 270)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 85)
			$pgate3 = "1";
		else if ($pirate3 < 151)
			$pgate3 = "2";
		else if ($pirate3 < 151)
			$pgate3 = "3";
		else if ($pirate3 < 170)
			$pgate3 = "4";
		else if ($pirate3 < 228)
			$pgate3 = "5";
		else if ($pirate3 < 270)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 5)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 49)
			$pgate1 = "1";
		else if ($pirate1 < 102)
			$pgate1 = "2";
		else if ($pirate1 < 117)
			$pgate1 = "3";
		else if ($pirate1 < 153)
			$pgate1 = "4";
		else if ($pirate1 < 197)
			$pgate1 = "5";
		else if ($pirate1 < 256)
			$pgate1 = "6";
		else if ($pirate1 < 293)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 49)
			$pgate2 = "1";
		else if ($pirate2 < 102)
			$pgate2 = "2";
		else if ($pirate2 < 117)
			$pgate2 = "3";
		else if ($pirate2 < 153)
			$pgate2 = "4";
		else if ($pirate2 < 197)
			$pgate2 = "5";
		else if ($pirate2 < 256)
			$pgate2 = "6";
		else if ($pirate2 < 293)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 49)
			$pgate3 = "1";
		else if ($pirate3 < 102)
			$pgate3 = "2";
		else if ($pirate3 < 117)
			$pgate3 = "3";
		else if ($pirate3 < 153)
			$pgate3 = "4";
		else if ($pirate3 < 197)
			$pgate3 = "5";
		else if ($pirate3 < 256)
			$pgate3 = "6";
		else if ($pirate3 < 293)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 6)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 57)
			$pgate1 = "1";
		else if ($pirate1 < 115)
			$pgate1 = "2";
		else if ($pirate1 < 133)
			$pgate1 = "3";
		else if ($pirate1 < 154)
			$pgate1 = "4";
		else if ($pirate1 < 205)
			$pgate1 = "5";
		else if ($pirate1 < 252)
			$pgate1 = "6";
		else if ($pirate1 < 282)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 57)
			$pgate2 = "1";
		else if ($pirate2 < 115)
			$pgate2 = "2";
		else if ($pirate2 < 133)
			$pgate2 = "3";
		else if ($pirate2 < 154)
			$pgate2 = "4";
		else if ($pirate2 < 205)
			$pgate2 = "5";
		else if ($pirate2 < 252)
			$pgate2 = "6";
		else if ($pirate2 < 282)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 57)
			$pgate3 = "1";
		else if ($pirate3 < 115)
			$pgate3 = "2";
		else if ($pirate3 < 133)
			$pgate3 = "3";
		else if ($pirate3 < 154)
			$pgate3 = "4";
		else if ($pirate3 < 205)
			$pgate3 = "5";
		else if ($pirate3 < 252)
			$pgate3 = "6";
		else if ($pirate3 < 282)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 7)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 67)
			$pgate1 = "1";
		else if ($pirate1 < 134)
			$pgate1 = "2";
		else if ($pirate1 < 137)
			$pgate1 = "3";
		else if ($pirate1 < 157)
			$pgate1 = "4";
		else if ($pirate1 < 213)
			$pgate1 = "5";
		else if ($pirate1 < 269)
			$pgate1 = "6";
		else if ($pirate1 < 297)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 67)
			$pgate2 = "1";
		else if ($pirate2 < 134)
			$pgate2 = "2";
		else if ($pirate2 < 137)
			$pgate2 = "3";
		else if ($pirate2 < 157)
			$pgate2 = "4";
		else if ($pirate2 < 213)
			$pgate2 = "5";
		else if ($pirate2 < 269)
			$pgate2 = "6";
		else if ($pirate2 < 297)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 67)
			$pgate3 = "1";
		else if ($pirate3 < 134)
			$pgate3 = "2";
		else if ($pirate3 < 137)
			$pgate3 = "3";
		else if ($pirate3 < 157)
			$pgate3 = "4";
		else if ($pirate3 < 213)
			$pgate3 = "5";
		else if ($pirate3 < 269)
			$pgate3 = "6";
		else if ($pirate3 < 297)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 8)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 73)
			$pgate1 = "1";
		else if ($pirate1 < 150)
			$pgate1 = "2";
		else if ($pirate1 < 150)
			$pgate1 = "3";
		else if ($pirate1 < 158)
			$pgate1 = "4";
		else if ($pirate1 < 214)
			$pgate1 = "5";
		else if ($pirate1 < 281)
			$pgate1 = "6";
		else if( $pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 73)
			$pgate2 = "1";
		else if ($pirate2 < 150)
			$pgate2 = "2";
		else if ($pirate2 < 150)
			$pgate2 = "3";
		else if ($pirate2 < 158)
			$pgate2 = "4";
		else if ($pirate2 < 214)
			$pgate2 = "5";
		else if ($pirate2 < 281)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 73)
			$pgate3 = "1";
		else if ($pirate3 < 150)
			$pgate3 = "2";
		else if ($pirate3 < 150)
			$pgate3 = "3";
		else if ($pirate3 < 158)
			$pgate3 = "4";
		else if ($pirate3 < 214)
			$pgate3 = "5";
		else if ($pirate3 < 281)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}


	//Start reward structure 2 strategies

	else if ($_SESSION['counter'] == 9)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 32)
			$pgate1 = "1";
		else if ($pirate1 < 86)
			$pgate1 = "2";
		else if ($pirate1 < 96)
			$pgate1 = "3";
		else if ($pirate1 < 135)
			$pgate1 = "4";
		else if ($pirate1 < 200)
			$pgate1 = "5";
		else if ($pirate1 < 207)
			$pgate1 = "6";
		else if ($pirate1 < 264)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 32)
			$pgate2 = "1";
		else if ($pirate2 < 86)
			$pgate2 = "2";
		else if ($pirate2 < 96)
			$pgate2 = "3";
		else if ($pirate2 < 135)
			$pgate2 = "4";
		else if ($pirate2 < 200)
			$pgate2 = "5";
		else if ($pirate2 < 207)
			$pgate2 = "6";
		else if ($pirate2 < 264)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 32)
			$pgate3 = "1";
		else if ($pirate3 < 86)
			$pgate3 = "2";
		else if ($pirate3 < 96)
			$pgate3 = "3";
		else if ($pirate3 < 135)
			$pgate3 = "4";
		else if ($pirate3 < 200)
			$pgate3 = "5";
		else if ($pirate3 < 207)
			$pgate3 = "6";
		else if ($pirate3 < 264)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 10)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 20)
			$pgate1 = "1";
		else if ($pirate1 < 81)
			$pgate1 = "2";
		else if ($pirate1 < 81)
			$pgate1 = "3";
		else if ($pirate1 < 114)
			$pgate1 = "4";
		else if ($pirate1 < 193)
			$pgate1 = "5";
		else if ($pirate1 < 193)
			$pgate1 = "6";
		else if ($pirate1 < 262)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 20)
			$pgate2 = "1";
		else if ($pirate2 < 81)
			$pgate2 = "2";
		else if ($pirate2 < 81)
			$pgate2 = "3";
		else if ($pirate2 < 114)
			$pgate2 = "4";
		else if ($pirate2 < 193)
			$pgate2 = "5";
		else if ($pirate2 < 193)
			$pgate2 = "6";
		else if ($pirate2 < 262)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 20)
			$pgate3 = "1";
		else if ($pirate3 < 81)
			$pgate3 = "2";
		else if ($pirate3 < 81)
			$pgate3 = "3";
		else if ($pirate3 < 114)
			$pgate3 = "4";
		else if ($pirate3 < 193)
			$pgate3 = "5";
		else if ($pirate3 < 193)
			$pgate3 = "6";
		else if ($pirate3 < 262)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 11)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 4)
			$pgate1 = "1";
		else if ($pirate1 < 74)
			$pgate1 = "2";
		else if ($pirate1 < 74)
			$pgate1 = "3";
		else if ($pirate1 < 94)
			$pgate1 = "4";
		else if ($pirate1 < 180)
			$pgate1 = "5";
		else if ($pirate1 < 180)
			$pgate1 = "6";
		else if ($pirate1 < 266)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 4)
			$pgate2 = "1";
		else if ($pirate2 < 74)
			$pgate2 = "2";
		else if ($pirate2 < 74)
			$pgate2 = "3";
		else if ($pirate2 < 94)
			$pgate2 = "4";
		else if ($pirate2 < 180)
			$pgate2 = "5";
		else if ($pirate2 < 180)
			$pgate2 = "6";
		else if ($pirate2 < 266)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 4)
			$pgate3 = "1";
		else if ($pirate3 < 74)
			$pgate3 = "2";
		else if ($pirate3 < 74)
			$pgate3 = "3";
		else if ($pirate3 < 94)
			$pgate3 = "4";
		else if ($pirate3 < 180)
			$pgate3 = "5";
		else if ($pirate3 < 180)
			$pgate3 = "6";
		else if ($pirate3 < 266)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 12)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 47)
			$pgate1 = "1";
		else if ($pirate1 < 101)
			$pgate1 = "2";
		else if ($pirate1 < 101)
			$pgate1 = "3";
		else if ($pirate1 < 145)
			$pgate1 = "4";
		else if ($pirate1 < 219)
			$pgate1 = "5";
		else if ($pirate1 < 219)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 47)
			$pgate2 = "1";
		else if ($pirate2 < 101)
			$pgate2 = "2";
		else if ($pirate2 < 101)
			$pgate2 = "3";
		else if ($pirate2 < 145)
			$pgate2 = "4";
		else if ($pirate2 < 219)
			$pgate2 = "5";
		else if ($pirate2 < 219)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 47)
			$pgate3 = "1";
		else if ($pirate3 < 101)
			$pgate3 = "2";
		else if ($pirate3 < 101)
			$pgate3 = "3";
		else if ($pirate3 < 145)
			$pgate3 = "4";
		else if ($pirate3 < 219)
			$pgate3 = "5";
		else if ($pirate3 < 219)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 13)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 47)
			$pgate1 = "1";
		else if ($pirate1 < 99)
			$pgate1 = "2";
		else if ($pirate1 < 99)
			$pgate1 = "3";
		else if ($pirate1 < 141)
			$pgate1 = "4";
		else if ($pirate1 < 214)
			$pgate1 = "5";
		else if ($pirate1 < 214)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 47)
			$pgate2 = "1";
		else if ($pirate2 < 99)
			$pgate2 = "2";
		else if ($pirate2 < 99)
			$pgate2 = "3";
		else if ($pirate2 < 141)
			$pgate2 = "4";
		else if ($pirate2 < 214)
			$pgate2 = "5";
		else if ($pirate2 < 214)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 47)
			$pgate3 = "1";
		else if ($pirate3 < 99)
			$pgate3 = "2";
		else if ($pirate3 < 99)
			$pgate3 = "3";
		else if ($pirate3 < 141)
			$pgate3 = "4";
		else if ($pirate3 < 214)
			$pgate3 = "5";
		else if ($pirate3 < 214)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 14)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 42)
			$pgate1 = "1";
		else if ($pirate1 < 120)
			$pgate1 = "2";
		else if ($pirate1 < 129)
			$pgate1 = "3";
		else if ($pirate1 < 176)
			$pgate1 = "4";
		else if ($pirate1 < 240)
			$pgate1 = "5";
		else if ($pirate1 < 240)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 42)
			$pgate2 = "1";
		else if ($pirate2 < 120)
			$pgate2 = "2";
		else if ($pirate1 < 129)
			$pgate1 = "3";
		else if ($pirate1 < 176)
			$pgate1 = "4";
		else if ($pirate1 < 240)
			$pgate1 = "5";
		else if ($pirate2 < 240)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 42)
			$pgate3 = "1";
		else if ($pirate3 < 120)
			$pgate3 = "2";
		else if ($pirate1 < 129)
			$pgate1 = "3";
		else if ($pirate1 < 176)
			$pgate1 = "4";
		else if ($pirate1 < 240)
			$pgate1 = "5";
		else if ($pirate3 < 240)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 15)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 54)
			$pgate1 = "1";
		else if ($pirate1 < 106)
			$pgate1 = "2";
		else if ($pirate1 < 127)
			$pgate1 = "3";
		else if ($pirate1 < 163)
			$pgate1 = "4";
		else if ($pirate1 < 227)
			$pgate1 = "5";
		else if ($pirate1 < 243)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 54)
			$pgate2 = "1";
		else if ($pirate2 < 106)
			$pgate2 = "2";
		else if ($pirate2 < 127)
			$pgate2 = "3";
		else if ($pirate2 < 163)
			$pgate2 = "4";
		else if ($pirate2 < 227)
			$pgate2 = "5";
		else if ($pirate2 < 243)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 54)
			$pgate3 = "1";
		else if ($pirate3 < 106)
			$pgate3 = "2";
		else if ($pirate3 < 127)
			$pgate3 = "3";
		else if ($pirate3 < 163)
			$pgate3 = "4";
		else if ($pirate3 < 227)
			$pgate3 = "5";
		else if ($pirate3 < 243)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 16)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 56)
			$pgate1 = "1";
		else if ($pirate1 < 121)
			$pgate1 = "2";
		else if ($pirate1 < 121)
			$pgate1 = "3";
		else if ($pirate1 < 161)
			$pgate1 = "4";
		else if ($pirate1 < 235)
			$pgate1 = "5";
		else if ($pirate1 < 235)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 56)
			$pgate2 = "1";
		else if ($pirate2 < 121)
			$pgate2 = "2";
		else if ($pirate2 < 121)
			$pgate2 = "3";
		else if ($pirate2 < 161)
			$pgate2 = "4";
		else if ($pirate2 < 235)
			$pgate2 = "5";
		else if ($pirate2 < 235)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 56)
			$pgate3 = "1";
		else if ($pirate3 < 121)
			$pgate3 = "2";
		else if ($pirate3 < 121)
			$pgate3 = "3";
		else if ($pirate3 < 161)
			$pgate3 = "4";
		else if ($pirate3 < 235)
			$pgate3 = "5";
		else if ($pirate3 < 235)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 17)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 47)
			$pgate1 = "1";
		else if ($pirate1 < 120)
			$pgate1 = "2";
		else if ($pirate1 < 120)
			$pgate1 = "3";
		else if ($pirate1 < 152)
			$pgate1 = "4";
		else if ($pirate1 < 234)
			$pgate1 = "5";
		else if ($pirate1 < 234)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 47)
			$pgate2 = "1";
		else if ($pirate2 < 120)
			$pgate2 = "2";
		else if ($pirate2 < 120)
			$pgate2 = "3";
		else if ($pirate2 < 152)
			$pgate2 = "4";
		else if ($pirate2 < 234)
			$pgate2 = "5";
		else if ($pirate2 < 234)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 47)
			$pgate3 = "1";
		else if ($pirate3 < 120)
			$pgate3 = "2";
		else if ($pirate3 < 120)
			$pgate3 = "3";
		else if ($pirate3 < 152)
			$pgate3 = "4";
		else if ($pirate3 < 234)
			$pgate3 = "5";
		else if ($pirate3 < 234)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}


	//Start reward structure 3 strategies
	else if ($_SESSION['counter'] == 18)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 46)
			$pgate1 = "1";
		else if ($pirate1 < 73)
			$pgate1 = "2";
		else if ($pirate1 < 111)
			$pgate1 = "3";
		else if ($pirate1 < 134)
			$pgate1 = "4";
		else if ($pirate1 < 146)
			$pgate1 = "5";
		else if ($pirate1 < 226)
			$pgate1 = "6";
		else if ($pirate1 < 260)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 46)
			$pgate2 = "1";
		else if ($pirate2 < 73)
			$pgate2 = "2";
		else if ($pirate2 < 111)
			$pgate2 = "3";
		else if ($pirate2 < 134)
			$pgate2 = "4";
		else if ($pirate2 < 146)
			$pgate2 = "5";
		else if ($pirate2 < 226)
			$pgate2 = "6";
		else if ($pirate2 < 260)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 46)
			$pgate3 = "1";
		else if ($pirate3 < 73)
			$pgate3 = "2";
		else if ($pirate3 < 111)
			$pgate3 = "3";
		else if ($pirate3 < 134)
			$pgate3 = "4";
		else if ($pirate3 < 146)
			$pgate3 = "5";
		else if ($pirate3 < 226)
			$pgate3 = "6";
		else if ($pirate3 < 260)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 19)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 53)
			$pgate1 = "1";
		else if ($pirate1 < 70)
			$pgate1 = "2";
		else if ($pirate1 < 119)
			$pgate1 = "3";
		else if ($pirate1 < 131)
			$pgate1 = "4";
		else if ($pirate1 < 133)
			$pgate1 = "5";
		else if ($pirate1 < 218)
			$pgate1 = "6";
		else if ($pirate1 < 252)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 53)
			$pgate2 = "1";
		else if ($pirate2 < 70)
			$pgate2 = "2";
		else if ($pirate2 < 119)
			$pgate2 = "3";
		else if ($pirate2 < 131)
			$pgate2 = "4";
		else if ($pirate2 < 133)
			$pgate2 = "5";
		else if ($pirate2 < 218)
			$pgate2 = "6";
		else if ($pirate2 < 252)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 53)
			$pgate3 = "1";
		else if ($pirate3 < 70)
			$pgate3 = "2";
		else if ($pirate3 < 119)
			$pgate3 = "3";
		else if ($pirate3 < 131)
			$pgate3 = "4";
		else if ($pirate3 < 133)
			$pgate3 = "5";
		else if ($pirate3 < 218)
			$pgate3 = "6";
		else if ($pirate3 < 252)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 20)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 64)
			$pgate1 = "1";
		else if ($pirate1 < 67)
			$pgate1 = "2";
		else if ($pirate1 < 122)
			$pgate1 = "3";
		else if ($pirate1 < 123)
			$pgate1 = "4";
		else if ($pirate1 < 123)
			$pgate1 = "5";
		else if ($pirate1 < 213)
			$pgate1 = "6";
		else if ($pirate1 < 243)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 64)
			$pgate2 = "1";
		else if ($pirate2 < 67)
			$pgate2 = "2";
		else if ($pirate2 < 122)
			$pgate2 = "3";
		else if ($pirate2 < 123)
			$pgate2 = "4";
		else if ($pirate2 < 123)
			$pgate2 = "5";
		else if ($pirate2 < 213)
			$pgate2 = "6";
		else if ($pirate2 < 243)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate1 < 64)
			$pgate3 = "1";
		else if ($pirate3 < 67)
			$pgate3 = "2";
		else if ($pirate3 < 122)
			$pgate3 = "3";
		else if ($pirate3 < 123)
			$pgate3 = "4";
		else if ($pirate3 < 123)
			$pgate3 = "5";
		else if ($pirate3 < 213)
			$pgate3 = "6";
		else if ($pirate3 < 243)
			$pgate3 = "7";
		else
			$pgate1 = "8";
	}
	else if ($_SESSION['counter'] == 21)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 55)
			$pgate1 = "1";
		else if ($pirate1 < 97)
			$pgate1 = "2";
		else if ($pirate1 < 109)
			$pgate1 = "3";
		else if ($pirate1 < 131)
			$pgate1 = "4";
		else if ($pirate1 < 131)
			$pgate1 = "5";
		else if ($pirate1 < 215)
			$pgate1 = "6";
		else if ($pirate1 < 252)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 55)
			$pgate2 = "1";
		else if ($pirate2 < 97)
			$pgate2 = "2";
		else if ($pirate2 < 109)
			$pgate2 = "3";
		else if ($pirate2 < 131)
			$pgate2 = "4";
		else if ($pirate2 < 131)
			$pgate2 = "5";
		else if ($pirate2 < 215)
			$pgate2 = "6";
		else if ($pirate2 < 252)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 55)
			$pgate3 = "1";
		else if ($pirate3 < 97)
			$pgate3 = "2";
		else if ($pirate3 < 109)
			$pgate3 = "3";
		else if ($pirate3 < 131)
			$pgate3 = "4";
		else if ($pirate3 < 131)
			$pgate3 = "5";
		else if ($pirate3 < 215)
			$pgate3 = "6";
		else if ($pirate3 < 252)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 22)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 77)
			$pgate1 = "1";
		else if ($pirate1 < 116)
			$pgate1 = "2";
		else if ($pirate1 < 116)
			$pgate1 = "3";
		else if ($pirate1 < 116)
			$pgate1 = "4";
		else if ($pirate1 < 116)
			$pgate1 = "5";
		else if ($pirate1 < 212)
			$pgate1 = "6";
		else if ($pirate1 < 234)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 77)
			$pgate2 = "1";
		else if ($pirate2 < 116)
			$pgate2 = "2";
		else if ($pirate2 < 116)
			$pgate2 = "3";
		else if ($pirate2 < 116)
			$pgate2 = "4";
		else if ($pirate2 < 116)
			$pgate2 = "5";
		else if ($pirate2 < 212)
			$pgate2 = "6";
		else if ($pirate2 < 234)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 77)
			$pgate3 = "1";
		else if ($pirate3 < 116)
			$pgate3 = "2";
		else if ($pirate3 < 116)
			$pgate3 = "3";
		else if ($pirate3 < 116)
			$pgate3 = "4";
		else if ($pirate3 < 116)
			$pgate3 = "5";
		else if ($pirate3 < 212)
			$pgate3 = "6";
		else if ($pirate3 < 234)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 23)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 53)
			$pgate1 = "1";
		else if ($pirate1 < 90)
			$pgate1 = "2";
		else if ($pirate1 < 102)
			$pgate1 = "3";
		else if ($pirate1 < 127)
			$pgate1 = "4";
		else if ($pirate1 < 133)
			$pgate1 = "5";
		else if ($pirate1 < 205)
			$pgate1 = "6";
		else if ($pirate1 < 236)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 53)
			$pgate2 = "1";
		else if ($pirate2 < 90)
			$pgate2 = "2";
		else if ($pirate2 < 102)
			$pgate2 = "3";
		else if ($pirate2 < 127)
			$pgate2 = "4";
		else if ($pirate2 < 133)
			$pgate2 = "5";
		else if ($pirate2 < 205)
			$pgate2 = "6";
		else if ($pirate2 < 236)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 53)
			$pgate3 = "1";
		else if ($pirate3 < 90)
			$pgate3 = "2";
		else if ($pirate3 < 102)
			$pgate3 = "3";
		else if ($pirate3 < 127)
			$pgate3 = "4";
		else if ($pirate3 < 133)
			$pgate3 = "5";
		else if ($pirate3 < 205)
			$pgate3 = "6";
		else if ($pirate3 < 236)
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
			else if ($pirate1 < 79)
				$pgate1 = "2";
			else if ($pirate1 < 99)
				$pgate1 = "3";
			else if ($pirate1 < 135)
				$pgate1 = "4";
			else if ($pirate1 < 148)
				$pgate1 = "5";
			else if ($pirate1 < 220)
				$pgate1 = "6";
			else if ($pirate1 < 263)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 36)
				$pgate2 = "1";
			else if ($pirate2 < 79)
				$pgate2 = "2";
			else if ($pirate2 < 99)
				$pgate2 = "3";
			else if ($pirate2 < 135)
				$pgate2 = "4";
			else if ($pirate2 < 148)
				$pgate2 = "5";
			else if ($pirate2 < 220)
				$pgate2 = "6";
			else if ($pirate2 < 263)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 36)
				$pgate3 = "1";
			else if ($pirate3 < 79)
				$pgate3 = "2";
			else if ($pirate3 < 99)
				$pgate3 = "3";
			else if ($pirate3 < 135)
				$pgate3 = "4";
			else if ($pirate3 < 148)
				$pgate3 = "5";
			else if ($pirate3 < 220)
				$pgate3 = "6";
			else if ($pirate3 < 263)
				$pgate3 = "7";
			else
				$pgate3 = "8";
	}

	else if ($_SESSION['counter'] == 25)
		{
			$pirate1 = rand(0, 300);
			$pirate2 = rand(0, 300);
			$pirate3 = rand(0, 300);

			if ($pirate1 < 45)
				$pgate1 = "1";
			else if ($pirate1 < 88)
				$pgate1 = "2";
			else if ($pirate1 < 94)
				$pgate1 = "3";
			else if ($pirate1 < 122)
				$pgate1 = "4";
			else if ($pirate1 < 122)
				$pgate1 = "5";
			else if ($pirate1 < 211)
				$pgate1 = "6";
			else if ($pirate1 < 251)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 45)
				$pgate2 = "1";
			else if ($pirate2 < 88)
				$pgate2 = "2";
			else if ($pirate2 < 94)
				$pgate2 = "3";
			else if ($pirate2 < 122)
				$pgate2 = "4";
			else if ($pirate2 < 122)
				$pgate2 = "5";
			else if ($pirate2 < 211)
				$pgate2 = "6";
			else if ($pirate2 < 251)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 45)
				$pgate3 = "1";
			else if ($pirate3 < 88)
				$pgate3 = "2";
			else if ($pirate3 < 94)
				$pgate3 = "3";
			else if ($pirate3 < 122)
				$pgate3 = "4";
			else if ($pirate3 < 122)
				$pgate3 = "5";
			else if ($pirate3 < 211)
				$pgate3 = "6";
			else if ($pirate3 < 251)
				$pgate3 = "7";
			else
				$pgate3 = "8";
	}

	else if ($_SESSION['counter'] == 26)
		{
			$pirate1 = rand(0, 300);
			$pirate2 = rand(0, 300);
			$pirate3 = rand(0, 300);

			if ($pirate1 < 60)
				$pgate1 = "1";
			else if ($pirate1 < 99)
				$pgate1 = "2";
			else if ($pirate1 < 99)
				$pgate1 = "3";
			else if ($pirate1 < 106)
				$pgate1 = "4";
			else if ($pirate1 < 106)
				$pgate1 = "5";
			else if ($pirate1 < 206)
				$pgate1 = "6";
			else if ($pirate1 < 233)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 60)
				$pgate2 = "1";
			else if ($pirate2 < 99)
				$pgate2 = "2";
			else if ($pirate2 < 99)
				$pgate2 = "3";
			else if ($pirate2 < 106)
				$pgate2 = "4";
			else if ($pirate2 < 106)
				$pgate2 = "5";
			else if ($pirate2 < 206)
				$pgate2 = "6";
			else if ($pirate2 < 233)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 60)
				$pgate3 = "1";
			else if ($pirate3 < 99)
				$pgate3 = "2";
			else if ($pirate3 < 99)
				$pgate3 = "3";
			else if ($pirate3 < 106)
				$pgate3 = "4";
			else if ($pirate3 < 106)
				$pgate3 = "5";
			else if ($pirate3 < 206)
				$pgate3 = "6";
			else if ($pirate3 < 233)
				$pgate3 = "7";
			else
				$pgate3 = "8";
	}


	//Begin reward structure 3 strategies
	else if ($_SESSION['counter'] == 27)
		{
			$pirate1 = rand(0, 300);
			$pirate2 = rand(0, 300);
			$pirate3 = rand(0, 300);

			if ($pirate1 < 37)
				$pgate1 = "1";
			else if ($pirate1 < 69)
				$pgate1 = "2";
			else if ($pirate1 < 99)
				$pgate1 = "3";
			else if ($pirate1 < 136)
				$pgate1 = "4";
			else if ($pirate1 < 146)
				$pgate1 = "5";
			else if ($pirate1 < 207)
				$pgate1 = "6";
			else if ($pirate1 < 256)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 37)
				$pgate2 = "1";
			else if ($pirate2 < 69)
				$pgate2 = "2";
			else if ($pirate2 < 99)
				$pgate2 = "3";
			else if ($pirate2 < 136)
				$pgate2 = "4";
			else if ($pirate2 < 146)
				$pgate2 = "5";
			else if ($pirate2 < 207)
				$pgate2 = "6";
			else if ($pirate2 < 256)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 37)
				$pgate3 = "1";
			else if ($pirate3 < 69)
				$pgate3 = "2";
			else if ($pirate3 < 99)
				$pgate3 = "3";
			else if ($pirate3 < 136)
				$pgate3 = "4";
			else if ($pirate3 < 146)
				$pgate3 = "5";
			else if ($pirate3 < 207)
				$pgate3 = "6";
			else if ($pirate3 < 256)
				$pgate3 = "7";
			else
				$pgate3 = "8";
	}

	else if ($_SESSION['counter'] == 28)
		{
			$pirate1 = rand(0, 300);
			$pirate2 = rand(0, 300);
			$pirate3 = rand(0, 300);

			if ($pirate1 < 39)
				$pgate1 = "1";
			else if ($pirate1 < 61)
				$pgate1 = "2";
			else if ($pirate1 < 84)
				$pgate1 = "3";
			else if ($pirate1 < 116)
				$pgate1 = "4";
			else if ($pirate1 < 116)
				$pgate1 = "5";
			else if ($pirate1 < 195)
				$pgate1 = "6";
			else if ($pirate1 < 254)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 39)
				$pgate2 = "1";
			else if ($pirate2 < 61)
				$pgate2 = "2";
			else if ($pirate2 < 84)
				$pgate2 = "3";
			else if ($pirate2 < 116)
				$pgate2 = "4";
			else if ($pirate2 < 116)
				$pgate2 = "5";
			else if ($pirate2 < 195)
				$pgate2 = "6";
			else if ($pirate2 < 254)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 39)
				$pgate3 = "1";
			else if ($pirate3 < 61)
				$pgate3 = "2";
			else if ($pirate3 < 84)
				$pgate3 = "3";
			else if ($pirate3 < 116)
				$pgate3 = "4";
			else if ($pirate3 < 116)
				$pgate3 = "5";
			else if ($pirate3 < 195)
				$pgate3 = "6";
			else if ($pirate3 < 254)
				$pgate3 = "7";
			else
				$pgate3 = "8";
	}

	else if ($_SESSION['counter'] == 29)
		{
			$pirate1 = rand(0, 300);
			$pirate2 = rand(0, 300);
			$pirate3 = rand(0, 300);

			if ($pirate1 < 40)
				$pgate1 = "1";
			else if ($pirate1 < 47)
				$pgate1 = "2";
			else if ($pirate1 < 57)
				$pgate1 = "3";
			else if ($pirate1 < 78)
				$pgate1 = "4";
			else if ($pirate1 < 78)
				$pgate1 = "5";
			else if ($pirate1 < 176)
				$pgate1 = "6";
			else if ($pirate1 < 251)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 40)
				$pgate2 = "1";
			else if ($pirate2 < 47)
				$pgate2 = "2";
			else if ($pirate2 < 57)
				$pgate2 = "3";
			else if ($pirate2 < 78)
				$pgate2 = "4";
			else if ($pirate2 < 78)
				$pgate2 = "5";
			else if ($pirate2 < 176)
				$pgate2 = "6";
			else if ($pirate2 < 251)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 40)
				$pgate3 = "1";
			else if ($pirate3 < 47)
				$pgate3 = "2";
			else if ($pirate3 < 57)
				$pgate3 = "3";
			else if ($pirate3 < 78)
				$pgate3 = "4";
			else if ($pirate3 < 78)
				$pgate3 = "5";
			else if ($pirate3 < 176)
				$pgate3 = "6";
			else if ($pirate3 < 251)
				$pgate3 = "7";
			else
				$pgate3 = "8";
	}

	else if ($_SESSION['counter'] == 30)
		{
			$pirate1 = rand(0, 300);
			$pirate2 = rand(0, 300);
			$pirate3 = rand(0, 300);

			if ($pirate1 < 16)
				$pgate1 = "1";
			else if ($pirate1 < 57)
				$pgate1 = "2";
			else if ($pirate1 < 66)
				$pgate1 = "3";
			else if ($pirate1 < 121)
				$pgate1 = "4";
			else if ($pirate1 < 121)
				$pgate1 = "5";
			else if ($pirate1 < 205)
				$pgate1 = "6";
			else if ($pirate1 < 246)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 16)
				$pgate2 = "1";
			else if ($pirate2 < 57)
				$pgate2 = "2";
			else if ($pirate2 < 66)
				$pgate2 = "3";
			else if ($pirate2 < 121)
				$pgate2 = "4";
			else if ($pirate2 < 121)
				$pgate2 = "5";
			else if ($pirate2 < 205)
				$pgate2 = "6";
			else if ($pirate2 < 246)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 16)
				$pgate3 = "1";
			else if ($pirate3 < 57)
				$pgate3 = "2";
			else if ($pirate3 < 66)
				$pgate3 = "3";
			else if ($pirate3 < 121)
				$pgate3 = "4";
			else if ($pirate3 < 121)
				$pgate3 = "5";
			else if ($pirate3 < 205)
				$pgate3 = "6";
			else if ($pirate3 < 246)
				$pgate3 = "7";
			else
				$pgate3 = "8";
	}

	else if ($_SESSION['counter'] == 31)
		{
			$pirate1 = rand(0, 300);
			$pirate2 = rand(0, 300);
			$pirate3 = rand(0, 300);

			if ($pirate1 < 0)
				$pgate1 = "1";
			else if ($pirate1 < 43)
				$pgate1 = "2";
			else if ($pirate1 < 43)
				$pgate1 = "3";
			else if ($pirate1 < 115)
				$pgate1 = "4";
			else if ($pirate1 < 115)
				$pgate1 = "5";
			else if ($pirate1 < 202)
				$pgate1 = "6";
			else if ($pirate1 < 244)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 0)
				$pgate2 = "1";
			else if ($pirate2 < 43)
				$pgate2 = "2";
			else if ($pirate2 < 43)
				$pgate2 = "3";
			else if ($pirate2 < 115)
				$pgate2 = "4";
			else if ($pirate2 < 115)
				$pgate2 = "5";
			else if ($pirate2 < 202)
				$pgate2 = "6";
			else if ($pirate2 < 244)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 0)
				$pgate3 = "1";
			else if ($pirate3 < 43)
				$pgate3 = "2";
			else if ($pirate3 < 43)
				$pgate3 = "3";
			else if ($pirate3 < 115)
				$pgate3 = "4";
			else if ($pirate3 < 115)
				$pgate3 = "5";
			else if ($pirate3 < 202)
				$pgate3 = "6";
			else if ($pirate3 < 244)
				$pgate3 = "7";
			else
				$pgate3 = "8";
	}

	else if ($_SESSION['counter'] == 32)
		{
			$pirate1 = rand(0, 300);
			$pirate2 = rand(0, 300);
			$pirate3 = rand(0, 300);

			if ($pirate1 < 22)
				$pgate1 = "1";
			else if ($pirate1 < 59)
				$pgate1 = "2";
			else if ($pirate1 < 78)
				$pgate1 = "3";
			else if ($pirate1 < 122)
				$pgate1 = "4";
			else if ($pirate1 < 127)
				$pgate1 = "5";
			else if ($pirate1 < 185)
				$pgate1 = "6";
			else if ($pirate1 < 254)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 22)
				$pgate2 = "1";
			else if ($pirate2 < 59)
				$pgate2 = "2";
			else if ($pirate2 < 78)
				$pgate2 = "3";
			else if ($pirate2 < 122)
				$pgate2 = "4";
			else if ($pirate2 < 127)
				$pgate2 = "5";
			else if ($pirate2 < 185)
				$pgate2 = "6";
			else if ($pirate2 < 254)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 22)
				$pgate3 = "1";
			else if ($pirate3 < 59)
				$pgate3 = "2";
			else if ($pirate3 < 78)
				$pgate3 = "3";
			else if ($pirate3 < 122)
				$pgate3 = "4";
			else if ($pirate3 < 127)
				$pgate3 = "5";
			else if ($pirate3 < 185)
				$pgate3 = "6";
			else if ($pirate3 < 254)
				$pgate3 = "7";
			else
				$pgate3 = "8";
	}

	else if ($_SESSION['counter'] == 33)
		{
			$pirate1 = rand(0, 300);
			$pirate2 = rand(0, 300);
			$pirate3 = rand(0, 300);

			if ($pirate1 < 35)
				$pgate1 = "1";
			else if ($pirate1 < 68)
				$pgate1 = "2";
			else if ($pirate1 < 98)
				$pgate1 = "3";
			else if ($pirate1 < 142)
				$pgate1 = "4";
			else if ($pirate1 < 162)
				$pgate1 = "5";
			else if ($pirate1 < 224)
				$pgate1 = "6";
			else if ($pirate1 < 260)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 35)
				$pgate2 = "1";
			else if ($pirate2 < 68)
				$pgate2 = "2";
			else if ($pirate2 < 98)
				$pgate2 = "3";
			else if ($pirate2 < 142)
				$pgate2 = "4";
			else if ($pirate2 < 162)
				$pgate2 = "5";
			else if ($pirate2 < 224)
				$pgate2 = "6";
			else if ($pirate2 < 260)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 35)
				$pgate3 = "1";
			else if ($pirate3 < 68)
				$pgate3 = "2";
			else if ($pirate3 < 98)
				$pgate3 = "3";
			else if ($pirate3 < 142)
				$pgate3 = "4";
			else if ($pirate3 < 162)
				$pgate3 = "5";
			else if ($pirate3 < 224)
				$pgate3 = "6";
			else if ($pirate3 < 260)
				$pgate3 = "7";
			else
				$pgate3 = "8";
	}

	else if ($_SESSION['counter'] == 34)
		{
			$pirate1 = rand(0, 300);
			$pirate2 = rand(0, 300);
			$pirate3 = rand(0, 300);

			if ($pirate1 < 28)
				$pgate1 = "1";
			else if ($pirate1 < 61)
				$pgate1 = "2";
			else if ($pirate1 < 84)
				$pgate1 = "3";
			else if ($pirate1 < 130)
				$pgate1 = "4";
			else if ($pirate1 < 132)
				$pgate1 = "5";
			else if ($pirate1 < 207)
				$pgate1 = "6";
			else if ($pirate1 < 254)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 28)
				$pgate2 = "1";
			else if ($pirate2 < 61)
				$pgate2 = "2";
			else if ($pirate2 < 84)
				$pgate2 = "3";
			else if ($pirate2 < 130)
				$pgate2 = "4";
			else if ($pirate2 < 132)
				$pgate2 = "5";
			else if ($pirate2 < 207)
				$pgate2 = "6";
			else if ($pirate2 < 254)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 28)
				$pgate3 = "1";
			else if ($pirate3 < 61)
				$pgate3 = "2";
			else if ($pirate3 < 84)
				$pgate3 = "3";
			else if ($pirate3 < 130)
				$pgate3 = "4";
			else if ($pirate3 < 132)
				$pgate3 = "5";
			else if ($pirate3 < 207)
				$pgate3 = "6";
			else if ($pirate3 < 254)
				$pgate3 = "7";
			else
				$pgate3 = "8";
	}

	else if ($_SESSION['counter'] == 35)
		{
			$pirate1 = rand(0, 300);
			$pirate2 = rand(0, 300);
			$pirate3 = rand(0, 300);

			if ($pirate1 < 5)
				$pgate1 = "1";
			else if ($pirate1 < 35)
				$pgate1 = "2";
			else if ($pirate1 < 37)
				$pgate1 = "3";
			else if ($pirate1 < 85)
				$pgate1 = "4";
			else if ($pirate1 < 85)
				$pgate1 = "5";
			else if ($pirate1 < 177)
				$pgate1 = "6";
			else if ($pirate1 < 246)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 5)
				$pgate2 = "1";
			else if ($pirate2 < 35)
				$pgate2 = "2";
			else if ($pirate2 < 37)
				$pgate2 = "3";
			else if ($pirate2 < 85)
				$pgate2 = "4";
			else if ($pirate2 < 85)
				$pgate2 = "5";
			else if ($pirate2 < 177)
				$pgate2 = "6";
			else if ($pirate2 < 246)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 5)
				$pgate3 = "1";
			else if ($pirate3 < 35)
				$pgate3 = "2";
			else if ($pirate3 < 37)
				$pgate3 = "3";
			else if ($pirate3 < 85)
				$pgate3 = "4";
			else if ($pirate3 < 85)
				$pgate3 = "5";
			else if ($pirate3 < 177)
				$pgate3 = "6";
			else if ($pirate3 < 246)
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

		$_SESSION['gameid'] = rand(1, 36);
		//$_SESSION['gameid'] = 37;

		if ($_SESSION['gameid'] == 1)
			$_SESSION['combo'] = array(30,23,13,16,19,9,12,5,27,31,25,2,24,35,34,29,6,22,33,4,8,18,17,32,36,28,1,3,14,11,15,26,20,7,10,21,37);
		else if ($_SESSION['gameid'] == 2)
			$_SESSION['combo'] = array(23,16,30,9,13,5,19,31,12,2,27,35,25,29,24,22,34,4,6,18,33,32,8,1,17,36,14,28,15,3,20,11,10,26,21,7,37);
		else if ($_SESSION['gameid'] == 3)
			$_SESSION['combo'] = array(16,9,23,5,30,31,13,2,19,35,12,29,27,22,25,4,24,18,34,32,6,1,33,14,8,15,36,17,20,28,10,3,21,11,7,26,37);
		else if ($_SESSION['gameid'] == 4)
			$_SESSION['combo'] = array(9,5,16,31,23,2,30,35,13,29,19,22,12,4,27,18,25,32,24,1,34,14,6,15,33,20,8,36,10,17,21,28,7,3,26,11,37);
		else if ($_SESSION['gameid'] == 5)
			$_SESSION['combo'] = array(5,31,9,2,16,35,23,29,30,22,13,4,19,18,12,32,27,1,25,14,24,15,34,20,6,10,33,21,36,8,7,17,26,28,11,3,37);
		else if ($_SESSION['gameid'] == 6)
			$_SESSION['combo'] = array(31,2,5,35,9,29,16,22,23,4,30,18,13,32,19,1,12,14,27,15,25,20,24,10,34,21,6,7,33,36,26,8,11,17,3,28,37);
		else if ($_SESSION['gameid'] == 7)
			$_SESSION['combo'] = array(2,35,31,29,5,22,9,4,16,18,23,32,30,1,13,14,19,15,12,20,27,10,25,21,24,7,34,26,6,11,36,33,3,8,28,17,37);
		else if ($_SESSION['gameid'] == 8)
			$_SESSION['combo'] = array(35,29,2,22,31,4,5,18,9,32,16,1,23,14,30,15,13,20,19,10,12,21,27,7,25,26,24,11,34,3,6,36,28,33,17,8,37);
		else if ($_SESSION['gameid'] == 9)
			$_SESSION['combo'] = array(29,22,35,4,2,18,31,32,5,1,9,14,16,15,23,20,30,10,13,21,19,7,12,26,27,11,25,3,24,28,34,36,17,6,8,33,37);
		else if ($_SESSION['gameid'] == 10)
			$_SESSION['combo'] = array(22,4,29,18,35,32,2,1,31,14,5,15,9,20,16,10,23,21,30,7,13,26,19,11,12,3,27,28,25,17,24,8,36,34,33,6,37);
		else if ($_SESSION['gameid'] == 11)
			$_SESSION['combo'] = array(4,18,22,32,29,1,35,14,2,15,31,20,5,10,9,21,16,7,23,26,30,11,13,3,19,28,12,17,27,8,25,33,24,36,6,34,37);
		else if ($_SESSION['gameid'] == 12)
			$_SESSION['combo'] = array(18,32,4,1,22,14,29,15,35,20,2,10,31,21,5,7,9,26,16,11,23,3,30,28,13,17,19,8,12,33,27,6,25,34,36,24,37);
		else if ($_SESSION['gameid'] == 13)
			$_SESSION['combo'] = array(32,1,18,14,4,15,22,20,29,10,35,21,2,7,31,26,5,11,9,3,16,28,23,17,30,8,13,33,19,6,12,34,27,24,25,36,37);
		else if ($_SESSION['gameid'] == 14)
			$_SESSION['combo'] = array(1,36,14,32,15,18,20,4,10,22,21,29,7,35,26,2,11,31,3,5,28,9,17,16,8,23,33,30,6,13,34,19,24,12,25,27,37);
		else if ($_SESSION['gameid'] == 15)
			$_SESSION['combo'] = array(14,15,36,1,20,32,10,18,21,4,7,22,26,29,11,35,3,2,28,31,17,5,8,9,33,16,6,23,34,30,24,13,25,19,27,12,37);
		else if ($_SESSION['gameid'] == 16)
			$_SESSION['combo'] = array(15,20,14,36,10,1,21,32,7,18,26,4,11,22,3,29,28,35,17,2,8,31,33,5,6,9,34,16,24,23,25,30,27,13,12,19,37);
		else if ($_SESSION['gameid'] == 17)
			$_SESSION['combo'] = array(20,10,15,21,36,14,7,1,26,32,11,18,3,4,28,22,17,29,8,35,33,2,6,31,34,5,24,9,25,16,27,23,12,30,19,13,37);
		else if ($_SESSION['gameid'] == 18)
			$_SESSION['combo'] = array(10,21,20,7,15,36,26,14,11,1,3,32,28,18,17,4,8,22,33,29,6,35,34,2,24,31,25,5,27,9,12,16,19,23,13,30,37);
		else if ($_SESSION['gameid'] == 19)
			$_SESSION['combo'] = array(21,7,10,26,20,11,36,15,3,14,28,1,17,32,8,18,33,4,6,22,34,29,24,35,25,2,27,31,12,5,19,9,13,16,30,23,37);
		else if ($_SESSION['gameid'] == 20)
			$_SESSION['combo'] = array(7,26,21,11,10,3,20,36,28,15,17,14,8,1,33,32,6,18,34,4,24,22,25,29,27,35,12,2,19,31,13,5,30,9,23,16,37);
		else if ($_SESSION['gameid'] == 21)
			$_SESSION['combo'] = array(26,11,7,3,21,28,10,17,36,20,8,15,33,14,6,1,34,32,24,18,25,4,27,22,12,29,19,35,13,2,30,31,23,5,16,9,37);
		else if ($_SESSION['gameid'] == 22)
			$_SESSION['combo'] = array(11,3,26,28,7,17,21,8,10,33,36,20,6,15,34,14,24,1,25,32,27,18,12,4,19,22,13,29,30,35,23,2,16,31,9,5,37);
		else if ($_SESSION['gameid'] == 23)
			$_SESSION['combo'] = array(3,28,11,17,26,8,7,33,21,6,10,36,34,20,24,15,25,14,27,1,12,32,19,18,13,4,30,22,23,29,16,35,9,2,5,31,37);
		else if ($_SESSION['gameid'] == 24)
			$_SESSION['combo'] = array(28,17,3,8,11,33,26,6,7,34,21,24,36,10,25,20,27,15,12,14,19,1,13,32,30,18,23,4,16,22,9,29,5,35,31,2,37);
		else if ($_SESSION['gameid'] == 25)
			$_SESSION['combo'] = array(17,8,28,33,3,6,11,34,26,24,7,25,21,36,27,10,12,20,19,15,13,14,30,1,23,32,16,18,9,4,5,22,31,29,2,35,37);
		else if ($_SESSION['gameid'] == 26)
			$_SESSION['combo'] = array(8,33,17,6,28,34,3,24,11,25,26,27,7,12,21,36,19,10,13,20,30,15,23,14,16,1,9,32,5,18,31,4,2,22,35,29,37);
		else if ($_SESSION['gameid'] == 27)
			$_SESSION['combo'] = array(33,6,8,34,17,24,28,25,3,27,11,12,26,19,7,13,36,21,30,10,23,20,16,15,9,14,5,1,31,32,2,18,35,4,29,22,37);
		else if ($_SESSION['gameid'] == 28)
			$_SESSION['combo'] = array(6,34,33,24,8,25,17,27,28,12,3,19,11,13,26,30,7,36,23,21,16,10,9,20,5,15,31,14,2,1,35,32,29,18,22,4,37);
		else if ($_SESSION['gameid'] == 29)
			$_SESSION['combo'] = array(34,24,6,25,33,27,8,12,17,19,28,13,3,30,11,23,26,16,36,7,9,21,5,10,31,20,2,15,35,14,29,1,22,32,4,18,37);
		else if ($_SESSION['gameid'] == 30)
			$_SESSION['combo'] = array(24,25,34,27,6,12,33,19,8,13,17,30,28,23,3,16,11,9,26,5,36,7,31,21,2,10,35,20,29,15,22,14,4,1,18,32,37);
		else if ($_SESSION['gameid'] == 31)
			$_SESSION['combo'] = array(25,27,24,12,34,19,6,13,33,30,8,23,17,16,28,9,3,5,11,31,26,2,36,7,35,21,29,10,22,20,4,15,18,14,32,1,37);
		else if ($_SESSION['gameid'] == 32)
			$_SESSION['combo'] = array(27,12,25,19,24,13,34,30,6,23,33,16,8,9,17,5,28,31,3,2,11,35,26,29,36,7,22,21,4,10,18,20,32,15,1,14,37);
		else if ($_SESSION['gameid'] == 33)
			$_SESSION['combo'] = array(12,19,27,13,25,30,24,23,34,16,6,9,33,5,8,31,17,2,28,35,3,29,11,22,26,4,36,7,18,21,32,10,1,20,14,15,37);
		else if ($_SESSION['gameid'] == 34)
			$_SESSION['combo'] = array(19,13,12,30,27,23,25,16,24,9,34,5,6,31,33,2,8,35,17,29,28,22,3,4,11,18,26,36,32,7,1,21,14,10,15,20,37);
		else if ($_SESSION['gameid'] == 35)
			$_SESSION['combo'] = array(13,30,19,23,12,16,27,9,25,5,24,31,34,2,6,35,33,29,8,22,17,4,28,18,3,32,11,1,26,14,36,7,15,21,20,10,37);
		else if ($_SESSION['gameid'] == 36)
			$_SESSION['combo'] = array(30,23,13,16,19,9,12,5,27,31,25,2,24,35,34,29,6,22,33,4,8,18,17,32,28,1,3,14,11,15,26,36,20,7,10,21,37);
		else if ($_SESSION['gameid'] == 37)
			$_SESSION['combo'] = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37);


		/*else if ($_SESSION['gameid'] == 25)
			$_SESSION['combo'] = array(17,8,28,33,3,6,11,34,26,24,7,25,21,27,10,12,20,19,15,13,14,30,1,23,32,16,18,9,4,5,22,31,29,2,35,36);
		else
			$_SESSION['combo'] = array(2,11,31,9,21,14,34,12,32,5,4,20,17,35,13,18,25,33,24,7,23,22,8,10,15,27,28,19,29,16,36);
			*/

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

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<meta name="description" content="Game Theory and Human Behavior group is focused on research in the field of game theory. It is a part of the various departments at the University of Southern California." />
<meta name="keywords" content="GTHB, Game, Theory, Human, Behavior, USC" />

<link rel="shortcut icon" href="../Images/favicon.gif" type="image/x-icon" /> 
<link rel="stylesheet" type="text/css" href="../CSS/default.css">
<script type="text/javascript" src="../JS/CheckFunctions.js"></script>
<script type="text/javascript" src="../JS/Utils.js"></script>
<script type="text/javascript" src="../JS/BrowserDetect.js"></script>
<script type="text/javascript" src="../JS/Common.js"></script>

	<!-- ------------------------------------------------------------------------- -->
	<!-- START: PUT YOUR PAGE TITLE BELOW -->
	<!-- ------------------------------------------------------------------------- -->

    <title>Games - Teamcore</title>

	<!-- ------------------------------------------------------------------------- -->
	<!-- END: PUT YOUR PAGE TITLE ABOVE -->
	<!-- ------------------------------------------------------------------------- -->

</head>


<body style="background-image: url(&#39;/Images/backdrop.jpg&#39;); background-repeat: repeat-x;
    background-color: #FFFFFF; font-family: arial, verdana, Sans-Serif, trebuchet ms;">

<div id="blockUI" class="translucent" style="border:0px solid Blue;display: none; background-color: Black;width: 800px; height: 700px;position: absolute;  z-index: 10000;" onclick="return false" onmousedown="return false" onmousemove="return false" onmouseup="return false" ondblclick="return false">
</div>

<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTM0Njc3NjUwMQ9kFgJmD2QWAgIDD2QWAgIBD2QWBAIDDw8WAh4ISW1hZ2VVcmwFJX4vSW1hZ2VzL0ZlYXR1cmVkUHJvamVjdC9wcm9qZWN0MS5qcGdkZAIFDw8WBB4EVGV4dAUQRmVhdHVyZWQgUHJvamVjdB4LTmF2aWdhdGVVcmwFASNkZGQsKAeGXW4aFFhm453zSvhA1411vQ==">
</div>

        <table id="Page_Table" cellspacing="0" cellpadding="0" style="width: 100%;
            height: 100%;">
            <tbody><tr align="center">
                <td>
                    <table id="Main_Table" style="width: 1000px; background-color: white;" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td style="border-bottom: solid 1px #888888">
                                <table id="USC_CS_Links_Table" cellpadding="0" cellspacing="0" style="width: 100%;">
                                    <tbody><tr class="noPrint">
                                        <td style="width: 1000px; background-color: #990000; height:25px" align="left" colspan="3">
                                            <a href="http://www.usc.edu/" target="_blank">
                                                <img src="../Images/usc-name-white-cardinal.gif" alt="University of Southern California" style="border: 0;"></a>
                                        </td>
                                    </tr>
                                    <tr class="noDisplay">
                                        <td>
                                          <p style="font-size:20px; font-weight:bold;">University of Southern California</p>
                                        </td>
                                    </tr>
                                    <tr style="background-color: #990000;">
                                        <td align="left">
                                            <a href="http://gthb.usc.edu">
                                                <img alt="Computer Science Department" src="../Images/banner.jpg" style="vertical-align: middle;
                                                    border: 0;"></a></td>
                                        <td style="width: auto;">
                                            <img alt="" src="../Images/white-filler.jpg" style="vertical-align: middle; border: 0;">
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                        <tr>
                            <td>

							<!-- Beginning of menu bar (external js file "../JS/Menu.js") -->
							<table id="gthb_Links_Table"style="width: 100%; height: 30px;" cellpadding="0" cellspacing="0" border="0" class="noPrint">
								<tbody>
									<tr>
				
								<script language="javascript" type="text/javascript" src="../JS/Menu.js"></script>
								<noscript>Your browser does not support JavaScript! OR The JavaScript has been turned off!
											Please upgrade your browser OR turn on the JavaScript on your browser.
								</noscript></tr>
							</table>
							<!-- End of menu bar -->

                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <table id="Content_Table" style="width: 1000px; background-color: white;" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td style="width: 100%; text-align: left;">
                                
    <table id="SubLinks_Table" cellpadding="0" cellspacing="0" style="width: 100%; height: 100px;
        border-bottom: solid 2px #CCCCCC; background-color: #F0F0F0;">
        <tbody><tr style="height: 80px;">
            <td style="width: 100%;" colspan="5">

				<!-- ------------------------------------------------------------------------- -->
				<!-- START: PUT YOUR SECTION TITLE BELOW -->
				<!-- ------------------------------------------------------------------------- -->

					<strong class="topLinkText">Games</strong>

				<!-- ------------------------------------------------------------------------- -->
				<!-- END: PUT YOUR SECTION TITLE ABOVE -->
				<!-- ------------------------------------------------------------------------- -->                
                <br>

				<!-- ------------------------------------------------------------------------- -->
				<!-- START: PUT YOUR SECTION DESCRIPTION BELOW -->
				<!-- ------------------------------------------------------------------------- -->

	                <strong class="topLinkSubText">Game Theory and Human Behavior Research</strong>

				<!-- ------------------------------------------------------------------------- -->
				<!-- END: PUT YOUR SECTION DESCRIPTION ABOVE -->
				<!-- ------------------------------------------------------------------------- -->
            </td>

			<td rowspan="2" style="padding-right: 20px;">
				<!-- ------------------------------------------------------------------------- -->
				<!-- START: PUT YOUR SECTION DESCRIPTION BELOW -->
				<!-- ------------------------------------------------------------------------- -->

	                <!--img src="" style="vertical-align: middle; border: solid 1px #D8D8D8" class="noPrint" height="80px" /-->

				<!-- ------------------------------------------------------------------------- -->
				<!-- END: PUT YOUR SECTION DESCRIPTION ABOVE -->
				<!-- ------------------------------------------------------------------------- -->

            </td>

        </tr>

		<tr align="left" style="height: 20px;">
            <td>
                &nbsp; &nbsp; &nbsp;

				<!-- Beginning of Submenu bar (external js file "Submenu.js") -->
					<script language="javascript" type="text/javascript" src="Submenu.js"></script>
					<noscript>Your browser does not support JavaScript! OR The JavaScript has been turned off!
						Please upgrade your browser OR turn on the JavaScript on your browser.
					</noscript>
				<!-- End of menu bar -->
                
            </td>            
        </tr>
    </tbody></table>

	<table id="NavigationTable" cellpadding="0" cellspacing="0" style="width: 100%;" class="contentTable noBorder">
        <tbody><tr style="height: 30px;">
             <td align="right" style="text-align:right; padding-right: 20px;">
                <span id="ctl00_gthbHolder_gthbSiteMapPath">
				
				<!-- ------------------------------------------------------------------------- -->
				<!-- START: PUT YOUR PAGE TITLE BELOW -->
				<!-- ------------------------------------------------------------------------- -->

				<span class="navigationActiveLinks">Games</span>

				<!-- ------------------------------------------------------------------------- -->
				<!-- END: PUT YOUR PAGE TITLE ABOVE -->
				<!-- ------------------------------------------------------------------------- -->
				<a id="ctl00_gthbHolder_gthbSiteMapPath_SkipLink"></a></span>
            </td>
        </tr>
    </tbody></table>
    <table id="PageContentTable" cellpadding="0" cellspacing="0" style="width: 100%;" class="contentTable noBorder">
        <tbody><tr>
            <td valign="top">
				
				<!--Usage Templates-->
					<!--Links><a href="http://gthb.usc.edu" class="infoLinks">Home</a-->
					<!--Headings><a id="home"><strong>Home</strong></a><br-->
					<!--Content><p>Game Theory and Human Behavior</p-->

				<!-- ------------------------------------------------------------------------- -->
				<!-- START: PUT YOUR CONTENT HERE -->
				<!-- Please don't write anything above this line... -->
				<!-- ------------------------------------------------------------------------- -->

<!-- Homepage Article -->

<!-- Homepage Article -->
<h2 id="GT">The Guards and The Treasure</h2>
Welcome&nbsp;<?php echo $_SESSION['username']; ?>!
<br/>
</div>

<?php if ($_SESSION['counter'] < $maxround) { ?>
	<a href="instructions.php" type="popup" target="_blank"><h3>Detailed instructions</h3></a>
	<h3>Round <?php echo $_SESSION['position']+1; ?> of <?php echo $curround; ?></h3>
<?php } ?>

<?php
	if ($_SESSION['counter'] >= $maxround)
	{ ?>
		<font color="white">
		<table align="center" cellspacing="10" cellpadding="0" bgcolor="black">
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
				$obs = $obs.",".$_SESSION['observations'][$i];
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


						if (($_SESSION['combo'][$j - 2] == 1) || ($_SESSION['combo'][$j - 2] == 2) || ($_SESSION['combo'][$j - 2] == 3) || ($_SESSION['combo'][$j - 2] == 4) || ($_SESSION['combo'][$j - 2] == 5) || ($_SESSION['combo'][$j - 2] == 6) || ($_SESSION['combo'][$j - 2] == 7) || ($_SESSION['combo'][$j - 2] == 8) || ($_SESSION['combo'][$j - 2] == 9))
						{
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 10;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 8;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 7;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 6;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 7;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 8;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 2;
						}

						else if (($_SESSION['combo'][$j - 2] == 10) || ($_SESSION['combo'][$j - 2] == 11) || ($_SESSION['combo'][$j - 2] == 12) || ($_SESSION['combo'][$j - 2] == 13) || ($_SESSION['combo'][$j - 2] == 14) || ($_SESSION['combo'][$j - 2] == 15) || ($_SESSION['combo'][$j - 2] == 16) || ($_SESSION['combo'][$j - 2] == 17) || ($_SESSION['combo'][$j - 2] == 18))
						{
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 9;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 8;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 2;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 9;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 10;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 1;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 10;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 1;
						}

						else if (($_SESSION['combo'][$j - 2] == 19) || ($_SESSION['combo'][$j - 2] == 20) || ($_SESSION['combo'][$j - 2] == 21) || ($_SESSION['combo'][$j - 2] == 22) || ($_SESSION['combo'][$j - 2] == 23) || ($_SESSION['combo'][$j - 2] == 24) || ($_SESSION['combo'][$j - 2] == 25) || ($_SESSION['combo'][$j - 2] == 26) || ($_SESSION['combo'][$j - 2] == 27))
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

						else if (($_SESSION['combo'][$j - 2] == 28) || ($_SESSION['combo'][$j - 2] == 29) || ($_SESSION['combo'][$j - 2] == 30) || ($_SESSION['combo'][$j - 2] == 31) || ($_SESSION['combo'][$j - 2] == 32) || ($_SESSION['combo'][$j - 2] == 33) || ($_SESSION['combo'][$j - 2] == 34) || ($_SESSION['combo'][$j - 2] == 35) || ($_SESSION['combo'][$j - 2] == 36))
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


						if (($_SESSION['combo'][$j - 2] == 1) || ($_SESSION['combo'][$j - 2] == 2) || ($_SESSION['combo'][$j - 2] == 3) || ($_SESSION['combo'][$j - 2] == 4) || ($_SESSION['combo'][$j - 2] == 5) || ($_SESSION['combo'][$j - 2] == 6) || ($_SESSION['combo'][$j - 2] == 7) || ($_SESSION['combo'][$j - 2] == 8) || ($_SESSION['combo'][$j - 2] == 9))
						{
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -7;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -4;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -6;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -8;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -4;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = -2;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = -9;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = -3;
						}

						else if (($_SESSION['combo'][$j - 2] == 10) || ($_SESSION['combo'][$j - 2] == 11) || ($_SESSION['combo'][$j - 2] == 12) || ($_SESSION['combo'][$j - 2] == 13) || ($_SESSION['combo'][$j - 2] == 14) || ($_SESSION['combo'][$j - 2] == 15) || ($_SESSION['combo'][$j - 2] == 16) || ($_SESSION['combo'][$j - 2] == 17) || ($_SESSION['combo'][$j - 2] == 18))
						{
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -10;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -1;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -10;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -8;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -4;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = -10;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = -5;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = -3;
						}

						else if (($_SESSION['combo'][$j - 2] == 19) || ($_SESSION['combo'][$j - 2] == 20) || ($_SESSION['combo'][$j - 2] == 21) || ($_SESSION['combo'][$j - 2] == 22) || ($_SESSION['combo'][$j - 2] == 23) || ($_SESSION['combo'][$j - 2] == 24) || ($_SESSION['combo'][$j - 2] == 25) || ($_SESSION['combo'][$j - 2] == 26) || ($_SESSION['combo'][$j - 2] == 27))
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

						else if (($_SESSION['combo'][$j - 2] == 28) || ($_SESSION['combo'][$j - 2] == 29) || ($_SESSION['combo'][$j - 2] == 30) || ($_SESSION['combo'][$j - 2] == 31) || ($_SESSION['combo'][$j - 2] == 32) || ($_SESSION['combo'][$j - 2] == 33) || ($_SESSION['combo'][$j - 2] == 34) || ($_SESSION['combo'][$j - 2] == 35) || ($_SESSION['combo'][$j - 2] == 36))
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
	</table></font>
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

<font color="white">
<table align="center" cellspacing="10" cellpadding="0" bgcolor="black">
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
			|| ($_SESSION['counter'] == 8)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left">Your Rewards</td>
		<td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
		<td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
		<td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
		<td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
		<td valign="bottom">6<br/><img src="Images/w6.jpg"></td>
		<td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
		<td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
		<td valign="bottom">2<br/><img src="Images/w2.jpg"></td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left">Your Penalties</td>
		<td valign="top"><img src="Images/l7.jpg"><br/>-7</td>
		<td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
		<td valign="top"><img src="Images/l6.jpg"><br/>-6</td>
		<td valign="top"><img src="Images/l8.jpg"><br/>-8</td>
		<td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
		<td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
		<td valign="top"><img src="Images/l9.jpg"><br/>-9</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 9) || ($_SESSION['counter'] == 10) || ($_SESSION['counter'] == 11) || ($_SESSION['counter'] == 12)
			|| ($_SESSION['counter'] == 13) || ($_SESSION['counter'] == 14) || ($_SESSION['counter'] == 15) || ($_SESSION['counter'] == 16)
			|| ($_SESSION['counter'] == 17)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left">Your Rewards</td>
		<td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
		<td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
		<td valign="bottom">2<br/><img src="Images/w2.jpg"></td>
		<td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
		<td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
		<td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
		<td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
		<td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left">Your Penalties</td>
		<td valign="top"><img src="Images/l10.jpg"><br/>-10</td>
		<td valign="top"><img src="Images/l1.jpg"><br/>-1</td>
		<td valign="top"><img src="Images/l10.jpg"><br/>-10</td>
		<td valign="top"><img src="Images/l8.jpg"><br/>-8</td>
		<td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
		<td valign="top"><img src="Images/l10.jpg"><br/>-10</td>
		<td valign="top"><img src="Images/l5.jpg"><br/>-5</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 18) || ($_SESSION['counter'] == 19) || ($_SESSION['counter'] == 20) || ($_SESSION['counter'] == 21)
			|| ($_SESSION['counter'] == 22) || ($_SESSION['counter'] == 23) || ($_SESSION['counter'] == 24) || ($_SESSION['counter'] == 25)
			|| ($_SESSION['counter'] == 26)) { ?>
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

<?php if (($_SESSION['counter'] == 27) || ($_SESSION['counter'] == 28) || ($_SESSION['counter'] == 29) || ($_SESSION['counter'] == 30)
			|| ($_SESSION['counter'] == 31) || ($_SESSION['counter'] == 32) || ($_SESSION['counter'] == 33) || ($_SESSION['counter'] == 34)
			|| ($_SESSION['counter'] == 35)) { ?>
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

		if ($pirate1 < 43)
			$pgate1 = "1";
		else if ($pirate1 < 100)
			$pgate1 = "2";
		else if ($pirate1 < 124)
			$pgate1 = "3";
		else if ($pirate1 < 141)
			$pgate1 = "4";
		else if ($pirate1 < 192)
			$pgate1 = "5";
		else if ($pirate1 < 233)
			$pgate1 = "6";
		else if ($pirate1 < 262)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 43)
			$pgate2 = "1";
		else if ($pirate2 < 100)
			$pgate2 = "2";
		else if ($pirate2 < 124)
			$pgate2 = "3";
		else if ($pirate2 < 141)
			$pgate2 = "4";
		else if ($pirate2 < 192)
			$pgate2 = "5";
		else if ($pirate2 < 233)
			$pgate2 = "6";
		else if ($pirate2 < 262)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 43)
			$pgate3 = "1";
		else if ($pirate3 < 100)
			$pgate3 = "2";
		else if ($pirate3 < 124)
			$pgate3 = "3";
		else if ($pirate3 < 141)
			$pgate3 = "4";
		else if ($pirate3 < 192)
			$pgate3 = "5";
		else if ($pirate3 < 233)
			$pgate3 = "6";
		else if ($pirate3 < 262)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 44)
			$pgate1 = "1";
		else if ($pirate1 < 110)
			$pgate1 = "2";
		else if ($pirate1 < 122)
			$pgate1 = "3";
		else if ($pirate1 < 141)
			$pgate1 = "4";
		else if ($pirate1 < 199)
			$pgate1 = "5";
		else if ($pirate1 < 241)
			$pgate1 = "6";
		else if ($pirate1 < 261)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 44)
			$pgate2 = "1";
		else if ($pirate2 < 110)
			$pgate2 = "2";
		else if ($pirate2 < 122)
			$pgate2 = "3";
		else if ($pirate2 < 141)
			$pgate2 = "4";
		else if ($pirate2 < 199)
			$pgate2 = "5";
		else if ($pirate2 < 241)
			$pgate2 = "6";
		else if ($pirate2 < 261)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 44)
			$pgate3 = "1";
		else if ($pirate3 < 110)
			$pgate3 = "2";
		else if ($pirate3 < 122)
			$pgate3 = "3";
		else if ($pirate3 < 141)
			$pgate3 = "4";
		else if ($pirate3 < 199)
			$pgate3 = "5";
		else if ($pirate3 < 241)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 49)
			$pgate1 = "1";
		else if ($pirate1 < 121)
			$pgate1 = "2";
		else if ($pirate1 < 123)
			$pgate1 = "3";
		else if ($pirate1 < 132)
			$pgate1 = "4";
		else if ($pirate1 < 196)
			$pgate1 = "5";
		else if ($pirate1 < 247)
			$pgate1 = "6";
		else if ($pirate1 < 253)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 49)
			$pgate2 = "1";
		else if ($pirate2 < 121)
			$pgate2 = "2";
		else if ($pirate2 < 123)
			$pgate2 = "3";
		else if ($pirate2 < 132)
			$pgate2 = "4";
		else if ($pirate2 < 196)
			$pgate2 = "5";
		else if ($pirate2 < 247)
			$pgate2 = "6";
		else if ($pirate2 < 253)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 49)
			$pgate3 = "1";
		else if ($pirate3 < 121)
			$pgate3 = "2";
		else if ($pirate3 < 123)
			$pgate3 = "3";
		else if ($pirate3 < 132)
			$pgate3 = "4";
		else if ($pirate3 < 196)
			$pgate3 = "5";
		else if ($pirate3 < 247)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 69)
			$pgate1 = "1";
		else if ($pirate1 < 135)
			$pgate1 = "2";
		else if ($pirate1 < 144)
			$pgate1 = "3";
		else if ($pirate1 < 163)
			$pgate1 = "4";
		else if ($pirate1 < 221)
			$pgate1 = "5";
		else if ($pirate1 < 263)
			$pgate1 = "6";
		else if ($pirate1 < 294)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 69)
			$pgate2 = "1";
		else if ($pirate2 < 135)
			$pgate2 = "2";
		else if ($pirate2 < 144)
			$pgate2 = "3";
		else if ($pirate2 < 163)
			$pgate2 = "4";
		else if ($pirate2 < 221)
			$pgate2 = "5";
		else if ($pirate2 < 263)
			$pgate2 = "6";
		else if ($pirate2 < 294)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 69)
			$pgate3 = "1";
		else if ($pirate3 < 135)
			$pgate3 = "2";
		else if ($pirate3 < 144)
			$pgate3 = "3";
		else if ($pirate3 < 163)
			$pgate3 = "4";
		else if ($pirate3 < 221)
			$pgate3 = "5";
		else if ($pirate3 < 263)
			$pgate3 = "6";
		else if ($pirate3 < 294)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 85)
			$pgate1 = "1";
		else if ($pirate1 < 151)
			$pgate1 = "2";
		else if ($pirate1 < 151)
			$pgate1 = "3";
		else if ($pirate1 < 170)
			$pgate1 = "4";
		else if ($pirate1 < 228)
			$pgate1 = "5";
		else if ($pirate1 < 270)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 85)
			$pgate2 = "1";
		else if ($pirate2 < 151)
			$pgate2 = "2";
		else if ($pirate2 < 151)
			$pgate2 = "3";
		else if ($pirate2 < 170)
			$pgate2 = "4";
		else if ($pirate2 < 228)
			$pgate2 = "5";
		else if ($pirate2 < 270)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 85)
			$pgate3 = "1";
		else if ($pirate3 < 151)
			$pgate3 = "2";
		else if ($pirate3 < 151)
			$pgate3 = "3";
		else if ($pirate3 < 170)
			$pgate3 = "4";
		else if ($pirate3 < 228)
			$pgate3 = "5";
		else if ($pirate3 < 270)
			$pgate3 = "6";
		else if ($pirate3 < 301)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 49)
			$pgate1 = "1";
		else if ($pirate1 < 102)
			$pgate1 = "2";
		else if ($pirate1 < 117)
			$pgate1 = "3";
		else if ($pirate1 < 153)
			$pgate1 = "4";
		else if ($pirate1 < 197)
			$pgate1 = "5";
		else if ($pirate1 < 256)
			$pgate1 = "6";
		else if ($pirate1 < 293)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 49)
			$pgate2 = "1";
		else if ($pirate2 < 102)
			$pgate2 = "2";
		else if ($pirate2 < 117)
			$pgate2 = "3";
		else if ($pirate2 < 153)
			$pgate2 = "4";
		else if ($pirate2 < 197)
			$pgate2 = "5";
		else if ($pirate2 < 256)
			$pgate2 = "6";
		else if ($pirate2 < 293)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 49)
			$pgate3 = "1";
		else if ($pirate3 < 102)
			$pgate3 = "2";
		else if ($pirate3 < 117)
			$pgate3 = "3";
		else if ($pirate3 < 153)
			$pgate3 = "4";
		else if ($pirate3 < 197)
			$pgate3 = "5";
		else if ($pirate3 < 256)
			$pgate3 = "6";
		else if ($pirate3 < 293)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 57)
			$pgate1 = "1";
		else if ($pirate1 < 115)
			$pgate1 = "2";
		else if ($pirate1 < 133)
			$pgate1 = "3";
		else if ($pirate1 < 154)
			$pgate1 = "4";
		else if ($pirate1 < 205)
			$pgate1 = "5";
		else if ($pirate1 < 252)
			$pgate1 = "6";
		else if ($pirate1 < 282)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 57)
			$pgate2 = "1";
		else if ($pirate2 < 115)
			$pgate2 = "2";
		else if ($pirate2 < 133)
			$pgate2 = "3";
		else if ($pirate2 < 154)
			$pgate2 = "4";
		else if ($pirate2 < 205)
			$pgate2 = "5";
		else if ($pirate2 < 252)
			$pgate2 = "6";
		else if ($pirate2 < 282)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 57)
			$pgate3 = "1";
		else if ($pirate3 < 115)
			$pgate3 = "2";
		else if ($pirate3 < 133)
			$pgate3 = "3";
		else if ($pirate3 < 154)
			$pgate3 = "4";
		else if ($pirate3 < 205)
			$pgate3 = "5";
		else if ($pirate3 < 252)
			$pgate3 = "6";
		else if ($pirate3 < 282)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 67)
			$pgate1 = "1";
		else if ($pirate1 < 134)
			$pgate1 = "2";
		else if ($pirate1 < 137)
			$pgate1 = "3";
		else if ($pirate1 < 157)
			$pgate1 = "4";
		else if ($pirate1 < 213)
			$pgate1 = "5";
		else if ($pirate1 < 269)
			$pgate1 = "6";
		else if ($pirate1 < 297)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 67)
			$pgate2 = "1";
		else if ($pirate2 < 134)
			$pgate2 = "2";
		else if ($pirate2 < 137)
			$pgate2 = "3";
		else if ($pirate2 < 157)
			$pgate2 = "4";
		else if ($pirate2 < 213)
			$pgate2 = "5";
		else if ($pirate2 < 269)
			$pgate2 = "6";
		else if ($pirate2 < 297)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 67)
			$pgate3 = "1";
		else if ($pirate3 < 134)
			$pgate3 = "2";
		else if ($pirate3 < 137)
			$pgate3 = "3";
		else if ($pirate3 < 157)
			$pgate3 = "4";
		else if ($pirate3 < 213)
			$pgate3 = "5";
		else if ($pirate3 < 269)
			$pgate3 = "6";
		else if ($pirate3 < 297)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 73)
			$pgate1 = "1";
		else if ($pirate1 < 150)
			$pgate1 = "2";
		else if ($pirate1 < 150)
			$pgate1 = "3";
		else if ($pirate1 < 158)
			$pgate1 = "4";
		else if ($pirate1 < 214)
			$pgate1 = "5";
		else if ($pirate1 < 281)
			$pgate1 = "6";
		else if( $pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 73)
			$pgate2 = "1";
		else if ($pirate2 < 150)
			$pgate2 = "2";
		else if ($pirate2 < 150)
			$pgate2 = "3";
		else if ($pirate2 < 158)
			$pgate2 = "4";
		else if ($pirate2 < 214)
			$pgate2 = "5";
		else if ($pirate2 < 281)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 73)
			$pgate3 = "1";
		else if ($pirate3 < 150)
			$pgate3 = "2";
		else if ($pirate3 < 150)
			$pgate3 = "3";
		else if ($pirate3 < 158)
			$pgate3 = "4";
		else if ($pirate3 < 214)
			$pgate3 = "5";
		else if ($pirate3 < 281)
			$pgate3 = "6";
		else if ($pirate3 < 301)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 32)
			$pgate1 = "1";
		else if ($pirate1 < 86)
			$pgate1 = "2";
		else if ($pirate1 < 96)
			$pgate1 = "3";
		else if ($pirate1 < 135)
			$pgate1 = "4";
		else if ($pirate1 < 200)
			$pgate1 = "5";
		else if ($pirate1 < 207)
			$pgate1 = "6";
		else if ($pirate1 < 264)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 32)
			$pgate2 = "1";
		else if ($pirate2 < 86)
			$pgate2 = "2";
		else if ($pirate2 < 96)
			$pgate2 = "3";
		else if ($pirate2 < 135)
			$pgate2 = "4";
		else if ($pirate2 < 200)
			$pgate2 = "5";
		else if ($pirate2 < 207)
			$pgate2 = "6";
		else if ($pirate2 < 264)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 32)
			$pgate3 = "1";
		else if ($pirate3 < 86)
			$pgate3 = "2";
		else if ($pirate3 < 96)
			$pgate3 = "3";
		else if ($pirate3 < 135)
			$pgate3 = "4";
		else if ($pirate3 < 200)
			$pgate3 = "5";
		else if ($pirate3 < 207)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 20)
			$pgate1 = "1";
		else if ($pirate1 < 81)
			$pgate1 = "2";
		else if ($pirate1 < 81)
			$pgate1 = "3";
		else if ($pirate1 < 114)
			$pgate1 = "4";
		else if ($pirate1 < 193)
			$pgate1 = "5";
		else if ($pirate1 < 193)
			$pgate1 = "6";
		else if ($pirate1 < 262)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 20)
			$pgate2 = "1";
		else if ($pirate2 < 81)
			$pgate2 = "2";
		else if ($pirate2 < 81)
			$pgate2 = "3";
		else if ($pirate2 < 114)
			$pgate2 = "4";
		else if ($pirate2 < 193)
			$pgate2 = "5";
		else if ($pirate2 < 193)
			$pgate2 = "6";
		else if ($pirate2 < 262)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 20)
			$pgate3 = "1";
		else if ($pirate3 < 81)
			$pgate3 = "2";
		else if ($pirate3 < 81)
			$pgate3 = "3";
		else if ($pirate3 < 114)
			$pgate3 = "4";
		else if ($pirate3 < 193)
			$pgate3 = "5";
		else if ($pirate3 < 193)
			$pgate3 = "6";
		else if ($pirate3 < 262)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";
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

		if ($pirate1 < 4)
			$pgate1 = "1";
		else if ($pirate1 < 74)
			$pgate1 = "2";
		else if ($pirate1 < 74)
			$pgate1 = "3";
		else if ($pirate1 < 94)
			$pgate1 = "4";
		else if ($pirate1 < 180)
			$pgate1 = "5";
		else if ($pirate1 < 180)
			$pgate1 = "6";
		else if ($pirate1 < 266)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 4)
			$pgate2 = "1";
		else if ($pirate2 < 74)
			$pgate2 = "2";
		else if ($pirate2 < 74)
			$pgate2 = "3";
		else if ($pirate2 < 94)
			$pgate2 = "4";
		else if ($pirate2 < 180)
			$pgate2 = "5";
		else if ($pirate2 < 180)
			$pgate2 = "6";
		else if ($pirate2 < 266)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 4)
			$pgate3 = "1";
		else if ($pirate3 < 74)
			$pgate3 = "2";
		else if ($pirate3 < 74)
			$pgate3 = "3";
		else if ($pirate3 < 94)
			$pgate3 = "4";
		else if ($pirate3 < 180)
			$pgate3 = "5";
		else if ($pirate3 < 180)
			$pgate3 = "6";
		else if ($pirate3 < 266)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 47)
			$pgate1 = "1";
		else if ($pirate1 < 101)
			$pgate1 = "2";
		else if ($pirate1 < 101)
			$pgate1 = "3";
		else if ($pirate1 < 145)
			$pgate1 = "4";
		else if ($pirate1 < 219)
			$pgate1 = "5";
		else if ($pirate1 < 219)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 47)
			$pgate2 = "1";
		else if ($pirate2 < 101)
			$pgate2 = "2";
		else if ($pirate2 < 101)
			$pgate2 = "3";
		else if ($pirate2 < 145)
			$pgate2 = "4";
		else if ($pirate2 < 219)
			$pgate2 = "5";
		else if ($pirate2 < 219)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 47)
			$pgate3 = "1";
		else if ($pirate3 < 101)
			$pgate3 = "2";
		else if ($pirate3 < 101)
			$pgate3 = "3";
		else if ($pirate3 < 145)
			$pgate3 = "4";
		else if ($pirate3 < 219)
			$pgate3 = "5";
		else if ($pirate3 < 219)
			$pgate3 = "6";
		else if ($pirate3 < 301)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 47)
			$pgate1 = "1";
		else if ($pirate1 < 99)
			$pgate1 = "2";
		else if ($pirate1 < 99)
			$pgate1 = "3";
		else if ($pirate1 < 141)
			$pgate1 = "4";
		else if ($pirate1 < 214)
			$pgate1 = "5";
		else if ($pirate1 < 214)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 47)
			$pgate2 = "1";
		else if ($pirate2 < 99)
			$pgate2 = "2";
		else if ($pirate2 < 99)
			$pgate2 = "3";
		else if ($pirate2 < 141)
			$pgate2 = "4";
		else if ($pirate2 < 214)
			$pgate2 = "5";
		else if ($pirate2 < 214)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 47)
			$pgate3 = "1";
		else if ($pirate3 < 99)
			$pgate3 = "2";
		else if ($pirate3 < 99)
			$pgate3 = "3";
		else if ($pirate3 < 141)
			$pgate3 = "4";
		else if ($pirate3 < 214)
			$pgate3 = "5";
		else if ($pirate3 < 214)
			$pgate3 = "6";
		else if ($pirate3 < 301)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 42)
			$pgate1 = "1";
		else if ($pirate1 < 120)
			$pgate1 = "2";
		else if ($pirate1 < 129)
			$pgate1 = "3";
		else if ($pirate1 < 176)
			$pgate1 = "4";
		else if ($pirate1 < 240)
			$pgate1 = "5";
		else if ($pirate1 < 240)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 42)
			$pgate2 = "1";
		else if ($pirate2 < 120)
			$pgate2 = "2";
		else if ($pirate1 < 129)
			$pgate1 = "3";
		else if ($pirate1 < 176)
			$pgate1 = "4";
		else if ($pirate1 < 240)
			$pgate1 = "5";
		else if ($pirate2 < 240)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 42)
			$pgate3 = "1";
		else if ($pirate3 < 120)
			$pgate3 = "2";
		else if ($pirate1 < 129)
			$pgate1 = "3";
		else if ($pirate1 < 176)
			$pgate1 = "4";
		else if ($pirate1 < 240)
			$pgate1 = "5";
		else if ($pirate3 < 240)
			$pgate3 = "6";
		else if ($pirate3 < 301)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 54)
			$pgate1 = "1";
		else if ($pirate1 < 106)
			$pgate1 = "2";
		else if ($pirate1 < 127)
			$pgate1 = "3";
		else if ($pirate1 < 163)
			$pgate1 = "4";
		else if ($pirate1 < 227)
			$pgate1 = "5";
		else if ($pirate1 < 243)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 54)
			$pgate2 = "1";
		else if ($pirate2 < 106)
			$pgate2 = "2";
		else if ($pirate2 < 127)
			$pgate2 = "3";
		else if ($pirate2 < 163)
			$pgate2 = "4";
		else if ($pirate2 < 227)
			$pgate2 = "5";
		else if ($pirate2 < 243)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 54)
			$pgate3 = "1";
		else if ($pirate3 < 106)
			$pgate3 = "2";
		else if ($pirate3 < 127)
			$pgate3 = "3";
		else if ($pirate3 < 163)
			$pgate3 = "4";
		else if ($pirate3 < 227)
			$pgate3 = "5";
		else if ($pirate3 < 243)
			$pgate3 = "6";
		else if ($pirate3 < 301)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";
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

		if ($pirate1 < 56)
			$pgate1 = "1";
		else if ($pirate1 < 121)
			$pgate1 = "2";
		else if ($pirate1 < 121)
			$pgate1 = "3";
		else if ($pirate1 < 161)
			$pgate1 = "4";
		else if ($pirate1 < 235)
			$pgate1 = "5";
		else if ($pirate1 < 235)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 56)
			$pgate2 = "1";
		else if ($pirate2 < 121)
			$pgate2 = "2";
		else if ($pirate2 < 121)
			$pgate2 = "3";
		else if ($pirate2 < 161)
			$pgate2 = "4";
		else if ($pirate2 < 235)
			$pgate2 = "5";
		else if ($pirate2 < 235)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 56)
			$pgate3 = "1";
		else if ($pirate3 < 121)
			$pgate3 = "2";
		else if ($pirate3 < 121)
			$pgate3 = "3";
		else if ($pirate3 < 161)
			$pgate3 = "4";
		else if ($pirate3 < 235)
			$pgate3 = "5";
		else if ($pirate3 < 235)
			$pgate3 = "6";
		else if ($pirate3 < 301)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 47)
			$pgate1 = "1";
		else if ($pirate1 < 120)
			$pgate1 = "2";
		else if ($pirate1 < 120)
			$pgate1 = "3";
		else if ($pirate1 < 152)
			$pgate1 = "4";
		else if ($pirate1 < 234)
			$pgate1 = "5";
		else if ($pirate1 < 234)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 47)
			$pgate2 = "1";
		else if ($pirate2 < 120)
			$pgate2 = "2";
		else if ($pirate2 < 120)
			$pgate2 = "3";
		else if ($pirate2 < 152)
			$pgate2 = "4";
		else if ($pirate2 < 234)
			$pgate2 = "5";
		else if ($pirate2 < 234)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 47)
			$pgate3 = "1";
		else if ($pirate3 < 120)
			$pgate3 = "2";
		else if ($pirate3 < 120)
			$pgate3 = "3";
		else if ($pirate3 < 152)
			$pgate3 = "4";
		else if ($pirate3 < 234)
			$pgate3 = "5";
		else if ($pirate3 < 234)
			$pgate3 = "6";
		else if ($pirate3 < 301)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 46)
			$pgate1 = "1";
		else if ($pirate1 < 73)
			$pgate1 = "2";
		else if ($pirate1 < 111)
			$pgate1 = "3";
		else if ($pirate1 < 134)
			$pgate1 = "4";
		else if ($pirate1 < 146)
			$pgate1 = "5";
		else if ($pirate1 < 226)
			$pgate1 = "6";
		else if ($pirate1 < 260)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 46)
			$pgate2 = "1";
		else if ($pirate2 < 73)
			$pgate2 = "2";
		else if ($pirate2 < 111)
			$pgate2 = "3";
		else if ($pirate2 < 134)
			$pgate2 = "4";
		else if ($pirate2 < 146)
			$pgate2 = "5";
		else if ($pirate2 < 226)
			$pgate2 = "6";
		else if ($pirate2 < 260)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 46)
			$pgate3 = "1";
		else if ($pirate3 < 73)
			$pgate3 = "2";
		else if ($pirate3 < 111)
			$pgate3 = "3";
		else if ($pirate3 < 134)
			$pgate3 = "4";
		else if ($pirate3 < 146)
			$pgate3 = "5";
		else if ($pirate3 < 226)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 53)
			$pgate1 = "1";
		else if ($pirate1 < 70)
			$pgate1 = "2";
		else if ($pirate1 < 119)
			$pgate1 = "3";
		else if ($pirate1 < 131)
			$pgate1 = "4";
		else if ($pirate1 < 133)
			$pgate1 = "5";
		else if ($pirate1 < 218)
			$pgate1 = "6";
		else if ($pirate1 < 252)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 53)
			$pgate2 = "1";
		else if ($pirate2 < 70)
			$pgate2 = "2";
		else if ($pirate2 < 119)
			$pgate2 = "3";
		else if ($pirate2 < 131)
			$pgate2 = "4";
		else if ($pirate2 < 133)
			$pgate2 = "5";
		else if ($pirate2 < 218)
			$pgate2 = "6";
		else if ($pirate2 < 252)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 53)
			$pgate3 = "1";
		else if ($pirate3 < 70)
			$pgate3 = "2";
		else if ($pirate3 < 119)
			$pgate3 = "3";
		else if ($pirate3 < 131)
			$pgate3 = "4";
		else if ($pirate3 < 133)
			$pgate3 = "5";
		else if ($pirate3 < 218)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 64)
			$pgate1 = "1";
		else if ($pirate1 < 67)
			$pgate1 = "2";
		else if ($pirate1 < 122)
			$pgate1 = "3";
		else if ($pirate1 < 123)
			$pgate1 = "4";
		else if ($pirate1 < 123)
			$pgate1 = "5";
		else if ($pirate1 < 213)
			$pgate1 = "6";
		else if ($pirate1 < 243)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 64)
			$pgate2 = "1";
		else if ($pirate2 < 67)
			$pgate2 = "2";
		else if ($pirate2 < 122)
			$pgate2 = "3";
		else if ($pirate2 < 123)
			$pgate2 = "4";
		else if ($pirate2 < 123)
			$pgate2 = "5";
		else if ($pirate2 < 213)
			$pgate2 = "6";
		else if ($pirate2 < 243)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate1 < 64)
			$pgate3 = "1";
		else if ($pirate3 < 67)
			$pgate3 = "2";
		else if ($pirate3 < 122)
			$pgate3 = "3";
		else if ($pirate3 < 123)
			$pgate3 = "4";
		else if ($pirate3 < 123)
			$pgate3 = "5";
		else if ($pirate3 < 213)
			$pgate3 = "6";
		else if ($pirate3 < 243)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 55)
			$pgate1 = "1";
		else if ($pirate1 < 97)
			$pgate1 = "2";
		else if ($pirate1 < 109)
			$pgate1 = "3";
		else if ($pirate1 < 131)
			$pgate1 = "4";
		else if ($pirate1 < 131)
			$pgate1 = "5";
		else if ($pirate1 < 215)
			$pgate1 = "6";
		else if ($pirate1 < 252)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 55)
			$pgate2 = "1";
		else if ($pirate2 < 97)
			$pgate2 = "2";
		else if ($pirate2 < 109)
			$pgate2 = "3";
		else if ($pirate2 < 131)
			$pgate2 = "4";
		else if ($pirate2 < 131)
			$pgate2 = "5";
		else if ($pirate2 < 215)
			$pgate2 = "6";
		else if ($pirate2 < 252)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 55)
			$pgate3 = "1";
		else if ($pirate3 < 97)
			$pgate3 = "2";
		else if ($pirate3 < 109)
			$pgate3 = "3";
		else if ($pirate3 < 131)
			$pgate3 = "4";
		else if ($pirate3 < 131)
			$pgate3 = "5";
		else if ($pirate3 < 215)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 77)
			$pgate1 = "1";
		else if ($pirate1 < 116)
			$pgate1 = "2";
		else if ($pirate1 < 116)
			$pgate1 = "3";
		else if ($pirate1 < 116)
			$pgate1 = "4";
		else if ($pirate1 < 116)
			$pgate1 = "5";
		else if ($pirate1 < 212)
			$pgate1 = "6";
		else if ($pirate1 < 234)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 77)
			$pgate2 = "1";
		else if ($pirate2 < 116)
			$pgate2 = "2";
		else if ($pirate2 < 116)
			$pgate2 = "3";
		else if ($pirate2 < 116)
			$pgate2 = "4";
		else if ($pirate2 < 116)
			$pgate2 = "5";
		else if ($pirate2 < 212)
			$pgate2 = "6";
		else if ($pirate2 < 234)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 77)
			$pgate3 = "1";
		else if ($pirate3 < 116)
			$pgate3 = "2";
		else if ($pirate3 < 116)
			$pgate3 = "3";
		else if ($pirate3 < 116)
			$pgate3 = "4";
		else if ($pirate3 < 116)
			$pgate3 = "5";
		else if ($pirate3 < 212)
			$pgate3 = "6";
		else if ($pirate3 < 234)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

		if ($pirate1 < 53)
			$pgate1 = "1";
		else if ($pirate1 < 90)
			$pgate1 = "2";
		else if ($pirate1 < 102)
			$pgate1 = "3";
		else if ($pirate1 < 127)
			$pgate1 = "4";
		else if ($pirate1 < 133)
			$pgate1 = "5";
		else if ($pirate1 < 205)
			$pgate1 = "6";
		else if ($pirate1 < 236)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 53)
			$pgate2 = "1";
		else if ($pirate2 < 90)
			$pgate2 = "2";
		else if ($pirate2 < 102)
			$pgate2 = "3";
		else if ($pirate2 < 127)
			$pgate2 = "4";
		else if ($pirate2 < 133)
			$pgate2 = "5";
		else if ($pirate2 < 205)
			$pgate2 = "6";
		else if ($pirate2 < 236)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 53)
			$pgate3 = "1";
		else if ($pirate3 < 90)
			$pgate3 = "2";
		else if ($pirate3 < 102)
			$pgate3 = "3";
		else if ($pirate3 < 127)
			$pgate3 = "4";
		else if ($pirate3 < 133)
			$pgate3 = "5";
		else if ($pirate3 < 205)
			$pgate3 = "6";
		else if ($pirate3 < 236)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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
			else if ($pirate1 < 79)
				$pgate1 = "2";
			else if ($pirate1 < 99)
				$pgate1 = "3";
			else if ($pirate1 < 135)
				$pgate1 = "4";
			else if ($pirate1 < 148)
				$pgate1 = "5";
			else if ($pirate1 < 220)
				$pgate1 = "6";
			else if ($pirate1 < 263)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 36)
				$pgate2 = "1";
			else if ($pirate2 < 79)
				$pgate2 = "2";
			else if ($pirate2 < 99)
				$pgate2 = "3";
			else if ($pirate2 < 135)
				$pgate2 = "4";
			else if ($pirate2 < 148)
				$pgate2 = "5";
			else if ($pirate2 < 220)
				$pgate2 = "6";
			else if ($pirate2 < 263)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 36)
				$pgate3 = "1";
			else if ($pirate3 < 79)
				$pgate3 = "2";
			else if ($pirate3 < 99)
				$pgate3 = "3";
			else if ($pirate3 < 135)
				$pgate3 = "4";
			else if ($pirate3 < 148)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

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

			if ($pirate1 < 45)
				$pgate1 = "1";
			else if ($pirate1 < 88)
				$pgate1 = "2";
			else if ($pirate1 < 94)
				$pgate1 = "3";
			else if ($pirate1 < 122)
				$pgate1 = "4";
			else if ($pirate1 < 122)
				$pgate1 = "5";
			else if ($pirate1 < 211)
				$pgate1 = "6";
			else if ($pirate1 < 251)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 45)
				$pgate2 = "1";
			else if ($pirate2 < 88)
				$pgate2 = "2";
			else if ($pirate2 < 94)
				$pgate2 = "3";
			else if ($pirate2 < 122)
				$pgate2 = "4";
			else if ($pirate2 < 122)
				$pgate2 = "5";
			else if ($pirate2 < 211)
				$pgate2 = "6";
			else if ($pirate2 < 251)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 45)
				$pgate3 = "1";
			else if ($pirate3 < 88)
				$pgate3 = "2";
			else if ($pirate3 < 94)
				$pgate3 = "3";
			else if ($pirate3 < 122)
				$pgate3 = "4";
			else if ($pirate3 < 122)
				$pgate3 = "5";
			else if ($pirate3 < 211)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

			} ?>
			</td>
	</tr>

	<?php } else if ($_SESSION['counter'] == 26) { ?>
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

			if ($pirate1 < 60)
				$pgate1 = "1";
			else if ($pirate1 < 99)
				$pgate1 = "2";
			else if ($pirate1 < 99)
				$pgate1 = "3";
			else if ($pirate1 < 106)
				$pgate1 = "4";
			else if ($pirate1 < 106)
				$pgate1 = "5";
			else if ($pirate1 < 206)
				$pgate1 = "6";
			else if ($pirate1 < 233)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 60)
				$pgate2 = "1";
			else if ($pirate2 < 99)
				$pgate2 = "2";
			else if ($pirate2 < 99)
				$pgate2 = "3";
			else if ($pirate2 < 106)
				$pgate2 = "4";
			else if ($pirate2 < 106)
				$pgate2 = "5";
			else if ($pirate2 < 206)
				$pgate2 = "6";
			else if ($pirate2 < 233)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 60)
				$pgate3 = "1";
			else if ($pirate3 < 99)
				$pgate3 = "2";
			else if ($pirate3 < 99)
				$pgate3 = "3";
			else if ($pirate3 < 106)
				$pgate3 = "4";
			else if ($pirate3 < 106)
				$pgate3 = "5";
			else if ($pirate3 < 206)
				$pgate3 = "6";
			else if ($pirate3 < 233)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

			} ?>
			</td>
	</tr>

	<?php } else if ($_SESSION['counter'] == 27) { ?>
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
			else if ($pirate1 < 69)
				$pgate1 = "2";
			else if ($pirate1 < 99)
				$pgate1 = "3";
			else if ($pirate1 < 136)
				$pgate1 = "4";
			else if ($pirate1 < 146)
				$pgate1 = "5";
			else if ($pirate1 < 207)
				$pgate1 = "6";
			else if ($pirate1 < 256)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 37)
				$pgate2 = "1";
			else if ($pirate2 < 69)
				$pgate2 = "2";
			else if ($pirate2 < 99)
				$pgate2 = "3";
			else if ($pirate2 < 136)
				$pgate2 = "4";
			else if ($pirate2 < 146)
				$pgate2 = "5";
			else if ($pirate2 < 207)
				$pgate2 = "6";
			else if ($pirate2 < 256)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 37)
				$pgate3 = "1";
			else if ($pirate3 < 69)
				$pgate3 = "2";
			else if ($pirate3 < 99)
				$pgate3 = "3";
			else if ($pirate3 < 136)
				$pgate3 = "4";
			else if ($pirate3 < 146)
				$pgate3 = "5";
			else if ($pirate3 < 207)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

			} ?>
			</td>
	</tr>

	<?php } else if ($_SESSION['counter'] == 28) { ?>
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
			else if ($pirate1 < 61)
				$pgate1 = "2";
			else if ($pirate1 < 84)
				$pgate1 = "3";
			else if ($pirate1 < 116)
				$pgate1 = "4";
			else if ($pirate1 < 116)
				$pgate1 = "5";
			else if ($pirate1 < 195)
				$pgate1 = "6";
			else if ($pirate1 < 254)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 39)
				$pgate2 = "1";
			else if ($pirate2 < 61)
				$pgate2 = "2";
			else if ($pirate2 < 84)
				$pgate2 = "3";
			else if ($pirate2 < 116)
				$pgate2 = "4";
			else if ($pirate2 < 116)
				$pgate2 = "5";
			else if ($pirate2 < 195)
				$pgate2 = "6";
			else if ($pirate2 < 254)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 39)
				$pgate3 = "1";
			else if ($pirate3 < 61)
				$pgate3 = "2";
			else if ($pirate3 < 84)
				$pgate3 = "3";
			else if ($pirate3 < 116)
				$pgate3 = "4";
			else if ($pirate3 < 116)
				$pgate3 = "5";
			else if ($pirate3 < 195)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

			} ?>
			</td>
	</tr>

	<?php } else if ($_SESSION['counter'] == 29) { ?>
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
			else if ($pirate1 < 47)
				$pgate1 = "2";
			else if ($pirate1 < 57)
				$pgate1 = "3";
			else if ($pirate1 < 78)
				$pgate1 = "4";
			else if ($pirate1 < 78)
				$pgate1 = "5";
			else if ($pirate1 < 176)
				$pgate1 = "6";
			else if ($pirate1 < 251)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 40)
				$pgate2 = "1";
			else if ($pirate2 < 47)
				$pgate2 = "2";
			else if ($pirate2 < 57)
				$pgate2 = "3";
			else if ($pirate2 < 78)
				$pgate2 = "4";
			else if ($pirate2 < 78)
				$pgate2 = "5";
			else if ($pirate2 < 176)
				$pgate2 = "6";
			else if ($pirate2 < 251)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 40)
				$pgate3 = "1";
			else if ($pirate3 < 47)
				$pgate3 = "2";
			else if ($pirate3 < 57)
				$pgate3 = "3";
			else if ($pirate3 < 78)
				$pgate3 = "4";
			else if ($pirate3 < 78)
				$pgate3 = "5";
			else if ($pirate3 < 176)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

			} ?>
			</td>
	</tr>

	<?php } else if ($_SESSION['counter'] == 30) { ?>
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

			if ($pirate1 < 16)
				$pgate1 = "1";
			else if ($pirate1 < 57)
				$pgate1 = "2";
			else if ($pirate1 < 66)
				$pgate1 = "3";
			else if ($pirate1 < 121)
				$pgate1 = "4";
			else if ($pirate1 < 121)
				$pgate1 = "5";
			else if ($pirate1 < 205)
				$pgate1 = "6";
			else if ($pirate1 < 246)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 16)
				$pgate2 = "1";
			else if ($pirate2 < 57)
				$pgate2 = "2";
			else if ($pirate2 < 66)
				$pgate2 = "3";
			else if ($pirate2 < 121)
				$pgate2 = "4";
			else if ($pirate2 < 121)
				$pgate2 = "5";
			else if ($pirate2 < 205)
				$pgate2 = "6";
			else if ($pirate2 < 246)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 16)
				$pgate3 = "1";
			else if ($pirate3 < 57)
				$pgate3 = "2";
			else if ($pirate3 < 66)
				$pgate3 = "3";
			else if ($pirate3 < 121)
				$pgate3 = "4";
			else if ($pirate3 < 121)
				$pgate3 = "5";
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

			} ?>
			</td>
	</tr>

	<?php } else if ($_SESSION['counter'] == 31) { ?>
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

			if ($pirate1 < 0)
				$pgate1 = "1";
			else if ($pirate1 < 43)
				$pgate1 = "2";
			else if ($pirate1 < 43)
				$pgate1 = "3";
			else if ($pirate1 < 115)
				$pgate1 = "4";
			else if ($pirate1 < 115)
				$pgate1 = "5";
			else if ($pirate1 < 202)
				$pgate1 = "6";
			else if ($pirate1 < 244)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 0)
				$pgate2 = "1";
			else if ($pirate2 < 43)
				$pgate2 = "2";
			else if ($pirate2 < 43)
				$pgate2 = "3";
			else if ($pirate2 < 115)
				$pgate2 = "4";
			else if ($pirate2 < 115)
				$pgate2 = "5";
			else if ($pirate2 < 202)
				$pgate2 = "6";
			else if ($pirate2 < 244)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 0)
				$pgate3 = "1";
			else if ($pirate3 < 43)
				$pgate3 = "2";
			else if ($pirate3 < 43)
				$pgate3 = "3";
			else if ($pirate3 < 115)
				$pgate3 = "4";
			else if ($pirate3 < 115)
				$pgate3 = "5";
			else if ($pirate3 < 202)
				$pgate3 = "6";
			else if ($pirate3 < 244)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

			} ?>
			</td>
	</tr>

	<?php } else if ($_SESSION['counter'] == 32) { ?>
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

			if ($pirate1 < 22)
				$pgate1 = "1";
			else if ($pirate1 < 59)
				$pgate1 = "2";
			else if ($pirate1 < 78)
				$pgate1 = "3";
			else if ($pirate1 < 122)
				$pgate1 = "4";
			else if ($pirate1 < 127)
				$pgate1 = "5";
			else if ($pirate1 < 185)
				$pgate1 = "6";
			else if ($pirate1 < 254)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 22)
				$pgate2 = "1";
			else if ($pirate2 < 59)
				$pgate2 = "2";
			else if ($pirate2 < 78)
				$pgate2 = "3";
			else if ($pirate2 < 122)
				$pgate2 = "4";
			else if ($pirate2 < 127)
				$pgate2 = "5";
			else if ($pirate2 < 185)
				$pgate2 = "6";
			else if ($pirate2 < 254)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 22)
				$pgate3 = "1";
			else if ($pirate3 < 59)
				$pgate3 = "2";
			else if ($pirate3 < 78)
				$pgate3 = "3";
			else if ($pirate3 < 122)
				$pgate3 = "4";
			else if ($pirate3 < 127)
				$pgate3 = "5";
			else if ($pirate3 < 185)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

			} ?>
			</td>
	</tr>

	<?php } else if ($_SESSION['counter'] == 33) { ?>
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
			else if ($pirate1 < 68)
				$pgate1 = "2";
			else if ($pirate1 < 98)
				$pgate1 = "3";
			else if ($pirate1 < 142)
				$pgate1 = "4";
			else if ($pirate1 < 162)
				$pgate1 = "5";
			else if ($pirate1 < 224)
				$pgate1 = "6";
			else if ($pirate1 < 260)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 35)
				$pgate2 = "1";
			else if ($pirate2 < 68)
				$pgate2 = "2";
			else if ($pirate2 < 98)
				$pgate2 = "3";
			else if ($pirate2 < 142)
				$pgate2 = "4";
			else if ($pirate2 < 162)
				$pgate2 = "5";
			else if ($pirate2 < 224)
				$pgate2 = "6";
			else if ($pirate2 < 260)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 35)
				$pgate3 = "1";
			else if ($pirate3 < 68)
				$pgate3 = "2";
			else if ($pirate3 < 98)
				$pgate3 = "3";
			else if ($pirate3 < 142)
				$pgate3 = "4";
			else if ($pirate3 < 162)
				$pgate3 = "5";
			else if ($pirate3 < 224)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

			} ?>
			</td>
	</tr>

	<?php } else if ($_SESSION['counter'] == 34) { ?>
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

			if ($pirate1 < 28)
				$pgate1 = "1";
			else if ($pirate1 < 61)
				$pgate1 = "2";
			else if ($pirate1 < 84)
				$pgate1 = "3";
			else if ($pirate1 < 130)
				$pgate1 = "4";
			else if ($pirate1 < 132)
				$pgate1 = "5";
			else if ($pirate1 < 207)
				$pgate1 = "6";
			else if ($pirate1 < 254)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 28)
				$pgate2 = "1";
			else if ($pirate2 < 61)
				$pgate2 = "2";
			else if ($pirate2 < 84)
				$pgate2 = "3";
			else if ($pirate2 < 130)
				$pgate2 = "4";
			else if ($pirate2 < 132)
				$pgate2 = "5";
			else if ($pirate2 < 207)
				$pgate2 = "6";
			else if ($pirate2 < 254)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 28)
				$pgate3 = "1";
			else if ($pirate3 < 61)
				$pgate3 = "2";
			else if ($pirate3 < 84)
				$pgate3 = "3";
			else if ($pirate3 < 130)
				$pgate3 = "4";
			else if ($pirate3 < 132)
				$pgate3 = "5";
			else if ($pirate3 < 207)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";
			} ?>
			</td>
	</tr>

	<?php } else if ($_SESSION['counter'] == 35) { ?>
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

			if ($pirate1 < 5)
				$pgate1 = "1";
			else if ($pirate1 < 35)
				$pgate1 = "2";
			else if ($pirate1 < 37)
				$pgate1 = "3";
			else if ($pirate1 < 85)
				$pgate1 = "4";
			else if ($pirate1 < 85)
				$pgate1 = "5";
			else if ($pirate1 < 177)
				$pgate1 = "6";
			else if ($pirate1 < 246)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 5)
				$pgate2 = "1";
			else if ($pirate2 < 35)
				$pgate2 = "2";
			else if ($pirate2 < 37)
				$pgate2 = "3";
			else if ($pirate2 < 85)
				$pgate2 = "4";
			else if ($pirate2 < 85)
				$pgate2 = "5";
			else if ($pirate2 < 177)
				$pgate2 = "6";
			else if ($pirate2 < 246)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 5)
				$pgate3 = "1";
			else if ($pirate3 < 35)
				$pgate3 = "2";
			else if ($pirate3 < 37)
				$pgate3 = "3";
			else if ($pirate3 < 85)
				$pgate3 = "4";
			else if ($pirate3 < 85)
				$pgate3 = "5";
			else if ($pirate3 < 177)
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
	$_SESSION['observations'][$_SESSION['combo'][$_SESSION['position']]] = "[$pgate1, $pgate2, $pgate3]";

			} ?>
			</td>
	</tr>

<?php } ?>

<?php if (($_SESSION['counter'] == 0) || ($_SESSION['counter'] == 1) || ($_SESSION['counter'] == 2) || ($_SESSION['counter'] == 3)
			|| ($_SESSION['counter'] == 4) || ($_SESSION['counter'] == 5) || ($_SESSION['counter'] == 6) || ($_SESSION['counter'] == 7)
			|| ($_SESSION['counter'] == 8)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>2</td><td>6</td><td>7</td><td>7</td><td>8</td><td>8</td><td>6</td><td>9</td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-8</td><td>-10</td><td>-3</td><td>-1</td><td>-10</td><td>-5</td><td>-2</td><td>-5</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 9) || ($_SESSION['counter'] == 10) || ($_SESSION['counter'] == 11) || ($_SESSION['counter'] == 12)
			|| ($_SESSION['counter'] == 13) || ($_SESSION['counter'] == 14) || ($_SESSION['counter'] == 15) || ($_SESSION['counter'] == 16)
			|| ($_SESSION['counter'] == 17)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>3</td><td>8</td><td>9</td><td>9</td><td>7</td><td>7</td><td>4</td><td>1</td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-10</td><td>-2</td><td>-5</td><td>-1</td><td>-7</td><td>-6</td><td>-2</td><td>-1</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 18) || ($_SESSION['counter'] == 19) || ($_SESSION['counter'] == 20) || ($_SESSION['counter'] == 21)
			|| ($_SESSION['counter'] == 22) || ($_SESSION['counter'] == 23) || ($_SESSION['counter'] == 24) || ($_SESSION['counter'] == 25)
			|| ($_SESSION['counter'] == 26)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>5</td><td>3</td><td>8</td><td>3</td><td>3</td><td>4</td><td>3</td><td>6</td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-2</td><td>-5</td><td>-4</td><td>-6</td><td>-3</td><td>-10</td><td>-7</td><td>-2</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 27) || ($_SESSION['counter'] == 28) || ($_SESSION['counter'] == 29) || ($_SESSION['counter'] == 30)
			|| ($_SESSION['counter'] == 31) || ($_SESSION['counter'] == 32) || ($_SESSION['counter'] == 33) || ($_SESSION['counter'] == 34)
			|| ($_SESSION['counter'] == 35)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>5</td><td>9</td><td>10</td><td>2</td><td>10</td><td>4</td><td>8</td><td>8</td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-10</td><td>-4</td><td>-9</td><td>-3</td><td>-10</td><td>-10</td><td>-2</td><td>-5</td>
	</tr>
<?php } ?>


<?php if ($_SESSION['counter'] < $maxround) { ?>
</table>
</font>

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

<br />

<!-- END Homepage Article -->



				<!-- ------------------------------------------------------------------------- -->
				<!-- Please don't write anything below this line... -->
				<!-- STOP PUTTING YOUR CONTENT -->
				<!-- ------------------------------------------------------------------------- -->

            </td>
            <td style="width: 20px;">
                &nbsp;
            </td>
        </tr>
        <tr style="height: 20px;">
            <td colspan="4">
                &nbsp;</td>
        </tr>
    </tbody></table>

                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>            
            <tr align="center">
                <td>

				<!-- Footer: Copyright and other info from "../JS/Footer.js" -->
				<table id="CopyrightTable" style="width: 1000px; background-color: white; border-top: solid 2px #CCCCCC;" cellpadding="0" cellspacing="0">
					<tbody>
						<tr>
							<td align="left">
								<script language="javascript" type="text/javascript" src="../JS/Footer.js"></script>
								<noscript>Your browser does not support JavaScript! OR The JavaScript has been turned off!
									Please upgrade your browser OR turn on the JavaScript on your browser.
								</noscript>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
        </tbody></table>
    

<script type="text/javascript">
//<![CDATA[

javascript:SetactiveTopLink('Games');
//javascript:SetactiveSubmenuLink('Research');//]]>

</script>

</body>

</html>