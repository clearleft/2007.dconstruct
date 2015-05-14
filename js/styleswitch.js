// Stylesheet switcher
function RARsetActiveStyleSheet(myStyle, myForm) {
       myForm.submit()
}

// switch styles

function setActiveStyleSheet(title, filename, myForm) {
       title = title.replace(/\+/g, " ");
       if (document.getElementsByTagName) {
               var i, a, main;
               for (i=0; (a = document.getElementsByTagName("link")[i]); i++) {
                       if (a.getAttribute("rel") &&
                                       a.getAttribute("rel").indexOf("style") != -1 &&
                                       a.getAttribute("title")) {
                               a.disabled = true;
                               if(a.getAttribute("title") == title) a.disabled = false;
                       }
               }
               createCookie("styletitle", title, 0);
               return false;
       } else {
               return true;
       }
}

function getActiveStyleSheet() {       if (document.getElementsByTagName) {
               var i, a;
               for (i=0; (a = document.getElementsByTagName("link")[i]); i++) {
                       if (a.getAttribute("rel") &&
                                       a.getAttribute("rel").indexOf("style") != -1 &&
                                       a.getAttribute("title") &&
                                       !a.disabled
                                       ) return a.getAttribute("title");
                       }
               return null;
       }
}

function getPreferredStyleSheet() {
       var i, a;
       for (i=0; (a = document.getElementsByTagName("link")[i]); i++) {
               if (a.getAttribute("rel") &&
                               a.getAttribute("rel").indexOf("style") != -1 &&
                               a.getAttribute("rel").indexOf("alt") == -1 &&
                               a.getAttribute("title")
                               ) return a.getAttribute("title");
       }
       return null;
}

function initLinks() {
	var gant2Li = document.getElementById('gant2');
	var gant2Link = gant2Li.getElementsByTagName('a')[0]; // assume one link per item
	gant2Link.onclick = function(e) {
		return setActiveStyleSheet('May', 'may');
	}
	gant2Link.onfocus = function(e) {
		this.blur();
	}
	var gant3Li = document.getElementById('gant3');
	var gant3Link = gant3Li.getElementsByTagName('a')[0]; // assume one link per item
	gant3Link.onclick = function(e) {
		return setActiveStyleSheet('June', 'june');
	}
	gant3Link.onfocus = function(e) {
		this.blur();
	}

	var gant4Li = document.getElementById('gant4');
	var gant4Link = gant4Li.getElementsByTagName('a')[0]; // assume one link per item
	gant4Link.onclick = function(e) {
		return setActiveStyleSheet('July', 'july');
	}
	gant4Link.onfocus = function(e) {
		this.blur();
	}

	var gant5Li = document.getElementById('gant5');
	var gant5Link = gant5Li.getElementsByTagName('a')[0]; // assume one link per item
	gant5Link.onclick = function(e) {
		return setActiveStyleSheet('August', 'august');
	}
	gant5Link.onfocus = function(e) {
		this.blur();
	}

}

function createCookie(name,value,days) {
       if (days) {
               var date = new Date();
               date.setTime(date.getTime()+(days*24*60*60*1000));
               var expires = "; expires="+date.toGMTString();
       }
       else expires = "";
       document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
       var nameEQ = name + "=";
       var ca = document.cookie.split(';');
       for(var i=0;i < ca.length;i++) {
               var c = ca[i];
               while (c.charAt(0)==' ') c = c.substring(1,c.length);
               if (c.indexOf(nameEQ) == 0) return c.substring
(nameEQ.length,c.length);
       }
       return null;
}

function testCookies() {
       createCookie("test","ok",1);
       if (readCookie("test")) {
               return true;
       } else {
               return false;
       }
}


addLoadEvent(function(e) {
       initLinks();
       var cookie = readCookie("styletitle");
       var title = (cookie != 'null') ? cookie : getPreferredStyleSheet();
       if(title) setActiveStyleSheet(title, '', false);
});