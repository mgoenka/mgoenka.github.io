#!/usr/bin/perl -w

print "Content-type: text/html\n\n";

# Stating the use of LWP Module
use LWP::Simple;

# Checking if the LWP Module is installed
if(eval{require LWP::Simple;}){
} else {
	print "Install the Perl LWP module!<br/>";
	exit;
}

# Fetching the content of the URL passed in the get() function and storing the HTML coding in the variable $urldata
my $urldata = get("http://cs-server.usc.edu:11680/Picasa.html");
my $urldata1 = get("http://cs-server.usc.edu:11680/PicasaRSS.html");

# Checking for Playlist Results
my $maxcount = 0;
my $row = 3;
$maxcount++ while $urldata =~ m{<img src=\"http://lh}gsi;

if ($maxcount > 0) {
	print "<TABLE Cellpadding=\"2\"Cellspacing=\"15\">";
	for ($count = 0;$count < $maxcount/$row;$count++) {
		print "<TR>";
		for ($count1 = 0;$count1 < $row;$count1++) {
			if ($urldata =~ m{<img src=\"http://lh(.*?)>}gsi) {
				$img = $1;
			}
			if ($urldata1 =~ m{http://picasaweb.google.com/mohitgoenka/USCCampus\#(.*?)\"}gsi) {
				$img1 = $1;
			}
			if ($urldata1 =~ m{http://picasaweb.google.com/mohitgoenka/USCCampus\#(.*?)\"}gsi) {
				$img1 = $1;
			}
			if ($urldata1 =~ m{http://picasaweb.google.com/mohitgoenka/USCCampus\#(.*?)<}gsi) {
				$img1 = $1;
			}
			print "<TD align=\"center\" bgcolor=#3f3f3f><a href=\"javascript:slideshow($1)\" onclick=\"\"><img src=\"http://lh$img height=\"100\"/></a></TD>";
		}
		print "</TR>";
	}
	print "</TABLE>";
}