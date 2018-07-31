// JavaScript Document
/***********************************************
* Bookmark site script- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

/* Modified to support Opera */
function bookmarksite(title,url){
if (window.sidebar) // firefox
	window.sidebar.addPanel(title, url, "");
else if(window.opera && window.print){ // opera
	var elem = document.createElement('a');
	elem.setAttribute('href',url);
	elem.setAttribute('title',title);
	elem.setAttribute('rel','sidebar');
	elem.click();
} 
else if(document.all)// ie
	window.external.AddFavorite(url, title);
}

/**************************************************
* Created by C.Learoyd for learoyds.com 
^ This notice MUST stay with this code for legal use
^ Visit www.learoyds.com for more information
***************************************************/

function SignIn() {
    /*if (document.title = "Sign In") {*/
        changeStyle("CSS/landingpage.css");
   /* }*/
}


	function rfinal()
{
	var iNo = 0;
	var x = 1200;
    var wait2 = window.setInterval(function()
	{	
	   
	
		if (iNo < 225)
		{
			   
			    iNo = iNo + 1;
				var i = "Assets/Learoyds-LaptopSmall";
	            var png = ".png";
	            var JSdiv = document.getElementById("JSdiv");
                var img = document.createElement("img");
	            img.setAttribute("src", (i + png));
			    img.setAttribute("class", "imageStyle");
	            img.style.top = "20px";
				img.style.left =  x + "px";
				JSdiv.appendChild(img);
			    x = x - 5;
				 if (iNo > 0)
				{
					 JSdiv.removeChild(JSdiv.firstChild);
				}
	        
		}
		  else
		  {
		      clearInterval(wait2);
			    var T = "Assets/Learoyds-Laptop";
	            var png = ".png";
				var JSdiv = document.getElementById("JSdiv");
				var img = document.createElement("img");
				img.setAttribute("src", (T + png));
			    img.setAttribute("class", "imageStyle1");
	            img.style.top = "5px";
				img.style.left =  (x - 5) + "px";
				JSdiv.appendChild(img);
				JSdiv.removeChild(JSdiv.firstChild);
								
		  }
	}, 10);
	 
}

function changeStyle(cssFile) {
	var _head = document.getElementsByTagName('head')[0];
        
        var newlink = document.createElement('link');
        newlink.setAttribute("rel", "stylesheet");
        newlink.setAttribute("type", "text/css");
        newlink.setAttribute("href", cssFile);

        _head.appendChild(newlink);
}

function screenSize()
{
	
    if("stylesheets")
	{
		if (screen.availWidth < 1000)
	    {
	      var mySheet;
	      mySheet	= document.getElementsByTagName("link");
	      for (i = 0; i < mySheet.length; i++ )
	      {
            if ((mySheet[i].rel.indexOf( "stylesheet" ) != -1) && mySheet[i].title)
	        {
              mySheet[i].disabled = true ;
              if (mySheet[i].title == "cssMob")
	          {
                mySheet[i].disabled = false ;
              }
            }
          }
	    }
	    else
	    {
	      var mySheet;
	      mySheet	= document.getElementsByTagName("link");
	      for (i = 0; i < mySheet.length; i++ )
	      {
            if ((mySheet[i].rel.indexOf( "stylesheet" ) != -1) && mySheet[i].title)
	        {
              mySheet[i].disabled = true ;
              if (mySheet[i].title == "css")
	          {
                mySheet[i].disabled = false ;
              }
            }
          }
	    }
   }
   else
   {
	   if(screen.width < 1000)
	   {
		   changeStyle("CSS/learoydsMob.css");	
	   }
	   else
	   {
		   changeStyle("CSS/learoyds.css");
	   }
   }
}