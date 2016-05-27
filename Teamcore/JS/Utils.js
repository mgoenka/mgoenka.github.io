var xmlHTTP
var FORMNAME=""
var xml
var numb = '0123456789';
var lwr = 'abcdefghijklmnopqrstuvwxyz';
var upr = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
var strPath;
var strXML
var callFunc=false;

function Clear(start,endNumber)
{
    var counter=start

    var strID=""

    while(counter <= endNumber)
    {
        strID="component"+counter
        SetValue(strID,"")
        counter++
    }
}

function SetValue(strID,strValue)
{
    var obj=document.getElementById(strID)

    switch(obj.type)
    {
        case 'text':
            obj.value=strValue
        break;
        case 'textarea':
            obj.value=strValue
        case 'checkbox':
            obj.checked=(strValue==0 | strValue=="" ) ? false : true
        break;
        case 'radio':
            obj.checked=(strValue==0 | strValue=="" ) ? false : true
        break;
        case 'hidden':
            obj.value=strValue
        break;
        case 'select-one':
            LoadSelectedValue(obj,strValue)
        break;
        default:
        return -1
    }
}

function LoadSelectedValue(obj,strValue)
{
    var counter=0

    while(counter<obj.options.length)
    {
        if(obj.options[counter].value==strValue)
        {
            obj.options[counter].selected = true
            break;
        }
        counter++
    }
}

function GetValue(strID)
{
    var obj=document.getElementById(strID)

    switch(obj.type)
    {
        case 'text':
            return obj.value
        break;

        case 'textarea':

            return obj.value
            break;
        case 'checkbox':
            return ((obj.checked==true)? 1 : 0)
        break;
        case 'radio':
            return ((obj.checked==true)? obj.value : "")
        break;
        case 'hidden':
            return obj.value
        break;
        case 'select-one':
            return obj.value
        default:
        return -1
    }
}

function getAjaxHandle()
{

  var xmlHttp1;
  try
    {
    // Firefox, Opera 8.0+, Safari, IE 7
    xmlHttp1 = new XMLHttpRequest()

    }
  catch (e)
    {
    // Internet Explorer 6
    try
      {
      xmlHttp1=new ActiveXObject("Msxml2.XMLHTTP");
      }
    catch (e)
      {
      try
        { // Internet Explorer 5.5
        xmlHttp1=new ActiveXObject("Microsoft.XMLHTTP");
        }
      catch (e)
        {
        alert("Your browser does not support AJAX!");
        return false;
        }
      }
    }
    //alert(xmlHttp1)
    return xmlHttp1;
 }

 function ValidateIP(strInput)
 {
    if(!(typeof strInput=="undefined"))
    {
        var intCounter=0
        if(!specialChars(strInput))
        {
            return false
        }
//        while( intCounter < strInput.length)
//        {
////            if (strInput.charAt(intCounter) == "&" | strInput.charAt(intCounter) == "'" | strInput.charAt(intCounter) == "=" | strInput.charAt(intCounter) == ">" | strInput.charAt(intCounter) == "<" | strInput.charAt(intCounter) == "*" | strInput.charAt(intCounter) == "%")
////            {
////                return false
////            }
//            if(specialChars(
//            intCounter += 1
//        }
        return true
     }
     else
     {
        return false
     }

 }


 function DisplayMessage(strFrom,strValue)
 {
    var objTD=document.getElementById("tdError")

    switch(strFrom)
    {
        case "STATUS":
            switch(strValue)
            {
                case "SUCCESS":
                     WriteMessage(objTD,"Candidate Status has been updated.")
                break;

                case "FAILURE":
                     WriteMessage(objTD,"Error occured,please contact the administrator.")
                break;
            }
        break;
        case "ID":
            switch(strValue)
            {
                case "EXISTS":
                    WriteMessage(objTD,"ID already exists!")
                break;
                case "INVALID":
                    WriteMessage(objTD,"Invalid characters in the input.")
                break;
            }

        break;
        case "EMAILID":
            switch(strValue)
            {
                case "INVALID":
                    WriteMessage(objTD,"Invalid email id.")
                break;
            }
        break;
        case "INVALID":
            switch(strValue)
            {
                case "FNAME":
                    WriteMessage(objTD,"Please enter a valid First Name.")
                break;
                case "LNAME":
                    WriteMessage(objTD,"Please enter a valid Last Name.")
                break;
                case "EMAILID":
                    WriteMessage(objTD,"Please enter a valid Email address.")
                break;
                case "FAC1":
                    WriteMessage(objTD,"Invalid name input for Faculty #1.")
                break;
                case "FAC2":
                    WriteMessage(objTD,"Invalid name input for Faculty #2.")
                break;
                case "POSITION":
                    WriteMessage(objTD,"Invalid option for position.")
                break;
                case "ZEROSELECTED":
                    WriteMessage(objTD,"Please select atleast one and atmost three research areas.")
                break;
                case "NAME":
                    WriteMessage(objTD,"Please enter a valid Name.")
                break;
                case "PHONENUMBER":
                    WriteMessage(objTD,"Please enter a valid Phone Number.")
                break;
                case "VALUE":
                    WriteMessage(objTD,"Please ensure there are no special characters.")
                break;
                case "GPA":
                    WriteMessage(objTD,"Please ensure GPA is in x.xx format.")
                break;
                case "DATE":
                    WriteMessage(objTD,"Please enter the date in mm/dd/yyyy format.")
                break;
                case "CANDIDATEEXISTS":
                    WriteMessage(objTD,"An application with that email address already exists. If you would like to update your application please contact cswebmaster@usc.edu.")
                break;
                case "ALREADY_SELECTED":
                    WriteMessage(objTD,"Please ensure that you select a different project.")
                break;
                case "EMAILIDWHITESPACE":
                    WriteMessage(objTD,"No spaces are allowed in the email address.")
                break;
                default:
                    WriteMessage(objTD,"Please ensure there are no special characters.")
                break;
            }
        break;

        case "POSITION":
            switch(strValue)
            {
                case "FAILURE":
                     WriteMessage(objTD,"Error occured while writing to the database. Please try again.")
                break;
            }
        break;

        case "MANDATORY":
            switch(strValue)
            {
                case "FNAME":
                    WriteMessage(objTD,"Please enter your first name.")
                break;
                case "LNAME":
                    WriteMessage(objTD,"Please enter your last name.")
                break;
                case "EMAILID":
                    WriteMessage(objTD,"Please enter your email address.")
                break;
                case "PREFIX":
                    WriteMessage(objTD,"Please enter your prefix.")
                break;

                case "ADDRESS":
                    WriteMessage(objTD,"Please enter your address.")
                break;
                case "CITY":
                    WriteMessage(objTD,"Please enter your city.")
                break;
                case "STATE":
                    WriteMessage(objTD,"Please enter your state.")
                break;
                case "ZIP":
                    WriteMessage(objTD,"Please enter your ZIP Code.")
                break;
                case "DEGREE":
                    WriteMessage(objTD,"Please enter your degree.")
                break;
                case "REFERENCES":
                    WriteMessage(objTD,"Please give atleast three references.")
                break;

                case "EMPTYXML":
                    WriteMessage(objTD,"Please enter your details.")
                break;
                case "REFERENCESUNFILLED":
                    WriteMessage(objTD,"Please enter all the details for the reference.")
                break;
                case "CITIZENSHIP":
                    WriteMessage(objTD,"Please select residency status.")
                break;

            }
        break;

        case "RAREA":
            switch(strValue)
            {
                case "FOURSELECTED":
                    WriteMessage(objTD,"Please select only three research areas.")
                break;
                case "NOFNAME":
                    WriteMessage(objTD,"Please complete the registration form before filling this form.")
                break;
                case "FAILURE":
                    WriteMessage(objTD,"Unexpected failure encountered. Please try again or if the error persists, please contact the administrator.")
                break;
            }
        break;

        case "INFO":
            switch(strValue)
            {
               case "NOFNAME":
                    WriteMessage(objTD,"Please complete the registration form before filling this form.")
                break;
                case "FAILURE":
                    WriteMessage(objTD,"Unexpected failure encountered. Please try again or if the error persists, please contact the administrator.")
                break;
            }
        break;

        case "STMT":
            switch(strValue)
            {
               case "RESUME":
                    WriteMessage(objTD,"Please upload your resume.")
                break;
                case "COVER_LETTER":
                    WriteMessage(objTD,"Please upload your cover letter.")
                break;
            }
        break;

    }
 }

function WriteMessage(obj,strMessage)
{
    obj.innerText=strMessage
    obj.textContent=strMessage
}

function EraseMessage(obj)
{
    obj.innerText=""
    obj.textContent=""
}

function Position()
{
this.x=""
this.y=""
}

function ObjectCoOrdinates(strObjectName)
{
        var el = document.getElementById(strObjectName)

        var totalOffsetTop = 0;
        var totalOffsetLeft=0
        var pos=new Position()
        if (el==null)
        {
         pos.x=-1
         pos.y=-1
         return pos
        }
        while (el != null)
        {
            totalOffsetTop += el.offsetTop;
            totalOffsetLeft+= el.offsetLeft;
            el = el.offsetParent;
        }
        pos.y=totalOffsetTop
        pos.x=totalOffsetLeft
        return pos
}


  function RelocateAndDisplay(strFrom,strValue,strID,optX,optY)
  {
        DisplayMessage(strFrom,strValue)
        var pos=ObjectCoOrdinates(strID)
        var objDIV=document.getElementById("divError")


        pos.x+=optX+150
        pos.y+=optY

        objDIV.style.position="absolute"
        objDIV.style.top=pos.y+"px"
        objDIV.style.left=pos.x+"px"

        objDIV.style.display=""

  }

  function IsMandatoryEmpty(arrMandatory,strID)
  {
        var counter=0

        while(counter< arrMandatory.length)
        {
            if(arrMandatory[counter]==strID)
            {
                if(document.getElementById(strID).value=="")
                {
                    return false
                }
            }
            counter++
        }

        return true
  }

  function GetCredentials()
  {
    var str=""
    var titles=new Array()

    titles[titles.length]="FNAME"
    titles[titles.length]="LNAME"
    titles[titles.length]="EMAILID"
    var counter=0
    str+="<CREDENTIALS>"
    while(counter< titles.length)
    {

        str+="<"+titles[counter]+">"+credentials[counter]+"</"+titles[counter]+">"
        counter++
    }
    str+="</CREDENTIALS>"
    return str
  }

  function SetCredentials()
  {
    if(document.getElementsByName("FNAME")[0].value!="")
    {
       credentials[0]= document.getElementsByName("FNAME")[0].value
       credentials[1]= document.getElementsByName("LNAME")[0].value
       credentials[2]= document.getElementsByName("EMAILID")[0].value
    }
  }
function isValid(parm,val) {
if (parm == "") return true;
for (i=0; i< parm.length; i++) {

if (val.indexOf(parm.charAt(i)) == -1) return false;
}
return true;
}

function isNum(parm) {return isValid(parm,numb);}
function isAlpha(parm) {return isValid(parm,lwr+upr);}


function CheckPhoneNumber(value,id)
{

    if(!isNum(value))
    {
        document.getElementById(id).style.border="2px solid #990000"
        RelocateAndDisplay("INVALID","PHONENUMBER",id,30,0)
    }
    else
    {
        document.getElementById(id).style.border="1px solid #000000"
        EraseMessage(document.getElementById("tdError"))
    }
}


function CheckEmailID(value,id)
{

    if(!specialChars(value))
    {
        HighlightComponent(document.getElementById(id))
        RelocateAndDisplay("INVALID","EMAILID",id,30,0)

        return false
    }

    else
    {
        if(value=="")
        {
            UnHighlightComponent(document.getElementById(id))
            EraseMessage(document.getElementById("tdError"))
            return true
        }
        if(value.indexOf("@")==-1)
        {
            HighlightComponent(document.getElementById(id))
            RelocateAndDisplay("INVALID","EMAILID",id,30,0)

            return false
        }
        if(value.indexOf(" ")!=-1)
        {

            HighlightComponent(document.getElementById(id))
            RelocateAndDisplay("INVALID","EMAILID",id,30,0)

            return false
        }
        UnHighlightComponent(document.getElementById(id))
        EraseMessage(document.getElementById("tdError"))
        return true
    }
}

function specialChars(value)
{
    var arrChars=new Array()
    arrChars[arrChars.length]="`"
    arrChars[arrChars.length]="~"
    arrChars[arrChars.length]="!"
    //arrChars[arrChars.length]="@"
    arrChars[arrChars.length]="#"

    arrChars[arrChars.length]="$"
    arrChars[arrChars.length]="%"
    arrChars[arrChars.length]="^"
    arrChars[arrChars.length]="&"
    arrChars[arrChars.length]="*"
    arrChars[arrChars.length]="("
    arrChars[arrChars.length]=")"
    //arrChars[arrChars.length]="_"
    //arrChars[arrChars.length]="-"
    arrChars[arrChars.length]="+"
    arrChars[arrChars.length]="="
    arrChars[arrChars.length]="{"
    arrChars[arrChars.length]="}"
//    arrChars[arrChars.length]="["
//
//    arrChars[arrChars.length]="]"
    arrChars[arrChars.length]=";"
    //arrChars[arrChars.length]=":"
    arrChars[arrChars.length]="'"
    arrChars[arrChars.length]='"'
    arrChars[arrChars.length]=">"
    arrChars[arrChars.length]="<"
    //arrChars[arrChars.length]=","

    arrChars[arrChars.length]="|"
    arrChars[arrChars.length]="?"

    var counter=0;

    while(counter< arrChars.length)
    {
        if(value.indexOf(arrChars[counter])!=-1)
        {
            return false
        }
        counter++
    }
    return true
}

function HighlightComponent(obj)
{
    obj.focus()
    obj.style.border="2px solid #FF0000"
}

function UnHighlightComponent(obj){

obj.style.border="1px solid #CCCCCC";
}


function Next(id)
{
    var link=parseInt(document.getElementById(id).getAttribute('LINK'),10)+1
    ShowHide(link)
}

function Prev(id)
{
    var link=parseInt(document.getElementById(id).getAttribute('LINK'),10)-1
    ShowHide(link)
}


function GetText(tag,value)
{
    if(callFunc==false)
    {
        return value
    }
    var arrObj=document.getElementsByName(tag)
    var counter=0

    while(counter<arrObj.length)
    {
        switch(arrObj[counter].type)
        {
            case 'text':
                {
                    if(arrObj[counter].value==value)
                    {
                        return value
                    }
                }

            break;
            case 'select-one':
            {
                if(arrObj[counter].value==value)
                {
                    return arrObj[counter].options[arrObj[counter].options.selectedIndex].text
                }
            }
            break;
            default:
            return ""
        }
        counter++
    }

}



function ConvertToXMLDom(xml)
{
    var xmlDoc

    //UGLY HACK

//    if(window.ActiveXObject)
//    {
//        xmlDoc=new ActiveXObject("Microsoft.XMLDOM");
//        xmlDoc.async=false;
//        xmlDoc.loadXML(xml);
//        return xmlDoc
//    }
//    else
    {
//        xmlDoc=new DomParser()
//        return xmlDoc.parseFromString(xml,"text/xml")
        var xmlhttp = getAjaxHandle()
        var url=strPath+"/Submit/Submit.aspx?mode=GETXML"
        xmlhttp.open("POST",url,false)
        xml=Trim(xml)
        xmlhttp.send(xml)
        while(xmlhttp.readyState!=4)
        {
        }
//        debugger
        return xmlhttp.responseXML
    }
}


function Trim(stringToTrim)
{
    return stringToTrim.replace(/^\s+|\s+$/g,"")
}


function DrawDummy(id)

{
    var obj=document.getElementById(id)
    var objParent
    var objDirt=document.createElement("div")
    objDirt.id="divDummy"
    objParent=obj.parentElement || obj.parentNode
    objParent.appendChild(objDirt)
    objParent.removeChild(obj)
    document.body.appendChild(obj)
}
function RemoveDummy(id)
{
    var objDirt=document.getElementById("divDummy")
    var objParent=objDirt.parentElement || objDirt.parentNode

    objParent.removeChild(objDirt)
    objParent.appendChild(document.getElementById(id))
}

function CloseWindow(id)
{
    BlurBackground()
    document.getElementById(id).style.display="none"
    RemoveDummy(id)
}

function BlurBackground()
{


    var objBlockUI=document.getElementById("blockUI")
    var isVisible=objBlockUI.style.display
    var objTable=document.getElementById("tblBlockUI")
    var pos=ObjectCoOrdinates("tblBlockUI")


    objBlockUI.style.position="fixed"
    objBlockUI.style.top="0px"
    objBlockUI.style.left="0px"

    var dimensions=GetDimensions()
    objBlockUI.style.zIndex=100
    objBlockUI.style.height=dimensions.y+"px"
    objBlockUI.style.width=dimensions.x+"px"
    //objBlockUI.style.height="825px"

   // objBlockUI.style.width="780px"

    if(isVisible=="none")
    {

        objBlockUI.style.display=""
    }
    else
    {
         objBlockUI.style.display="none"
    }

}
function GetDimensions()
{
    var pos=new Position()

    if (typeof event!="undefined")
    {

        pos.x=document.documentElement.scrollWidth
        pos.y=document.documentElement.offsetHeight
    }
//    else if(BrowserDetect.browser=="Safari")
//    {
//        pos.x=window.innerWidth
//        pos.y=window.innerHeight
//    }
    else
    {

        pos.x=document.documentElement.scrollWidth
        pos.y=document.documentElement.scrollHeight
    }
    return pos
}

