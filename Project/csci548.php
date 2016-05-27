<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- Your Site Title -->
<title>CSCI 548 - Project</title>
<!-- END TITLE -->

<link rel="Shortcut Icon" href="http://www.usc.edu//assets/usc/img/01/mono-gold-cardinal-big.gif"/>

<!-- CSS Style Sheets -->
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<!-- END CSS Style Sheet -->

<script type="text/javascript" src="csci548.js" language="JAVASCRIPT"></script>
<script language="javascript">
var req;

function ajaxFunction()
{
    document.getElementById('uploaded').innerHTML="<h2>Following sources have been submitted for integration:</h2><br/>";
}

function filename()
{
    var w = document.myForm.fileSelection.selectedIndex;
    document.getElementById('uploaded').innerHTML="<h2>Following sources have been submitted for integration:</h2><br/>"+document.myForm.fleSelection.options[w].text;
}

</script>

</head>

<body id="section-index">

<div id="header">

<table><tr><td></td><td>
<!-- Your Site Slogan -->
<h2>CSCI 548 - Project</h2>
<!-- END Site Slogan -->
<!-- Your Site Name -->
<h1>Integration of Web Resources and Databases using Hybrid Algorithm</h1>
<!-- END Site Name -->



</td><td valign="bottom">

</td>
</tr></table>


</div>

<!-- Change the banner by replacing the image in: img/orange/orange-banner.jpg -->
<div id="main-image" style="margin-bottom:5px;"></div>
<!-- END Banner -->


<div id="container">
<div id="content">

<!-- Content -->
<div id="content-main">

<!-- Homepage Article -->
<h2>Web Resource</h2><br/>
Specify a URL to RSS Feed:<br/>
<form id="myForm" method="post" target="uploadFrame" action="submit1.php">
        <input type="text" name="txtFile" id="txtFile" width="800px"/>
        <input type="submit" id="submitID" name="submit" value="Submit" />
    </form>
<br/>
<h2>Database</h2><br/>
    <form name="myForm" method="post" target="uploadFrame" onsubmit="ajaxFuntion()">
        <input type="file" name="txtFile" id="txtFile" width="800px"/><br/><br/>
        File Type:
        <select name='fileSelection'>
        <option value="MS Access">MS Access</option>
        <option value="MySql">MySql</option>
        <option value="Oracle">Oracle</option>
        </select><br/><br/>
        <input type="submit" id="submitID" name="submit" value="Upload" />
    </form>

<div id="uploaded">
</div>

<div id="files">
</div>
<!-- END Homepage Article -->
<!-- Homepage Article -->
<div id="uploaded">
</div>

<div id="files">
</div>
<!-- END Homepage Article -->
</div>
</div>
</div>

<div class="footer-area" style="margin-top:5px;"><b>Copyright &copy; 2010 - All Rights Reserved</b>
<div id="back-to-top"><a href="javascript:backToTop()">Back to Top</a>
</div>
</div>

<!-- END Footer -->
<noscript/>
</body>
</html>