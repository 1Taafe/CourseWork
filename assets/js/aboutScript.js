let menuButton = document.getElementsByClassName("menuButton")[0];
let menuRow = document.getElementsByClassName("menuRow")[0];
menuButton.onclick = () => {
    menuButton.classList.toggle("activeMenuButton");
    menuRow.classList.toggle("activeMenuRow");
}

let prefs = document.getElementsByClassName('pref');
let aboutBox = document.getElementsByClassName('aboutBox');
let comms = document.getElementsByClassName("comm");
let sendComm = document.getElementsByClassName("sendComm");
aboutBox = aboutBox[0];
sendComm = sendComm[0];

let commRows = document.getElementsByClassName("commRow");
let titleRows = document.getElementsByClassName("titleRow");
let prefRows = document.getElementsByClassName("prefRow")
let commRow = document.getElementsByClassName("addCommRow")[0];
let closeForm = document.getElementById("closeComm");
let commForm = document.getElementsByClassName("commForm")[0];

let commBox = document.getElementsByClassName("commBox")[0];

sendComm.onclick = () => {
  for(let i = 0; i < commRows.length; i++){
    commRows[i].classList.add("displayNone");
  }
  sendComm.classList.add("displayNone");
  commRow.classList.add("activeCommRow")
  commForm.scrollIntoView({
    behavior: "smooth",
    block:    "center" 
 });
}

closeForm.onclick = () => {
  for(let i = 0; i < commRows.length; i++){
    commRows[i].classList.remove("displayNone");
  }
  document.forms.commForm.reset();
  sendComm.classList.remove("displayNone");
  titleRows[1].scrollIntoView({
      behavior: "smooth",
      block:    "start" 
   });
   setTimeout("commRow.classList.remove(\"activeCommRow\")", 500);
  }


var isScrolling = false;
 
    window.addEventListener("scroll", throttleScroll, false);
 
    function throttleScroll(e) {
      if (isScrolling == false) {
        window.requestAnimationFrame(function() {
          scrolling(e);
          isScrolling = false;
        });
      }
      isScrolling = true;
    }
 
    document.addEventListener("DOMContentLoaded", scrolling, false);
 
    function scrolling(e) {
 
      for (var i = 0; i < prefs.length; i++) {
        var prefItem = prefs[i];
 
        if (isPartiallyVisible(prefItem)) {
          prefItem.classList.add("activePref");
        } else {
          prefItem.classList.remove("activePref");
        }
      }

      for (var i = 0; i < comms.length; i++) {
        var commItem = comms[i];
 
        if (isPartiallyVisible(commItem)) {
          commItem.classList.add("activePref");
        } else {
          commItem.classList.remove("activePref");
        }
      }

      if(isPartiallyVisible(aboutBox)){
          aboutBox.classList.add("activeBox");
      }
      else{
        aboutBox.classList.remove("activeBox");
      }

      if(isPartiallyVisible(sendComm)){
        sendComm.classList.add("activePref");
      }
      else
      {
      sendComm.classList.remove("activePref");
      }
      
    }
 
    function isPartiallyVisible(el) {
      var elementBoundary = el.getBoundingClientRect();
 
      var top = elementBoundary.top;
      var bottom = elementBoundary.bottom;
      var height = elementBoundary.height;
 
      return ((top + height >= 0) && (height + window.innerHeight >= bottom));
    }
 
    function isFullyVisible(el) {
      var elementBoundary = el.getBoundingClientRect();
 
      var top = elementBoundary.top;
      var bottom = elementBoundary.bottom;
 
      return ((top >= 0) && (bottom <= window.innerHeight));
    }