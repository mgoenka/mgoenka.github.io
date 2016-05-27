debugger;
window.onload=right;

function getDesc(tip) {
 if (document.getElementById) {
  document.getElementById("tipArea").innerHTML = tip }
 else if (navigator.appName.indexOf("Netscape") != -1) {
  document.tipArea1.document.tipArea1.document.write(tip)
  document.tipArea1.document.tipArea1.document.close() }
 }
// Below are the sub-links or message that appears when users hover the mouse over each tab.
// Edit the links or messages to suit your needs.
var menu_1 = 'To know more about the features of our various products.';
var menu_2 = 'To know more about our product range.';
var menu_3 = '<a href="javascript: alert(\'Not functional!\');">About the author</a> | <a href="javascript: alert(\'Not functional!\');">About the script</a>';
var menu_4 = 'To contact us for queries or suggestions.';

function right()
{
    html_text = "<ul>";

    html_text += "<li><a href=index.html title=Home onmouseover=\"getDesc(menu_1)\">Home</a></li>";
    html_text += "<li><a href=Career title=Career onmouseover=\"getDesc(menu_2)\">Career</a></li>";
    html_text += "<li><a href=Entertainment title=Entertainment onmouseover=\"getDesc(menu_3)\">Entertainment</a></li>";
    html_text += "<li><a href=Events title=Events onmouseover=\"getDesc(menu_4)\">Events</a></li>";
    html_text += "<li><a href=Gallery title=Gallery onmouseover=\"getDesc(menu_1)\">Gallery</a></li>";
    html_text += "<li><a href=Contact title=Contact onmouseover=\"getDesc(menu_2)\">Contact</a></li>";

    html_text += "</ul>";

    document.getElementById('navigation').innerHTML = html_text;



    html_text = "<ul>";

    html_text += "<li class=cat style=border-top: 1px solid #000;>Mohit Goenka</li>";
    html_text += "<li><a href=Resume.pdf target=_blank>Resume</a></li>";

    html_text += "<li class=cat>Social Profiles</li>";
    html_text += "<li><a href=http://www.facebook.com/mohitgoenka target=_blank>Facebook</a></li>";
    html_text += "<li><a href=http://www.orkut.com/Main#Profile?uid=7951157826237613831 target=_blank>Orkut</a></li>";
    html_text += "<li><a href=http://twitter.com/mohitgoenka target=_blank>Twitter</a></li>";
    html_text += "<li><a href=http://www.google.com/profiles/mohitgoenka target=_blank>Google</a></li>";
    html_text += "<li><a href=http://www.linkedin.com/in/mohitgoenka target=_blank>Linked In</a></li>";

    html_text += "<li class=cat>Updates</li>";

    html_text += "<li>&nbsp;May 19, 2010</li>";
    html_text += "<li><a href=Career target=_parent>Career &raquo; Education</a></li>";
    html_text += "<li><a href=Career/Work_Experience.html target=_parent>Career &raquo; Work Experience</a></li>";

    html_text += "<li>&nbsp;April 30, 2010</li>";
    html_text += "<li><a href=Career/Project.html target=_parent>Career &raquo; Projects</a></li>";
    html_text += "<li><a href=Career/Reference.html target=_parent>Career &raquo; References</a></li>";

    html_text += "<li>&nbsp;April 29, 2010</li>";
    html_text += "<li><a href=index.html target=_parent>Home</a></li>";

    html_text += "<li>&nbsp;April 23, 2010</li>";
    html_text += "<li><a href=Entertainment/Downloads.html target=_parent>Entertainment &raquo; Downloads</a></li>";
    html_text += "<li><a href=Entertainment/Frequently_Visited_Links.html target=_parent>Entertainment &raquo; Links</a></li>";

    html_text += "<li>&nbsp;April 13, 2010</li>";
    html_text += "<li><a href=Career/Presentations.html target=_parent>Career &raquo; Presentations</a></li>";
    html_text += "<li><a href=Career/Achievements.html target=_parent>Career &raquo; Achievements</a></li>";
    html_text += "<li><a href=Gallery/Videos.html target=_parent>Gallery &raquo; Videos</a></li>";

    html_text += "<li>&nbsp;April 12, 2010</li>";
    html_text += "<li><a href=Events target=_parent>Events</a></li>";

    html_text += "<li>&nbsp;April 8, 2010</li>";
    html_text += "<li><a href=Entertainment target=_parent>Entertainment &raquo; Poems</a></li>";
    html_text += "<li><a href=Contact target=_parent>Contact</a></li>";

    html_text += "<li>&nbsp;March 28, 2010</li>";
    html_text += "<li><a href=Entertainment/Quotations.html target=_parent>Entertainment &raquo; Quotations</a></li>";
    html_text += "<li><a href=Gallery target=_parent>Gallery &raquo; Photographs</a></li>";


    html_text += "</ul>";
    document.getElementById('nav-right').innerHTML = html_text;
}


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