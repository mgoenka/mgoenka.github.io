// JavaScript File

//This funciton sets the Active link cell border to invisible and makes the link 'unclickable'
function SetactiveTopLink( linkID )
{
   var activeTopLink;
   
   activeTopLink = document.getElementById( linkID + 'Link' );
   activeTopLink.style.display = "none";
   activeTopLink.parentNode.style.borderBottom = '0px';
   activeTopLink.parentNode.style.backgroundColor = '#990000';
   activeTopLink.parentNode.style.backgroundImage = "url('http://gthb.usc.edu/Images/NAV_image.jpg')";
   activeTopLink.parentNode.style.backgroundRepeat = 'repeat-x';
   activeTopLink.parentNode.style.backgroundPosition = 'bottom';   
   
   document.getElementById( linkID + 'Span' ).style.display="";
}

function SetactiveSubmenuLink( linkID )
{
   var activeSubmenuLink;

   activeSubmenuLink = document.getElementById( linkID + 'Link' );
   activeSubmenuLink.style.display = "none";
   
   document.getElementById( linkID + 'Span' ).style.display="";
}