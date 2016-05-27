<?php
	session_start();
	$maxround = 2;

	$gate = $_REQUEST['gate'];

	do
	{

	if ($_SESSION['counter'] == 0)
	{
		$pirate1 = rand(0, 200);
		$pirate2 = rand(0, 200);

		if ($pirate1 < 36)
			$pgate1 = "1";
		else if ($pirate1 < 67)
			$pgate1 = "2";
		else if ($pirate1 < 115)
			$pgate1 = "3";
		else if ($pirate1 < 172)
			$pgate1 = "4";
		else
			$pgate1 = "5";
		if ($pirate2 < 36)
			$pgate2 = "1";
		else if ($pirate2 < 67)
			$pgate2 = "2";
		else if ($pirate2 < 115)
			$pgate2 = "3";
		else if ($pirate2 < 172)
			$pgate2 = "4";
		else
			$pgate2 = "5";
	}
	else if ($_SESSION['counter'] == 1)
	{
		$pirate1 = rand(0, 200);
		$pirate2 = rand(0, 200);
		if ($pirate1 < 55)
			$pgate1 = "1";
		else if ($pirate1 < 78)
			$pgate1 = "2";
		else if ($pirate1 < 109)
			$pgate1 = "3";
		else if ($pirate1 < 161)
			$pgate1 = "4";
		else
			$pgate1 = "5";
		if ($pirate2 < 55)
			$pgate2 = "1";
		else if ($pirate2 < 78)
			$pgate2 = "2";
		else if ($pirate2 < 109)
			$pgate2 = "3";
		else if ($pirate2 < 161)
			$pgate2 = "4";
		else
			$pgate2 = "5";
	}
	else if (($_SESSION['counter'] < $maxround))
	{
		$pirate1 = rand(0, 200);
		$pirate2 = rand(0, 200);

		if ($pirate1 < 36)
			$pgate1 = "1";
		else if ($pirate1 < 67)
			$pgate1 = "2";
		else if ($pirate1 < 115)
			$pgate1 = "3";
		else if ($pirate1 < 172)
			$pgate1 = "4";
		else
			$pgate1 = "5";
		if ($pirate2 < 36)
			$pgate2 = "1";
		else if ($pirate2 < 67)
			$pgate2 = "2";
		else if ($pirate2 < 115)
			$pgate2 = "3";
		else if ($pirate2 < 172)
			$pgate2 = "4";
		else
			$pgate2 = "5";
	}

	} while ($pgate1 == $pgate2);

	if(!isset($_SESSION['counter']))
	{
		$_SESSION['counter'] = 1;
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
		$_SESSION['counter']++;
		$i = 1;
		if(!isset($_SESSION['username']))
		{
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
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
	$_SESSION['guard'][$_SESSION['counter']][1] = $pgate1;
	$_SESSION['guard'][$_SESSION['counter']][2] = $pgate2;

	if (($gate == "") || ($gate == null))
	{
		$_SESSION['counter']--;
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
<meta property="og:image" content="http://mgoenka.github.io/img/Castle.png"/>
<meta property="fb:admins" content="683925722"/>
<meta property="og:site_name" content="Mohit Goenka's Website"/>
<meta property="og:description" content="This website is a place for curriculum as well as fun activities"/>
<meta property="og:email" content="admin@mohitgoenka.com"/>

<!-- Your Site Title -->
<title  onload='right();'>Mohit's Castle</title>
<!-- END TITLE -->

<link rel="shortcut icon" href="http://mgoenka.github.io/Home/favicon.png" type="image/x-icon" />

<!-- CSS Style Sheets -->
<link rel="stylesheet" href="http://mgoenka.github.io/css/style.css" type="text/css" media="screen" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="green-theme" href="http://mgoenka.github.io/css/style2.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="blue-theme" href="http://mgoenka.github.io/css/style3.css" />
<!-- END CSS Style Sheet -->

<script type="text/javascript" src="http://mgoenka.github.io/index.js" language="JAVASCRIPT"></script>
<script type="text/javascript" src="http://mgoenka.github.io/css/New_Style.js" language="JAVASCRIPT"></script>

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
	<h3>Practice Round <?php echo $_SESSION['counter']+1; ?> of 2</h3>
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
		$data = "\n".$_SESSION['username'].",".$_SESSION['useremail'].",".$_SESSION['usergender'].",".$_SESSION['usercountry'].",Practice,$today,";
		for ($i = 1; $i <= $maxround; $i++)
		{
			$data = $data.$_SESSION['selection'][$i].",";
			$time = $time.",".$_SESSION['timemillis'][$i];
			?>
				<tr align = "center" >
					<td><?php echo $i; ?></td>
					<td><?php echo $_SESSION['selection'][$i]; ?></td>
					<td><?php echo $_SESSION['guard'][$i][1]; ?> and <?php echo $_SESSION['guard'][$i][2]; ?></td>
				<?php if(($_SESSION['selection'][$i] != $_SESSION['guard'][$i][1]) && ($_SESSION['selection'][$i] != $_SESSION['guard'][$i][2]))
					{
						$twon++;
						$won = "Yes";
						$lost = "No";

						if (($i == 1) || ($i == 2))
						{
							if ($_SESSION['selection'][$i] == "1") $points = 4;
							else if ($_SESSION['selection'][$i] == "2") $points = 3;
							else if ($_SESSION['selection'][$i] == "3") $points = 5;
							else if ($_SESSION['selection'][$i] == "4") $points = 5;
							else if ($_SESSION['selection'][$i] == "5") $points = 7;
						}

						$tpoints += $points;
					} else {
						$tlost++;
						$won = "No";
						$lost = "Yes";

						if (($i == 1) || ($i == 2))
						{
							if ($_SESSION['selection'][$i] == "1") $points = -6;
							else if ($_SESSION['selection'][$i] == "2") $points = -6;
							else if ($_SESSION['selection'][$i] == "3") $points = -5;
							else if ($_SESSION['selection'][$i] == "4") $points = -4;
							else if ($_SESSION['selection'][$i] == "5") $points = -10;
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
	$handle = fopen('practice.csv', 'a+');
	fwrite($handle, $data);
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
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 0) || ($_SESSION['counter'] == 1)) { ?>
	<tr align="center">
		<td bgcolor = #555555 align="left">Your Rewards</td>
		<td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
		<td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
		<td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
		<td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
		<td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
	</tr>
	<tr align="center">
		<td bgcolor = #555555 align="left">Your Penalties</td>
		<td valign="top"><img src="Images/l6.jpg"><br/>-6</td>
		<td valign="top"><img src="Images/l6.jpg"><br/>-6</td>
		<td valign="top"><img src="Images/l5.jpg"><br/>-5</td>
		<td valign="top"><img src="Images/l4.jpg"><br/>-4</td>
		<td valign="top"><img src="Images/l10.jpg"><br/>-10</td>
	</tr>
<?php } ?>

<?php if ($_SESSION['counter'] == 0) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.69<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.52<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.43<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.31</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.48</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.57</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
	</tr>
<?php } else if ($_SESSION['counter'] == 1) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.45<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.77<br/><img src="Images/pn8.jpg"></td>
		<td valign="bottom">0.69<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.48<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.61<br/><img src="Images/pn6.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.55</td>
		<td valign="top"><img src="Images/p2.jpg"><br/>0.23</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.31</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.52</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.39</td>
	</tr>
<?php } else if ($_SESSION['counter'] < $maxround) { ?>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of No Guard</td>
		<td valign="bottom">0.64<br/><img src="Images/pn6.jpg"></td>
		<td valign="bottom">0.69<br/><img src="Images/pn7.jpg"></td>
		<td valign="bottom">0.52<br/><img src="Images/pn5.jpg"></td>
		<td valign="bottom">0.43<br/><img src="Images/pn4.jpg"></td>
		<td valign="bottom">0.72<br/><img src="Images/pn7.jpg"></td>
	</tr>
	<tr align="center" bgcolor="#afc7c7" style="color: #000000; font-size: large">
		<td bgcolor = "#afc7c7" align="left">Probability<br/>of Guard</td>
		<td valign="top"><img src="Images/p4.jpg"><br/>0.36</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.31</td>
		<td valign="top"><img src="Images/p5.jpg"><br/>0.48</td>
		<td valign="top"><img src="Images/p6.jpg"><br/>0.57</td>
		<td valign="top"><img src="Images/p3.jpg"><br/>0.28</td>
	</tr>
<?php } ?>

<?php if (($_SESSION['counter'] == 0) || ($_SESSION['counter'] == 1)) { ?>
	<tr align="center" >
		<td bgcolor = #555555 align="left" >Guards' Rewards</td><td>8</td><td>6</td><td>2</td><td>1</td><td>10</td>
	</tr>
	<tr align="center" >
		<td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-5</td><td>-3</td><td>-6</td><td>-3</td><td>-8</td>
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
<!--
	Click to upload your score to Facebook<br/>
	<input id="uploadfacebook" type="submit" value="Upload to Facebook" onclick="uploadToFacebook()" />
	<br/>
	<br/-->

	<h2><a href="gamesv5.php">Start Game</a></h2>
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

<div class="Theme-Sponsors" style="margin-bottom:5px;" align="left">This Page was last updated on August 23, 2010</div>
<!-- END Footer -->

</body>

</html>