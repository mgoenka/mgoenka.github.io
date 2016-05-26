<?php 
	session_start();
	$expire = time()+60*10; //10 minutes

	if(isset($_SESSION['counter1']))
		$_SESSION['counter1']=$_SESSION['counter1']+1;
	else
	{
		
		$_SESSION['counter1']=0;
	}

	if (!isset($_SESSION['name']))
		$_SESSION['name'] = $_REQUEST['name'];
	if (!isset($_SESSION['email']))
		$_SESSION['email'] = $_REQUEST['email'];	
	if (!isset($_SESSION['gender']))
		$_SESSION['gender'] = $_REQUEST['gender'];	
	if ((!isset($_SESSION['country']) || ($_SESSION['country'] == "NotSet")))
		$_SESSION['country'] = $_REQUEST['country'];
		
	if (($_SESSION['name'] == "") || ($_SESSION['name'] == null))
		unset($_SESSION['name']);
	if (($_SESSION['email'] == "") || ($_SESSION['email'] == null))
		unset($_SESSION['email']);
	if (($_SESSION['gender'] == "") || ($_SESSION['gender'] == null))
		unset($_SESSION['gender']);
	if (($_SESSION['country'] == "") || ($_SESSION['country'] == null))
		unset($_SESSION['country']);

	if ((isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['gender']) && (isset($_SESSION['country']) && ($_SESSION['country'] != "NotSet"))) || (isset($_COOKIE['name']) && isset($_COOKIE['email']) && isset($_COOKIE['gender']) && (isset($_COOKIE['country']) && ($_COOKIE['country'] != "NotSet"))))
	{
		$handle = fopen('data.csv', 'a+');
		$today = date("F j, Y, g:i a");

		if (!(isset($_COOKIE['name']) && isset($_COOKIE['email']) && isset($_COOKIE['gender']) && (isset($_COOKIE['country']) && ($_COOKIE['country'] != "NotSet"))))
		{
			setcookie("name", $_SESSION['name'], $expire);
			setcookie("email", $_SESSION['email'], $expire);
			setcookie("gender", $_SESSION['gender'], $expire);
			setcookie("country", $_SESSION['country'], $expire);
			$data = "\n".$_SESSION['name'].",".$_SESSION['email'].",".$_SESSION['gender'].",".$_SESSION['country'].",$today";
		}
		else
			$data = "\n".$_COOKIE['name'].",".$_COOKIE['email'].",".$_COOKIE['gender'].",".$_COOKIE['country'].",$today";
		
		fwrite($handle, $data);
		fclose($handle);
		
		unset($_SESSION['counter1']);
		unset($_SESSION['counter']);
		unset($_SESSION['gameid']);
		unset($_SESSION['guard']);
		unset($_SESSION['selection']);
		
		if ($_REQUEST['practice'] == "Yes")
			echo "<meta http-equiv='refresh' content='0;url=practice.php'>";
		else
			echo "<meta http-equiv='refresh' content='0;url=gamesv5.php'>";
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

<link rel="shortcut icon" href="../Home/favicon.png" type="image/x-icon" />

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
<h2 id="PT">The Guards and The Treasure</h2>
</div>

<div class="entry">

<h3>Instructions</h3>
<br/>
<h4><b><i>How is the game played?</i></b></h4><br/>
In this game, you will be given several gates to choose to open. Behind each gate, there could be treasure or a guard. If you open a gate which does not have a guard behind it, you will get treasure in terms of a certain amount of reward; on the other hand, you could also be given a certain amount of penalty if you open a gate that is protected by a guard.<br/>
<br/>
You will not know whether there will be guard at certain gate before you open it. Instead, the guards have announced the probability they will be protecting each gate. Every time before you choose a gate, they decide which certainty gates to protect based on the announced probability (something similar as rolling a die). If you choose a gate that is not protected by the guard, you succeed and get your reward; otherwise, you lose and get some penalty.<br/>
<br/>
In the game, you will be given 12 chances to accumulate your reward. In each round, you can chose <b>only one gate</b> to open, no matter how many gates you could choose from. Your chance of successfully win the treasure in each game shot is <b>independent</b> from all the other game shots. We won�t tell you the result of the game until you finish all the 12 attacks. This is mainly because we don�t want you to change your risk-attitude while playing the game, which is very <b>important</b> to our research. But we do keep record of each game and will show you detailed information about your performance when all the rounds are over (12 rounds).
<br/>
<br/>
<table>
<tr>
<td valign="center"><h4><b><i>Win the iPod Touch!</i></b></h4><br/><img src="Images/iPod.jpg" alt="iPod"/></td>
<td>The value of treasures behind each gate might be different. Your ultimate goal is to accumulate as much reward as possible throughout all 12 rounds. Based on your overall performance, you will be given a chance to win the final reward, an <b>Apple iPod Touch</b>. The number of entries will be dependent upon your score. The higher scores you win, the more lottery tickets you will receive, and more likely you will get the iPod Touch. So try your best to get higher scores.<br/>
<br/>
<br/>The lotteries will be held within 6 months of your participation. Winners will be notified by email.<br/>
<h4>Please provide valid email as login information otherwise you won't get a chance to win the iPod Touch.</h4><br/></td>
</tr>
</table>
<h4><b><i>Quick Start</i></b></h4><br/>
<ol>
<li>Submit the required personal information to start playing the game.</li>
<li>There will be several sections in the game. In each section, you will be asked to open one gate. The payoff of successfully attacking each gate and being caught by the guard will also be given to you. Besides, you will also be told the probability of having a guard behind each gate, which is also the probability for you to be caught by the guard.</li>
<li>From section to section, the payoffs and the wining probability of each gate will vary. Your score is calculated by summing up the payoff you gain during all sections.</li>
<li><h4>You <b>only have one chance</b> to score, this score will be used to decide your lottery tickets for the iPod Touch.</h4></li>
</ol>
<br/>

<form method="post" action="<?php $_SERVER['PHP_SELF']?>">

<h5>All the fields are mandatory</h5>

<?php if (($_SESSION['counter1'] > 0) && (!isset($_SESSION['name']))) { ?>
You did not enter your Name.<br/>
Please enter your Name to start playing.<br/><br/>
<?php } ?>
<?php if (!isset($_SESSION['name'])) { ?>
	<h4>Enter Your Name*</h4>
	<input name="name" type="text" style = "width:250px"><br /><br />
<?php } ?>

<?php if (($_SESSION['counter1'] > 0) && (!isset($_SESSION['email']))) { ?>
You did not enter your Email Address.<br/>
Please enter your Email Address to start playing.<br/><br/>
<?php } ?>
<?php if (!isset($_SESSION['email'])) { ?>
	<h4>Enter Your Email Address*</h4>
	<input name="email" type="text" style = "width:250px"><br /><br />
<?php } ?>

<?php if ((($_SESSION['counter1'] > 0) && (!isset($_SESSION['gender']))) || (($_SESSION['counter1'] > 0) && (!isset($_SESSION['country']) || ($_SESSION['country'] == "NotSet")))) { ?>
You did not enter your Gender.<br/>
Please enter your Gender to start playing.<br/><br/>
<?php } ?>
<?php if (!isset($_SESSION['gender']) || ((!isset($_SESSION['country']) || ($_SESSION['country'] == "NotSet")))) { ?>
	<h4>Gender*</h4>
	<input type="radio" name="gender" value="Male"/> Male<br />
	<input type="radio" name="gender" value="Female"/> Female
	<br /><br />
<?php } ?>

<?php if ((($_SESSION['counter1'] > 0) && (!isset($_SESSION['gender']))) || ($_SESSION['counter1'] > 0) && (!isset($_SESSION['country']) || ($_SESSION['country'] == "NotSet"))) { ?>
You did not enter your Country.<br/>
Please enter your Country to start playing.<br/><br/>
<?php } ?>
<?php if ((!isset($_SESSION['gender']) || (!isset($_SESSION['country']) || ($_SESSION['country'] == "NotSet")))) { ?>
<h4>Which country did you attend your high school at?*</h4>
<select name="country">
<option value="NotSet" selected="selected">Select a Country</option>
<option value="China">China</option>
<option value="India">India</option>
<option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="The Democratic Republic of The Congo">Congo, The Democratic Republic of The</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'ivoire">Cote D'ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-bissau">Guinea-bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Islamic Republic of Iran">Iran, Islamic Republic of</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
<option value="Republic of Korea">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="The Former Yugoslav Republic of Macedonia">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Federated States of Micronesia">Micronesia, Federated States of</option>
<option value="Republic of Moldova">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Occupied Palestinian Territory">Palestinian Territory, Occupied</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia and Montenegro">Serbia and Montenegro</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="United Republic of Tanzania">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Timor-leste">Timor-leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet Nam">Viet Nam</option>
<option value="British Virgin Islands">Virgin Islands, British</option>
<option value="U.S. Virgin Islands">Virgin Islands, U.S.</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
<br /><br />
<?php } ?>

<input type="checkbox" name="practice" value="Yes"/> Play Practice Round<br />
<br/>
<input type="submit" value="Submit">
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