debugger;
window.onload=right;


function backToTop() {
    var x1 = x2 = x3 = 0;
    var y1 = y2 = y3 = 0;

    if (document.documentElement) {
        x1 = document.documentElement.scrollLeft || 0;
        y1 = document.documentElement.scrollTop || 0;
    }

    if (document.body) {
        x2 = document.body.scrollLeft || 0;
        y2 = document.body.scrollTop || 0;
    }

    x3 = window.scrollX || 0;
    y3 = window.scrollY || 0;

    var x = Math.max(x1, Math.max(x2, x3));
    var y = Math.max(y1, Math.max(y2, y3));

    window.scrollTo(Math.floor(x / 2), Math.floor(y / 2));

    if (x > 0 || y > 0) {
        window.setTimeout("backToTop()", 25);
    }
}


function slideshow(url)
{
	document.getElementById('Thumb_USC').innerHTML = "<IFRAME FRAMEBORDER='0px' WIDTH=555px' HEIGHT='530px' style=\"overflow:auto;\" src='http://picasaweb.google.com/mohitgoenka/USCCampus#slideshow/"+url+"'></iframe>";
}


/*function head(title, subtitle)
{
	html_text = "<TABLE><TR><TD><img src=\"image/Mohit_Goenka.jpg\" alt=\"Mohit's Castle\" height=\"80\"/></TD><TD valign=\"bottom\" width=\"641\">";

	html_text += "<h1>"+title+"</h1>";

	html_text += "<h2>"+subtitle+"</h2>";

	html_text += "</TD><TD valign=bottom>";

	html_text += "<form method=get action=http://www.google.com/search target=_blank align=right>";
	html_text += "<input type=radio  name=sitesearch value=http://www-scf.usc.edu/~mgoenka checked />Mohit's Castle &nbsp; &nbsp; &nbsp;<input type=radio  name=sitesearch value='' />Google<br />";
	html_text += "<input type=text name=q size=31 maxlength=255 value='' />";
	html_text += "<input type=submit value=Search /><br />";
	html_text += "</form>";
	html_text += "</TR></TABLE>";

	document.getElementById('header').innerHTML = html_text;
	
	right();
}
*/