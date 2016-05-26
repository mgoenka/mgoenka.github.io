#!/usr/bin/perl -w

print "Content-type: text/html\n\n";
print "<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>";
print "<html><head><title>Veoh Search</title><base href='http://www.veoh.com'/></head>";

# Header directive to show UTF-8 Encoding
print "<meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"/>\n";

if ($ENV{'REQUEST_METHOD'} eq "GET") {$buffer = $ENV{'QUERY_STRING'};}
else { read(STDIN, $buffer, $ENV{'CONTENT_LENGTH'}); }

print "<body>";

@nvpairs = split(/&/, $buffer);
foreach $pair (@nvpairs)
{
	($name, $value) = split(/=/, $pair);
	$data = $value;
    $data =~ tr/+/ /;
    $data =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;

}

print "<Form ACTION=http://www.mohitgoenka.com/cgi-bin/veoh.pl METHOD=Post>";
print "<P Align=Center>";
print "<Font Size = 6px/><B>Search Veoh Videos</B><BR /><Font Size = 2px/><BR />";
print "<Input Name=name style='Width: 220' Value='$data'/>";
print "<INPUT type=submit Value='Search Veoh Videos'/>";
print "</P>";
print "</Form>";

# LWP Module is an external Perl Module used to read the data from a specified URL
# LWP (short for "Library for WWW in Perl") is a popular group of Perl modules for accessing data on the Web
# Here, we use a get() function to obtain the HTML page of the stated url in the form of a string containing the HTML coding
# Also, we only use Simple module of LWP as it is good enough to load all the required functions and thus, more efficient
# A detailed description about the LWP Module can be obtained from "http://www.perl.com/pub/a/2002/08/20/perlandlwp.html"


# Stating the use of LWP Module
use LWP::Simple;

# Checking if the LWP Module is installed
if(eval{require LWP::Simple;}){
} else {
	print "You need to install the Perl LWP module!<br/>";
	exit;
}

# Fetching the content of the URL passed in the get() function and storing the HTML coding in the variable $urldata
my $urldata = get("http://www.veoh.com/search/videos/q/$value");
print "<br/><div align=center>";

# Checking for Playlist Results
my $maxcount = 0;
$maxcount++ while $urldata =~ m{class="runLength"}gsi;
if ($maxcount > 20) {
	$maxcount = 20;
}
if ($maxcount > 0) {
	print "<TABLE><TABLE BORDER><TR Style='Font-Weight: bold;'><TD align=center>Video Name</TD><TD align=center>Category</TD><TD align=center>Duration</TD><TD align=center>Views</TD><TD align=center>Thumb</TD></TR>";
	for ($count = 0;$count < $maxcount;$count++) {
		print "<TR>";
		if ($urldata =~ m{<a  id=\"thumb_browse(.*?)/>}gsi) {
			$t = $1;
		}
		if ($urldata =~ m{class=\"runLength\">(.*?)</span>}gsi) {
			$d = $1;
		}
		if ($urldata =~ m{<a  id=\"thumbTitle_browse(.*?)/a>}gsi) {
			$temp = $1;
			if ($temp =~ m{>(.*?)<}gsi) {
				$vn = $1;
			}
		}
		if ($urldata =~ m{<dl><dt>category:</dt><dd><a(.*?)/a>}gsi) {
			$temp = $1;
			if ($temp =~ m{>(.*?)<}gsi) {
				$c = $1;
			}
		}
		if ($urldata =~ m{views:</dt><dd>(.*?)</dd>}gsi) {
			$v = $1;
		}
		print "<TD>$vn</TD><TD>$c</TD><TD>$d</TD><TD>$v</TD><TD><a target=_blank id=\"thumb_browse$t height=90px width=120px/></TD></TR>";
	}
	print "</TABLE>";
} else {
	print "<h3>No Video Results</h3><br/>";
}

print "</div>";
print "</body>";
print "</html>";