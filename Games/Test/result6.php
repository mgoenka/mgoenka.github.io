<?php
    session_start();
    $gate = $_REQUEST['gate'];

    if (($gate == "") || ($gate == null))
    {
        echo "<meta http-equiv='refresh' content='0;url=game6.php#GT'>";
    }

    $maxround = 20;

    if(!isset($_SESSION['counter']))
    {
        $_SESSION['counter'] = 0;
        $_SESSION['won'] = 0;
        $_SESSION['lost'] = 0;
        $_SESSION['points'] = 0;
    }

    do
    {
        $pirate1 = rand(0, 300);
        $pirate2 = rand(0, 300);
        $pirate3 = rand(0, 300);
        if ($pirate1 < 38)
            $pgate1 = "1";
        else if ($pirate1 < 73)
            $pgate1 = "2";
        else if ($pirate1 < 89)
            $pgate1 = "3";
        else if ($pirate1 < 129)
            $pgate1 = "4";
        else if ($pirate1 < 178)
            $pgate1 = "5";
        else if ($pirate1 < 237)
            $pgate1 = "6";
        else if ($pirate1 < 255)
            $pgate1 = "7";
        else
            $pgate1 = "8";
        if ($pirate2 < 38)
            $pgate2 = "1";
        else if ($pirate2 < 73)
            $pgate2 = "2";
        else if ($pirate2 < 89)
            $pgate2 = "3";
        else if ($pirate2 < 129)
            $pgate2 = "4";
        else if ($pirate2 < 178)
            $pgate2 = "5";
        else if ($pirate2 < 237)
            $pgate2 = "6";
        else if ($pirate2 < 255)
            $pgate2 = "7";
        else
            $pgate2 = "8";
        if ($pirate3 < 38)
            $pgate3 = "1";
        else if ($pirate3 < 73)
            $pgate3 = "2";
        else if ($pirate3 < 89)
            $pgate3 = "3";
        else if ($pirate3 < 129)
            $pgate3 = "4";
        else if ($pirate3 < 178)
            $pgate3 = "5";
        else if ($pirate3 < 237)
            $pgate3 = "6";
        else if ($pirate3 < 255)
            $pgate3 = "7";
        else
            $pgate3 = "8";
    } while (($pgate1 == $pgate2) || ($pgate1 == $pgate3) || ($pgate2 == $pgate3));

    $_SESSION['counter'] = $_SESSION['counter']+1;

    if ($_SESSION['counter'] > $maxround)
    {
        unset($_SESSION['counter']);
        unset($_SESSION['won']);
        unset($_SESSION['lost']);
        unset($_SESSION['points']);
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
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

<div id="fb-root"></div>
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
</script>

<script>
    function uploadToFacebook()
    {
        FB_RequireFeatures(["Api"],function()
        {
            FB.init("3bdf35a7c722a4a6e636c1e96da4334f","xd_receiver.htm");
            FB.Connect.requireSession();
            FB.Facebook.get_sessionState().waitUntilReady(function()
            {
                FB.Connect.streamPublish('is playing the game of "The Guard and The Treasure".')
            });
        });
    }
</script>

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
<fb:login-button show-faces="true" width="300"></fb:login-button>
</td>

<td align="right" width="300px">
<form method="get" action="http://www.google.com/search" target="_blank" align="right">
    <input type="radio"  name="sitesearch" value="http://www.mohitgoenka.com" style="display: none;" checked />
    <input type="text"   name="q" size="30"    maxlength="255" value="" />
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
<h2 id="GT">The Guard and The Treasure</h2>
</div>

<div class="entry">

<?php if ($_SESSION['counter'] != $maxround) { $gameno = $_SESSION['counter'] + 1; ?>
<form method="post" action="game<?php echo $gameno; ?>.php#GT">
<?php } ?>
<?php if ($_SESSION['counter'] == $maxround) { ?>
<form method="post" action="index.php">
<?php } ?>

<br/>

<table align="center" cellspacing="10" cellpadding="50" bgcolor="black">
    <tr bgcolor = #555555>
        <th>Gates</th>
<?php if ($gate=="1") { ?>
        <th bgcolor = yellow style = "color: #000000" >Gate 1</th>
<?php } ?>
<?php if ($gate != "1") { ?>
        <th>Gate 1</th>
<?php } ?>
<?php if ($gate=="2") { ?>
        <th bgcolor = yellow style = "color: #000000" >Gate 2</th>
<?php } ?>
<?php if ($gate != "2") { ?>
        <th>Gate 2</th>
<?php } ?>
<?php if ($gate=="3") { ?>
        <th bgcolor = yellow style = "color: #000000" >Gate 3</th>
<?php } ?>
<?php if ($gate != "3") { ?>
        <th>Gate 3</th>
<?php } ?>
<?php if ($gate=="4") { ?>
        <th bgcolor = yellow style = "color: #000000" >Gate 4</th>
<?php } ?>
<?php if ($gate != "4") { ?>
        <th>Gate 4</th>
<?php } ?>
<?php if ($gate=="5") { ?>
        <th bgcolor = yellow style = "color: #000000" >Gate 5</th>
<?php } ?>
<?php if ($gate != "5") { ?>
        <th>Gate 5</th>
<?php } ?>
<?php if ($gate=="6") { ?>
        <th bgcolor = yellow style = "color: #000000" >Gate 6</th>
<?php } ?>
<?php if ($gate != "6") { ?>
        <th>Gate 6</th>
<?php } ?>
<?php if ($gate=="7") { ?>
        <th bgcolor = yellow style = "color: #000000" >Gate 7</th>
<?php } ?>
<?php if ($gate != "7") { ?>
        <th>Gate 7</th>
<?php } ?>
<?php if ($gate=="8") { ?>
        <th bgcolor = yellow style = "color: #000000" >Gate 8</th>
<?php } ?>
<?php if ($gate != "8") { ?>
        <th>Gate 8</th>
<?php } ?>

    </tr>
    <tr align="center" >
        <td></td>
<?php if (($pgate1 == "1") || ($pgate2 == "1") || ($pgate3 == "1")) { ?>
        <td bgcolor = #555555 ><img src="Images/guardGate.jpg" title="Gate 1"></td>
<?php } ?>
<?php if (($pgate1 != "1") && ($pgate2 != "1") && ($pgate3 != "1")) { ?>
        <td bgcolor = #555555 ><img src="Images/luckGate.jpg" title="Gate 1"></td>
<?php } ?>
<?php if (($pgate1 == "2") || ($pgate2 == "2") || ($pgate3 == "2")) { ?>
        <td bgcolor = #555555 ><img src="Images/guardGate.jpg" title="Gate 2"></td>
<?php } ?>
<?php if (($pgate1 != "2") && ($pgate2 != "2") && ($pgate3 != "2")) { ?>
        <td bgcolor = #555555 ><img src="Images/luckGate.jpg" title="Gate 2"></td>
<?php } ?>
<?php if (($pgate1 == "3") || ($pgate2 == "3") || ($pgate3 == "3")) { ?>
        <td bgcolor = #555555 ><img src="Images/guardGate.jpg" title="Gate 3"></td>
<?php } ?>
<?php if (($pgate1 != "3") && ($pgate2 != "3") && ($pgate3 != "3")) { ?>
        <td bgcolor = #555555 ><img src="Images/luckGate.jpg" title="Gate 3"></td>
<?php } ?>
<?php if (($pgate1 == "4") || ($pgate2 == "4") || ($pgate3 == "4")) { ?>
        <td bgcolor = #555555 ><img src="Images/guardGate.jpg" title="Gate 4"></td>
<?php } ?>
<?php if (($pgate1 != "4") && ($pgate2 != "4") && ($pgate3 != "4")) { ?>
        <td bgcolor = #555555 ><img src="Images/luckGate.jpg" title="Gate 4"></td>
<?php } ?>
<?php if (($pgate1 == "5") || ($pgate2 == "5") || ($pgate3 == "5")) { ?>
        <td bgcolor = #555555 ><img src="Images/guardGate.jpg" title="Gate 5"></td>
<?php } ?>
<?php if (($pgate1 != "5") && ($pgate2 != "5") && ($pgate3 != "5")) { ?>
        <td bgcolor = #555555 ><img src="Images/luckGate.jpg" title="Gate 5"></td>
<?php } ?>
<?php if (($pgate1 == "6") || ($pgate2 == "6") || ($pgate3 == "6")) { ?>
        <td bgcolor = #555555 ><img src="Images/guardGate.jpg" title="Gate 6"></td>
<?php } ?>
<?php if (($pgate1 != "6") && ($pgate2 != "6") && ($pgate3 != "6")) { ?>
        <td bgcolor = #555555 ><img src="Images/luckGate.jpg" title="Gate 6"></td>
<?php } ?>
<?php if (($pgate1 == "7") || ($pgate2 == "7") || ($pgate3 == "7")) { ?>
        <td bgcolor = #555555 ><img src="Images/guardGate.jpg" title="Gate 7"></td>
<?php } ?>
<?php if (($pgate1 != "7") && ($pgate2 != "7") && ($pgate3 != "7")) { ?>
        <td bgcolor = #555555 ><img src="Images/luckGate.jpg" title="Gate 7"></td>
<?php } ?>
<?php if (($pgate1 == "8") || ($pgate2 == "8") || ($pgate3 == "8")) { ?>
        <td bgcolor = #555555 ><img src="Images/guardGate.jpg" title="Gate 8"></td>
<?php } ?>
<?php if (($pgate1 != "8") && ($pgate2 != "8") && ($pgate3 != "8")) { ?>
        <td bgcolor = #555555 ><img src="Images/luckGate.jpg" title="Gate 8"></td>
<?php } ?>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Player Rewards</td><td>2</td><td>5</td><td>5</td><td>4</td><td>10</td><td>7</td><td>8</td><td>9</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Player Penalties</td><td>-1</td><td>-3</td><td>-6</td><td>-2</td><td>-4</td><td>-2</td><td>-9</td><td>-4</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guard Rewards</td><td>1</td><td>7</td><td>7</td><td>8</td><td>5</td><td>5</td><td>5</td><td>5</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Guard Penalties</td><td>-1</td><td>-1</td><td>-7</td><td>-9</td><td>-3</td><td>-7</td><td>-9</td><td>-10</td>
    </tr>
    <tr align="center" >
        <td bgcolor = #555555 align="left" >Probabilities</td><td>0.38</td><td>0.35</td><td>0.16</td><td>0.40</td><td>0.49</td><td>0.59</td><td>0.18</td><td>0.45</td>
    </tr>
</table>



<?php if(($gate == $pgate1) || ($gate == $pgate2) || ($gate == $pgate3)) { ?>
<h4>You Lost round <?php echo $_SESSION['counter']; ?>.<br/>
<!--You selected Gate <?php echo "$gate"; ?> and the Guard was also in Gate <?php echo "$pgate"; ?></h4-->

<?php
    $_SESSION['lost'] = $_SESSION['lost']+1;
    if ($gate == "1")
        $_SESSION['points'] = $_SESSION['points']-1;
    else if ($gate == "2")
        $_SESSION['points'] = $_SESSION['points']-3;
    else if ($gate == "3")
        $_SESSION['points'] = $_SESSION['points']-6;
    else if ($gate == "4")
        $_SESSION['points'] = $_SESSION['points']-2;
    else if ($gate == "5")
        $_SESSION['points'] = $_SESSION['points']-4;
    else if ($gate == "6")
        $_SESSION['points'] = $_SESSION['points']-2;
    else if ($gate == "7")
        $_SESSION['points'] = $_SESSION['points']-9;
    else
        $_SESSION['points'] = $_SESSION['points']-4;
} ?>

<?php if(($gate != $pgate1) && ($gate != $pgate2) && ($gate != $pgate3)) { ?>
<h4>You Won round <?php echo $_SESSION['counter']; ?>.<br/>
<!--You selected Gate <?php echo "$gate"; ?> and the Guard was in Gate <?php echo "$pgate1"; ?>, <?php echo "$pgate2"; ?> and <?php echo "$pgate3"; ?></h4-->
<?php
    $_SESSION['won'] = $_SESSION['won']+1;
    if ($gate == "1")
        $_SESSION['points'] = $_SESSION['points']+2;
    else if ($gate == "2")
        $_SESSION['points'] = $_SESSION['points']+5;
    else if ($gate == "3")
        $_SESSION['points'] = $_SESSION['points']+5;
    else if ($gate == "4")
        $_SESSION['points'] = $_SESSION['points']+4;
    else if ($gate == "5")
        $_SESSION['points'] = $_SESSION['points']+10;
    else if ($gate == "6")
        $_SESSION['points'] = $_SESSION['points']+7;
    else if ($gate == "7")
        $_SESSION['points'] = $_SESSION['points']+8;
    else
        $_SESSION['points'] = $_SESSION['points']+9;
} ?>

<?php
    $handle = fopen('scores.csv', 'a+');
    $data = "$gate,";
    fwrite($handle, $data);
    fclose($handle);
?>

<h3>Your Score</h3>
Won: <?php echo $_SESSION['won']; ?><br/>
Lost: <?php echo $_SESSION['lost']; ?><br/>
Points: <?php echo $_SESSION['points']; ?><br/>
<br/>

<?php if ($_SESSION['counter'] != $maxround) { ?>
<input type="submit" type="submit" name="submit_form" id="submit_form" value="Proceed to Next Round">
<?php } ?>
<?php if ($_SESSION['counter'] == $maxround) {
    $handle = fopen('scores.csv', 'a+');
    $_SESSION['string'] = $_SESSION['won'].",".$_SESSION['lost'].",".$_SESSION['points'];
    $data = $_SESSION['string'];
    fwrite($handle, $data);
    fclose($handle);
?>

If you are among the top scorers, your score will soon be updated on this website.<br/>

<input type="submit" type="submit" name="submit_form" id="submit_form" value="Play Again">
<?php } ?>

</form>

<br/>

<?php if ($_SESSION['counter'] >= 1) { ?>
<!--
    Click to upload your current score to Facebook<br/>
    <input id="uploadfacebook" type="submit" Value="Upload to Facebook" onclick="uploadToFacebook()" />
-->
<?php } ?>


</div>
</div>
<br />

<!-- END Homepage Article -->

<!-- Homepage Article -->

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

<div class="Theme-Sponsors" style="margin-bottom:5px;" align="left">This Page was last updated on August 8, 2010</div>
<!-- END Footer -->

</body>

</html>