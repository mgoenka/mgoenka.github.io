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

		if ($pirate1 < 58)
			$pgate1 = "1";
		else if ($pirate1 < 123)
			$pgate1 = "2";
		else if ($pirate1 < 140)
			$pgate1 = "3";
		else if ($pirate1 < 159)
			$pgate1 = "4";
		else if ($pirate1 < 213)
			$pgate1 = "5";
		else if ($pirate1 < 255)
			$pgate1 = "6";
		else if ($pirate1 < 286)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 58)
			$pgate2 = "1";
		else if ($pirate2 < 123)
			$pgate2 = "2";
		else if ($pirate2 < 140)
			$pgate2 = "3";
		else if ($pirate2 < 159)
			$pgate2 = "4";
		else if ($pirate2 < 213)
			$pgate2 = "5";
		else if ($pirate2 < 255)
			$pgate2 = "6";
		else if ($pirate2 < 286)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 58)
			$pgate3 = "1";
		else if ($pirate3 < 123)
			$pgate3 = "2";
		else if ($pirate3 < 140)
			$pgate3 = "3";
		else if ($pirate3 < 159)
			$pgate3 = "4";
		else if ($pirate3 < 213)
			$pgate3 = "5";
		else if ($pirate3 < 255)
			$pgate3 = "6";
		else if ($pirate3 < 286)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 1)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 62)
			$pgate1 = "1";
		else if ($pirate1 < 127)
			$pgate1 = "2";
		else if ($pirate1 < 143)
			$pgate1 = "3";
		else if ($pirate1 < 160)
			$pgate1 = "4";
		else if ($pirate1 < 218)
			$pgate1 = "5";
		else if ($pirate1 < 259)
			$pgate1 = "6";
		else if ($pirate1 < 288)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 62)
			$pgate2 = "1";
		else if ($pirate2 < 127)
			$pgate2 = "2";
		else if ($pirate2 < 143)
			$pgate2 = "3";
		else if ($pirate2 < 160)
			$pgate2 = "4";
		else if ($pirate2 < 218)
			$pgate2 = "5";
		else if ($pirate2 < 259)
			$pgate2 = "6";
		else if ($pirate2 < 288)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 62)
			$pgate3 = "1";
		else if ($pirate3 < 127)
			$pgate3 = "2";
		else if ($pirate3 < 143)
			$pgate3 = "3";
		else if ($pirate3 < 160)
			$pgate3 = "4";
		else if ($pirate3 < 218)
			$pgate3 = "5";
		else if ($pirate3 < 259)
			$pgate3 = "6";
		else if ($pirate3 < 288)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 2)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 67)
			$pgate1 = "1";
		else if ($pirate1 < 132)
			$pgate1 = "2";
		else if ($pirate1 < 144)
			$pgate1 = "3";
		else if ($pirate1 < 162)
			$pgate1 = "4";
		else if ($pirate1 < 220)
			$pgate1 = "5";
		else if ($pirate1 < 262)
			$pgate1 = "6";
		else if ($pirate1 < 292)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 67)
			$pgate2 = "1";
		else if ($pirate2 < 132)
			$pgate2 = "2";
		else if ($pirate2 < 144)
			$pgate2 = "3";
		else if ($pirate2 < 162)
			$pgate2 = "4";
		else if ($pirate2 < 220)
			$pgate2 = "5";
		else if ($pirate2 < 262)
			$pgate2 = "6";
		else if ($pirate2 < 292)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 67)
			$pgate3 = "1";
		else if ($pirate3 < 132)
			$pgate3 = "2";
		else if ($pirate3 < 144)
			$pgate3 = "3";
		else if ($pirate3 < 162)
			$pgate3 = "4";
		else if ($pirate3 < 220)
			$pgate3 = "5";
		else if ($pirate3 < 262)
			$pgate3 = "6";
		else if ($pirate3 < 292)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 3)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 73)
			$pgate1 = "1";
		else if ($pirate1 < 139)
			$pgate1 = "2";
		else if ($pirate1 < 145)
			$pgate1 = "3";
		else if ($pirate1 < 164)
			$pgate1 = "4";
		else if ($pirate1 < 223)
			$pgate1 = "5";
		else if ($pirate1 < 266)
			$pgate1 = "6";
		else if ($pirate1 < 298)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 73)
			$pgate2 = "1";
		else if ($pirate2 < 139)
			$pgate2 = "2";
		else if ($pirate2 < 145)
			$pgate2 = "3";
		else if ($pirate2 < 164)
			$pgate2 = "4";
		else if ($pirate2 < 223)
			$pgate2 = "5";
		else if ($pirate2 < 266)
			$pgate2 = "6";
		else if ($pirate2 < 298)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 73)
			$pgate3 = "1";
		else if ($pirate3 < 139)
			$pgate3 = "2";
		else if ($pirate3 < 145)
			$pgate3 = "3";
		else if ($pirate3 < 164)
			$pgate3 = "4";
		else if ($pirate3 < 223)
			$pgate3 = "5";
		else if ($pirate3 < 266)
			$pgate3 = "6";
		else if ($pirate3 < 298)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 4)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 82)
			$pgate1 = "1";
		else if ($pirate1 < 148)
			$pgate1 = "2";
		else if ($pirate1 < 148)
			$pgate1 = "3";
		else if ($pirate1 < 167)
			$pgate1 = "4";
		else if ($pirate1 < 226)
			$pgate1 = "5";
		else if ($pirate1 < 269)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 82)
			$pgate2 = "1";
		else if ($pirate2 < 148)
			$pgate2 = "2";
		else if ($pirate2 < 148)
			$pgate2 = "3";
		else if ($pirate2 < 167)
			$pgate2 = "4";
		else if ($pirate2 < 226)
			$pgate2 = "5";
		else if ($pirate2 < 269)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 82)
			$pgate3 = "1";
		else if ($pirate3 < 148)
			$pgate3 = "2";
		else if ($pirate3 < 148)
			$pgate3 = "3";
		else if ($pirate3 < 167)
			$pgate3 = "4";
		else if ($pirate3 < 226)
			$pgate3 = "5";
		else if ($pirate3 < 269)
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

		if ($pirate1 < 56)
			$pgate1 = "1";
		else if ($pirate1 < 121)
			$pgate1 = "2";
		else if ($pirate1 < 131)
			$pgate1 = "3";
		else if ($pirate1 < 140)
			$pgate1 = "4";
		else if ($pirate1 < 203)
			$pgate1 = "5";
		else if ($pirate1 < 252)
			$pgate1 = "6";
		else if ($pirate1 < 270)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 56)
			$pgate2 = "1";
		else if ($pirate2 < 121)
			$pgate2 = "2";
		else if ($pirate2 < 131)
			$pgate2 = "3";
		else if ($pirate2 < 140)
			$pgate2 = "4";
		else if ($pirate2 < 203)
			$pgate2 = "5";
		else if ($pirate2 < 252)
			$pgate2 = "6";
		else if ($pirate2 < 270)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 56)
			$pgate3 = "1";
		else if ($pirate3 < 121)
			$pgate3 = "2";
		else if ($pirate3 < 131)
			$pgate3 = "3";
		else if ($pirate3 < 140)
			$pgate3 = "4";
		else if ($pirate3 < 203)
			$pgate3 = "5";
		else if ($pirate3 < 252)
			$pgate3 = "6";
		else if ($pirate3 < 270)
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
		else if ($pirate1 < 122)
			$pgate1 = "2";
		else if ($pirate1 < 132)
			$pgate1 = "3";
		else if ($pirate1 < 143)
			$pgate1 = "4";
		else if ($pirate1 < 204)
			$pgate1 = "5";
		else if ($pirate1 < 254)
			$pgate1 = "6";
		else if ($pirate1 < 274)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 57)
			$pgate2 = "1";
		else if ($pirate2 < 122)
			$pgate2 = "2";
		else if ($pirate2 < 132)
			$pgate2 = "3";
		else if ($pirate2 < 143)
			$pgate2 = "4";
		else if ($pirate2 < 204)
			$pgate2 = "5";
		else if ($pirate2 < 254)
			$pgate2 = "6";
		else if ($pirate2 < 274)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 57)
			$pgate3 = "1";
		else if ($pirate3 < 122)
			$pgate3 = "2";
		else if ($pirate3 < 132)
			$pgate3 = "3";
		else if ($pirate3 < 143)
			$pgate3 = "4";
		else if ($pirate3 < 204)
			$pgate3 = "5";
		else if ($pirate3 < 254)
			$pgate3 = "6";
		else if ($pirate3 < 274)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 7)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 59)
			$pgate1 = "1";
		else if ($pirate1 < 124)
			$pgate1 = "2";
		else if ($pirate1 < 133)
			$pgate1 = "3";
		else if ($pirate1 < 145)
			$pgate1 = "4";
		else if ($pirate1 < 205)
			$pgate1 = "5";
		else if ($pirate1 < 256)
			$pgate1 = "6";
		else if ($pirate1 < 277)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 59)
			$pgate2 = "1";
		else if ($pirate2 < 124)
			$pgate2 = "2";
		else if ($pirate2 < 133)
			$pgate2 = "3";
		else if ($pirate2 < 145)
			$pgate2 = "4";
		else if ($pirate2 < 205)
			$pgate2 = "5";
		else if ($pirate2 < 256)
			$pgate2 = "6";
		else if ($pirate2 < 277)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 59)
			$pgate3 = "1";
		else if ($pirate3 < 124)
			$pgate3 = "2";
		else if ($pirate3 < 133)
			$pgate3 = "3";
		else if ($pirate3 < 145)
			$pgate3 = "4";
		else if ($pirate3 < 205)
			$pgate3 = "5";
		else if ($pirate3 < 256)
			$pgate3 = "6";
		else if ($pirate3 < 277)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 8)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 60)
			$pgate1 = "1";
		else if ($pirate1 < 126)
			$pgate1 = "2";
		else if ($pirate1 < 133)
			$pgate1 = "3";
		else if ($pirate1 < 146)
			$pgate1 = "4";
		else if ($pirate1 < 207)
			$pgate1 = "5";
		else if ($pirate1 < 259)
			$pgate1 = "6";
		else if( $pirate1 < 280)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 60)
			$pgate2 = "1";
		else if ($pirate2 < 126)
			$pgate2 = "2";
		else if ($pirate2 < 133)
			$pgate2 = "3";
		else if ($pirate2 < 146)
			$pgate2 = "4";
		else if ($pirate2 < 207)
			$pgate2 = "5";
		else if ($pirate2 < 259)
			$pgate2 = "6";
		else if ($pirate2 < 280)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 60)
			$pgate3 = "1";
		else if ($pirate3 < 126)
			$pgate3 = "2";
		else if ($pirate3 < 133)
			$pgate3 = "3";
		else if ($pirate3 < 146)
			$pgate3 = "4";
		else if ($pirate3 < 207)
			$pgate3 = "5";
		else if ($pirate3 < 259)
			$pgate3 = "6";
		else if ($pirate3 < 280)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 9)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 61)
			$pgate1 = "1";
		else if ($pirate1 < 129)
			$pgate1 = "2";
		else if ($pirate1 < 133)
			$pgate1 = "3";
		else if ($pirate1 < 145)
			$pgate1 = "4";
		else if ($pirate1 < 207)
			$pgate1 = "5";
		else if ($pirate1 < 262)
			$pgate1 = "6";
		else if ($pirate1 < 283)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 61)
			$pgate2 = "1";
		else if ($pirate2 < 129)
			$pgate2 = "2";
		else if ($pirate2 < 133)
			$pgate2 = "3";
		else if ($pirate2 < 145)
			$pgate2 = "4";
		else if ($pirate2 < 207)
			$pgate2 = "5";
		else if ($pirate2 < 262)
			$pgate2 = "6";
		else if ($pirate2 < 283)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 61)
			$pgate3 = "1";
		else if ($pirate3 < 129)
			$pgate3 = "2";
		else if ($pirate3 < 133)
			$pgate3 = "3";
		else if ($pirate3 < 145)
			$pgate3 = "4";
		else if ($pirate3 < 207)
			$pgate3 = "5";
		else if ($pirate3 < 262)
			$pgate3 = "6";
		else if ($pirate3 < 283)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 10)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 63)
			$pgate1 = "1";
		else if ($pirate1 < 135)
			$pgate1 = "2";
		else if ($pirate1 < 135)
			$pgate1 = "3";
		else if ($pirate1 < 145)
			$pgate1 = "4";
		else if ($pirate1 < 210)
			$pgate1 = "5";
		else if ($pirate1 < 269)
			$pgate1 = "6";
		else if ($pirate1 < 288)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 63)
			$pgate2 = "1";
		else if ($pirate2 < 135)
			$pgate2 = "2";
		else if ($pirate2 < 135)
			$pgate2 = "3";
		else if ($pirate2 < 145)
			$pgate2 = "4";
		else if ($pirate2 < 210)
			$pgate2 = "5";
		else if ($pirate2 < 269)
			$pgate2 = "6";
		else if ($pirate2 < 288)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 63)
			$pgate3 = "1";
		else if ($pirate3 < 135)
			$pgate3 = "2";
		else if ($pirate3 < 135)
			$pgate3 = "3";
		else if ($pirate3 < 145)
			$pgate3 = "4";
		else if ($pirate3 < 210)
			$pgate3 = "5";
		else if ($pirate3 < 269)
			$pgate3 = "6";
		else if ($pirate3 < 288)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 11)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 63)
			$pgate1 = "1";
		else if ($pirate1 < 138)
			$pgate1 = "2";
		else if ($pirate1 < 138)
			$pgate1 = "3";
		else if ($pirate1 < 145)
			$pgate1 = "4";
		else if ($pirate1 < 213)
			$pgate1 = "5";
		else if ($pirate1 < 274)
			$pgate1 = "6";
		else if ($pirate1 < 291)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 63)
			$pgate2 = "1";
		else if ($pirate2 < 138)
			$pgate2 = "2";
		else if ($pirate2 < 138)
			$pgate2 = "3";
		else if ($pirate2 < 145)
			$pgate2 = "4";
		else if ($pirate2 < 213)
			$pgate2 = "5";
		else if ($pirate2 < 274)
			$pgate2 = "6";
		else if ($pirate2 < 291)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 63)
			$pgate3 = "1";
		else if ($pirate3 < 138)
			$pgate3 = "2";
		else if ($pirate3 < 138)
			$pgate3 = "3";
		else if ($pirate3 < 145)
			$pgate3 = "4";
		else if ($pirate3 < 213)
			$pgate3 = "5";
		else if ($pirate3 < 274)
			$pgate3 = "6";
		else if ($pirate3 < 291)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 12)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 58)
			$pgate1 = "1";
		else if ($pirate1 < 148)
			$pgate1 = "2";
		else if ($pirate1 < 148)
			$pgate1 = "3";
		else if ($pirate1 < 148)
			$pgate1 = "4";
		else if ($pirate1 < 231)
			$pgate1 = "5";
		else if ($pirate1 < 301)
			$pgate1 = "6";
		else if ($pirate1 < 302)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 58)
			$pgate2 = "1";
		else if ($pirate2 < 148)
			$pgate2 = "2";
		else if ($pirate2 < 148)
			$pgate2 = "3";
		else if ($pirate2 < 148)
			$pgate2 = "4";
		else if ($pirate2 < 231)
			$pgate2 = "5";
		else if ($pirate2 < 301)
			$pgate2 = "6";
		else if ($pirate2 < 302)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 58)
			$pgate3 = "1";
		else if ($pirate3 < 148)
			$pgate3 = "2";
		else if ($pirate3 < 148)
			$pgate3 = "3";
		else if ($pirate3 < 148)
			$pgate3 = "4";
		else if ($pirate3 < 231)
			$pgate3 = "5";
		else if ($pirate3 < 301)
			$pgate3 = "6";
		else if ($pirate3 < 302)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}

	//Start Reward Structure 2
	else if ($_SESSION['counter'] == 13)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 46)
			$pgate1 = "1";
		else if ($pirate1 < 99)
			$pgate1 = "2";
		else if ($pirate1 < 109)
			$pgate1 = "3";
		else if ($pirate1 < 152)
			$pgate1 = "4";
		else if ($pirate1 < 223)
			$pgate1 = "5";
		else if ($pirate1 < 224)
			$pgate1 = "6";
		else if ($pirate1 < 290)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 46)
			$pgate2 = "1";
		else if ($pirate2 < 99)
			$pgate2 = "2";
		else if ($pirate2 < 109)
			$pgate2 = "3";
		else if ($pirate2 < 152)
			$pgate2 = "4";
		else if ($pirate2 < 223)
			$pgate2 = "5";
		else if ($pirate2 < 224)
			$pgate2 = "6";
		else if ($pirate2 < 290)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 46)
			$pgate3 = "1";
		else if ($pirate3 < 99)
			$pgate3 = "2";
		else if ($pirate3 < 109)
			$pgate3 = "3";
		else if ($pirate3 < 152)
			$pgate3 = "4";
		else if ($pirate3 < 223)
			$pgate3 = "5";
		else if ($pirate3 < 224)
			$pgate3 = "6";
		else if ($pirate3 < 290)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 14)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 46)
			$pgate1 = "1";
		else if ($pirate1 < 100)
			$pgate1 = "2";
		else if ($pirate1 < 106)
			$pgate1 = "3";
		else if ($pirate1 < 150)
			$pgate1 = "4";
		else if ($pirate1 < 224)
			$pgate1 = "5";
		else if ($pirate1 < 224)
			$pgate1 = "6";
		else if ($pirate1 < 294)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 46)
			$pgate2 = "1";
		else if ($pirate2 < 100)
			$pgate2 = "2";
		else if ($pirate1 < 106)
			$pgate1 = "3";
		else if ($pirate1 < 150)
			$pgate1 = "4";
		else if ($pirate1 < 224)
			$pgate1 = "5";
		else if ($pirate2 < 224)
			$pgate2 = "6";
		else if ($pirate2 < 294)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 46)
			$pgate3 = "1";
		else if ($pirate3 < 100)
			$pgate3 = "2";
		else if ($pirate1 < 106)
			$pgate1 = "3";
		else if ($pirate1 < 150)
			$pgate1 = "4";
		else if ($pirate1 < 224)
			$pgate1 = "5";
		else if ($pirate3 < 224)
			$pgate3 = "6";
		else if ($pirate3 < 294)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 15)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 47)
			$pgate1 = "1";
		else if ($pirate1 < 103)
			$pgate1 = "2";
		else if ($pirate1 < 104)
			$pgate1 = "3";
		else if ($pirate1 < 150)
			$pgate1 = "4";
		else if ($pirate1 < 226)
			$pgate1 = "5";
		else if ($pirate1 < 226)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 47)
			$pgate2 = "1";
		else if ($pirate2 < 103)
			$pgate2 = "2";
		else if ($pirate2 < 104)
			$pgate2 = "3";
		else if ($pirate2 < 150)
			$pgate2 = "4";
		else if ($pirate2 < 226)
			$pgate2 = "5";
		else if ($pirate2 < 226)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 47)
			$pgate3 = "1";
		else if ($pirate3 < 103)
			$pgate3 = "2";
		else if ($pirate3 < 104)
			$pgate3 = "3";
		else if ($pirate3 < 150)
			$pgate3 = "4";
		else if ($pirate3 < 226)
			$pgate3 = "5";
		else if ($pirate3 < 226)
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

		if ($pirate1 < 47)
			$pgate1 = "1";
		else if ($pirate1 < 102)
			$pgate1 = "2";
		else if ($pirate1 < 102)
			$pgate1 = "3";
		else if ($pirate1 < 147)
			$pgate1 = "4";
		else if ($pirate1 < 222)
			$pgate1 = "5";
		else if ($pirate1 < 222)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 47)
			$pgate2 = "1";
		else if ($pirate2 < 102)
			$pgate2 = "2";
		else if ($pirate2 < 102)
			$pgate2 = "3";
		else if ($pirate2 < 147)
			$pgate2 = "4";
		else if ($pirate2 < 222)
			$pgate2 = "5";
		else if ($pirate2 < 222)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 47)
			$pgate3 = "1";
		else if ($pirate3 < 102)
			$pgate3 = "2";
		else if ($pirate3 < 102)
			$pgate3 = "3";
		else if ($pirate3 < 147)
			$pgate3 = "4";
		else if ($pirate3 < 222)
			$pgate3 = "5";
		else if ($pirate3 < 222)
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

		if ($pirate1 < 46)
			$pgate1 = "1";
		else if ($pirate1 < 98)
			$pgate1 = "2";
		else if ($pirate1 < 98)
			$pgate1 = "3";
		else if ($pirate1 < 140)
			$pgate1 = "4";
		else if ($pirate1 < 213)
			$pgate1 = "5";
		else if ($pirate1 < 213)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 46)
			$pgate2 = "1";
		else if ($pirate2 < 98)
			$pgate2 = "2";
		else if ($pirate2 < 98)
			$pgate2 = "3";
		else if ($pirate2 < 140)
			$pgate2 = "4";
		else if ($pirate2 < 213)
			$pgate2 = "5";
		else if ($pirate2 < 213)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 46)
			$pgate3 = "1";
		else if ($pirate3 < 98)
			$pgate3 = "2";
		else if ($pirate3 < 98)
			$pgate3 = "3";
		else if ($pirate3 < 140)
			$pgate3 = "4";
		else if ($pirate3 < 213)
			$pgate3 = "5";
		else if ($pirate3 < 213)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 18)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 64)
			$pgate1 = "1";
		else if ($pirate1 < 110)
			$pgate1 = "2";
		else if ($pirate1 < 142)
			$pgate1 = "3";
		else if ($pirate1 < 170)
			$pgate1 = "4";
		else if ($pirate1 < 236)
			$pgate1 = "5";
		else if ($pirate1 < 266)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 64)
			$pgate2 = "1";
		else if ($pirate2 < 110)
			$pgate2 = "2";
		else if ($pirate2 < 142)
			$pgate2 = "3";
		else if ($pirate2 < 170)
			$pgate2 = "4";
		else if ($pirate2 < 236)
			$pgate2 = "5";
		else if ($pirate2 < 266)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 64)
			$pgate3 = "1";
		else if ($pirate3 < 110)
			$pgate3 = "2";
		else if ($pirate3 < 142)
			$pgate3 = "3";
		else if ($pirate3 < 170)
			$pgate3 = "4";
		else if ($pirate3 < 236)
			$pgate3 = "5";
		else if ($pirate3 < 266)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 19)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 63)
			$pgate1 = "1";
		else if ($pirate1 < 112)
			$pgate1 = "2";
		else if ($pirate1 < 139)
			$pgate1 = "3";
		else if ($pirate1 < 169)
			$pgate1 = "4";
		else if ($pirate1 < 235)
			$pgate1 = "5";
		else if ($pirate1 < 259)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 63)
			$pgate2 = "1";
		else if ($pirate2 < 112)
			$pgate2 = "2";
		else if ($pirate2 < 139)
			$pgate2 = "3";
		else if ($pirate2 < 169)
			$pgate2 = "4";
		else if ($pirate2 < 235)
			$pgate2 = "5";
		else if ($pirate2 < 259)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 63)
			$pgate3 = "1";
		else if ($pirate3 < 112)
			$pgate3 = "2";
		else if ($pirate3 < 139)
			$pgate3 = "3";
		else if ($pirate3 < 169)
			$pgate3 = "4";
		else if ($pirate3 < 235)
			$pgate3 = "5";
		else if ($pirate3 < 259)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 20)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 63)
			$pgate1 = "1";
		else if ($pirate1 < 115)
			$pgate1 = "2";
		else if ($pirate1 < 138)
			$pgate1 = "3";
		else if ($pirate1 < 169)
			$pgate1 = "4";
		else if ($pirate1 < 237)
			$pgate1 = "5";
		else if ($pirate1 < 256)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 63)
			$pgate2 = "1";
		else if ($pirate2 < 115)
			$pgate2 = "2";
		else if ($pirate2 < 138)
			$pgate2 = "3";
		else if ($pirate2 < 169)
			$pgate2 = "4";
		else if ($pirate2 < 237)
			$pgate2 = "5";
		else if ($pirate2 < 256)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate1 < 63)
			$pgate3 = "1";
		else if ($pirate3 < 115)
			$pgate3 = "2";
		else if ($pirate3 < 138)
			$pgate3 = "3";
		else if ($pirate3 < 169)
			$pgate3 = "4";
		else if ($pirate3 < 237)
			$pgate3 = "5";
		else if ($pirate3 < 256)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate1 = "8";
	}
	else if ($_SESSION['counter'] == 21)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 65)
			$pgate1 = "1";
		else if ($pirate1 < 127)
			$pgate1 = "2";
		else if ($pirate1 < 139)
			$pgate1 = "3";
		else if ($pirate1 < 172)
			$pgate1 = "4";
		else if ($pirate1 < 248)
			$pgate1 = "5";
		else if ($pirate1 < 252)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 65)
			$pgate2 = "1";
		else if ($pirate2 < 127)
			$pgate2 = "2";
		else if ($pirate2 < 139)
			$pgate2 = "3";
		else if ($pirate2 < 172)
			$pgate2 = "4";
		else if ($pirate2 < 248)
			$pgate2 = "5";
		else if ($pirate2 < 252)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 65)
			$pgate3 = "1";
		else if ($pirate3 < 127)
			$pgate3 = "2";
		else if ($pirate3 < 139)
			$pgate3 = "3";
		else if ($pirate3 < 172)
			$pgate3 = "4";
		else if ($pirate3 < 248)
			$pgate3 = "5";
		else if ($pirate3 < 252)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 22)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 66)
			$pgate1 = "1";
		else if ($pirate1 < 130)
			$pgate1 = "2";
		else if ($pirate1 < 140)
			$pgate1 = "3";
		else if ($pirate1 < 173)
			$pgate1 = "4";
		else if ($pirate1 < 252)
			$pgate1 = "5";
		else if ($pirate1 < 252)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 66)
			$pgate2 = "1";
		else if ($pirate2 < 130)
			$pgate2 = "2";
		else if ($pirate2 < 140)
			$pgate2 = "3";
		else if ($pirate2 < 173)
			$pgate2 = "4";
		else if ($pirate2 < 252)
			$pgate2 = "5";
		else if ($pirate2 < 252)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 66)
			$pgate3 = "1";
		else if ($pirate3 < 130)
			$pgate3 = "2";
		else if ($pirate3 < 140)
			$pgate3 = "3";
		else if ($pirate3 < 173)
			$pgate3 = "4";
		else if ($pirate3 < 252)
			$pgate3 = "5";
		else if ($pirate3 < 252)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 23)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);

		if ($pirate1 < 68)
			$pgate1 = "1";
		else if ($pirate1 < 138)
			$pgate1 = "2";
		else if ($pirate1 < 138)
			$pgate1 = "3";
		else if ($pirate1 < 171)
			$pgate1 = "4";
		else if ($pirate1 < 258)
			$pgate1 = "5";
		else if ($pirate1 < 258)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 68)
			$pgate2 = "1";
		else if ($pirate2 < 138)
			$pgate2 = "2";
		else if ($pirate2 < 138)
			$pgate2 = "3";
		else if ($pirate2 < 171)
			$pgate2 = "4";
		else if ($pirate2 < 258)
			$pgate2 = "5";
		else if ($pirate2 < 258)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 68)
			$pgate3 = "1";
		else if ($pirate3 < 138)
			$pgate3 = "2";
		else if ($pirate3 < 138)
			$pgate3 = "3";
		else if ($pirate3 < 171)
			$pgate3 = "4";
		else if ($pirate3 < 258)
			$pgate3 = "5";
		else if ($pirate3 < 258)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 24)
		{
			$pirate1 = rand(0, 300);
			$pirate2 = rand(0, 300);
			$pirate3 = rand(0, 300);

			if ($pirate1 < 67)
				$pgate1 = "1";
			else if ($pirate1 < 142)
				$pgate1 = "2";
			else if ($pirate1 < 142)
				$pgate1 = "3";
			else if ($pirate1 < 171)
				$pgate1 = "4";
			else if ($pirate1 < 271)
				$pgate1 = "5";
			else if ($pirate1 < 271)
				$pgate1 = "6";
			else if ($pirate1 < 301)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 67)
				$pgate2 = "1";
			else if ($pirate2 < 142)
				$pgate2 = "2";
			else if ($pirate2 < 142)
				$pgate2 = "3";
			else if ($pirate2 < 171)
				$pgate2 = "4";
			else if ($pirate2 < 271)
				$pgate2 = "5";
			else if ($pirate2 < 271)
				$pgate2 = "6";
			else if ($pirate2 < 301)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 67)
				$pgate3 = "1";
			else if ($pirate3 < 142)
				$pgate3 = "2";
			else if ($pirate3 < 142)
				$pgate3 = "3";
			else if ($pirate3 < 171)
				$pgate3 = "4";
			else if ($pirate3 < 271)
				$pgate3 = "5";
			else if ($pirate3 < 271)
				$pgate3 = "6";
			else if ($pirate3 < 301)
				$pgate3 = "7";
			else
				$pgate3 = "8";
	}

	else if ($_SESSION['counter'] == 25)
		{
			$pirate1 = rand(0, 300);
			$pirate2 = rand(0, 300);
			$pirate3 = rand(0, 300);

			if ($pirate1 < 75)
				$pgate1 = "1";
			else if ($pirate1 < 173)
				$pgate1 = "2";
			else if ($pirate1 < 173)
				$pgate1 = "3";
			else if ($pirate1 < 198)
				$pgate1 = "4";
			else if ($pirate1 < 298)
				$pgate1 = "5";
			else if ($pirate1 < 298)
				$pgate1 = "6";
			else if ($pirate1 < 301)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 75)
				$pgate2 = "1";
			else if ($pirate2 < 173)
				$pgate2 = "2";
			else if ($pirate2 < 173)
				$pgate2 = "3";
			else if ($pirate2 < 198)
				$pgate2 = "4";
			else if ($pirate2 < 298)
				$pgate2 = "5";
			else if ($pirate2 < 298)
				$pgate2 = "6";
			else if ($pirate2 < 301)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 75)
				$pgate3 = "1";
			else if ($pirate3 < 173)
				$pgate3 = "2";
			else if ($pirate3 < 173)
				$pgate3 = "3";
			else if ($pirate3 < 198)
				$pgate3 = "4";
			else if ($pirate3 < 298)
				$pgate3 = "5";
			else if ($pirate3 < 298)
				$pgate3 = "6";
			else if ($pirate3 < 301)
				$pgate3 = "7";
			else
				$pgate3 = "8";
	}


	} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

	if(!isset($_SESSION['gameid']))
	{
		$_SESSION['gameid'] = rand(1, 26);
		
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
				
				<!-- ------------------------------------------------------------------------- -->
				<!-- START: PUT YOUR CONTENT HERE -->
				<!-- Please don't write anything above this line... -->
				<!-- ------------------------------------------------------------------------- -->

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
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 10;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 8;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 7;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 6;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 7;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 8;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 2;
						}

						else if (($_SESSION['combo'][$j - 2] == 14) || ($_SESSION['combo'][$j - 2] == 15) || ($_SESSION['combo'][$j - 2] == 16) || ($_SESSION['combo'][$j - 2] == 17)
						|| ($_SESSION['combo'][$j - 2] == 18) || ($_SESSION['combo'][$j - 2] == 19) || ($_SESSION['combo'][$j - 2] == 20) || ($_SESSION['combo'][$j - 2] == 21)
						|| ($_SESSION['combo'][$j - 2] == 22) || ($_SESSION['combo'][$j - 2] == 23) || ($_SESSION['combo'][$j - 2] == 24) || ($_SESSION['combo'][$j - 2] == 25)
						|| ($_SESSION['combo'][$j - 2] == 26))
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
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -7;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -4;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -6;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -8;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -4;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = -2;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = -9;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = -3;
						}

						else if (($_SESSION['combo'][$j - 2] == 14) || ($_SESSION['combo'][$j - 2] == 15) || ($_SESSION['combo'][$j - 2] == 16) || ($_SESSION['combo'][$j - 2] == 17)
						|| ($_SESSION['combo'][$j - 2] == 18) || ($_SESSION['combo'][$j - 2] == 19) || ($_SESSION['combo'][$j - 2] == 20) || ($_SESSION['combo'][$j - 2] == 21)
						|| ($_SESSION['combo'][$j - 2] == 22) || ($_SESSION['combo'][$j - 2] == 23) || ($_SESSION['combo'][$j - 2] == 24) || ($_SESSION['combo'][$j - 2] == 25)
						|| ($_SESSION['combo'][$j - 2] == 26))
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
			|| ($_SESSION['counter'] == 8) || ($_SESSION['counter'] == 9) || ($_SESSION['counter'] == 10) || ($_SESSION['counter'] == 11)
			|| ($_SESSION['counter'] == 12)) { ?>
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

<?php if (($_SESSION['counter'] == 13) || ($_SESSION['counter'] == 14) || ($_SESSION['counter'] == 15) || ($_SESSION['counter'] == 16)
			|| ($_SESSION['counter'] == 17) || ($_SESSION['counter'] == 18) || ($_SESSION['counter'] == 19) || ($_SESSION['counter'] == 20)
			|| ($_SESSION['counter'] == 21) || ($_SESSION['counter'] == 22) || ($_SESSION['counter'] == 23) || ($_SESSION['counter'] == 24)
			|| ($_SESSION['counter'] == 25)) { ?>
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

		if ($pirate1 < 58)
			$pgate1 = "1";
		else if ($pirate1 < 123)
			$pgate1 = "2";
		else if ($pirate1 < 140)
			$pgate1 = "3";
		else if ($pirate1 < 159)
			$pgate1 = "4";
		else if ($pirate1 < 213)
			$pgate1 = "5";
		else if ($pirate1 < 255)
			$pgate1 = "6";
		else if ($pirate1 < 286)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 58)
			$pgate2 = "1";
		else if ($pirate2 < 123)
			$pgate2 = "2";
		else if ($pirate2 < 140)
			$pgate2 = "3";
		else if ($pirate2 < 159)
			$pgate2 = "4";
		else if ($pirate2 < 213)
			$pgate2 = "5";
		else if ($pirate2 < 255)
			$pgate2 = "6";
		else if ($pirate2 < 286)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 58)
			$pgate3 = "1";
		else if ($pirate3 < 123)
			$pgate3 = "2";
		else if ($pirate3 < 140)
			$pgate3 = "3";
		else if ($pirate3 < 159)
			$pgate3 = "4";
		else if ($pirate3 < 213)
			$pgate3 = "5";
		else if ($pirate3 < 255)
			$pgate3 = "6";
		else if ($pirate3 < 286)
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

		if ($pirate1 < 62)
			$pgate1 = "1";
		else if ($pirate1 < 127)
			$pgate1 = "2";
		else if ($pirate1 < 143)
			$pgate1 = "3";
		else if ($pirate1 < 160)
			$pgate1 = "4";
		else if ($pirate1 < 218)
			$pgate1 = "5";
		else if ($pirate1 < 259)
			$pgate1 = "6";
		else if ($pirate1 < 288)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 62)
			$pgate2 = "1";
		else if ($pirate2 < 127)
			$pgate2 = "2";
		else if ($pirate2 < 143)
			$pgate2 = "3";
		else if ($pirate2 < 160)
			$pgate2 = "4";
		else if ($pirate2 < 218)
			$pgate2 = "5";
		else if ($pirate2 < 259)
			$pgate2 = "6";
		else if ($pirate2 < 288)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 62)
			$pgate3 = "1";
		else if ($pirate3 < 127)
			$pgate3 = "2";
		else if ($pirate3 < 143)
			$pgate3 = "3";
		else if ($pirate3 < 160)
			$pgate3 = "4";
		else if ($pirate3 < 218)
			$pgate3 = "5";
		else if ($pirate3 < 259)
			$pgate3 = "6";
		else if ($pirate3 < 288)
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

		if ($pirate1 < 67)
			$pgate1 = "1";
		else if ($pirate1 < 132)
			$pgate1 = "2";
		else if ($pirate1 < 144)
			$pgate1 = "3";
		else if ($pirate1 < 162)
			$pgate1 = "4";
		else if ($pirate1 < 220)
			$pgate1 = "5";
		else if ($pirate1 < 262)
			$pgate1 = "6";
		else if ($pirate1 < 292)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 67)
			$pgate2 = "1";
		else if ($pirate2 < 132)
			$pgate2 = "2";
		else if ($pirate2 < 144)
			$pgate2 = "3";
		else if ($pirate2 < 162)
			$pgate2 = "4";
		else if ($pirate2 < 220)
			$pgate2 = "5";
		else if ($pirate2 < 262)
			$pgate2 = "6";
		else if ($pirate2 < 292)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 67)
			$pgate3 = "1";
		else if ($pirate3 < 132)
			$pgate3 = "2";
		else if ($pirate3 < 144)
			$pgate3 = "3";
		else if ($pirate3 < 162)
			$pgate3 = "4";
		else if ($pirate3 < 220)
			$pgate3 = "5";
		else if ($pirate3 < 262)
			$pgate3 = "6";
		else if ($pirate3 < 292)
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

		if ($pirate1 < 73)
			$pgate1 = "1";
		else if ($pirate1 < 139)
			$pgate1 = "2";
		else if ($pirate1 < 145)
			$pgate1 = "3";
		else if ($pirate1 < 164)
			$pgate1 = "4";
		else if ($pirate1 < 223)
			$pgate1 = "5";
		else if ($pirate1 < 266)
			$pgate1 = "6";
		else if ($pirate1 < 298)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 73)
			$pgate2 = "1";
		else if ($pirate2 < 139)
			$pgate2 = "2";
		else if ($pirate2 < 145)
			$pgate2 = "3";
		else if ($pirate2 < 164)
			$pgate2 = "4";
		else if ($pirate2 < 223)
			$pgate2 = "5";
		else if ($pirate2 < 266)
			$pgate2 = "6";
		else if ($pirate2 < 298)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 73)
			$pgate3 = "1";
		else if ($pirate3 < 139)
			$pgate3 = "2";
		else if ($pirate3 < 145)
			$pgate3 = "3";
		else if ($pirate3 < 164)
			$pgate3 = "4";
		else if ($pirate3 < 223)
			$pgate3 = "5";
		else if ($pirate3 < 266)
			$pgate3 = "6";
		else if ($pirate3 < 298)
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

		if ($pirate1 < 82)
			$pgate1 = "1";
		else if ($pirate1 < 148)
			$pgate1 = "2";
		else if ($pirate1 < 148)
			$pgate1 = "3";
		else if ($pirate1 < 167)
			$pgate1 = "4";
		else if ($pirate1 < 226)
			$pgate1 = "5";
		else if ($pirate1 < 269)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 82)
			$pgate2 = "1";
		else if ($pirate2 < 148)
			$pgate2 = "2";
		else if ($pirate2 < 148)
			$pgate2 = "3";
		else if ($pirate2 < 167)
			$pgate2 = "4";
		else if ($pirate2 < 226)
			$pgate2 = "5";
		else if ($pirate2 < 269)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 82)
			$pgate3 = "1";
		else if ($pirate3 < 148)
			$pgate3 = "2";
		else if ($pirate3 < 148)
			$pgate3 = "3";
		else if ($pirate3 < 167)
			$pgate3 = "4";
		else if ($pirate3 < 226)
			$pgate3 = "5";
		else if ($pirate3 < 269)
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

		if ($pirate1 < 56)
			$pgate1 = "1";
		else if ($pirate1 < 121)
			$pgate1 = "2";
		else if ($pirate1 < 131)
			$pgate1 = "3";
		else if ($pirate1 < 140)
			$pgate1 = "4";
		else if ($pirate1 < 203)
			$pgate1 = "5";
		else if ($pirate1 < 252)
			$pgate1 = "6";
		else if ($pirate1 < 270)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 56)
			$pgate2 = "1";
		else if ($pirate2 < 121)
			$pgate2 = "2";
		else if ($pirate2 < 131)
			$pgate2 = "3";
		else if ($pirate2 < 140)
			$pgate2 = "4";
		else if ($pirate2 < 203)
			$pgate2 = "5";
		else if ($pirate2 < 252)
			$pgate2 = "6";
		else if ($pirate2 < 270)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 56)
			$pgate3 = "1";
		else if ($pirate3 < 121)
			$pgate3 = "2";
		else if ($pirate3 < 131)
			$pgate3 = "3";
		else if ($pirate3 < 140)
			$pgate3 = "4";
		else if ($pirate3 < 203)
			$pgate3 = "5";
		else if ($pirate3 < 252)
			$pgate3 = "6";
		else if ($pirate3 < 270)
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

		if ($pirate1 < 57)
			$pgate1 = "1";
		else if ($pirate1 < 122)
			$pgate1 = "2";
		else if ($pirate1 < 132)
			$pgate1 = "3";
		else if ($pirate1 < 143)
			$pgate1 = "4";
		else if ($pirate1 < 204)
			$pgate1 = "5";
		else if ($pirate1 < 254)
			$pgate1 = "6";
		else if ($pirate1 < 274)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 57)
			$pgate2 = "1";
		else if ($pirate2 < 122)
			$pgate2 = "2";
		else if ($pirate2 < 132)
			$pgate2 = "3";
		else if ($pirate2 < 143)
			$pgate2 = "4";
		else if ($pirate2 < 204)
			$pgate2 = "5";
		else if ($pirate2 < 254)
			$pgate2 = "6";
		else if ($pirate2 < 274)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 57)
			$pgate3 = "1";
		else if ($pirate3 < 122)
			$pgate3 = "2";
		else if ($pirate3 < 132)
			$pgate3 = "3";
		else if ($pirate3 < 143)
			$pgate3 = "4";
		else if ($pirate3 < 204)
			$pgate3 = "5";
		else if ($pirate3 < 254)
			$pgate3 = "6";
		else if ($pirate3 < 274)
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

		if ($pirate1 < 59)
			$pgate1 = "1";
		else if ($pirate1 < 124)
			$pgate1 = "2";
		else if ($pirate1 < 133)
			$pgate1 = "3";
		else if ($pirate1 < 145)
			$pgate1 = "4";
		else if ($pirate1 < 205)
			$pgate1 = "5";
		else if ($pirate1 < 256)
			$pgate1 = "6";
		else if ($pirate1 < 277)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 59)
			$pgate2 = "1";
		else if ($pirate2 < 124)
			$pgate2 = "2";
		else if ($pirate2 < 133)
			$pgate2 = "3";
		else if ($pirate2 < 145)
			$pgate2 = "4";
		else if ($pirate2 < 205)
			$pgate2 = "5";
		else if ($pirate2 < 256)
			$pgate2 = "6";
		else if ($pirate2 < 277)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 59)
			$pgate3 = "1";
		else if ($pirate3 < 124)
			$pgate3 = "2";
		else if ($pirate3 < 133)
			$pgate3 = "3";
		else if ($pirate3 < 145)
			$pgate3 = "4";
		else if ($pirate3 < 205)
			$pgate3 = "5";
		else if ($pirate3 < 256)
			$pgate3 = "6";
		else if ($pirate3 < 277)
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

		if ($pirate1 < 60)
			$pgate1 = "1";
		else if ($pirate1 < 126)
			$pgate1 = "2";
		else if ($pirate1 < 133)
			$pgate1 = "3";
		else if ($pirate1 < 146)
			$pgate1 = "4";
		else if ($pirate1 < 207)
			$pgate1 = "5";
		else if ($pirate1 < 259)
			$pgate1 = "6";
		else if( $pirate1 < 280)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 60)
			$pgate2 = "1";
		else if ($pirate2 < 126)
			$pgate2 = "2";
		else if ($pirate2 < 133)
			$pgate2 = "3";
		else if ($pirate2 < 146)
			$pgate2 = "4";
		else if ($pirate2 < 207)
			$pgate2 = "5";
		else if ($pirate2 < 259)
			$pgate2 = "6";
		else if ($pirate2 < 280)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 60)
			$pgate3 = "1";
		else if ($pirate3 < 126)
			$pgate3 = "2";
		else if ($pirate3 < 133)
			$pgate3 = "3";
		else if ($pirate3 < 146)
			$pgate3 = "4";
		else if ($pirate3 < 207)
			$pgate3 = "5";
		else if ($pirate3 < 259)
			$pgate3 = "6";
		else if ($pirate3 < 280)
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

		if ($pirate1 < 61)
			$pgate1 = "1";
		else if ($pirate1 < 129)
			$pgate1 = "2";
		else if ($pirate1 < 133)
			$pgate1 = "3";
		else if ($pirate1 < 145)
			$pgate1 = "4";
		else if ($pirate1 < 207)
			$pgate1 = "5";
		else if ($pirate1 < 262)
			$pgate1 = "6";
		else if ($pirate1 < 283)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 61)
			$pgate2 = "1";
		else if ($pirate2 < 129)
			$pgate2 = "2";
		else if ($pirate2 < 133)
			$pgate2 = "3";
		else if ($pirate2 < 145)
			$pgate2 = "4";
		else if ($pirate2 < 207)
			$pgate2 = "5";
		else if ($pirate2 < 262)
			$pgate2 = "6";
		else if ($pirate2 < 283)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 61)
			$pgate3 = "1";
		else if ($pirate3 < 129)
			$pgate3 = "2";
		else if ($pirate3 < 133)
			$pgate3 = "3";
		else if ($pirate3 < 145)
			$pgate3 = "4";
		else if ($pirate3 < 207)
			$pgate3 = "5";
		else if ($pirate3 < 262)
			$pgate3 = "6";
		else if ($pirate3 < 283)
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

		if ($pirate1 < 63)
			$pgate1 = "1";
		else if ($pirate1 < 135)
			$pgate1 = "2";
		else if ($pirate1 < 135)
			$pgate1 = "3";
		else if ($pirate1 < 145)
			$pgate1 = "4";
		else if ($pirate1 < 210)
			$pgate1 = "5";
		else if ($pirate1 < 269)
			$pgate1 = "6";
		else if ($pirate1 < 288)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 63)
			$pgate2 = "1";
		else if ($pirate2 < 135)
			$pgate2 = "2";
		else if ($pirate2 < 135)
			$pgate2 = "3";
		else if ($pirate2 < 145)
			$pgate2 = "4";
		else if ($pirate2 < 210)
			$pgate2 = "5";
		else if ($pirate2 < 269)
			$pgate2 = "6";
		else if ($pirate2 < 288)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 63)
			$pgate3 = "1";
		else if ($pirate3 < 135)
			$pgate3 = "2";
		else if ($pirate3 < 135)
			$pgate3 = "3";
		else if ($pirate3 < 145)
			$pgate3 = "4";
		else if ($pirate3 < 210)
			$pgate3 = "5";
		else if ($pirate3 < 269)
			$pgate3 = "6";
		else if ($pirate3 < 288)
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

		if ($pirate1 < 63)
			$pgate1 = "1";
		else if ($pirate1 < 138)
			$pgate1 = "2";
		else if ($pirate1 < 138)
			$pgate1 = "3";
		else if ($pirate1 < 145)
			$pgate1 = "4";
		else if ($pirate1 < 213)
			$pgate1 = "5";
		else if ($pirate1 < 274)
			$pgate1 = "6";
		else if ($pirate1 < 291)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 63)
			$pgate2 = "1";
		else if ($pirate2 < 138)
			$pgate2 = "2";
		else if ($pirate2 < 138)
			$pgate2 = "3";
		else if ($pirate2 < 145)
			$pgate2 = "4";
		else if ($pirate2 < 213)
			$pgate2 = "5";
		else if ($pirate2 < 274)
			$pgate2 = "6";
		else if ($pirate2 < 291)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 63)
			$pgate3 = "1";
		else if ($pirate3 < 138)
			$pgate3 = "2";
		else if ($pirate3 < 138)
			$pgate3 = "3";
		else if ($pirate3 < 145)
			$pgate3 = "4";
		else if ($pirate3 < 213)
			$pgate3 = "5";
		else if ($pirate3 < 274)
			$pgate3 = "6";
		else if ($pirate3 < 291)
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

		if ($pirate1 < 58)
			$pgate1 = "1";
		else if ($pirate1 < 148)
			$pgate1 = "2";
		else if ($pirate1 < 148)
			$pgate1 = "3";
		else if ($pirate1 < 148)
			$pgate1 = "4";
		else if ($pirate1 < 231)
			$pgate1 = "5";
		else if ($pirate1 < 301)
			$pgate1 = "6";
		else if ($pirate1 < 302)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 58)
			$pgate2 = "1";
		else if ($pirate2 < 148)
			$pgate2 = "2";
		else if ($pirate2 < 148)
			$pgate2 = "3";
		else if ($pirate2 < 148)
			$pgate2 = "4";
		else if ($pirate2 < 231)
			$pgate2 = "5";
		else if ($pirate2 < 301)
			$pgate2 = "6";
		else if ($pirate2 < 302)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 58)
			$pgate3 = "1";
		else if ($pirate3 < 148)
			$pgate3 = "2";
		else if ($pirate3 < 148)
			$pgate3 = "3";
		else if ($pirate3 < 148)
			$pgate3 = "4";
		else if ($pirate3 < 231)
			$pgate3 = "5";
		else if ($pirate3 < 301)
			$pgate3 = "6";
		else if ($pirate3 < 302)
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

		if ($pirate1 < 46)
			$pgate1 = "1";
		else if ($pirate1 < 99)
			$pgate1 = "2";
		else if ($pirate1 < 109)
			$pgate1 = "3";
		else if ($pirate1 < 152)
			$pgate1 = "4";
		else if ($pirate1 < 223)
			$pgate1 = "5";
		else if ($pirate1 < 224)
			$pgate1 = "6";
		else if ($pirate1 < 290)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 46)
			$pgate2 = "1";
		else if ($pirate2 < 99)
			$pgate2 = "2";
		else if ($pirate2 < 109)
			$pgate2 = "3";
		else if ($pirate2 < 152)
			$pgate2 = "4";
		else if ($pirate2 < 223)
			$pgate2 = "5";
		else if ($pirate2 < 224)
			$pgate2 = "6";
		else if ($pirate2 < 290)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 46)
			$pgate3 = "1";
		else if ($pirate3 < 99)
			$pgate3 = "2";
		else if ($pirate3 < 109)
			$pgate3 = "3";
		else if ($pirate3 < 152)
			$pgate3 = "4";
		else if ($pirate3 < 223)
			$pgate3 = "5";
		else if ($pirate3 < 224)
			$pgate3 = "6";
		else if ($pirate3 < 290)
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

		if ($pirate1 < 46)
			$pgate1 = "1";
		else if ($pirate1 < 100)
			$pgate1 = "2";
		else if ($pirate1 < 106)
			$pgate1 = "3";
		else if ($pirate1 < 150)
			$pgate1 = "4";
		else if ($pirate1 < 224)
			$pgate1 = "5";
		else if ($pirate1 < 224)
			$pgate1 = "6";
		else if ($pirate1 < 294)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 46)
			$pgate2 = "1";
		else if ($pirate2 < 100)
			$pgate2 = "2";
		else if ($pirate1 < 106)
			$pgate1 = "3";
		else if ($pirate1 < 150)
			$pgate1 = "4";
		else if ($pirate1 < 224)
			$pgate1 = "5";
		else if ($pirate2 < 224)
			$pgate2 = "6";
		else if ($pirate2 < 294)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 46)
			$pgate3 = "1";
		else if ($pirate3 < 100)
			$pgate3 = "2";
		else if ($pirate1 < 106)
			$pgate1 = "3";
		else if ($pirate1 < 150)
			$pgate1 = "4";
		else if ($pirate1 < 224)
			$pgate1 = "5";
		else if ($pirate3 < 224)
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

		if ($pirate1 < 47)
			$pgate1 = "1";
		else if ($pirate1 < 103)
			$pgate1 = "2";
		else if ($pirate1 < 104)
			$pgate1 = "3";
		else if ($pirate1 < 150)
			$pgate1 = "4";
		else if ($pirate1 < 226)
			$pgate1 = "5";
		else if ($pirate1 < 226)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 47)
			$pgate2 = "1";
		else if ($pirate2 < 103)
			$pgate2 = "2";
		else if ($pirate2 < 104)
			$pgate2 = "3";
		else if ($pirate2 < 150)
			$pgate2 = "4";
		else if ($pirate2 < 226)
			$pgate2 = "5";
		else if ($pirate2 < 226)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 47)
			$pgate3 = "1";
		else if ($pirate3 < 103)
			$pgate3 = "2";
		else if ($pirate3 < 104)
			$pgate3 = "3";
		else if ($pirate3 < 150)
			$pgate3 = "4";
		else if ($pirate3 < 226)
			$pgate3 = "5";
		else if ($pirate3 < 226)
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

		if ($pirate1 < 47)
			$pgate1 = "1";
		else if ($pirate1 < 102)
			$pgate1 = "2";
		else if ($pirate1 < 102)
			$pgate1 = "3";
		else if ($pirate1 < 147)
			$pgate1 = "4";
		else if ($pirate1 < 222)
			$pgate1 = "5";
		else if ($pirate1 < 222)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 47)
			$pgate2 = "1";
		else if ($pirate2 < 102)
			$pgate2 = "2";
		else if ($pirate2 < 102)
			$pgate2 = "3";
		else if ($pirate2 < 147)
			$pgate2 = "4";
		else if ($pirate2 < 222)
			$pgate2 = "5";
		else if ($pirate2 < 222)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 47)
			$pgate3 = "1";
		else if ($pirate3 < 102)
			$pgate3 = "2";
		else if ($pirate3 < 102)
			$pgate3 = "3";
		else if ($pirate3 < 147)
			$pgate3 = "4";
		else if ($pirate3 < 222)
			$pgate3 = "5";
		else if ($pirate3 < 222)
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

		if ($pirate1 < 46)
			$pgate1 = "1";
		else if ($pirate1 < 98)
			$pgate1 = "2";
		else if ($pirate1 < 98)
			$pgate1 = "3";
		else if ($pirate1 < 140)
			$pgate1 = "4";
		else if ($pirate1 < 213)
			$pgate1 = "5";
		else if ($pirate1 < 213)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 46)
			$pgate2 = "1";
		else if ($pirate2 < 98)
			$pgate2 = "2";
		else if ($pirate2 < 98)
			$pgate2 = "3";
		else if ($pirate2 < 140)
			$pgate2 = "4";
		else if ($pirate2 < 213)
			$pgate2 = "5";
		else if ($pirate2 < 213)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 46)
			$pgate3 = "1";
		else if ($pirate3 < 98)
			$pgate3 = "2";
		else if ($pirate3 < 98)
			$pgate3 = "3";
		else if ($pirate3 < 140)
			$pgate3 = "4";
		else if ($pirate3 < 213)
			$pgate3 = "5";
		else if ($pirate3 < 213)
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

		if ($pirate1 < 64)
			$pgate1 = "1";
		else if ($pirate1 < 110)
			$pgate1 = "2";
		else if ($pirate1 < 142)
			$pgate1 = "3";
		else if ($pirate1 < 170)
			$pgate1 = "4";
		else if ($pirate1 < 236)
			$pgate1 = "5";
		else if ($pirate1 < 266)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 64)
			$pgate2 = "1";
		else if ($pirate2 < 110)
			$pgate2 = "2";
		else if ($pirate2 < 142)
			$pgate2 = "3";
		else if ($pirate2 < 170)
			$pgate2 = "4";
		else if ($pirate2 < 236)
			$pgate2 = "5";
		else if ($pirate2 < 266)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 64)
			$pgate3 = "1";
		else if ($pirate3 < 110)
			$pgate3 = "2";
		else if ($pirate3 < 142)
			$pgate3 = "3";
		else if ($pirate3 < 170)
			$pgate3 = "4";
		else if ($pirate3 < 236)
			$pgate3 = "5";
		else if ($pirate3 < 266)
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

		if ($pirate1 < 63)
			$pgate1 = "1";
		else if ($pirate1 < 112)
			$pgate1 = "2";
		else if ($pirate1 < 139)
			$pgate1 = "3";
		else if ($pirate1 < 169)
			$pgate1 = "4";
		else if ($pirate1 < 235)
			$pgate1 = "5";
		else if ($pirate1 < 259)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 63)
			$pgate2 = "1";
		else if ($pirate2 < 112)
			$pgate2 = "2";
		else if ($pirate2 < 139)
			$pgate2 = "3";
		else if ($pirate2 < 169)
			$pgate2 = "4";
		else if ($pirate2 < 235)
			$pgate2 = "5";
		else if ($pirate2 < 259)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 63)
			$pgate3 = "1";
		else if ($pirate3 < 112)
			$pgate3 = "2";
		else if ($pirate3 < 139)
			$pgate3 = "3";
		else if ($pirate3 < 169)
			$pgate3 = "4";
		else if ($pirate3 < 235)
			$pgate3 = "5";
		else if ($pirate3 < 259)
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

		if ($pirate1 < 63)
			$pgate1 = "1";
		else if ($pirate1 < 115)
			$pgate1 = "2";
		else if ($pirate1 < 138)
			$pgate1 = "3";
		else if ($pirate1 < 169)
			$pgate1 = "4";
		else if ($pirate1 < 237)
			$pgate1 = "5";
		else if ($pirate1 < 256)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 63)
			$pgate2 = "1";
		else if ($pirate2 < 115)
			$pgate2 = "2";
		else if ($pirate2 < 138)
			$pgate2 = "3";
		else if ($pirate2 < 169)
			$pgate2 = "4";
		else if ($pirate2 < 237)
			$pgate2 = "5";
		else if ($pirate2 < 256)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate1 < 63)
			$pgate3 = "1";
		else if ($pirate3 < 115)
			$pgate3 = "2";
		else if ($pirate3 < 138)
			$pgate3 = "3";
		else if ($pirate3 < 169)
			$pgate3 = "4";
		else if ($pirate3 < 237)
			$pgate3 = "5";
		else if ($pirate3 < 256)
			$pgate3 = "6";
		else if ($pirate3 < 301)
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

		if ($pirate1 < 65)
			$pgate1 = "1";
		else if ($pirate1 < 127)
			$pgate1 = "2";
		else if ($pirate1 < 139)
			$pgate1 = "3";
		else if ($pirate1 < 172)
			$pgate1 = "4";
		else if ($pirate1 < 248)
			$pgate1 = "5";
		else if ($pirate1 < 252)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 65)
			$pgate2 = "1";
		else if ($pirate2 < 127)
			$pgate2 = "2";
		else if ($pirate2 < 139)
			$pgate2 = "3";
		else if ($pirate2 < 172)
			$pgate2 = "4";
		else if ($pirate2 < 248)
			$pgate2 = "5";
		else if ($pirate2 < 252)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 65)
			$pgate3 = "1";
		else if ($pirate3 < 127)
			$pgate3 = "2";
		else if ($pirate3 < 139)
			$pgate3 = "3";
		else if ($pirate3 < 172)
			$pgate3 = "4";
		else if ($pirate3 < 248)
			$pgate3 = "5";
		else if ($pirate3 < 252)
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

		if ($pirate1 < 66)
			$pgate1 = "1";
		else if ($pirate1 < 130)
			$pgate1 = "2";
		else if ($pirate1 < 140)
			$pgate1 = "3";
		else if ($pirate1 < 173)
			$pgate1 = "4";
		else if ($pirate1 < 252)
			$pgate1 = "5";
		else if ($pirate1 < 252)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 66)
			$pgate2 = "1";
		else if ($pirate2 < 130)
			$pgate2 = "2";
		else if ($pirate2 < 140)
			$pgate2 = "3";
		else if ($pirate2 < 173)
			$pgate2 = "4";
		else if ($pirate2 < 252)
			$pgate2 = "5";
		else if ($pirate2 < 252)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 66)
			$pgate3 = "1";
		else if ($pirate3 < 130)
			$pgate3 = "2";
		else if ($pirate3 < 140)
			$pgate3 = "3";
		else if ($pirate3 < 173)
			$pgate3 = "4";
		else if ($pirate3 < 252)
			$pgate3 = "5";
		else if ($pirate3 < 252)
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

		if ($pirate1 < 68)
			$pgate1 = "1";
		else if ($pirate1 < 138)
			$pgate1 = "2";
		else if ($pirate1 < 138)
			$pgate1 = "3";
		else if ($pirate1 < 171)
			$pgate1 = "4";
		else if ($pirate1 < 258)
			$pgate1 = "5";
		else if ($pirate1 < 258)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";

		if ($pirate2 < 68)
			$pgate2 = "1";
		else if ($pirate2 < 138)
			$pgate2 = "2";
		else if ($pirate2 < 138)
			$pgate2 = "3";
		else if ($pirate2 < 171)
			$pgate2 = "4";
		else if ($pirate2 < 258)
			$pgate2 = "5";
		else if ($pirate2 < 258)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";

		if ($pirate3 < 68)
			$pgate3 = "1";
		else if ($pirate3 < 138)
			$pgate3 = "2";
		else if ($pirate3 < 138)
			$pgate3 = "3";
		else if ($pirate3 < 171)
			$pgate3 = "4";
		else if ($pirate3 < 258)
			$pgate3 = "5";
		else if ($pirate3 < 258)
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

			if ($pirate1 < 67)
				$pgate1 = "1";
			else if ($pirate1 < 142)
				$pgate1 = "2";
			else if ($pirate1 < 142)
				$pgate1 = "3";
			else if ($pirate1 < 171)
				$pgate1 = "4";
			else if ($pirate1 < 271)
				$pgate1 = "5";
			else if ($pirate1 < 271)
				$pgate1 = "6";
			else if ($pirate1 < 301)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 67)
				$pgate2 = "1";
			else if ($pirate2 < 142)
				$pgate2 = "2";
			else if ($pirate2 < 142)
				$pgate2 = "3";
			else if ($pirate2 < 171)
				$pgate2 = "4";
			else if ($pirate2 < 271)
				$pgate2 = "5";
			else if ($pirate2 < 271)
				$pgate2 = "6";
			else if ($pirate2 < 301)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 67)
				$pgate3 = "1";
			else if ($pirate3 < 142)
				$pgate3 = "2";
			else if ($pirate3 < 142)
				$pgate3 = "3";
			else if ($pirate3 < 171)
				$pgate3 = "4";
			else if ($pirate3 < 271)
				$pgate3 = "5";
			else if ($pirate3 < 271)
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

			if ($pirate1 < 75)
				$pgate1 = "1";
			else if ($pirate1 < 173)
				$pgate1 = "2";
			else if ($pirate1 < 173)
				$pgate1 = "3";
			else if ($pirate1 < 198)
				$pgate1 = "4";
			else if ($pirate1 < 298)
				$pgate1 = "5";
			else if ($pirate1 < 298)
				$pgate1 = "6";
			else if ($pirate1 < 301)
				$pgate1 = "7";
			else
				$pgate1 = "8";

			if ($pirate2 < 75)
				$pgate2 = "1";
			else if ($pirate2 < 173)
				$pgate2 = "2";
			else if ($pirate2 < 173)
				$pgate2 = "3";
			else if ($pirate2 < 198)
				$pgate2 = "4";
			else if ($pirate2 < 298)
				$pgate2 = "5";
			else if ($pirate2 < 298)
				$pgate2 = "6";
			else if ($pirate2 < 301)
				$pgate2 = "7";
			else
				$pgate2 = "8";

			if ($pirate3 < 75)
				$pgate3 = "1";
			else if ($pirate3 < 173)
				$pgate3 = "2";
			else if ($pirate3 < 173)
				$pgate3 = "3";
			else if ($pirate3 < 198)
				$pgate3 = "4";
			else if ($pirate3 < 298)
				$pgate3 = "5";
			else if ($pirate3 < 298)
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
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>2</td><td>6</td><td>7</td><td>7</td><td>8</td><td>8</td><td>6</td><td>9</td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-8</td><td>-10</td><td>-3</td><td>-1</td><td>-10</td><td>-5</td><td>-2</td><td>-5</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 13) || ($_SESSION['counter'] == 14) || ($_SESSION['counter'] == 15) || ($_SESSION['counter'] == 16)
			|| ($_SESSION['counter'] == 17) || ($_SESSION['counter'] == 18) || ($_SESSION['counter'] == 19) || ($_SESSION['counter'] == 20)
			|| ($_SESSION['counter'] == 21) || ($_SESSION['counter'] == 22) || ($_SESSION['counter'] == 23) || ($_SESSION['counter'] == 24)
			|| ($_SESSION['counter'] == 25)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>3</td><td>8</td><td>9</td><td>9</td><td>7</td><td>7</td><td>4</td><td>1</td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-10</td><td>-2</td><td>-5</td><td>-1</td><td>-7</td><td>-6</td><td>-2</td><td>-1</td>
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