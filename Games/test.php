<?php
    session_start();
    $expire = time()+60*10;

    $_SESSION['name'] = $_REQUEST['name'];
    $_SESSION['email'] = $_REQUEST['email'];

    if(isset($_SESSION['counter1']))
        $_SESSION['counter1']=$_SESSION['counter1']+1;
    else
        $_SESSION['counter1']=0;


    function get_facebook_cookie($app_id) {
  $args = array();
  parse_str(trim($_COOKIE['fbs_' . $app_id], '\\"'), $args);
  ksort($args);
  $payload = '';
  foreach ($args as $key => $value) {
    if ($key != 'sig') {
      $payload .= $key . '=' . $value;
    }
  }

  return $args;
}

    $cookie = get_facebook_cookie('138151759539266');

/*    if(isset($_SESSION['user']))
    {
        unset($_SESSION['counter']);
        $handle = fopen('scores.csv', 'a+');
        $today = date("F j, Y, g:i a");
        $when = getdate(date("U"));
        $data = "\n".$_SESSION['pid'].", $today,";
        fwrite($handle, $data);
        fclose($handle);
        echo "<meta http-equiv='refresh' content='0;url=game.php#GT'>";
    }*/

    if ((isset($_SESSION['name']) && isset($_SESSION['email'])) || (isset($_COOKIE['name']) && isset($_COOKIE['email'])))
    {
        $handle = fopen('data.csv', 'a+');
        $today = date("F j, Y, g:i a");

        if (!(isset($_COOKIE['name']) && isset($_COOKIE['email'])))
        {
            setcookie("name", $_SESSION['name'], $expire);
            setcookie("email", $_SESSION['email'], $expire);
            $data = "\n".$_SESSION['name'].",".$_SESSION['email'].$id.",$today";
        }
        else
            $data = "\n".$_COOKIE['name'].",".$_COOKIE['email'].",".$id.",$today";

        fwrite($handle, $data);
        fclose($handle);
        /*$handle = fopen('scores.csv', 'a+');
        $today = date("F j, Y, g:i a");
        $when = getdate(date("U"));
        $data = "\n".$_SESSION['pid'].",$today";
        fwrite($handle, $data);
        fclose($handle);*/
        unset($_SESSION['counter1']);
        unset($_SESSION['counter']);
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

<link rel="shortcut icon" href="../Home/favicon.png" type="image/x-icon" />

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
<h2 id="PT">The Guards and The Treasure</h2>
</div>

<div class="entry">

<h3>Instructions</h3>
<br/>The Guards and Treasure online game is developed to simulate the real-world security. You will be asked to play as attacker. There are several doors that you could choose to attack, behind each of which there would be treasure or a guard. You will also be told the probability for each door to have a guard behind it as well as the value of the treasure behind the door and the penalty of being caught by the guard. The mission is to choose one door to attack to win as high payoff as possible.<br/>
<br/>
<table>
<tr>
<td valign="center"><img src="Images/iPod.jpg" alt="iPod"/></td>
<td>While playing the game, you will be eligible to win an iPod. The number of entries will be dependant upon your score, higher scores increase the number of lottery tickets received; however, you cannot win more than one iPod.<br/>
<br/>
The lotteries will be held within 6 months of your participation.  Winners will be notified by email.<br/>
<h4>Please provide valid email as login information otherwise you won't get a chance to win the iPod Touch.</h4><br/></td>
</tr>
</table>
<ol>
<li>Submit your Player ID, Name and Email address to start playing the game.</li>
<li>There will be several sections in the game. In each section, you will be asked to attack one door. The payoff of successfully attacking each door and being caught by the guard will also be given to you. Besides, you will also be told the probability of having a guard behind each door, which is also the probability for you to be caught by the guard.</li>
<li>From section to section, the payoffs and the wining probability of each door will vary. Your score is calculated by summing up the payoff you gain during all sections.</li>
</ol>
<br/>

<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
Test<br/>
<?= $cookie['uid']; ?>
<?= $cookie['username']; ?>
<?php echo $cookie['name']; ?>
<?php echo $cookie['uname']; ?>
<?php echo $cookie['email']; ?>
<?php echo $cookie['uemail']; ?>
<?php echo $cookie['email']; ?>
<br/>
Test Over
<?php if ((!isset($_SESSION['email'])) || (!isset($_SESSION['email']))) { ?>
    <h5>All the fields are mandatory</h5>
<?php } ?>

<?php if (($_SESSION['counter1'] > 0) && (!isset($_SESSION['name']))) { ?>
You did not enter your Name.<br/>
Please enter your Name to start playing.<br/><br/>
<?php } ?>

<?php if (($_SESSION['counter1'] > 0) && (!isset($_SESSION['email']))) { ?>
You did not enter your Email Address.<br/>
Please enter your Email Address to start playing.<br/><br/>
<?php } ?>

<?php if (!isset($_SESSION['name'])) { ?>
<h4>Enter Your Name*</h4>
<input name="name" type="text" style = "width:250px"><br /><br />
<?php } ?>

<?php if (!isset($_SESSION['email'])) { ?>
<h4>Enter Your Email Address*</h4>
<input name="email" type="text" style = "width:250px"><br /><br />
<?php } ?>

<?php if ((!isset($_SESSION['email'])) || (!isset($_SESSION['email']))) { ?>
    <input type="submit" value="Submit">
<?php } else { ?>
    <input type="submit" value="Start Playing">
<?php } ?>

<br/>
<br/>

</form>


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

<div class="Theme-Sponsors" style="margin-bottom:5px;" align="left">This Page was last updated on August 23, 2010</div>
<!-- END Footer -->

</body>

</html>