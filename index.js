window.onload=right;

function right() {
    var node,
        html_text = "<ul>";

    html_text += "<li><a href=\"http://www.mohitgoenka.com\" title=Home>Home</a></li>";
    html_text += "<li><a href=\"Career\" title=Career>Career</a></li>";
    html_text += "<li><a href=\"Entertainment\" title=Entertainment>Entertainment</a></li>";
    html_text += "<li><a href=\"Events\" title=Events>Events</a></li>";
    html_text += "<li><a href=\"Gallery\" title=Gallery>Gallery</a></li>";
    html_text += "<li><a href=\"Resources\" title=Resources>Resources</a></li>";
    html_text += "<li><a href=\"Cricket\" title=Cricket>Cricket</a></li>";
    html_text += "<li><a href=\"Contact\" title=Contact>Contact</a></li>";

    html_text += "</ul>";

    document.getElementById('navigation').innerHTML = html_text;




    html_text = "<iframe src=\"http://www.facebook.com/plugins/like.php?href=www.mohitgoenka.com&amp;layout=standard&amp;show_faces=true&amp;width=200&amp;action=like&amp;colorscheme=dark&amp;height=80\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:200px; height:80px;\" allowTransparency=\"true\"></iframe>";

    html_text += "<iframe src=\"http://www.facebook.com/plugins/activity.php?site=www.mohitgoenka.com&amp;width=200&amp;height=200&amp;header=false&amp;colorscheme=dark&amp;border_color=black&amp;recommendations=true\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:200px; height:120px;\" allowTransparency=\"true\"></iframe>";

    html_text += "<script> new TWTR.Widget({ version: 2, type: 'profile', rpp: 4, interval: 6000, width: '200', height: 300, theme: {shell: {background: #333333', color: '#ffffff'}, tweets: { background: '#000000', color: '#ffffff', links: '#33ccff'}}, features: { scrollbar: false, loop: false, live: false, hashtags: false, timestamp: false, avatars: false, behavior: 'all'}}).render().setUser('mohitgoenka').start(); </script>";


    html_text += "<center>";
    html_text += "<a class=\"url\" href=\"http://www.facebook.com/mohitgoenka\" rel=\"me\" target=\"_blank\"><img alt=\"Facebook\" src=\"http://mgoenka.github.io/Home/facebookicon.png\" height=\"32px\" width=\"32px\"/></a>";
    html_text += "<a class=\"url\" href=\"http://www.twitter.com/mohitgoenka\" rel=\"me\" target=\"_blank\"><img alt=\"Twitter\" src=\"http://mgoenka.github.io/Home/twittericon.png\" height=\"32px\" width=\"32px\"/></a>";
    html_text += "<a class=\"url\" href=\"http://www.google.com/profiles/mohitgoenka\" rel=\"me\" target=\"_blank\"><img alt=\"Google Buzz\" src=\"http://mgoenka.github.io/Home/buzzicon.png\" height=\"32px\" width=\"32px\"/></a>";
    html_text += "<a class=\"url\" href=\"http://www.orkut.com/Main#Profile?uid=7951157826237613831\" rel=\"me\" target=\"_blank\"><img alt=\"Orkut\" src=\"http://mgoenka.github.io/Home/orkuticon.png\" height=\"32px\" width=\"32px\"/></a>";
    html_text += "<a class=\"url\" href=\"http://www.linkedin.com/in/mohitgoenka\" rel=\"me\" target=\"_blank\"><img alt=\"LinkedIn\" src=\"http://mgoenka.github.io/Home/linkedinicon.png\" height=\"32px\" width=\"32px\"/></a>";
    html_text += "<a class=\"url\" href=\"http://www.jobnob.com/mohit-goenka\" rel=\"me\" target=\"_blank\"><img alt=\"Jobnob\" src=\"http://mgoenka.github.io/Home/jobnoblogo.gif\" height=\"32px\" width=\"32px\"/></a>";
    html_text += "<a class=\"url\" href=\"http://picasaweb.google.com/mohitgoenka\" rel=\"me\" target=\"_blank\"><img alt=\"Picasa Web Albums\" src=\"http://mgoenka.github.io/Home/picasaicon.png\" height=\"32px\" width=\"32px\"/></a>";
    html_text += "<a class=\"url\" href=\"http://youtube.com/user/mohitgoenka\" rel=\"me\" target=\"_blank\"><img alt=\"YouTube\" src=\"http://mgoenka.github.io/Home/youtubeicon.png\" height=\"32px\" width=\"32px\"/></a>";
    html_text += "<a class=\"url\" href=\"http://mohitgoenka.blogspot.com\" rel=\"me\" target=\"_blank\"><img alt=\"Blogger\" src=\"http://mgoenka.github.io/Home/bloggericon.png\" height=\"32px\" width=\"32px\"/></a>";
    html_text += "</center>";

    html_text += "<ul>";
    html_text += "<li><iframe src='http://mgoenka.github.io/Home/twitter.html' width='220px' height='430px' noresize=\"noresize\" scrolling=\"auto\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\">Sorry, your browser doesn't support iframes.</iframe></li>";


    /*
    html_text += "<li class=cat>Updates</li>";

    html_text += "<li><a href=\"http://games.mohitgoenka.com\"><img src=\"http://games.mohitgoenka.com/Images/iPod.jpg\" alt=\"iPod\" align=\"center\" width=\"175px\" style=\"vertical-align: middle\";/>Click here to Win an iPod Touch</a></li>";


    html_text += "<li>&nbsp;August 23, 2010</li>";
    html_text += "<li><a href=http://games.mohitgoenka.com target=_parent>Games</a></li>";

    html_text += "<li>&nbsp;August 12, 2010</li>";
    html_text += "<li><a href=http://career.mohitgoenka.com target=_parent>Career &raquo; Education</a></li>";
    html_text += "<li><a href=http://games.mohitgoenka.com target=_parent>Games</a></li>";

    html_text += "<li>&nbsp;August 5, 2010</li>";
    html_text += "<li><a href=http://mgoenka.github.io/Entertainment/Downloads.html target=_parent>Entertainment &raquo; Downloads</a></li>";

    html_text += "<li>&nbsp;July 31, 2010</li>";
    html_text += "<li><a href=http://career.mohitgoenka.com/Reference.html target=_parent>Career &raquo; References</a></li>";

    html_text += "<li>&nbsp;July 20, 2010</li>";
    html_text += "<li><a href=http://www.mohitgoenka.com target=_parent>Home</a></li>";
    html_text += "<li><a href=http://mgoenka.github.io/Entertainment/Quotations.html target=_parent>Entertainment &raquo; Quotations</a></li>";
    html_text += "<li><a href=http://mgoenka.github.io/Resources target=_parent>Resources</a></li>";

    html_text += "<li>&nbsp;July 17, 2010</li>";
    html_text += "<li><a href=http://contact.mohitgoenka.com target=_parent>Contact</a></li>";

    html_text += "<li>&nbsp;July 2, 2010</li>";
    html_text += "<li><a href=http://mgoenka.github.io/Entertainment target=_parent>Entertainment &raquo; Poems</a></li>";
    html_text += "<li><a href=http://mgoenka.github.io/Entertainment/Frequently_Visited_Links.html target=_parent>Entertainment &raquo; Links</a></li>";
    html_text += "<li><a href=http://mgoenka.github.io/Events target=_parent>Events</a></li>";

    html_text += "<li>&nbsp;June 29, 2010</li>";
    html_text += "<li><a href=http://career.mohitgoenka.com/Work_Experience.html target=_parent>Career &raquo; Work Experience</a></li>";
    html_text += "<li><a href=http://career.mohitgoenka.com/Project.html target=_parent>Career &raquo; Projects</a></li>";

    html_text += "<li>&nbsp;April 13, 2010</li>";
    html_text += "<li><a href=http://career.mohitgoenka.com/Presentations.html target=_parent>Career &raquo; Presentations</a></li>";
    html_text += "<li><a href=http://career.mohitgoenka.com/Achievements.html target=_parent>Career &raquo; Achievements</a></li>";
    html_text += "<li><a href=http://mgoenka.github.io/Gallery/Videos.html target=_parent>Gallery &raquo; Videos</a></li>";

    html_text += "<li>&nbsp;March 28, 2010</li>";
    html_text += "<li><a href=http://mgoenka.github.io/Gallery target=_parent>Gallery &raquo; Photographs</a></li>";
*/

    html_text += "</ul>";

    node = document.getElementById('nav-right');

    if (node) {
        node.innerHTML = html_text;
    }
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

function popup(url, name) {
 var width  = 800;
 var height = 400;
 var left   = (screen.width  - width)/2;
 var top    = (screen.height - height)/2;
 var params = 'width='+width+', height='+height;
 params += ', top='+top+', left='+left;
 params += ', directories=no';
 params += ', location=no';
 params += ', menubar=no';
 params += ', resizable=no';
 params += ', scrollbars=no';
 params += ', status=no';
 params += ', toolbar=no';
 newwin=window.open(url,name, params);
 if (window.focus) {newwin.focus()}
 return false;
}

function slideshow(url) {
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