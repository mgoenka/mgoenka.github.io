<?php
	session_start();
	$maxround = 10;

	$gate = $_REQUEST['gate'];

	do
	{
	
	if ($_SESSION['counter'] == 0)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 54)
			$pgate1 = "1";
		else if ($pirate1 < 70)
			$pgate1 = "2";
		else if ($pirate1 < 166)
			$pgate1 = "3";
		else if ($pirate1 < 202)
			$pgate1 = "4";
		else if ($pirate1 < 212)
			$pgate1 = "5";
		else if ($pirate1 < 269)
			$pgate1 = "6";
		else if ($pirate1 < 293)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 54)
			$pgate2 = "1";
		else if ($pirate2 < 70)
			$pgate2 = "2";
		else if ($pirate2 < 166)
			$pgate2 = "3";
		else if ($pirate2 < 202)
			$pgate2 = "4";
		else if ($pirate2 < 212)
			$pgate2 = "5";
		else if ($pirate2 < 269)
			$pgate2 = "6";
		else if ($pirate2 < 293)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 54)
			$pgate3 = "1";
		else if ($pirate3 < 70)
			$pgate3 = "2";
		else if ($pirate3 < 166)
			$pgate3 = "3";
		else if ($pirate3 < 202)
			$pgate3 = "4";
		else if ($pirate3 < 212)
			$pgate3 = "5";
		else if ($pirate3 < 269)
			$pgate3 = "6";
		else if ($pirate3 < 293)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 1)
	{
		$pirate1 = rand(0, 200);
		$pirate2 = rand(0, 200);
		$pirate3 = rand(0, 200);
		if ($pirate1 < 48)
			$pgate1 = "1";
		else if ($pirate1 < 65)
			$pgate1 = "2";
		else if ($pirate1 < 74)
			$pgate1 = "3";
		else if ($pirate1 < 105)
			$pgate1 = "4";
		else if ($pirate1 < 174)
			$pgate1 = "5";
		else if ($pirate1 < 195)
			$pgate1 = "6";
		else
			$pgate1 = "7";
		if ($pirate2 < 48)
			$pgate2 = "1";
		else if ($pirate2 < 65)
			$pgate2 = "2";
		else if ($pirate2 < 74)
			$pgate2 = "3";
		else if ($pirate2 < 105)
			$pgate2 = "4";
		else if ($pirate2 < 174)
			$pgate2 = "5";
		else if ($pirate2 < 195)
			$pgate2 = "6";
		else
			$pgate2 = "7";
		$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 2)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 18)
			$pgate1 = "1";
		else if ($pirate1 < 50)
			$pgate1 = "2";
		else if ($pirate1 < 131)
			$pgate1 = "3";
		else if ($pirate1 < 181)
			$pgate1 = "4";
		else if ($pirate1 < 202)
			$pgate1 = "5";
		else if ($pirate1 < 249)
			$pgate1 = "6";
		else if ($pirate1 < 292)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 18)
			$pgate2 = "1";
		else if ($pirate2 < 50)
			$pgate2 = "2";
		else if ($pirate2 < 131)
			$pgate2 = "3";
		else if ($pirate2 < 181)
			$pgate2 = "4";
		else if ($pirate2 < 202)
			$pgate2 = "5";
		else if ($pirate2 < 249)
			$pgate2 = "6";
		else if ($pirate2 < 292)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 18)
			$pgate3 = "1";
		else if ($pirate3 < 50)
			$pgate3 = "2";
		else if ($pirate3 < 131)
			$pgate3 = "3";
		else if ($pirate3 < 181)
			$pgate3 = "4";
		else if ($pirate3 < 202)
			$pgate3 = "5";
		else if ($pirate3 < 249)
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
		if ($pirate1 < 61)
			$pgate1 = "1";
		else if ($pirate1 < 91)
			$pgate1 = "2";
		else if ($pirate1 < 108)
			$pgate1 = "3";
		else if ($pirate1 < 156)
			$pgate1 = "4";
		else if ($pirate1 < 171)
			$pgate1 = "5";
		else if ($pirate1 < 206)
			$pgate1 = "6";
		else if ($pirate1 < 220)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 61)
			$pgate2 = "1";
		else if ($pirate2 < 91)
			$pgate2 = "2";
		else if ($pirate2 < 108)
			$pgate2 = "3";
		else if ($pirate2 < 156)
			$pgate2 = "4";
		else if ($pirate2 < 171)
			$pgate2 = "5";
		else if ($pirate2 < 206)
			$pgate2 = "6";
		else if ($pirate2 < 220)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 61)
			$pgate3 = "1";
		else if ($pirate3 < 91)
			$pgate3 = "2";
		else if ($pirate3 < 108)
			$pgate3 = "3";
		else if ($pirate3 < 156)
			$pgate3 = "4";
		else if ($pirate3 < 171)
			$pgate3 = "5";
		else if ($pirate3 < 206)
			$pgate3 = "6";
		else if ($pirate3 < 220)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 4)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 7)
			$pgate1 = "1";
		else if ($pirate1 < 42)
			$pgate1 = "2";
		else if ($pirate1 < 111)
			$pgate1 = "3";
		else if ($pirate1 < 169)
			$pgate1 = "4";
		else if ($pirate1 < 192)
			$pgate1 = "5";
		else if ($pirate1 < 252)
			$pgate1 = "6";
		else if ($pirate1 < 299)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 7)
			$pgate2 = "1";
		else if ($pirate2 < 42)
			$pgate2 = "2";
		else if ($pirate2 < 111)
			$pgate2 = "3";
		else if ($pirate2 < 169)
			$pgate2 = "4";
		else if ($pirate2 < 192)
			$pgate2 = "5";
		else if ($pirate2 < 252)
			$pgate2 = "6";
		else if ($pirate2 < 299)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 7)
			$pgate3 = "1";
		else if ($pirate3 < 42)
			$pgate3 = "2";
		else if ($pirate3 < 111)
			$pgate3 = "3";
		else if ($pirate3 < 169)
			$pgate3 = "4";
		else if ($pirate3 < 192)
			$pgate3 = "5";
		else if ($pirate3 < 252)
			$pgate3 = "6";
		else if ($pirate3 < 299)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 5)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 72)
			$pgate1 = "1";
		else if ($pirate1 < 107)
			$pgate1 = "2";
		else if ($pirate1 < 128)
			$pgate1 = "3";
		else if ($pirate1 < 172)
			$pgate1 = "4";
		else if ($pirate1 < 191)
			$pgate1 = "5";
		else if ($pirate1 < 232)
			$pgate1 = "6";
		else if ($pirate1 < 249)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 72)
			$pgate2 = "1";
		else if ($pirate2 < 107)
			$pgate2 = "2";
		else if ($pirate2 < 128)
			$pgate2 = "3";
		else if ($pirate2 < 172)
			$pgate2 = "4";
		else if ($pirate2 < 191)
			$pgate2 = "5";
		else if ($pirate2 < 232)
			$pgate2 = "6";
		else if ($pirate2 < 249)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 72)
			$pgate3 = "1";
		else if ($pirate3 < 107)
			$pgate3 = "2";
		else if ($pirate3 < 128)
			$pgate3 = "3";
		else if ($pirate3 < 172)
			$pgate3 = "4";
		else if ($pirate3 < 191)
			$pgate3 = "5";
		else if ($pirate3 < 232)
			$pgate3 = "6";
		else if ($pirate3 < 249)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 6)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 10)
			$pgate1 = "1";
		else if ($pirate1 < 42)
			$pgate1 = "2";
		else if ($pirate1 < 126)
			$pgate1 = "3";
		else if ($pirate1 < 178)
			$pgate1 = "4";
		else if ($pirate1 < 200)
			$pgate1 = "5";
		else if ($pirate1 < 254)
			$pgate1 = "6";
		else if ($pirate1 < 296)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 10)
			$pgate2 = "1";
		else if ($pirate2 < 42)
			$pgate2 = "2";
		else if ($pirate2 < 126)
			$pgate2 = "3";
		else if ($pirate2 < 178)
			$pgate2 = "4";
		else if ($pirate2 < 200)
			$pgate2 = "5";
		else if ($pirate2 < 254)
			$pgate2 = "6";
		else if ($pirate2 < 296)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 10)
			$pgate3 = "1";
		else if ($pirate3 < 42)
			$pgate3 = "2";
		else if ($pirate3 < 126)
			$pgate3 = "3";
		else if ($pirate3 < 178)
			$pgate3 = "4";
		else if ($pirate3 < 200)
			$pgate3 = "5";
		else if ($pirate3 < 254)
			$pgate3 = "6";
		else if ($pirate3 < 296)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 7)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 61)
			$pgate1 = "1";
		else if ($pirate1 < 89)
			$pgate1 = "2";
		else if ($pirate1 < 105)
			$pgate1 = "3";
		else if ($pirate1 < 151)
			$pgate1 = "4";
		else if ($pirate1 < 165)
			$pgate1 = "5";
		else if ($pirate1 < 199)
			$pgate1 = "6";
		else if ($pirate1 < 212)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 61)
			$pgate2 = "1";
		else if ($pirate2 < 89)
			$pgate2 = "2";
		else if ($pirate2 < 105)
			$pgate2 = "3";
		else if ($pirate2 < 151)
			$pgate2 = "4";
		else if ($pirate2 < 165)
			$pgate2 = "5";
		else if ($pirate2 < 199)
			$pgate2 = "6";
		else if ($pirate2 < 212)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 61)
			$pgate3 = "1";
		else if ($pirate3 < 89)
			$pgate3 = "2";
		else if ($pirate3 < 105)
			$pgate3 = "3";
		else if ($pirate3 < 151)
			$pgate3 = "4";
		else if ($pirate3 < 165)
			$pgate3 = "5";
		else if ($pirate3 < 199)
			$pgate3 = "6";
		else if ($pirate3 < 212)
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
		else if ($pirate1 < 89)
			$pgate1 = "2";
		else if ($pirate1 < 153)
			$pgate1 = "3";
		else if ($pirate1 < 201)
			$pgate1 = "4";
		else if ($pirate1 < 237)
			$pgate1 = "5";
		else if ($pirate1 <= 300)
			$pgate1 = "6";
		else if ($pirate1 < 300)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 73)
			$pgate2 = "1";
		else if ($pirate2 < 89)
			$pgate2 = "2";
		else if ($pirate2 < 153)
			$pgate2 = "3";
		else if ($pirate2 < 201)
			$pgate2 = "4";
		else if ($pirate2 < 237)
			$pgate2 = "5";
		else if ($pirate2 <= 300)
			$pgate2 = "6";
		else if ($pirate2 < 300)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 73)
			$pgate3 = "1";
		else if ($pirate3 < 89)
			$pgate3 = "2";
		else if ($pirate3 < 153)
			$pgate3 = "3";
		else if ($pirate3 < 201)
			$pgate3 = "4";
		else if ($pirate3 < 237)
			$pgate3 = "5";
		else if ($pirate3 <= 300)
			$pgate3 = "6";
		else if ($pirate3 < 300)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if ($_SESSION['counter'] == 9)
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
		if ($pirate1 < 65)
			$pgate1 = "1";
		else if ($pirate1 < 104)
			$pgate1 = "2";
		else if ($pirate1 < 138)
			$pgate1 = "3";
		else if ($pirate1 < 138)
			$pgate1 = "4";
		else if ($pirate1 < 179)
			$pgate1 = "5";
		else if ($pirate1 < 198)
			$pgate1 = "6";
		else if ($pirate1 < 224)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 65)
			$pgate2 = "1";
		else if ($pirate2 < 104)
			$pgate2 = "2";
		else if ($pirate2 < 138)
			$pgate2 = "3";
		else if ($pirate2 < 138)
			$pgate2 = "4";
		else if ($pirate2 < 179)
			$pgate2 = "5";
		else if ($pirate2 < 198)
			$pgate2 = "6";
		else if ($pirate2 < 224)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 65)
			$pgate3 = "1";
		else if ($pirate3 < 104)
			$pgate3 = "2";
		else if ($pirate3 < 138)
			$pgate3 = "3";
		else if ($pirate3 < 138)
			$pgate3 = "4";
		else if ($pirate3 < 179)
			$pgate3 = "5";
		else if ($pirate3 < 198)
			$pgate3 = "6";
		else if ($pirate3 < 224)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}
	else if (($_SESSION['counter'] < $maxround))
	{
		$pirate1 = rand(0, 300);
		$pirate2 = rand(0, 300);
		$pirate3 = rand(0, 300);
	
		if ($pirate1 < 54)
			$pgate1 = "1";
		else if ($pirate1 < 70)
			$pgate1 = "2";
		else if ($pirate1 < 166)
			$pgate1 = "3";
		else if ($pirate1 < 202)
			$pgate1 = "4";
		else if ($pirate1 < 212)
			$pgate1 = "5";
		else if ($pirate1 < 269)
			$pgate1 = "6";
		else if ($pirate1 < 293)
			$pgate1 = "7";
		else
			$pgate1 = "8";
		if ($pirate2 < 54)
			$pgate2 = "1";
		else if ($pirate2 < 70)
			$pgate2 = "2";
		else if ($pirate2 < 166)
			$pgate2 = "3";
		else if ($pirate2 < 202)
			$pgate2 = "4";
		else if ($pirate2 < 212)
			$pgate2 = "5";
		else if ($pirate2 < 269)
			$pgate2 = "6";
		else if ($pirate2 < 293)
			$pgate2 = "7";
		else
			$pgate2 = "8";
		if ($pirate3 < 54)
			$pgate3 = "1";
		else if ($pirate3 < 70)
			$pgate3 = "2";
		else if ($pirate3 < 166)
			$pgate3 = "3";
		else if ($pirate3 < 202)
			$pgate3 = "4";
		else if ($pirate3 < 212)
			$pgate3 = "5";
		else if ($pirate3 < 269)
			$pgate3 = "6";
		else if ($pirate3 < 293)
			$pgate3 = "7";
		else
			$pgate3 = "8";
	}

	} while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

	if(!isset($_SESSION['counter']))
	{
		//Code for combination generator
		//Randomly generated indices are from 1 to 10...assigned as 0 to 9
		//Specify data for index $maxround at the end

		$keys = array();
		
		while(count($keys) < 10) {
			$x = mt_rand(0, 9);
			if(!in_array($x, $keys)) {
				$keys[] = $x;
			}
		}

		$j = 0;
		foreach($keys as $key){
			$_SESSION['combo'][$j++] = $key;
		}

		$_SESSION['combo'][$j] = 10;

		foreach($_SESSION['combo'] as $key){
			echo $key;
		}

		$_SESSION['position'] = 1;
		$_SESSION['counter'] = $_SESSION['combo'][$_SESSION['position']];
		$_SESSION['won'] = 0;
		$_SESSION['lost'] = 0;
		$_SESSION['points'] = 0;
		$_SESSION['username'] = $_COOKIE['name'];
		$_SESSION['useremail'] = $_COOKIE['email'];
	}
	else
	{
		foreach($_SESSION['combo'] as $key){
			echo $key;
		}

		$_SESSION['position']++;
		$_SESSION['counter'] = $_SESSION['combo'][$_SESSION['position']];
		$i = 1;
		if(!isset($_SESSION['username']))
		{
			echo "<meta http-equiv='refresh' content='0;url=index.php#GT'>";
		}
	}

	$_SESSION['selection'][$_SESSION['counter']] = $gate;
	$_SESSION['timemillis'][$_SESSION['counter']] = time()-$_SESSION['pretime'];
	$_SESSION['pretime'] = time();

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
	$_SESSION['guard'][$_SESSION['counter']][1] = $pgate1;
	$_SESSION['guard'][$_SESSION['counter']][2] = $pgate2;
	$_SESSION['guard'][$_SESSION['counter']][3] = $pgate3;

	if (($gate == "") || ($gate == null))
	{
		$_SESSION['position']--;
		$_SESSION['counter'] = $_SESSION['combo'][$_SESSION['position']];
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
	<h3>Round <?php echo $_SESSION['position']+1; ?> of 10</h3>
<?php } ?>

<?php 
	if ($_SESSION['counter'] >= $maxround)
	{ ?>
		<a href="javascript: void(0)" onclick="popup('feedback.php', 'Feedback: The Guards and the Treasure')"><h3>Leave your Feedback</h3></a>
		<br/>
		<br/>
		<table align="center" cellspacing="10" cellpadding="50" bgcolor="black">
				<tr bgcolor = #555555>
					<th>Round</th><th>Player's Door</th><th>Guards' Door</th><th>Won</th><th>Lost</th><th>Points</th>
				</tr>
	<?php
		$twon = 0;
		$tlost = 0;
		$tpoints = 0;
		$today = date("F j, Y, g:i a");
		$data = "\n".$_SESSION['username'].",".$_SESSION['useremail'].",$today,";
		$time = "\n".$_SESSION['username'].",".$_SESSION['useremail'].",$today";
		for ($i = 1; $i <= $maxround; $i++)
		{
			$data = $data.$_SESSION['selection'][$i].",";
			$time = $time.",".$_SESSION['timemillis'][$i];
			?>
				<tr align = "center" >
					<td><?php echo $i; ?></td>
					<td><?php echo $_SESSION['selection'][$i]; ?></td>
					<td><?php echo $_SESSION['guard'][$i][1]; ?>, <?php echo $_SESSION['guard'][$i][2]; ?> and <?php echo $_SESSION['guard'][$i][3]; ?></td>
				<?php if(($_SESSION['selection'][$i] != $_SESSION['guard'][$i][1]) && ($_SESSION['selection'][$i] != $_SESSION['guard'][$i][2]) && ($_SESSION['selection'][$i] != $_SESSION['guard'][$i][3])) 
					{
						$twon++;
						$won = "Yes";
						$lost = "No";

						if (($i == 1) || ($i == 3) || ($i == 5) || ($i == 7) || ($i == 9))
						{
							if ($_SESSION['selection'][$i] == "1") $points = 1;
							else if ($_SESSION['selection'][$i] == "2") $points = 5;
							else if ($_SESSION['selection'][$i] == "3") $points = 10;
							else if ($_SESSION['selection'][$i] == "4") $points = 8;
							else if ($_SESSION['selection'][$i] == "5") $points = 3;
							else if ($_SESSION['selection'][$i] == "6") $points = 4;
							else if ($_SESSION['selection'][$i] == "7") $points = 8;
							else if ($_SESSION['selection'][$i] == "8") $points = 1;
						}
						else if (($i == 2) || ($i == 4) || ($i == 6) || ($i == 8) || ($i == 10))
						{
							if ($_SESSION['selection'][$i] == "1") $points = 10;
							else if ($_SESSION['selection'][$i] == "2") $points = 3;
							else if ($_SESSION['selection'][$i] == "3") $points = 1;
							else if ($_SESSION['selection'][$i] == "4") $points = 7;
							else if ($_SESSION['selection'][$i] == "5") $points = 1;
							else if ($_SESSION['selection'][$i] == "6") $points = 4;
							else if ($_SESSION['selection'][$i] == "7") $points = 1;
							else if ($_SESSION['selection'][$i] == "8") $points = 4;
						}

						$tpoints += $points;
					} else {
						$tlost++;
						$won = "No";
						$lost = "Yes";

						if (($i == 1) || ($i == 3) || ($i == 5) || ($i == 7) || ($i == 9))
						{
							if ($_SESSION['selection'][$i] == "1") $points = -1;
							else if ($_SESSION['selection'][$i] == "2") $points = -8;
							else if ($_SESSION['selection'][$i] == "3") $points = -1;
							else if ($_SESSION['selection'][$i] == "4") $points = -6;
							else if ($_SESSION['selection'][$i] == "5") $points = -7;
							else if ($_SESSION['selection'][$i] == "6") $points = -2;
							else if ($_SESSION['selection'][$i] == "7") $points = -9;
							else if ($_SESSION['selection'][$i] == "8") $points = -4;
						}
						else if (($i == 2) || ($i == 4) || ($i == 6) || ($i == 8) || ($i == 10))
						{
							if ($_SESSION['selection'][$i] == "1") $points = -7;
							else if ($_SESSION['selection'][$i] == "2") $points = -9;
							else if ($_SESSION['selection'][$i] == "3") $points = -8;
							else if ($_SESSION['selection'][$i] == "4") $points = -9;
							else if ($_SESSION['selection'][$i] == "5") $points = -9;
							else if ($_SESSION['selection'][$i] == "6") $points = -9;
							else if ($_SESSION['selection'][$i] == "7") $points = -10;
							else if ($_SESSION['selection'][$i] == "8") $points = -1;
						}

						$tpoints += $points;
					} ?>

					<td><?php echo $won; ?></td>
					<td><?php echo $lost; ?></td>
					<td><?php echo $points; ?></td>
				</tr>
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
} ?>

<div class="entry">

<?php if ($_SESSION['counter'] < $maxround) { ?>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
<br/>

<table align="center" cellspacing="10" cellpadding="50" bgcolor="black">
	<tr bgcolor = #555555 align="center">
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

<?php if ($_SESSION['counter'] == 0) { ?>	
	<tr align="center">
		<td bgcolor = #555555 align="left">Probabilities</td>
		<td valign="bottom">0.54<br/><img src="Images/p5.jpg"></td>
		<td valign="bottom">0.16<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.96<br/><img src="Images/p10.jpg"></td>
		<td valign="bottom">0.36<br/><img src="Images/p4.jpg"></td>
		<td valign="bottom">0.10<br/><img src="Images/p1.jpg"></td>
		<td valign="bottom">0.57<br/><img src="Images/p6.jpg"></td>
		<td valign="bottom">0.24<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.07<br/><img src="Images/p1.jpg"></td>
	</tr>
<?php } else if ($_SESSION['counter'] == 1) { ?>
	<tr align="center">
		<td bgcolor = #555555 align="left">Probabilities</td>
		<td valign="bottom">0.48<br/><img src="Images/p5.jpg"></td>
		<td valign="bottom">0.17<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.09<br/><img src="Images/p1.jpg"></td>
		<td valign="bottom">0.31<br/><img src="Images/p3.jpg"></td>
		<td valign="bottom">0.69<br/><img src="Images/p7.jpg"></td>
		<td valign="bottom">0.21<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.05<br/><img src="Images/p1.jpg"></td>
		<td valign="bottom">1.00<br/><img src="Images/p10.jpg"></td>
	</tr>
<?php } else if ($_SESSION['counter'] == 2) { ?>
	<tr align="center">
		<td bgcolor = #555555 align="left">Probabilities</td>
		<td valign="bottom">0.18<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.32<br/><img src="Images/p3.jpg"></td>
		<td valign="bottom">0.81<br/><img src="Images/p8.jpg"></td>
		<td valign="bottom">0.50<br/><img src="Images/p5.jpg"></td>
		<td valign="bottom">0.21<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.47<br/><img src="Images/p5.jpg"></td>
		<td valign="bottom">0.43<br/><img src="Images/p4.jpg"></td>
		<td valign="bottom">0.08<br/><img src="Images/p1.jpg"></td>
	</tr>
<?php } else if ($_SESSION['counter'] == 3) { ?>
	<tr align="center">
		<td bgcolor = #555555 align="left">Probabilities</td>
		<td valign="bottom">0.61<br/><img src="Images/p6.jpg"></td>
		<td valign="bottom">0.30<br/><img src="Images/p3.jpg"></td>
		<td valign="bottom">0.17<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.48<br/><img src="Images/p5.jpg"></td>
		<td valign="bottom">0.15<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.35<br/><img src="Images/p4.jpg"></td>
		<td valign="bottom">0.14<br/><img src="Images/p1.jpg"></td>
		<td valign="bottom">0.80<br/><img src="Images/p8.jpg"></td>
	</tr>
<?php } else if ($_SESSION['counter'] == 4) { ?>
	<tr align="center">
		<td bgcolor = #555555 align="left">Probabilities</td>
		<td valign="bottom">0.07<br/><img src="Images/p1.jpg"></td>
		<td valign="bottom">0.35<br/><img src="Images/p4.jpg"></td>
		<td valign="bottom">0.69<br/><img src="Images/p7.jpg"></td>
		<td valign="bottom">0.58<br/><img src="Images/p6.jpg"></td>
		<td valign="bottom">0.23<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.60<br/><img src="Images/p6.jpg"></td>
		<td valign="bottom">0.47<br/><img src="Images/p5.jpg"></td>
		<td valign="bottom">0.01<br/><img src="Images/p0.jpg"></td>
	</tr>
<?php } else if ($_SESSION['counter'] == 5) { ?>
	<tr align="center">
		<td bgcolor = #555555 align="left">Probabilities</td>
		<td valign="bottom">0.72<br/><img src="Images/p7.jpg"></td>
		<td valign="bottom">0.35<br/><img src="Images/p4.jpg"></td>
		<td valign="bottom">0.21<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.44<br/><img src="Images/p4.jpg"></td>
		<td valign="bottom">0.19<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.41<br/><img src="Images/p4.jpg"></td>
		<td valign="bottom">0.17<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.51<br/><img src="Images/p5.jpg"></td>
	</tr>
<?php } else if ($_SESSION['counter'] == 6) { ?>
	<tr align="center">
		<td bgcolor = #555555 align="left">Probabilities</td>
		<td valign="bottom">0.10<br/><img src="Images/p1.jpg"></td>
		<td valign="bottom">0.32<br/><img src="Images/p3.jpg"></td>
		<td valign="bottom">0.84<br/><img src="Images/p8.jpg"></td>
		<td valign="bottom">0.52<br/><img src="Images/p5.jpg"></td>
		<td valign="bottom">0.22<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.54<br/><img src="Images/p5.jpg"></td>
		<td valign="bottom">0.42<br/><img src="Images/p4.jpg"></td>
		<td valign="bottom">0.04<br/><img src="Images/p0.jpg"></td>
	</tr>
<?php } else if ($_SESSION['counter'] == 7) { ?>
	<tr align="center">
		<td bgcolor = #555555 align="left">Probabilities</td>
		<td valign="bottom">0.61<br/><img src="Images/p6.jpg"></td>
		<td valign="bottom">0.28<br/><img src="Images/p3.jpg"></td>
		<td valign="bottom">0.16<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.46<br/><img src="Images/p5.jpg"></td>
		<td valign="bottom">0.14<br/><img src="Images/p1.jpg"></td>
		<td valign="bottom">0.34<br/><img src="Images/p3.jpg"></td>
		<td valign="bottom">0.13<br/><img src="Images/p1.jpg"></td>
		<td valign="bottom">0.88<br/><img src="Images/p9.jpg"></td>
	</tr>
<?php } else if ($_SESSION['counter'] == 8) { ?>
	<tr align="center">
		<td bgcolor = #555555 align="left">Probabilities</td>
		<td valign="bottom">0.73<br/><img src="Images/p7.jpg"></td>
		<td valign="bottom">0.16<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.64<br/><img src="Images/p6.jpg"></td>
		<td valign="bottom">0.48<br/><img src="Images/p5.jpg"></td>
		<td valign="bottom">0.36<br/><img src="Images/p4.jpg"></td>
		<td valign="bottom">0.63<br/><img src="Images/p6.jpg"></td>
		<td valign="bottom">0.00<br/><img src="Images/p0.jpg"></td>
		<td valign="bottom">0.00<br/><img src="Images/p0.jpg"></td>
	</tr>
<?php } else if ($_SESSION['counter'] == 9) { ?>
	<tr align="center">
		<td bgcolor = #555555 align="left">Probabilities</td>
		<td valign="bottom">0.65<br/><img src="Images/p7.jpg"></td>
		<td valign="bottom">0.29<br/><img src="Images/p3.jpg"></td>
		<td valign="bottom">0.34<br/><img src="Images/p3.jpg"></td>
		<td valign="bottom">0.00<br/><img src="Images/p0.jpg"></td>
		<td valign="bottom">0.41<br/><img src="Images/p4.jpg"></td>
		<td valign="bottom">0.29<br/><img src="Images/p3.jpg"></td>
		<td valign="bottom">0.26<br/><img src="Images/p3.jpg"></td>
		<td valign="bottom">0.76<br/><img src="Images/p8.jpg"></td>
	</tr>
<?php } else if ($_SESSION['counter'] < $maxround) { ?>
	<tr align="center">
		<td bgcolor = #555555 align="left">Probabilities</td>
		<td valign="bottom">0.54<br/><img src="Images/p5.jpg"></td>
		<td valign="bottom">0.16<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.96<br/><img src="Images/p10.jpg"></td>
		<td valign="bottom">0.36<br/><img src="Images/p4.jpg"></td>
		<td valign="bottom">0.10<br/><img src="Images/p1.jpg"></td>
		<td valign="bottom">0.57<br/><img src="Images/p6.jpg"></td>
		<td valign="bottom">0.24<br/><img src="Images/p2.jpg"></td>
		<td valign="bottom">0.07<br/><img src="Images/p1.jpg"></td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 0) || ($_SESSION['counter'] == 2) || ($_SESSION['counter'] == 4) || ($_SESSION['counter'] == 6) || ($_SESSION['counter'] == 8)) { ?>
	<tr align="center">
		<td bgcolor = #555555 align="left">Player Rewards</td>
		<td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
		<td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
		<td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
		<td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
		<td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
		<td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
		<td valign="bottom">8<br/><img src="Images/w8.jpg"></td>
		<td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
	</tr>
	<tr align="center">
		<td bgcolor = #555555 align="left">Player Penalties</td>
		<td valign="top"><img src="Images/l1.jpg"><br/>-1</td>
		<td valign="top"><img src="Images/l8.jpg"><br/>-8</td>
		<td valign="top"><img src="Images/l1.jpg"><br/>-1</td>
		<td valign="top"><img src="Images/l6.jpg"><br/>-6</td>
		<td valign="top"><img src="Images/l7.jpg"><br/>-7</td>
		<td valign="top"><img src="Images/l2.jpg"><br/>-2</td>
		<td valign="top"><img src="Images/l9.jpg"><br/>-9</td>
		<td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
	</tr>
	<tr align="center" >
		<td bgcolor = #555555 align="left" >Guard Rewards</td><td>10</td><td>2</td><td>9</td><td>4</td><td>10</td><td>9</td><td>2</td><td>9</td>
	</tr>
	<tr align="center" >
		<td bgcolor = #555555 align="left" >Guard Penalties</td><td>-9</td><td>-4</td><td>-7</td><td>-7</td><td>-7</td><td>-9</td><td>-1</td><td>-1</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 1) || ($_SESSION['counter'] == 3) || ($_SESSION['counter'] == 5) || ($_SESSION['counter'] == 7) || ($_SESSION['counter'] == 9)) { ?>
	<tr align="center">
		<td bgcolor = #555555 align="left">Player Rewards</td>
		<td valign="bottom">10<br/><img src="Images/w10.jpg"></td>
		<td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
		<td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
		<td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
		<td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
		<td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
		<td valign="bottom">1<br/><img src="Images/w1.jpg"></td>
		<td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
	</tr>
	<tr align="center">
		<td bgcolor = #555555 align="left">Player Penalties</td>
		<td valign="top"><img src="Images/l7.jpg"><br/>-7</td>
		<td valign="top"><img src="Images/l9.jpg"><br/>-9</td>
		<td valign="top"><img src="Images/l8.jpg"><br/>-8</td>
		<td valign="top"><img src="Images/l9.jpg"><br/>-9</td>
		<td valign="top"><img src="Images/l9.jpg"><br/>-9</td>
		<td valign="top"><img src="Images/l9.jpg"><br/>-9</td>
		<td valign="top"><img src="Images/l10.jpg"><br/>-10</td>
		<td valign="top"><img src="Images/l1.jpg"><br/>-1</td>
	</tr>
	<tr align="center" >
		<td bgcolor = #555555 align="left" >Guard Rewards</td><td>3</td><td>8</td><td>2</td><td>4</td><td>8</td><td>1</td><td>8</td><td>9</td>
	</tr>
	<tr align="center" >
		<td bgcolor = #555555 align="left" >Guard Penalties</td><td>-10</td><td>-5</td><td>-9</td><td>-1</td><td>-9</td><td>-6</td><td>-6</td><td>-7</td>
	</tr>
<?php } ?>

<?php if ($_SESSION['counter'] < $maxround) { ?>
</table>

<br/>Please choose a door to attack. Press the Submit Button to confirm your selection.<br/>
<br/>

<input type="submit" type="submit" name="submit_form" id="submit_form" value="Submit">
<br/>
<h4>Please refresh the page if your game is stuck</h4>
</form>
<?php } ?>

<?php if ($_SESSION['counter'] >= $maxround) { ?>
	<br/>
	If you are among the top scorers, your score will soon be uploaded on the website.<br/>
	<br/>

	Click to upload your score to Facebook<br/>
	<input id="uploadfacebook" type="submit" value="Upload to Facebook" onclick="uploadToFacebook()" />
	<br/>
	<br/>

	<h2><a href="index.php">Play again</a></h2>
	<br/>

	<h3>Top Scorers (as of August 17, 2010, 02:50 am)</h3>
	<table cellspacing="10" cellpadding="50" bgcolor="black">
		<tr bgcolor = #555555 align="center">
			<th>Rank</th>
			<th align="left">Name</th>
			<th>Date</th>
			<th>Time</th>
			<th>Won</th>
			<th>Lost</th>
			<th>Points</th>
		</tr>
		<tr align="center">
			<td>1</td>
			<td align="left">Brandon Quon</td>
			<td>August 16, 2010</td>
			<td>06:48 PM</td>
			<td>9</td>
			<td>1</td>
			<td>74</td>
		</tr>
		<tr align="center">
			<td>2</td>
			<td align="left">Chetan Diwan</td>
			<td>August 16, 2010</td>
			<td>06:48 PM</td>
			<td>8</td>
			<td>2</td>
			<td>69</td>
		</tr>
		<tr align="center">
			<td>3</td>
			<td align="left">Albert</td>
			<td>August 17, 2010</td>
			<td>12:13 AM</td>
			<td>9</td>
			<td>1</td>
			<td>59</td>
		</tr>
		<tr align="center">
			<td>4</td>
			<td align="left">Harpreet Dhiman</td>
			<td>August 17, 2010</td>
			<td>02:10 AM</td>
			<td>8</td>
			<td>2</td>
			<td>53</td>
		</tr>
		<tr align="center">
			<td>5</td>
			<td align="left">Jienan Yao</td>
			<td>August 16, 2010</td>
			<td>10:05 AM</td>
			<td>7</td>
			<td>3</td>
			<td>51</td>
		</tr>
		<tr align="center">
			<td>6</td>
			<td align="left">Zhiyuan Wang</td>
			<td>August 16, 2010</td>
			<td>8:43 AM</td>
			<td>9</td>
			<td>1</td>
			<td>50</td>
		</tr>
		<tr align="center">
			<td>7</td>
			<td align="left">Philip Hendrickson</td>
			<td>August 16, 2010</td>
			<td>9:10 AM</td>
			<td>9</td>
			<td>1</td>
			<td>49</td>
		</tr>
		<tr align="center">
			<td>8</td>
			<td align="left">Anupam</td>
			<td>August 16, 2010</td>
			<td>11:57 AM</td>
			<td>7</td>
			<td>3</td>
			<td>49</td>
		</tr>
		<tr align="center">
			<td>9</td>
			<td align="left">Chetan Diwan</td>
			<td>August 16, 2010</td>
			<td>06:45 PM</td>
			<td>8</td>
			<td>2</td>
			<td>48</td>
		</tr>
		<tr align="center">
			<td>10</td>
			<td align="left">Hao Hovey Yu</td>
			<td>August 16, 2010</td>
			<td>01:38 PM</td>
			<td>9</td>
			<td>1</td>
			<td>47</td>
		</tr>
		<tr align="center">
			<td>11</td>
			<td align="left">Hao Hovey Yu</td>
			<td>August 16, 2010</td>
			<td>02:06 PM</td>
			<td>9</td>
			<td>1</td>
			<td>47</td>
		</tr>
		<tr align="center">
			<td>12</td>
			<td align="left">Deepakkumar Ailani</td>
			<td>August 16, 2010</td>
			<td>11:41 PM</td>
			<td>8</td>
			<td>2</td>
			<td>45</td>
		</tr>
		<tr align="center">
			<td>13</td>
			<td align="left">Chetan Diwan</td>
			<td>August 16, 2010</td>
			<td>06:43 PM</td>
			<td>7</td>
			<td>3</td>
			<td>44</td>
		</tr>
		<tr align="center">
			<td>14</td>
			<td align="left">Jessica Chen</td>
			<td>August 16, 2010</td>
			<td>11:46 AM</td>
			<td>7</td>
			<td>3</td>
			<td>43</td>
		</tr>
		<tr align="center">
			<td>15</td>
			<td align="left">Chetan Diwan</td>
			<td>August 16, 2010</td>
			<td>08:46 AM</td>
			<td>8</td>
			<td>2</td>
			<td>42</td>
		</tr>
		<tr align="center">
			<td>16</td>
			<td align="left">Pradeep Chandrasekar</td>
			<td>August 16, 2010</td>
			<td>9:31 AM</td>
			<td>8</td>
			<td>2</td>
			<td>42</td>
		</tr>
		<tr align="center">
			<td>17</td>
			<td align="left">Sanjay</td>
			<td>August 16, 2010</td>
			<td>12:04 PM</td>
			<td>9</td>
			<td>1</td>
			<td>42</td>
		</tr>
		<tr align="center">
			<td>18</td>
			<td align="left">Ranjeet Sangle</td>
			<td>August 16, 2010</td>
			<td>08:49 AM</td>
			<td>9</td>
			<td>1</td>
			<td>41</td>
		</tr>
		<tr align="center">
			<td>19</td>
			<td align="left">Kushan Shah</td>
			<td>August 16, 2010</td>
			<td>11:11 AM</td>
			<td>7</td>
			<td>3</td>
			<td>41</td>
		</tr>
		<tr align="center">
			<td>20</td>
			<td align="left">Theodore Chao</td>
			<td>August 16, 2010</td>
			<td>05:38 PM</td>
			<td>7</td>
			<td>3</td>
			<td>41</td>
		</tr>
</table>

<br/>
<br/>
<h3>Lowest Scorers (as of August 17, 2010, 02:50 am)</h3>
	<table cellspacing="10" cellpadding="50" bgcolor="black">
		<tr bgcolor = #555555 align="center">
			<th>Rank</th>
			<th align="left">Name</th>
			<th>Date</th>
			<th>Time</th>
			<th>Won</th>
			<th>Lost</th>
			<th>Points</th>
		</tr>
		<tr align="center">
			<td>147</td>
			<td align="left">Chetan Diwan</td>
			<td>August 16, 2010</td>
			<td>10:05 AM</td>
			<td>3</td>
			<td>7</td>
			<td>-44</td>
		</tr>
		<tr align="center">
			<td>146</td>
			<td align="left">Chetan Diwan</td>
			<td>August 16, 2010</td>
			<td>10:07 AM</td>
			<td>3</td>
			<td>7</td>
			<td>-31</td>
		</tr>
		<tr align="center">
			<td>145</td>
			<td align="left">Sehajit Saluja</td>
			<td>August 16, 2010</td>
			<td>06:38 PM</td>
			<td>2</td>
			<td>8</td>
			<td>-29</td>
		</tr>
		<tr align="center">
			<td>144</td>
			<td align="left">Brandon Quon</td>
			<td>August 16, 2010</td>
			<td>06:55 PM</td>
			<td>3</td>
			<td>7</td>
			<td>-25</td>
		</tr>
		<tr align="center">
			<td>143</td>
			<td align="left">Aniruddh</td>
			<td>August 16, 2010</td>
			<td>9:32 AM</td>
			<td>3</td>
			<td>7</td>
			<td>-31</td>
		</tr>
		<tr align="center">
			<td>142</td>
			<td align="left">Jienan Yao</td>
			<td>August 16, 2010</td>
			<td>9:50 AM</td>
			<td>3</td>
			<td>7</td>
			<td>-24</td>
		</tr>
		<tr align="center">
			<td>141</td>
			<td align="left">Arjun Sharma</td>
			<td>August 16, 2010</td>
			<td>10:23 AM</td>
			<td>4</td>
			<td>6</td>
			<td>-20</td>
		</tr>
		<tr align="center">
			<td>140</td>
			<td align="left">Ian Baker</td>
			<td>August 16, 2010</td>
			<td>11:17 AM</td>
			<td>3</td>
			<td>7</td>
			<td>-19</td>
		</tr>
		<tr align="center">
			<td>139</td>
			<td align="left">Theodore Chao</td>
			<td>August 16, 2010</td>
			<td>08:29 PM</td>
			<td>3</td>
			<td>7</td>
			<td>-17</td>
		</tr>
		<tr align="center">
			<td>138</td>
			<td align="left">Mahesh Gujare</td>
			<td>August 16, 2010</td>
			<td>11:03 AM</td>
			<td>2</td>
			<td>8</td>
			<td>-17</td>
		</tr>
		<tr align="center">
			<td>137</td>
			<td align="left">Abhinav</td>
			<td>August 16, 2010</td>
			<td>04:37 PM</td>
			<td>4</td>
			<td>6</td>
			<td>-16</td>
		</tr>
		<tr align="center">
			<td>136</td>
			<td align="left">Salim</td>
			<td>August 16, 2010</td>
			<td>8:13 am</td>
			<td>4</td>
			<td>6</td>
			<td>-15</td>
		</tr>
		<tr align="center">
			<td>135</td>
			<td align="left">Chetan Diwan</td>
			<td>August 16, 2010</td>
			<td>06:40 PM</td>
			<td>5</td>
			<td>5</td>
			<td>-14</td>
		</tr>
		<tr align="center">
			<td>134</td>
			<td align="left">Pradeep Chandrasekar</td>
			<td>August 16, 2010</td>
			<td>12:17 PM</td>
			<td>5</td>
			<td>5</td>
			<td>-10</td>
		</tr>
		<tr align="center">
			<td>133</td>
			<td align="left">Kushan Shah</td>
			<td>August 16, 2010</td>
			<td>04:47 PM</td>
			<td>4</td>
			<td>6</td>
			<td>-9</td>
		</tr>
</table>
<?php } ?>

<script type="text/javascript">
	function uploadToFacebook()
	{
		FB_RequireFeatures(["Api"],function()
		{
			FB.init("3bdf35a7c722a4a6e636c1e96da4334f","xd_receiver.htm");
			FB.Connect.requireSession();
			FB.Facebook.get_sessionState().waitUntilReady(function()
			{
				FB.Connect.streamPublish('is playing the game of "The Guards and The Treasure".',{"name": "<?php echo $_SESSION['username']; ?> won <?php echo $tpoints; ?> points by winning <?php echo $twon; ?> of <?php echo $maxround; ?> rounds. Play to win an iPod Touch!","caption": "Let's beat the guards and steal some treasure! Click to launch the Game!", "href": "http://games.mohitgoenka.com", "media": [{'type':'image','src':'http://games.mohitgoenka.com/Images/treasure.jpg','href':'http://games.mohitgoenka.com'}], "action_links": [{"text":"Play the game of \"The Guards and The Treasure\"!","href":"http://games.mohitgoenka.com"}],"app_has_no_session":false,"body_general":null})
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

<div id="nav-right" style="margin-bottom:5px;">

</div>

<!-- END Right Side Menu -->


<!-- Footer -->
</div>
</div>

<div class="footer-area" style="margin-top:5px;"><b>Copyright &copy; 2010 - All Rights Reserved</b>

<div id="back-to-top"><a href="javascript:backToTop()">Back to Top</a>
</div>

</div>

<div class="Theme-Sponsors" style="margin-bottom:5px;" align="left">This Page was last updated on August 23, 2010</div>
<!-- END Footer -->

</body>

</html>