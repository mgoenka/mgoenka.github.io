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
my $urldata = get("http://cs-server.usc.edu:11680/Facebook.html");

# Checking for Playlist Results
my $maxcount = 0;
my $row = 3;
$maxcount++ while $urldata =~ m{http://photos}gsi;

if ($maxcount > 0) {
	print "<TABLE Cellpadding=\"2\"Cellspacing=\"15\">";
	for ($count = 0;$count < $maxcount/$row;$count++) {
		print "<TR>";
		for ($count1 = 0;$count1 < $row;$count1++) {
			if ($urldata =~ m{http://photos(.*?)_s.jpg}gsi) {
				print "<TD align=\"center\" bgcolor=#3f3f3f><a href=\"http://photos$1_n.jpg\" target=\"_blank\"><img src=\"http://photos$1_s.jpg\" height=\"100\"/></a></TD>";
			}
		}
		print "</TR>";
	}
	print "</TABLE>";
}