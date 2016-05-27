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
    <h3>Practice Round <?php echo $_SESSION['counter']+1; ?> of 2</h3>
<?php } ?>

<?php
    if ($_SESSION['counter'] >= $maxround)
    { ?>
        <font color="white">
        <table align="center" cellspacing="10" cellpadding="0" bgcolor="black">
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
    <?php    } ?>
        <tr align = "center">
            <td>Total</td><td></td><td></td><td><?php echo $twon; ?></td><td><?php echo $tlost; ?></td><td><?php echo $tpoints; ?></td>
        </tr>
    </table></font>
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

<font color="white">
<table align="center" cellspacing="10" cellpadding="0" bgcolor="black">
    <tr bgcolor = #3b9c9c align="center" style="font-size: large">
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
        <td bgcolor = #555555 align="left" style="font-size: large">Your Rewards</td>
        <td valign="bottom">4<br/><img src="Images/w4.jpg"></td>
        <td valign="bottom">3<br/><img src="Images/w3.jpg"></td>
        <td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
        <td valign="bottom">5<br/><img src="Images/w5.jpg"></td>
        <td valign="bottom">7<br/><img src="Images/w7.jpg"></td>
    </tr>
    <tr align="center">
        <td bgcolor = #555555 align="left" style="font-size: large">Your Penalties</td>
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
    <tr align="center" style="font-size: large">
        <td bgcolor = #555555 align="left" >Guards' Rewards</td><td>8</td><td>6</td><td>2</td><td>1</td><td>10</td>
    </tr>
    <tr align="center" style="font-size: large">
        <td bgcolor = #555555 align="left" >Guards' Penalties</td><td>-5</td><td>-3</td><td>-6</td><td>-3</td><td>-8</td>
    </tr>
<?php } ?>

<?php if ($_SESSION['counter'] < $maxround) { ?>
</table>
</font>

<br/>Please choose a door to attack. Press the Submit Button to confirm your selection.<br/>
<br/>

<input type="submit" type="submit" name="submit_form" id="submit_form" value="Submit">
<br/>
<h4>Please refresh the page if your game is stuck</h4>
</form>
<?php } ?>

<?php if ($_SESSION['counter'] >= $maxround) { ?>
    <br/>

    <h2><a href="game.php">Start Game</a></h2>
    <br/>

<?php } ?>


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