#!/usr/bin/perl -w

print "Content-type: text/html\n\n";
print "<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>";
print "<html><head><title>Youtube Search</title><base href='http://www.youtube.com'/></head>";

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

print "<Form ACTION=http://www.mohitgoenka.com/cgi-bin/youtube.pl METHOD=Post>";
print "<P Align=Center>";
print "<Font Size = 6px/><B>Search Youtube Videos</B><BR /><Font Size = 2px/><BR />";
print "<Input Name=name style='Width: 220' Value='$data'/>";
print "<INPUT type=submit Value='Search Youtube Videos'/>";
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
my $urldata = get("http://www.youtube.com/results?search_query=$value&search_type=&aq=f");
print "<br/><div align=center>";

# Checking for Playlist Results
my $maxcount = 0;
$maxcount++ while $urldata =~ m{<div class="playlist-short-title">}gsi;
if ($maxcount >3) {
	$maxcount = 3;
}
if ($maxcount > 0) {
	print "<h3>Playlist Results</h3><br/><TABLE><TABLE BORDER><TR Style='Font-Weight: bold;'><TD align=center>Video Name</TD><TD align=center>Description</TD><TD align=center>Thumb</TD></TR>";
	for ($count = 0;$count < $maxcount;$count++) {
		print "<TR>";
		if ($urldata =~ m{<div class="playlist-short-title">(.*?)</div>}gsi) {
			print "<TD>$1</TD>";
		}
		if ($urldata =~ m{<ul>(.*?)</ul>}gsi) {
			print "<TD><ul>";
			$desc = $1;
			$listcount = 0;
			$listcount++ while ($desc =~ m{<div class="playlist-video">(.*?)</div>}gsi);
			for ($i = 0;$i < $listcount ;$i++) {
				if ($desc =~ m{<span><a(.*?)</span>}gsi) {
					print "<li><a$1</li>";
				}
			}
			print "</ul></TD>";
		}
		if ($urldata =~ m{<div class="playlist-alt-query">}gsi){
		}
		for ($i = 0;$i < $count;$i++) {
			if ($urldata =~ m{<div class="playlist-short-title">(.*?)</div>}gsi) {
			}
		}
		if ($urldata =~ m{<div class="playlist-main-thumb">(.*?)</div>}gsi) {
			$thumb = $1;
			if ($thumb =~ m{<img(.*?)>}gsi) {
				print "<TD align=center><img$1></TD>";
			}
		}
		if ($urldata =~ m{<ul>(.*?)</ul>}gsi) {
		}
		print "</TR>";
	}
	print "</TABLE>";
} else {
	print "<h3>No Playlist Results</h3><br/>";
}

# Checking for Channel Results
if ($urldata =~ m{<div class="channel-alt-query">}gsi) {
}
$maxcount = 0;
$maxcount++ while $urldata =~ m{<div class="channel-long-title">}gsi;
if ($maxcount >3) {
	$maxcount = 3;
}
if ($maxcount > 0) {
	print "<h3>Channel Results</h3><br/><TABLE><TABLE BORDER><TR Style='Font-Weight: bold;'><TD align=center>Video Name</TD><TD align=center>Description</TD><TD align=center>Thumb</TD></TR>";
	for ($count = 0;$count < $maxcount;$count++) {
		print "<TR>";
		if ($urldata =~ m{<div class="channel-long-title">(.*?)</div>}gsi) {
			print "<TD>$1</TD>";
		}
		if ($urldata =~ m{<div  class="channel-description">(.*?)</div>}gsi) {
			print "<TD>$1</TD>";
		}
		if ($urldata =~ m{<div class="channel-alt-query">}gsi) {
		}
		for ($i = 0;$i < $count;$i++) {
			if ($urldata =~ m{<div class="channel-long-title">(.*?)</div>}gsi) {
			}
		}
		if ($urldata =~ m{<div class="user-thumb-xlarge"><div>(.*?)</div>}gsi) {
			$thumb = $1;
			if ($thumb =~ m{<img(.*?)>}gsi) {
				print "<TD align=center><img$1></TD>";
			}
		}
		if ($urldata =~ m{<div  class="channel-description">(.*?)</div>}gsi) {
		}
		print "</TR>";
	}
	print "</TABLE>";
} else {
	print "<h3>No Channel Results</h3><br/>";
}

# Checking for Promoted Video Results
$maxcount = 0;
$maxcount++ while $urldata =~ m{<div class="spons-vid-text search-ad-description">}gsi;
if ($maxcount >3) {
	$maxcount = 3;
}
if ($maxcount > 0) {
	print "<h3>Promoted Video Results</h3><br/><TABLE><TABLE BORDER><TR Style='Font-Weight: bold;'><TD align=center>Video Name</TD><TD align=center>Description</TD><TD align=center>Rating</TD><TD align=center>Thumb</TD></TR>";
	for ($count = 0;$count < $maxcount;$count++) {
		print "<TR>";
		if ($urldata =~ m{style="padding-top: 2px;">(.*?)</a>}gsi) {
			print "<TD>$1</a></TD>";
		}
		if ($urldata =~ m{<div class="spons-vid-text search-ad-description">(.*?)</div>}gsi) {
			print "<TD>$1</TD>";
		}
		if ($urldata =~ m{<table(.*?)</table>}gsi) {
			$thumb = $1;
			if ($thumb =~ m{<button class="master-sprite ratingVS ratingVS-(.*?)" }gsi) {
				print "<TD>$1</TD>";
			} else {
				print "<TD>N/A</TD>";
			}
		}
		if ($urldata =~ m{<div style="margin-bottom: 2em;">}gsi) {
		}
		for ($i = 0;$i <= $count;$i++) {
			if ($urldata =~ m{<div style="margin-bottom:20px">}gsi) {
			}
		}
		if ($urldata =~ m{<img(.*?)>}gsi) {
			print "<TD align=center><img$1></TD>";
		}
		if ($urldata =~ m{<div class="spons-vid-text search-ad-description">}gsi) {
		}
		print "</TR>";
	}
	print "</TABLE>";
} else {
	print "<h3>No Promoted Video Results</h3><br/>";
}

print "</div>";
print "</body>";
print "</html>";