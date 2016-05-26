<?php
	session_start();
	$maxround = 35;
	$curround = 35;

	$gate = $_REQUEST['gate'];

	do
	{
	
	if ($_SESSION['counter'] == 0)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 39)
			$pgate1 = "1";
		else if ($pirate1 < 90)
			$pgate1 = "2";
		else if ($pirate1 < 107)
			$pgate1 = "3";
		else if ($pirate1 < 133)
			$pgate1 = "4";
		else if ($pirate1 < 176)
			$pgate1 = "5";
		else if ($pirate1 < 246)
			$pgate1 = "6";
		else if ($pirate1 < 272)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 39)
			$pgate2 = "1";
		else if ($pirate2 < 90)
			$pgate2 = "2";
		else if ($pirate2 < 107)
			$pgate2 = "3";
		else if ($pirate2 < 133)
			$pgate2 = "4";
		else if ($pirate2 < 176)
			$pgate2 = "5";
		else if ($pirate2 < 246)
			$pgate2 = "6";
		else if ($pirate2 < 272)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 39)
			$pgate3 = "1";
		else if ($pirate3 < 90)
			$pgate3 = "2";
		else if ($pirate3 < 107)
			$pgate3 = "3";
		else if ($pirate3 < 133)
			$pgate3 = "4";
		else if ($pirate3 < 176)
			$pgate3 = "5";
		else if ($pirate3 < 246)
			$pgate3 = "6";
		else if ($pirate3 < 272)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	/*
	else if ($_SESSION['counter'] == 1)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 50)
			$pgate1 = "1";
		else if ($pirate1 < 105)
			$pgate1 = "2";
		else if ($pirate1 < 124)
			$pgate1 = "3";
		else if ($pirate1 < 150)
			$pgate1 = "4";
		else if ($pirate1 < 197)
			$pgate1 = "5";
		else if ($pirate1 < 244)
			$pgate1 = "6";
		else if ($pirate1 < 283)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 50)
			$pgate2 = "1";
		else if ($pirate2 < 105)
			$pgate2 = "2";
		else if ($pirate2 < 124)
			$pgate2 = "3";
		else if ($pirate2 < 150)
			$pgate2 = "4";
		else if ($pirate2 < 197)
			$pgate2 = "5";
		else if ($pirate2 < 244)
			$pgate2 = "6";
		else if ($pirate2 < 283)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 50)
			$pgate3 = "1";
		else if ($pirate3 < 105)
			$pgate3 = "2";
		else if ($pirate3 < 124)
			$pgate3 = "3";
		else if ($pirate3 < 150)
			$pgate3 = "4";
		else if ($pirate3 < 197)
			$pgate3 = "5";
		else if ($pirate3 < 244)
			$pgate3 = "6";
		else if ($pirate3 < 283)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 2)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 62)
			$pgate1 = "1";
		else if ($pirate1 < 122)
			$pgate1 = "2";
		else if ($pirate1 < 123)
			$pgate1 = "3";
		else if ($pirate1 < 157)
			$pgate1 = "4";
		else if ($pirate1 < 201)
			$pgate1 = "5";
		else if ($pirate1 < 253)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 62)
			$pgate2 = "1";
		else if ($pirate2 < 122)
			$pgate2 = "2";
		else if ($pirate2 < 123)
			$pgate2 = "3";
		else if ($pirate2 < 157)
			$pgate2 = "4";
		else if ($pirate2 < 201)
			$pgate2 = "5";
		else if ($pirate2 < 253)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 62)
			$pgate3 = "1";
		else if ($pirate3 < 122)
			$pgate3 = "2";
		else if ($pirate3 < 123)
			$pgate3 = "3";
		else if ($pirate3 < 157)
			$pgate3 = "4";
		else if ($pirate3 < 201)
			$pgate3 = "5";
		else if ($pirate3 < 253)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	*/
	else if ($_SESSION['counter'] == 1)
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
	else if ($_SESSION['counter'] == 2)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 57)
			$pgate1 = "1";
		else if ($pirate1 < 119)
			$pgate1 = "2";
		else if ($pirate1 < 137)
			$pgate1 = "3";
		else if ($pirate1 < 159)
			$pgate1 = "4";
		else if ($pirate1 < 211)
			$pgate1 = "5";
		else if ($pirate1 < 255)
			$pgate1 = "6";
		else if ($pirate1 < 289)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 57)
			$pgate2 = "1";
		else if ($pirate2 < 119)
			$pgate2 = "2";
		else if ($pirate2 < 137)
			$pgate2 = "3";
		else if ($pirate2 < 159)
			$pgate2 = "4";
		else if ($pirate2 < 211)
			$pgate2 = "5";
		else if ($pirate2 < 255)
			$pgate2 = "6";
		else if ($pirate2 < 289)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 57)
			$pgate3 = "1";
		else if ($pirate3 < 119)
			$pgate3 = "2";
		else if ($pirate3 < 137)
			$pgate3 = "3";
		else if ($pirate3 < 159)
			$pgate3 = "4";
		else if ($pirate3 < 211)
			$pgate3 = "5";
		else if ($pirate3 < 255)
			$pgate3 = "6";
		else if ($pirate3 < 289)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 3)
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
	else if ($_SESSION['counter'] == 4)
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
	else if ($_SESSION['counter'] == 5)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 28)
			$pgate1 = "1";
		else if ($pirate1 < 120)
			$pgate1 = "2";
		else if ($pirate1 < 127)
			$pgate1 = "3";
		else if ($pirate1 < 161)
			$pgate1 = "4";
		else if ($pirate1 < 220)
			$pgate1 = "5";
		else if ($pirate1 < 225)
			$pgate1 = "6";
		else if ($pirate1 < 277)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 28)
			$pgate2 = "1";
		else if ($pirate2 < 120)
			$pgate2 = "2";
		else if ($pirate2 < 127)
			$pgate2 = "3";
		else if ($pirate2 < 161)
			$pgate2 = "4";
		else if ($pirate2 < 220)
			$pgate2 = "5";
		else if ($pirate2 < 225)
			$pgate2 = "6";
		else if ($pirate2 < 277)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 28)
			$pgate3 = "1";
		else if ($pirate3 < 120)
			$pgate3 = "2";
		else if ($pirate3 < 127)
			$pgate3 = "3";
		else if ($pirate3 < 161)
			$pgate3 = "4";
		else if ($pirate3 < 220)
			$pgate3 = "5";
		else if ($pirate3 < 225)
			$pgate3 = "6";
		else if ($pirate3 < 277)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	/*
	else if ($_SESSION['counter'] == 8)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 46)
			$pgate1 = "1";
		else if ($pirate1 < 92)
			$pgate1 = "2";
		else if ($pirate1 < 106)
			$pgate1 = "3";
		else if ($pirate1 < 142)
			$pgate1 = "4";
		else if ($pirate1 < 210)
			$pgate1 = "5";
		else if ($pirate1 < 217)
			$pgate1 = "6";
		else if ($pirate1 < 281)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 46)
			$pgate2 = "1";
		else if ($pirate2 < 92)
			$pgate2 = "2";
		else if ($pirate2 < 106)
			$pgate2 = "3";
		else if ($pirate2 < 142)
			$pgate2 = "4";
		else if ($pirate2 < 210)
			$pgate2 = "5";
		else if ($pirate2 < 217)
			$pgate2 = "6";
		else if ($pirate2 < 281)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 46)
			$pgate3 = "1";
		else if ($pirate3 < 92)
			$pgate3 = "2";
		else if ($pirate3 < 106)
			$pgate3 = "3";
		else if ($pirate3 < 142)
			$pgate3 = "4";
		else if ($pirate3 < 210)
			$pgate3 = "5";
		else if ($pirate3 < 217)
			$pgate3 = "6";
		else if ($pirate3 < 281)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 9)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 54)
			$pgate1 = "1";
		else if ($pirate1 < 111)
			$pgate1 = "2";
		else if ($pirate1 < 111)
			$pgate1 = "3";
		else if ($pirate1 < 157)
			$pgate1 = "4";
		else if ($pirate1 < 230)
			$pgate1 = "5";
		else if ($pirate1 < 230)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 54)
			$pgate2 = "1";
		else if ($pirate2 < 111)
			$pgate2 = "2";
		else if ($pirate2 < 111)
			$pgate2 = "3";
		else if ($pirate2 < 157)
			$pgate2 = "4";
		else if ($pirate2 < 230)
			$pgate2 = "5";
		else if ($pirate2 < 230)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 54)
			$pgate3 = "1";
		else if ($pirate3 < 111)
			$pgate3 = "2";
		else if ($pirate3 < 111)
			$pgate3 = "3";
		else if ($pirate3 < 157)
			$pgate3 = "4";
		else if ($pirate3 < 230)
			$pgate3 = "5";
		else if ($pirate3 < 230)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	*/
	else if ($_SESSION['counter'] == 6)
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
	else if ($_SESSION['counter'] == 7)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 48)
			$pgate1 = "1";
		else if ($pirate1 < 102)
			$pgate1 = "2";
		else if ($pirate1 < 111)
			$pgate1 = "3";
		else if ($pirate1 < 154)
			$pgate1 = "4";
		else if ($pirate1 < 228)
			$pgate1 = "5";
		else if ($pirate1 < 228)
			$pgate1 = "6";
		else if ($pirate1 < 298)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 48)
			$pgate2 = "1";
		else if ($pirate2 < 102)
			$pgate2 = "2";
		else if ($pirate2 < 111)
			$pgate2 = "3";
		else if ($pirate2 < 154)
			$pgate2 = "4";
		else if ($pirate2 < 228)
			$pgate2 = "5";
		else if ($pirate2 < 228)
			$pgate2 = "6";
		else if ($pirate2 < 298)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 48)
			$pgate3 = "1";
		else if ($pirate3 < 102)
			$pgate3 = "2";
		else if ($pirate3 < 111)
			$pgate3 = "3";
		else if ($pirate3 < 154)
			$pgate3 = "4";
		else if ($pirate3 < 228)
			$pgate3 = "5";
		else if ($pirate3 < 228)
			$pgate3 = "6";
		else if ($pirate3 < 298)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 8)
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
		else if ($pirate2 < 129)
			$pgate2 = "3";
		else if ($pirate2 < 176)
			$pgate2 = "4";
		else if ($pirate2 < 240)
			$pgate2 = "5";
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
		else if ($pirate3 < 129)
			$pgate3 = "3";
		else if ($pirate3 < 176)
			$pgate3 = "4";
		else if ($pirate3 < 240)
			$pgate3 = "5";
		else if ($pirate3 < 240)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 9)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 53)
			$pgate1 = "1";
		else if ($pirate1 < 105)
			$pgate1 = "2";
		else if ($pirate1 < 126)
			$pgate1 = "3";
		else if ($pirate1 < 162)
			$pgate1 = "4";
		else if ($pirate1 < 226)
			$pgate1 = "5";
		else if ($pirate1 < 242)
			$pgate1 = "6";
		else if ($pirate1 < 301)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 53)
			$pgate2 = "1";
		else if ($pirate2 < 105)
			$pgate2 = "2";
		else if ($pirate2 < 126)
			$pgate2 = "3";
		else if ($pirate2 < 162)
			$pgate2 = "4";
		else if ($pirate2 < 226)
			$pgate2 = "5";
		else if ($pirate2 < 242)
			$pgate2 = "6";
		else if ($pirate2 < 301)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 53)
			$pgate3 = "1";
		else if ($pirate3 < 105)
			$pgate3 = "2";
		else if ($pirate3 < 126)
			$pgate3 = "3";
		else if ($pirate3 < 162)
			$pgate3 = "4";
		else if ($pirate3 < 226)
			$pgate3 = "5";
		else if ($pirate3 < 242)
			$pgate3 = "6";
		else if ($pirate3 < 301)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 10)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 42)
			$pgate1 = "1";
		else if ($pirate1 < 66)
			$pgate1 = "2";
		else if ($pirate1 < 95)
			$pgate1 = "3";
		else if ($pirate1 < 114)
			$pgate1 = "4";
		else if ($pirate1 < 123)
			$pgate1 = "5";
		else if ($pirate1 < 201)
			$pgate1 = "6";
		else if ($pirate1 < 229)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 42)
			$pgate2 = "1";
		else if ($pirate2 < 66)
			$pgate2 = "2";
		else if ($pirate2 < 95)
			$pgate2 = "3";
		else if ($pirate2 < 114)
			$pgate2 = "4";
		else if ($pirate2 < 123)
			$pgate2 = "5";
		else if ($pirate2 < 201)
			$pgate2 = "6";
		else if ($pirate2 < 229)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 42)
			$pgate3 = "1";
		else if ($pirate3 < 66)
			$pgate3 = "2";
		else if ($pirate3 < 95)
			$pgate3 = "3";
		else if ($pirate3 < 114)
			$pgate3 = "4";
		else if ($pirate3 < 123)
			$pgate3 = "5";
		else if ($pirate3 < 201)
			$pgate3 = "6";
		else if ($pirate3 < 229)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	/*
	else if ($_SESSION['counter'] == 15)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 40)
			$pgate1 = "1";
		else if ($pirate1 < 81)
			$pgate1 = "2";
		else if ($pirate1 < 107)
			$pgate1 = "3";
		else if ($pirate1 < 138)
			$pgate1 = "4";
		else if ($pirate1 < 150)
			$pgate1 = "5";
		else if ($pirate1 < 227)
			$pgate1 = "6";
		else if ($pirate1 < 265)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 40)
			$pgate2 = "1";
		else if ($pirate2 < 81)
			$pgate2 = "2";
		else if ($pirate2 < 107)
			$pgate2 = "3";
		else if ($pirate2 < 138)
			$pgate2 = "4";
		else if ($pirate2 < 150)
			$pgate2 = "5";
		else if ($pirate2 < 227)
			$pgate2 = "6";
		else if ($pirate2 < 265)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 40)
			$pgate3 = "1";
		else if ($pirate3 < 81)
			$pgate3 = "2";
		else if ($pirate3 < 107)
			$pgate3 = "3";
		else if ($pirate3 < 138)
			$pgate3 = "4";
		else if ($pirate3 < 150)
			$pgate3 = "5";
		else if ($pirate3 < 227)
			$pgate3 = "6";
		else if ($pirate3 < 265)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 16)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 57)
			$pgate1 = "1";
		else if ($pirate1 < 106)
			$pgate1 = "2";
		else if ($pirate1 < 106)
			$pgate1 = "3";
		else if ($pirate1 < 133)
			$pgate1 = "4";
		else if ($pirate1 < 133)
			$pgate1 = "5";
		else if ($pirate1 < 216)
			$pgate1 = "6";
		else if ($pirate1 < 250)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 57)
			$pgate2 = "1";
		else if ($pirate2 < 106)
			$pgate2 = "2";
		else if ($pirate2 < 106)
			$pgate2 = "3";
		else if ($pirate2 < 133)
			$pgate2 = "4";
		else if ($pirate2 < 133)
			$pgate2 = "5";
		else if ($pirate2 < 216)
			$pgate2 = "6";
		else if ($pirate2 < 250)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 57)
			$pgate3 = "1";
		else if ($pirate3 < 106)
			$pgate3 = "2";
		else if ($pirate3 < 106)
			$pgate3 = "3";
		else if ($pirate3 < 133)
			$pgate3 = "4";
		else if ($pirate3 < 133)
			$pgate3 = "5";
		else if ($pirate3 < 216)
			$pgate3 = "6";
		else if ($pirate3 < 250)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	*/
	else if ($_SESSION['counter'] == 11)
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
	else if ($_SESSION['counter'] == 12)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 48)
			$pgate1 = "1";
		else if ($pirate1 < 90)
			$pgate1 = "2";
		else if ($pirate1 < 106)
			$pgate1 = "3";
		else if ($pirate1 < 134)
			$pgate1 = "4";
		else if ($pirate1 < 141)
			$pgate1 = "5";
		else if ($pirate1 < 222)
			$pgate1 = "6";
		else if ($pirate1 < 258)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 48)
			$pgate2 = "1";
		else if ($pirate2 < 90)
			$pgate2 = "2";
		else if ($pirate2 < 106)
			$pgate2 = "3";
		else if ($pirate2 < 134)
			$pgate2 = "4";
		else if ($pirate2 < 141)
			$pgate2 = "5";
		else if ($pirate2 < 222)
			$pgate2 = "6";
		else if ($pirate2 < 258)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 48)
			$pgate3 = "1";
		else if ($pirate3 < 90)
			$pgate3 = "2";
		else if ($pirate3 < 106)
			$pgate3 = "3";
		else if ($pirate3 < 134)
			$pgate3 = "4";
		else if ($pirate3 < 141)
			$pgate3 = "5";
		else if ($pirate3 < 222)
			$pgate3 = "6";
		else if ($pirate3 < 258)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 13)
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
	else if ($_SESSION['counter'] == 14)
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
	else if ($_SESSION['counter'] == 15)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 28)
			$pgate1 = "1";
		else if ($pirate1 < 55)
			$pgate1 = "2";
		else if ($pirate1 < 77)
			$pgate1 = "3";
		else if ($pirate1 < 110)
			$pgate1 = "4";
		else if ($pirate1 < 118)
			$pgate1 = "5";
		else if ($pirate1 < 172)
			$pgate1 = "6";
		else if ($pirate1 < 262)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 28)
			$pgate2 = "1";
		else if ($pirate2 < 55)
			$pgate2 = "2";
		else if ($pirate2 < 77)
			$pgate2 = "3";
		else if ($pirate2 < 110)
			$pgate2 = "4";
		else if ($pirate2 < 118)
			$pgate2 = "5";
		else if ($pirate2 < 172)
			$pgate2 = "6";
		else if ($pirate2 < 262)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 28)
			$pgate3 = "1";
		else if ($pirate3 < 55)
			$pgate3 = "2";
		else if ($pirate3 < 77)
			$pgate3 = "3";
		else if ($pirate3 < 110)
			$pgate3 = "4";
		else if ($pirate3 < 118)
			$pgate3 = "5";
		else if ($pirate3 < 172)
			$pgate3 = "6";
		else if ($pirate3 < 262)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	/*
	else if ($_SESSION['counter'] == 22)
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
		else if ($pirate1 < 147)
			$pgate1 = "4";
		else if ($pirate1 < 158)
			$pgate1 = "5";
		else if ($pirate1 < 220)
			$pgate1 = "6";
		else if ($pirate1 < 252)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 31)
			$pgate2 = "1";
		else if ($pirate2 < 71)
			$pgate2 = "2";
		else if ($pirate2 < 99)
			$pgate2 = "3";
		else if ($pirate2 < 147)
			$pgate2 = "4";
		else if ($pirate2 < 158)
			$pgate2 = "5";
		else if ($pirate2 < 220)
			$pgate2 = "6";
		else if ($pirate2 < 252)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 31)
			$pgate3 = "1";
		else if ($pirate3 < 71)
			$pgate3 = "2";
		else if ($pirate3 < 99)
			$pgate3 = "3";
		else if ($pirate3 < 147)
			$pgate3 = "4";
		else if ($pirate3 < 158)
			$pgate3 = "5";
		else if ($pirate3 < 220)
			$pgate3 = "6";
		else if ($pirate3 < 252)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 23)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 9)
			$pgate1 = "1";
		else if ($pirate1 < 56)
			$pgate1 = "2";
		else if ($pirate1 < 64)
			$pgate1 = "3";
		else if ($pirate1 < 122)
			$pgate1 = "4";
		else if ($pirate1 < 122)
			$pgate1 = "5";
		else if ($pirate1 < 192)
			$pgate1 = "6";
		else if ($pirate1 < 242)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 9)
			$pgate2 = "1";
		else if ($pirate2 < 56)
			$pgate2 = "2";
		else if ($pirate2 < 64)
			$pgate2 = "3";
		else if ($pirate2 < 122)
			$pgate2 = "4";
		else if ($pirate2 < 122)
			$pgate2 = "5";
		else if ($pirate2 < 192)
			$pgate2 = "6";
		else if ($pirate2 < 242)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 9)
			$pgate3 = "1";
		else if ($pirate3 < 56)
			$pgate3 = "2";
		else if ($pirate3 < 64)
			$pgate3 = "3";
		else if ($pirate3 < 122)
			$pgate3 = "4";
		else if ($pirate3 < 122)
			$pgate3 = "5";
		else if ($pirate3 < 192)
			$pgate3 = "6";
		else if ($pirate3 < 242)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	*/
	else if ($_SESSION['counter'] == 16)
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
	else if ($_SESSION['counter'] == 17)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 24)
			$pgate1 = "1";
		else if ($pirate1 < 66)
			$pgate1 = "2";
		else if ($pirate1 < 87)
			$pgate1 = "3";
		else if ($pirate1 < 137)
			$pgate1 = "4";
		else if ($pirate1 < 141)
			$pgate1 = "5";
		else if ($pirate1 < 208)
			$pgate1 = "6";
		else if ($pirate1 < 247)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 24)
			$pgate2 = "1";
		else if ($pirate2 < 66)
			$pgate2 = "2";
		else if ($pirate2 < 87)
			$pgate2 = "3";
		else if ($pirate2 < 137)
			$pgate2 = "4";
		else if ($pirate2 < 141)
			$pgate2 = "5";
		else if ($pirate2 < 208)
			$pgate2 = "6";
		else if ($pirate2 < 247)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 24)
			$pgate3 = "1";
		else if ($pirate3 < 66)
			$pgate3 = "2";
		else if ($pirate3 < 87)
			$pgate3 = "3";
		else if ($pirate3 < 137)
			$pgate3 = "4";
		else if ($pirate3 < 141)
			$pgate3 = "5";
		else if ($pirate3 < 208)
			$pgate3 = "6";
		else if ($pirate3 < 247)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 18)
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
	else if ($_SESSION['counter'] == 19)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 34)
			$pgate1 = "1";
		else if ($pirate1 < 67)
			$pgate1 = "2";
		else if ($pirate1 < 97)
			$pgate1 = "3";
		else if ($pirate1 < 141)
			$pgate1 = "4";
		else if ($pirate1 < 160)
			$pgate1 = "5";
		else if ($pirate1 < 222)
			$pgate1 = "6";
		else if ($pirate1 < 258)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 34)
			$pgate2 = "1";
		else if ($pirate2 < 67)
			$pgate2 = "2";
		else if ($pirate2 < 97)
			$pgate2 = "3";
		else if ($pirate2 < 141)
			$pgate2 = "4";
		else if ($pirate2 < 160)
			$pgate2 = "5";
		else if ($pirate2 < 222)
			$pgate2 = "6";
		else if ($pirate2 < 258)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 34)
			$pgate3 = "1";
		else if ($pirate3 < 67)
			$pgate3 = "2";
		else if ($pirate3 < 97)
			$pgate3 = "3";
		else if ($pirate3 < 141)
			$pgate3 = "4";
		else if ($pirate3 < 160)
			$pgate3 = "5";
		else if ($pirate3 < 222)
			$pgate3 = "6";
		else if ($pirate3 < 258)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 20)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 17)
			$pgate1 = "1";
		else if ($pirate1 < 66)
			$pgate1 = "2";
		else if ($pirate1 < 107)
			$pgate1 = "3";
		else if ($pirate1 < 153)
			$pgate1 = "4";
		else if ($pirate1 < 204)
			$pgate1 = "5";
		else if ($pirate1 < 220)
			$pgate1 = "6";
		else if ($pirate1 < 272)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 17)
			$pgate2 = "1";
		else if ($pirate2 < 66)
			$pgate2 = "2";
		else if ($pirate2 < 107)
			$pgate2 = "3";
		else if ($pirate2 < 153)
			$pgate2 = "4";
		else if ($pirate2 < 204)
			$pgate2 = "5";
		else if ($pirate2 < 220)
			$pgate2 = "6";
		else if ($pirate2 < 272)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 17)
			$pgate3 = "1";
		else if ($pirate3 < 66)
			$pgate3 = "2";
		else if ($pirate3 < 107)
			$pgate3 = "3";
		else if ($pirate3 < 153)
			$pgate3 = "4";
		else if ($pirate3 < 204)
			$pgate3 = "5";
		else if ($pirate3 < 220)
			$pgate3 = "6";
		else if ($pirate3 < 272)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 21)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 23)
			$pgate1 = "1";
		else if ($pirate1 < 74)
			$pgate1 = "2";
		else if ($pirate1 < 91)
			$pgate1 = "3";
		else if ($pirate1 < 141)
			$pgate1 = "4";
		else if ($pirate1 < 191)
			$pgate1 = "5";
		else if ($pirate1 < 214)
			$pgate1 = "6";
		else if ($pirate1 < 268)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 23)
			$pgate2 = "1";
		else if ($pirate2 < 74)
			$pgate2 = "2";
		else if ($pirate2 < 91)
			$pgate2 = "3";
		else if ($pirate2 < 141)
			$pgate2 = "4";
		else if ($pirate2 < 191)
			$pgate2 = "5";
		else if ($pirate2 < 214)
			$pgate2 = "6";
		else if ($pirate2 < 268)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 23)
			$pgate3 = "1";
		else if ($pirate3 < 74)
			$pgate3 = "2";
		else if ($pirate3 < 91)
			$pgate3 = "3";
		else if ($pirate3 < 141)
			$pgate3 = "4";
		else if ($pirate3 < 191)
			$pgate3 = "5";
		else if ($pirate3 < 214)
			$pgate3 = "6";
		else if ($pirate3 < 268)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 22)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 0)
			$pgate1 = "1";
		else if ($pirate1 < 65)
			$pgate1 = "2";
		else if ($pirate1 < 89)
			$pgate1 = "3";
		else if ($pirate1 < 153)
			$pgate1 = "4";
		else if ($pirate1 < 205)
			$pgate1 = "5";
		else if ($pirate1 < 205)
			$pgate1 = "6";
		else if ($pirate1 < 260)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 0)
			$pgate2 = "1";
		else if ($pirate2 < 65)
			$pgate2 = "2";
		else if ($pirate2 < 89)
			$pgate2 = "3";
		else if ($pirate2 < 153)
			$pgate2 = "4";
		else if ($pirate2 < 205)
			$pgate2 = "5";
		else if ($pirate2 < 205)
			$pgate2 = "6";
		else if ($pirate2 < 260)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 0)
			$pgate3 = "1";
		else if ($pirate3 < 65)
			$pgate3 = "2";
		else if ($pirate3 < 89)
			$pgate3 = "3";
		else if ($pirate3 < 153)
			$pgate3 = "4";
		else if ($pirate3 < 205)
			$pgate3 = "5";
		else if ($pirate3 < 205)
			$pgate3 = "6";
		else if ($pirate3 < 260)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 23)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 0)
			$pgate1 = "1";
		else if ($pirate1 < 59)
			$pgate1 = "2";
		else if ($pirate1 < 105)
			$pgate1 = "3";
		else if ($pirate1 < 156)
			$pgate1 = "4";
		else if ($pirate1 < 212)
			$pgate1 = "5";
		else if ($pirate1 < 212)
			$pgate1 = "6";
		else if ($pirate1 < 273)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 0)
			$pgate2 = "1";
		else if ($pirate2 < 59)
			$pgate2 = "2";
		else if ($pirate2 < 105)
			$pgate2 = "3";
		else if ($pirate2 < 156)
			$pgate2 = "4";
		else if ($pirate2 < 212)
			$pgate2 = "5";
		else if ($pirate2 < 212)
			$pgate2 = "6";
		else if ($pirate2 < 273)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 0)
			$pgate3 = "1";
		else if ($pirate3 < 59)
			$pgate3 = "2";
		else if ($pirate3 < 105)
			$pgate3 = "3";
		else if ($pirate3 < 156)
			$pgate3 = "4";
		else if ($pirate3 < 212)
			$pgate3 = "5";
		else if ($pirate3 < 212)
			$pgate3 = "6";
		else if ($pirate3 < 273)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 24)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 12)
			$pgate1 = "1";
		else if ($pirate1 < 74)
			$pgate1 = "2";
		else if ($pirate1 < 90)
			$pgate1 = "3";
		else if ($pirate1 < 145)
			$pgate1 = "4";
		else if ($pirate1 < 197)
			$pgate1 = "5";
		else if ($pirate1 < 197)
			$pgate1 = "6";
		else if ($pirate1 < 254)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 12)
			$pgate2 = "1";
		else if ($pirate2 < 74)
			$pgate2 = "2";
		else if ($pirate2 < 90)
			$pgate2 = "3";
		else if ($pirate2 < 145)
			$pgate2 = "4";
		else if ($pirate2 < 197)
			$pgate2 = "5";
		else if ($pirate2 < 197)
			$pgate2 = "6";
		else if ($pirate2 < 254)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 12)
			$pgate3 = "1";
		else if ($pirate3 < 74)
			$pgate3 = "2";
		else if ($pirate3 < 90)
			$pgate3 = "3";
		else if ($pirate3 < 145)
			$pgate3 = "4";
		else if ($pirate3 < 197)
			$pgate3 = "5";
		else if ($pirate3 < 197)
			$pgate3 = "6";
		else if ($pirate3 < 254)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 25)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 49)
			$pgate1 = "1";
		else if ($pirate1 < 95)
			$pgate1 = "2";
		else if ($pirate1 < 115)
			$pgate1 = "3";
		else if ($pirate1 < 182)
			$pgate1 = "4";
		else if ($pirate1 < 187)
			$pgate1 = "5";
		else if ($pirate1 < 208)
			$pgate1 = "6";
		else if ($pirate1 < 272)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 49)
			$pgate2 = "1";
		else if ($pirate2 < 95)
			$pgate2 = "2";
		else if ($pirate2 < 115)
			$pgate2 = "3";
		else if ($pirate2 < 182)
			$pgate2 = "4";
		else if ($pirate2 < 187)
			$pgate2 = "5";
		else if ($pirate2 < 208)
			$pgate2 = "6";
		else if ($pirate2 < 272)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 49)
			$pgate3 = "1";
		else if ($pirate3 < 95)
			$pgate3 = "2";
		else if ($pirate3 < 115)
			$pgate3 = "3";
		else if ($pirate3 < 182)
			$pgate3 = "4";
		else if ($pirate3 < 187)
			$pgate3 = "5";
		else if ($pirate3 < 208)
			$pgate3 = "6";
		else if ($pirate3 < 272)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 26)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 54)
			$pgate1 = "1";
		else if ($pirate1 < 107)
			$pgate1 = "2";
		else if ($pirate1 < 113)
			$pgate1 = "3";
		else if ($pirate1 < 168)
			$pgate1 = "4";
		else if ($pirate1 < 175)
			$pgate1 = "5";
		else if ($pirate1 < 202)
			$pgate1 = "6";
		else if ($pirate1 < 265)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 54)
			$pgate2 = "1";
		else if ($pirate2 < 107)
			$pgate2 = "2";
		else if ($pirate2 < 113)
			$pgate2 = "3";
		else if ($pirate2 < 168)
			$pgate2 = "4";
		else if ($pirate2 < 175)
			$pgate2 = "5";
		else if ($pirate2 < 202)
			$pgate2 = "6";
		else if ($pirate2 < 265)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 54)
			$pgate3 = "1";
		else if ($pirate3 < 107)
			$pgate3 = "2";
		else if ($pirate3 < 113)
			$pgate3 = "3";
		else if ($pirate3 < 168)
			$pgate3 = "4";
		else if ($pirate3 < 175)
			$pgate3 = "5";
		else if ($pirate3 < 202)
			$pgate3 = "6";
		else if ($pirate3 < 265)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 27)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 58)
			$pgate1 = "1";
		else if ($pirate1 < 113)
			$pgate1 = "2";
		else if ($pirate1 < 113)
			$pgate1 = "3";
		else if ($pirate1 < 166)
			$pgate1 = "4";
		else if ($pirate1 < 166)
			$pgate1 = "5";
		else if ($pirate1 < 197)
			$pgate1 = "6";
		else if ($pirate1 < 259)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 58)
			$pgate2 = "1";
		else if ($pirate2 < 113)
			$pgate2 = "2";
		else if ($pirate2 < 113)
			$pgate2 = "3";
		else if ($pirate2 < 166)
			$pgate2 = "4";
		else if ($pirate2 < 166)
			$pgate2 = "5";
		else if ($pirate2 < 197)
			$pgate2 = "6";
		else if ($pirate2 < 259)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 58)
			$pgate3 = "1";
		else if ($pirate3 < 113)
			$pgate3 = "2";
		else if ($pirate3 < 113)
			$pgate3 = "3";
		else if ($pirate3 < 166)
			$pgate3 = "4";
		else if ($pirate3 < 166)
			$pgate3 = "5";
		else if ($pirate3 < 197)
			$pgate3 = "6";
		else if ($pirate3 < 259)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 28)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 55)
			$pgate1 = "1";
		else if ($pirate1 < 99)
			$pgate1 = "2";
		else if ($pirate1 < 118)
			$pgate1 = "3";
		else if ($pirate1 < 186)
			$pgate1 = "4";
		else if ($pirate1 < 186)
			$pgate1 = "5";
		else if ($pirate1 < 205)
			$pgate1 = "6";
		else if ($pirate1 < 270)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 55)
			$pgate2 = "1";
		else if ($pirate2 < 99)
			$pgate2 = "2";
		else if ($pirate2 < 118)
			$pgate2 = "3";
		else if ($pirate2 < 186)
			$pgate2 = "4";
		else if ($pirate2 < 186)
			$pgate2 = "5";
		else if ($pirate2 < 205)
			$pgate2 = "6";
		else if ($pirate2 < 270)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 55)
			$pgate3 = "1";
		else if ($pirate3 < 99)
			$pgate3 = "2";
		else if ($pirate3 < 118)
			$pgate3 = "3";
		else if ($pirate3 < 186)
			$pgate3 = "4";
		else if ($pirate3 < 186)
			$pgate3 = "5";
		else if ($pirate3 < 205)
			$pgate3 = "6";
		else if ($pirate3 < 270)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 29)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 58)
			$pgate1 = "1";
		else if ($pirate1 < 117)
			$pgate1 = "2";
		else if ($pirate1 < 117)
			$pgate1 = "3";
		else if ($pirate1 < 177)
			$pgate1 = "4";
		else if ($pirate1 < 177)
			$pgate1 = "5";
		else if ($pirate1 < 196)
			$pgate1 = "6";
		else if ($pirate1 < 262)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 58)
			$pgate2 = "1";
		else if ($pirate2 < 117)
			$pgate2 = "2";
		else if ($pirate2 < 117)
			$pgate2 = "3";
		else if ($pirate2 < 177)
			$pgate2 = "4";
		else if ($pirate2 < 177)
			$pgate2 = "5";
		else if ($pirate2 < 196)
			$pgate2 = "6";
		else if ($pirate2 < 262)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 58)
			$pgate3 = "1";
		else if ($pirate3 < 117)
			$pgate3 = "2";
		else if ($pirate3 < 117)
			$pgate3 = "3";
		else if ($pirate3 < 177)
			$pgate3 = "4";
		else if ($pirate3 < 177)
			$pgate3 = "5";
		else if ($pirate3 < 196)
			$pgate3 = "6";
		else if ($pirate3 < 262)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 30)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 54)
			$pgate1 = "1";
		else if ($pirate1 < 94)
			$pgate1 = "2";
		else if ($pirate1 < 112)
			$pgate1 = "3";
		else if ($pirate1 < 172)
			$pgate1 = "4";
		else if ($pirate1 < 181)
			$pgate1 = "5";
		else if ($pirate1 < 208)
			$pgate1 = "6";
		else if ($pirate1 < 265)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 54)
			$pgate2 = "1";
		else if ($pirate2 < 94)
			$pgate2 = "2";
		else if ($pirate2 < 112)
			$pgate2 = "3";
		else if ($pirate2 < 172)
			$pgate2 = "4";
		else if ($pirate2 < 181)
			$pgate2 = "5";
		else if ($pirate2 < 208)
			$pgate2 = "6";
		else if ($pirate2 < 265)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 54)
			$pgate3 = "1";
		else if ($pirate3 < 94)
			$pgate3 = "2";
		else if ($pirate3 < 112)
			$pgate3 = "3";
		else if ($pirate3 < 172)
			$pgate3 = "4";
		else if ($pirate3 < 181)
			$pgate3 = "5";
		else if ($pirate3 < 208)
			$pgate3 = "6";
		else if ($pirate3 < 265)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 31)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 56)
			$pgate1 = "1";
		else if ($pirate1 < 99)
			$pgate1 = "2";
		else if ($pirate1 < 102)
			$pgate1 = "3";
		else if ($pirate1 < 162)
			$pgate1 = "4";
		else if ($pirate1 < 173)
			$pgate1 = "5";
		else if ($pirate1 < 204)
			$pgate1 = "6";
		else if ($pirate1 < 262)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 56)
			$pgate2 = "1";
		else if ($pirate2 < 99)
			$pgate2 = "2";
		else if ($pirate2 < 102)
			$pgate2 = "3";
		else if ($pirate2 < 162)
			$pgate2 = "4";
		else if ($pirate2 < 173)
			$pgate2 = "5";
		else if ($pirate2 < 204)
			$pgate2 = "6";
		else if ($pirate2 < 262)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 56)
			$pgate3 = "1";
		else if ($pirate3 < 99)
			$pgate3 = "2";
		else if ($pirate3 < 102)
			$pgate3 = "3";
		else if ($pirate3 < 162)
			$pgate3 = "4";
		else if ($pirate3 < 173)
			$pgate3 = "5";
		else if ($pirate3 < 204)
			$pgate3 = "6";
		else if ($pirate3 < 262)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 32)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 56)
			$pgate1 = "1";
		else if ($pirate1 < 103)
			$pgate1 = "2";
		else if ($pirate1 < 103)
			$pgate1 = "3";
		else if ($pirate1 < 161)
			$pgate1 = "4";
		else if ($pirate1 < 161)
			$pgate1 = "5";
		else if ($pirate1 < 195)
			$pgate1 = "6";
		else if ($pirate1 < 249)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 56)
			$pgate2 = "1";
		else if ($pirate2 < 103)
			$pgate2 = "2";
		else if ($pirate2 < 103)
			$pgate2 = "3";
		else if ($pirate2 < 161)
			$pgate2 = "4";
		else if ($pirate2 < 161)
			$pgate2 = "5";
		else if ($pirate2 < 195)
			$pgate2 = "6";
		else if ($pirate2 < 249)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 56)
			$pgate3 = "1";
		else if ($pirate3 < 103)
			$pgate3 = "2";
		else if ($pirate3 < 103)
			$pgate3 = "3";
		else if ($pirate3 < 161)
			$pgate3 = "4";
		else if ($pirate3 < 161)
			$pgate3 = "5";
		else if ($pirate3 < 195)
			$pgate3 = "6";
		else if ($pirate3 < 249)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 33)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 59)
			$pgate1 = "1";
		else if ($pirate1 < 102)
			$pgate1 = "2";
		else if ($pirate1 < 112)
			$pgate1 = "3";
		else if ($pirate1 < 177)
			$pgate1 = "4";
		else if ($pirate1 < 177)
			$pgate1 = "5";
		else if ($pirate1 < 202)
			$pgate1 = "6";
		else if ($pirate1 < 264)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 59)
			$pgate2 = "1";
		else if ($pirate2 < 102)
			$pgate2 = "2";
		else if ($pirate2 < 112)
			$pgate2 = "3";
		else if ($pirate2 < 177)
			$pgate2 = "4";
		else if ($pirate2 < 177)
			$pgate2 = "5";
		else if ($pirate2 < 202)
			$pgate2 = "6";
		else if ($pirate2 < 264)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 59)
			$pgate3 = "1";
		else if ($pirate3 < 102)
			$pgate3 = "2";
		else if ($pirate3 < 112)
			$pgate3 = "3";
		else if ($pirate3 < 177)
			$pgate3 = "4";
		else if ($pirate3 < 177)
			$pgate3 = "5";
		else if ($pirate3 < 202)
			$pgate3 = "6";
		else if ($pirate3 < 264)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 34)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 59)
			$pgate1 = "1";
		else if ($pirate1 < 103)
			$pgate1 = "2";
		else if ($pirate1 < 103)
			$pgate1 = "3";
		else if ($pirate1 < 166)
			$pgate1 = "4";
		else if ($pirate1 < 174)
			$pgate1 = "5";
		else if ($pirate1 < 196)
			$pgate1 = "6";
		else if ($pirate1 < 256)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 59)
			$pgate2 = "1";
		else if ($pirate2 < 103)
			$pgate2 = "2";
		else if ($pirate2 < 103)
			$pgate2 = "3";
		else if ($pirate2 < 166)
			$pgate2 = "4";
		else if ($pirate2 < 174)
			$pgate2 = "5";
		else if ($pirate2 < 196)
			$pgate2 = "6";
		else if ($pirate2 < 256)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 59)
			$pgate3 = "1";
		else if ($pirate3 < 103)
			$pgate3 = "2";
		else if ($pirate3 < 103)
			$pgate3 = "3";
		else if ($pirate3 < 166)
			$pgate3 = "4";
		else if ($pirate3 < 174)
			$pgate3 = "5";
		else if ($pirate3 < 196)
			$pgate3 = "6";
		else if ($pirate3 < 256)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if (($_SESSION['counter'] < $maxround))
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 39)
			$pgate1 = "1";
		else if ($pirate1 < 90)
			$pgate1 = "2";
		else if ($pirate1 < 107)
			$pgate1 = "3";
		else if ($pirate1 < 133)
			$pgate1 = "4";
		else if ($pirate1 < 176)
			$pgate1 = "5";
		else if ($pirate1 < 246)
			$pgate1 = "6";
		else if ($pirate1 < 272)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 39)
			$pgate2 = "1";
		else if ($pirate2 < 90)
			$pgate2 = "2";
		else if ($pirate2 < 107)
			$pgate2 = "3";
		else if ($pirate2 < 133)
			$pgate2 = "4";
		else if ($pirate2 < 176)
			$pgate2 = "5";
		else if ($pirate2 < 246)
			$pgate2 = "6";
		else if ($pirate2 < 272)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 39)
			$pgate3 = "1";
		else if ($pirate3 < 90)
			$pgate3 = "2";
		else if ($pirate3 < 107)
			$pgate3 = "3";
		else if ($pirate3 < 133)
			$pgate3 = "4";
		else if ($pirate3 < 176)
			$pgate3 = "5";
		else if ($pirate3 < 246)
			$pgate3 = "6";
		else if ($pirate3 < 272)
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

		$_SESSION['gameid'] = rand(1, 35);
		
		if ($_SESSION['gameid'] == 1)
			$_SESSION['combo'] = array(30,23,13,16,19,9,12,5,27,31,25,2,24,35,34,29,6,22,33,4,8,18,17,32,28,1,3,14,11,15,26,20,7,10,21,36);
		else if ($_SESSION['gameid'] == 2)
			$_SESSION['combo'] = array(23,16,30,9,13,5,19,31,12,2,27,35,25,29,24,22,34,4,6,18,33,32,8,1,17,14,28,15,3,20,11,10,26,21,7,36);
		else if ($_SESSION['gameid'] == 3)
			$_SESSION['combo'] = array(16,9,23,5,30,31,13,2,19,35,12,29,27,22,25,4,24,18,34,32,6,1,33,14,8,15,17,20,28,10,3,21,11,7,26,36);
		else if ($_SESSION['gameid'] == 4)
			$_SESSION['combo'] = array(9,5,16,31,23,2,30,35,13,29,19,22,12,4,27,18,25,32,24,1,34,14,6,15,33,20,8,10,17,21,28,7,3,26,11,36);
		else if ($_SESSION['gameid'] == 5)
			$_SESSION['combo'] = array(5,31,9,2,16,35,23,29,30,22,13,4,19,18,12,32,27,1,25,14,24,15,34,20,6,10,33,21,8,7,17,26,28,11,3,36);
		else if ($_SESSION['gameid'] == 6)
			$_SESSION['combo'] = array(31,2,5,35,9,29,16,22,23,4,30,18,13,32,19,1,12,14,27,15,25,20,24,10,34,21,6,7,33,26,8,11,17,3,28,36);
		else if ($_SESSION['gameid'] == 7)
			$_SESSION['combo'] = array(2,35,31,29,5,22,9,4,16,18,23,32,30,1,13,14,19,15,12,20,27,10,25,21,24,7,34,26,6,11,33,3,8,28,17,36);
		else if ($_SESSION['gameid'] == 8)
			$_SESSION['combo'] = array(35,29,2,22,31,4,5,18,9,32,16,1,23,14,30,15,13,20,19,10,12,21,27,7,25,26,24,11,34,3,6,28,33,17,8,36);
		else if ($_SESSION['gameid'] == 9)
			$_SESSION['combo'] = array(29,22,35,4,2,18,31,32,5,1,9,14,16,15,23,20,30,10,13,21,19,7,12,26,27,11,25,3,24,28,34,17,6,8,33,36);
		else if ($_SESSION['gameid'] == 10)
			$_SESSION['combo'] = array(22,4,29,18,35,32,2,1,31,14,5,15,9,20,16,10,23,21,30,7,13,26,19,11,12,3,27,28,25,17,24,8,34,33,6,36);
		else if ($_SESSION['gameid'] == 11)
			$_SESSION['combo'] = array(4,18,22,32,29,1,35,14,2,15,31,20,5,10,9,21,16,7,23,26,30,11,13,3,19,28,12,17,27,8,25,33,24,6,34,36);
		else if ($_SESSION['gameid'] == 12)
			$_SESSION['combo'] = array(18,32,4,1,22,14,29,15,35,20,2,10,31,21,5,7,9,26,16,11,23,3,30,28,13,17,19,8,12,33,27,6,25,34,24,36);
		else if ($_SESSION['gameid'] == 13)
			$_SESSION['combo'] = array(32,1,18,14,4,15,22,20,29,10,35,21,2,7,31,26,5,11,9,3,16,28,23,17,30,8,13,33,19,6,12,34,27,24,25,36);
		else if ($_SESSION['gameid'] == 14)
			$_SESSION['combo'] = array(1,14,32,15,18,20,4,10,22,21,29,7,35,26,2,11,31,3,5,28,9,17,16,8,23,33,30,6,13,34,19,24,12,25,27,36);
		else if ($_SESSION['gameid'] == 15)
			$_SESSION['combo'] = array(14,15,1,20,32,10,18,21,4,7,22,26,29,11,35,3,2,28,31,17,5,8,9,33,16,6,23,34,30,24,13,25,19,27,12,36);
		else if ($_SESSION['gameid'] == 16)
			$_SESSION['combo'] = array(15,20,14,10,1,21,32,7,18,26,4,11,22,3,29,28,35,17,2,8,31,33,5,6,9,34,16,24,23,25,30,27,13,12,19,36);
		else if ($_SESSION['gameid'] == 17)
			$_SESSION['combo'] = array(20,10,15,21,14,7,1,26,32,11,18,3,4,28,22,17,29,8,35,33,2,6,31,34,5,24,9,25,16,27,23,12,30,19,13,36);
		else if ($_SESSION['gameid'] == 18)
			$_SESSION['combo'] = array(10,21,20,7,15,26,14,11,1,3,32,28,18,17,4,8,22,33,29,6,35,34,2,24,31,25,5,27,9,12,16,19,23,13,30,36);
		else if ($_SESSION['gameid'] == 19)
			$_SESSION['combo'] = array(21,7,10,26,20,11,15,3,14,28,1,17,32,8,18,33,4,6,22,34,29,24,35,25,2,27,31,12,5,19,9,13,16,30,23,36);
		else if ($_SESSION['gameid'] == 20)
			$_SESSION['combo'] = array(7,26,21,11,10,3,20,28,15,17,14,8,1,33,32,6,18,34,4,24,22,25,29,27,35,12,2,19,31,13,5,30,9,23,16,36);
		else if ($_SESSION['gameid'] == 21)
			$_SESSION['combo'] = array(26,11,7,3,21,28,10,17,20,8,15,33,14,6,1,34,32,24,18,25,4,27,22,12,29,19,35,13,2,30,31,23,5,16,9,36);
		else if ($_SESSION['gameid'] == 22)
			$_SESSION['combo'] = array(11,3,26,28,7,17,21,8,10,33,20,6,15,34,14,24,1,25,32,27,18,12,4,19,22,13,29,30,35,23,2,16,31,9,5,36);
		else if ($_SESSION['gameid'] == 23)
			$_SESSION['combo'] = array(3,28,11,17,26,8,7,33,21,6,10,34,20,24,15,25,14,27,1,12,32,19,18,13,4,30,22,23,29,16,35,9,2,5,31,36);
		else if ($_SESSION['gameid'] == 24)
			$_SESSION['combo'] = array(28,17,3,8,11,33,26,6,7,34,21,24,10,25,20,27,15,12,14,19,1,13,32,30,18,23,4,16,22,9,29,5,35,31,2,36);
		else if ($_SESSION['gameid'] == 25)
			$_SESSION['combo'] = array(17,8,28,33,3,6,11,34,26,24,7,25,21,27,10,12,20,19,15,13,14,30,1,23,32,16,18,9,4,5,22,31,29,2,35,36);
		else if ($_SESSION['gameid'] == 26)
			$_SESSION['combo'] = array(8,33,17,6,28,34,3,24,11,25,26,27,7,12,21,19,10,13,20,30,15,23,14,16,1,9,32,5,18,31,4,2,22,35,29);
		else if ($_SESSION['gameid'] == 27)
			$_SESSION['combo'] = array(33,6,8,34,17,24,28,25,3,27,11,12,26,19,7,13,21,30,10,23,20,16,15,9,14,5,1,31,32,2,18,35,4,29,22,36);
		else if ($_SESSION['gameid'] == 28)
			$_SESSION['combo'] = array(6,34,33,24,8,25,17,27,28,12,3,19,11,13,26,30,7,23,21,16,10,9,20,5,15,31,14,2,1,35,32,29,18,22,4,36);
		else if ($_SESSION['gameid'] == 29)
			$_SESSION['combo'] = array(34,24,6,25,33,27,8,12,17,19,28,13,3,30,11,23,26,16,7,9,21,5,10,31,20,2,15,35,14,29,1,22,32,4,18,36);
		else if ($_SESSION['gameid'] == 30)
			$_SESSION['combo'] = array(24,25,34,27,6,12,33,19,8,13,17,30,28,23,3,16,11,9,26,5,7,31,21,2,10,35,20,29,15,22,14,4,1,18,32,36);
		else if ($_SESSION['gameid'] == 31)
			$_SESSION['combo'] = array(25,27,24,12,34,19,6,13,33,30,8,23,17,16,28,9,3,5,11,31,26,2,7,35,21,29,10,22,20,4,15,18,14,32,1,36);
		else if ($_SESSION['gameid'] == 32)
			$_SESSION['combo'] = array(27,12,25,19,24,13,34,30,6,23,33,16,8,9,17,5,28,31,3,2,11,35,26,29,7,22,21,4,10,18,20,32,15,1,14,36);
		else if ($_SESSION['gameid'] == 33)
			$_SESSION['combo'] = array(12,19,27,13,25,30,24,23,34,16,6,9,33,5,8,31,17,2,28,35,3,29,11,22,26,4,7,18,21,32,10,1,20,14,15,36);
		else if ($_SESSION['gameid'] == 34)
			$_SESSION['combo'] = array(19,13,12,30,27,23,25,16,24,9,34,5,6,31,33,2,8,35,17,29,28,22,3,4,11,18,26,32,7,1,21,14,10,15,20,36);
		else if ($_SESSION['gameid'] == 35)
			$_SESSION['combo'] = array(13,30,19,23,12,16,27,9,25,5,24,31,34,2,6,35,33,29,8,22,17,4,28,18,3,32,11,1,26,14,7,15,21,20,10,36);
		/*
		else if ($_SESSION['gameid'] == 36)
			$_SESSION['combo'] = array(36,37,35,38,34,39,33,40,32,41,31,42,30,43,29,1,28,2,27,3,26,4,25,5,24,6,23,7,22,8,44);
		else if ($_SESSION['gameid'] == 37)
			$_SESSION['combo'] = array(37,38,36,39,35,40,34,41,33,42,32,43,31,1,30,2,29,3,28,4,27,5,26,6,25,7,24,8,23,9,44);
		else if ($_SESSION['gameid'] == 38)
			$_SESSION['combo'] = array(38,39,37,40,36,41,35,42,34,43,33,1,32,2,31,3,30,4,29,5,28,6,27,7,26,8,25,9,24,10,44);
		else if ($_SESSION['gameid'] == 39)
			$_SESSION['combo'] = array(39,40,38,41,37,42,36,43,35,1,34,2,33,3,32,4,31,5,30,6,29,7,28,8,27,9,26,10,25,11,44);
		else if ($_SESSION['gameid'] == 40)
			$_SESSION['combo'] = array(40,41,39,42,38,43,37,1,36,2,35,3,34,4,33,5,32,6,31,7,30,8,29,9,28,10,27,11,26,12,44);
		else if ($_SESSION['gameid'] == 41)
			$_SESSION['combo'] = array(41,42,40,43,39,1,38,2,37,3,36,4,35,5,34,6,33,7,32,8,31,9,30,10,29,11,28,12,27,13,44);
		else if ($_SESSION['gameid'] == 42)
			$_SESSION['combo'] = array(42,43,41,1,40,2,39,3,38,4,37,5,36,6,35,7,34,8,33,9,32,10,31,11,30,12,29,13,28,14,44);
		else if ($_SESSION['gameid'] == 43)
			$_SESSION['combo'] = array(43,1,42,2,41,3,40,4,39,5,38,6,37,7,36,8,35,9,34,10,33,11,32,12,31,13,30,14,29,15,44);
		*/
		else
			$_SESSION['combo'] = array(2,11,31,9,21,14,34,12,32,5,4,20,17,35,13,18,25,33,24,7,23,22,8,10,15,27,28,19,29,16,36);

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

	/*if (($_SESSION['gameid'] <=10) && ($_SESSION['counter'] == 20))
	{
		$_SESSION['selection'][10] = $gate;
		$_SESSION['timemillis'][10] = time()-$_SESSION['pretime'];
		$_SESSION['guard'][10][1] = $pgate1;
		$_SESSION['guard'][10][2] = $pgate2;
		$_SESSION['guard'][10][3] = $pgate3;
	}
	else
	{*/
		$_SESSION['selection'][$_SESSION['combo'][$_SESSION['position'] - 1]] = $gate;
		$_SESSION['timemillis'][$_SESSION['combo'][$_SESSION['position'] - 1]] = time()-$_SESSION['pretime'];
		$_SESSION['guard'][$_SESSION['combo'][$_SESSION['position'] - 1]][1] = $pgate1;
		$_SESSION['guard'][$_SESSION['combo'][$_SESSION['position'] - 1]][2] = $pgate2;
		$_SESSION['guard'][$_SESSION['combo'][$_SESSION['position'] - 1]][3] = $pgate3;
//	}
	
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
		for ($i = 1, $j = 1; (($i <= $maxround) && ($j <= $curround)); $i++)
		{
			/*if (($i == 11) && ($_SESSION['gameid'] <= 10))
			{
				$i = 1;
				$maxround = 10;
			}*/
			
			?>
			<?php if ($_SESSION['selection'][$i] > 0) { 
				$data = $data.$_SESSION['selection'][$i].",";
				$time = $time.",".$_SESSION['timemillis'][$i];
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

						/*
						if (($_SESSION['combo'][$j - 2] == 1) || ($_SESSION['combo'][$j - 2] == 2) || ($_SESSION['combo'][$j - 2] == 3) || ($_SESSION['combo'][$j - 2] == 4) || ($_SESSION['combo'][$j - 2] == 5) || ($_SESSION['combo'][$j - 2] == 6) || ($_SESSION['combo'][$j - 2] == 7))*/
						if (($_SESSION['combo'][$j - 2] == 1) || ($_SESSION['combo'][$j - 2] == 2) || ($_SESSION['combo'][$j - 2] == 3) || ($_SESSION['combo'][$j - 2] == 4) || ($_SESSION['combo'][$j - 2] == 5))
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
						/*
						else if (($_SESSION['combo'][$j - 2] == 8) || ($_SESSION['combo'][$j - 2] == 9) || ($_SESSION['combo'][$j - 2] == 10) || ($_SESSION['combo'][$j - 2] == 11) || ($_SESSION['combo'][$j - 2] == 12) || ($_SESSION['combo'][$j - 2] == 13) || ($_SESSION['combo'][$j - 2] == 14))*/
						else if (($_SESSION['combo'][$j - 2] == 6) || ($_SESSION['combo'][$j - 2] == 7) || ($_SESSION['combo'][$j - 2] == 8) || ($_SESSION['combo'][$j - 2] == 9) || ($_SESSION['combo'][$j - 2] == 10))
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
						/*
						else if (($_SESSION['combo'][$j - 2] == 15) || ($_SESSION['combo'][$j - 2] == 16) || ($_SESSION['combo'][$j - 2] == 17) || ($_SESSION['combo'][$j - 2] == 18) || ($_SESSION['combo'][$j - 2] == 19) || ($_SESSION['combo'][$j - 2] == 20) || ($_SESSION['combo'][$j - 2] == 21))*/
						else if (($_SESSION['combo'][$j - 2] == 11) || ($_SESSION['combo'][$j - 2] == 12) || ($_SESSION['combo'][$j - 2] == 13) || ($_SESSION['combo'][$j - 2] == 14) || ($_SESSION['combo'][$j - 2] == 15))
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
						/*
						else if (($_SESSION['combo'][$j - 2] == 22) || ($_SESSION['combo'][$j - 2] == 23) || ($_SESSION['combo'][$j - 2] == 24) || ($_SESSION['combo'][$j - 2] == 25) || ($_SESSION['combo'][$j - 2] == 26) || ($_SESSION['combo'][$j - 2] == 27) || ($_SESSION['combo'][$j - 2] == 28))*/						
						else if (($_SESSION['combo'][$j - 2] == 16) || ($_SESSION['combo'][$j - 2] == 17) || ($_SESSION['combo'][$j - 2] == 18) || ($_SESSION['combo'][$j - 2] == 19) || ($_SESSION['combo'][$j - 2] == 20))
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
						/*
						else if (($_SESSION['combo'][$j - 2] == 29) || ($_SESSION['combo'][$j - 2] == 30) || ($_SESSION['combo'][$j - 2] == 31) || ($_SESSION['combo'][$j - 2] == 32) || ($_SESSION['combo'][$j - 2] == 33))*/
						else if (($_SESSION['combo'][$j - 2] == 21) || ($_SESSION['combo'][$j - 2] == 22) || ($_SESSION['combo'][$j - 2] == 23) || ($_SESSION['combo'][$j - 2] == 24) || ($_SESSION['combo'][$j - 2] == 25))
						{
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 1;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 9;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 5;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 6;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 7;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 1;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 10;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 3;
						}
						/*
						else if (($_SESSION['combo'][$j - 2] == 34) || ($_SESSION['combo'][$j - 2] == 35) || ($_SESSION['combo'][$j - 2] == 36) || ($_SESSION['combo'][$j - 2] == 37) || ($_SESSION['combo'][$j - 2] == 38))*/
						else if (($_SESSION['combo'][$j - 2] == 26) || ($_SESSION['combo'][$j - 2] == 27) || ($_SESSION['combo'][$j - 2] == 28) || ($_SESSION['combo'][$j - 2] == 29) || ($_SESSION['combo'][$j - 2] == 30))
						{
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 8;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 5;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 10;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 1;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 9;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 4;
						}
						/*
						else if (($_SESSION['combo'][$j - 2] == 39) || ($_SESSION['combo'][$j - 2] == 40) || ($_SESSION['combo'][$j - 2] == 41) || ($_SESSION['combo'][$j - 2] == 42) || ($_SESSION['combo'][$j - 2] == 43))*/
						else if (($_SESSION['combo'][$j - 2] == 31) || ($_SESSION['combo'][$j - 2] == 32) || ($_SESSION['combo'][$j - 2] == 33) || ($_SESSION['combo'][$j - 2] == 34) || ($_SESSION['combo'][$j - 2] == 35))
						{
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = 8;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = 5;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = 2;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = 10;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = 1;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = 3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = 9;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = 4;
						}
						$tpoints += $points;
					} else {
						$tlost++;
						$won = "No";
						$lost = "Yes";

						/*
						if (($_SESSION['combo'][$j - 2] == 1) || ($_SESSION['combo'][$j - 2] == 2) || ($_SESSION['combo'][$j - 2] == 3) || ($_SESSION['combo'][$j - 2] == 4) || ($_SESSION['combo'][$j - 2] == 5) || ($_SESSION['combo'][$j - 2] == 6) || ($_SESSION['combo'][$j - 2] == 7))*/
						if (($_SESSION['combo'][$j - 2] == 1) || ($_SESSION['combo'][$j - 2] == 2) || ($_SESSION['combo'][$j - 2] == 3) || ($_SESSION['combo'][$j - 2] == 4) || ($_SESSION['combo'][$j - 2] == 5))
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
						/*
						else if (($_SESSION['combo'][$j - 2] == 8) || ($_SESSION['combo'][$j - 2] == 9) || ($_SESSION['combo'][$j - 2] == 10) || ($_SESSION['combo'][$j - 2] == 11) || ($_SESSION['combo'][$j - 2] == 12) || ($_SESSION['combo'][$j - 2] == 13) || ($_SESSION['combo'][$j - 2] == 14))*/
						else if (($_SESSION['combo'][$j - 2] == 6) || ($_SESSION['combo'][$j - 2] == 7) || ($_SESSION['combo'][$j - 2] == 8) || ($_SESSION['combo'][$j - 2] == 9) || ($_SESSION['combo'][$j - 2] == 10))
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
						/*
						else if (($_SESSION['combo'][$j - 2] == 15) || ($_SESSION['combo'][$j - 2] == 16) || ($_SESSION['combo'][$j - 2] == 17) || ($_SESSION['combo'][$j - 2] == 18) || ($_SESSION['combo'][$j - 2] == 19) || ($_SESSION['combo'][$j - 2] == 20) || ($_SESSION['combo'][$j - 2] == 21))*/
						else if (($_SESSION['combo'][$j - 2] == 11) || ($_SESSION['combo'][$j - 2] == 12) || ($_SESSION['combo'][$j - 2] == 13) || ($_SESSION['combo'][$j - 2] == 14) || ($_SESSION['combo'][$j - 2] == 15))
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
						/*
						else if (($_SESSION['combo'][$j - 2] == 22) || ($_SESSION['combo'][$j - 2] == 23) || ($_SESSION['combo'][$j - 2] == 24) || ($_SESSION['combo'][$j - 2] == 25) || ($_SESSION['combo'][$j - 2] == 26) || ($_SESSION['combo'][$j - 2] == 27) || ($_SESSION['combo'][$j - 2] == 28))*/						
						else if (($_SESSION['combo'][$j - 2] == 16) || ($_SESSION['combo'][$j - 2] == 17) || ($_SESSION['combo'][$j - 2] == 18) || ($_SESSION['combo'][$j - 2] == 19) || ($_SESSION['combo'][$j - 2] == 20))
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
						/*
						else if (($_SESSION['combo'][$j - 2] == 29) || ($_SESSION['combo'][$j - 2] == 30) || ($_SESSION['combo'][$j - 2] == 31) || ($_SESSION['combo'][$j - 2] == 32) || ($_SESSION['combo'][$j - 2] == 33))*/
						else if (($_SESSION['combo'][$j - 2] == 21) || ($_SESSION['combo'][$j - 2] == 22) || ($_SESSION['combo'][$j - 2] == 23) || ($_SESSION['combo'][$j - 2] == 24) || ($_SESSION['combo'][$j - 2] == 25))
						{
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -2;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -4;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = -2;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = -4;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = -3;
						}
						/*
						else if (($_SESSION['combo'][$j - 2] == 34) || ($_SESSION['combo'][$j - 2] == 35) || ($_SESSION['combo'][$j - 2] == 36) || ($_SESSION['combo'][$j - 2] == 37) || ($_SESSION['combo'][$j - 2] == 38))*/
						else if (($_SESSION['combo'][$j - 2] == 26) || ($_SESSION['combo'][$j - 2] == 27) || ($_SESSION['combo'][$j - 2] == 28) || ($_SESSION['combo'][$j - 2] == 29) || ($_SESSION['combo'][$j - 2] == 30))
						{
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -2;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -2;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = -3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = -2;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "8") $points = -3;
						}
						/*
						else if (($_SESSION['combo'][$j - 2] == 39) || ($_SESSION['combo'][$j - 2] == 40) || ($_SESSION['combo'][$j - 2] == 41) || ($_SESSION['combo'][$j - 2] == 42) || ($_SESSION['combo'][$j - 2] == 43))*/
						else if (($_SESSION['combo'][$j - 2] == 31) || ($_SESSION['combo'][$j - 2] == 32) || ($_SESSION['combo'][$j - 2] == 33) || ($_SESSION['combo'][$j - 2] == 34) || ($_SESSION['combo'][$j - 2] == 35))
						{
							if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "1") $points = -3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "2") $points = -3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "3") $points = -3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "4") $points = -3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "5") $points = -3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "6") $points = -3;
							else if ($_SESSION['selection'][$_SESSION['combo'][$j - 2]] == "7") $points = -3;
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

<?php if (($_SESSION['counter'] == 0) || ($_SESSION['counter'] == 1) || ($_SESSION['counter'] == 2) || ($_SESSION['counter'] == 3) || ($_SESSION['counter'] == 4)) { ?>
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

<?php if (($_SESSION['counter'] == 5) || ($_SESSION['counter'] == 6) || ($_SESSION['counter'] == 7) || ($_SESSION['counter'] == 8) || ($_SESSION['counter'] == 9)) { ?>
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

<?php if (($_SESSION['counter'] == 10) || ($_SESSION['counter'] == 11) || ($_SESSION['counter'] == 12) || ($_SESSION['counter'] == 13) || ($_SESSION['counter'] == 14)) { ?>
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

<?php if (($_SESSION['counter'] == 15) || ($_SESSION['counter'] == 16) || ($_SESSION['counter'] == 17) || ($_SESSION['counter'] == 18) || ($_SESSION['counter'] == 19)) { ?>
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

<?php if (($_SESSION['counter'] == 20) || ($_SESSION['counter'] == 21) || ($_SESSION['counter'] == 22) || ($_SESSION['counter'] == 23) || ($_SESSION['counter'] == 24)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left">Your Rewards</td>
		<td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
		<td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
		<td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
		<td valign="bottom">6<br/><img src="Images/w6.jpg"></td>
		<td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
		<td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
		<td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
		<td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left">Your Penalties</td>
		<td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
		<td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
		<td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
		<td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 25) || ($_SESSION['counter'] == 26) || ($_SESSION['counter'] == 27) || ($_SESSION['counter'] == 28) || ($_SESSION['counter'] == 29)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left">Your Rewards</td>
		<td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
		<td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
		<td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
		<td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
		<td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
		<td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
		<td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
		<td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left">Your Penalties</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
		<td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
		<td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
		<td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 30) || ($_SESSION['counter'] == 31) || ($_SESSION['counter'] == 32) || ($_SESSION['counter'] == 33) || ($_SESSION['counter'] == 34)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left">Your Rewards</td>
		<td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
		<td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
		<td valign="bottom">2<br/><img src="Images/w2.jpg"></td>
		<td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
		<td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
		<td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
		<td valign="bottom">9<br/><img src="Images/w9.jpg"></td>
		<td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left">Your Penalties</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
		<td valign="top"><img src="Images/l3.jpg"><br/>-3</td>
	</tr>
<?php } ?>

<?php if ($_SESSION['counter'] == 0) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.61<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.83<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.74<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.30<br/><img src="Images/pn3.jpg"></td>
		<td valign="bottom">0.74<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.39</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.17</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.26</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.70</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.26</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
	</tr>	
<?php } else if ($_SESSION['counter'] == 1) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.43<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.83<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.59<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.62<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.57</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.17</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.41</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.38</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 2) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.43<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.38<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.82<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.78<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.48<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.89<br/><img src="Images/pn9.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.57</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.62</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.18</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.22</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.52</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.34</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.11</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 3) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.51<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.47<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.85<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.41<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.63<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.93<br/><img src="Images/pn9.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.49</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.53</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.15</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.59</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.37</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.07</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 4) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.43<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.42<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.82<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.79<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.53<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.70<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.82<br/><img src="Images/pn8.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.57</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.58</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.18</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.21</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.47</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.30</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.18</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 5) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.08<br/><img src="Images/pn1.jpg"></td>
		<td valign="bottom">0.93<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.41<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.95<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.48<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.77<br/><img src="Images/pn8.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
		<td valign="top"><img src="Images/p9.jpg"><br/>0.92</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.07</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.34</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.59</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.05</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.52</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.23</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 6) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.90<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.61<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.35<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.93<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.43<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.10</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.39</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.65</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.07</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.57</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 7) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.52<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.91<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.26<br/><img src="Images/pn3.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.30<br/><img src="Images/pn3.jpg"></td>
		<td valign="bottom">0.98<br/><img src="Images/pn10.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.48</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.09</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.74</td>
		<td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.70</td>
		<td valign="top"><img src="Images/p0.jpg"><br/>0.02</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 8) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.58<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.22<br/><img src="Images/pn2.jpg"></td>
		<td valign="bottom">0.91<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.53<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.36<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.40<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.42</td>
		<td valign="top"><img src="Images/p8.jpg"><br/>0.78</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.09</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.47</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.64</td>
		<td valign="top"><!--img src="Images/p2.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.60</td>
		<td valign="top"><!--img src="Images/p8.jpg"--><br/>0.00</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 9) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.47<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.48<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.79<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.36<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.42<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.53</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.52</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.21</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.64</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.58</td>
		<td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 10) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.58<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.71<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.81<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.91<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.22<br/><img src="Images/pn2.jpg"></td>
		<td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.29<br/><img src="Images/pn3.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.42</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.29</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.19</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.09</td>
		<td valign="top"><img src="Images/p8.jpg"><br/>0.78</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.71</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 11) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.54<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.62<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.77<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.88<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.20<br/><img src="Images/pn2.jpg"></td>
		<td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.60<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.46</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.38</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.23</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.12</td>
		<td valign="top"><img src="Images/p8.jpg"><br/>0.80</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.34</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.40</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 12) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.52<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.58<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.93<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.19<br/><img src="Images/pn2.jpg"></td>
		<td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.58<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.48</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.42</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.07</td>
		<td valign="top"><img src="Images/p8.jpg"><br/>0.81</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.42</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 13) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.47<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.63<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.88<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.75<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.94<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.28<br/><img src="Images/pn3.jpg"></td>
		<td valign="bottom">0.69<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.36<br/><img src="Images/pn4.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.53</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.37</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.12</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.25</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.06</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.72</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.31</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.64</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 14) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.80<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.87<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.28<br/><img src="Images/pn3.jpg"></td>
		<td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.63<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
		<td valign="top"><img src="Images/p8.jpg"><br/>0.20</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.13</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.72</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.37</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 15) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.78<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.67<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.92<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.10<br/><img src="Images/pn1.jpg"></td>
		<td valign="bottom">0.62<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.22</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.33</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.08</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
		<td valign="top"><img src="Images/p9.jpg"><br/>0.90</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.38</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 16) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.63<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.70<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.63<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.90<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.39<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.51<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.37</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.30</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.37</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.10</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.61</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.49</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 17) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.58<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.79<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.50<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.96<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.33<br/><img src="Images/pn3.jpg"></td>
		<td valign="bottom">0.39<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.53<br/><img src="Images/pn5.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.42</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.21</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.50</td>
		<td valign="top"><img src="Images/p0.jpg"><br/>0.04</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.67</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.61</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.47</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 18) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.78<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.63<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.81<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.95<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.42<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.31<br/><img src="Images/pn3.jpg"></td>
		<td valign="bottom">0.54<br/><img src="Images/pn5.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.22</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.37</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.19</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.05</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.58</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.69</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.46</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 19) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.67<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.70<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.81<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.38<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.58<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.34</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.33</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.30</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.19</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.62</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.42</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 20) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.83<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.51<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.59<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.54<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.48<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.17</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.49</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.41</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.46</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.52</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 21) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.77<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.83<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.50<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.50<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.77<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.68<br/><img src="Images/pn7.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.23</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.17</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.50</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.50</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.23</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.32</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 22) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.35<br/><img src="Images/pn3.jpg"></td>
		<td valign="bottom">0.76<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.36<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.48<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.45<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.60<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.65</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.24</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.64</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.52</td>
		<td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.55</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.40</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 23) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.41<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.54<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.44<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.39<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.59</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.46</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.56</td>
		<td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.61</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 24) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.88<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.38<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.84<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.45<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.48<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.43<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.54<br/><img src="Images/pn5.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.12</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.62</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.16</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.55</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.52</td>
		<td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.57</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.46</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 25) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.51<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.54<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.80<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.33<br/><img src="Images/pn3.jpg"></td>
		<td valign="bottom">0.95<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.79<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.36<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.49</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.46</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.20</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.67</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.05</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.21</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.64</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 26) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.47<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.94<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.45<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.93<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.37<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.65<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.53</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.06</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.55</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.07</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.63</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.35</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 27) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.42<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.45<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.47<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.69<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.38<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.59<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.58</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.55</td>
		<td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.53</td>
		<td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.31</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.62</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.41</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 28) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.45<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.81<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.32<br/><img src="Images/pn3.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.81<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.35<br/><img src="Images/pn3.jpg"></td>
		<td valign="bottom">0.70<br/><img src="Images/pn7.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.55</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.19</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.68</td>
		<td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.19</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.65</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.30</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 29) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.42<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.41<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.40<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.91<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.34<br/><img src="Images/pn3.jpg"></td>
		<td valign="bottom">0.62<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.58</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.59</td>
		<td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.60</td>
		<td valign="top"><!--img src="Images/p1.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.19</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.66</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.38</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 30) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.60<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.82<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.40<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.91<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.73<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.43<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.65<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.40</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.18</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.60</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.09</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.27</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.57</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.35</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 31) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.44<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.97<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.40<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.89<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.69<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.42<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.62<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.56</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
		<td valign="top"><img src="Images/p0.jpg"><br/>0.03</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.60</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.11</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.31</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.58</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.38</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 32) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.44<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.53<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.42<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.66<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.46<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.56</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.47</td>
		<td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.58</td>
		<td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.34</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.54</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 33) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.41<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.90<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.35<br/><img src="Images/pn3.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.75<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.38<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.59</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.10</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.65</td>
		<td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.25</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.62</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 34) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.41<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/pn10.jpg"></td>
		<td valign="bottom">0.37<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.92<br/><img src="Images/pn9.jpg"></td>
		<td valign="bottom">0.78<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.40<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.56<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.59</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
		<td valign="top"><!--img src="Images/p0.jpg"--><br/>0.00</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.63</td>
		<td valign="top"><img src="Images/p1.jpg"><br/>0.08</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.22</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.60</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.44</td>
	</tr>
<?php } else if ($_SESSION['counter'] < $maxround) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.61<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.49<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.83<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.74<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.57<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.30<br/><img src="Images/pn3.jpg"></td>
		<td valign="bottom">0.74<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.39</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.51</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.17</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.26</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.43</td>
		<td valign="top"><img src="Images/p7.jpg"><br/>0.70</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.26</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 0) || ($_SESSION['counter'] == 1) || ($_SESSION['counter'] == 2) || ($_SESSION['counter'] == 3) || ($_SESSION['counter'] == 4)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>2</td><td>6</td><td>7</td><td>7</td><td>8</td><td>8</td><td>6</td><td>9</td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-8</td><td>-10</td><td>-3</td><td>-1</td><td>-10</td><td>-5</td><td>-2</td><td>-5</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 5) || ($_SESSION['counter'] == 6) || ($_SESSION['counter'] == 7) || ($_SESSION['counter'] == 8) || ($_SESSION['counter'] == 9)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>3</td><td>8</td><td>9</td><td>9</td><td>7</td><td>7</td><td>4</td><td>1</td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-10</td><td>-2</td><td>-5</td><td>-1</td><td>-7</td><td>-6</td><td>-2</td><td>-1</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 10) || ($_SESSION['counter'] == 11) || ($_SESSION['counter'] == 12) || ($_SESSION['counter'] == 13) || ($_SESSION['counter'] == 14)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>5</td><td>3</td><td>8</td><td>3</td><td>3</td><td>4</td><td>3</td><td>6</td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-2</td><td>-5</td><td>-4</td><td>-6</td><td>-3</td><td>-10</td><td>-7</td><td>-2</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 15) || ($_SESSION['counter'] == 16) || ($_SESSION['counter'] == 17) || ($_SESSION['counter'] == 18) || ($_SESSION['counter'] == 19)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>5</td><td>9</td><td>10</td><td>2</td><td>10</td><td>4</td><td>8</td><td>8</td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-10</td><td>-4</td><td>-9</td><td>-3</td><td>-10</td><td>-10</td><td>-2</td><td>-5</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 20) || ($_SESSION['counter'] == 21) || ($_SESSION['counter'] == 22) || ($_SESSION['counter'] == 23) || ($_SESSION['counter'] == 24)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>1</td><td>4</td><td>2</td><td>3</td><td>4</td><td>1</td><td>5</td><td>2</td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-5</td><td>-8</td><td>-1</td><td>-6</td><td>-5</td><td>-1</td><td>-7</td><td>-7</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 25) || ($_SESSION['counter'] == 26) || ($_SESSION['counter'] == 27) || ($_SESSION['counter'] == 28) || ($_SESSION['counter'] == 29)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>4</td><td>3</td><td>1</td><td>5</td><td>1</td><td>2</td><td>5</td><td>2</td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-8</td><td>-10</td><td>-1</td><td>-8</td><td>-1</td><td>-3</td><td>-11</td><td>-5</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 30) || ($_SESSION['counter'] == 31) || ($_SESSION['counter'] == 32) || ($_SESSION['counter'] == 33) || ($_SESSION['counter'] == 34)) { ?>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>4</td><td>3</td><td>1</td><td>5</td><td>1</td><td>2</td><td>5</td><td>2</td>
	</tr>
	<tr align="center" style="font-size: large">
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-8</td><td>-5</td><td>-1</td><td>-10</td><td>-5</td><td>-3</td><td>-9</td><td>-6</td>
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